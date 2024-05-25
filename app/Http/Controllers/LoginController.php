<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login (){
        return view('login', [
            'title' => 'Login'
        ]);
    }

    public function auth(Request $request){
        $validatedData = $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        if(Auth::attempt($validatedData)){
            $request->session()->regenerate();
            return redirect()->intended('/');
        }

        return back()->with('loginError', 'Login Gagal, Pastikan Username dan Password Benar!');
    }

    public function logout(Request $request){
        Auth::logout();

        request()->session()->invalidate();
        request()->session()->regenerateToken();
        return redirect('/login');
    }
}
