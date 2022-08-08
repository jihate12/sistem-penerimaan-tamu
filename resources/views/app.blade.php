<!DOCTYPE html>
<html>
<head>
	<title>@yield('head_title')</title>
	<!-- <link rel="stylesheet" type="text/css" href="uploadfile.css"> -->
	<link rel="stylesheet" href="{{ asset('src/css/style.css') }}">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
	<!-- <script type="text/javascript" src="https://kit.fontawesome.com/a076d05399.js"></script> -->	
</head>
<body>
	<!-- Template -->
	<header>
		<div class="navbar">
   			<a href="{{ route('landingpage') }}"><img class="logo" src="{{ asset('src/img/logohtm.png') }}" alt="Logo PT Cilegon fabricator" width="200px" height="50px"></a>
  		</div>
  	</header>
	<!-- Template -->
    @yield('guideline')

	<!-- Template Dynamic -->
	<h2 class="title">@yield('title')</h2>	
	
	<!-- Template -->
    @yield('content')

    @yield('js')
</body>
</html>