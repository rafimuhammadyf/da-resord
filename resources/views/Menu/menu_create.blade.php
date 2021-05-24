<!DOCTYPE html>
<html>
<head>
	<title>tambah menu da-resto</title>
	<link rel="icon" href="{{ asset('image/title-icon.svg') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/menu-style.css') }}">
	<style type="text/css">
		form{
			margin-top: 92px;
			padding: 0 72px;
		}
		input, select, textarea{
			width: 100%;
			margin: 5px 0 15px 0;
			font-size: 12px;
			background-color: #efcc90;
			outline: none;
			border: 1px solid rgb(15,6,4);
			border-radius: 2pt;
		}
		textarea{
			height: 50px;
			padding: 5px 10px;
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
			margin-top: 15px;
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
        <a href="{{ url('menu') }}" style="opacity: 1; text-decoration: underline;">Menu</a>
        <a href="{{ url('meja') }}">Meja</a>
        <a href="{{ url('user') }}">User</a>
        <a href="{{ url('pesanan') }}">Pesanan</a>
        <a href="{{ url('keluar') }}">Keluar</a>
      </div>
</header>

<div class="container">
	<h1>tambah menu</h1><br>

		<form class="row g-3" action="{{ url('menu_store') }}" method="post" enctype="multipart/form-data">
			{{ csrf_field() }}	
    				<label for="nama">Nama Menu:</label>
    				<input type="text" id="nama" name="nama_menu" placeholder="nama menu" autocomplete="off" required>

					<label for="image">Picture:</label>
					<input type="file" name="picture" required

					<label>Tipe:</label>
					<select name="type">
						<option>makanan</option>
						<option>minuman</option>
					</select>

					<label for="desc">Deskripsi:</label>
    				<textarea id="desc" name="description" placeholder="Description" required></textarea>

					<label for="harga">Harga:</label>
					<input type="number" autocomplete="off" id="harga" name="price" placeholder="price" required>

					<div class="navi">
						<a href="{{url('menu')}}">Kembali</a>
						<button type="submit">Tambah</button>
					</div>

			</form>
		</div>

</body>
</html>