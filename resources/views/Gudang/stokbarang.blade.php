@extends('Layouts.main')

@section('content')
    <div class="d-flex align-items-center">
        <h1 class="fs-3 m-4 mb-0" style="color: #1570EF">Stok Barang</h1>
    </div>

    <div class="container-fluid px-4">
        <div class="btn-wrapper wrapper">
            <form action="/barangmasuk/tambahbarangmasuk">
                <button type="submit" class="btn"><i class="fa-solid fa-circle-plus"
                        style="font-size: x-large; vertical-align: -3px"></i> <span style="padding-left: 2px">Tambah Barang
                        Masuk</span></button>
            </form>
            <form action="/barangkeluar/tambahbarangkeluar">
                <button type="submit" class="btn2"><i class="fa-solid fa-circle-plus"
                        style="font-size: x-large; vertical-align: -3px"></i> <span style="padding-left: 2px">Tambah Barang
                        Keluar</span></button>
            </form>
        </div>
        <div class="row mb-5 mt-2">
            <div class="col">
                <div class="table-responsive bg-white p-3">
                    <table table id="stokbrg-table" class="table rounded shadow-sm table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nama Barang</th>
                                <th>Kategori</th> 
                                <th>Jumlah Barang</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($recordbarangmasuks as $index => $recordbarangmasuk)
                                    <tr>
                                        <td>{{ $index + 1 }}</td>
                                        <td>{{ $recordbarangmasuk->namabrgmsk }}</td>   
                                        <td>{{ $recordbarangmasuk->kategori->namakat ?? '' }}</td>
                                        <td>{{ $recordbarangmasuk->jmlhbrgmsk }}</td> 
                                        <td>
                                            <button style="background-color: #1570EF; outline:none; border:none"
                                                class="btn btn-primary btn-sm">
                                                <i class="fa-solid fa-eye"></i>
                                            </button>
                                            <button style="background-color: #48EE59; outline:none; border:none"
                                                class="btn btn-primary btn-sm">
                                                <i class="fa-solid fa-pen-to-square"></i>
                                            </button>
                                            <button style="background-color: #E70404; outline:none; border:none"
                                                class="btn btn-primary btn-sm">
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
        <script src="//cdn.datatables.net/2.0.7/js/dataTables.min.js"></script>
        <script>
            let table = new DataTable('#stokbrg-table');
        </script>
@endsection
