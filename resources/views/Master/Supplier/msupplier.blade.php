@extends('Layouts.main')

@section('content')
    <div class="d-flex align-items-center">
        <h1 class="fs-3 m-4 mb-0" style="color: #1570EF">Master Supplier</h1>
    </div>

    @if (session()->has('success'))
    <div class="alert alert-success" role="alert">
        {{ session('success') }}
      </div>
    @endif

    <div class="container-fluid px-4">
        <div class="btn-wrapper wrapper mb-3">
            <form action="/supplier/mastersupplier/create">
                <button type="submit" class="btn" style="font-size: 17px"><i class="fa-solid fa-circle-plus"
                        style="font-size: x-large; vertical-align: -3px"></i> <span style="padding-left: 2px">Tambah
                        Supplier</span></button>
            </form>
        </div>
        <div class="row mb-5 mt-2">
            <div class="col">
                <div class="table-responsive bg-white p-3">
                    <table id="supplier-table" class="table rounded shadow-sm table-hover nowrap" style="width: 100%">
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
                                <th>Description</th>
                                <th width="125px" style="background-color: whitesmoke">Action</th>
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
                                        <a href="/supplier/mastersupplier/{{ $supplier->perusahaansupp }}" class="btn btn-primary btn-sm" style="background-color: #1570EF; border:none; outline:none;">
                                            <i class="fa-solid fa-eye"></i>
                                        </a>                                        
                                        <a href="/supplier/mastersupplier/{{ $supplier->perusahaansupp }}/edit" class="btn btn-success btn-sm" style="background-color: #48EE59; border:none; outline:none;">
                                            <i class="fa-solid fa-pen-to-square"></i>
                                        </a>
                                        <form action="/supplier/mastersupplier/{{ $supplier->perusahaansupp }}" method="POST" class="d-inline">
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
            var table = $('#supplier-table').DataTable({
                scrollX: true,
                fixedHeader: true,
                fixedColumns: {
                    rightColumns: 1
                }
            });
        });
    </script>
@endsection
