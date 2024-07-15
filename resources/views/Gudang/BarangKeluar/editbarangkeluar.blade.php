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
                <h1>Edit<br>Laporan Barang Keluar</h1>
                <form action="{{ url('/barangkeluar/listbarangkeluar/' . $recordbarangkeluar->kodebrgklr) }}" method="POST">
                    @csrf
                    @method('PUT')
                
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <div class="row mb-3">
                                <label for="kodebrgklr" class="col-sm-4 col-form-label text-nowrap">Kode Laporan</label>
                                <div class="col-sm-8">
                                    <input type="text" name="kodebrgklr" id="kodebrgklr"
                                        value="{{ old('kodebrgklr', $recordbarangkeluar->kodebrgklr) }}" required class="form-control" style="height: 25px;">
                                    @error('kodebrgklr')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="stokbarang_id" class="col-sm-4 col-form-label text-nowrap">Nama Barang</label>
                                <div class="col-sm-8">
                                    <select id="stokbarang_id" name="stokbarang_id" class="form-select" style="width: 190px; height: 30px;" disabled>
                                        <option value="" selected></option>
                                        @foreach ($stokbarangs as $stokbarang)
                                            <option value="{{ $stokbarang->id }}" data-jumlah="{{ $stokbarang->jmlhbrgklr }}"
                                                data-kategori="{{ $stokbarang->kategori_id }}"
                                                data-satuan="{{ $stokbarang->satuanbrg_id }}"
                                                {{ old('stokbarang_id', $recordbarangkeluar->stokbarang_id) == $stokbarang->id ? 'selected' : '' }}>
                                                {{ $stokbarang->namabrg }}
                                            </option>
                                        @endforeach
                                    </select>
                                    @error('stokbarang_id')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="jmlhbrgklr" class="col-sm-4 col-form-label text-nowrap">Jumlah Barang</label>
                                <div class="col-sm-8">
                                    <div style="display: flex; align-items: center;">
                                        <input type="number" name="jmlhbrgklr" id="jmlhbrgklr"
                                            value="{{ old('jmlhbrgklr', $recordbarangkeluar->jmlhbrgklr) }}" class="form-control" style="width: 85px; margin-right: 5px;">
                                        <select name="satuanbrg_display" id="satuanbrg_display" class="form-select" style="width: 100px;" disabled>
                                            <option value="" selected></option>
                                            @foreach ($satuanbrgs as $satuanbrg)
                                                <option value="{{ $satuanbrg->id }}"
                                                    {{ old('satuanbrg_id', $recordbarangkeluar->satuanbrg_id) == $satuanbrg->id ? 'selected' : '' }}>
                                                    {{ $satuanbrg->namasatuan }}
                                                </option>
                                            @endforeach
                                        </select>
                                        <input type="hidden" name="satuanbrg_id" id="satuanbrg_id"
                                            value="{{ old('satuanbrg_id', $recordbarangkeluar->satuanbrg_id) }}">
                                    </div>
                                    @error('jmlhbrgklr')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                    @error('satuanbrg_id')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                    {{-- <div class="invalid-feedback" id="jmlhbrgklr-error" style="display:none;">Jumlah barang melebihi stok!</div> --}}
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="kategori_id_display" class="col-sm-4 col-form-label text-nowrap">Kategori</label>
                                <div class="col-sm-8">
                                    <select id="kategori_id_display" name="kategori_id_display" class="form-select" style="width: 190px;" disabled>
                                        <option value="" selected></option>
                                        @foreach ($kategoris as $kategori)
                                            <option value="{{ $kategori->id }}"
                                                {{ old('kategori_id', $recordbarangkeluar->kategori_id) == $kategori->id ? 'selected' : '' }}>
                                                {{ $kategori->namakat }}
                                            </option>
                                        @endforeach
                                    </select>
                                    <input type="hidden" name="kategori_id" id="kategori_id"
                                        value="{{ old('kategori_id', $recordbarangkeluar->kategori_id) }}">
                                    @error('kategori_id')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="row mb-3">
                                <label for="customer_id" class="col-sm-4 col-form-label text-nowrap">Customer</label>
                                <div class="col-sm-8">
                                    <select id="customer_id" name="customer_id" class="form-select" style="width: 200px;">
                                        <option value="" selected></option>
                                        @foreach ($customers as $customer)
                                            <option value="{{ $customer->id }}"
                                                {{ old('customer_id', $recordbarangkeluar->customer_id) == $customer->id ? 'selected' : '' }}>
                                                {{ $customer->perusahaancust }}
                                            </option>
                                        @endforeach
                                    </select>
                                    @error('customer_id')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="tanggalbrgklr" class="col-sm-4 col-form-label text-nowrap">Tanggal</label>
                                <div class="col-sm-8">
                                    <input type="date" name="tanggalbrgklr" id="dateField"
                                        value="{{ old('tanggalbrgklr', $recordbarangkeluar->tanggalbrgklr) }}" min="2015-01-02"
                                        max="2030-12-31" required readonly class="form-control" style="width: 200px;">
                                    @error('tanggalbrgklr')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="hrgjual" class="col-sm-4 col-form-label text-nowrap">Harga Jual</label>
                                <div class="col-sm-8">
                                    <input type="text" name="hrgjual" id="hrgjual"
                                        value="{{ old('hrgjual', $recordbarangkeluar->hrgjual) }}" required class="form-control" style="width: 200px;">
                                    @error('hrgjual')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="noseribrgklr" class="col-sm-4 col-form-label text-nowrap">Nomor Seri</label>
                                <div class="col-sm-8">
                                    @php
                                        $noseribrgklr = json_decode($recordbarangkeluar->noseribrgklr);
                                    @endphp
                                    @for ($i = 0; $i < $recordbarangkeluar->jmlhbrgklr; $i++)
                                        <input type="text" name="noseribrgklr[]"
                                            value="{{ isset($noseribrgklr[$i]) ? $noseribrgklr[$i] : '' }}" required class="form-control mb-2">
                                    @endfor
                                    @error('noseribrgklr')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                
                    <div class="d-flex justify-content-end">
                        <a href="/barangkeluar/listbarangkeluar" class="btn btn-secondary me-2">Cancel</a>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
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
            if (!dateField.value) {
                const today = new Date().toISOString().split('T')[0];
                dateField.value = today;
            }

            $('#stokbarang_id').on('change', function() {
                var selectedOption = $(this).find('option:selected');
                var kategori = selectedOption.data('kategori');
                var satuan = selectedOption.data('satuan');

                $('#kategori_id_display').val(kategori).trigger('change');
                $('#kategori_id').val(kategori);

                $('#satuanbrg_display').val(satuan).trigger('change');
                $('#satuanbrg_id').val(satuan);
            });
            $(document).ready(function() {
                $('#jmlhbrgklr').on('input', function() {
                    var newQuantity = parseInt($(this).val());
                    var currentQuantity = $('#noseri-container input').length;
                    var availableStock = parseInt($('#stokJumlah').val());

                    if (newQuantity > availableStock) {
                        $('#jmlhbrgklr-error').show();
                        $('#submitBtn').prop('disabled', true);
                    } else {
                        $('#jmlhbrgklr-error').hide();
                        $('#submitBtn').prop('disabled', false);
                    }

                    if (newQuantity > currentQuantity) {
                        for (var i = currentQuantity; i < newQuantity; i++) {
                            $('#noseri-container').append(
                                '<input type="text" name="noseribrgklr[]" required>');
                        }
                    } else if (newQuantity < currentQuantity) {
                        $('#noseri-container input').slice(newQuantity).remove();
                    }
                });
            });

        });
    </script>
@endsection
