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
    <h1 style="text-align: center; font-size: 18px">{{ $date }}</h1>
    <hr class="custom-line">
    <table class="table table-bordered">
        <tr>
            <th >Kode</th>
            <th >Perusahaan</th>
            <th >Kontak</th>
            <th >Kota</th>
            <th >Alamat</th>
            <th >Alamat 2</th>
            <th >No Tlp</th>
            <th >Term</th>
            <th >Limit</th>
            <th >Ket</th>
        </tr>
        @foreach ($customers as $customer)
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
