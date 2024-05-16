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
                            <td><input type="text" name="KodeKat"required></td>
                        </tr>
                        <tr>
                            <td><label>Kategori</label></td>
                            <td><input type="text" name="NamaKat"required></td>
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