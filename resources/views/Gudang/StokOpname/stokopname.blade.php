@extends('Layouts.main')

@section('content')
    <div class="d-flex align-items-center">
        <h1 class="fs-3 m-4 mb-0" style="color: #1570EF">Stok Opname</h1>
    </div>

    @if (session()->has('success'))
    <div class="alert alert-success" role="alert">
        {{ session('success') }}
      </div>
    @endif

    <div class="container-fluid px-4">
        <div class="btn-wrapper wrapper" style="justify-content: flex-end; align-items: center">
            @if(!auth()->user()->isPurchasing() && !auth()->user()->isSales())                                    
            <form action="/stokopname/create">
                <button type="submit" class="btn"><i class="fa-solid fa-circle-plus"
                        style="font-size: x-large; vertical-align: -3px"></i> <span style="padding-left: 2px">Tambah Stok Opname</span></button>
            </form>
            @endif
        </div>
        <div class="row mb-5 mt-2">
            <div class="col">
                <div class="table-responsive bg-white p-3" style="border-radius: 10px">
                    <table id="stokopname-table" class="table rounded shadow-sm table-hover">
                        <thead>
                            <tr>
                                <th width="25px">#</th>
                                <th>Tanggal Cek</th>
                                <th>Deskripsi</th>
                                <th width="125px">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($stokopnames as $index => $stokopname)
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td>{{ $stokopname->tanggalopname }}</td>
                                    <td>{{ $stokopname->descopname }}</td>
                                    <td>
                                        <a href="/stokopname/{{ $stokopname->tanggalopname }}" class="btn btn-primary btn-sm" style="background-color: #1570EF; border:none; outline:none;">
                                            <i class="fa-solid fa-eye"></i>
                                        </a>   
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        @include('Partials.backontop')
    </div>
       
        <script>
            let table = new DataTable('#stokopname-table');
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
                            swal("Berhasil!", "Data anda berhasil di hapus", "success");
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
