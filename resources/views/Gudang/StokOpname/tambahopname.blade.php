@extends('Layouts.main')

@section('content')
    <style>
        .invalid-message {
            color: red;
            font-size: 0.9em;
            margin-top: 5px;
        }
    </style>
    <div class="wrapper-wrapper">
        <div id="page-content-wrapper" class="d-flex justify-content-center align-items-center">
            <div class="form-wrapper" style="margin-top: 20px">
                <h1>Form<br>Stok Opname</h1>
                <form action="{{ route('stokopname.store') }}" method="POST">
                    @csrf
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <div class="row mb-3">
                                <label for="namapenulis" class="col-sm-4 col-form-label text-nowrap">Nama Penulis</label>
                                <div class="col-sm-8">
                                    <input type="text" name="namapenulis" value="{{ old('namapenulis') }}" required class="form-control" style="width: 200px;">
                                    @error('namapenulis')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="tanggalopname" class="col-sm-4 col-form-label text-nowrap">Tanggal</label>
                                <div class="col-sm-8">
                                    <input type="date" name="tanggalopname" id="tanggalopname" value="{{ old('tanggalopname') }}" min="2015-01-02" max="2030-12-31" required class="form-control" style="width: 200px;">
                                    @error('tanggalopname')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="row mb-3">
                                <label for="descopname" class="col-sm-4 col-form-label text-nowrap">Keterangan</label>
                                <div class="col-sm-8">
                                    <textarea name="descopname" id="descopname" class="form-control" style="width: 200px;">{{ old('descopname') }}</textarea>
                                    @error('descopname')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-end">
                        <a href="/stokopname" class="btn btn-secondary me-2">Cancel</a>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
                
            </div>
        </div>
    </div>
    <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.1/js/select2.min.js"></script>
    <script>
        $(document).ready(function() {
            $("select").select2({
                placeholder: "",
            });
        });
    </script>
@endsection
