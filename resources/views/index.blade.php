<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>SuperMart</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="{{ asset('img/icon-tab.png') }}" rel="shortcut icon">
    <script src="{{ asset('assets/jquery.js') }}"></script>
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <!-- <script src="js/jquery.min.js"></script> -->
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <!-- <script src="js/bootstrap.min.js"></script> -->
    <script src="{{ asset('assets/popper.js') }}"></script>
    <!-- <script src="assets/popper.js"></script> -->
    <script src="{{ asset('assets/bootstrap.js') }}"></script>
    <!-- <script src="assets/bootstrap.js"></script> -->
    <script src="{{ asset('assets/mdb.js') }}"></script>
    <!-- <script src="assets/mdb.js"></script> -->
    
    <link rel="stylesheet" href="{{ asset('style/style.css') }}">
    <!-- <link rel="stylesheet" href="style/style.css"> -->
    <link rel="stylesheet" href="{{ asset('style/bootstrap.min.css') }}">
    <!-- <link rel="stylesheet" href="style/bootstrap.min.css"> -->
    <link rel="stylesheet" href="{{ asset('style/bootstrap.css') }}">
    <!-- <link rel="stylesheet" href="style/bootstrap.css"> -->
    <link rel="stylesheet" href="{{ asset('style/mdb.css') }}">
    <!-- <link rel="stylesheet" href="style/mdb.css"> -->
    <link rel="stylesheet" href="{{ asset('webfonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">
    <!-- <link rel="stylesheet" href="webfonts/font-awesome-4.7.0/css/font-awesome.min.css"> -->
</head>
<body>
    <div id="app">
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
<script>
    function openCity(evt, cityName) {
      var i, tabcontent, tablinks;
      tabcontent = document.getElementsByClassName("tabcontent");
      for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
      }
      tablinks = document.getElementsByClassName("tablinks");
      for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
      }
      document.getElementById(cityName).style.display = "block";
      evt.currentTarget.className += " active";
    }

    // Get the element with id="defaultOpen" and click on it
    document.getElementById("defaultOpen").click();
</script>
</html>