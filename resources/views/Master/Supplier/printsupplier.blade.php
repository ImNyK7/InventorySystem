<!DOCTYPE html>
<html>
<head>
    <title>{{ $title }}</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" >
    <style>
        @page {
            size: landscape;
        }
    </style>
</head>
<body>
    <h1 style="text-align: center; font-size: 30px">{{ $title }}</h1>
    <h1 style="text-align: center; font-size: 18px">{{ $date }}</h1>  
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
            <th style="width: 15px">Desc</th>
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