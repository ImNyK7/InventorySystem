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
                            <td><input type="text" name="KodeCust"required style="width: 50px"></td>
                        </tr>
                        <tr>
                            <td><label>Perusahaan</label></td>
                            <td><input type="text" name="PerusahaanCust"required style="width: 200px"td>
                        </tr>
                        <tr>
                            <td><label>Kontak</label></td>
                            <td><input type="text" name="KontakCust"required style="width: 100px"></td>
                        </tr>
                        <tr>
                            <td><label>Kota</label></td>
                            <td><input type="text" name="KotaCust"required style="width: 150px"></td>
                        </tr>
                        <tr>
                            <td><label>Alamat</label></td>
                            <td><input type="text" name="AlamatCust"required style="width: 200px"></td>
                        </tr>
                        <tr>
                            <td><label>Alamat 2</label></td>
                            <td><input type="text" name="Alamat2Cust" style="width: 200px"></td>
                        </tr>
                        <tr>
                            <td><label>No Tlp</label></td>
                            <td><input type="text" name="TlpCust"required style="width: 120px"></td>
                        </tr>
                        <tr>
                            <td><label>Term</label></td>
                            <td><input type="text" name="TermCust"required style="width: 50px"> Hari</td>
                            
                        </tr>
                        <tr>
                            <td><label>Limit</label></td>
                            <td><input type="text" name="LimitCustomer"required style="width: 150px"></td>
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