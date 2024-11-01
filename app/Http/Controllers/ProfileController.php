<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {}

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

        return redirect('/login')->with('success', 'Registration successfull! Please login');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return $user;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
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
    public function update(Request $request, User $user)
    {
        // Define validation rules for the fields
        $rules = [
            'nama' => 'required|string|max:255',
            'jenis_kelamin' => 'required|string|max:255',
            'no_hp' => 'required|string|max:15',
            'role' => 'required|in:Admin,Customer'
        ];

        // Conditional validation for email and username
        if ($request->email !== $user->email) {
            $rules['email'] = 'required|email:dns|unique:users,email';
        }
        if ($request->username !== $user->username) {
            $rules['username'] = 'required|string|max:255|unique:users,username';
        }

        // Validate input data
        $validatedData = $request->validate($rules);

        // Jika ada upload foto profil baru
        if ($request->file('foto_profil')) {
            // Simpan foto baru dan hapus foto lama (jika ada)
            if ($user->foto_profil) {
                Storage::delete('public/' . $user->foto_profil);
            }
            $validatedData['foto_profil'] = $request->file('foto_profil')->store('foto_profil', 'public');
        }

        // Update the user record with the validated data
        User::where('id', $user->id)->update($validatedData);

        // Redirect back to the profile page with a success message
        return redirect('/profile')->with('success', 'Profile has been updated!');
    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        // Ambil user yang sedang login
        $currentUser = auth()->user();

        // Pastikan user yang sedang login sama dengan user yang akan dihapus
        if ($currentUser->id !== $user->id) {
            return response()->json(['error' => 'Unauthorized'], 403);
        }

        // Hapus foto profil user jika ada
        if ($user->foto_profil) {
            Storage::disk('public')->delete($user->foto_profil);
        }

        // Hapus data user dari database
        $user->delete();

        // Redirect ke halaman depan dengan pesan sukses
        return redirect('/')->with('deleteAccountSuccess', 'Your account has been deleted successfully.');
    }

    public function updatePassword(Request $request, User $user)
    {
        // Validasi data input untuk password baru
        $validatedData = $request->validate([
            'current_password' => 'required',
            'password' => 'required|string|min:3|max:8|confirmed',
        ], [
            'password.confirmed' => 'Password dan Konfirmasi Password tidak cocok.',        
        ]);

        // Cek apakah current_password cocok dengan password lama
        if (!Hash::check($validatedData['current_password'], $user->password)) {
            return back()->with('false', 'Password lama tidak sesuai, Mohon masukkan password lama dengan benar!');
        }

        // Update password
        $user->update([
            'password' => Hash::make($validatedData['password']),
        ]);

        Auth::logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();

        // Redirect dengan pesan sukses
        return redirect('/login')->with('success', 'Password telah berhasil diupdate, Silakan login kembali!');
    }
}
