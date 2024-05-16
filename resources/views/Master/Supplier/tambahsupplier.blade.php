@extends('Layouts.main')

@section('content')
<div class="wrapper-wrapper">
    <div id="page-content-wrapper">
        <form>
            <div class="form-wrapper">
                <h1>Form<br>Tambah Supplier</h1>
                <form action="">
                    <table>
                        <tr>
                            <td><label>Kode</label></td>
                            <td><input type="text" name="KodeSupp"required></td>
                        </tr>
                        <tr>
                            <td><label>Perusahaan</label></td>
                            <td><input type="text" name="PerusahaanSupp"required></td>
                        </tr>
                        <tr>
                            <td><label for="KontakSupplier">Kontak</label></td>
                            <td><input type="text" name="KontakSupp"required></td>
                        </tr>
                        <tr>
                            <td><label for="KotaSupplier">Kota</label></td>
                            <td><input type="text" name="KotaSupp"required></td>
                        </tr>
                        <tr>
                            <td><label for="AlamatSupplier">Alamat</label></td>
                            <td><input type="text" name="AlamatSupp"required></td>
                        </tr>
                        <tr>
                            <td><label for="AlamatSupplier">Alamat 2</label></td>
                            <td><input type="text" name="Alamat2Supp"required></td>
                        </tr>
                        <tr>
                            <td><label for="NomorSupplier">No Tlp</label></td>
                            <td><input type="text" name="TlpSupp"required></td>
                        </tr>
                        <tr>
                            <td><label for="TermSupplier">Term</label></td>
                            <td><input type="text" name="TermSupp"required></td>
                            <td>Hari</td>
                        </tr>
                    </table>
                    <a href="/supplier/mastersupplier"><button type="button" class="btncancel">Cancel</button></a>
                    <button type="submit" class="btnsubmit">Submit</button>
                </form>
            </div>
        </form>
    </div>
</div>
@endsection