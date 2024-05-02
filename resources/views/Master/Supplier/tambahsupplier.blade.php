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
    <title>Si Supras | Tambah Supplier</title>
</head>

<body>

    <div class="d-flex" id="wrapper">
        <!-- Sidebar -->
        <div class="bg-white" id="sidebar-wrapper">
            <div class="sidebar-heading text-center py-4 primary-text fs-2 fw-bold text-uppercase border-bottom">
                <i></i>SI SUPRAS
            </div>
            <div class="list-group list-group-flush my-2">
                <a href="/"
                    class="list-group-item list-group-item-action bg-transparent second-text dashboard-button fw-bold"
                    style="text-decoration: none; color: gray;">
                    <i class="fas fa-tachometer-alt me-2"></i>Dashboard
                </a>
                <div class="list-group-item list-group-item-action bg-transparent second-text fw-bold">
                    <a href="mastercustomer" style="text-decoration: none; color: gray;">
                        <i class="fas fa-user-circle me-2"></i>Master
                    </a>
                    <ul class="list-group list-group-flush my-1" style="margin-left: 15px;">
                        <li class="list-group-item list-group-item-action bg-transparent second-text fw-bold"
                            style="padding: 9px">
                            <a href="mastercustomer" style="text-decoration: none; color: gray;">Master Customer</a>
                        </li>
                        <li class="list-group-item list-group-item-action bg-transparent second-text fw-bold"
                            style="padding: 9px">
                            <a href="mastersupplier" style="text-decoration: none; color: gray;">Master Supplier</a>
                        </li>
                        <li class="list-group-item list-group-item-action bg-transparent second-text fw-bold"
                            style="padding: 9px">
                            <a href="masterkategori" style="text-decoration: none; color: gray;">Master Kategori</a>
                        </li>
                    </ul>
                </div>
                <div class="list-group-item list-group-item-action bg-transparent second-text fw-bold">
                    <a href="stokbarang
                    " style="text-decoration: none; color: gray;">
                        <i class="fas fa-box me-2"></i>Gudang
                    </a>
                    <ul class="list-group list-group-flush my-1" style="margin-left: 15px;">
                        <li class="list-group-item list-group-item-action bg-transparent second-text fw-bold"
                            style="padding: 9px">
                            <a href="stokbarang
                            "
                                style="text-decoration: none; color: gray;">Lihat Stok Barang</a>
                        </li>
                        <li class="list-group-item list-group-item-action bg-transparent second-text fw-bold"
                            style="padding: 9px">
                            <a href="barangmasuk" style="text-decoration: none; color: gray;">List Barang Masuk</a>
                        </li>
                        <li class="list-group-item list-group-item-action bg-transparent second-text fw-bold"
                            style="padding: 9px">
                            <a href="barangkeluar" style="text-decoration: none; color: gray;">List Barang Keluar</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
</body>

<!-- Content -->

<body>
    <div class=wrapper-wrapper>
        <div id="page-content-wrapper">
            <form>
                <div class="wrapper">
                    <h1>Form Tambah Supplier</h1>
                    <form action="">
                        <table>
                            <tr>
                                <td><label for="KodeSupplier" class="form-label">Kode</label></td>
                                <td><input type="text" id="KodeSupplier" class="form-control" required></td>
                            </tr>
                            <tr>
                                <td><label for="PerusahaanSupplier" class="form-label">Perusahaan</label></td>
                                <td><input type="text" id="PerusahaanSupplier" class="form-control" required></td>
                            </tr>
                            <tr>
                                <td><label for="KontakSupplier" class="form-label">Kontak</label></td>
                                <td><input type="text" id="KontakSupplier" class="form-control" required></td>
                            </tr>
                            <tr>
                                <td><label for="KotaSupplier" class="form-label">Kota</label></td>
                                <td><input type="text" id="KotaSupplier" class="form-control" required></td>
                            </tr>
                            <tr>
                                <td><label for="AlamatSupplier" class="form-label">Alamat</label></td>
                                <td><input type="text" id="KontakSupplier" class="form-control" required></td>
                            </tr>
                            <tr>
                                <td><label for="NomorSupplier" class="form-label">No Tlp</label></td>
                                <td><input type="text" id="NomorSupplier" class="form-control" required></td>
                            </tr>
                            <tr>
                                <td><label for="TermSupplier" class="form-label">Term</label></td>
                                <td><input type="text" id="TermSupplier" class="form-control" required></td>
                                <td>Hari</td>
                            </tr>
                        </table>
                        <button type="button" class="btncancel">Cancel</button>
                        <button type="submit" class="btnsubmit">Submit</button>
                    </form>
                </div>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>
