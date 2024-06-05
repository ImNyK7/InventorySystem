@extends('Layouts.main')

@section('content')
<div class="wrapper-wrapper">
    <div id="page-content-wrapper"  class="d-flex justify-content-center align-items-center">
        <div class="form-wrapper" style="margin-top: 20px; left: 550px">
            <h1>Detail Barang Masuk</h1>
            <form>
                <table>
                    <tr>
                        <td><label>Kode</label></td>
                        <td><input value="{{ $recordbarangmasuk->kodebrgmsk }}" readonly disabled style="width: 90px"></td>
                        <td><label>Tanggal Masuk</label></td>
                        <td><input value="{{ $recordbarangmasuk->tanggalbrgmsk }}" readonly disabled style="width: 100px"></td>
                    </tr>
                    <tr>
                        <td><label>Jumlah</label></td>
                        <td><input value="{{ $recordbarangmasuk->jmlhbrgmsk }}"  readonly disabled style="width: 50px"> <input value="{{ $recordbarangmasuk->satuanbrg->namasatuan }}" style="width: 50px" readonly disabled></td>
                        <td><label>Nama Barang</label></td>
                        <td><input value="{{ $recordbarangmasuk->stokbarang->namabrg }}" readonly disabled style="width: 200px"></td>
                    </tr>
                    <tr>
                        <td><label>Harga Beli</label></td>
                        <td><input value="{{ $recordbarangmasuk->hrgbeli }}" readonly disabled style="width: 100px"></td>
                        <td><label>Kategori</label></td>
                        <td><input value="{{ $recordbarangmasuk->kategori->namakat }}" readonly disabled style="width: fit-content"></td>
                    </tr>
                    <tr>
                        <td><label>Supplier</label></td>
                        <td><input value="{{ $recordbarangmasuk->supplier->perusahaansupp }}" readonly disabled style="width: 200px"></td>             
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
