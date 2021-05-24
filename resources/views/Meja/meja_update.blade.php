<!DOCTYPE html>
<html>
<head>
	<title>ubah meja da-resto</title>
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
			margin-top: 240px;
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
        <a href="{{ url('meja') }}" style="opacity: 1; text-decoration: underline;">Meja</a>
        <a href="{{ url('user') }}">User</a>
        <a href="{{ url('pesanan') }}">Pesanan</a>
        <a href="{{ url('keluar') }}">Keluar</a>
      </div>
</header>

<div class="container">
	<h1>ubah meja</h1><br>

		@foreach($data as $dt)
		<form class="row g-3" action="{{ url('meja_update', $dt->id) }}" method="post" enctype="multipart/form-data">
			{{ csrf_field() }}	
            {{ method_field('PATCH') }}
    				<label for="nama">Nomor Meja</label>
    				<input type="text" id="nama" name="no_meja" placeholder="nomor meja" autocomplete="off" value="{{$dt->no_meja}}" required>

					<label>Status</label>
					<select name="status">
						<option>kosong</option>
						<option>terisi</option>
					</select>
					<div class="navi">
						<a href="{{url('meja')}}">Kembali</a>
						<button type="submit">Simpan</button>
					</div>

			</form>
			@endforeach
		</div>

</body>
</html>