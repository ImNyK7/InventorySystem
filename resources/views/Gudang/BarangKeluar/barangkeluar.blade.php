@extends('Layouts.main')

@section('content')
<div class="d-flex align-items-center">
    <h1 class="fs-3 m-4 mb-0" style="color: #1570EF">List Barang Keluar</h1>
</div>

<div class="container-fluid px-4">
    <div class="btn-wrapper wrapper">
        <form action="/barangkeluar/tambahbarangkeluar">
            <button type="submit" class="btn"><i class="fa-solid fa-circle-plus"
                    style="font-size: x-large; vertical-align: -3px"></i> <span
                    style="padding-left: 2px">Tambah Barang Keluar</span></button>
        </form>
    </div>
    <div class="row mb-5 mt-2">
        <div class="col">
            <div class="table-responsive bg-white p-3">
                <table table id="brgklr-table" class="table rounded shadow-sm table-hover" style="min-width: max-content;">
                <thead>
                    <tr>
                        <th width="25px">#</th>
                        <th>Kode Laporan</th>
                        <th>Tanggal Keluar</th>
                        <th>Customer</th>
                        <th>Jumlah</th>
                        <th>Nama Barang</th>
                        <th>Harga Jual</th>
                        <th>Kategori</th>
                        <th width="125px">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($recordbarangkeluars as $index => $recordbarangkeluar)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $recordbarangkeluar->kodebrgklr }}</td>
                        <td>{{ $recordbarangkeluar->tanggalbrgklr }}</td>
                        <td>{{ $recordbarangkeluar->customer->perusahaancust ?? '' }}</td>
                        <td>{{ $recordbarangkeluar->jmlhbrgklr }} {{ $recordbarangkeluar->satuanbrg->namasatuan ?? ''}}</td>
                        <td>{{ $recordbarangkeluar->namabrgklr }}</td>
                        <td>{{ $recordbarangkeluar->hrgjual }}</td>
                        <td>{{ $recordbarangkeluar->kategori->namakat ?? '' }}</td>
                        <td>
                            <a href="/barangkeluar/listbarangkeluar/{{ $recordbarangkeluar->kodebrgklr }}">
                                <button style="background-color: #1570EF; outline:none; border:none" class="btn btn-primary btn-sm">
                                    <i class="fa-solid fa-eye"></i>
                                </button>
                            </a>                                        
                            <a href="/barangkeluar/listbarangkeluar">
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
<script src="//cdn.datatables.net/2.0.7/js/dataTables.min.js"></script>
        <script>
            let table = new DataTable('#brgklr-table');
        </script>
@endsection