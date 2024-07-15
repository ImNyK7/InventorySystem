@extends('Layouts.main')

@section('content')
<div class="wrapper-wrapper">
    <div id="page-content-wrapper" class="d-flex justify-content-center align-items-center">
        <div class="form-wrapper" style="margin-top: 20px; left: 550px">
            <h1>Detail Opname</h1>
            <form>
                <table>
                    <tr>
                        <td><label>Nama Penulis</label></td>
                        <td><input value="{{ $stokopname->namapenulis }}" readonly disabled style="width: 200px"></td>
                    </tr>
                    <tr>
                        <td><label>Tanggal</label></td>
                        <td><input value="{{ $stokopname->tanggalopname }}" readonly disabled style="width: 200px"></td>
                    </tr>
                    <tr>
                        <td><label>Keterangan</label></td>
                        <td><textarea readonly disabled style="width: 200px">{{ $stokopname->descopname }}</textarea></td>
                    </tr>
                </table>
            </form>
            
            <a href="/stokopname">
                <button style="background-color: #1570EF; outline:none; border:none;margin-top: 10px" class="btn btn-primary btn-sm">
                    <i class="fa-solid fa-arrow-left"></i><span>Kembali</span>
                </button>
            </a>     
        </div>
    </div>
</div>
@endsection
