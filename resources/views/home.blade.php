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
@endsection
