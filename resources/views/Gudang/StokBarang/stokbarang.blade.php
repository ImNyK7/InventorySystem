@extends('Layouts.main')

@section('content')
    <div class="d-flex align-items-center">
        <h1 class="fs-3 m-4 mb-0" style="color: #1570EF">Stok Barang</h1>
    </div>

    @if (session()->has('success'))
    <div class="alert alert-success" role="alert">
        {{ session('success') }}
      </div>
    @endif

    <div class="container-fluid px-4">
        <div class="btn-wrapper wrapper" style="justify-content: flex-end; align-items: center">
            <a href="{{ url('stok-pdf') }}" target="_blank">
                @include('Partials.printbutton')
            </a>
            <form action="/stokbarang/create">
                <button type="submit" class="btn"><i class="fa-solid fa-circle-plus"
                        style="font-size: x-large; vertical-align: -3px"></i> <span style="padding-left: 2px">Tambah Stok Barang</span></button>
            </form>
        </div>
        <div class="row mb-5 mt-2">
            <div class="col">
                <div class="table-responsive bg-white p-3" style="border-radius: 10px">
                    <table id="stokbarang-table" class="table rounded shadow-sm table-hover">
                        <thead>
                            <tr>
                                <th width="25px">#</th>
                                <th>Nama Barang</th>
                                <th>Kategori</th>
                                <th>Jumlah Barang</th>
                                <th width="125px">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($stokbarangs as $index => $stokbarang)
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td>{{ $stokbarang->namabrg }}</td>
                                    <td>{{ $stokbarang->kategori->namakat ?? '' }}</td>
                                    <td>{{ $stokbarang->jmlhbrg }} {{ $stokbarang->satuanbrg->namasatuan ?? '' }}</td>
                                    <td>
                                        <a href="/stokbarang/{{ $stokbarang->namabrg }}" class="btn btn-primary btn-sm" style="background-color: #1570EF; border:none; outline:none;">
                                            <i class="fa-solid fa-eye"></i>
                                        </a>   
                                        @if(!auth()->user()->isPurchasing() && !auth()->user()->isSales())                                    
                                        <a href="/stokbarang/{{ $stokbarang->namabrg }}/edit" class="btn btn-success btn-sm" style="background-color: #48EE59; border:none; outline:none;">
                                            <i class="fa-solid fa-pen-to-square"></i>
                                        </a>
                                        <form action="/stokbarang/{{ $stokbarang->namabrg }}" method="POST" class="delete-form d-inline">
                                            @method('delete')
                                            @csrf
                                            <button type="button" class="btn btn-danger btn-sm delete-button"
                                                    data-id="{{ $stokbarang->id }}"
                                                    data-url="/stokbarang/{{ $stokbarang->namabrg }}"
                                                    style="background-color: #E70404; border:none; outline:none;">
                                                <i class="fa-solid fa-trash-can"></i>
                                            </button>
                                        </form> 
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            @include('Partials.backontop')
        </div>
       
        <script>
            let table = new DataTable('#stokbarang-table');
            $(document).on('click', '.delete-button', function(e) {
            e.preventDefault();
            var id = $(this).data('id');
            var url = $(this).data('url');
            var form = $(this).closest('form');

            swal({
                    title: "Yakin Menghapus Data Ini?",
                    text: "Data yang dihapus tidak bisa dikembalikan!",
                    type: "warning",
                    showCancelButton: true,
                    confirmButtonClass: "btn-danger",
                    confirmButtonText: "Yakin!",
                    closeOnConfirm: false
                },
                function() {
                    $.ajax({
                        type: "POST",
                        url: url,
                        data: form.serialize(),
                        success: function(data) {
                            swal("Deleted!", "Your record has been deleted.", "success");
                            form.closest('tr').remove();
                        },
                        error: function(data) {
                            swal("Error!", "There was an error deleting the record.", "error");
                        }
                    });
                });
        });
        </script>
@endsection
