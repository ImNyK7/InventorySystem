@extends('Layouts.main')

@section('content')
<div class="wrapper-wrapper">
    <div id="page-content-wrapper">
        <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.1/js/select2.min.js"></script>
            <div class="form-wrapper">
                <h1>Form<br>Barang Keluar</h1>
                <form action="/barangkeluar/listbarangkeluar" method="POST">
                    @csrf
                    <table>
                        <tr>
                            <td><label>Kode Laporan</label></td>
                            <td><input type="text" name="kodebrgklr" required style="width: 100px"></td>
                        </tr>
                        <tr>
                            <td><label>Tanggal</label></td>
                            <td><input type="date" name="tanggalbrgklr" id="dateField" required readonly style="width: 120px"></td>
                        </tr>
                        <tr>
                            <td><label for="perusahaancust">Customer</label></td>
                            <td>
                                <select id="select_page" style="width:190px; height: 30px" class="operator" name="perusahaancust_id">
                                    <option value="" disabled selected></option>
                                    @foreach ($customers as $customer)
                                        <option value="{{ $customer->kodecust }}">{{ $customer->perusahaancust }}</option>
                                    @endforeach
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td><label>Nama Barang</label></td>
                            <td><input type="text" name="namabrgklr" required style="width: 200px"></td>
                        </tr>
                        <tr>
                            <td><label>Jumlah Barang</label></td>
                            <td><input type="number" name="jmlhbrgklr" required style="width: 50px">
                                <select style="width:100px" name="satuanbrg">
                                    <option value="" disabled selected></option>
                                    @foreach ($satuanbrgs as $satuanbrg)
                                        <option value="{{ $satuanbrg->id }}">{{ $satuanbrg->namasatuan }}</option>
                                    @endforeach
                                </select></td>
                        </tr>
                        <tr>
                            <td><label>Harga Jual</label></td>
                            <td><input type="text" name="hrgjual"required style="width: 100px"></td>
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
                        <tr>
                            <td><label>Nomor Seri</label></td>
                            <td><input type="text" name="noseribrgklr"></td>
                        </tr>
                    </table>
                    <a href="/barangkeluar/listbarangkeluar"><button type="button" class="btncancel">Cancel</button></a>
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
<script>
    document.addEventListener('DOMContentLoaded', (event) => {
        const dateField = document.getElementById('dateField');
        const today = new Date().toISOString().split('T')[0];
        dateField.value = today;
    });
</script>
@endsection