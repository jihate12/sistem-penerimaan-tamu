@extends('app')
@section('head_title')
    Data Diri
@endsection
@section('title')
    Data Diri	
@endsection
@section('guideline')
    <section class="step-wizard">
		<ul class="step-wizard-list">
			<li class="step-wizard-item ">
				<span class="progress-count">1</span>
				<span class="progress-label">Upload KTP</span>	
			</li>
			<li class="step-wizard-item current-item">
				<span class="progress-count">2</span>
				<span class="progress-label">Data Diri</span>	
			</li>
			<li class="step-wizard-item next-item">
				<span class="progress-count">3</span>
				<span class="progress-label">Scan Wajah</span>	
			</li>
			<li class="step-wizard-item next-item">
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
		<form class="form" method="POST" action="{{ route('registrasi.store') }}">
			@csrf
			<div class="input_field">
				<label>NIK</label>
				<input id="nik" type="text" name="nik" placeholder="Masukan NIK" required="" value="{{ old('nik') }}">
			</div>
			<div class="input_field">
				<label>Nama Lengkap</label>
				<input id="nama-lengkap" type="text" name="name" placeholder="Masukan Nama Lengkap" required="" value="{{ old('name') }}">
			</div>
			<div class="input_field">
				<label>Email</label>
				<input id="nama-lengkap" type="email" name="email" placeholder="Masukan Email" required="" value="{{ old('name') }}">
			</div>
			<div class="input_field">
				<label>Email</label>
				<input id="nama-lengkap" type="email" name="email" placeholder="Masukan Email" required="" value="{{ old('name') }}">
			</div>
			<div class="input_field">
				<label>Password</label>
				<input id="nama-lengkap" type="password" name="password" placeholder="Masukan password" required="">
			</div>
			<div class="input_field">
				<label>Jenis Kelamin</label>
				<div class="custome-select">
					<select id="gender" required="" name="gender" value="{{ old('gender') }}">
						<option value="#" disabled selected hidden>-Pilih-</option>
						<option value="L">Laki-Laki</option>
						<option value="P">Perempuan</option>
					</select>
				</div>
			</div>
			<div class="input_field">
				<label>Nomor telepon</label>
				<input type="number" name="phone" placeholder="Masukan Nomor Telepon" required="" min="12" value="{{ old('phone') }}">
			</div>
			<div class="input_field">
				<label>Jabatan</label>
				<input type="text" name="position" placeholder="Masukan Jabatan" required="" value="{{ old('position') }}">
			</div>
			<div class="input_field">
				<label>Nama Perusahaan</label>
				<input type="text" name="company" placeholder="Masukan Nama Perusahaan" required="" value="{{ old('company') }}">
			</div>
			<div class="input_field">
				<label>Alamat Perusahaan</label>
				<textarea style="resize:none" placeholder="Masukan Alamat Perusahaan" required="" name="address" value="{{ old('address') }}"></textarea>
			</div>
			<div class="input_field">
				<input type="submit" value="Selanjutnya" class="btn-primary">
			</div>		
		</form>
	</div>
@endsection
@section('js')
    <script src="{{ asset('src/js/datadiri.js') }}"></script>
    {{-- <script src="uploadfile.js"></script> --}}
@endsection
