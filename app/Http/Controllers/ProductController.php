<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Stock;
use Illuminate\Http\Request;
use App\Http\Requests\UpdateProductRequest;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.dataproduk', [
            "active" => "Produk",
            'products' => Product::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.formproduk');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreProductRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        // Memuat relasi stok terkait dengan produk yang dipilih
        $product->load('stocks.admin');

        // Mendefinisikan variabel active
        $active = "Produk";

        // Simpan varian yang dilihat di session (misalkan varian produk disimpan dalam field `varian`)
        session(['selected_varian' => $product->varian]);

        // Mengambil stok berdasarkan id produk yang dipilih
        $stocks = Stock::where('id_product', $product->id)->get();

        // Buat variabel labels & data untuk grafik
        $labels = [];
        $data = [];

        foreach ($stocks as $stock) {
            $labels[] = $stock->updated_at->format('Y-m-d H:i:s');
            $data[] = $stock->qty;
        }

        // Mengembalikan view dengan data produk, labels, dan data untuk chart
        return view('admin.detailproduk', [
            'product' => $product,
            'active' => $active,
            'labels' => json_encode($labels), // Mengirim dalam bentuk JSON
            'data' => json_encode($data) // Mengirim dalam bentuk JSON
        ]);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProductRequest  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProductRequest $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }

    public function getStocks(Product $product)
    {
        // Mengambil stok berdasarkan id produk yang dipilih
        $stocks = Stock::where('id_product', $product->id)->orderBy('updated_at')->get();

        // Siapkan data untuk dikembalikan
        $labels = $stocks->map(function ($stock) {
            return $stock->updated_at->format('Y-m-d H:i:s');
        });

        $data = $stocks->pluck('qty');

        // Kembalikan data dalam format JSON
        return response()->json([
            'labels' => $labels,
            'data' => $data,
        ]);
    }
}
