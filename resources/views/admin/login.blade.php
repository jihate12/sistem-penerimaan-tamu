<!DOCTYPE html>
<html>
<head>
	<title>Login Admin</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('src/css/loginadmin.css') }}">
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
</head>
<body>
		<div class="banner">
			<div class="navbar">
				<a href="{{ route('landingpage') }}"><img src="{{ asset('src/img/logo.png') }}" class="logo"></a>
					<!-- <ul>
					<li><a href="#">Login Admin</a></li>
					</ul> -->
			</div>
			<div class="loginpage">
				@if ($message = Session::get('failed'))
					<script>
						alert('{{ $message }}')
					</script>
				@endif
				@if ($errors->any())
        			@foreach ($errors->all() as $err)            
					<script>
						alert('{{ $err }}')
					</script>
            		@break
        			@endforeach
    			@endif
				<form class="form" method="POST" action="{{ route('login-action') }}">
					@csrf
					<div class="formhead">
						<h3>Login Admin</h3>
					</div>
					<div class="formbody">
						<label>NIP</label>
						<input type="text" name="nip" placeholder="Masukan NIP" required="" value="{{ old('nip') }}">
						<label>Password</label>
						<input type="password" name="password" placeholder="Masukan Password" required="">
					</div>
					<div class="footer">
						<button>Login</button>
					</div>
				</form>
			</div>
		</div>
</body>
</html>