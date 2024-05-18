<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/styles.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/forms.css') }}">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.min.js"></script>
    <link rel="stylesheet" href="//cdn.datatables.net/2.0.7/css/dataTables.dataTables.min.css">
    <title>SI SUPRAS | {{ $title }}</title>
</head>

<body>

    <div class="d-flex" id="wrapper">
        <!-- Sidebar -->
        <div class="bg-white" id="sidebar-wrapper">
            <div class="sidebar-heading text-center py-4 primary-text fs-2 fw-bold text-uppercase border-bottom">
                SI SUPRAS 
            </div>
            <div class="list-group list-group-flush">
                <a href="/"
                    class="list-group-item list-group-item-action bg-transparent second-text dashboard-button fw-bold"
                    style="text-decoration: none; color: gray;">
                    <i class="fas fa-tachometer-alt me-2"></i>Dashboard
                </a>
                <div class="list-group-item list-group-item-action bg-transparent second-text fw-bold">
                    <a href="" style="text-decoration: none; color: gray;" id="masterLink">
                        <i class="fas fa-user-circle me-2"></i>Master
                    </a>
                    <ul class="list-group list-group-flush my-1" style="margin-left: 15px; display: none;"
                        id="masterSubMenu">
                        <li class="list-group-item list-group-item-action bg-transparent second-text fw-bold"
                            style="padding: 9px">
                            <a href="/customer/mastercustomer" {{ $title === 'Master Customer' ? 'active' : '' }}
                                style="text-decoration: none; color: gray;">Master Customer</a>
                        </li>
                        <li class="list-group-item list-group-item-action bg-transparent second-text fw-bold"
                            style="padding: 9px">
                            <a href="/supplier/mastersupplier" {{ $title === 'Master Supplier' ? 'active' : '' }}
                                style="text-decoration: none; color: gray;">Master Supplier</a>
                        </li>
                        <li class="list-group-item list-group-item-action bg-transparent second-text fw-bold"
                            style="padding: 9px">
                            <a href="/kategori/masterkategori" {{ $title === 'Master Kategori' ? 'active' : '' }}
                                style="text-decoration: none; color: gray;">Master Kategori</a>
                        </li>
                    </ul>
                </div>
                <div class="list-group-item list-group-item-action bg-transparent second-text fw-bold">
                    <a href="stokbarang" style="text-decoration: none; color: gray;" id="gudangLink">
                        <i class="fas fa-box me-2"></i>Gudang
                    </a>
                    <ul class="list-group list-group-flush my-1" style="margin-left: 15px; display: none;"
                        id="gudangSubMenu">
                        <li class="list-group-item list-group-item-action bg-transparent second-text fw-bold"
                            style="padding: 9px">
                            <a href="/stokbarang" style="text-decoration: none; color: gray;">Lihat Stok Barang</a>
                        </li>
                        <li class="list-group-item list-group-item-action bg-transparent second-text fw-bold"
                            style="padding: 9px">
                            <a href="/barangmasuk/listbarangmasuk" style="text-decoration: none; color: gray;">List
                                Barang Masuk</a>
                        </li>
                        <li class="list-group-item list-group-item-action bg-transparent second-text fw-bold"
                            style="padding: 9px">
                            <a href="/barangkeluar/listbarangkeluar" style="text-decoration: none; color: gray;">List
                                Barang Keluar</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Page Content -->
        <div id="page-content-wrapper">
            @include('Partials.navbar')
            <div class="container-fluid px-4">
                <!-- Content area -->
                @yield('content')
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
</body>

</html>
