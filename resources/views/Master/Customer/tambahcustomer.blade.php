@extends('Layouts.main')

@section('content')
    <div class="wrapper-wrapper">
        <div id="page-content-wrapper" class="d-flex justify-content-center align-items-center">
            <div class="form-wrapper">
                <h1>Form<br>Tambah Customer</h1>
                <form method="POST" action="{{ url('/customer/mastercustomer') }}">
                    @csrf
                    <table>
                        <tr>
                            <td><label for="kodecust">Kode</label></td>
                            <td>
                                <input type="text" name="kodecust" id="kodecust" value="{{ old('kodecust') }}" required style="width: 50px"
                                    @error('kodecust') class="is-invalid" @enderror>
                                @error('kodecust')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </td>
                            <td><label for="perusahaancust">Perusahaan</label></td>
                            <td>
                                <input type="text" name="perusahaancust" id="perusahaancust" value="{{ old('perusahaancust') }}" required
                                    style="width: 200px" @error('perusahaancust') class="is-invalid" @enderror>
                                @error('perusahaancust')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </td>
                        </tr>
                        <tr>
                            <td><label for="kontakcust">Kontak</label></td>
                            <td>
                                <input type="text" name="kontakcust" id="kontakcust" value="{{ old('kontakcust') }}" required style="width: 100px"
                                    @error('kontakcust') class="is-invalid" @enderror>
                                @error('kontakcust')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </td>
                            <td><label for="kotacust">Kota</label></td>
                            <td>
                                <input type="text" name="kotacust" id="kotacust" value="{{ old('kotacust') }}" required style="width: 150px"
                                    @error('kotacust') class="is-invalid" @enderror>
                                @error('kotacust')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </td>
                        </tr>
                        <tr>
                            <td><label for="alamatcust">Alamat</label></td>
                            <td>
                                <input type="text" name="alamatcust" id="alamatcust" value="{{ old('alamatcust') }}" required style="width: 200px"
                                    @error('alamatcust') class="is-invalid" @enderror>
                                @error('alamatcust')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </td>
                            <td><label for="alamat2cust">Alamat 2</label></td>
                            <td>
                                <input type="text" name="alamat2cust" id="alamat2cust" value="{{ old('alamat2cust') }}" style="width: 200px"
                                    @error('alamat2cust') class="is-invalid" @enderror>
                                @error('alamat2cust')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </td>
                        </tr>
                        <tr>
                            <td><label for="notelponcust">No Tlp</label></td>
                            <td>
                                <input type="text" name="notelponcust" id="notelponcust" value="{{ old('notelponcust') }}" required style="width: 120px"
                                    @error('notelponcust') class="is-invalid" @enderror>
                                @error('notelponcust')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </td>
                            <td><label for="limitcust">Limit</label></td>
                            <td>
                                <input type="text" name="limitcust" id="limitcust" value="{{ old('limitcust') }}" required style="width: 100px"
                                    @error('limitcust') class="is-invalid" @enderror>
                                @error('limitcust')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </td>
                        </tr>
                        <tr>
                            <td><label for="termcust">Term</label></td>
                            <td>
                                <input type="text" name="termcust" id="termcust" value="{{ old('termcust') }}" required style="width: 50px"
                                    @error('termcust') class="is-invalid" @enderror> Hari
                                @error('termcust')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </td>
                            <td><label for="desccust">Keterangan</label></td>
                            <td>
                                <input type="text" name="desccust" id="desccust" value="{{ old('desccust') }}" style="width: 150px"
                                    @error('desccust') class="is-invalid" @enderror>
                                @error('desccust')
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
