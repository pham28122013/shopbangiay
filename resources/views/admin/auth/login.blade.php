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

<body>

        <!-- Navigation -->
        
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4 login-admin">
            </div>
            <div class="col-md-4 col-md-offset-4 login-admin">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Đăng nhập</h3>
                    </div>
                    <div class="panel-body">
                        <form role ="form" action="{{route('users.postlogin')}}" method="POST">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="E-mail" name="email" type="email" autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="password" type="password" value="">
                                </div>
                                <div class="form-group">
                                    <input type="checkbox" id="remember" name="remember"> 
                                    <label for="remember">Nhớ tài khoản</label>
                                </div>
                                <button type="submit" class="btn btn-lg btn-success btn-block">Đăng nhập</button>
                            </fieldset>                           
                        </form>
                        @if ($message = Session::get('fail'))
                            <div class="alert alert-danger alert-block">
                                <button type="button" class="close" data-dismiss="alert">×</button>	
                                    <strong>{{ $message }}</strong>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-md-offset-4 login-admin">
            </div>
        </div>
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
