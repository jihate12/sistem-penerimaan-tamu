<!DOCTYPE html>
<html>
<head>
	<title>Dashboard Admin</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('src/css/detailtamu.css') }}">
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
    					<a href="/logout-karyawan">Logout</a>
					</div>				
    			<li><i class="fa fa-user"></i></li>	
   			</ul>
  		</div>
  		<hr color="#c4c4c4" size="1px">
  	</header>
      	<div class="navbarb">
            <li><i class="fa fa-arrow-left"></i></li>
            <li><a href="{{ route('show-tamu') }}">kembali</a></li>
  	    </div>
    <div class="backgroundtable">
  		 <div class="label">
            <h3>Detail Tamu</h3>
         </div>
    <form class="form" method="GET" action="#">
		<div class="input_field">
			<label>NIK</label>
			<input type="text" value="{{ $tamu[0]->nik }}" readonly>
		</div>
		<div class="input_field">
			<label>Nama Lengkap</label>
			<input type="text" value="{{ $tamu[0]->name }}" readonly>
		</div>
		<div class="input_field">
			<label>Email</label>
			<input type="text" value="{{ $tamu[0]->email }}" readonly>
		</div>
		<div class="input_field">
			<label>Jenis Kelamin</label>
			<div class="custome-select">
				<select>
					@if ($tamu[0]->gender == "L")
						<option value="L">Laki-Laki</option>
					@else
						<option value="P">Perempuan</option>
					@endif
				</select>
			</div>
		</div>
		<div class="input_field">
			<label>Nomor telepon</label>
			<input type="text" value="{{ $tamu[0]->phone }}" readonly>
		</div>
		<div class="input_field">
			<label>Jabatan</label>
			<input type="text" value="{{ $tamu[0]->position }}" readonly>
		</div>
		<div class="input_field">
			<label>Nama Perusahaan</label>
			<input type="text" value="{{ $tamu[0]->company }}" readonly>
		</div>
		<div class="input_field">
			<label>Alamat Perusahaan</label>
			<input type="text" value="{{ $tamu[0]->address }}" readonly>
		</div>
		<div class="input_field">
			<input type="submit" value="Update" class="btnupdate">
		</div>		
	</form>
  	</div>
</body>
<script>
        function dropdown() {
            document.getElementById("myDropdown").classList.toggle("show");
        }
</script>