@extends('Layouts.main')

@section('content')
    <div class="wrapper-wrapper">
        <div id="page-content-wrapper" class="d-flex justify-content-center align-items-center">
            <div class="form-wrapper">
                <h1>Form<br>Tambah Supplier</h1>
                <form action="{{ url('/supplier/mastersupplier') }}" method="POST">
                    @csrf
                    <table>
                        <tr>
                            <td><label for="kodesupp">Kode</label></td>
                            <td>
                                <input type="text" name="kodesupp" id="kodesupp" required value="{{ old('kodesupp') }}"
                                    style="width: 200px" @error('kodesupp') class="is-invalid" @enderror>
                                @error('kodesupp')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </td>
                            <td><label for="perusahaansupp">Perusahaan</label></td>
                            <td>
                                <textarea name="perusahaansupp" id="perusahaansupp" required
                                    style="width: 200px" @error('perusahaansupp') class="is-invalid" @enderror>{{ old('perusahaansupp') }}</textarea>
                                @error('perusahaansupp')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </td>
                        </tr>
                        <tr>
                            <td><label for="kontaksupp">Kontak</label></td>
                            <td>
                                <input type="text" name="kontaksupp" id="kontaksupp" required
                                    value="{{ old('kontaksupp') }}" style="width: 200px"
                                    @error('kontaksupp') class="is-invalid" @enderror>
                                @error('kontaksupp')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </td>
                            <td><label for="kotasupp">Kota</label></td>
                            <td>
                                <input type="text" name="kotasupp" id="kotasupp" required value="{{ old('kotasupp') }}"
                                    style="width: 200px" @error('kotasupp') class="is-invalid" @enderror>
                                @error('kotasupp')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </td>
                        </tr>
                        <tr>
                            <td><label for="alamatsupp">Alamat</label></td>
                            <td>
                                <textarea name="alamatsupp" id="alamatsupp" required
                                    style="width: 200px" @error('alamatsupp') class="is-invalid" @enderror>{{ old('alamatsupp') }}</textarea>
                                @error('alamatsupp')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </td>
                            <td><label for="alamat2supp">Alamat 2</label></td>
                            <td>
                                <textarea name="alamat2supp" id="alamat2supp" style="width: 200px"
                                    @error('alamat2supp') class="is-invalid" @enderror>{{ old('alamat2supp') }}</textarea>
                                @error('alamat2supp')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </td>
                        </tr>
                        <tr>
                            <td><label for="notelponsupp">No Tlp</label></td>
                            <td>
                                <input type="text" name="notelponsupp" id="notelponsupp" required
                                    value="{{ old('notelponsupp') }}" style="width: 200px"
                                    @error('notelponsupp') class="is-invalid" @enderror>
                                @error('notelponsupp')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </td>
                            <td><label for="termsupp">Term</label></td>
                            <td>
                                <input type="text" name="termsupp" id="termsupp" required value="{{ old('termsupp') }}"
                                    style="width: 165px" @error('termsupp') class="is-invalid" @enderror> Hari
                                @error('termsupp')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </td>
                        </tr>

                        <tr>
                            <td><label for="descsupp">Keterangan</label></td>
                            <td>
                                <textarea name="descsupp" id="descsupp" style="width: 200px"
                                    @error('descsupp') class="is-invalid" @enderror>{{ old('descsupp') }}</textarea>
                                @error('descsupp')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </td>
                        </tr>
                    </table>
                    <a href="{{ url('/supplier/mastersupplier') }}"><button type="button"
                            class="btncancel">Cancel</button></a>
                    <button type="submit" class="btnsubmit">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
