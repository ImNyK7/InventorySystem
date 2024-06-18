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
            <th style="width: 10px">Limit</th>
            <th style="width: 15px">Desc</th>
        </tr>
        @foreach($customers as $customer)
        <tr>
            <td style="width: 5px">{{ $customer->kodecust }}</td>
            <td style="width: 15px">{{ $customer->perusahaancust }}</td>
            <td style="width: 10px">{{ $customer->kontakcust }}</td>
            <td style="width: 5px">{{ $customer->kotacust }}</td>
            <td style="width: 10px">{{ $customer->alamatcust }}</td>
            <td style="width: 10px">{{ $customer->alamat2cust }}</td>
            <td style="width: 10px">{{ $customer->notelponcust }}</td>
            <td style="width: 5px">{{ $customer->termcust }}</td>
            <td style="width: 10px">{{ $customer->limitcust }}</td>
            <td style="width: 15px">{{ $customer->desccust }}</td>
        </tr>
        @endforeach
    </table>
  
</body>
</html>