@extends('Layouts.main')

@section('content')
<div class="wrapper-wrapper">
    <div id="page-content-wrapper">
        <div class="form-wrapper" style="margin-top: 20px; left: 550px">
            <h1>Detail Barang Keluar</h1>
            <form>
                <table>
                    <tr>
                        <td><label>Kode</label></td>
                        <td><input value="{{ $recordbarangkeluar->kodebrgklr }}" readonly style="width: 90px"></td>
                        <td><label>Tanggal Keluar</label></td>
                        <td><input value="{{ $recordbarangkeluar->tanggalbrgklr }}" readonly style="width: 100px"></td>
                    </tr>
                    <tr>
                        <td><label>Jumlah</label></td>
                        <td><input value="{{ $recordbarangkeluar->jmlhbrgklr }}" readonly style="width: 50px"></td>
                        <td><label>Nama Barang</label></td>
                        <td><input value="{{ $recordbarangkeluar->namabrgklr }}" readonly style="width: 200px"></td>
                    </tr>
                    <tr>
                        <td><label>Harga Jual</label></td>
                        <td><input value="{{ $recordbarangkeluar->hrgjual }}" readonly style="width: 100px"></td>
                        <td><label>Kategori</label></td>
                        <td><input value="{{ $recordbarangkeluar->kategori->namakat }}" readonly style="width: fit-content"></td>
                    </tr>
                    <tr>
                        <td><label>Customer</label></td>
                        <td><input value="{{ $recordbarangkeluar->customer->perusahaancust }}" readonly style="width: 200px"></td>             
                    </tr>

                </table>
            </form>
            <a href="/barangkeluar/listbarangkeluar">
                <button style="background-color: #1570EF; outline:none; border:none;margin-top: 10px" class="btn btn-primary btn-sm">
                    <i class="fa-solid fa-arrow-left"></i> <span>Back to List Barang Keluar</span>
                </button>
            </a>     
        </div>
    </div>
</div>
@endsection
