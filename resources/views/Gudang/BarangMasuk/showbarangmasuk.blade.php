@extends('Layouts.main')

@section('content')
<div class="wrapper-wrapper">
    <div id="page-content-wrapper">
        <div class="form-wrapper" style="margin-top: 20px; left: 550px">
            <h1>Detail Barang Masuk</h1>
            <form>
                <table>
                    <tr>
                        <td><label>Kode</label></td>
                        <td><input value="{{ $recordbarangmasuk->kodebrgmsk }}" readonly style="width: 90px"></td>
                        <td><label>Tanggal Masuk</label></td>
                        <td><input value="{{ $recordbarangmasuk->tanggalbrgmsk }}" readonly style="width: 100px"></td>
                    </tr>
                    <tr>
                        <td><label>Jumlah</label></td>
                        <td><input value="{{ $recordbarangmasuk->jmlhbrgmsk }}" readonly style="width: 50px"></td>
                        <td><label>Nama Barang</label></td>
                        <td><input value="{{ $recordbarangmasuk->namabrgmsk }}" readonly style="width: 200px"></td>
                    </tr>
                    <tr>
                        <td><label>Harga Beli</label></td>
                        <td><input value="{{ $recordbarangmasuk->hrgbeli }}" readonly style="width: 100px"></td>
                        <td><label>Kategori</label></td>
                        <td><input value="{{ $recordbarangmasuk->kategori->namakat }}" readonly style="width: fit-content"></td>
                    </tr>
                    <tr>
                        <td><label>Supplier</label></td>
                        <td><input value="{{ $recordbarangmasuk->supplier->perusahaansupp }}" readonly style="width: 200px"></td>             
                    </tr>

                </table>
            </form>
            <a href="/barangmasuk/listbarangmasuk">
                <button style="background-color: #1570EF; outline:none; border:none;margin-top: 10px" class="btn btn-primary btn-sm">
                    <i class="fa-solid fa-arrow-left"></i> <span>Back to List Barang Masuk</span>
                </button>
            </a>     
        </div>
    </div>
</div>
@endsection
