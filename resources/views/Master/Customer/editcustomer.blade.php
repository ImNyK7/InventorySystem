@extends('Layouts.main')

@section('content')
    <div class="wrapper-wrapper">
        <div id="page-content-wrapper" class="d-flex justify-content-center align-items-center">
            <div class="form-wrapper" style="overflow: hidden">
                <h1>Form<br>Edit Customer</h1>
                <form method="POST" action="{{ url('/customer/mastercustomer/' . $customer->perusahaancust) }}">
                    @csrf
                    @method('put')
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <div class="row mb-3">
                                <label for="kodecust" class="col-sm-3 col-form-label text-nowrap">Kode</label>
                                <div class="col-sm-8">
                                    <input type="text" name="kodecust" id="kodecust" value="{{ old('kodecust', $customer->kodecust) }}" required class="form-control">
                                    @error('kodecust')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="kontakcust" class="col-sm-3 col-form-label text-nowrap">Kontak</label>
                                <div class="col-sm-8">
                                    <input type="text" name="kontakcust" id="kontakcust" value="{{ old('kontakcust', $customer->kontakcust) }}" required class="form-control">
                                    @error('kontakcust')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="alamatcust" class="col-sm-3 col-form-label text-nowrap">Alamat</label>
                                <div class="col-sm-8">
                                    <textarea name="alamatcust" id="alamatcust" required class="form-control">{{ old('alamatcust', $customer->alamatcust) }}</textarea>
                                    @error('alamatcust')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="notelponcust" class="col-sm-3 col-form-label text-nowrap">No Tlp</label>
                                <div class="col-sm-8">
                                    <input type="text" name="notelponcust" id="notelponcust" value="{{ old('notelponcust', $customer->notelponcust) }}" required class="form-control">
                                    @error('notelponcust')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="termcust" class="col-sm-3 col-form-label text-nowrap">Term</label>
                                <div class="col-sm-8">
                                    <div class="input-group">
                                        <input type="text" name="termcust" id="termcust" value="{{ old('termcust', $customer->termcust) }}" required class="form-control" style="width: 60px; margin-right: 5px;">
                                        <span>Hari</span>
                                    </div>
                                    @error('termcust')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="row mb-3">
                                <label for="perusahaancust" class="col-sm-4 col-form-label text-nowrap">Perusahaan</label>
                                <div class="col-sm-8">
                                    <textarea name="perusahaancust" id="perusahaancust" required class="form-control">{{ old('perusahaancust', $customer->perusahaancust) }}</textarea>
                                    @error('perusahaancust')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="kotacust" class="col-sm-4 col-form-label text-nowrap">Kota</label>
                                <div class="col-sm-8">
                                    <input type="text" name="kotacust" id="kotacust" value="{{ old('kotacust', $customer->kotacust) }}" required class="form-control">
                                    @error('kotacust')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="alamat2cust" class="col-sm-4 col-form-label text-nowrap">Alamat 2</label>
                                <div class="col-sm-8">
                                    <textarea name="alamat2cust" id="alamat2cust" class="form-control">{{ old('alamat2cust', $customer->alamat2cust) }}</textarea>
                                    @error('alamat2cust')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="limitcust" class="col-sm-4 col-form-label text-nowrap">Limit</label>
                                <div class="col-sm-8">
                                    <input type="text" name="limitcust" id="limitcust" value="{{ old('limitcust', $customer->limitcust) }}" required class="form-control">
                                    @error('limitcust')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="desccust" class="col-sm-4 col-form-label text-nowrap">Keterangan</label>
                                <div class="col-sm-8">
                                    <textarea name="desccust" id="desccust" class="form-control">{{ old('desccust', $customer->desccust) }}</textarea>
                                    @error('desccust')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-end">
                        <a href="{{ url('/customer/mastercustomer') }}" class="btn btn-secondary me-2">Cancel</a>
                        <button type="submit" class="btn btn-primary me-2">Submit</button>
                    </div>
                </form>
                
            </div>
        </div>
    </div>
@endsection
