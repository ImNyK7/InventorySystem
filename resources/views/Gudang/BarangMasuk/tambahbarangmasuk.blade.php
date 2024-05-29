@extends('Layouts.main')

@section('content')
    <div class="wrapper-wrapper">
        <div id="page-content-wrapper">
            <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
            <script src="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.1/js/select2.min.js"></script>
                <div class="form-wrapper">
                    <h1>Form<br>Barang Masuk</h1>
                    <form action="/barangmasuk/listbarangmasuk" method="POST">
                        @csrf
                        <table>
                            <tr>
                                <td><label>Kode Laporan</label></td>
                                <td><input type="text" name="kodebrgmsk"required style="width: 100px"></td>
                            </tr>
                            <tr>
                                <td><label>Tanggal</label></td>
                                <td><input type="date" name="tanggalbrgmsk" min="2015-01-02" max="2030-12-31" required></td>
                            </tr>
                            <tr>
                                <td><label for="perusahaansupp">Supplier</label></td>
                                <td>
                                    <select id="select_page" style="width:190px; height: 30px" class="operator" name="perusahaansupp_id">
                                        <option value="" disabled selected></option>
                                        @foreach ($suppliers as $supplier)
                                            <option value="{{ $supplier->kodesupp }}">{{ $supplier->perusahaansupp }}
                                            </option>
                                        @endforeach
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td><label>Nama Barang</label></td>
                                <td><input type="text" name="namabrgmsk"required style="width: 200px"></td>
                            </tr>
                            <tr>
                                <td><label>Jumlah Barang</label></td>
                                <td><input type="number" name="jmlhbrgmsk"required style="width: 50px">
                                    <select style="width:100px" name="satuanbrg">
                                        <option value="" disabled selected></option>
                                        @foreach ($satuanbrgs as $satuanbrg)
                                            <option value="{{ $satuanbrg->id }}">{{ $satuanbrg->namasatuan }}</option>
                                        @endforeach
                                    </select></td>
                                
                            </tr>
                            <tr>
                                <td><label>Harga Beli</label></td>
                                <td><input type="text" name="hrgbeli"required style="width: 100px"></td>
                            </tr>
                            <tr>
                                <td><label for="KatBrg">Kategori</label></td>
                                <td>
                                    <select id="select_page" style="width:140px;" class="operator" name="kategori_id">
                                        <option value="" disabled selected></option>
                                        @foreach ($kategoris as $kategori)
                                            <option value="{{ $kategori->kodekat }}">{{ $kategori->namakat }}</option>
                                        @endforeach
                                    </select>
                                </td>
                            </tr>
                        </table>
                        <a href="/barangmasuk/listbarangmasuk"><button type="button" class="btncancel">Cancel</button></a>
                        <button type="submit" class="btnsubmit">Submit</button>
                    </form>
                </div>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            $("select").select2({
                placeholder: "",
            });
        });
    </script>
@endsection
