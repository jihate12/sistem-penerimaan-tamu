@extends('dashboard')
@section('head_title')
    Dahsboard Karyawan - Super-Admin Page
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
  			<li><a href="{{ route('show-kegiatan-index') }}" class="kegiatan">Kegiatan</a></li>
            <li><a href="{{ route('show-pegawai') }}" class="pegawai-active">Pegawai</a></li>
			<li><a href="#" class="kegiatan">Verifikasi</a></li>
  		</ul>
  		<a href="{{ route('index-tambah-karyawan') }}" class="tambah"><i class="fa fa-plus plus"></i>Tambah</a>
  	</div>
  	<hr >
  	<div class="backgroundtable">
		@if ($message = Session::get('success'))
			<script>
				alert('{{ $message }}')
			</script>
		@endif
  		 <div id="table-gridjs"></div>
  	</div>
@endsection

@section('script')
    <script>
       var karyawan = {!! json_encode($karyawan->toArray(), JSON_HEX_TAG) !!};
		console.log(karyawan[0]);
		new gridjs.Grid({
		//   columns: ["Name", "Company", "Phone Number", "Email", "Departemen"],
		columns : [
			{
				id: 'nip',
				name: 'NIP'
			},
			{
				id: 'name',
				name: 'Name'
			},
			{
				id: 'phone',
				name: 'Phone Number'
			},
			{
				id: 'email',
				name: 'Email'
			},
            {
				id: 'departemen',
				name: 'Departemen'
			},
             {
				id: 'position',
				name: 'Position'
			},
		],
		  pagination:true,
		  search:true,
		  data: karyawan
		}).render(document.getElementById("table-gridjs"));
	</script>
	<script>
		function dropdown() {
  			document.getElementById("myDropdown").classList.toggle("show");
		}
	</script>
@endsection