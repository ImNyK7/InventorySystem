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
                <h1>Edit<br>Laporan Barang Masuk</h1>
                <form action="{{ url('/barangmasuk/listbarangmasuk/' . $recordbarangmasuk->kodebrgmsk) }}" method="POST">
                    @csrf
                    @method('PUT')
                
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <div class="row mb-3">
                                <label for="kodebrgmsk" class="col-sm-4 col-form-label text-nowrap">Kode Laporan</label>
                                <div class="col-sm-8">
                                    <input type="text" name="kodebrgmsk" id="kodebrgmsk" value="{{ old('kodebrgmsk', $recordbarangmasuk->kodebrgmsk) }}" required class="form-control">
                                    @error('kodebrgmsk')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="stokbarang_id" class="col-sm-4 col-form-label text-nowrap">Nama Barang</label>
                                <div class="col-sm-8">
                                    <select id="stokbarang_id" name="stokbarang_id" required class="form-select">
                                        <option value="" selected></option>
                                        @foreach ($stokbarangs as $stokbarang)
                                            <option value="{{ $stokbarang->id }}"
                                                data-jumlah="{{ $stokbarang->jmlhbrg }}"
                                                data-kategori="{{ $stokbarang->kategori_id }}"
                                                data-satuan="{{ $stokbarang->satuanbrg_id }}"
                                                {{ old('stokbarang_id', $recordbarangmasuk->stokbarang_id) == $stokbarang->id ? 'selected' : '' }}>
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
                                <label for="jmlhbrgmsk" class="col-sm-4 col-form-label text-nowrap">Jumlah Barang</label>
                                <div class="col-sm-8">
                                    <div class="input-group">
                                        <input type="number" name="jmlhbrgmsk" id="jmlhbrgmsk" value="{{ old('jmlhbrgmsk', $recordbarangmasuk->jmlhbrgmsk) }}" required class="form-control" style="width: 60px; margin-right: 5px;">
                                        <select name="satuanbrg_id" id="satuanbrg_id" required class="form-select" style="width: 80px;">
                                            <option value="" selected></option>
                                            @foreach ($satuanbrgs as $satuanbrg)
                                                <option value="{{ $satuanbrg->id }}" {{ old('satuanbrg_id', $recordbarangmasuk->satuanbrg_id) == $satuanbrg->id ? 'selected' : '' }}>
                                                    {{ $satuanbrg->namasatuan }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    @error('jmlhbrgmsk')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                    @error('satuanbrg_id')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="kategori_id_display" class="col-sm-4 col-form-label text-nowrap">Kategori</label>
                                <div class="col-sm-8">
                                    <select id="kategori_id_display" name="kategori_id_display" required class="form-select" disabled>
                                        <option value="" selected></option>
                                        @foreach ($kategoris as $kategori)
                                            <option value="{{ $kategori->id }}" {{ old('kategori_id', $recordbarangmasuk->kategori_id) == $kategori->id ? 'selected' : '' }}>
                                                {{ $kategori->namakat }}
                                            </option>
                                        @endforeach
                                    </select>
                                    <input type="hidden" name="kategori_id" id="kategori_id" value="{{ old('kategori_id', $recordbarangmasuk->kategori_id) }}">
                                    @error('kategori_id')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="row mb-3">
                                <label for="supplier_id" class="col-sm-3 col-form-label text-nowrap">Supplier</label>
                                <div class="col-sm-8">
                                    <select id="supplier_id" name="supplier_id" required class="form-select">
                                        <option value="" selected></option>
                                        @foreach ($suppliers as $supplier)
                                            <option value="{{ $supplier->id }}" {{ old('supplier_id', $recordbarangmasuk->supplier_id) == $supplier->id ? 'selected' : '' }}>
                                                {{ $supplier->perusahaansupp }}
                                            </option>
                                        @endforeach
                                    </select>
                                    @error('supplier_id')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="tanggalbrgmsk" class="col-sm-3 col-form-label text-nowrap">Tanggal</label>
                                <div class="col-sm-8">
                                    <input type="date" name="tanggalbrgmsk" id="tanggalbrgmsk" value="{{ old('tanggalbrgmsk', $recordbarangmasuk->tanggalbrgmsk) }}" min="2015-01-02" max="2030-12-31" required class="form-control">
                                    @error('tanggalbrgmsk')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="hrgbeli" class="col-sm-3 col-form-label text-nowrap">Harga Beli</label>
                                <div class="col-sm-8">
                                    <input type="text" name="hrgbeli" id="hrgbeli" value="{{ old('hrgbeli', $recordbarangmasuk->hrgbeli) }}" required class="form-control">
                                    @error('hrgbeli')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-end">
                        <a href="/barangmasuk/listbarangmasuk" class="btn btn-secondary me-2">Cancel</a>
                        <button type="submit" class="btn btn-primary me-4">Submit</button>
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

            // Mengisi tanggal saat ini jika field kosong
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

                $('#jmlhbrgmsk-error').hide();
            });
        });
    </script>
@endsection
