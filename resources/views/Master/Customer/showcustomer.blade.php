@extends('Layouts.main')

@section('content')
<div class="wrapper-wrapper">
    <div id="page-content-wrapper"  class="d-flex justify-content-center align-items-center">
        <div class="form-wrapper" style="margin-top: 20px; left: 550px">
            <h1>Detail Customer</h1>
            <form>
                <table>
                    <tr>
                        <td><label>Kode</label></td>
                        <td><input value="{{ $customer->kodecust }}" readonly disabled style="width: 200px"></td>
                        <td><label>Kontak</label></td>
                        <td><input value="{{ $customer->kontakcust }}" readonly disabled style="width: 200px"></td>
                    </tr>
                    <tr>
                        <td><label>Perusahaan</label></td>
                        <td><textarea readonly disabled style="width: 200px">{{ $customer->perusahaancust }}</textarea></td>
                        <td><label>Kota</label></td>
                        <td><input value="{{ $customer->kotacust }}" readonly disabled style="width: 200px"></td>
                    </tr>
                    <tr>
                        <td><label>Alamat</label></td>
                        <td><textarea readonly disabled style="width: 200px">{{ $customer->alamatcust }}</textarea></td>
                                                <td><label>Alamat 2</label></td>
                        <td><textarea readonly disabled style="width: 200px">{{ $customer->alamat2cust ?? ' -' }}</textarea></td>
                    
                    </tr>
                    <tr>
                        <td><label>No Tlp</label></td>
                        <td><input value="{{ $customer->notelponcust }}" readonly disabled style="width: 200px"></td>
                        <td><label>Term</label></td>
                        <td><input value="{{ $customer->termcust }}" readonly disabled style="width: 165px"> Hari</td>
                    </tr>
                    <tr>
                        <td><label>Keterangan</label></td>
                        <td><textarea readonly disabled style="width: 200px">{{ $customer->desccust }}</textarea></td>
                        <td><label>Limit</label></td>
                        <td><input value="{{ $customer->limitcust }}" readonly disabled style="width: 200px"></td>
                    </tr>
                </table>
            </form>
            <a href="/customer/mastercustomer">
                <button style="background-color: #1570EF; outline:none; border:none;margin-top: 10px" class="btn btn-primary btn-sm">
                    <i class="fa-solid fa-arrow-left"></i> <span>Kembali</span>
                </button>
            </a>     
        </div>
    </div>
</div>
@endsection
