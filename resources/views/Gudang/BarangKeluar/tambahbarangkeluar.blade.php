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
                <form action="{{ route('listbarangkeluar.store') }}" method="POST">
                    @csrf
                    <table>
                        <tr>
                            <td><label for="kodebrgklr">Kode Laporan</label></td>
                            <td>
                                <input type="text" name="kodebrgklr" id="kodebrgklr" value="{{ old('kodebrgklr') }}"
                                    required style="width: 200px">
                                @error('kodebrgklr')
                                    <div class="invalid-message">{{ $message }}</div>
                                @enderror
                            </td>
                            <td><label for="customer_id">Customer</label></td>
                            <td>
                                <select id="customer_id" name="customer_id" required style="width: 200px; height: 30px">
                                    <option value="" selected></option>
                                    @foreach ($customers as $customer)
                                        <option value="{{ $customer->id }}"
                                            {{ old('customer_id') == $customer->id ? 'selected' : '' }}>
                                            {{ $customer->perusahaancust }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('customer_id')
                                    <div class="invalid-message">{{ $message }}</div>
                                @enderror
                            </td>
                        </tr>
                        <tr>
                            <td><label for="stokbarang_id">Nama Barang</label></td>
                            <td>
                                <select id="stokbarang_id" name="stokbarang_id" required style="width: 200px; height: 30px">
                                    <option value="" selected></option>
                                    @foreach ($stokbarangs as $stokbarang)
                                        <option value="{{ $stokbarang->id }}" data-jumlah="{{ $stokbarang->jmlhbrg }}"
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
                            <td><label for="tanggalbrgklr">Tanggal</label></td>
                            <td>
                                <input type="date" name="tanggalbrgklr" id="dateField"
                                    value="{{ old('tanggalbrgklr') }}" min="2015-01-02" max="2030-12-31" required readonly
                                    style="width: 200px">
                                @error('tanggalbrgklr')
                                    <div class="invalid-message">{{ $message }}</div>
                                @enderror
                            </td>
                        </tr>
                        <tr>
                            <td><label for="jmlhbrgklr">Jumlah Barang</label></td>
                            <td>
                                <div style="display: flex; align-items: center;">
                                    <input type="number" name="jmlhbrgklr" id="jmlhbrgklr" value="{{ old('jmlhbrgklr') }}"
                                        required style="width: 100px; margin-right: 5px;">
                                    <select name="satuanbrg_display" id="satuanbrg_display" required style="width: 100px;"
                                        disabled>
                                        <option value="" selected></option>
                                        @foreach ($satuanbrgs as $satuanbrg)
                                            <option value="{{ $satuanbrg->id }}"
                                                {{ old('satuanbrg_id') == $satuanbrg->id ? 'selected' : '' }}>
                                                {{ $satuanbrg->namasatuan }}
                                            </option>
                                        @endforeach
                                    </select>
                                    <input type="hidden" name="satuanbrg_id" id="satuanbrg_id"
                                        value="{{ old('satuanbrg_id') }}">
                                </div>
                                @error('jmlhbrgklr')
                                    <div class="invalid-message">{{ $message }}</div>
                                @enderror
                                @error('satuanbrg_id')
                                    <div class="invalid-message">{{ $message }}</div>
                                @enderror
                                <div class="invalid-message" id="jmlhbrgklr-error" style="display:none;">Jumlah barang
                                    melebihi stok!</div>
                            </td>

                            <td><label for="hrgjual">Harga Jual</label></td>
                            <td>
                                <input type="text" name="hrgjual" id="hrgjual" value="{{ old('hrgjual') }}" required
                                    style="width: 200px">
                                @error('hrgjual')
                                    <div class="invalid-message">{{ $message }}</div>
                                @enderror
                            </td>
                        </tr>
                        <tr>
                            <td><label for="kategori_id_display">Kategori</label></td>
                            <td>
                                <select id="kategori_id_display" name="kategori_id_display" required style="width: 140px;"
                                    disabled>
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
                        <tr>
                            <td><label for="noseribrgklr">Nomor Seri</label></td>
                            <td colspan="3">
                                <div id="serialNumberInputs"></div>
                                @error('noseribrgklr')
                                    <div class="invalid-message">{{ $message }}</div>
                                @enderror
                            </td>
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

            const dateField = document.getElementById('dateField');
            const today = new Date().toISOString().split('T')[0];
            dateField.value = today;

            let stokJumlah = 0;

            $('#stokbarang_id').on('change', function() {
                var selectedOption = $(this).find('option:selected');
                stokJumlah = selectedOption.data('jumlah');
                var kategori = selectedOption.data('kategori');
                var satuan = selectedOption.data('satuan');

                $('#jmlhbrgklr').val('');

                $('#kategori_id_display').val(kategori).trigger('change');
                $('#kategori_id').val(kategori);

                $('#satuanbrg_display').val(satuan).trigger('change');
                $('#satuanbrg_id').val(satuan);

                $('#jmlhbrgklr-error').hide();
                generateSerialNumberInputs();
            });

            $('#jmlhbrgklr').on('input', function() {
                var jumlahKeluar = $(this).val();
                if (parseInt(jumlahKeluar) > parseInt(stokJumlah)) {
                    $('#jmlhbrgklr-error').show();
                } else {
                    $('#jmlhbrgklr-error').hide();
                }
                generateSerialNumberInputs();
            });

            function generateSerialNumberInputs() {
                var jumlahKeluar = $('#jmlhbrgklr').val();
                var serialNumberInputs = $('#serialNumberInputs');
                serialNumberInputs.empty();

                for (var i = 0; i < jumlahKeluar; i++) {
                    serialNumberInputs.append('<input type="text" name="noseribrgklr[]" placeholder="Nomor Seri ' +
                        (i + 1) + '" required style="margin-bottom: 5px;">');
                }
            }

            $('form').on('submit', function(event) {
                var jumlahKeluar = $('#jmlhbrgklr').val();
                if (parseInt(jumlahKeluar) > parseInt(stokJumlah)) {
                    $('#jmlhbrgklr-error').show();
                    event.preventDefault();
                }
            });
        });
    </script>
@endsection
