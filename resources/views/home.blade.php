@extends('Layouts.main')

@section('content')
    <div class="d-flex align-items-center">
        <h1 class="fs-3 m-4 mb-3" style="color: #1570EF">Dashboard</h1>
    </div>

    <div class="container-fluid px-4">
        <div class="row g-3">
            <div class="col-md-4">
                <div class="p-3 bg-white shadow-sm d-flex justify-content-between align-items-center rounded">
                    <div>
                        <h3 class="fs-2">12</h3>
                        <p class="fs-5">Barang Masuk</p>
                    </div>
                    <i class="fas fa-inbox fs-1 primary-text border rounded-full secondary-bg p-3"></i>
                </div>
            </div>

            <div class="col-md-4">
                <div class="p-3 bg-white shadow-sm d-flex justify-content-between align-items-center rounded">
                    <div>
                        <h3 class="fs-2">21</h3>
                        <p class="fs-5">Barang Keluar</p>
                    </div>
                    <i class="fas fa-arrow-right-from-bracket fs-1 primary-text border rounded-full secondary-bg p-3"></i>
                </div>
            </div>

            <div class="col-md-4">
                <div class="p-3 bg-white shadow-sm d-flex justify-content-between align-items-center rounded">
                    <div>
                        <h3 class="fs-2">43</h3>
                        <p class="fs-5">Total Stok</p>
                    </div>
                    <i class="fas fa-truck fs-1 primary-text border rounded-full secondary-bg p-3"></i>
                </div>
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
