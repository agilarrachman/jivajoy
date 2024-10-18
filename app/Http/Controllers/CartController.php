<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;
use App\Http\Requests\UpdateCartRequest;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('cart');
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
        // Validate incoming request data
        // $validatedData = $request->validate([
        //     'id_customer' => 'required',
        //     'id_product' => 'required',
        //     'qty' => 'required|integer|min:0',
        //     'total_harga' => 'required|integer|min:0'
        // ]);

        // Check if a product with the selected variant already exists
        // $existingProduct = Product::where('varian', $validatedData['varian'])->first();

        // if ($existingProduct) {
        //     // If the product exists, update the stock
        //     $existingProduct->stok += $validatedData['stok']; // Increment the existing stock
        //     $existingProduct->save(); // Save the changes

        //     return redirect('/dashboard/produk')->with('success', 'Stok produk berhasil diperbarui!');
        // } else {
        //     // If the product does not exist, set the photo_produk based on the variant
        //     $validatedData['foto_produk'] = $validatedData['varian'] === 'Warm'
        //         ? '/img/Jivajoy Warm.png'
        //         : '/img/Jivajoy Hot.png';

        //     // Create a new product
        //     Product::create(array_merge($validatedData, [
        //         'foto_produk' => $validatedData['foto_produk'],
        //     ]));

        //     return redirect('/dashboard/produk')->with('success', 'Produk berhasil ditambahkan!');
        // }
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCartRequest  $request
     * @param  \App\Models\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCartRequest $request, Cart $cart)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cart $cart)
    {
        //
    }
}
