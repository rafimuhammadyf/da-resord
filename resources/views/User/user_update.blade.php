<!DOCTYPE html>
<html>
<head>
	<title>ubah user da-resord</title>
	<link rel="icon" href="{{ asset('image/title-icon.svg') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/menu-style.css') }}">

	<style type="text/css">
		form{
			margin-top: 92px;
			padding: 0 72px;
		}
		input, select{
			width: 100%;
			margin: 5px 0 15px 0;
			font-size: 12px;
			background-color: #efcc90;
			outline: none;
			border: 1px solid rgb(15,6,4);
			border-radius: 2pt;
		}
		label{
			font-size: 20px;
			padding-left: 9px;
		}
		input{
			padding: 5px 10px;
		}
		select{
			padding: 5px 10px;
		}
		.navi {
			margin-top: 30px;
		}
		.navi a{
			float: left;
			color: black;	
		}
		.navi button{
			float: right;
			color: #efcc90;
			background-color: #013220;
			opacity: 0.8;
			padding: 12px 18px;
			transition: 0.5s;
		}
		.navi button:hover{
			opacity: 1;
		}
	</style>
</head>
<body>

<header>
      <a href="{{ url('dashboard') }}"><img src="{{ asset('image/da-resord_icon.png') }}"></a>
      <div class="head-right">
        <a href="{{ url('profil') }}">Profil</a>
        <a href="{{ url('menu') }}">Menu</a>
        <a href="{{ url('meja') }}">Meja</a>
        <a href="{{ url('user') }}" style="opacity: 1; text-decoration: underline;">User</a>
        <a href="{{ url('pesanan') }}">Pesanan</a>
        <a href="{{ url('keluar') }}">Keluar</a>
      </div>
</header>

<div class="container">
	<h1>ubah user</h1><br>

	@foreach($data as $dt)
		<form class="row g-3" action="{{ url('user_update', $dt->id) }}" method="post" enctype="multipart/form-data">
			{{ csrf_field() }}
			{{ method_field('PATCH') }}	
    				<label for="nama">Nama User</label>
    				<input type="text" id="nama" name="nama" placeholder="nama user" value="{{$dt->nama}}" required>

					<label for="num">Nomor Telepon</label>
					<input type="number" id="num" name="no_telp" placeholder="No. Telp" value="0{{$dt->no_telp}}" required>

					<label for="imel">Email</label>
					<input type="email" value="{{$dt->email}}" id="imel" name="email" placeholder="email">

					<label for="pw">Password</label>
					<input type="password" name="password" id="pw" placeholder="password">

					<label>Level</label>
					<select name="level">
						<option>user</option>
						<option>resto</option>
						<option>admin</option>
					</select>

					<div class="navi">
						<a href="{{url('user')}}">Kembali</a>
						<button type="submit">Simpan</button>
					</div>

			</form>
			@endforeach
		</div>

</body>
</html>