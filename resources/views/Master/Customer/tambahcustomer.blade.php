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
                            <td><input type="text" name="KodeCust"required></td>
                        </tr>
                        <tr>
                            <td><label>Perusahaan</label></td>
                            <td><input type="text" name="PerusahaanCust"required></td>
                        </tr>
                        <tr>
                            <td><label>Kontak</label></td>
                            <td><input type="text" name="KontakCust"required></td>
                        </tr>
                        <tr>
                            <td><label>Kota</label></td>
                            <td><input type="text" name="KotaCust"required></td>
                        </tr>
                        <tr>
                            <td><label>Alamat</label></td>
                            <td><input type="text" name="AlamatCust"required></td>
                        </tr>
                        <tr>
                            <td><label>Alamat 2</label></td>
                            <td><input type="text" name="Alamat2Cust"required></td>
                        </tr>
                        <tr>
                            <td><label>No Tlp</label></td>
                            <td><input type="text" name="TlpCust"required></td>
                        </tr>
                        <tr>
                            <td><label>Term</label></td>
                            <td><input type="text" name="TermCust"required></td>
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