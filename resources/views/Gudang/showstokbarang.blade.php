@extends('Layouts.main')

@section('content')
<div class="wrapper-wrapper">
    <div id="page-content-wrapper" class="d-flex justify-content-center align-items-center">
        <div class="form-wrapper" style="margin-top: 20px; left: 550px">
            <h1>Detail Stok</h1>
            <form>
                <table>
                    <tr>
                        <td><label>Nama</label></td>
                        <td><input value="{{ $stokbarang->namabrg }}" readonly disabled style="width: 200px"></td>
                        <td><label>Jumlah</label></td>
                        <td><input value="{{ $stokbarang->jmlhbrg }}"  readonly disabled style="width: 50px"> <input value="{{ $stokbarang->satuanbrg->namasatuan }}" style="width: 50px" readonly disabled></td>
                    </tr>
                    <tr>
                        <td><label>Kategori</label></td>
                        <td><input value="{{ $stokbarang->kategori->namakat ?? '' }}" readonly disabled style="width: 150px"></td>
                    </tr>
                    <tr>
                </table>
            </form>
            
            <a href="/stokbarang">
                <button style="background-color: #1570EF; outline:none; border:none;margin-top: 10px" class="btn btn-primary btn-sm">
                    <i class="fa-solid fa-arrow-left"></i> <span>Back to List</span>
                </button>
            </a>     
        </div>
    </div>
</div>
@endsection
