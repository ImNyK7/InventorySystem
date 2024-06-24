<!DOCTYPE html>
<html>
<head>
    <title>{{ $title }}</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" >
    <style>
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
    <h2 style="text-align: center; font-size: 16px">{{ $date }}</h2>  
    <hr class="custom-line">
    <table class="table table-bordered">
        <thead class="table-header">
            <tr>
                <th style="width: 20px">Nama Barang</th>
                <th style="width: 15px">Kategori</th>
                <th style="width: 5px">Jumlah</th>
            </tr>
        </thead>
        <tbody>
            @foreach($stokbarangs as $stokbarang)
            <tr>
                <td>{{ $stokbarang->namabrg }}</td>
                <td>{{ $stokbarang->kategori->namakat ?? '' }}</td>
                <td>{{ $stokbarang->jmlhbrg }} {{ $stokbarang->satuanbrg->namasatuan ?? '' }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
