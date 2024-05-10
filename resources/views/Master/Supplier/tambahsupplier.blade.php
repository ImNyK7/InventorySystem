@extends('Layouts.main')

@section('content')
<div class="wrapper-wrapper">
    <div id="page-content-wrapper">
        <form>
            <div class="form-wrapper">
                <h1 class="judulform">Form<br>Tambah Supplier</h1>
                <form action="">
                    <table>
                        <tr>
                            <td><label>Kode</label></td>
                            <td><input type="text" name="KodeSupplier"required></td>
                        </tr>
                        <tr>
                            <td><label>Perusahaan</label></td>
                            <td><input type="text" name="PerusahaanSupplier"required></td>
                        </tr>
                        <tr>
                            <td><label for="KontakSupplier">Kontak</label></td>
                            <td><input type="text" name="KontakSupplier"required></td>
                        </tr>
                        <tr>
                            <td><label for="KotaSupplier">Kota</label></td>
                            <td><input type="text" name="KotaSupplier"required></td>
                        </tr>
                        <tr>
                            <td><label for="AlamatSupplier">Alamat</label></td>
                            <td><input type="text" name="KontakSupplier"required></td>
                        </tr>
                        <tr>
                            <td><label for="NomorSupplier">No Tlp</label></td>
                            <td><input type="text" name="NomorSupplier"required></td>
                        </tr>
                        <tr>
                            <td><label for="TermSupplier">Term</label></td>
                            <td><input type="text" name="TermSupplier"required></td>
                            <td>Hari</td>
                        </tr>
                    </table>
                    <a href="/mastersupplier"><button type="button" class="btncancel">Cancel</button></a>
                    <button type="submit" class="btnsubmit">Submit</button>
                </form>
            </div>
        </form>
    </div>
</div>
@endsection