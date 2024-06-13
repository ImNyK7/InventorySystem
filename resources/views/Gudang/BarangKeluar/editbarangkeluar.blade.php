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
                <h1>Form<br>Edit Barang Masuk</h1>
                <form action="{{ url('/barangkeluar/listbarangkeluar/' . $recordbarangkeluar->kodebrgklr) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <table>
                        <tr>
                            <td><label for="kodebrgklr">Kode Laporan</label></td>
                            <td>
                                <input type="text" name="kodebrgklr" id="kodebrgklr" value="{{ old('kodebrgklr', $recordbarangkeluar->kodebrgklr) }}"
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
                                            {{ old('customer_id', $recordbarangkeluar->customer_id) == $customer->id ? 'selected' : '' }}>
                                            {{ $customer->perusahaancust }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('customer_id')
                                    <div class="invalid-message">{{ $message }}</div>
                                @enderror
                            </td>
                        </tr>
                        <td><label for="stokbarang_id">Nama Barang</label></td>
                            <td>
                                <select id="stokbarang_id" name="stokbarang_id" style="width: 190px; height: 30px" disabled>
                                    <option value="" selected></option>
                                    @foreach ($stokbarangs as $stokbarang)
                                        <option value="{{ $stokbarang->id }}"
                                            data-jumlah="{{ $stokbarang->jmlhbrgklr }}"
                                            data-kategori="{{ $stokbarang->kategori_id }}"
                                            data-satuan="{{ $stokbarang->satuanbrg_id }}"
                                            {{ old('stokbarang_id', $recordbarangkeluar->stokbarang_id) == $stokbarang->id ? 'selected' : '' }}>
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
                                    value="{{ old('tanggalbrgklr', $recordbarangkeluar->tanggalbrgklr) }}" min="2015-01-02" max="2030-12-31" required>
                                @error('tanggalbrgklr')
                                    <div class="invalid-message">{{ $message }}</div>
                                @enderror
                            </td>
                        <tr>
                            <td><label for="jmlhbrgklr">Jumlah Barang</label></td>
                            <td>
                                <input type="number" name="jmlhbrgklr" id="jmlhbrgklr" value="{{ old('jmlhbrgklr', $recordbarangkeluar->jmlhbrgklr) }}" disabled
                                     style="width: 50px">
                                <select name="satuanbrg_display" id="satuanbrg_display" style="width: 100px" disabled>
                                    <option value="" selected></option>
                                    @foreach ($satuanbrgs as $satuanbrg)
                                        <option value="{{ $satuanbrg->id }}"
                                            {{ old('satuanbrg_id', $recordbarangkeluar->satuanbrg_id) == $satuanbrg->id ? 'selected' : '' }}>
                                            {{ $satuanbrg->namasatuan }}
                                        </option>
                                    @endforeach
                                </select>
                                <input type="hidden" name="satuanbrg_id" id="satuanbrg_id" value="{{ old('satuanbrg_id', $recordbarangkeluar->satuanbrg_id) }}">
                                @error('jmlhbrgklr')
                                    <div class="invalid-message">{{ $message }}</div>
                                @enderror
                                @error('satuanbrg_id')
                                    <div class="invalid-message">{{ $message }}</div>
                                @enderror
                                {{-- <div class="invalid-message" id="jmlhbrgklr-error" style="display:none;">Jumlah barang melebihi stok!</div> --}}
                            </td>
                            <td><label for="hrgjual">Harga Jual</label></td>
                            <td>
                                <input type="text" name="hrgjual" id="hrgjual" value="{{ old('hrgjual', $recordbarangkeluar->hrgjual) }}" required
                                    style="width: 100px">
                                @error('hrgjual')
                                    <div class="invalid-message">{{ $message }}</div>
                                @enderror
                            </td>
                        </tr>
                        <tr>
                            <td><label for="kategori_id_display">Kategori</label></td>
                            <td>
                                <select id="kategori_id_display" name="kategori_id_display" required style="width: 140px;" disabled>
                                    <option value="" selected></option>
                                    @foreach ($kategoris as $kategori)
                                        <option value="{{ $kategori->id }}"
                                            {{ old('kategori_id', $recordbarangkeluar->kategori_id) == $kategori->id ? 'selected' : '' }}>
                                            {{ $kategori->namakat }}
                                        </option>
                                    @endforeach
                                </select>
                                <input type="hidden" name="kategori_id" id="kategori_id" value="{{ old('kategori_id', $recordbarangkeluar->kategori_id) }}">
                                @error('kategori_id')
                                    <div class="invalid-message">{{ $message }}</div>
                                @enderror
                            </td>
                        </tr>
                        <tr>
                            <td><label>Nomor Seri</label></td>
                            <td>
                                @foreach($recordbarangkeluar->noseribrgklr as $index => $noseri)
                                    <input type="text" name="noseribrgklr[]" value="{{ $noseri }}">
                                    <!-- Hidden input to retain original values when updating -->
                                    <input type="hidden" name="original_noseribrgklr[]" value="{{ $noseri }}">
                                @endforeach
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

            // Mengisi tanggal saat ini jika field kosong
            const dateField = document.getElementById('dateField');
            if (!dateField.value) {
                const today = new Date().toISOString().split('T')[0];
                dateField.value = today;
            }


            $('#stokbarang_id').on('change', function() {
                var selectedOption = $(this).find('option:selected');
                stokJumlah = selectedOption.data('jumlah');
                var kategori = selectedOption.data('kategori');
                var satuan = selectedOption.data('satuan');

                $('#kategori_id_display').val(kategori).trigger('change');
                $('#kategori_id').val(kategori);

                $('#satuanbrg_display').val(satuan).trigger('change');
                $('#satuanbrg_id').val(satuan);

                $('#jmlhbrgklr-error').hide();
            });

            // $('#jmlhbrgklr').on('input', function() {
            //     var jumlahMasuk = $(this).val();
            //     if (parseInt(jumlahMasuk) > parseInt(stokJumlah)) {
            //         $('#jmlhbrgklr-error').show();
            //     } else {
            //         $('#jmlhbrgklr-error').hide();
            //     }
            // });

            // $('form').on('submit', function(event) {
            //     var jumlahMasuk = $('#jmlhbrgklr').val();
            //     if (parseInt(jumlahMasuk) > parseInt(stokJumlah)) {
            //         $('#jmlhbrgklr-error').show();
            //         event.preventDefault();
            //     }
            // });
        });
    </script>
@endsection
