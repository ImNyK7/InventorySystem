@extends('Layouts.main')

@section('content')
<div class="wrapper-wrapper">
    <div id="page-content-wrapper">
        <form>
            <div class="form-wrapper">
                <h1>Form<br>Barang Masuk</h1>
                <form action="">
                    <table>
                        <tr>
                            <td><label>Kode</label></td>
                            <td><input type="text" name="KodeBrgMsk"required></td>
                        </tr>
                        <tr>
                            <td><label>Tanggal</label></td>
                            <td><input type="date" name="TgglBrgMask"required></td>
                        </tr>
                        <tr>
                            <td><label>Jumlah Barang</label></td>
                            <td><input type="number" name="JmlhBrgMsk"required></td>
                        </tr>
                        <tr>
                            <td><label> Nama Barang</label></td>
                            <td><input type="text" name="NamaBrg"required></td>
                        </tr>
                        <tr>
                            <td><label>Kategori</label></td>
                            <td><select name="KatBrg">
                                <option value="Laptop">Laptop</option>
                                <option value="Printer">Printer</option>
                                <option value="CCTV">CCTV</option>
                            </select></td>
                        </tr>
                        <tr>
                            <td><label>Supplier</label></td>
                            <td><input type="text" name="PerusahaanSupplier"required></td>
                        </tr>
                    </table>
                    <a href="/barangmasuk/listbarangmasuk"><button type="button" class="btncancel">Cancel</button></a>
                    <button type="submit" class="btnsubmit">Submit</button>
                </form>
            </div>
        </form>
    </div>
</div>
@endsection