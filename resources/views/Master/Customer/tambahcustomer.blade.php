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
    <title>Si Supras | Tambah Customer</title>
</head>

<body>

    <div class="d-flex" id="wrapper">
        <!-- Sidebar -->
        <div class="bg-white" id="sidebar-wrapper">
            <div class="sidebar-heading text-center py-4 primary-text fs-2 fw-bold text-uppercase border-bottom">
                <i></i>SI SUPRAS
            </div>
            <div class="list-group list-group-flush">
                <a href="/"
                    class="list-group-item list-group-item-action bg-transparent second-text dashboard-button fw-bold"
                    style="text-decoration: none; color: gray;">
                    <i class="fas fa-tachometer-alt me-2"></i>Dashboard
                </a>
                <div class="list-group-item list-group-item-action bg-transparent second-text fw-bold">
                    <a href="/mastercustomer" style="text-decoration: none; color: gray;">
                        <i class="fas fa-user-circle me-2"></i>Master
                    </a>
                    <ul class="list-group list-group-flush my-1" style="margin-left: 15px;">
                        <li class="list-group-item list-group-item-action bg-transparent second-text fw-bold"
                            style="padding: 9px">
                            <a href="mastercustomer" style="text-decoration: none; color: gray;">Master Customer</a>
                        </li>
                        <li class="list-group-item list-group-item-action bg-transparent second-text fw-bold"
                            style="padding: 9px">
                            <a href="/mastersupplier" style="text-decoration: none; color: gray;">Master Supplier</a>
                        </li>
                        <li class="list-group-item list-group-item-action bg-transparent second-text fw-bold"
                            style="padding: 9px">
                            <a href="/masterkategori" style="text-decoration: none; color: gray;">Master Kategori</a>
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
                            <a href="/barangmasuk" style="text-decoration: none; color: gray;">List Barang Masuk</a>
                        </li>
                        <li class="list-group-item list-group-item-action bg-transparent second-text fw-bold"
                            style="padding: 9px">
                            <a href="/barangkeluar" style="text-decoration: none; color: gray;">List Barang Keluar</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Page Content -->
        <div class="wrapper-wrapper">
            <div id="page-content-wrapper">
                <form>
                    <div class="form-wrapper" style="margin-top: 20px">
                        <h1>Form<br>Tambah Customer</h1>
                        <form action="">
                            <table>
                                <tr>
                                    <td><label>Kode</label></td>
                                    <td><input type="text" name="KodeCustomer"required></td>
                                </tr>
                                <tr>
                                    <td><label>Perusahaan</label></td>
                                    <td><input type="text" name="PerusahaanCustomer"required></td>
                                </tr>
                                <tr>
                                    <td><label>Kontak</label></td>
                                    <td><input type="text" name="KontakCustomer"required></td>
                                </tr>
                                <tr>
                                    <td><label>Kota</label></td>
                                    <td><input type="text" name="KotaCustomer"required></td>
                                </tr>
                                <tr>
                                    <td><label>Alamat</label></td>
                                    <td><input type="text" name="KontakCustomer"required></td>
                                </tr>
                                <tr>
                                    <td><label>No Tlp</label></td>
                                    <td><input type="text" name="NomorCustomer"required></td>
                                </tr>
                                <tr>
                                    <td><label>Term</label></td>
                                    <td><input type="text" name="TermCustomer"required></td>
                                    <td>Hari</td>
                                </tr>
                                <tr>
                                    <td><label>Limit</label></td>
                                    <td><input type="text" name="LimitCustomer"required></td>
                                </tr>
                            </table>
                            <a href="/mastercustomer"><button type="button" class="btncancel">Cancel</button></a>
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
