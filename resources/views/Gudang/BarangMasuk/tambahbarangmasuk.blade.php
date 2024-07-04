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
                <h1>Form Laporan<br>Barang Masuk</h1>
                <form action="{{ route('listbarangmasuk.store') }}" method="POST">
                    @csrf
                    <table>
                        <tr>
                            <td><label for="kodebrgmsk">Kode Laporan</label></td>
                            <td>
                                <input type="text" name="kodebrgmsk" id="kodebrgmsk" value="{{ old('kodebrgmsk') }}"
                                    required style="width: 200px">
                                @error('kodebrgmsk')
                                    <div class="invalid-message">{{ $message }}</div>
                                @enderror
                            </td>
                            <td><label for="supplier_id">Supplier</label></td>
                            <td>
                                <select id="supplier_id" name="supplier_id" required style="width: 200px">
                                    <option value="" selected></option>
                                    @foreach ($suppliers as $supplier)
                                        <option value="{{ $supplier->id }}"
                                            {{ old('supplier_id') == $supplier->id ? 'selected' : '' }}>
                                            {{ $supplier->perusahaansupp }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('supplier_id')
                                    <div class="invalid-message">{{ $message }}</div>
                                @enderror
                            </td>
                        </tr>
                        <td><label for="stokbarang_id">Nama Barang</label></td>
                            <td>
                                <select id="stokbarang_id" name="stokbarang_id" required style="width: 200px">
                                    <option value="" selected></option>
                                    @foreach ($stokbarangs as $stokbarang)
                                        <option value="{{ $stokbarang->id }}"
                                            data-jumlah="{{ $stokbarang->jmlhbrg }}"
                                            data-kategori="{{ $stokbarang->kategori_id }}"
                                            data-satuan="{{ $stokbarang->satuanbrg_id }}"
                                            {{ old('stokbarang_id') == $stokbarang->id ? 'selected' : '' }}>
                                            {{ $stokbarang->namabrg }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('stokbarang_id')
                                    <div class="invalid-message">{{ $message }}</div>
                                @enderror
                            </td>
                            <td><label for="tanggalbrgmsk">Tanggal</label></td>
                            <td>
                                <input type="date" name="tanggalbrgmsk" id="dateField"
                                    value="{{ old('tanggalbrgmsk') }}" min="2015-01-02" max="2030-12-31" required style="width: 200px">
                                @error('tanggalbrgmsk')
                                    <div class="invalid-message">{{ $message }}</div>
                                @enderror
                            </td>
                        <tr>
                            <td><label for="jmlhbrgmsk">Jumlah Barang</label></td>
                            <td>
                                <div style="display: flex; align-items: center;">
                                    <input type="number" name="jmlhbrgmsk" id="jmlhbrgmsk" 
                                           value="{{ old('jmlhbrgmsk') }}" required style="width: 100px; margin-right: 5px;">
                                    <select name="satuanbrg_id" id="satuanbrg_display" required 
                                            style="width: 100px;">
                                        <option value="" selected></option>
                                        @foreach ($satuanbrgs as $satuanbrg)
                                            <option value="{{ $satuanbrg->id }}" 
                                                    {{ old('satuanbrg_id') == $satuanbrg->id ? 'selected' : '' }}>
                                                {{ $satuanbrg->namasatuan }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                @error('jmlhbrgmsk')
                                    <div class="invalid-message">{{ $message }}</div>
                                @enderror
                                @error('satuanbrg_id')
                                    <div class="invalid-message">{{ $message }}</div>
                                @enderror
                            </td>
                            <td><label for="hrgbeli">Harga Beli</label></td>
                            <td>
                                <input type="text" name="hrgbeli" id="hrgbeli" value="{{ old('hrgbeli') }}" required
                                    style="width: 200px">
                                @error('hrgbeli')
                                    <div class="invalid-message">{{ $message }}</div>
                                @enderror
                            </td>
                        </tr>
                        <tr>
                            <td><label for="kategori_id_display">Kategori</label></td>
                            <td>
                                <select id="kategori_id_display" name="kategori_id_display" required style="width: 200px;" disabled>
                                    <option value="" selected></option>
                                    @foreach ($kategoris as $kategori)
                                        <option value="{{ $kategori->id }}"
                                            {{ old('kategori_id') == $kategori->id ? 'selected' : '' }}>
                                            {{ $kategori->namakat }}
                                        </option>
                                    @endforeach
                                </select>
                                <input type="hidden" name="kategori_id" id="kategori_id" value="{{ old('kategori_id') }}">
                                @error('kategori_id')
                                    <div class="invalid-message">{{ $message }}</div>
                                @enderror
                            </td>
                        </tr>
                    </table>
                    <a href="/stokbarang/create" style="font-size: 14px; text-decoration: none; margin-left: 5px">Klik Disini Jika Belum Membuat Nama Barang!</a>
                    <a href="/barangmasuk/listbarangmasuk"><button type="button" class="btncancel">Cancel</button></a>
                    <button type="submit" class="btnsubmit">Submit</button><br>
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

            const dateField = document.getElementById('dateField');
            const today = new Date().toISOString().split('T')[0];
            dateField.value = today;

            let stokJumlah = 0;

            $('#stokbarang_id').on('change', function() {
                var selectedOption = $(this).find('option:selected');
                stokJumlah = selectedOption.data('jumlah');
                var kategori = selectedOption.data('kategori');
                var satuan = selectedOption.data('satuan');

                $('#jmlhbrgmsk').val('');

                $('#kategori_id_display').val(kategori).trigger('change');
                $('#kategori_id').val(kategori);

                $('#satuanbrg_display').val(satuan).trigger('change');
                $('#satuanbrg_id').val(satuan);

                $('#jmlhbrgmsk-error').hide();
            });

        });
    </script>
@endsection
