<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('Master/Customer/mcustomer', [
            "title" => "Master Customer",
            "customers" => Customer::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Master\Customer\tambahcustomer', [
            "title" => "Tambah Customer"
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'kodecust' => 'required|string|max:15|unique:customers,kodecust',
            'perusahaancust' => 'required|string|max:255',
            'kontakcust' => 'required|string|max:100',
            'kotacust' => 'required|string|max:255',
            'alamatcust' => 'required|string|max:255',
            'alamat2cust' => 'nullable|string|max:255',
            'notelponcust' => 'required|string|max:30',
            'termcust' => 'required|integer',
            'limitcust' => 'required|numeric|min:0.01|max:999999999999.99',
            'desccust' => 'nullable|string|max:50',
        ]);

        Customer::create($validatedData);

        return redirect('/customer/mastercustomer')->with('success', 'Berhasil Tambah Customer!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Customer $mastercustomer)
    {
        return view('Master/Customer/showcustomer', [
            'customer' => $mastercustomer,
            'title' => 'Show Customer'
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Customer $customer)
    {

        $results = Customer::where('kodecust', $customer)->first();

        return view('Master\Customer\editcustomer', [
            "customer" => $results,
            "title" => "Edit Customer"
        ]);
    }

public function update(Request $request, Customer $customer)
    {
        $validatedData = $request->validate([
            'kodecust' => 'required|string|max:15',
            'perusahaancust' => 'required|string|max:255',
            'kontakcust' => 'required|string|max:100',
            'kotacust' => 'required|string|max:255',
            'alamatcust' => 'required|string|max:255',
            'alamat2cust' => 'nullable|string|max:255',
            'notelponcust' => 'required|string|max:30',
            'termcust' => 'required|integer',
            'limitcust' => 'required',
            'desccust' => 'nullable|string|max:50',
        ]);

        Customer::where('kodecust', $customer->kodecust)
                ->update($validatedData);

        return redirect('/customer/mastercustomer')->with('success', 'Berhasil Edit Customer!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Customer $customer)
    {
        $customer->delete();
        return redirect('/customer/mastercustomer')->with('success', 'Berhasil Hapus Customer!');
    }
}
