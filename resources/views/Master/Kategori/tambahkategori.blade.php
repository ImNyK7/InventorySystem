@extends('Layouts.main')

@section('content')
<div class="wrapper-wrapper">
    <div id="page-content-wrapper" class="d-flex justify-content-center align-items-center">
        <div class="form-wrapper" style="margin-top: 20px">
            <h1>Form<br>Tambah Kategori</h1>
            <form action="/kategori/masterkategori" method="POST">
                @csrf
                <table>
                    <tr>
                        <td><label for="kodekat">Kode</label></td>
                        <td>
                            <input type="text" name="kodekat" id="kodekat" required style="width: 50px"
                                    @error('kodekat') class="is-invalid" @enderror>
                                @error('kodekat')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                        </td>
                    </tr>
                    <tr>
                        <td><label for="namakat">Nama Kategori</label></td>
                        <td>
                            <input type="text" name="namakat" id="namakat" required style="width: 150px"
                            @error('namakat') class="is-invalid" @enderror>
                        @error('namakat')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                        </td>
                    </tr>
                </table>
                <a href="/kategori/masterkategori"><button type="button" class="btncancel">Cancel</button></a>
                <button type="submit" class="btnsubmit">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection
