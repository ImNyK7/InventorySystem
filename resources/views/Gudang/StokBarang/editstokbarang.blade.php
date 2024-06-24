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
                <h1>Form<br>Stok Barang</h1>
                <form action="{{ url('stokbarang/' . $stokbarang->namabrg) }}" method="POST">
                    @csrf
                    @method('put')
                    <table>
                    
                        <tr>
                            <td><label for="namabrg">Nama Barang</label></td>
                            <td>
                                <input type="text" name="namabrg" id="namabrg" value="{{ old('namabrg', $stokbarang->namabrg)  }}"
                                    required style="width: 200px">
                                @error('namabrg')
                                    <div class="invalid-message">{{ $message }}</div>
                                @enderror
                            </td>
                        </tr>
                        <tr>
                            <td><label for="jmlhbrg">Jumlah Barang</label></td>
                            <td>
                                <input type="number" name="jmlhbrg" id="jmlhbrg" value="{{ old('jmlhbrg', $stokbarang->jmlhbrg) }}"
                                    style="width: 50px">
                                    <select name="satuanbrg_id" id="satuanbrg_id" style="width: 100px" >
                                        <option value="" selected></option>
                                        @foreach ($satuanbrgs as $satuanbrg)
                                            <option value="{{ $satuanbrg->id }}"
                                                {{ old('satuanbrg_id', $stokbarang->satuanbrg_id) == $satuanbrg->id ? 'selected' : '' }}>
                                                {{ $satuanbrg->namasatuan }}
                                            </option>
                                        @endforeach
                                    </select>
                                @error('jmlhbrg')
                                    <div class="invalid-message">{{ $message }}</div>
                                @enderror
                                @error('satuanbrg_id')
                                    <div class="invalid-message">{{ $message }}</div>
                                @enderror
                            </td>
                        </tr>
                        <tr>
                            <td><label for="kategori_id">Kategori</label></td>
                            <td>
                                <select id="kategori_id" name="kategori_id" style="width: 140px;">
                                    <option value="" selected></option>
                                    @foreach ($kategoris as $kategori)
                                        <option value="{{ $kategori->id }}"
                                            {{ old('kategori_id', $stokbarang->kategori_id) == $kategori->id ? 'selected' : '' }}>
                                            {{ $kategori->namakat }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('kategori_id')
                                    <div class="invalid-message">{{ $message }}</div>
                                @enderror
                            </td>
                        </tr>
                    </table>
                    <a href="/stokbarang"><button type="button" class="btncancel">Cancel</button></a>
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
@endsection
