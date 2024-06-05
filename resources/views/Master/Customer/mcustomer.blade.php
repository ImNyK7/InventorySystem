@extends('Layouts.main')

@section('content')
    <div class="d-flex align-items-center">
        <h1 class="fs-3 m-4 mb-0" style="color: #1570EF">Master Customer</h1>
    </div>

    @if (session()->has('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
    @endif

    <div class="container-fluid px-4">
        <div class="btn-wrapper wrapper">
            <a href="/customer/mastercustomer/create">
                <button type="submit" class="btn" style="font-size: 17px"><i class="fa-solid fa-circle-plus"
                        style="font-size: x-large; vertical-align: -3px"></i> <span style="padding-left: 2px">Tambah
                        Customer</span></button>
            </a>
        </div>
        <div class="row mb-5 mt-2">
            <div class="col">
                <div class="table-responsive bg-white p-3">
                    <table id="customer-table" class="table rounded shadow-sm table-hover nowrap" style="width: 100%">
                        <thead>
                            <tr>
                                <th style="background-color: whitesmoke">#</th>
                                <th>Kode</th>
                                <th>Perusahaan</th>
                                <th>Kontak</th>
                                <th>Kota</th>
                                <th>Alamat</th>
                                <th>Telpon</th>
                                <th>Term (Hari)</th>
                                <th>Limit</th>
                                <th>Description</th>
                                <th width="120px" style="background-color: whitesmoke">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($customers as $index => $customer)
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td>{{ $customer->kodecust }}</td>
                                    <td>{{ $customer->perusahaancust }}</td>
                                    <td>{{ $customer->kontakcust }}</td>
                                    <td>{{ $customer->kotacust }}</td>
                                    <td>{{ $customer->alamatcust }}</td>
                                    <td>{{ $customer->notelponcust }}</td>
                                    <td>{{ $customer->termcust }}</td>
                                    <td>{{ $customer->limitcust }}</td>
                                    <td>{{ $customer->desccust }}</td>
                                    <td>
                                        <a href="/customer/mastercustomer/{{ $customer->perusahaancust }}"
                                            class="btn btn-primary btn-sm"
                                            style="background-color: #1570EF; border:none; outline:none;">
                                            <i class="fa-solid fa-eye"></i>
                                        </a>
                                        <a href="/customer/mastercustomer/{{ $customer->perusahaancust }}/edit" class="btn btn-success btn-sm"
                                            style="background-color: #48EE59; border:none; outline:none;">
                                            <i class="fa-solid fa-pen-to-square"></i>
                                        </a>
                                        <form action="/customer/mastercustomer/{{ $customer->perusahaancust }}" method="POST" class="d-inline">
                                            @method('delete')
                                            @csrf
                                            <button class="btn btn-danger btn-sm" style="background-color: #E70404; border:none; outline:none;" onclick="return confirm('Yakin Akan Menghapus Data Ini?')"><i class="fa-solid fa-trash-can"></i></button>
                                        </form>                                        
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            var table = $('#customer-table').DataTable({
                scrollX: true,
                fixedColumns: {
                    rightColumns: 1
                }
            });
        });
    </script>
@endsection
