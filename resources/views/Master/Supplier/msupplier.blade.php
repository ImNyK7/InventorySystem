@extends('Layouts.main')

@section('content')
    <div class="d-flex align-items-center">
        <h1 class="fs-3 m-4 mb-0" style="color: #1570EF">Master Supplier</h1>
    </div>

    <div class="container-fluid px-4">
        <div class="btn-wrapper wrapper">
            <form action="/supplier/tambahsupplier">
                <button type="submit" class="btn" style="font-size: 17px"><i class="fa-solid fa-circle-plus"
                        style="font-size: x-large; vertical-align: -3px"></i> <span style="padding-left: 2px">Tambah
                        Supplier</span></button>
            </form>
        </div>
        <div class="row mb-5 mt-2">
            <div class="col">
                <div class="table-responsive bg-white p-3">
                    <table table id="supplier-table" class="table rounded shadow-sm table-hover" style="width: max-content">
                        <thead>
                            <tr>
                                <th width="25px">#</th>
                                <th>Kode</th>
                                <th>Perusahaan</th>
                                <th>Kontak</th>
                                <th>Kota</th>
                                <th>Alamat</th>
                                <th>Telpon</th>
                                <th>Term (Hari)</th>
                                <th>Description</th>
                                <th width="125px">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($suppliers as $index => $supplier)
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td>{{ $supplier->kodesupp }}</td>
                                    <td>{{ $supplier->perusahaansupp }}</td>
                                    <td>{{ $supplier->kontaksupp }}</td>
                                    <td>{{ $supplier->kotasupp }}</td>
                                    <td>{{ $supplier->alamatsupp }}</td>
                                    <td>{{ $supplier->notelponsupp }}</td>
                                    <td>{{ $supplier->termsupp }}</td>
                                    <td>{{ $supplier->descsupp }}</td>
                                    <td>
                                        <a href="/supplier/mastersupplier/{{ $supplier->perusahaansupp }}">
                                            <button style="background-color: #1570EF; outline:none; border:none" class="btn btn-primary btn-sm">
                                                <i class="fa-solid fa-eye"></i>
                                            </button>
                                        </a>                                        
                                        <a href="/supplier/tambahsupplier">
                                            <button style="background-color: #48EE59; outline:none; border:none; text-decoration: none"
                                                class="btn btn-primary btn-sm">
                                                <i class="fa-solid fa-pen-to-square"></i>
                                            </button>
                                        </a>
                                        <a href="">
                                            <button style="background-color: #E70404; outline:none; border:none"
                                                class="btn btn-primary btn-sm">
                                                <i class="fa-solid fa-trash-can"></i>
                                            </button>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <script src="//cdn.datatables.net/2.0.7/js/dataTables.min.js"></script>
        <script>let table = new DataTable('#supplier-table'); </script>
    @endsection
