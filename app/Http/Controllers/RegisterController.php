<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;


class RegisterController extends Controller
{
    public function index()
    {
        return view('signup');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:3|max:8',
            'confirm-password' => 'required|same:password',
        ], [
            'confirm-password.same' => 'Konfirmasi password harus sama dengan password.',
        ]);

        // Redirect ke halaman penginputan data diri sambil membawa email dan password (unencrypted password)
        return redirect('/create-profile')->with([
            'email' => $request->email,
            'password' => $request->password
        ]);
    }
}
