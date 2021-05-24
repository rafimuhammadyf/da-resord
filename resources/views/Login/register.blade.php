<!DOCTYPE html> 
<html>
<head> 
	<title>Daftar | da-resord</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/register-style.css') }}">
	<link rel="icon" href="{{ asset('image/title-icon.svg') }}">
</head>
<body>
	<div class="back">
		<div class="box">
			<h1>Daftarkan Akun Anda</h1>
			<form action="{{ url('daftar_create') }}" method="post">
			{{ csrf_field() }}
				<input type="text" name="name" placeholder="Nama Lengkap" required autocomplete="off">
				<input type="number" name="no_telp" placeholder="Nomor Telepon (081234567890)" required autocomplete="off">
				<input type="email" name="email" placeholder="E-mail (example@domain)" required autocomplete="off">
				<input type="password" name="password" placeholder="Password (Minimal 5 Digit)" required>
				<button type="submit">DAFTAR</button>
			</form><br><br><br>
			<a href="{{ url('masuk') }}">Masuk disini</a>
			<span>atau</span>
			<a href="{{ url('landing') }}">kembali</a>
		</div>	
	</div>
</body>
</html>