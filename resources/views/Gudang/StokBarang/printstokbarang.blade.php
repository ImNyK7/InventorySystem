<!DOCTYPE html>
<html>
<head>
    <title>{{ $title }}</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" >
</head>
<body>
    <h1 style="text-align: center; font-size: 30px">{{ $title }}</h1>
    <h1 style="text-align: center; font-size: 18px">{{ $date }}</h1>  
    <table class="table table-bordered">
        <tr>
            <th style="width: 20px">Nama Barang</th>
            <th style="width: 15px">Kategori</th>
            <th style="width: 5px">Jumlah</th>
        </tr>
        @foreach($stokbarangs as $stokbarang)
        <tr>
            <td>{{ $stokbarang->namabrg }}</td>
            <td>{{ $stokbarang->kategori->namakat ?? '' }}</td>
            <td>{{ $stokbarang->jmlhbrg }} {{ $stokbarang->satuanbrg->namasatuan ?? '' }}</td>
        </tr>
        @endforeach
    </table>
  
</body>
</html>