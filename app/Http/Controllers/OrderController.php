<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('order', [
            "active" => "Pesanan",
            'ordersPending' => Order::where('id_customer', auth()->user()->id)
                ->where('status', '!=', 'Pesanan Selesai') // Pesanan belum selesai
                ->with('orderItems')
                ->get(),
            'ordersCompleted' => Order::where('id_customer', auth()->user()->id)
                ->where('status', 'Pesanan Selesai') // Pesanan selesai
                ->with('orderItems')
                ->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create-order', [
            "active" => "Produk",
            'carts' => Cart::where('id_customer', auth()->user()->id)->get(),
            'total_harga' => Cart::where('id_customer', auth()->user()->id)->sum('total_harga')
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreOrderRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validasi input dari form
        $validatedData = $request->validate([
            'nama_penerima' => 'required|string|max:255',
            'no_wa' => 'required|string|max:15',
            'link_gmaps' => 'required|string',
            'detail_alamat' => 'required|string',
        ]);

        // Ambil semua item dari keranjang pengguna yang sedang login
        $cartItems = Cart::where('id_customer', auth()->id())->get();

        if ($cartItems->isEmpty()) {
            return redirect("/carts")->with('error', 'Keranjang kosong silakan tambah keranjang terlebih dahulu!');
        }

        // Hitung total harga dari semua item di keranjang
        $totalPrice = 0;
        $orderItemsData = [];

        foreach ($cartItems as $cartItem) {
            // Hitung total harga per item
            $totalPrice += $cartItem->total_harga;

            // Cek apakah produk sudah ada di array orderItemsData
            if (isset($orderItemsData[$cartItem->id_product])) {
                // Jika ada, tambahkan kuantitasnya
                $orderItemsData[$cartItem->id_product]['qty'] += $cartItem->qty;
            } else {
                // Jika belum ada, ambil harga dari produk
                $hargaSatuan = $cartItem->total_harga / $cartItem->qty; // Menghitung harga satuan

                // Tambahkan ke array dengan kuantitas awal
                $orderItemsData[$cartItem->id_product] = [
                    'harga' => $hargaSatuan,
                    'qty' => $cartItem->qty,
                ];
            }
        }

        // Generate kode pesanan unik
        $kodePesanan = uniqid('ORDER-');

        // Simpan data pesanan ke tabel orders
        $order = Order::create([
            'kode_pesanan' => $kodePesanan,
            'id_customer' => auth()->id(),
            'total_harga' => $totalPrice,
            'status' => 'Belum Dibayar',
            'nama_penerima' => $validatedData['nama_penerima'],
            'no_wa' => $validatedData['no_wa'],
            'link_gmaps' => $validatedData['link_gmaps'],
            'detail_alamat' => $validatedData['detail_alamat'],
        ]);

        // Simpan item ke tabel order_items dan kurangi stok produk
        foreach ($orderItemsData as $id_product => $item) {
            // Simpan item ke tabel order_items
            OrderItem::create([
                'id_order' => $order->id, // Ganti kode_pesanan dengan id_order
                'id_product' => $id_product,
                'qty' => $item['qty'],
                'harga' => $item['harga'] * $item['qty'], // Simpan total harga (qty * harga satuan)
            ]);

            // Kurangi stok produk sesuai kuantitas yang dipesan
            $product = Product::find($id_product);
            if ($product) {
                $product->stok -= $item['qty']; // Mengurangi stok
                $product->save(); // Simpan perubahan stok
            }
        }

        // Setelah checkout, hapus item dari keranjang
        Cart::where('id_customer', auth()->id())->delete();

        return redirect("/orders/{$kodePesanan}");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        // Return ke view dengan data order
        return view('show-order', [
            "active" => "Pesanan",
            'order' => $order,
        ]);
    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateOrderRequest  $request
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        $validatedData = $request->validate([
            'bukti_pembayaran' => 'required|image|file|max:5000',
        ]);

        // Cek apakah ada file yang diunggah
        if ($request->file('bukti_pembayaran')) {
            // Jika ada bukti pembayaran lama, hapus file lama
            if ($order->bukti_pembayaran) {
                Storage::delete('public/' . $order->bukti_pembayaran);
            }

            // Simpan bukti pembayaran baru
            $validatedData['bukti_pembayaran'] = $request->file('bukti_pembayaran')->store('bukti_pembayaran', 'public');

            // Update field bukti_pembayaran di database
            $order->update([
                'bukti_pembayaran' => $validatedData['bukti_pembayaran'],
                'status' => 'Menunggu Konfirmasi Pembayaran', // Update status setelah bukti pembayaran diunggah
            ]);
        }

        // Redirect kembali ke halaman pesanan dengan pesan sukses
        return redirect("/orders/{$order->kode_pesanan}");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        // Hapus bukti pembayaran jika ada
        if ($order->bukti_pembayaran) {
            Storage::disk('public')->delete($order->bukti_pembayaran);
        }

        // Hapus semua item yang terkait dengan pesanan ini
        $orderItems = OrderItem::where('id_order', $order->id)->get();
        foreach ($orderItems as $item) {
            $item->delete();
        }

        // Hapus pesanan dari database
        $order->delete();

        // Redirect ke halaman dashboard dengan pesan sukses
        return redirect('/orders')->with('success', 'Pesanan Anda telah berhasil dibatalkan!');
    }
}
