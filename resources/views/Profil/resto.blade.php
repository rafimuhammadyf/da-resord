<!DOCTYPE html>
<html>
<head>
  <title>profil staf resto da-resord</title>
  <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/menu-style.css') }}">
  <link rel="icon" href="{{ asset('image/title-icon.svg') }}">
</head>
<body>

    <header>
      <a href="{{ url('manage') }}"><img src="{{ asset('image/da-resord_icon.png') }}"></a>
      <div class="head-right">
        <a href="{{ url('resto') }}" style="opacity: 1; text-decoration: underline;">Profil</a>
        <a href="{{ url('menu') }}">Menu</a>
        <a href="{{ url('meja') }}">Meja</a>
        <a href="{{ url('user') }}">User</a>
        <a href="{{ url('pesanan') }}">Pesanan</a>
        <a href="{{ url('keluar') }}">Keluar</a>
      </div>
    </header>

    <div class="container">
      <h1>profil staf</h1><br>
    <div class="profil">
      <img src="{{ asset('image/ava.png') }}"><hr>
      @foreach($data as $dt)
      <h2>Nama: <b>{{$dt->nama}}</b></h2>
      <h2>Nomor Telepon: <b>0{{$dt->no_telp}}</b></h2>
      <h2>E-mail: <b>{{$dt->email}}</b></h2>
      <h2>Sebagai: <b>staf {{$dt->level}} da-resord</b></h2>
      @endforeach
    </div>
    </div>
  </body>
</html>