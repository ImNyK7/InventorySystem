@extends('Layouts.main')

@section('content')
    <div class="d-flex align-items-center">
        <h1 class="fs-3 m-4 mb-0" style="color: #1570EF">Dashboard</h1>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-4 mb-4">
                <a href="barangmasuk/listbarangmasuk" class="clickable-summary">
                    <div class="p-3 bg-white shadow-sm d-flex justify-content-between align-items-center rounded">
                        <div>
                            <h3 class="fs-2">{{ $recordbarangmasuks }}</h3>
                            <p class="fs-6">Laporan Barang Masuk</p>
                        </div>
                        <i class="fas fa-inbox fs-1 text-success border rounded-full secondary-bg p-3" style="background-color: lightgreen"></i>
                    </div>
                </a>
            </div>

            <div class="col-md-4">
                <a href="/stokbarang" class="clickable-summary">
                    <div class="p-3 bg-white shadow-sm d-flex justify-content-between align-items-center rounded">
                        <div>
                            <h3 class="fs-2">{{ $totalJumlahBarang }}</h3>
                            <p class="fs-5">Total Stok</p>
                        </div>
                        <i class="fas fa-truck fs-1 primary-text border rounded-full secondary-bg p-3"></i>
                    </div>
                </a>
            </div>

            <div class="col-md-4">
                <a href="barangkeluar/listbarangkeluar" class="clickable-summary">
                    <div class="p-3 bg-white shadow-sm d-flex justify-content-between align-items-center rounded">
                        <div>
                            <h3 class="fs-2">{{ $recordbarangkeluars }}</h3>
                            <p class="fs-6">Laporan Barang Keluar</p>
                        </div>
                        <i class="fas fa-right-from-bracket fs-1 text-danger border rounded-full secondary-bg p-3"  style="background-color: lightpink"></i>
                    </div>
                </a>
            </div>

            <div class="col-md-4">
                <a href="customer/mastercustomer" class="clickable-summary">
                    <div class="p-3 bg-white shadow-sm d-flex justify-content-between align-items-center rounded">
                        <div>
                            <h3 class="fs-2">{{ $customers }}</h3>
                            <p class="fs-5">Customer</p>
                        </div>
                        <i class="fa-solid fa-face-laugh-beam fs-1 primary-text border rounded-full secondary-bg p-3"></i>
                    </div>
                </a>
            </div>

            <div class="col-md-4">
                <a href="supplier/mastersupplier" class="clickable-summary">
                    <div class="p-3 bg-white shadow-sm d-flex justify-content-between align-items-center rounded">
                        <div>
                            <h3 class="fs-2">{{ $suppliers }}</h3>
                            <p class="fs-5">Supplier</p>
                        </div>
                        <i class="fa-solid fa-face-grin-squint fs-1 text-warning border rounded-full secondary-bg p-3" style="background-color: lightgoldenrodyellow"></i>
                    </div>
                </a>
            </div>

            <div class="col-md-4">
                <a href="/kategori/masterkategori" class="clickable-summary">
                    <div class="p-3 bg-white shadow-sm d-flex justify-content-between align-items-center rounded">
                        <div>
                            <h3 class="fs-2">{{ $kategoris }}</h3>
                            <p class="fs-5">Kategori</p>
                        </div>
                        <i class="fa-solid fa-layer-group fs-1 primary-text border rounded-full secondary-bg p-3"></i>
                    </div>
                </a>
            </div>
        </div>
    </div>
@endsection
