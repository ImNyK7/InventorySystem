@extends('Layouts.main')

@section('content')
    <div class="wrapper-wrapper">
        <div id="page-content-wrapper">
            <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
            <script src="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.1/js/select2.min.js"></script>
            <form>
                <div class="form-wrapper">
                    <h1>Form<br>Barang Masuk</h1>
                    <form action="">
                        <table>
                            <tr>
                                <td><label>Kode Laporan</label></td>
                                <td><input type="text" name="KodeBrgMsk"required></td>
                            </tr>
                            <tr>
                                <td><label>Tanggal</label></td>
                                <td><input type="date" name="TgglBrgMask" min="2015-01-02" max="2030-12-31" required></td>
                            </tr>
                            <tr>
                                <td><label for="perusahaansupp">Supplier</label></td>
                                <td>
                                    <select id="select_page" style="width:190px;" class="operator" name="perusahaansupp">
                                        @foreach ($suppliers as $supplier)
                                            <option value="{{ $supplier->kodesupp }}">{{ $supplier->perusahaansupp }}
                                            </option>
                                        @endforeach
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td><label>Nama Barang</label></td>
                                <td><input type="text" name="NamaBrg"required></td>
                            </tr>
                            <tr>
                                <td><label>Jumlah Barang</label></td>
                                <td><input type="number" name="JmlhBrgMsk"required></td>
                            </tr>
                            <tr>
                                <td><label>Harga Beli</label></td>
                                <td><input type="text" name="HrgBeli"required></td>
                            </tr>
                            <tr>
                                <td><label for="KatBrg">Kategori</label></td>
                                <td>
                                    <select id="select_page" style="width:140px;" class="operator" name="KatBrg">
                                        @foreach ($kategoris as $kategori)
                                            <option value="{{ $kategori->kodekat }}">{{ $kategori->namakategori }}</option>
                                        @endforeach
                                    </select>
                                </td>
                            </tr>
                        </table>
                        <a href="/barangmasuk/listbarangmasuk"><button type="button" class="btncancel">Cancel</button></a>
                        <button type="submit" class="btnsubmit">Submit</button>
                    </form>
                </div>
            </form>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            $("select").select2();
        });
    </script>
@endsection
