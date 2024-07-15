@extends('Layouts.main')

@section('content')
    <div class="wrapper-wrapper">
        <div id="page-content-wrapper" class="d-flex justify-content-center align-items-center">
            <div class="form-wrapper">
                <h1>Edit kategori</h1>
                <form method="POST" action="{{ url('/kategori/masterkategori/'.$kategori->namakat) }}">
                    @csrf
                    @method('put')
                    <div class="mb-3">
                        <label for="kodekat" class="form-label">Kode</label>
                        <input type="text" name="kodekat" id="kodekat" value="{{ old('kodekat', $kategori->kodekat) }}" required class="form-control" style="width: 300px;">
                        @error('kodekat')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="namakat" class="form-label">Nama Kategori</label>
                        <input type="text" name="namakat" id="namakat" value="{{ old('namakat', $kategori->namakat) }}" required class="form-control" style="width: 300px;">
                        @error('namakat')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="d-flex justify-content-end">
                        <a href="{{ url('/kategori/masterkategori') }}" class="btn btn-secondary me-2">Cancel</a>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>                
            </div>
        </div>
    </div>
@endsection
