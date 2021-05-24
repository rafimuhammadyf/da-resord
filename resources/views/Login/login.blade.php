<!DOCTYPE html>
<html>  
<head>
	<title>Masuk | da-resord</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/login-style.css') }}">
	<link rel="icon" href="{{ asset('image/title-icon.svg') }}">
</head>
<body>
	<div class="back">
		<div class="box">
			<h1>Silahkan Masuk dengan Akun Anda</h1>
			<form action="{{ url('/masuk/cek') }}" method="post">
				{{ csrf_field() }}
				<input type="email" name="email" placeholder="E-mail Anda" required autocomplete="off">
				<input type="password" name="password" placeholder="Password" required>
				<button type="submit" style="color: rgba(239,204,144,0.5);">MASUK</button>
			</form><br><br><br>
			<a href="{{ url('daftar') }}">Daftar disini</a>
			<span>atau</span>
			<a href="{{ url('landing') }}">kembali</a>
		</div>	
	</div>
</body>
</html>