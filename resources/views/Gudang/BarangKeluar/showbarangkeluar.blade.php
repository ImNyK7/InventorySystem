@extends('Layouts.main')

@section('content')
    <div class="wrapper-wrapper">
        <div id="page-content-wrapper" class="d-flex justify-content-center align-items-center">
            <div class="form-wrapper" style="margin-top: 20px; left: 550px">
                <h1>Detail Laporan<br>Barang Keluar</h1>
                <form>
                    <table>
                        <tr>
                            <td><label>Kode</label></td>
                            <td><input value="{{ $recordbarangkeluar->kodebrgklr }}" readonly disabled style="width: 200px">
                            </td>
                            <td><label>Tanggal Keluar</label></td>
                            <td><input value="{{ $recordbarangkeluar->tanggalbrgklr }}" readonly disabled
                                    style="width: 200px"></td>
                        </tr>
                        <tr>
                            <td><label>Jumlah</label></td>
                            <td><input value="{{ $recordbarangkeluar->jmlhbrgklr }}" readonly disabled style="width: 100px">
                                <input value="{{ $recordbarangkeluar->satuanbrg->namasatuan }}" style="width: 95px" readonly
                                    disabled></td>
                            <td><label>Nama Barang</label></td>
                            <td><input value="{{ $recordbarangkeluar->stokbarang->namabrg }}" readonly disabled
                                    style="width: 200px"></td>
                        </tr>
                        <tr>
                            <td><label>Harga Jual</label></td>
                            <td><input value="{{ $recordbarangkeluar->hrgjual }}" readonly disabled style="width: 200px">
                            </td>
                            <td><label>Kategori</label></td>
                            <td><input value="{{ $recordbarangkeluar->kategori->namakat }}" readonly disabled
                                    style="width: 200px"></td>
                        </tr>
                        <tr>
                            <td><label>Customer</label></td>
                            <td><textarea readonly disabled style="width: 200px">{{ $recordbarangkeluar->customer->perusahaancust ?? ''}}</textarea></td>
                        </tr>
                        <tr>
                            <td><label>Nomor Seri</label></td>
                            <td>
                                @php
                                $noseribrgklr = json_decode($recordbarangkeluar->noseribrgklr);
                                @endphp
                                @foreach ($noseribrgklr as $noseri)
                                    <input type="text" name="noseribrgklr[]" value="{{ $noseri }}" required disabled style="width: 200px">
                                @endforeach
                            </td>                            
                        </tr>
                    </table>
                </form>
                <a href="/barangkeluar/listbarangkeluar" style="text-decoration: none">
                    <button style="background-color: #1570EF; outline:none; border:none;margin-top: 10px"
                        class="btn btn-primary btn-sm">
                        <i class="fa-solid fa-arrow-left"></i> <span>Kembali</span>
                    </button>
                </a>
                <a href="{{ url('barangkeluar/'.$recordbarangkeluar->kodebrgklr.'/print') }}" target="_blank">
                    <button style="background-color: #28a745; outline:none; border:none;margin-top: 10px"
                        class="btn btn-success btn-sm">
                        <i class="fa-solid fa-print"></i> <span>Cetak Laporan</span>
                    </button>
                </a>
            </div>
        </div>
    </div>
@endsection
