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
                    <table table id="stokbrg-table" class="table rounded shadow-sm table-hover" style="min-width: 1200px;">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Kode Laporan</th>
                                <th>Kategori</th>
                                <th>Nama Barang</th>
                                <th>Jumlah Barang</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>

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
