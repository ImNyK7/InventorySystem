@extends('Layouts.main')

@section('content')
    <div class="wrapper-wrapper">
        <div id="page-content-wrapper" class="d-flex justify-content-center align-items-center">
            <div class="form-wrapper" style="overflow: hidden">
                <h1>Form<br>Edit Supplier</h1>
                <form method="POST" action="{{ url('/supplier/mastersupplier/'.$supplier->perusahaansupp) }}">
                    @csrf
                    @method('put')
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <div class="row mb-3">
                                <label for="kodesupp" class="col-sm-3 col-form-label text-nowrap">Kode</label>
                                <div class="col-sm-8">
                                    <input type="text" name="kodesupp" id="kodesupp" value="{{ old('kodesupp', $supplier->kodesupp) }}" required class="form-control">
                                    @error('kodesupp')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="kontaksupp" class="col-sm-3 col-form-label text-nowrap">Kontak</label>
                                <div class="col-sm-8">
                                    <input type="text" name="kontaksupp" id="kontaksupp" value="{{ old('kontaksupp', $supplier->kontaksupp) }}" required class="form-control">
                                    @error('kontaksupp')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="alamatsupp" class="col-sm-3 col-form-label text-nowrap">Alamat</label>
                                <div class="col-sm-8">
                                    <textarea name="alamatsupp" id="alamatsupp" required class="form-control">{{ old('alamatsupp', $supplier->alamatsupp) }}</textarea>
                                    @error('alamatsupp')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="notelponsupp" class="col-sm-3 col-form-label text-nowrap">No Tlp</label>
                                <div class="col-sm-8">
                                    <input type="text" name="notelponsupp" id="notelponsupp" value="{{ old('notelponsupp', $supplier->notelponsupp) }}" required class="form-control">
                                    @error('notelponsupp')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="termsupp" class="col-sm-3 col-form-label text-nowrap">Term</label>
                                <div class="col-sm-8">
                                    <div class="input-group">
                                        <input type="text" name="termsupp" id="termsupp" value="{{ old('termsupp', $supplier->termsupp) }}" required class="form-control" style="width: 60px; margin-right: 5px;">
                                        <span>Hari</span>
                                    </div>
                                    @error('termsupp')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="row mb-3">
                                <label for="perusahaansupp" class="col-sm-4 col-form-label text-nowrap">Perusahaan</label>
                                <div class="col-sm-8">
                                    <input type="text" name="perusahaansupp" id="perusahaansupp" value="{{ old('perusahaansupp', $supplier->perusahaansupp) }}" required class="form-control">
                                    @error('perusahaansupp')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="kotasupp" class="col-sm-4 col-form-label text-nowrap">Kota</label>
                                <div class="col-sm-8">
                                    <input type="text" name="kotasupp" id="kotasupp" value="{{ old('kotasupp', $supplier->kotasupp) }}" required class="form-control">
                                    @error('kotasupp')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="alamat2supp" class="col-sm-4 col-form-label text-nowrap">Alamat 2</label>
                                <div class="col-sm-8">
                                    <textarea name="alamat2supp" id="alamat2supp" class="form-control">{{ old('alamat2supp', $supplier->alamat2supp) }}</textarea>
                                    @error('alamat2supp')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="descsupp" class="col-sm-4 col-form-label text-nowrap">Keterangan</label>
                                <div class="col-sm-8">
                                    <textarea name="descsupp" id="descsupp" class="form-control">{{ old('descsupp', $supplier->descsupp) }}</textarea>
                                    @error('descsupp')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-end">
                        <a href="{{ url('/supplier/mastersupplier') }}" class="btn btn-secondary me-2">Cancel</a>
                        <button type="submit" class="btn btn-primary me-2">Submit</button>
                    </div>
                </form>                
            </div>
        </div>
    </div>
@endsection
