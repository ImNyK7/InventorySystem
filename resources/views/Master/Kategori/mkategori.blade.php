@extends('Layouts.main')

@section('content')
<div class="d-flex align-items-center">
    <h1 class="fs-3 m-4 mb-0" style="color: #1570EF">Master Kategori</h1>
</div>

@if (session()->has('success'))
<div class="alert alert-success" role="alert">
    {{ session('success') }}
  </div>
@endif

<div class="container-fluid px-4">
    <div class="btn-wrapper wrapper">
        <form action="/kategori/masterkategori/create">
            <button type="submit" class="btn" style="font-size: 17px"><i class="fa-solid fa-circle-plus"
                    style="font-size: x-large; vertical-align: -3px"></i> <span
                    style="padding-left: 2px">Tambah Kategori</span></button>
        </form>
    </div>
    <div class="row mb-5 mt-2">
        <div class="col">
            <div class="table-responsive bg-white p-3" style="border-radius: 10px">
                <table table id="kategori-table" class="table rounded shadow-sm table-hover" style="max-width: 1200px;">
                    <thead style="text-align: left">
                        <tr>
                            <th width="25px">#</th>
                            <th>Kode</th>
                            <th>Kategori</th>
                            <th width="125px">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($kategoris as $index => $kategori)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{{ $kategori->kodekat }}</td>
                            <td>{{ $kategori->namakat }}</td>
                            <td>
                                <a href="/kategori/masterkategori/{{ $kategori->namakat }}" class="btn btn-primary btn-sm" style="background-color: #1570EF; border:none; outline:none;">
                                    <i class="fa-solid fa-eye"></i>
                                </a>                                        
                                <a href="/kategori/masterkategori/{{ $kategori->namakat }}/edit" class="btn btn-success btn-sm" style="background-color: #48EE59; border:none; outline:none;">
                                    <i class="fa-solid fa-pen-to-square"></i>
                                </a>
                                <form action="/kategori/masterkategori/{{ $kategori->namakat }}" method="POST" class="d-inline">
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
<script>let table = new DataTable('#kategori-table');</script>
@endsection