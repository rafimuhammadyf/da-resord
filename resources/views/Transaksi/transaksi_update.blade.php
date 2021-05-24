<!DOCTYPE html>
<html>
<head>
	<title>ubah pesanan da-resto</title>
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
        <a href="{{ url('user') }}">User</a>
        <a href="{{ url('pesanan') }}" style="opacity: 1; text-decoration: underline;">Pesanan</a>
        <a href="{{ url('keluar') }}">Keluar</a>
      </div>
</header>

<div class="container">
	<h1>ubah pesanan</h1><br>

		@foreach($data as $dt)
		<form class="row g-3" action="{{ url('pesanan_update', $dt->id) }}" method="post" enctype="multipart/form-data">
			{{ csrf_field() }}	
            {{ method_field('PATCH') }}
    				<label for="nama">Nama Menu</label>
    				<input type="text" id="nama" name="nama_menu" placeholder="nama menu" autocomplete="off" value="{{$dt->nama_menu}}" required>

					<label for="num">Nomor Meja</label>
					<input type="text" id="num" name="no_meja" placeholder="nomor meja" autocomplete="off" value="{{$dt->no_meja}}" required>

					<label for="nem">Nama Pemesan</label>
					<input type="text" id="nem" name="nama" placeholder="nama pemesan" autocomplete="off" value="{{$dt->nama}}" required>

					<label for="prc">Total Harga</label>
					<input type="number" id="prc" name="price_total" placeholder="total harga pesanan" autocomplete="off" value="{{$dt->price_total}}" required>

					<label>Status Pesanan</label>
					<select name="status">
						<option>dipesan</option>
						<option>dibayar</option>
						<option>selesai</option>
					</select>


					<div class="navi">
						<a href="{{url('pesanan')}}">Kembali</a>
						<button type="submit">Simpan</button>
					</div>

			</form>
			@endforeach
		</div>

</body>
</html>