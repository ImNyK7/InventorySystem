<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('Master/Kategori/mkategori', [
            "title" => "Master Kategori",
            "kategoris" => Kategori::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Master/Kategori/tambahkategori', [
            "title" => "Tambah Kategori"
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'kodekat' => 'required|string|max:20|unique:kategoris,kodekat',
            'namakat' => 'required|string|max:255',
        ]);
        
        Kategori::create($validatedData);

        return redirect('/kategori/masterkategori')->with('success', 'Berhasil Tambah Kategori!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Kategori $masterkategori)
    {
        return view('Master/Kategori/showkategori',[
            'kategori' => $masterkategori,
            'title' => 'Show Kategori'
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Kategori $kategori)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Kategori $kategori)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Kategori $kategori)
    {
        $kategori->delete();
        return redirect('/kategori/masterkategori')->with('success', 'Berhasil Hapus Kategori!');
    }
}
