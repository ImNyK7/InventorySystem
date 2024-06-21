<!DOCTYPE html>
<html>
    <head>
        <title>{{ $title }}</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" >
        <style>
@page {
            size: landscape;
        }
            body {
                font-family: Arial, sans-serif;
            }
            .custom-line {
                width: 100%;
                height: 2px;
                background: #333;
                margin: 20px 0;
            }
            table {
                width: 100%;
                border-collapse: separate;
                border-spacing: 0;
                margin-bottom: 20px;
                border: 1px solid #dddddd;
                border-radius: 8px;
                overflow: hidden;
            }
            th, td {
                border: 1px solid #dddddd;
                text-align: left;
                padding: 8px;
            }
            th {
                background-color: #1570EF;
                color: white;
            }
            tr:nth-child(even) {
                background-color: #f9f9f9;
            }
            .table-header {
                background-color: #1570EF;
                color: white;
            }
            table tr:first-child th:first-child {
                border-top-left-radius: 8px;
            }
            table tr:first-child th:last-child {
                border-top-right-radius: 8px;
            }
            table tr:last-child td:first-child {
                border-bottom-left-radius: 8px;
            }
            table tr:last-child td:last-child {
                border-bottom-right-radius: 8px;
            }
        </style>
    </head>
<body>
    <h1 style="text-align: center; font-size: 30px">{{ $title }}</h1>
    <h1 style="text-align: center; font-size: 18px">{{ $date }}</h1>
    <hr class="custom-line">
    <table class="table table-bordered">
        <tr>
            <th style="width: 5px">Kode</th>
            <th style="width: 15px">Perusahaan</th>
            <th style="width: 10px">Kontak</th>
            <th style="width: 5px">Kota</th>
            <th style="width: 10px">Alamat</th>
            <th style="width: 10px">Alamat 2</th>
            <th style="width: 10px">No Tlp</th>
            <th style="width: 5px">Term</th>
            <th style="width: 15px">Ket</th>
        </tr>
        @foreach($suppliers as $supplier)
        <tr>
            <td style="width: 5px">{{ $supplier->kodesupp }}</td>
            <td style="width: 15px">{{ $supplier->perusahaansupp }}</td>
            <td style="width: 10px">{{ $supplier->kontaksupp }}</td>
            <td style="width: 5px">{{ $supplier->kotasupp }}</td>
            <td style="width: 10px">{{ $supplier->alamatsupp }}</td>
            <td style="width: 10px">{{ $supplier->alamat2supp }}</td>
            <td style="width: 10px">{{ $supplier->notelponsupp }}</td>
            <td style="width: 5px">{{ $supplier->termsupp }}</td>
            <td style="width: 15px">{{ $supplier->descsupp }}</td>
        </tr>
        @endforeach
    </table>
  
</body>
</html>