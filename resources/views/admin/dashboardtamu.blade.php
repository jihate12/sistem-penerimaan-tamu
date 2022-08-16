@extends('dashboard')
@section('head_title')
    Dahsboard Tamu - Admin Page
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
  			<li><a href="{{ route('show-tamu') }}" class="tamu-active">Tamu</a></li>
  			<li><a href="{{ route('show-kegiatan') }}" class="kegiatan">Kegiatan</a></li>
			  <li><a href="{{env("SCANWAJAH_URL")}}/karyawan/verification" class="kegiatan">Verifikasi</a></li>
  		</ul>
  		<a href="{{ route('admin-tambah-tamu') }}" class="tambah"><i class="fa fa-plus plus"></i>Tambah</a>
  	</div>
  	<hr >
  	<div class="backgroundtable">
  		 <div id="table-gridjs"></div>
	</div>
@endsection

@section('script')
	<script>
		var data = {!! json_encode($data->toArray(), JSON_HEX_TAG) !!};
		console.log(data[0]);
		new gridjs.Grid({
		//   columns: ["Name", "Company", "Phone Number", "address", "action"],
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
				formatter: (cell) => gridjs.html(`<a href='/dashboard-admin/detail/${cell}' class="tambah">Detail</a>`)
			}
		],
		  pagination:true,
		  search:true,
		  sort: true,
		  data: data
		}).render(document.getElementById("table-gridjs"));
	</script>
	<script>
		function dropdown() {
  			document.getElementById("myDropdown").classList.toggle("show");
		}
	</script>
@endsection