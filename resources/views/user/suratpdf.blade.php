<!DOCTYPE html>
<html>
<head>
	<title>Registrasi</title>
	{{-- <link rel="stylesheet" type="text/css" href="{{ asset('src/css/tiket.css') }}"> --}}
	{{-- <script src="/js/html2pdf.bundle.min.js"></script>
	<script src="{{ asset('src/js/pdf.js') }}"></script> --}}
    <style>
        table td{
	        padding-bottom: 50px;
        }
    </style>
</head>
<body>
	<div id="konten">
	<header style="margin-left: 10px;margin-right: 15px;margin-top: 15px;display: flex;align-items: center;">
		<div class="tulisan">
			<h1>PT CILEGON FABRICATORS</h1>
			<h3> FABRIKASI </h3>
			<p>Jl Raya Bojonegara Km 12 RT 00, Kota Cilegon, Banten</p>
		</div>
		{{-- <div class="logo"> --}}
			<img src="http://www.cilegonfab.co.id/share/img/custom/logo/logo.png" width="70" height="70" style="margin-top:-120px;clear: left;float: right;">		
	</header>
	<hr>
	<div>
		<table style="width: 750px;margin: 0 auto;margin-top: 75px;font-size: 20px;">
			<tr>
				<td>NIK</td>
				<td>:</td>
				<td><b>{{ $surat->nik }}</b></td>
			</tr>
			<tr>
				<td>Nama Lengkap</td>
				<td>:</td>	
				<td><b>{{ $user->name }}</b></td>
			</tr>
			<tr>
				<td>Nomor Telepon</td>
				<td>:</td>	
				<td><b>{{ $user->phone }}</b></td>
			</tr>
			<tr>
				<td>Jabatan</td>
				<td>:</td>	
				<td><b>{{ $user->position }}</b></td>
			</tr>
			<tr>
				<td>Nama Perusahaan</td>
				<td>:</td>	
				<td><b>{{ $user->company }}</b></td>
			</tr>
			<tr>
				<td>Bertemu Dengan</td>
				<td>:</td>	
				<td><b>Bapak Ujang Sukajang</b></td>
			</tr>
		</table>
	</div>
	</div>

</body>
</html>