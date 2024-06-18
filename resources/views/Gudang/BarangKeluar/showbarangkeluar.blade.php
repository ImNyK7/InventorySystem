@extends('Layouts.main')

@section('content')
    <div class="wrapper-wrapper">
        <div id="page-content-wrapper" class="d-flex justify-content-center align-items-center">
            <div class="form-wrapper" style="margin-top: 20px; left: 550px">
                <h1>Detail Barang Keluar</h1>
                <form>
                    <table>
                        <tr>
                            <td><label>Kode</label></td>
                            <td><input value="{{ $recordbarangkeluar->kodebrgklr }}" readonly disabled style="width: 90px">
                            </td>
                            <td><label>Tanggal Keluar</label></td>
                            <td><input value="{{ $recordbarangkeluar->tanggalbrgklr }}" readonly disabled
                                    style="width: 100px"></td>
                        </tr>
                        <tr>
                            <td><label>Jumlah</label></td>
                            <td><input value="{{ $recordbarangkeluar->jmlhbrgklr }}" readonly disabled style="width: 50px">
                                <input value="{{ $recordbarangkeluar->satuanbrg->namasatuan }}" style="width: 50px" readonly
                                    disabled></td>
                            <td><label>Nama Barang</label></td>
                            <td><input value="{{ $recordbarangkeluar->stokbarang->namabrg }}" readonly disabled
                                    style="width: 200px"></td>
                        </tr>
                        <tr>
                            <td><label>Harga Jual</label></td>
                            <td><input value="{{ $recordbarangkeluar->hrgjual }}" readonly disabled style="width: 100px">
                            </td>
                            <td><label>Kategori</label></td>
                            <td><input value="{{ $recordbarangkeluar->kategori->namakat }}" readonly disabled
                                    style="width: fit-content"></td>
                        </tr>
                        <tr>
                            <td><label>Customer</label></td>
                            <td><input value="{{ $recordbarangkeluar->customer->perusahaancust }}" readonly disabled
                                    style="width: 200px"></td>
                        </tr>
                        <tr>
                            <td><label>Nomor Seri</label></td>
                            <td>
                                @foreach ($recordbarangkeluar->noseribrgklr as $noseri)
                                    <input type="text" name="noseribrgklr[]" value="{{ $noseri }}" readonly disabled>
                                @endforeach
                            </td>
                        </tr>
                    </table>
                </form>

                <a href="/barangkeluar/listbarangkeluar">
                    <button style="background-color: #1570EF; outline:none; border:none;margin-top: 10px"
                        class="btn btn-primary btn-sm">
                        <i class="fa-solid fa-arrow-left"></i> <span>Back to List Barang Keluar</span>
                    </button>
                </a>
            </div>
        </div>
    </div>
@endsection
