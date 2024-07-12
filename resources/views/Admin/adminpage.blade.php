@extends('layouts.main')

@section('content')
    <div class="d-flex align-items-center">
        <h1 class="fs-3 m-4 mb-0" style="color: #1570EF">User List</h1>
    </div>

    <div class="container-fluid px-4">
        @if (session()->has('regsuccess'))
            <div class="alert alert-success" style="margin-top: -100px" role="alert">
                {{ session('regsuccess') }}
            </div>
        @endif
        @if (session()->has('loginError'))
            <div class="alert alert-danger" style="margin-top: -100px" role="alert">
                {{ session('loginError') }}
            </div>
        @endif
        <div class="btn-wrapper wrapper">
            <form action="/admin/register">
                <button type="submit" class="btn" style="font-size: 17px; width:160px"><i
                        class="fa-solid fa-circle-plus" style="font-size: x-large; vertical-align: -3px;"></i> <span
                        style="padding-left: 2px; ">Tambah User</span></button>
            </form>
        </div>
        <div class="row mb-5 mt-2">
            <div class="col">
                <div class="table-responsive bg-white p-3" style="border-radius: 10px">
                    <table id="admin-table" class="table rounded shadow-sm table-hover nowrap" style="width: 100%">
                        <thead>
                            <tr>
                                <th width="25px">#</th>
                                <th>Username</th>
                                <th>Role</th>
                                <th width="100px">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $index => $user)
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td>{{ $user->username }}</td>
                                    <td>{{ ucfirst($user->role) }}</td>
                                    <td>
                                        <a href="/admin/{{ $user->username }}/edit" class="btn btn-success btn-sm"
                                            style="background-color: #48EE59; border:none; outline:none;">
                                            <i class="fa-solid fa-pen-to-square"></i>
                                        </a>
                                        <form action="/admin/{{ $user->username }}" method="POST"
                                            class="delete-form d-inline">
                                            @method('delete')
                                            @csrf
                                            <button type="button" class="btn btn-danger btn-sm delete-button"
                                                data-id="{{ $user->id }}" data-url="/admin/{{ $user->username }}"
                                                style="background-color: #E70404; border:none; outline:none;">
                                                <i class="fa-solid fa-trash-can"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
    <script>
        $(document).ready(function() {
            var table = $('#admin-table').DataTable({
                scrollX: true,
                fixedColumns: {
                    rightColumns: 1
                }
            });
        });

        $(document).on('click', '.delete-button', function(e) {
            e.preventDefault();
            var id = $(this).data('id');
            var url = $(this).data('url');
            var form = $(this).closest('form');

            swal({
                    title: "Yakin Hapus Data Ini?",
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
