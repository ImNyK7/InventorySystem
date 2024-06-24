<!DOCTYPE html>
<html>

<head>
    <title>{{ $title }}</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
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

        .details {
            margin-bottom: 20px;
        }

        .details div {
            margin-bottom: 20px;
        }

        .detail-label {
            font-weight: bold;
        }

        .detail-value {
            display: inline;
            margin-left: 10px;
        }

        .table-header {
            background-color: #1570EF;
            color: white;
        }

        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        .table th {
            background-color: #1570EF;
            color: white;
        }

        .table tr:nth-child(even) {
            background-color: #f9f9f9;
        }
    </style>
</head>

<body>
    <h1 style="text-align: center; font-size: 30px">{{ $title }}</h1>
    <h2 style="text-align: center; font-size: 16px">{{ $date }}</h2>
    <hr class="custom-line">

    <div class="details">
        <div><span class="detail-label">Kode:</span><span class="detail-value">{{ $recordbarangkeluar->kodebrgklr }}</span></div>
        <div><span class="detail-label">Tanggal Keluar:</span><span class="detail-value">{{ $recordbarangkeluar->tanggalbrgklr }}</span></div>
        <div><span class="detail-label">Jumlah:</span><span class="detail-value">{{ $recordbarangkeluar->jmlhbrgklr }} {{ $recordbarangkeluar->satuanbrg->namasatuan ?? '' }}</span></div>
        <div><span class="detail-label">Nama Barang:</span><span class="detail-value">{{ $recordbarangkeluar->stokbarang->namabrg ?? '' }}</span></div>
        <div><span class="detail-label">Harga Jual:</span><span class="detail-value">Rp{{ number_format($recordbarangkeluar->hrgjual) }}</span></div>
        <div><span class="detail-label">Kategori:</span><span class="detail-value">{{ $recordbarangkeluar->kategori->namakat ?? '' }}</span></div>
        <div><span class="detail-label">Customer:</span><span class="detail-value">{{ $recordbarangkeluar->customer->perusahaancust ?? '' }}</span></div>
        <div><span class="detail-label">Nomor Seri:</span><span class="detail-value">
            @php
            $noseribrgklr = json_decode($recordbarangkeluar->noseribrgklr);
            @endphp
            @foreach ($noseribrgklr as $noseri)
                {{ $noseri }}<br>
            @endforeach
        </span></div>
    </div>
</body>

</html>
