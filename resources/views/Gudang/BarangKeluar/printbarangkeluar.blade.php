<!DOCTYPE html>
<html>

<head>
    <title>{{ $title }}</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
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

        th,
        td {
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
                <th>#</th>
                <th>Kode Laporan</th>
                <th>Tanggal Keluar</th>
                <th>Customer</th>
                <th>Jumlah</th>
                <th>Nama Barang</th>
                <th>Harga Jual</th>
                <th>Kategori</th>
                <th>Total</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($recordbarangkeluars as $index => $recordbarangkeluar)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $recordbarangkeluar->kodebrgklr }}</td>
                    <td>{{ $recordbarangkeluar->tanggalbrgklr }}</td>
                    <td>
                        <a style="text-decoration: none; color: black"
                            href="/customer/mastercustomer/{{ $recordbarangkeluar->customer->perusahaancust }}">
                            {{ $recordbarangkeluar->customer->perusahaancust ?? '' }}
                        </a>
                    </td>
                    <td>{{ $recordbarangkeluar->jmlhbrgklr }}
                        {{ $recordbarangkeluar->satuanbrg->namasatuan ?? '' }}</td>
                    <td>
                        <a style="text-decoration: none; color: black"
                            href="/stokbarang/{{ $recordbarangkeluar->stokbarang->namabrg }}">
                            {{ $recordbarangkeluar->stokbarang->namabrg ?? '' }}
                        </a>
                    </td>
                    <td>Rp{{ number_format($recordbarangkeluar->hrgjual) }}</td>
                    <td>{{ $recordbarangkeluar->kategori->namakat ?? '' }}</td>
                    <td>Rp{{ number_format($recordbarangkeluar->hrgjual * $recordbarangkeluar->jmlhbrgklr, 2) }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>
