
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>WorkWise Html Template</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="" />
<meta name="keywords" content="" />
<link rel="stylesheet" type="text/css" href="{{asset('frontassets/userassets/css/animate.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('frontassets/userassets/css/bootstrap.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('frontassets/userassets/css/line-awesome.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('frontassets/userassets/css/line-awesome-font-awesome.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('frontassets/userassets/css/font-awesome.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('frontassets/userassets/css/jquery.mCustomScrollbar.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('frontassets/userassets/lib/slick/slick.')}}">
<link rel="stylesheet" type="text/css" href="{{asset('frontassets/userassets/lib/slick/slick-theme.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('frontassets/userassets/css/style.css ')}}">
<link rel="stylesheet" type="text/css" href="{{asset('frontassets/userassets/css/responsive.css')}}">
</head>


<body>
	

<div class="wrapper">
		


        @include('layouts.frontlayout.users.header')
       
        
        @yield('content')

   	</div>

<script type="text/javascript" src="{{asset('frontassets/userassets/js/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{asset('frontassets/userassets/js/popper.js')}}"></script>
<script type="text/javascript" src="{{asset('frontassets/userassets/js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{asset('frontassets/userassets/js/jquery.mCustomScrollbar.js')}}"></script>
<script type="text/javascript" src="{{asset('frontassets/userassets/lib/slick/slick.min.js')}}"></script>
<script type="text/javascript" src="{{asset('frontassets/userassets/js/scrollbar.js')}}"></script>
<script type="text/javascript" src="{{asset('frontassets/userassets/js/script.js')}}"></script>

</body>
</html>