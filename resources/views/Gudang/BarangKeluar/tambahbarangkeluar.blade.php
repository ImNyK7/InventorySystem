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
    <title>Si Supras | Tambah Barang Masuk</title>
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
                    <a href="mastercustomer" style="text-decoration: none; color: gray;" id="masterLink">
                        <i class="fas fa-user-circle me-2"></i>Master
                    </a>
                    <ul class="list-group list-group-flush my-1" style="margin-left: 15px; display: none;"
                        id="masterSubMenu">
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
                    <a href="stokbarang" style="text-decoration: none; color: gray;">
                        <i class="fas fa-box me-2"></i>Gudang
                    </a>
                    <ul class="list-group list-group-flush my-1" style="margin-left: 15px;">
                        <li class="list-group-item list-group-item-action bg-transparent second-text fw-bold"
                            style="padding: 9px">
                            <a href="stokbarang" style="text-decoration: none; color: gray;">Lihat Stok Barang</a>
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


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
        </script>

        <!-- Content -->

        <div class="wrapper-wrapper">
            <div id="page-content-wrapper">
                <form>
                    <div class="form-wrapper">
                        <h1>Form<br>Barang Keluar</h1>
                        <form action="">
                            <table>
                                <tr>
                                    <td><label>Kode</label></td>
                                    <td><input type="text" name="KodeBrgKlr" required></td>
                                </tr>
                                <tr>
                                    <td><label>Tanggal</label></td>
                                    <td><input type="date" name="TgglBrgMask" required></td>
                                </tr>
                                <tr>
                                    <td><label>Jumlah Barang</label></td>
                                    <td><input type="number" name="JmlhBrgKlr" required></td>
                                </tr>
                                <tr>
                                    <td><label> Nama Barang</label></td>
                                    <td><input type="text" name="NamaBrg" required></td>
                                </tr>
                                <tr>
                                    <td><label>Kategori</label></td>
                                    <td>
                                        <select name="KatBrg">
                                            <option value="Laptop">Laptop</option>
                                            <option value="Printer">Printer</option>
                                            <option value="CCTV">CCTV</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td><label>Nomor Seri</label></td>
                                    <td><input type="text" name="No Seri"></td>
                                </tr>
                                <tr>
                                    <td colspan="1">
                                        <button id="addButton" type="button" style="font-size: 10px; margin-left:-12px"
                                            class="btn btn-link">
                                            + Tambah Nomor Seri</button>
                                    </td>
                                </tr>
                            </table>
                            <a href="/mastersupplier"><button type="button" class="btncancel">Cancel</button></a>
                            <button type="submit" class="btnsubmit">Submit</button>
                        </form>
                    </div>
                </form>
            </div>
        </div>
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                var masterLink = document.getElementById('masterLink');
                var masterSubMenu = document.getElementById('masterSubMenu');

                masterLink.addEventListener('click', function(event) {
                    event.preventDefault();
                    if (masterSubMenu.style.display === 'none') {
                        masterSubMenu.style.display = 'block';
                    } else {
                        masterSubMenu.style.display = 'none';
                    }
                });
            });
        </script>
        <script>
            document.getElementById("addButton").addEventListener("click", function() {
                var buttonRow = this.parentNode.parentNode; // Get the row containing the button
                var newRow = buttonRow.parentNode.insertRow(buttonRow.rowIndex +
                1); // Insert the new row just below the button row
                var newCell1 = newRow.insertCell(0);
                var newCell2 = newRow.insertCell(1);
                newCell1.innerHTML = '<input type="text" name="additionalInput">';
                newCell2.innerHTML = '<input type="text" name="additionalInput">';
            });
        </script>



</body>

</html>
