@extends('Layouts.main')

@section('content')
    <div class="wrapper-wrapper">
        <div id="page-content-wrapper" class="d-flex justify-content-center align-items-center">
            <div class="form-wrapper">
                <h1>Form<br>Edit kategori</h1>
                <form method="POST" action="{{  url('/kategori/masterkategori/'.$kategori->namakat)  }}">
                    @csrf
                    @method('put')
                    <table>
                        <tr>
                            <td><label for="kodekat">Kode</label></td>
                            <td>
                                <input type="text" name="kodekat" id="kodekat" value="{{ old('kodekat', $kategori->kodekat) }}" required style="width: 50px"
                                    @error('kodekat') class="is-invalid" @enderror>
                                @error('kodekat')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </td>
                            <td><label for="namakat">Nama Kategori</label></td>
                            <td>
                                <input type="text" name="namakat" id="namakat" value="{{ old('namakat', $kategori->namakat) }}" required
                                    style="width: 200px" @error('namakat') class="is-invalid" @enderror>
                                @error('namakat')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </td>
                        </tr>
                    </table>
                    <a href="{{ url('/kategori/masterkategori') }}"><button type="button" class="btncancel">Cancel</button></a>
                    <button type="submit" class="btnsubmit">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
