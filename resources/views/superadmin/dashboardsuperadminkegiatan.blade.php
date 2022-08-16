@extends('dashboard')
@section('head_title')
    Dahsboard Kegiatan - Super-Admin Page
@endsection
@section('table')
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
  	<div class="navbar">
  		<ul>
  			<li><a href="{{ route('show-tamu-index') }}" class="tamu">Tamu</a></li>
  			<li><a href="{{ route('show-kegiatan-index') }}" class="kegiatan-active">Kegiatan</a></li>
            <li><a href="{{ route('show-pegawai') }}" class="pegawai">Pegawai</a></li>
			<li><a href="{{env("SCANWAJAH_URL")}}/admin/verification" class="kegiatan">Verifikasi</a></li>
  		</ul>
  		<a href="{{ route('index-tambah-kegiatan') }}" class="tambah"><i class="fa fa-plus plus"></i>Tambah</a>
  	</div>
  	<hr >
  	<div class="backgroundtable">
        @if ($message = Session::get('success'))
			<script>
				alert('{{ $message }}')
			</script>
		@endif
  		 <div id="table-gridjs"></div>
		 <div style="text-align: center; margin-top: 20px;">
			<a href="{{ route('export_excel_kegiatan') }}" class="tambah">Download Data Kegiatan</a>
		 </div>
  	</div>
@endsection

@section('script')
    <script>
       var kegiatan = {!! json_encode($kegiatan->toArray(), JSON_HEX_TAG) !!};
		console.log(kegiatan);
		new gridjs.Grid({
		//   columns: ["Name", "Company", "Phone Number", "Email", "Departemen"],
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
                    id: 'bertemu_nama',
                    name: 'Bertemu Dengan'
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
                    formatter: (cell) => gridjs.html(`<a href='/user-data-kegiatan-index/${cell}' class="tambah">Detail</a>`)
			    },
                {
                    id: 'id_kegiatan',
                    name: 'Action',
                    formatter: (cell) => gridjs.html(`<form action="/kegiatan/${cell}" method="post">@method('DELETE')@csrf<input type="submit" onclick="return confirm('Yakin Untuk Menghapus?')" value="Delete" class="btndelete"></form>`)
			    }
            ],
		  pagination:true,
		  search:true,
		  data: kegiatan
		}).render(document.getElementById("table-gridjs"));
	</script>
	<script>
		function dropdown() {
  			document.getElementById("myDropdown").classList.toggle("show");
		}
	</script>    
@endsection