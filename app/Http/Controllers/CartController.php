<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('cart', [
            "active" => "Keranjang",
            'carts' => Cart::where('id_customer', auth()->user()->id)->get(),
            'total_harga' => Cart::where('id_customer', auth()->user()->id)->sum('total_harga')
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCartRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'id_customer' => 'required',
            'id_product' => 'required',
            'qty' => 'required|integer|min:0',
            'total_harga' => 'required|integer|min:0',
        ]);

        // Simpan data stok ke tabel stocks
        Cart::create($validatedData);

        // Redirect menggunakan varian produk, bukan id produk
        return redirect("/carts")->with('success', 'Berhasil menambahkan data keranjang!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function show(Cart $cart)
    {
        return $cart;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function edit(Cart $cart)
    {
        return view('editcart', [
            "active" => "Keranjang",
            'cart' => $cart,
            'products' => Product::where('stok', '>', 0)->get()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCartRequest  $request
     * @param  \App\Models\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cart $cart)
    {
        $validatedData = $request->validate([
            'id_customer' => 'required',
            'id_product' => 'required',
            'qty' => 'required|integer|min:0',
            'total_harga' => 'required|integer|min:0',
        ]);

        // Simpan data stok ke tabel stocks
        $cart->update($validatedData);

        // Redirect menggunakan varian produk, bukan id produk
        return redirect("/carts")->with('success', 'Berhasil mengupdate data keranjang!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cart $cart)
    {
        // Hapus data stok dari database
        $cart->delete();

        // Redirect ke halaman produk terkait dengan pesan sukses
        return redirect("/carts")->with('success', 'Data keranjang berhasil dihapus!');
    }
}
