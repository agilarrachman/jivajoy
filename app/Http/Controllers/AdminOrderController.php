<?php

namespace App\Http\Controllers;

use App\Models\OrderItem;
use App\Models\Order;
use App\Models\User;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminOrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.datapesanan', [
            "active" => "Pesanan",
            'orders' => Order::with(['orderItems'])->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.createpesanan', [
            'active' => 'Pesanan',
            'products' => Product::where('stok', '>', 0)->get(),
            'customers' => User::where('role', 'Customer')->get(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validasi input dari form
        $validatedData = $request->validate([
            'id_customer' => 'required|exists:users,id',
            'id_product' => 'required|exists:products,id',
            'bukti_pembayaran' => 'image|file|max:5000',
            'qty' => 'required|integer|min:1',
            'total_harga' => 'required|numeric',
            'nama_penerima' => 'required|string|max:255',
            'no_wa' => 'required|string|max:15',
            'link_gmaps' => 'required|string',
            'detail_alamat' => 'required|string',
        ]);

        // Cek stok produk
        $product = Product::find($validatedData['id_product']);
        if ($product->stok < $validatedData['qty']) {
            return redirect()->back()->with('error', 'Stok produk tidak mencukupi!');
        }

        // Generate kode pesanan unik
        $kodePesanan = uniqid('ORDER-');

        // Simpan data pesanan ke tabel orders
        $order = Order::create([
            'kode_pesanan' => $kodePesanan,
            'id_customer' => $validatedData['id_customer'],
            'total_harga' => $validatedData['total_harga'],
            'status' => 'Belum Dibayar',
            'nama_penerima' => $validatedData['nama_penerima'],
            'no_wa' => $validatedData['no_wa'],
            'link_gmaps' => $validatedData['link_gmaps'],
            'detail_alamat' => $validatedData['detail_alamat'],
        ]);

        if ($request->file('bukti_pembayaran')) {
            // Simpan bukti pembayaran baru
            $validatedData['bukti_pembayaran'] = $request->file('bukti_pembayaran')->store('bukti_pembayaran', 'public');

            // Update field bukti_pembayaran di database
            $order->update([
                'bukti_pembayaran' => $validatedData['bukti_pembayaran'],
                'status' => 'Menunggu Konfirmasi Pembayaran',
            ]);
        }

        // Simpan data item pesanan ke tabel order_items
        OrderItem::create([
            'id_order' => $order->id,
            'id_product' => $validatedData['id_product'],
            'qty' => $validatedData['qty'],
            'harga' => $validatedData['total_harga'],
        ]);

        // Kurangi stok produk
        $product->stok -= $validatedData['qty'];
        $product->save();

        return redirect("/dashboard/orders")->with('success', 'Berhasil menambahkan data pesanan!');
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\OrderItem  $orderItem
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        // Return ke view dengan data order
        return view('admin.detailorder', [
            "active" => "Pesanan",
            'order' => $order,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\OrderItem  $orderItem
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        return view('admin.editpesanan', [
            "active" => "Keranjang",
            'order' => $order,
            'products' => Product::where('stok', '>', 0)->get(),
            'customers' => User::where('role', 'Customer')->get()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\OrderItem  $orderItem
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $kode_pesanan)
    {
        // Validasi input dari form
        $validatedData = $request->validate([            
            'bukti_pembayaran' => 'image|file|max:5000',
            'nama_penerima' => 'required|string|max:255',
            'no_wa' => 'required|string|max:15',
            'link_gmaps' => 'required|string',
            'detail_alamat' => 'required|string',
            'status' => 'required|in:Belum Dibayar,Menunggu Konfirmasi Pembayaran,Sedang Dikemas,Sedang Dikirim,Pesanan Selesai', // Pastikan status yang diterima valid
        ]);

        // Temukan order berdasarkan kode_pesanan
        $order = Order::where('kode_pesanan', $kode_pesanan)->firstOrFail();

        // Update data pesanan termasuk status
        $order->update([
            'nama_penerima' => $validatedData['nama_penerima'],
            'no_wa' => $validatedData['no_wa'],
            'link_gmaps' => $validatedData['link_gmaps'],
            'detail_alamat' => $validatedData['detail_alamat'],
            'status' => $validatedData['status'], // Update status di sini
        ]);

        if ($request->file('bukti_pembayaran')) {
            // Simpan bukti pembayaran baru
            $validatedData['bukti_pembayaran'] = $request->file('bukti_pembayaran')->store('bukti_pembayaran', 'public');

            // Update field bukti_pembayaran di database
            $order->update([
                'bukti_pembayaran' => $validatedData['bukti_pembayaran'],
                'status' => 'Menunggu Konfirmasi Pembayaran',
            ]);
        }

        return redirect("/dashboard/orders")->with('success', 'Berhasil memperbarui data pesanan!');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\OrderItem  $orderItem
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
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
        return redirect('/dashboard/orders')->with('success', 'Pesanan Anda telah berhasil dibatalkan!');
    }
}
