@extends('Layouts.main')

@section('content')
<div class="d-flex align-items-center">
    <h1 class="fs-3 m-4 mb-0" style="color: #1570EF">Master Customer</h1>
</div>

<div class="container-fluid px-4">
    <div class="btn-wrapper wrapper">
        <form action="/customer/tambahcustomer">
            <button type="submit" class="btn" style="font-size: 17px"><i class="fa-solid fa-circle-plus"
                    style="font-size: x-large; vertical-align: -3px"></i> <span
                    style="padding-left: 2px">Tambah Customer</span></button>
        </form>
    </div>
    <div class="row mb-5 mt-2">
        <div class="col">
            <div class="table-responsive">
                <table class="table bg-white rounded shadow-sm table-hover" style="min-width: 1200px;">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Kode</th>
                            <th>Perusahaan</th>
                            <th>Kontak</th>
                            <th>Kota</th>
                            <th>Alamat</th>
                            <th>Telpon</th>
                            <th>Term (Hari)</th>
                            <th>Limit</th>
                            <th>Description</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($customers as $index => $customer)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{{ $customer->kode }}</td>
                            <td>{{ $customer->perusahaan }}</td>
                            <td>{{ $customer->kontak }}</td>
                            <td>{{ $customer->kota }}</td>
                            <td>{{ $customer->alamat }}</td>
                            <td>{{ $customer->notelpon }}</td>
                            <td>{{ $customer->term }}</td>
                            <td>{{ $customer->limit }}</td>
                            <td>{{ $customer->desc }}</td>
                            <td>
                                <button style="background-color: #48EE59; outline:none; border:none" class="btn btn-primary btn-sm">
                                    <i class="fa-solid fa-pen-to-square"></i>
                                </button>
                                <button style="background-color: #E70404; outline:none; border:none" class="btn btn-primary btn-sm">
                                    <i class="fa-solid fa-trash-can"></i>
                                </button>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
