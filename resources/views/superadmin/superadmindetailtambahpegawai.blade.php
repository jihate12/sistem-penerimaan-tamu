<!DOCTYPE html>
<html>
<head>
	<title>Dashboard Admin - Tambah Karyawan</title>
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
            <h3>Tambah Karyawan</h3>
         </div>
    @if ($errors->any())
		@foreach ($errors->all() as $err)            
			<script>
				alert('{{ $err }}')
			</script>
			@break
		@endforeach
	@endif
    <form class="form" method="POST" action="{{ route('index-input-karyawan') }}">
        @csrf
		<div class="input_field">
			<label>NIP</label>
			<input type="text" name="nip" placeholder="Masukan NIP" required="" value="{{ old('nip') }}">
		</div>
		<div class="input_field">
			<label>Nama Lengkap</label>
			<input type="text" name="name" placeholder="Masukan Nama Lengkap" required="" value="{{ old('name') }}">
		</div>
		<div class="input_field">
			<label>Nomor telepon</label>
			<input type="number" name="phone" placeholder="Masukan Nomor Telepon" required="" value="{{ old('phone') }}">
		</div>
        <div class="input_field">
			<label>Email</label>
			<input type="text" name="email" placeholder="Masukan Email" required="" value="{{ old('email') }}">
		</div>
		<div class="input_field">
			<label>Departemen</label>
			<div class="costume-selection">
                <select name="departemen" value="{{ old('departemen') }}">
                    <option value="">~Pilih Departemen~</option>
                    <option value="Boards of Directors">Boards of Directors</option>
                    <option value="General Affairs">General Affairs</option>
                    <option value="HRD">HRD</option>
                    <option value="HSE">HSE</option>
                    <option value="Purchasing">Purchasing</option>
                    <option value="Fin, Acc, Tax">Fin, Acc, Tax</option>
                    <option value="Adminitration">Adminitration</option>
                    <option value="Quality Assurance">Quality Assurance</option>
                    <option value="PPC">PPC</option>
                    <option value="Project Proc">Project Proc</option>
                    <option value="Quality Control">Quality Control</option>
                    <option value="Material Control">Material Control</option>
                    <option value="Engineering">Engineering</option>
                    <option value="Business Dev">Business Dev</option>
                    <option value="PTL">PTL</option>
                    <option value="Production">Production</option>
                    <option value="Service">Service</option>
                    <option value="TG & Maintenance">TG & Maintenance</option>
                </select>
            </div>
		</div>
		<div class="input_field">
			<label>Jabatan</label>
			<input type="text" name="position" placeholder="Masukan Jabatan" required="" value="{{ old('position') }}">
		</div>
		<div class="input_field">
			<label>Password</label>
			<input type="password" placeholder="Masukan Password" required="" name="password">
		</div>
        <div class="input_field">
			<label>Level</label>
			<div class="costume-selection">
				<select name="level">
					<option value="1">Admin</option>
                    <option value="0">Pegawai</option>
                </select>
            </div>
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