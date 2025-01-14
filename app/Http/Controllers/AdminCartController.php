<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class AdminCartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.datakeranjang', [
            "active" => "Keranjang",
            'carts' => Cart::with(['customer', 'product'])->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.createkeranjang', [
            'active' => 'Keranjang',
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
        $validatedData = $request->validate([
            'id_customer' => 'required',
            'id_product' => 'required',
            'qty' => 'required|integer|min:0',
            'total_harga' => 'required|integer|min:0',
        ]);

        // Simpan data stok ke tabel stocks
        Cart::create($validatedData);

        // Redirect menggunakan varian produk, bukan id produk
        return redirect("/dashboard/carts")->with('success', 'Berhasil menambahkan data keranjang!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function show(Cart $cart)
    {
        $cart = $cart->load(['customer', 'product']);

        return view('admin.detailkeranjang', [
            "active" => "Keranjang",
            'cart' => $cart,
            'customers' => User::where('role', 'Customer')->get(),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function edit(Cart $cart)
    {
        return view('admin.editkeranjang', [
            "active" => "Keranjang",
            'cart' => $cart,
            'products' => Product::where('stok', '>', 0)->get(),
            'customers' => User::where('role', 'Customer')->get()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cart $cart)
    {
        // Store the old quantity for comparison
        $oldOrderItem = clone $cart;

        // Validate the incoming request data
        $validatedData = $request->validate([
            'id_customer' => 'required',
            'id_product' => 'required',
            'qty' => 'required|integer|min:0',
            'total_harga' => 'required|integer|min:0',
        ]);

        // Find the product
        $product = Product::find($validatedData['id_product']);

        // Check if the product exists
        if (!$product) {
            return redirect()->back()->with('error', 'Produk tidak ditemukan!');
        }

        // Save cart data
        $cart->update($validatedData);

        // Check if qty changed
        if ($validatedData['qty'] != $oldOrderItem->qty) {
            $quantityDifference = $validatedData['qty'] - $oldOrderItem->qty;

            // Ensure stock is sufficient if qty is increasing
            if ($quantityDifference > 0 && $product->stok < $quantityDifference) {
                return redirect()->back()->with('error', 'Stok produk tidak mencukupi!');
            }

            // Update stock for the product
            $product->stok -= $quantityDifference;
            $product->save();
        }

        return redirect("/dashboard/carts")->with('success', 'Berhasil mengupdate data keranjang!');
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
        return redirect("/dashboard/carts")->with('success', 'Data keranjang berhasil dihapus!');
    }
}
