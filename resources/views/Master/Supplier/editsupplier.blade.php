@extends('Layouts.main')

@section('content')
    <div class="wrapper-wrapper">
        <div id="page-content-wrapper" class="d-flex justify-content-center align-items-center">
            <div class="form-wrapper">
                <h1>Form<br>Edit Supplier</h1>
                <form method="POST" action="{{  url('/supplier/mastersupplier/'.$supplier->perusahaansupp)  }}">
                    @csrf
                    @method('put')
                    <table>
                        <tr>
                            <td><label for="kodesupp">Kode</label></td>
                            <td>
                                <input type="text" name="kodesupp" id="kodesupp" value="{{ old('kodesupp', $supplier->kodesupp) }}" required style="width: 50px"
                                    @error('kodesupp') class="is-invalid" @enderror>
                                @error('kodesupp')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </td>
                            <td><label for="perusahaansupp">Perusahaan</label></td>
                            <td>
                                <input type="text" name="perusahaansupp" id="perusahaansupp" value="{{ old('perusahaansupp', $supplier->perusahaansupp) }}" required
                                    style="width: 200px" @error('perusahaansupp') class="is-invalid" @enderror>
                                @error('perusahaansupp')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </td>
                        </tr>
                        <tr>
                            <td><label for="kontaksupp">Kontak</label></td>
                            <td>
                                <input type="text" name="kontaksupp" id="kontaksupp" value="{{ old('kontaksupp', $supplier->kontaksupp) }}" required style="width: 100px"
                                    @error('kontaksupp') class="is-invalid" @enderror>
                                @error('kontaksupp')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </td>
                            <td><label for="kotasupp">Kota</label></td>
                            <td>
                                <input type="text" name="kotasupp" id="kotasupp" value="{{ old('kotasupp', $supplier->kotasupp) }}" required style="width: 150px"
                                    @error('kotasupp') class="is-invalid" @enderror>
                                @error('kotasupp')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </td>
                        </tr>
                        <tr>
                            <td><label for="alamatsupp">Alamat</label></td>
                            <td>
                                <input type="text" name="alamatsupp" id="alamatsupp" value="{{ old('alamatsupp', $supplier->alamatsupp) }}" required style="width: 200px"
                                    @error('alamatsupp') class="is-invalid" @enderror>
                                @error('alamatsupp')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </td>
                            <td><label for="alamat2supp">Alamat 2</label></td>
                            <td>
                                <input type="text" name="alamat2supp" id="alamat2supp" value="{{ old('alamat2supp', $supplier->alamat2supp) }}" style="width: 200px"
                                    @error('alamat2supp') class="is-invalid" @enderror>
                                @error('alamat2supp')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </td>
                        </tr>
                        <tr>
                            <td><label for="notelponsupp">No Tlp</label></td>
                            <td>
                                <input type="text" name="notelponsupp" id="notelponsupp" value="{{ old('notelponsupp', $supplier->notelponsupp) }}" required style="width: 120px"
                                    @error('notelponsupp') class="is-invalid" @enderror>
                                @error('notelponsupp')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </td>
                            <td><label for="descsupp">Keterangan</label></td>
                            <td>
                                <input type="text" name="descsupp" id="descsupp" value="{{ old('descsupp', $supplier->descsupp) }}" style="width: 150px"
                                    @error('descsupp') class="is-invalid" @enderror>
                                @error('descsupp')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </td>
                        </tr>
                        <tr>
                            <td><label for="termsupp">Term</label></td>
                            <td>
                                <input type="text" name="termsupp" id="termsupp" value="{{ old('termsupp', $supplier->termsupp) }}" required style="width: 50px"
                                    @error('termsupp') class="is-invalid" @enderror> Hari
                                @error('termsupp')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </td>
                            
                        </tr>
                    </table>
                    <a href="{{ url('/supplier/mastersupplier') }}"><button type="button" class="btncancel">Cancel</button></a>
                    <button type="submit" class="btnsubmit">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
