@extends('dashboard')
@section('head_title')
	Dahsboard User - User Page
@endsection
@section('table')
	<header>
		@csrf
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
  	<div class="navbar">
  		<a href="/tambah-kegiatan-tamu" class="tambah"><i class="fa fa-plus plus"></i>Tambah</a>
  	</div>
  	<hr >
    <div class="backgroundtable">
        <h2>Data Diri</h2>
  		 <div id="table-gridjs-datauser"></div>
	</div>
  	<div class="backgroundtable">
        <h2>History Kegiatan</h2>
  		 <div id="table-gridjs"></div>
	</div>
@endsection

@section('script')
	<script>
		var kegiatan = {!! json_encode($kegiatan->toArray(), JSON_HEX_TAG) !!};
        var user = {!! json_encode($user->toArray(), JSON_HEX_TAG) !!};
		console.log(kegiatan[0]);
		console.log(user);

        //Table kegiatan
		new gridjs.Grid({
		//   columns: ["Name", "Company", "Phone Number", "address", "action"],
		columns : [
            {
				id: 'tanggal',
				name: 'Tanggal'
			},
			{
				id: 'keterangan',
				name: 'Kegiatan'
			},
			{
				id: 'bertemu_nama',
				name: 'Bertemu Dengan'
			},
			{
				id: 'lokasi',
				name: 'Lokasi'
			},
			{
				id: 'departemen',
				name: 'Departemen'
			},
            {
				id: 'jam_datang',
				name: 'Waktu Kedatangan'
			},
            {
				id: 'jam_pulang',
				name: 'Waktu Selesai'
			},
            {
				id: 'Status',
				name: 'Status'
			},
		],
		  pagination:true,
		  data: kegiatan
		}).render(document.getElementById("table-gridjs"));

        //Table user
        new gridjs.Grid({
		columns : [
            {
				id: 'name',
				name: 'Nama'
			},
			{
				id: 'gender',
				name: 'Gender'
			},
			{
				id: 'phone',
				name: 'Phone'
			},
			{
				id: 'position',
				name: 'Jabatan'
			},
			{
				id: 'company',
				name: 'Company'
			},
            {
				id: 'address',
				name: 'Address'
			}
		],
		  data: user
		}).render(document.getElementById("table-gridjs-datauser"));
	</script>
	<script>
		function dropdown() {
  			document.getElementById("myDropdown").classList.toggle("show");
		}
	</script>
@endsection