@extends('app')
@section('content')
    <div class="banner">
		<div class="navbar">
			<img src="{{ asset('src/img/logo.png') }}" class="logo">
			<ul>
				<li><a href="#">Login Admin</a></li>
			</ul>
		</div>
		<div class="content">
			<h4>Selamat Datang di </h4>
			<h1>PT. CILEGON FABRICATOR</h1>
			<p> Silahkan Klik tombol registrasi untuk mendaftarkan diri anda </br> sebelum mengisi form kegiatan di daerah PT CILEGON FABRICATOR</p>			
			<div class="registrasi">
				<a href="uploadfile.html">REGISTRASI</a></br>
			</div>
		<div class="sudahregister">
			<p>Sudah Daftar ?</p>
			<a href="ceknik.html"><u>Klik Disini</u></a>
		</div>
	</br>
		</div>
	</div>
@endsection