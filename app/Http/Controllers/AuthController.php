<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function doLogin(Request $request)
    {
        $credentials = $request->validate([
            'username' => ['required'],
            'password' => ['required','min:5'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect('/admin/dashboard');
        }
        return redirect()->back()->with('errors','Username atau Password yang anda masukkan salah');
    }
    public function doLogout()
    {
        auth()->logout();
        return redirect('/');
    }
}
