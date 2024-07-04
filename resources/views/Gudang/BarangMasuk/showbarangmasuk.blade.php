@extends('Layouts.main')

@section('content')
<div class="wrapper-wrapper">
    <div id="page-content-wrapper"  class="d-flex justify-content-center align-items-center">
        <div class="form-wrapper" style="margin-top: 20px; left: 550px">
            <h1>Detail Laporan Barang Masuk</h1>
            <form>
                <table>
                    <tr>
                        <td><label>Kode</label></td>
                        <td><input value="{{ $recordbarangmasuk->kodebrgmsk }}" readonly disabled style="width: 200px"></td>
                        <td><label>Tanggal Masuk</label></td>
                        <td><input value="{{ $recordbarangmasuk->tanggalbrgmsk }}" readonly disabled style="width: 200px"></td>
                    </tr>
                    <tr>
                        <td><label>Jumlah</label></td>
                        <td><input value="{{ $recordbarangmasuk->jmlhbrgmsk }}"  readonly disabled style="width: 100px"> <input value="{{ $recordbarangmasuk->satuanbrg->namasatuan }}" style="width: 95px" readonly disabled></td>
                        <td><label>Nama Barang</label></td>
                        <td><input value="{{ $recordbarangmasuk->stokbarang->namabrg ?? ''}}" readonly disabled style="width: 200px"></td>
                    </tr>
                    <tr>
                        <td><label>Harga Beli</label></td>
                        <td><input value="{{ $recordbarangmasuk->hrgbeli }}" readonly disabled style="width: 200px"></td>
                        <td><label>Kategori</label></td>
                        <td><input value="{{ $recordbarangmasuk->kategori->namakat }}" readonly disabled style="width: 200px"></td>
                    </tr>
                    <tr>
                        <td><label>Supplier</label></td>
                        <td><textarea readonly disabled style="width: 200px">{{ $recordbarangmasuk->supplier->perusahaansupp ?? ''}}</textarea></td>             
                    </tr>

                </table>
            </form>
            <a href="/barangmasuk/listbarangmasuk" style="text-decoration: none"    >
                <button style="background-color: #1570EF; outline:none; border:none;margin-top: 10px" class="btn btn-primary btn-sm">
                    <i class="fa-solid fa-arrow-left"></i> <span>Kembali</span>
                </button>
            </a>
            <a href="{{ url('barangmasuk/'.$recordbarangmasuk->kodebrgmsk.'/print') }}" target="_blank">
                <button style="background-color: #28a745; outline:none; border:none;margin-top: 10px"
                    class="btn btn-success btn-sm">
                    <i class="fa-solid fa-print"></i> <span>Cetak Laporan</span>
                </button>
            </a>     
        </div>
    </div>
</div>
@endsection
