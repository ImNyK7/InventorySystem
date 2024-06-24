@extends('Layouts.main')

@section('content')
    <div class="d-flex align-items-center">
        <h1 class="fs-3 m-4 mb-0" style="color: #1570EF">List Barang Masuk</h1>
    </div>

    @if (session()->has('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
    @endif

    <div class="container-fluid px-4">
        <div class="btn-wrapper wrapper">
            <div class="btn-wrapper wrapper" style="display: flex; justify-content: flex-start; flex-grow: 1;">
                @include('Partials.filterdate')
            </div>
            <div class="btn-wrapper wrapper" style="justify-content: flex-end; align-items: center; margin-bottom: 0px">
                <a href="{{ url('barangmasuk-pdf') }}" id="print-pdf" target="_blank">
                    @include('Partials.printbutton')
                </a>
                <form action="/barangmasuk/listbarangmasuk/create">
                    <button type="submit" class="btn"><i class="fa-solid fa-circle-plus"
                            style="font-size: x-large; vertical-align: -3px"></i> <span style="padding-left: 2px">Tambah
                            Barang
                            Masuk</span></button>
                </form>
            </div>
        </div>
        <div class="row mb-5 mt-2">
            <div class="col">
                <div class="table-responsive bg-white p-3">
                    <table table id="brgmsk-table" class="table rounded shadow-sm table-hover"
                        style="min-width: max-content;">
                        <thead>
                            <tr>
                                <th style="background-color: whitesmoke">#</th>
                                <th>Kode Laporan</th>
                                <th>Tanggal Masuk</th>
                                <th>Supplier</th>
                                <th>Jumlah</th>
                                <th>Nama Barang</th>
                                <th>Harga Beli</th>
                                <th>Kategori</th>
                                <th>Total</th>
                                <th style="background-color: whitesmoke">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($recordbarangmasuks as $index => $recordbarangmasuk)
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td>{{ $recordbarangmasuk->kodebrgmsk }}</td>
                                    <td>{{ $recordbarangmasuk->tanggalbrgmsk }}</td>
                                    <td>
                                        <a style="text-decoration: none; color: black"
                                            href="/supplier/mastersupplier/{{ $recordbarangmasuk->supplier->perusahaansupp ?? '' }}">
                                            {{ $recordbarangmasuk->supplier->perusahaansupp ?? '' }}
                                        </a>
                                    </td>
                                    <td>{{ $recordbarangmasuk->jmlhbrgmsk }}
                                        {{ $recordbarangmasuk->satuanbrg->namasatuan ?? '' }}</td>
                                    <td>
                                        <a style="text-decoration: none; color: black"
                                            href="/stokbarang/{{ $recordbarangmasuk->stokbarang->namabrg ?? '' }}">

                                        </a>
                                        {{ $recordbarangmasuk->stokbarang->namabrg ?? '' }}
                                    </td>
                                    <td>Rp{{ number_format($recordbarangmasuk->hrgbeli) }}</td>
                                    <td>{{ $recordbarangmasuk->kategori->namakat ?? '' }}</td>
                                    <td>Rp{{ number_format($recordbarangmasuk->hrgbeli * $recordbarangmasuk->jmlhbrgmsk, 2) }}
                                    </td>
                                    <td>
                                        <a href="/barangmasuk/listbarangmasuk/{{ $recordbarangmasuk->kodebrgmsk }}"
                                            class="btn btn-primary btn-sm"
                                            style="background-color: #1570EF; border:none; outline:none;">
                                            <i class="fa-solid fa-eye"></i>
                                        </a>
                                        <a href="/barangmasuk/listbarangmasuk/{{ $recordbarangmasuk->kodebrgmsk }}/edit"
                                            class="btn btn-success btn-sm"
                                            style="background-color: #48EE59; border:none; outline:none;">
                                            <i class="fa-solid fa-pen-to-square"></i>
                                        </a>
                                        <form action="/barangmasuk/listbarangmasuk/{{ $recordbarangmasuk->kodebrgmsk }}"
                                            method="POST" class="d-inline">
                                            @method('delete')
                                            @csrf
                                            <button class="btn btn-danger btn-sm"
                                                style="background-color: #E70404; border:none; outline:none;"
                                                onclick="return confirm('Yakin Akan Menghapus Data Ini?')"><i
                                                    class="fa-solid fa-trash-can"></i></button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <script>
            $(document).ready(function() {
                var table = $('#brgmsk-table').DataTable({
                    scrollX: true,
                    fixedColumns: {
                        rightColumns: 1
                    }
                });

                $('#filter').click(function() {
                    var startDate = $('#start_date').val();
                    var endDate = $('#end_date').val();

                    $.fn.dataTable.ext.search.push(
                        function(settings, data, dataIndex) {
                            var min = startDate ? new Date(startDate).getTime() : null;
                            var max = endDate ? new Date(endDate).getTime() : null;
                            var date = new Date(data[2])
                        .getTime(); // Use data for the Tanggal Keluar column

                            if ((min === null && max === null) ||
                                (min === null && date <= max) ||
                                (min <= date && max === null) ||
                                (min <= date && date <= max)) {
                                return true;
                            }
                            return false;
                        }
                    );

                    table.draw();
                });

                $('#clear').click(function() {
                    $('#start_date').val('');
                    $('#end_date').val('');
                    $.fn.dataTable.ext.search.pop();
                    table.draw();
                });

                $('#print-pdf').click(function(e) {
                    e.preventDefault();
                    var startDate = $('#start_date').val();
                    var endDate = $('#end_date').val();
                    var url = "{{ url('barangmasuk-pdf') }}?start_date=" + startDate + "&end_date=" + endDate;
                    window.open(url, '_blank');
                });

            });
        </script>
    @endsection
