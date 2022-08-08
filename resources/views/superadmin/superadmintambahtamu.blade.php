<!DOCTYPE html>
<html>
<head>
	<title>Dashboard Admin - Tambah Tamu</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('src/css/formtambahtamu.css') }}">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
	<script src="https://unpkg.com/gridjs/dist/gridjs.production.min.js"></script>
	<link href="https://unpkg.com/gridjs/dist/theme/mermaid.min.css" rel="stylesheet" />
</head>
<body>

	<header>
		<div class="navbar">
   			<a href="{{ route('landingpage') }}"><img class="logo" src="{{ asset('src/img/logohtm.png') }}" alt="Logo PT Cilegon fabricator" width="200px" height="50px"></a>
   			<ul>
				<li><h4><a onclick="dropdown()">{{ $user }}</a></h4></li>
				<div id="myDropdown" class="dropdown-content">
					 <a href="/logout-admin">Logout</a>
				 </div>				
			 <li><i class="fa fa-user"></i></li>
   			</ul>
  		</div>
  		<hr color="#c4c4c4" size="1px">
  	</header>
      	<div class="navbarb">
            <li><i class="fa fa-arrow-left"></i></li>
            <li><a href="{{ route('show-tamu-index') }}">kembali</a></li>
  	    </div>
    <div class="backgroundtable">
  		 <div class="label">
            <h3>Tambah Tamu</h3>
         </div>
    @if ($errors->any())
        @foreach ($errors->all() as $err)            
            <script>
                alert('{{ $err }}')
            </script>
            @break
        @endforeach
    @endif
    <form class="form" method="POST" action="{{ route('index-input-tamu') }}">
        @csrf
		<div class="input_field">
			<label>NIK</label>
			<input type="text" name="nik" placeholder="Masukan NIK" required="" value="{{ old('nik') }}">
		</div>
		<div class="input_field">
			<label>Nama Lengkap</label>
			<input type="text" name="name" placeholder="Masukan Nama Lengkap" required="" value="{{ old('name') }}">
		</div>
		<div class="input_field">
			<label>Email</label>
			<input type="email" name="email" placeholder="Masukan Email" required="" value="{{ old('email') }}">
		</div>
		<div class="input_field">
			<label>Password</label>
			<input type="password" name="password" placeholder="Masukan password" required="">
		</div>
		<div class="input_field">
			<label>Jenis Kelamin</label>
			<div class="custome-select">
				<select required="" name="gender" value="{{ old('gender') }}">
					<option value="">-Pilih-</option>
					<option value="L">Pria</option>
					<option value="P">Wanita</option>
				</select>
			</div>
			
		</div>
		<div class="input_field">
			<label>Nomor telepon</label>
			<input type="number" name="phone" placeholder="Masukan Nomor Telepon" required="" value="{{ old('phone') }}">
		</div>
		<div class="input_field">
			<label>Jabatan</label>
			<input type="text" name="position" placeholder="Masukan Jabatan" required="" value="{{ old('position') }}">
		</div>
		<div class="input_field">
			<label>Nama Perusahaan</label>
			<input type="text" name="company" placeholder="Masukan Nama Perusahaan" required="" value="{{ old('company') }}">
		</div>
		<div class="input_field">
			<label>Alamat Perusahaan</label>
			<textarea placeholder="Masukan Alamat Perusahaan" required="" name="address" value="{{ old('address') }}"></textarea>
		</div>
		<div class="input_field">
			<input type="submit" value="Konfirmasi" class="btn">
		</div>		
	</form>
  	</div>
	  <script>
		function dropdown() {
  			document.getElementById("myDropdown").classList.toggle("show");
		}
	</script>
</body>