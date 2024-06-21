<?php

namespace App\Http\Controllers;

use App\Models\Supplier;
use Barryvdh\DomPDF\Facade\PDF;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        return view('Master/Supplier/msupplier', [

            "title" => "Master Supplier",
            "suppliers" => Supplier::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Master/Supplier/tambahsupplier', [
            "title" => "Tambah Supplier"
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'kodesupp' => 'required|string|max:15|unique:suppliers,kodesupp',
            'perusahaansupp' => 'required|string|max:255',
            'kontaksupp' => 'required|string|max:100',
            'kotasupp' => 'required|string|max:255',
            'alamatsupp' => 'required|string|max:255',
            'alamat2supp' => 'nullable|string|max:255',
            'notelponsupp' => 'required|string|max:30',
            'termsupp' => 'required|integer',
            'descsupp' => 'nullable|string|max:50',
        ]);

        Supplier::create($validatedData);

        return redirect('/supplier/mastersupplier')->with('success', 'Berhasil Tambah Supplier!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Supplier $mastersupplier)
    {
        return view('Master/Supplier/showsupplier',[
            'supplier' => $mastersupplier,
            'title' => 'Show Supplier'
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Supplier $mastersupplier)
    {
        return view('Master/Supplier/editsupplier', [
            'supplier' => $mastersupplier,
            'title' => 'Edit Supplier'
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Supplier $mastersupplier)
    {
        $validatedData = $request->validate([
            'kodesupp' => 'required|string|max:15',
            'perusahaansupp' => 'required|string|max:255',
            'kontaksupp' => 'required|string|max:100',
            'kotasupp' => 'required|string|max:255',
            'alamatsupp' => 'required|string|max:255',
            'alamat2supp' => 'nullable|string|max:255',
            'notelponsupp' => 'required|string|max:30',
            'termsupp' => 'required|integer',
            'descsupp' => 'nullable|string|max:50',
        ]);

        $mastersupplier->update($validatedData);

        return redirect('/supplier/mastersupplier')->with('success', 'Berhasil Edit Supplier!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Supplier $supplier)
    {
        $supplier->delete();
        return redirect('/supplier/mastersupplier')->with('success', 'Berhasil Hapus Supplier!');
    }

    public function generatesuppPDF()
    {
        $suppliers = Supplier::get();
    
        $data = [
            'title' => 'Supplier List',
            'date' => date('d/m/Y'),
            'suppliers' => $suppliers
        ]; 
              
        $pdf = PDF::loadView('Master.Supplier.printsupplier', $data);
       
        return $pdf->stream("Supplier List", array("Attachment" => false));
    }
}
