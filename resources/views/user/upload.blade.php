@extends('app');
@section('head_title')
    Upload KTP
@endsection
@section('title')
    Upload KTP	
@endsection
@section('guideline')
    <section class="step-wizard">
		<ul class="step-wizard-list">
			<li class="step-wizard-item current-item">
				<span class="progress-count">1</span>
				<span class="progress-label">Upload KTP</span>	
			</li>
			<li class="step-wizard-item next-item ">
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
	@if ($errors->any())
		@foreach ($errors->all() as $err)            
			<script>
				alert('{{ $err }}')
			</script>
			@break
		@endforeach
	@endif
    <div class="content">				
			<!-- <h2>Upload KTP</h2> -->
			<!-- yield content -->
		<div class="photo-form">
			<form id="formreset" method="POST" enctype="multipart/form-data" action="/upload">
                @csrf
                <div id="instruction">
                    <i class="fa fa-cloud-upload-alt"></i>
				    <p>Unggah File Untuk Upload</p>
				    <span>or</span>
                </div>
                <div id="anchor-image"></div>			
                <a onclick="showFileExplorer()" id="upload-btn" class="btn-Secondary" style="margin-top: 40px;">Unggah Berkas</a>                                
				<input type="file" hidden="" id="inputgambar" name="imgktp">
				{{-- <input type="file"  id="inputgambar" name="imgktp"> --}}
                <button hidden="" id="upload-ktp" class="btn-primary" type="submit">Selanjutnya</button>
			</form>		
		</div>
		<div class="tombolbwh" id="tombolbawah">
			<a onclick="reset1()"><button class="btn-secondary">Upload Ulang</button></a>             
			<button onclick="upload()" class="btn-primary" type="submit">Selanjutnya</button>
		</div>	
	</div>
@endsection
@section('js')
    <script src="{{ asset('src/js/main.js') }}"></script>
    <script src="uploadfile.js"></script>
@endsection