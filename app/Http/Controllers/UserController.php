<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view('admin.adminpage', [
            'users' => User::all(),
            'title' => 'Admin Page'
        ]);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(User $user)
    {
        //
    }

    public function edit(User $user)
    {
        return view('admin.edituser', [
            'user' => $user,
            'title' => 'Edit User'
        ]);
    }

    public function update(Request $request, User $user)
    {
        $validatedData = $request->validate([
            'username' => 'required|min:3|max:255|unique:users,username,' . $user->id,
            'role' => 'required|string|in:admin,gudang,purchasing,sales'
        ]);

        $user->update($validatedData);

        return redirect('/admin')->with('success', 'Berhasil Edit User!');
    }

    public function destroy(User $user)
    {
        $user->delete();
        return redirect('/admin')->with('success', 'Berhasil Hapus User!');
    }
}
