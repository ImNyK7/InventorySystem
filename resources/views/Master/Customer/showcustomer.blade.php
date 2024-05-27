@extends('Layouts.main')

@section('content')
<div class="wrapper-wrapper">
    <div id="page-content-wrapper">
        <div class="form-wrapper" style="margin-top: 20px; left: 550px">
            <h1>Detail Customer</h1>
            <form>
                <table>
                    <tr>
                        <td><label>Kode</label></td>
                        <td><input value="{{ $customer->kodecust }}" readonly style="width: 50px"></td>
                        <td><label>Perusahaan</label></td>
                        <td><input value="{{ $customer->perusahaancust }}" readonly style="width: 200px"></td>
                    </tr>
                    <tr>
                        <td><label>Kontak</label></td>
                        <td><input value="{{ $customer->kontakcust }}" readonly style="width: 100px"></td>
                        <td><label>Kota</label></td>
                        <td><input value="{{ $customer->kotacust }}" readonly style="width: 150px"></td>
                    </tr>
                    <tr>
                        <td><label>Alamat</label></td>
                        <td><input value="{{ $customer->alamatcust }}" readonly style="width: 300px"></td>
                        <td><label>No Tlp</label></td>
                        <td><input value="{{ $customer->notelponcust }}" readonly style="width: fit-content"></td>
                    </tr>
                    <tr>
                        <td><label>Alamat 2</label></td>
                        <td><input value="{{ $customer->alamat2cust ?? ' -' }}" readonly style="width: 200px"></td>
                        <td><label>Term</label></td>
                        <td><input value="{{ $customer->termcust }}" readonly style="width: 50px"> Hari</td>
                    </tr>
                    <tr>
                        <td><label>Limit</label></td>
                        <td><input value="{{ $customer->limitcust }}" readonly style="width: 150px"></td>
                    </tr>
                </table>
            </form>
            <a href="/customer/mastercustomer">
                <button style="background-color: #1570EF; outline:none; border:none;margin-top: 10px" class="btn btn-primary btn-sm">
                    <i class="fa-solid fa-arrow-left"></i> <span>Back to All Customer</span>
                </button>
            </a>     
        </div>
    </div>
</div>
@endsection
