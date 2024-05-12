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
                            <td><label>Kode</label></td>
                            <td><input type="text" name="KodeBrgKlr" required></td>
                        </tr>
                        <tr>
                            <td><label>Tanggal</label></td>
                            <td><input type="date" name="TgglBrgMask" required></td>
                        </tr>
                        <tr>
                            <td><label>Jumlah Barang</label></td>
                            <td><input type="number" name="JmlhBrgKlr" required></td>
                        </tr>
                        <tr>
                            <td><label> Nama Barang</label></td>
                            <td><input type="text" name="NamaBrg" required></td>
                        </tr>
                        <tr>
                            <td><label>Kategori</label></td>
                            <td>
                                <select name="KatBrg">
                                    <option value="Laptop">Laptop</option>
                                    <option value="Printer">Printer</option>
                                    <option value="CCTV">CCTV</option>
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
@endsection