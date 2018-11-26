<html>
<head>
    <title>PRINT OUT</title>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
    <style type='text/css'>
        body {font-family:arial;font-size:11pt;padding:0;margin:0;}
        a {color: #0000FF}
        a:hover {text-decoration:underline}
        table {border-collapse:collapse;table-layout:fixed}
        .t {font-family:Calibri;text-align:left;vertical-align:bottom}
        .r1 {font-weight:bold;text-align:center}
        .r21 {text-align:center;vertical-align:middle}
        .c21_1 {text-align:left;vertical-align:bottom}
        .c21_2 {border-top:1px solid #000000;border-left:1px solid #000000}
        .c21_12 {border-top:1px solid #000000;border-left:1px solid #000000;border-right:1px solid #000000}
        .c22_4 {text-align:left;border-top:1px solid #000000;border-left:1px solid #000000}
        .c23_2 {border-top:1px solid #000000}
        .c23_4 {vertical-align:middle;border-top:1px solid #000000}
        .c25_4 {vertical-align:middle}
        .c31_9 {font-weight:bold;text-decoration:underline}
    </style>
</head>
<body>
    <h2 style="text-allign:center;">Data Transaksi</h2>
    <table id=tableadmin class="table table-md table-bordered" cellpadding="5" cellspacing="0" width="100%">
        <tr style="background-color:#4285f4;color:white;text-align:center;">
            <th class="font-weight-bold">Id</th>
            <th class="font-weight-bold">Nama User</th>
            <th class="font-weight-bold">Total</th>
            <th class="font-weight-bold">Status</th>
            <th class="font-weight-bold">Tanggal</th>
        </tr>
        @foreach($transaksis as $transaksi)
        <tr style="text-align:center;" v-for="transaksi of transaksis" :key="transaksi.id">
            <td > {{$transaksi->id}}</td>
            <td > {{$transaksi->users->username}}</td>
            <td > Rp {{$transaksi->total}}</td>
            <td > {{$transaksi->status}}</td>
            <td > {{$transaksi->created_at}}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>