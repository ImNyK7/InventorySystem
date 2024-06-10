@extends('Layouts.main')

@section('content')
<div class="wrapper-wrapper">
    <div id="page-content-wrapper"  class="d-flex justify-content-center align-items-center">
        <div class="form-wrapper" style="margin-top: 100px; align-items: center">
            <h1>Detail Kategori</h1>
            <form>
                <table>
                    <tr>
                        <td><label>Kode</label></td>
                        <td><input value="{{ $kategori->kodekat }}" readonly disabled style="width: 50px"></td>
                        <td><label>Nama Kategori</label></td>
                        <td><input value="{{ $kategori->namakat }}" readonly disabled style="width: 100px"></td>
                    </tr>
                </table>
            </form>
            <a href="/kategori/masterkategori">
                <button style="background-color: #1570EF; outline:none; border:none;margin-top: 10px" class="btn btn-primary btn-sm">
                    <i class="fa-solid fa-arrow-left"></i> <span>Back to All Kategori</span>
                </button>
            </a>     
        </div>
    </div>
</div>
@endsection
