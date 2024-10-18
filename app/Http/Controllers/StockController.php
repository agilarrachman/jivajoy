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
            'admin' => User::where('id', auth()->user()->id)->first(),
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

        Stock::create($validatedData);

        return redirect("/dashboard/products/{$validatedData['id_product']}")->with('success', 'Stock berhasil ditambahkan!');
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
        //
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
        // Define validation rules for the fields
        $rules = [
            'nama' => 'required|string|max:255',
            'jenis_kelamin' => 'required|string|max:255',
            'no_hp' => 'required|string|max:15',
            'role' => 'required|in:Admin,User'
        ];

        // Conditional validation for email and username
        if ($request->email !== $stock->email) {
            $rules['email'] = 'required|email|unique:users,email';
        }
        if ($request->username !== $stock->username) {
            $rules['username'] = 'required|string|max:255|unique:users,username';
        }

        // Validate input data
        $validatedData = $request->validate($rules);

        // Update the user record with the validated data
        Stock::where('id', $stock->id)->update($validatedData);

        // Redirect back to the profile page with a success message
        return redirect('/profile')->with('success', 'Profile has been updated!');
    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(Stock $stock)
    {
        // Ambil user yang sedang login
        $currentUser = auth()->user();

        // Pastikan user yang sedang login sama dengan user yang akan dihapus
        if ($currentUser->id !== $stock->id) {
            return response()->json(['error' => 'Unauthorized'], 403);
        }

        // Hapus foto profil user jika ada
        // if ($user->foto_profil) {
        //     Storage::disk('public')->delete($user->foto_profil);
        // }

        // Hapus data user dari database
        $stock->delete();

        // Redirect ke halaman depan dengan pesan sukses
        return redirect('/')->with('deleteAccountSuccess', 'Your account has been deleted successfully.');
    }
}
