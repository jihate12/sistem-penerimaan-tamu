@extends('dashboard')
@section('head_title')
	Dahsboard kegiatan - Admin Page
@endsection
@section('table')
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
  	<div class="navbar">
  		<ul>
  			<li><a href="{{ route('show-tamu') }}" class="tamu">Tamu</a></li>
  			<li><a href="{{ route('show-kegiatan') }}" class="kegiatan-active">Kegiatan</a></li>
              <li><a href="{{env("SCANWAJAH_URL")}}/karyawan/verification" class="kegiatan">Verifikasi</a></li>
  		</ul>
  		<a href="{{ route('admin-tambah-kegiatan') }}" class="tambah"><i class="fa fa-plus plus"></i>Tambah</a>
  	</div>
  	<hr >
  	<div class="backgroundtable">
  		 <div id="table-gridjs"></div>
  	</div>
@endsection

@section('script')
    <script>
        var kegiatan = {!! json_encode($kegiatan->toArray(), JSON_HEX_TAG) !!};
        console.log(kegiatan);
        new gridjs.Grid({
            // columns: ["NIK", "Nama", "Bertemu Dengan - ", "Departemen","Jam Datang", "Tanggal", "Action"],
            columns: [
                {
                    id: 'nik',
                    name: 'NIK'
                },
                {
                    id: 'name',
                    name: 'Nama'
                },
                {
                    id: 'bertemu_dengan',
                    name: 'Bertemu Dengan - '
                },
                {
                    id: 'departemen',
                    name: 'Departemen'
                },
                {
                    id: 'jam_datang',
                    name: 'Jam Datang'
                },
                {
                    id: 'tanggal',
                    name: 'Tanggal'
                },
                {
                    id: 'id_kegiatan',
                    name: 'Action',
                    formatter: (cell) => gridjs.html(`<a href='/dashboard-admin/kegiatan/${cell}' class="tambah">Detail</a>`)
			    }
            ],
            sort: true,
            data: kegiatan,
            pagination:true,
		    search:true
        }).render(document.getElementById("table-gridjs"));
	</script>
	<script>
		function dropdown() {
  			document.getElementById("myDropdown").classList.toggle("show");
		}
	</script>
@endsection