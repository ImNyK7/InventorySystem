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
                <a href="/admin"
                    class="list-group-item list-group-item-action bg-transparent second-text dashboard-button fw-bold"
                    style="text-decoration: none; color: gray;">
                    <i class="fas fa-user-tie me-2"></i>Admin Page
                </a>   
            </div>
        </div>

        <!-- Page Content -->
        <div id="page-content-wrapper">
            @include('Partials.navbar')
            <div class="container-fluid px-4">
                <!-- Content area -->
                <div class="d-flex align-items-center">
                    <h1 class="fs-3 m-4 mb-0" style="color: #1570EF">User List</h1>
                </div>
                
                <div class="container-fluid px-4">
                    <div class="btn-wrapper wrapper">
                        <form action="/admin/register">
                            <button type="submit" class="btn" style="font-size: 17px; width:160px"><i class="fa-solid fa-circle-plus"
                                    style="font-size: x-large; vertical-align: -3px;"></i> <span
                                    style="padding-left: 2px; ">Tambah User</span></button>
                        </form>
                    </div>
                    <div class="row mb-5 mt-2">
                        <div class="col">
                            <div class="table-responsive bg-white p-3">
                                <table table id="admin-table" class="table rounded shadow-sm table-hover" style="max-width: 1200px;">
                                    <thead>
                                        <tr>
                                            <th width="25px">#</th>
                                            <th>Username</th>
                                            <th>Role</th>
                                            <th width="100px">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($users as $index => $user)
                                        <tr>
                                            <td>{{ $index + 1 }}</td>
                                            <td>{{ $user->username }}</td>
                                            <td>{{ $user->is_admin ? 'Admin' : 'Gudang' }}</td>
                                            <td>
                                                <button style="background-color: #48EE59; outline:none; border:none" class="btn btn-primary btn-sm">
                                                    <i class="fa-solid fa-pen-to-square"></i>
                                                </button>
                                                <button style="background-color: #E70404; outline:none; border:none" class="btn btn-primary btn-sm">
                                                    <i class="fa-solid fa-trash-can"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                
                </div>
                <script src="//cdn.datatables.net/2.0.7/js/dataTables.min.js"></script>
                <script>let table = new DataTable('#admin-table');</script>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>
