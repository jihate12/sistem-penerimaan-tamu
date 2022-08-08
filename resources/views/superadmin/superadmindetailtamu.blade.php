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
    					<a href="/logout">Logout</a>
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
            <h3>Detail Tamu</h3>
         </div>
    <form class="form" method="POST" action="{{ route('update-tamu', ['tamu' => $tamu[0]->nik]) }}">
		@if ($errors->any())
        @foreach ($errors->all() as $err)            
            <script>
                alert('{{ $err }}')
            </script>
            @break
        @endforeach
    	@endif
		@csrf
		<div class="input_field">
			<label>NIK</label>
			<input type="text" name="nik" value="{{ $tamu[0]->nik }}" readonly>
            {{-- <p></p> --}}
		</div>
		<div class="input_field">
			<label>Nama Lengkap</label>
			<input type="text" name="name" value="{{ $tamu[0]->name }}">
		</div>
		<div class="input_field">
			<label>Email</label>
			<input type="email" name="email" value="{{ $tamu[0]->email }}">
		</div>
		<div class="input_field">
			<label>Jenis Kelamin</label>
			<div class="custome-select">
				<select name="gender">
					<option value="{{ $tamu[0]->gender }}" disabled selected hidden>{{ $tamu[0]->gender }}</option>
					<option value="L">Laki-Laki</option>
					<option value="P">Perempuan</option>
				</select>
			</div>
		</div>
		<div class="input_field">
			<label>Nomor telepon</label>
			<input type="text" name="phone" min="12" value="{{ $tamu[0]->phone }}">
		</div>
		<div class="input_field">
			<label>Jabatan</label>
			<input type="text" name="position" value="{{ $tamu[0]->position }}">
		</div>
		<div class="input_field">
			<label>Nama Perusahaan</label>
			<input type="text" name="company" value="{{ $tamu[0]->company }}">
		</div>
		<div class="input_field">
			<label>Alamat Perusahaan</label>
			<input type="text" name="address" value="{{ $tamu[0]->address }}">
		</div>
		<div class="input_field">
			{{-- <input type="submit" value="Delete" class="btndelete"> --}}
			{{-- <a href="{{ route('registrasi.destroy', ['registrasi' => $tamu[0]->nik]) }}" class="btndelete">Delete</a> --}}
			{{-- <form action="{{ route('registrasi.destroy', ['registrasi' => $tamu[0]->nik]) }}" method="post">
				@method('DELETE')
				@csrf
				<input type="submit" value="Delete" class="btndelete">
			</form> --}}
			<input type="submit" value="Update" class="btnupdate">
		</div>		
	</form>
  	</div>
	  <script>
		function dropdown() {
  			document.getElementById("myDropdown").classList.toggle("show");
		}
	</script>	
</body>