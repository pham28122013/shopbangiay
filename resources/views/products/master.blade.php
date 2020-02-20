<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>SHOP BAN HANG</title>
  <link rel="stylesheet" href="{{asset('./css/bootstrap.css')}}">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <link rel="stylesheet" href="{{asset('./css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('./css/linearicons.css')}}">
    <link rel="stylesheet" href="{{asset('./css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('./css/themify-icons.css')}}">
	<link rel="stylesheet" href="{{asset('./css/nice-select.css')}}">
	<link rel="stylesheet" href="{{asset('./css/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{asset('./css/nouislider.min.css')}}">
    <link rel="stylesheet" href="{{asset('./css/ion.rangeSlider.css')}}">
    <link rel="stylesheet" href="{{asset('./css/ion.rangeSlider.skinFlat.css')}}">
	<link rel="stylesheet" href="{{asset('./css/magnific-popup.css')}}">
	<link rel="stylesheet" href="{{asset('./css/main.css')}}">
</head>

<body>
  @include('products.layout.header')
 
  @yield('content')

  @include('products.layout.footer')
  <script src="{{asset('./js/jquery-3.4.1.min.js')}}"></script>
  <script src="{{asset('./js/bootstrap.min.js')}}"></script>
	<!--gmaps Js-->
	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4"
	 crossorigin="anonymous"></script>
	<script src="{{asset('./js/jquery.ajaxchimp.min.js')}}"></script>
	<script src="{{asset('./js/jquery.nice-select.min.js')}}"></script>
	<script src="{{asset('./js/jquery.sticky.js')}}"></script>
	<script src="{{asset('./js/nouislider.min.js')}}"></script>
	<script src="{{asset('./js/jquery.magnific-popup.min.js')}}"></script>
	<script src="{{asset('./js/owl.carousel.min.js')}}"></script>
	<!--gmaps Js-->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
	<script src="{{asset('./js/gmaps.min.js')}}"></script>
  <script src="{{asset('./js/main.js')}}"></script>
  <script src="{{asset('./js/myscript.js')}}"></script>
  
</body>

</html>