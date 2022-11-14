<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('login.index', [
            'title' => 'Login',
            'active' => 'active',

        ]);
    }

    public function autentikasi(Request $request)
    {
        $login = $request->validate([
            'email'    => 'required|email:dns',
            'password' => 'required'
        ]);
        if (Auth::attempt($login)) {
            $request->session()->regenerate();
            return redirect()->intended('/');
        }
        return back()->with('loginError', 'Email Atau Password Salah');
    }

    public function logout()
    {
        Auth::logout();

        request()->session()->invalidate();

        request()->session()->regenerateToken();

        return redirect('/')->with('success', "Berhasil Logout");
    }
}
