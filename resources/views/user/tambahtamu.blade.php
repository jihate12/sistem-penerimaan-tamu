<!DOCTYPE html>
<html>
<head>
	<title>Dashboard Admin - Tambah Kegiatan</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('src/css/formtambahkegiatan.css') }}">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
	<script src="https://unpkg.com/gridjs/dist/gridjs.production.min.js"></script>
	<link href="https://unpkg.com/gridjs/dist/theme/mermaid.min.css" rel="stylesheet" />


</head>
<body>
	<header>
		<div class="navbar">
   			<a href="{{ route('landingpage') }}"><img class="logo" src="{{ asset('src/img/logohtm.png') }}" alt="Logo PT Cilegon fabricator" width="200px" height="50px"></a>
   			<ul>
			   <li><h4><a onclick="dropdown()">{{ $user[0]->name }}</a></h4></li>
				   <div id="myDropdown" class="dropdown-content">
    					<a href="{{Route('logout_tamu')}}">Logout</a>
					</div>				
    			<li><i class="fa fa-user"></i></li>
   			</ul>
  		</div>
  		<hr color="#c4c4c4" size="1px">
  	</header>
      	<div class="navbarb">
            <li><i class="fa fa-arrow-left"></i></li>
            <li><a href="{{ route('dashboard-tamu') }}">kembali</a></li>
  	    </div>
    @if ($errors->any())
        @foreach ($errors->all() as $err)            
            <script>
                alert('{{ $err }}')
            </script>
            @break
        @endforeach
    @endif
    <div class="backgroundtable">
  		 <div class="label">
            <h3>Tambah Kegiatan</h3>
         </div>
            <div class="wrapper-kegiatan">
            <form class="form-kegiatan" method="POST" action="{{ route('kegiatan.store') }}">
                @csrf
                <div class="kolom-input-kegiatan" >
                    <input type="text" class="input-kegiatan" name="status" id="status" hidden="" value="On-Progress">
                </div>
                <input type="text" name="nik" value="{{ $nik }}" hidden readonly>
                <div class="kolom-input-kegiatan">
                    <label>Tanggal</label>
                    <input type="date" class="input-kegiatan" name="tanggal">
                </div>
                <table>
                    <tr>
                        <td>
                            <div class="kolom-input-waktu">
                                <label>Jam datang</label>
                                <input type="time" class="input" placeholder="" name="jam_datang">
                            </div>
                            
                        </td>
                        <td>
                            <div class="kolom-input-waktu">
                                <label>Jam pulang</label>
                                <input type="time" class="input" placeholder="" name="jam_pulang" >
                            </div>
                            
                        </td>
                    </tr>
                </table>
                <div class="kolom-input-kegiatan">
                    <label>Departemen</label>
                    <div class="costume-selection">
                        <select name="departemen" >
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
                <div class="kolom-input-kegiatan">
                    <label>Tujuan Lokasi</label>
                    <div class="costume-selection">
                        <select name="lokasi">
                            <option value="">~Pilih Tujuan Kunjungan~</option>
                            <option value="Main Office">Main Office</option>
                            <option value="Site">Site (Workshop, Pelabuhan, Gudang)</option>
                        </select>
                    </div>
                </div>
                <div class="kolom-input-kegiatan">
                    <label>Keterangan kegiatan</label>
                    <input type="text" class="input-kegiatan" placeholder="Masukan keterangan" name="keterangan">
                </div>
                
                <div class="kolom-input-kegiatan">
                    <label>Bertemu dengan - </label>
                    <select name="nip"  required="">
                        <option>~Ingin bertemu dengan siapa?~</option>
                        @foreach ($karyawan as $data)
                            <option value="{{ $data->nip }}">{{ $data->name }}</option>
                        @endforeach
                    </select>
                </div>
                
                <div class="kolom-input-kegiatan">
                    <label>Plat kendaraan</label>
                    <input type="text" class="input-kegiatan" placeholder="Masukan plat kendaraan" name="plat">
                </div>

                <div class="kolom-input-kegiatan">
                    <input type="submit" class="btn-kegiatan" value="Selanjutnya">
                </div>

            </form>
    </div>
    <script>
		function dropdown() {
  			document.getElementById("myDropdown").classList.toggle("show");
		}
	</script>
</body>