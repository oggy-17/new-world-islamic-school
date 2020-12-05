<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>NWIS </title>


  

  <link href="{{ asset('css/bootstrap-datepicker.css') }}" rel="stylesheet" type="text/css" />

  <link href="{{ asset('css/jquery.dataTables.min.css') }}" rel="stylesheet" type="text/css" />
  <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" />

  <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css" />
  <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
  <link href="{{ asset('css/bootstrap.min.css.map') }}" rel="stylesheet" type="text/css" />



  <script src="{{ asset('js/jquery-1.9.1.min.js') }}" type="text/javascript"></script>
  <script src="{{ asset('js/jquery.dataTables.min.js') }}" type="text/javascript"></script>











</head>
<body class="bg">




  @yield('content')




   <script src="{{ asset('js/bootstrap-datepicker.js') }}" type="text/javascript"></script>

  <script src="{{ asset('js/app.js') }}" type="text/js"></script>
  <script src="{{ asset('js/bootstrap.min.js') }}" type="text/js"></script>
  <script src="{{ asset('js/popper.min.js') }}" type="text/js"></script>
  <script src="{{ asset('js/slim.min.js') }}" type="text/js"></script>


  @stack('script')





</body>
</html>

