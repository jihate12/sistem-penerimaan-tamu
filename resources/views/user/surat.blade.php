<!DOCTYPE html>
<html>
<head>
	<title>Registrasi</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('src/css/tiket.css') }}">
	<script src="/js/html2pdf.bundle.min.js"></script>
	<script src="{{ asset('src/js/pdf.js') }}"></script>
</head>
<body>
	<div id="konten">
	<header>
		<div class="tulisan">
			<h1>PT CILEGON FABRICATORS</h1>
			<h3> FABRIKASI </h3>
			<p>Jl Raya Bojonegara Km 12 RT 00, Kota Cilegon, Banten</p>
		</div>
		<div class="logo">
			<img src="https://drive.google.com/uc?export=view&id=1VsgxPL89c129GoZjkyPuHBkby96t2oo2" width="150" height="150">
		</div>
	</header>
	<hr>
	<div>
		<table>
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
				<td><b>{{ $karyawan->name }}</b></td>
			</tr>
		</table>
	</div>
	<div class="download">
		{{-- <a href="{{ route('download-dokumen', $user->nik) }}">Download</a> --}}
		<a href="download-dokumen/{{ $surat->id_kegiatan }}">Download</a>
	</div>
	</div>

</body>
</html>