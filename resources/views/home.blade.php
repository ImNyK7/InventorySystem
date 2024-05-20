@extends('Layouts.main')

@section('content')
    <div class="d-flex align-items-center">
        <h1 class="fs-3 m-4 mb-0" style="color: #1570EF">Dashboard</h1>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <a href="barangmasuk/listbarangmasuk" class="clickable-summary">
                    <div class="p-3 bg-white shadow-sm d-flex justify-content-between align-items-center rounded">
                        <div>
                            <h3 class="fs-2">{{ $recordbarangmasuks }}</h3>
                            <p class="fs-5">Barang Masuk</p>
                        </div>
                        <i class="fas fa-inbox fs-1 primary-text border rounded-full secondary-bg p-3"></i>
                    </div>
                </a>
            </div>

            <div class="col-md-4">
                <a href="barangkeluar/listbarangkeluar" class="clickable-summary">
                    <div class="p-3 bg-white shadow-sm d-flex justify-content-between align-items-center rounded">
                        <div>
                            <h3 class="fs-2">{{ $recordbarangkeluars }}</h3>
                            <p class="fs-5">Barang Keluar</p>
                        </div>
                        <i class="fas fa-right-from-bracket fs-1 primary-text border rounded-full secondary-bg p-3"></i>
                    </div>
                </a>
            </div>

            <div class="col-md-4">
                <a href="/stokbarang" class="clickable-summary">
                    <div class="p-3 bg-white shadow-sm d-flex justify-content-between align-items-center rounded">
                        <div>
                            <h3 class="fs-2">{{ $stokbarangs }}</h3>
                            <p class="fs-5">Total Stok</p>
                        </div>
                        <i class="fas fa-truck fs-1 primary-text border rounded-full secondary-bg p-3"></i>
                    </div>
                </a>
            </div>
        </div>
    </div>
@endsection
