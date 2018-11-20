<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Email Verification</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <p>
    Please Click on Link Below to activate your account:
    {{ route('verifemail',$user->kode) }} Click Here to Activate your account
    </p>
</body>
</html>