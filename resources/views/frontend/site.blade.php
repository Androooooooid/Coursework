<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Squadfree - Free bootstrap 3 one page template</title>

  <!-- Bootstrap Core CSS -->
  <link href="{{ asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">

  <!-- Fonts -->
  <link href="{{ asset('assets/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
  <link href="{{ asset('assets/css/animate.css')}}" rel="stylesheet" />
  <!-- Squad theme CSS -->
  <link href="{{ asset('assets/css/style.css')}}" rel="stylesheet">
  <link href="{{ asset('assets/color/default.css')}}"color/default.css" rel="stylesheet">


</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-custom">
  <!-- Preloader -->
  <div id="preloader">
    <div id="load"></div>
  </div>

	@yield('header')

  <!-- Section: intro -->
  
    @yield('content')	

  <!-- Core JavaScript Files -->
  <script src="{{ asset('assets/js/jquery.min.js')}}"></script>
  <script src="{{ asset('assets/js/bootstrap.min.js')}}"></script>
  <script src="{{ asset('assets/js/jquery.easing.min.js')}}"></script>
  <script src="{{ asset('assets/js/jquery.scrollTo.js')}}"></script>
  <script src="{{ asset('assets/js/wow.min.js')}}"></script>
  <!-- Custom Theme JavaScript -->
  <script src="{{ asset('assets/js/custom.js')}}"></script>
  <script src="{{ asset('assets/contactform/contactform.js')}}"></script>

</body>

</html>
