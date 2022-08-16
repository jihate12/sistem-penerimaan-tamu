@extends('dashboard')
@section('head_title')
    Dahsboard Tamu - Super-Admin Page
@endsection
@section('table')
    <header>
		<div class="navbar">
   			<a href="{{ route('landingpage') }}"><img class="logo" src="{{ asset('src/img/logohtm.png') }}" alt="Logo PT Cilegon fabricator" width="200px" height="50px"></a>
   			<ul>
			   <li><h4><a onclick="dropdown()">{{ $admin }}</a></h4></li>
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
  			<li><a href="{{ route('show-tamu-index') }}" class="tamu-active">Tamu</a></li>
  			<li><a href="{{ route('show-kegiatan-index') }}" class="kegiatan">Kegiatan</a></li>
            <li><a href="{{ route('show-pegawai') }}" class="pegawai">Pegawai</a></li>
			<li><a href="{{env("SCANWAJAH_URL")}}/admin/verification" class="kegiatan">Verifikasi</a></li>
  		</ul>
  		<a href="{{ route('index-tambah-tamu') }}" class="tambah"><i class="fa fa-plus plus"></i>Tambah</a>
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
			<a href="{{ route('export_excel_tamu') }}" class="tambah">Download Data Tamu</a>
		 </div>
  	</div>
@endsection

@section('script')
    <script>
       var user = {!! json_encode($user->toArray(), JSON_HEX_TAG) !!};
		console.log(user[0]);
		new gridjs.Grid({
		//   columns: ["Name", "Company", "Phone Number", "Email", "Departemen"],
		columns : [
			{
				id: 'name',
				name: 'Name'
			},
			{
				id: 'company',
				name: 'Company'
			},
			{
				id: 'phone',
				name: 'Phone Number'
			},
			{
				id: 'address',
				name: 'Address'
			},
			{
				id: 'nik',
				name: 'Action',
				formatter: (cell) => gridjs.html(`<a href='/user-data-tamu-index/${cell}' class="tambah">Detail</a>`)
			},
			{
				id: 'nik',
				name: 'Action',
				formatter: (cell) => gridjs.html(`<form action="/registrasi/${cell}" method="post">@method('DELETE')@csrf<input type="submit" onclick="return confirm('Yakin Untuk Menghapus?')" value="Delete" class="btndelete"></form>`)
			}
		],
		  pagination:true,
		  search:true,
		  data: user
		}).render(document.getElementById("table-gridjs"));
	</script>
	<script>
		function dropdown() {
  			document.getElementById("myDropdown").classList.toggle("show");
		}
	</script>	
@endsection



