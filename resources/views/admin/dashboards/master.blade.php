<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title></title>

    <!-- Bootstrap Core CSS -->
    <link href="{{asset('./css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{asset('./css/sb-admin-2.css')}}" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="{{asset('./css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">

</head>

<body class="app header-fixed sidebar-fixed aside-menu-fixed sidebar-lg-show">

        <!-- Navigation -->
        
        @include('admin.layout.header')

        <div class="app-body">
            @include('admin.layout.sidebar')
           
             @yield('content')
           
        </div>

    <!-- /#wrapper -->
    <script src="{{asset('./js/jquery-2.2.4.min.js')}}"></script>
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
  
</body>

</html>
