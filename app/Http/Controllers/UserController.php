<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('Admin/adminpage', [
            'users' => User::all(),
            'title' => 'Admin Page'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $admin)
    {
        return view('Admin/edituser', [
            'user' => $admin,
            'title' => 'Edit User'
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $admin)
    {
        $validatedData = $request->validate([
            'username'=> 'required|min:3|max:255',
            'is_admin' => 'required|boolean'
       ]);

        $admin->update($validatedData);

        return redirect('/admin')->with('success', 'Berhasil Edit User!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        $user->delete();
        return redirect('/admin')->with('success', 'Berhasil Hapus User!');
    }
}
