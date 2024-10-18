<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class AdminAccountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.dataadmin', [
            "active" => "Admin",
            'admin' => User::where('role', 'Admin')->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.createadmin', [
            "active" => "Admin"
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

        return redirect('/dashboard/admin')->with('success', 'Data admin berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $admin)
    {
        return view('admin.detailadmin', [
            "active" => "Admin",
            'admin' => $admin
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $admin)
    {
        return view('admin.editadmin', [
            "active" => "Admin",
            'admin' => $admin
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $admin)
    {
        $rules = [
            'nama' => 'required|string|max:255',
            'jenis_kelamin' => 'required|string|max:255',
            'no_hp' => 'required|string|max:15',
            'role' => 'required|in:Admin,Customer',
        ];

        // Conditional validation for email and username
        if ($request->email !== $admin->email) {
            $rules['email'] = 'required|email:dns|unique:users,email';
        }
        if ($request->username !== $admin->username) {
            $rules['username'] = 'required|string|max:255|unique:users,username';
        }

        // Validate input data
        $validatedData = $request->validate($rules);

        // Jika ada upload foto profil baru
        if ($request->file('foto_profil')) {
            // Simpan foto baru dan hapus foto lama (jika ada)
            if ($admin->foto_profil) {
                Storage::delete('public/' . $admin->foto_profil);
            }
            $validatedData['foto_profil'] = $request->file('foto_profil')->store('foto_profil', 'public');
        }

        // Update the user record with the validated data
        User::where('id', $admin->id)->update($validatedData);

        // Redirect back to the profile page with a success message
        return redirect('/dashboard/admin')->with('success', 'Data admin berhasil diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $admin)
    {
        // Hapus foto profil user jika ada
        if ($admin->foto_profil) {
            Storage::disk('public')->delete($admin->foto_profil);
        }

        // Hapus data user dari database
        $admin->delete();

        // Redirect ke halaman depan dengan pesan sukses
        return redirect('/dashboard/admin')->with('success', 'Akun admin telah berhasil dihapus!');
    }
}
