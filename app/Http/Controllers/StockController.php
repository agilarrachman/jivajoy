<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\User;
use App\Models\Stock;
use Illuminate\Http\Request;

class StockController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $stocks = Stock::with(['product', 'admin'])->get();

        return view('admin.ishow-stock', compact('stocks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.createproduk', [
            'active' => 'Produk',
            'products' => Product::all(),
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
            'id_admin' => 'required',
            'id_product' => 'required',
            'qty' => 'required|integer|min:0',
        ]);

        // Cari produk yang terkait dengan id_product
        $product = Product::findOrFail($validatedData['id_product']);

        // Tambahkan jumlah stok yang ada di produk dengan qty yang ditambahkan
        $product->increment('stok', $validatedData['qty']);

        // Simpan data stok ke tabel stocks
        Stock::create($validatedData);

        // Redirect menggunakan varian produk, bukan id produk
        return redirect("/dashboard/products/{$product->varian}")->with('success', 'Stock berhasil ditambahkan!');
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(Stock $stock)
    {
        return $stock;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(Stock $stock)
    {
        return view('admin.editproduk', [
            'active' => 'Produk',
            'stock' => $stock,
            'products' => Product::all(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Stock $stock)
    {
        // Validasi data yang masuk
        $validatedData = $request->validate([
            'id_admin' => 'required',
            'id_product' => 'required',
            'qty' => 'required|integer|min:0',
        ]);

        // Cari produk lama yang terkait dengan stok
        $oldProduct = Product::findOrFail($stock->id_product);

        // Cari produk baru berdasarkan id_product yang baru
        $newProduct = Product::findOrFail($validatedData['id_product']);

        // Hitung selisih qty lama dan baru
        $difference = $validatedData['qty'] - $stock->qty;

        // Jika produk yang terkait tidak berubah, update stoknya langsung
        if ($oldProduct->id == $newProduct->id) {
            // Update stok produk yang sama
            $newProduct->increment('stok', $difference);
        } else {
            // Jika produk berbeda, kurangi stok dari produk lama
            $oldProduct->decrement('stok', $stock->qty);

            // Tambahkan stok ke produk baru
            $newProduct->increment('stok', $validatedData['qty']);
        }

        // Perbarui data stok di tabel stocks
        $stock->update($validatedData);

        // Redirect menggunakan varian produk yang baru
        return redirect("/dashboard/products/{$newProduct->varian}")->with('success', 'Data Stok berhasil diperbarui!');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(Stock $stock)
    {
        // Cari produk yang terkait dengan stok yang akan dihapus
        $product = Product::findOrFail($stock->id_product);

        // Kurangi stok produk dengan jumlah qty yang dihapus
        $product->decrement('stok', $stock->qty);

        // Hapus data stok dari database
        $stock->delete();

        // Redirect ke halaman produk terkait dengan pesan sukses
        return redirect("/dashboard/products/{$product->varian}")->with('success', 'Stock berhasil dihapus!');
    }
}
