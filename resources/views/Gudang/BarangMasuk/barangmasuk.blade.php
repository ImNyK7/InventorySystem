@extends('Layouts.main')

@section('content')
    <div class="d-flex align-items-center">
        <h1 class="fs-3 m-4 mb-0" style="color: #1570EF">List Barang Masuk</h1>
    </div>

    @if (session()->has('success'))
    <div class="alert alert-success" role="alert">
        {{ session('success') }}
      </div>
    @endif

    <div class="container-fluid px-4">
        <div class="btn-wrapper wrapper">
            <form action="/barangmasuk/listbarangmasuk/create">
                <button type="submit" class="btn"><i class="fa-solid fa-circle-plus"
                        style="font-size: x-large; vertical-align: -3px"></i> <span style="padding-left: 2px">Tambah Barang
                        Masuk</span></button>
            </form>
        </div>
        <div class="row mb-5 mt-2">
            <div class="col">
                <div class="table-responsive bg-white p-3">
                    <table table id="brgmsk-table" class="table rounded shadow-sm table-hover" style="min-width: max-content;">
                    <thead>
                        <tr>
                            <th style="background-color: whitesmoke">#</th>
                            <th>Kode Laporan</th>
                            <th>Tanggal Masuk</th>
                            <th>Supplier</th>
                            <th>Jumlah</th>
                            <th>Nama Barang</th>
                            <th>Harga Beli</th>
                            <th>Kategori</th>
                            <th style="background-color: whitesmoke">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($recordbarangmasuks as $index => $recordbarangmasuk)
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td>{{ $recordbarangmasuk->kodebrgmsk }}</td>
                                    <td>{{ $recordbarangmasuk->tanggalbrgmsk }}</td>
                                    <td>{{ $recordbarangmasuk->supplier->perusahaansupp ?? '' }}</td>
                                    <td>{{ $recordbarangmasuk->jmlhbrgmsk }} {{ $recordbarangmasuk->satuanbrg->namasatuan ?? '' }}</td>
                                    <td>{{ $recordbarangmasuk->stokbarang->namabrg ?? '' }}</td>
                                    <td>{{ $recordbarangmasuk->hrgbeli }}</td>
                                    <td>{{ $recordbarangmasuk->kategori->namakat ?? '' }}</td>      
                                    <td>
                                        <a href="/barangmasuk/listbarangmasuk/{{ $recordbarangmasuk->kodebrgmsk }}" class="btn btn-primary btn-sm" style="background-color: #1570EF; border:none; outline:none;">
                                            <i class="fa-solid fa-eye"></i>
                                        </a>                                        
                                        <a href="/barangmasuk/listbarangmasuk" class="btn btn-success btn-sm" style="background-color: #48EE59; border:none; outline:none;">
                                            <i class="fa-solid fa-pen-to-square"></i>
                                        </a>
                                        <a href="#" class="btn btn-danger btn-sm" style="background-color: #E70404; border:none; outline:none;">
                                            <i class="fa-solid fa-trash-can"></i>
                                        </a>
                                    </td>                                    
                                </tr>
                            @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            var table = $('#brgmsk-table').DataTable({
                scrollX: true,
                fixedColumns: {
                    rightColumns: 1
                }
            });
        });
    </script>
@endsection
