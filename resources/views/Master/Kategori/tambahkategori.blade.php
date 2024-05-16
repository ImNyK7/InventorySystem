@extends('Layouts.main')

@section('content')
<div class="wrapper-wrapper">
    <div id="page-content-wrapper">
        <form>
            <div class="form-wrapper">
                <h1>Form<br>Tambah kategori</h1>
                <form action="/kategori/masterkategori">
                    <table>
                        <tr>
                            <td><label>Kode</label></td>
                            <td><input type="text" name="KodeKat"required style="width: 50px"></td>
                        </tr>
                        <tr>
                            <td><label>Nama Kategori</label></td>
                            <td><input type="text" name="NamaKat"required style="width: 150px"></td>
                        </tr>
                    </table>
                    <a href="/kategori/masterkategori"><button type="button" class="btncancel">Cancel</button></a>
                    <button type="submit" class="btnsubmit">Submit</button>
                </form>
            </div>
        </form>
    </div>
</div>
@endsection