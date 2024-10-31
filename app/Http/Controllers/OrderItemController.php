<?php

namespace App\Http\Controllers;

use App\Models\OrderItem;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrderItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {}

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreOrderItemRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validasi input dari form
        $validatedData = $request->validate([
            'id_product' => 'required|exists:products,id',
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
            'id_customer' => auth()->id(),
            'total_harga' => $validatedData['total_harga'],
            'status' => 'Belum Dibayar',
            'nama_penerima' => $validatedData['nama_penerima'],
            'no_wa' => $validatedData['no_wa'],
            'link_gmaps' => $validatedData['link_gmaps'],
            'detail_alamat' => $validatedData['detail_alamat'],
        ]);

        // Simpan data item pesanan ke tabel order_items
        OrderItem::create([
            'id_order' => $order->id,
            'id_product' => $validatedData['id_product'],
            'qty' => $validatedData['qty'],
            'harga' => $validatedData['total_harga'], // Total harga = qty * harga satuan
        ]);

        // Kurangi stok produk
        $product->stok -= $validatedData['qty'];
        $product->save();

        return redirect("/orders/{$kodePesanan}");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\OrderItem  $orderItem
     * @return \Illuminate\Http\Response
     */
    public function show(OrderItem $orderItem)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\OrderItem  $orderItem
     * @return \Illuminate\Http\Response
     */
    public function edit(OrderItem $orderItem)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateOrderItemRequest  $request
     * @param  \App\Models\OrderItem  $orderItem
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, OrderItem $orderItem)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\OrderItem  $orderItem
     * @return \Illuminate\Http\Response
     */
    public function destroy(OrderItem $orderItem)
    {
        //
    }

    public function checkout(Request $request)
    {
        // Ambil data produk dan kuantitas dari request
        $id_product = $request->input('id_product');
        $qty = $request->input('qty');
        $total_harga = $request->input('total_harga');

        // Ambil detail produk dari database berdasarkan ID produk
        $product = Product::find($id_product);

        if (!$product) {
            return redirect()->back()->with('error', 'Produk tidak ditemukan!');
        }

        // Tampilkan halaman input penerima dengan data produk yang dipilih
        return view('checkout-order', [
            "active" => "Product",
            'product' => $product,
            'qty' => $qty,
            'total_harga' => $total_harga,
        ]);
    }

    public function getOrderItemsPerDay()
    {
        // Mengambil jumlah qty order item tiap hari
        $orderItems = DB::table('order_items')
            ->select(DB::raw('DATE(created_at) as date'), DB::raw('SUM(qty) as total_qty'))
            ->groupBy('date')
            ->orderByDesc('date') // Mengurutkan dari yang terbaru
            ->limit(7) // Membatasi hasil maksimal 7
            ->get()
            ->reverse();

        // Siapkan data untuk dikembalikan
        $labels = $orderItems->pluck('date')->map(function($date) {
            return date('d F Y', strtotime($date));
        });        
        $data = $orderItems->pluck('total_qty');

        // Kembalikan data dalam format JSON
        return response()->json([
            'labels' => $labels,
            'data' => $data,
        ]);
    }
}
