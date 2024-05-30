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
                <h1>Form<br>Barang Keluar</h1>
                <form action="/barangkeluar/listbarangkeluar" method="POST">
                    @csrf
                    <table>
                        <tr>
                            <td><label for="kodebrgklr">Kode Laporan</label></td>
                            <td>
                                <input type="text" name="kodebrgklr" id="kodebrgklr" value="{{ old('kodebrgklr') }}"
                                    required style="width: 100px">
                                @error('kodebrgklr')
                                    <div class="invalid-message">{{ $message }}</div>
                                @enderror
                            </td>
                            <td><label for="customer_id">Customer</label></td>
                            <td>
                                <select id="customer_id" name="customer_id" required style="width: 190px; height: 30px">
                                    <option value="" selected></option>
                                    @foreach ($customers as $customer)
                                        <option value="{{ $customer->id }}"
                                            {{ old('customer_id') == $customer->id ? 'selected' : '' }}>
                                            {{ $customer->perusahaancust}}
                                        </option>
                                    @endforeach
                                </select>
                                @error('customer_id')
                                    <div class="invalid-message">{{ $message }}</div>
                                @enderror
                            </td>
                        </tr>
                        <tr>
                            <td><label for="tanggalbrgklr">Tanggal</label></td>
                            <td>
                                <input type="date" name="tanggalbrgklr" id="dateField"
                                    value="{{ old('tanggalbrgklr') }}" min="2015-01-02" max="2030-12-31" required readonly>
                                @error('tanggalbrgklr')
                                    <div class="invalid-message">{{ $message }}</div>
                                @enderror
                            </td>
                            <td><label for="namabrgklr">Nama Barang</label></td>
                            <td>
                                <input type="text" name="namabrgklr" id="namabrgklr" value="{{ old('namabrgklr') }}"
                                    required style="width: 200px">
                                @error('namabrgklr')
                                    <div class="invalid-message">{{ $message }}</div>
                                @enderror
                            </td>
                        </tr>
                        <tr>
                            <td><label for="jmlhbrgklr">Jumlah Barang</label></td>
                            <td>
                                <input type="number" name="jmlhbrgklr" id="jmlhbrgklr" value="{{ old('jmlhbrgklr') }}"
                                    required style="width: 50px">
                                <select name="satuanbrg_id" id="satuanbrg_id" required style="width: 100px">
                                    <option value="" selected></option>
                                    @foreach ($satuanbrgs as $satuanbrg)
                                        <option value="{{ $satuanbrg->id }}"
                                            {{ old('satuanbrg_id') == $satuanbrg->id ? 'selected' : '' }}>
                                            {{ $satuanbrg->namasatuan }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('jmlhbrgklr')
                                    <div class="invalid-message">{{ $message }}</div>
                                @enderror
                                @error('satuanbrg_id')
                                    <div class="invalid-message">{{ $message }}</div>
                                @enderror
                            </td>
                            <td><label for="hrgjual">Harga Jual</label></td>
                            <td>
                                <input type="text" name="hrgjual" id="hrgjual" value="{{ old('hrgjual') }}" required
                                    style="width: 100px">
                                @error('hrgjual')
                                    <div class="invalid-message">{{ $message }}</div>
                                @enderror
                            </td>
                        </tr>
                        <tr>
                            <td><label for="kategori_id">Kategori</label></td>
                            <td>
                                <select id="kategori_id" name="kategori_id" required style="width: 140px;">
                                    <option value="" selected></option>
                                    @foreach ($kategoris as $kategori)
                                        <option value="{{ $kategori->id }}"
                                            {{ old('kategori_id') == $kategori->id ? 'selected' : '' }}>
                                            {{ $kategori->namakat }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('kategori_id')
                                    <div class="invalid-message">{{ $message }}</div>
                                @enderror
                            </td>
                        </tr>
                        <tr>
                            <td><label>Nomor Seri</label></td>
                            <td><input type="text" name="noseribrgklr" required value="{{ old('noseribrgklr') }}"></td>
                        </tr>
                    </table>
                    <a href="/barangkeluar/listbarangkeluar"><button type="button" class="btncancel">Cancel</button></a>
                    <button type="submit" class="btnsubmit">Submit</button>
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
    <script>
        document.addEventListener('DOMContentLoaded', (event) => {
            const dateField = document.getElementById('dateField');
            const today = new Date().toISOString().split('T')[0];
            dateField.value = today;
        });
    </script>
@endsection
