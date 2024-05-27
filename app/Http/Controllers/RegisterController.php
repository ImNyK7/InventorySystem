<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    public function register (){
        return view('register', [
            'title' => 'Register'
        ]);
    }

    public function store(Request $request){
       $validatedData = $request->validate([
            'username'=> 'required|min:3|max:255|unique:users',
            'password' => 'required|min:5|max:255|confirmed',
            'is_admin' => 'required|boolean'
       ]);

       $validatedData['password'] = bcrypt($validatedData['password']);

       User::create($validatedData);
       return redirect('/login')->with('regsuccess', 'Registrasi Berhasil, Silahkan Login!');
    }
}
