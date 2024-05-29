@extends('Layouts.main')

@section('content')
<div class="wrapper-wrapper">
    <div id="page-content-wrapper">
        <div class="form-wrapper" style="margin-top: 20px">
            <h1>Form<br>Tambah Customer</h1>
            <form method="POST" action='/customer/mastercustomer'>
                @csrf
                <table>
                    <tr>
                        <td><label>Kode</label></td>
                        <td><input type="text" name="kodecust" required style="width: 50px"></td>
                    </tr>
                    <tr>
                        <td><label>Perusahaan</label></td>
                        <td><input type="text" name="perusahaancust" required style="width: 200px"></td>
                    </tr>
                    <tr>
                        <td><label>Kontak</label></td>
                        <td><input type="text" name="kontakcust" required style="width: 100px"></td>
                    </tr>
                    <tr>
                        <td><label>Kota</label></td>
                        <td><input type="text" name="kotacust" required style="width: 150px"></td>
                    </tr>
                    <tr>
                        <td><label>Alamat</label></td>
                        <td><input type="text" name="alamatcust" required style="width: 200px"></td>
                    </tr>
                    <tr>
                        <td><label>Alamat 2</label></td>
                        <td><input type="text" name="alamat2cust" style="width: 200px"></td>
                    </tr>
                    <tr>
                        <td><label>No Tlp</label></td>
                        <td><input type="text" name="notelponcust" required style="width: 120px"></td>
                    </tr>
                    <tr>
                        <td><label>Term</label></td>
                        <td><input type="text" name="termcust" required style="width: 50px"> Hari</td>
                    </tr>
                    <tr>
                        <td><label>Limit</label></td>
                        <td><input type="text" name="limitcust" required style="width: 150px"></td>
                    </tr>
                    <tr>
                        <td><label>Keterangan</label></td>
                        <td><input type="text" name="desccust" style="width: 150px"></td>
                    </tr>
                </table>
                <a href='/customer/mastercustomer'><button type="button" class="btncancel">Cancel</button></a>
                <button type="submit" class="btnsubmit">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection
