@extends('app');
@section('head_title')
    Pendaftaran Berhasil
@endsection
@section('title')
    
@endsection
@section('guideline');	
@endsection
@section('content');
    <div class="content">	
        <h1 style="text-align: center; margin-bottom: 20px;">Pendaftaran Berhasil!</h1>			        
        <p style="text-align: center; margin-bottom: 20px;">Selamat pendaftaran kunjungan anda telah kami terima, harap cek email untuk melihat detail kunjungan</p>
        <div style="width: 100%; margin: 0 auto; text-align: center;">
            <a style="text-align: center; text-decoration: none;" class="btn-primary" href="/tamu/dashboard/{{$user->nik}}">Selanjutnya</a>			            
        </div>
	</div>
@endsection
@section('js')
    <script src="{{ asset('src/js/main.js') }}"></script>
    <script src="uploadfile.js"></script>
@endsection