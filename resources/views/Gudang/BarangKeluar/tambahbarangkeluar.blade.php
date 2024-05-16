@extends('Layouts.main')

@section('content')
<div class="wrapper-wrapper">
    <div id="page-content-wrapper">
        <form>
            <div class="form-wrapper">
                <h1>Form<br>Barang Keluar</h1>
                <form action="">
                    <table>
                        <tr>
                            <td><label>Kode Laporan</label></td>
                            <td><input type="text" name="KodeBrgKlr" required style="width: 100px"></td>
                        </tr>
                        <tr>
                            <td><label>Tanggal</label></td>
                            <td><input type="date" name="TgglBrgKlr" required></td>
                        </tr>
                        <tr>
                            <td><label for="perusahaancust">Customer</label></td>
                            <td>
                                <select id="select_page" style="width:190px;" class="operator" name="perusahaancust">
                                    @foreach ($customers as $customer)
                                        <option value="{{ $customer->kodecust }}">{{ $customer->perusahaancust }}</option>
                                    @endforeach
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td><label>Jumlah Barang</label></td>
                            <td><input type="number" name="JmlhBrgKlr" required style="width: 50px"></td>
                        </tr>
                        <tr>
                            <td><label>Nama Barang</label></td>
                            <td><input type="text" name="NamaBrg" required style="width: 200px"></td>
                        </tr>
                        <tr>
                            <td><label>Harga Jual</label></td>
                            <td><input type="text" name="HrgJual"required style="width: 100px"></td>
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
                        <tr>
                            <td><label>Nomor Seri</label></td>
                            <td><input type="text" name="No Seri"></td>
                        </tr>
                    </table>
                    <a href="/barangkeluar/listbarangkeluar"><button type="button" class="btncancel">Cancel</button></a>
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