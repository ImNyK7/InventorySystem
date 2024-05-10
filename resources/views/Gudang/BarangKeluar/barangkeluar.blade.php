@extends('Layouts.main')

@section('content')
<div class="d-flex align-items-center">
    <h1 class="fs-3 m-4 mb-0">List Barang Keluar</h1>
</div>

<div class="container-fluid px-4">
    <div class="btn-wrapper wrapper">
        <form action="/tambahbarangkeluar">
            <button type="submit" class="btn"><i class="fa-solid fa-circle-plus"
                    style="font-size: x-large; vertical-align: -3px"></i> <span
                    style="padding-left: 2px">Tambah Barang Keluar</span></button>
        </form>
    </div>
    <div class="row mb-5 mt-2">
        <div class="col">
            <table class="table bg-white rounded shadow-sm  table-hover">
                <thead>
                    <tr>
                    <tr>
                        <th>#</th>
                        <th>Kode</th>
                        <th>Tanggal Keluar</th>
                        <th>Nama Barang</th>
                        <th>Customer</th>
                        <th>Kategori</th>
                        <th>Jumlah</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th>1</th>
                    </tr>
                    <tr>
                        <th>2</th>
                    </tr>
                    <tr>
                        <th>3</th>
                    </tr>
                    <tr>
                        <th>4</th>
                    </tr>
                    <tr>
                        <th>5</th>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var gudangLink = document.getElementById('gudangLink');
        var gudangSubMenu = document.getElementById('gudangSubMenu');

        gudangLink.addEventListener('click', function(event) {
            event.preventDefault();
            if (gudangSubMenu.style.display === 'none') {
                gudangSubMenu.style.display = 'block';
            } else {
                gudangSubMenu.style.display = 'none';
            }
        });
    });
</script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var masterLink = document.getElementById('masterLink');
        var masterSubMenu = document.getElementById('masterSubMenu');

        masterLink.addEventListener('click', function(event) {
            event.preventDefault();
            if (masterSubMenu.style.display === 'none') {
                masterSubMenu.style.display = 'block';
            } else {
                masterSubMenu.style.display = 'none';
            }
        });
    });
</script>
@endsection