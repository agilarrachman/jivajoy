<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class AdminCustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.datacustomer', [
            "active" => "Customer",
            'customers' => User::where('role', 'Customer')->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.createcustomer', [
            "active" => "Customer"
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
            'foto_profil' => 'required|image|file|max:5000',
            'nama' => 'required|string|max:255',
            'username' => 'required|string|max:255||unique:users,username',
            'jenis_kelamin' => 'required|string|max:255',
            'no_hp' => 'required|string|max:15',
            'email' => 'required|email:dns|unique:users,email',
            'password' => 'required|string|min:3|max:8',
            'role' => 'required|in:Admin,Customer'
        ]);

        if ($request->file('foto_profil')) {
            $validatedData['foto_profil'] = $request->file('foto_profil')->store('foto_profil', 'public');
        }

        $validatedData['password'] = Hash::make($validatedData['password']);

        User::create($validatedData);

        return redirect('/dashboard/customers')->with('success', 'Data customer berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $customer)
    {
        return view('admin.detailcustomer', [
            "active" => "Customer",
            'customer' => $customer
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $customer)
    {
        return view('admin.editcustomer', [
            "active" => "Customer",
            'customer' => $customer
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $customer)
    {
        $rules = [
            'nama' => 'required|string|max:255',
            'jenis_kelamin' => 'required|string|max:255',
            'no_hp' => 'required|string|max:15',
            'role' => 'required|in:Admin,Customer',
        ];

        // Conditional validation for email and username
        if ($request->email !== $customer->email) {
            $rules['email'] = 'required|email:dns|unique:users,email';
        }
        if ($request->username !== $customer->username) {
            $rules['username'] = 'required|string|max:255|unique:users,username';
        }

        // Validate input data
        $validatedData = $request->validate($rules);

        // Jika ada upload foto profil baru
        if ($request->file('foto_profil')) {
            // Simpan foto baru dan hapus foto lama (jika ada)
            if ($customer->foto_profil) {
                Storage::delete('public/' . $customer->foto_profil);
            }
            $validatedData['foto_profil'] = $request->file('foto_profil')->store('foto_profil', 'public');
        }

        // Update the user record with the validated data
        User::where('id', $customer->id)->update($validatedData);

        // Redirect back to the profile page with a success message
        return redirect('/dashboard/customers')->with('success', 'Data customer berhasil diupdate!');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $customer)
    {
        // Hapus foto profil user jika ada
        if ($customer->foto_profil) {
            Storage::disk('public')->delete($customer->foto_profil);
        }

        // Hapus data user dari database
        $customer->delete();

        // Redirect ke halaman depan dengan pesan sukses
        return redirect('/dashboard/customers')->with('success', 'Akun customer telah berhasil dihapus!');
    }
}
