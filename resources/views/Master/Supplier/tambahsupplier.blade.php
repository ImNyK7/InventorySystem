@extends('Layouts.main')

@section('content')
    <div class="wrapper-wrapper">
        <div id="page-content-wrapper">
            <div class="form-wrapper">
                <h1>Form<br>Tambah Supplier</h1>
                <form action="/supplier/mastersupplier" method="POST">
                    @csrf
                    <table>
                        <tr>
                            <td><label>Kode</label></td>
                            <td><input type="text" name="kodesupp"required style="width: 50px"></td>
                        </tr>
                        <tr>
                            <td><label>Perusahaan</label></td>
                            <td><input type="text" name="perusahaansupp"required style="width: 200px"></td>
                        </tr>
                        <tr>
                            <td><label for="KontakSupplier">Kontak</label></td>
                            <td><input type="text" name="kontaksupp"required style="width: 100px"></td>
                        </tr>
                        <tr>
                            <td><label for="KotaSupplier">Kota</label></td>
                            <td><input type="text" name="kotasupp"required style="width: 150px"></td>
                        </tr>
                        <tr>
                            <td><label for="AlamatSupplier">Alamat</label></td>
                            <td><input type="text" name="alamatsupp"required style="width: 200px"></td>
                        </tr>
                        <tr>
                            <td><label for="AlamatSupplier">Alamat 2</label></td>
                            <td><input type="text" name="alamat2supp" style="width: 200px"></td>
                        </tr>
                        <tr>
                            <td><label for="NomorSupplier">No Tlp</label></td>
                            <td><input type="text" name="notelponsupp"required style="width: 120px"></td>
                        </tr>
                        <tr>
                            <td><label for="TermSupplier">Term</label></td>
                            <td><input type="text" name="termsupp"required style="width: 50px"> Hari</td>
                        </tr>
                        <tr>
                            <td><label for="TermSupplier">Keterangan</label></td>
                            <td><input type="text" name="descsupp"style="width: 150px"></td>
                        </tr>
                    </table>
                    <a href="/supplier/mastersupplier"><button type="button" class="btncancel">Cancel</button></a>
                    <button type="submit" class="btnsubmit">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
