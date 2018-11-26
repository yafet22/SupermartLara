<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Invoice</title>

    <style type="text/css">
        @page {
            margin: 0px;
        }
        body {
            margin: 0px;
        }
        * {
            font-family: Verdana, Arial, sans-serif;
        }
        a {
            color: #fff;
            text-decoration: none;
        }
        table {
            font-size: x-small;
        }
        tfoot tr td {
            font-weight: bold;
            font-size: x-small;
        }
        .invoice table {
            margin: 15px;
        }
        .invoice h3 {
            margin-left: 15px;
        }
        .information {
            background-color: #22A7F0;
            color: #FFF;
        }
        .information .logo {
            margin: 5px;
        }
        .information table {
            padding: 10px;
        }
    </style>

</head>
<body>

<div class="information">
    <table width="100%">
        <tr>
            <td align="left" style="width: 40%;">
                <h3>{{$transaksis->users->username}}</h3>
                <pre>
Happy 
Shopping
In Supermart
<br /><br />
Date: {{$transaksis->created_at}}
Identifier: #{{$transaksis->id}}
Status: Paid
</pre>


            </td>
            <td align="center">
                <img  src="{{ public_path("/img/logo-supermarket-supermart.png") }}" alt="Logo" width="128" class="logo"/>
            </td>
            <td align="right" style="width: 40%;">

                <h3>Supermart</h3>
                <pre>
                    http://supermart.yafetrakan.com

                    Babarsari Street
                    Yogyakarta City
                    Indonesia
                </pre>
            </td>
        </tr>

    </table>
</div>


<br/>

<div class="invoice">
    <h3>Invoice specification #{{$transaksis->id}}</h3>
    <table width="100%">
        <thead>
        <tr>
            <th>Nama Barang</th>
            <th>Quantity</th>
            <th>Total</th>
        </tr>
        </thead>
        <tbody>
        @foreach($cartshops as $cartshop)
        <tr>
            <td>{{ $cartshop->barangs->namabarang }}</td>
            <td>{{ $cartshop->jumlah }}</td>
            <td align="left">Rp{{$cartshop->totalharga}} -</td>

        </tr>
        @endforeach
        </tbody>

        <tfoot>
        <tr>
            <td colspan="1"></td>
            <td align="left">Total</td>
            <td align="left" class="gray">Rp {{$total}},-</td>
        </tr>
        </tfoot>
    </table>
</div>

<div class="information" style="position: absolute; bottom: 0;">
    <table width="100%">
        <tr>
            <td align="left" style="width: 50%;">
                &copy; {{ date('Y') }} {{ config('app.url') }} - All rights reserved.
            </td>
            <td align="right" style="width: 50%;">
                Happy Shopping
            </td>
        </tr>

    </table>
</div>
</body>
</html>