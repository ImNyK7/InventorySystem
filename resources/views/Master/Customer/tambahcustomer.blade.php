@extends('Layouts.main')

@section('content')
<div class="wrapper-wrapper">
    <div id="page-content-wrapper">
        <form>
            <div class="form-wrapper" style="margin-top: 20px">
                <h1>Form<br>Tambah Customer</h1>
                <form action="">
                    <table>
                        <tr>
                            <td><label>Kode</label></td>
                            <td><input type="text" name="KodeCustomer"required></td>
                        </tr>
                        <tr>
                            <td><label>Perusahaan</label></td>
                            <td><input type="text" name="PerusahaanCustomer"required></td>
                        </tr>
                        <tr>
                            <td><label>Kontak</label></td>
                            <td><input type="text" name="KontakCustomer"required></td>
                        </tr>
                        <tr>
                            <td><label>Kota</label></td>
                            <td><input type="text" name="KotaCustomer"required></td>
                        </tr>
                        <tr>
                            <td><label>Alamat</label></td>
                            <td><input type="text" name="KontakCustomer"required></td>
                        </tr>
                        <tr>
                            <td><label>No Tlp</label></td>
                            <td><input type="text" name="NomorCustomer"required></td>
                        </tr>
                        <tr>
                            <td><label>Term</label></td>
                            <td><input type="text" name="TermCustomer"required></td>
                            <td>Hari</td>
                        </tr>
                        <tr>
                            <td><label>Limit</label></td>
                            <td><input type="text" name="LimitCustomer"required></td>
                        </tr>
                    </table>
                    <a href="/customer/mastercustomer"><button type="button" class="btncancel">Cancel</button></a>
                    <button type="submit" class="btnsubmit">Submit</button>
                </form>
            </div>
        </form>
    </div>
</div>
@endsection