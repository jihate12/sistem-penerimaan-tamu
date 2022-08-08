<!DOCTYPE html>
<html>
<head>
	<title>Dashboard Admin</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('src/css/detailkegiatan.css') }}">
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
            <li><a href="{{ route('show-kegiatan') }}">kembali</a></li>
  	    </div>

    <div class="backgroundtable">
  		 <div class="label">
            <h3>Detail Kegiatan</h3>
         </div>

           	<div class="wrapper-kegiatan">
		<form class="form-kegiatan" method="POST" action="{{ route('kegiatan.update', ['kegiatan' => $kegiatan[0]->id_kegiatan]) }}">
			@csrf
			@method('PUT')
			<input type="text" class="input-kegiatan" name="id_kegiatan" value="{{ $kegiatan[0]->id_kegiatan }}" readonly hidden>
			<div class="kolom-input-kegiatan">
				<label>KTP</label>
				<input type="text" class="input-kegiatan" value="{{ $kegiatan[0]->nik }}" readonly>
			</div>

			<table>
				<tr>
					<td>
						<div class="kolom-input-waktu">
							<label>Jam datang</label>
							<input type="time" class="input" value="{{ $kegiatan[0]->jam_datang }}" readonly>
						</div>
						
					</td>
					<td>
						<div class="kolom-input-waktu">
							<label>Jam pulang</label>
							<input type="time" class="input" value="{{ $kegiatan[0]->jam_pulang }}" readonly>
						</div>
						
					</td>
				</tr>
			</table>

			<div class="kolom-input-kegiatan">
				<label>Tanggal</label>
				<input type="date" class="input-kegiatan" value="{{ $kegiatan[0]->tanggal }}" readonly>
			</div>

			<div class="kolom-input-kegiatan">
				<label>Departemen</label>
				<div class="costume-selection">
					<select>
						<option value="{{ $kegiatan[0]->departemen }}">{{ $kegiatan[0]->departemen }}</option>
					</select>
				</div>
			</div>

			<div class="kolom-input-kegiatan">
				<label>Tujuan Lokasi</label>
				<div class="costume-selection">
					<select>
						<option value="{{ $kegiatan[0]->lokasi }}">{{ $kegiatan[0]->lokasi }}</option>
					</select>
				</div>
			</div>

			<div class="kolom-input-kegiatan">
				<label>Keterangan kegiatan</label>
				<input type="text" class="input-kegiatan" value="{{ $kegiatan[0]->keterangan }}" readonly>
			</div>
			
			<div class="kolom-input-kegiatan">
				<label>Bertemu dengan - </label>
				<input type="text" class="input-kegiatan" value="{{ $kegiatan[0]->bertemu_nama }}" readonly>
			</div>
			
			<div class="kolom-input-kegiatan">
				<label>Plat kendaraan</label>
				<input type="text" class="input-kegiatan" value="{{ $kegiatan[0]->plat }}" readonly>
			</div>

            <div class="kolom-input-kegiatan">
				<label>Status</label>
				<div class="costume-selection">
					<select name="status" required="">
						<option value="On-Progress">{{ $kegiatan[0]->Status }}</option>
						<option value="Cencle">Cencle</option>
						<option value="Done">Done</option>
					</select>
				</div>
			</div>

			<div class="kolom-input-kegiatan">
                <input type="submit" class="btnupdate" value="Update">
			</div>

		</form>
    </div>
	<script>
		function dropdown() {
  			document.getElementById("myDropdown").classList.toggle("show");
		}
	</script>
</body>