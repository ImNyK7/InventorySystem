@extends('Layouts.main')

@section('content')
    <div class="d-flex align-items-center">
        <h1 class="fs-3 m-4 mb-0" style="color: #1570EF">Stok Barang</h1>
    </div>

    @if (session()->has('success'))
    <div class="alert alert-success" role="alert">
        {{ session('success') }}
      </div>
    @endif

    <div class="container-fluid px-4">
        <div class="btn-wrapper wrapper">
            <form action="/stokbarang/create">
                <button type="submit" class="btn"><i class="fa-solid fa-circle-plus"
                        style="font-size: x-large; vertical-align: -3px"></i> <span style="padding-left: 2px">Tambah Stok Barang</span></button>
            </form>
            {{-- <form action="/barangkeluar/listbarangkeluar/create">
                <button type="submit" class="btn2"><i class="fa-solid fa-circle-plus"
                        style="font-size: x-large; vertical-align: -3px"></i> <span style="padding-left: 2px">Tambah Barang
                        Keluar</span></button>
            </form> --}}
        </div>
        <div class="row mb-5 mt-2">
            <div class="col">
                <div class="table-responsive bg-white p-3">
                    <table id="stokbarang-table" class="table rounded shadow-sm table-hover">
                        <thead>
                            <tr>
                                <th width="25px">#</th>
                                <th>Nama Barang</th>
                                <th>Kategori</th>
                                <th>Jumlah Barang</th>
                                <th width="125px">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($stokbarangs as $index => $stokbarang)
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td>{{ $stokbarang->namabrg }}</td>
                                    <td>{{ $stokbarang->kategori->namakat ?? '' }}</td>
                                    <td>{{ $stokbarang->jmlhbrg }} {{ $stokbarang->satuanbrg->namasatuan ?? '' }}</td>
                                    <td>
                                        <a href="/stokbarang/{{ $stokbarang->namabrg }}" class="btn btn-primary btn-sm" style="background-color: #1570EF; border:none; outline:none;">
                                            <i class="fa-solid fa-eye"></i>
                                        </a>                                        
                                        <a href="/stokbarang/{{ $stokbarang->namabrg }}/edit" class="btn btn-success btn-sm" style="background-color: #48EE59; border:none; outline:none;">
                                            <i class="fa-solid fa-pen-to-square"></i>
                                        </a>
                                        <form action="/stokbarang/{{ $stokbarang->namabrg }}" method="POST" class="d-inline">
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
       
        <script>
            let table = new DataTable('#stokbarang-table');
        </script>
@endsection
