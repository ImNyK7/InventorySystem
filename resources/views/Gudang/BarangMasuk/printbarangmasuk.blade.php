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
                <th>No</th>
                <th>Kode Laporan</th>
                <th>Tanggal Masuk</th>
                <th>Supplier</th>
                <th>Jumlah</th>
                <th>Nama Barang</th>
                <th>Harga Beli</th>
                <th>Kategori</th>
                <th>Total</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($recordbarangmasuks as $index => $recordbarangmasuk)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $recordbarangmasuk->kodebrgmsk }}</td>
                    <td>{{ $recordbarangmasuk->tanggalbrgmsk }}</td>
                    <td>
                        <a style="text-decoration: none; color: black"
                            href="/supplier/mastersupplier/{{ $recordbarangmasuk->supplier->perusahaansupp ?? '' }}">
                            {{ $recordbarangmasuk->supplier->perusahaansupp ?? '' }}
                        </a>
                    </td>
                    <td>{{ $recordbarangmasuk->jmlhbrgmsk }}
                        {{ $recordbarangmasuk->satuanbrg->namasatuan ?? '' }}</td>
                    <td>
                        <a style="text-decoration: none; color: black"
                            href="/stokbarang/{{ $recordbarangmasuk->stokbarang->namabrg ?? '' }}">

                        </a>
                        {{ $recordbarangmasuk->stokbarang->namabrg ?? '' }}
                    </td>
                    <td>Rp{{ number_format($recordbarangmasuk->hrgbeli) }}</td>
                    <td>{{ $recordbarangmasuk->kategori->namakat ?? '' }}</td>
                    <td>Rp{{ number_format($recordbarangmasuk->hrgbeli * $recordbarangmasuk->jmlhbrgmsk, 2) }}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>
