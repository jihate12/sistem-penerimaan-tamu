@extends('app')
@section('guideline')
    <section class="step-wizard">
		<ul class="step-wizard-list">
			<li class="step-wizard-item ">
				<span class="progress-count">1</span>
				<span class="progress-label">Upload KTP</span>	
			</li>
			<li class="step-wizard-item ">
				<span class="progress-count">2</span>
				<span class="progress-label">Data Diri</span>	
			</li>
			<li class="step-wizard-item ">
				<span class="progress-count">3</span>
				<span class="progress-label">Scan Wajah</span>	
			</li>
			<li class="step-wizard-item current-item">
				<span class="progress-count">4</span>
				<span class="progress-label">Registrasi Kegiatan</span>	
			</li>
			<li class="step-wizard-item next-item">
				<span class="progress-count">5</span>
				<span class="progress-label">Tiket</span>	
			</li>										
		</ul>
	</section>
@endsection
@section('head_title')
    Registrasi Kegiatan
@endsection
@section('content')
    <div class="content">
		@if ($errors->any())
			@foreach ($errors->all() as $err)            
				<script>
					alert('{{ $err }}')
				</script>
				@break
			@endforeach
		@endif
    	<form class="form-kegiatan" method="POST" action="{{ route('kegiatan.store') }}">
			@csrf
			<div class="kolom-input-kegiatan" >
				<input type="text" class="input-kegiatan" name="nik" id="ktp" hidden="">
			</div>
			<div class="kolom-input-kegiatan" >
				<input type="text" class="input-kegiatan" name="status" id="status" hidden="" value="On-Progress">
			</div>
			<div class="kolom-input-kegiatan">
				<label>Tanggal</label>
				<input type="date" class="input-kegiatan" name="tanggal" required="">
			</div>
			<table>
				<tr>
					<td>
						<div class="kolom-input-waktu">
							<label>Jam datang</label>
							<input type="time" class="input" placeholder="" name="jam_datang" required="">
						</div>
						
					</td>
					<td>
						<div class="kolom-input-waktu">
							<label>Jam pulang</label>
							<input type="time" class="input" placeholder="" name="jam_pulang" required="">
						</div>
						
					</td>
				</tr>
			</table>
			<div class="kolom-input-kegiatan">
				<label>Departemen</label>
				<div class="costume-selection">
					<select name="departemen" required="">
						<option value="#" disabled selected hidden>~Pilih Departemen~</option>
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
					<select name="lokasi" required="">
						<option value="#" disabled selected hidden>~Pilih Tujuan Kunjungan~</option>
						<option value="Main Office">Main Office</option>
						<option value="Site">Site (Workshop, Pelabuhan, Gudang)</option>
					</select>
				</div>
			</div>
			<div class="kolom-input-kegiatan">
				<label>Keterangan kegiatan</label>
				<input type="text" class="input-kegiatan" placeholder="Masukan keterangan" name="keterangan" required="">
			</div>
			
			<div class="kolom-input-kegiatan">
				<label>Bertemu dengan - </label>
				<select name="nip"  required="">
					<option value="#" disabled selected hidden>~Ingin bertemu dengan siapa?~</option>
					@foreach ($karyawan as $data)
						<option value="{{ $data->nip }}">{{ $data->name }}</option>
					@endforeach
				</select>
			</div>
			<div class="kolom-input-kegiatan">
				<label>Plat kendaraan</label>
				<input type="text" class="input-kegiatan" placeholder="Masukan plat kendaraan" name="plat" required="">
			</div>

			<div class="kolom-input-kegiatan">
				{{-- <input type="" class="btn-kegiatan1" value="kembali"> --}}
				<input type="submit" class="btn-kegiatan" value="Selanjutnya">
			</div>

		</form>
	</div>
	<script src="{{ asset('src/js/datakegiatan.js') }}"></script>
@endsection