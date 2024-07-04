@extends('Layouts.main')

@section('content')
<div class="wrapper-wrapper">
    <div id="page-content-wrapper"  class="d-flex justify-content-center align-items-center">
        <div class="form-wrapper" style="margin-top: 20px; left: 550px">
            <h1>Detail Supplier</h1>
            <form>
                <table>
                    <tr>
                        <td><label>Kode</label></td>
                        <td><input value="{{ $supplier->kodesupp }}" readonly disabled style="width: 200px"></td>
                        <td><label>Kontak</label></td>
                        <td><input value="{{ $supplier->kontaksupp }}" readonly disabled style="width: 200px"></td>
                    </tr>
                    <tr>
                        <td><label>Perusahaan</label></td>
                        <td><textarea readonly disabled style="width: 200px">{{ $supplier->perusahaansupp }}</textarea></td>
                        <td><label>Kota</label></td>
                        <td><input value="{{ $supplier->kotasupp }}" readonly disabled style="width: 200px"></td>
                    </tr>
                    <tr>
                        <td><label>Alamat</label></td>
                        <td><textarea readonly disabled style="width: 200px">{{ $supplier->alamatsupp }}</textarea></td>
                        <td><label>Alamat 2</label></td>
                        <td><textarea readonly disabled style="width: 200px">{{ $supplier->alamat2supp }}</textarea></td>
                        
                    </tr>
                    <tr>
                        <td><label>No Tlp</label></td>
                        <td><input value="{{ $supplier->notelponsupp }}" readonly disabled style="width: 200px"></td>
                        <td><label>Term</label></td>
                        <td><input value="{{ $supplier->termsupp }}" readonly disabled style="width: 165px"> Hari</td>
                    </tr>
                    <tr>
                        <td><label>Keterangan</label></td>
                        <td><textarea readonly disabled style="width: 200px">{{ $supplier->descsupp }}</textarea></td>
                    </tr>
                </table>
            </form>
            <a href="/supplier/mastersupplier">
                <button style="background-color: #1570EF; outline:none; border:none;margin-top: 10px" class="btn btn-primary btn-sm">
                    <i class="fa-solid fa-arrow-left"></i> <span>Back to All Supplier</span>
                </button>
            </a>     
        </div>
    </div>
</div>
@endsection
