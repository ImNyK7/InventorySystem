@extends('Layouts.main')

@section('content')
    <div class="wrapper-wrapper">
        <div id="page-content-wrapper" class="d-flex justify-content-center align-items-center">
            <div class="form-container">
                <div class="form-wrapper">
                    <h1>Form Tambah Customer</h1>
                    <form method="POST" action="{{ url('/customer/mastercustomer') }}">
                        @csrf
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <div class="row mb-3">
                                    <label for="kodecust" class="col-sm-3 col-form-label text-nowrap">Kode</label>
                                    <div class="col-sm-8">
                                        <input type="text" name="kodecust" id="kodecust" value="{{ old('kodecust') }}" required class="form-control">
                                        @error('kodecust')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="alamatcust" class="col-sm-3 col-form-label text-nowrap">Alamat</label>
                                    <div class="col-sm-8">
                                        <textarea name="alamatcust" id="alamatcust" required class="form-control">{{ old('alamatcust') }}</textarea>
                                        @error('alamatcust')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="kontakcust" class="col-sm-3 col-form-label text-nowrap">Kontak</label>
                                    <div class="col-sm-8">
                                        <input type="text" name="kontakcust" id="kontakcust" value="{{ old('kontakcust') }}" required class="form-control">
                                        @error('kontakcust')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="kotacust" class="col-sm-3 col-form-label text-nowrap">Kota</label>
                                    <div class="col-sm-8">
                                        <input type="text" name="kotacust" id="kotacust" value="{{ old('kotacust') }}" required class="form-control">
                                        @error('kotacust')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row mb-3">
                                    <label for="perusahaancust" class="col-sm-4 col-form-label text-nowrap">Perusahaan</label>
                                    <div class="col-sm-8">
                                        <input name="perusahaancust" id="perusahaancust" required class="form-control">{{ old('perusahaancust') }}</input>
                                        @error('perusahaancust')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="alamat2cust" class="col-sm-4 col-form-label text-nowrap">Alamat 2</label>
                                    <div class="col-sm-8">
                                        <textarea name="alamat2cust" id="alamat2cust" class="form-control">{{ old('alamat2cust') }}</textarea>
                                        @error('alamat2cust')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="notelponcust" class="col-sm-4 col-form-label text-nowrap">No Tlp</label>
                                    <div class="col-sm-8">
                                        <input type="text" name="notelponcust" id="notelponcust" value="{{ old('notelponcust') }}" required class="form-control">
                                        @error('notelponcust')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="limitcust" class="col-sm-4 col-form-label text-nowrap">Limit</label>
                                    <div class="col-sm-8">
                                        <input type="text" name="limitcust" id="limitcust" value="{{ old('limitcust') }}" required class="form-control">
                                        @error('limitcust')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <div class="row mb-1">
                                    <label for="termcust" class="col-sm-3 col-form-label text-nowrap">Term</label>
                                    <div class="col-sm-8 d-flex align-items-center">
                                        <input type="text" name="termcust" id="termcust" value="{{ old('termcust') }}" required class="form-control" style="width: 80px;">
                                        <span class="ms-2">Hari</span>
                                        @error('termcust')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row mb-1">
                                    <label for="desccust" class="col-sm-4 col-form-label text-nowrap">Keterangan</label>
                                    <div class="col-sm-8">
                                        <textarea name="desccust" id="desccust" class="form-control">{{ old('desccust') }}</textarea>
                                        @error('desccust')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-end">
                            <a href="{{ url('/customer/mastercustomer') }}" class="btn btn-secondary me-2">Cancel</a>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
@endsection
