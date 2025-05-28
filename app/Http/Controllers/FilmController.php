<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User; // pastikan model User sudah di-import
use Illuminate\Support\Facades\Hash;


class FilmController extends Controller
{
        public function showRegister()
    {
        return view('register'); // register.blade.php
    }

    public function storeRegister(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:6',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return redirect()->route('login')->with('success', 'Account created successfully.');
    }


    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:6',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return redirect()->route('login')->with('success', 'Pendaftaran berhasil! Silakan login.');
    }

    public function login(Request $request)
{
    $request->validate([
        'name' => 'required',
        'password' => 'required',
        ]);

        // Cari user berdasarkan 'name' (yang kamu anggap sebagai username)
        $user = \App\Models\User::where('name', $request->name)->first();

        if (!$user || !\Illuminate\Support\Facades\Hash::check($request->password, $user->password)) {
            return back()->withErrors([
                'login' => 'Name atau password salah.',
            ]);
        }

        // Simpan ke session
        session(['user' => $user]);

        return redirect('/')->with('success', 'Login berhasil!');
    }
 }
