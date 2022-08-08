<!DOCTYPE html>
<html>
<head>
	<title>Login Pengunjung</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('src/css/loginadmin.css') }}">
</head>
<body>
	<div class="banner">
			<div class="navbar">
				<a href="{{ route('landingpage') }}"><img src="{{ asset('src/img/logo.png') }}" class="logo"></a>
			</div>
			<div class="loginpage">
				<div class="formhead">
						<h3>Login Pengunjung</h3>
					</div>
				<form class="form" method="POST" action="{{ route('login-action-tamu') }}">
					@csrf
					@if ($errors->any())
						@foreach ($errors->all() as $err)            
							<script>
								alert('{{ $err }}')
							</script>
							@break
						@endforeach
    				@endif
					<div class="formbody">
						<label>NIK</label>
						<input type="text" name="nik" placeholder="Masukan NIK" required="">
					</div>
					<div class="formbody">
						<label>Password</label>
						<input type="password" name="password" placeholder="Masukan password" required="">
					</div>
					<div class="footer">
						<button>Cek NIK</button>
					</div>
				</form>
			</div>
		</div>
</body>
</html>