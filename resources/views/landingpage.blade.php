<!DOCTYPE html>
<html>
<head>
	<title>REGISTRATION FORM PT CILEGON FABRICATOR</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('src/css/landingpage.css') }}">
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

</head>
<body>
	<div class="banner">
		<div class="navbar">
			<img src="{{ asset('src/img/logo.png') }}" class="logo">
			<ul>
				<li><a href="{{ route('login-index') }}">Login Admin</a></li>
			</ul>
		</div>
		<div class="content">
			<h4>Selamat Datang di </h4>
			<h1>PT. CILEGON FABRICATOR</h1>
			<p> Silahkan Klik tombol registrasi untuk mendaftarkan diri anda </br> sebelum mengisi form kegiatan di daerah PT CILEGON FABRICATOR</p>			
			<div class="registrasi">
				<a href="registrasi/upload">REGISTRASI</a></br>
			</div>
		<div class="sudahregister">
			<p>Sudah Daftar ?</p>
			<a href="{{ route('cek-nik') }}"><u>Klik Disini</u></a>
		</div>
	</br>
		</div>
	</div>
</body>
</html>