<!DOCTYPE html>
<html>
<head>
  <title>profil kamu di da-resord</title>
  <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/menu-style.css') }}">
  <link rel="icon" href="{{ asset('image/title-icon.svg') }}">
</head>
<body>

    <header>
      <a href="{{ url('homepage') }}"><img src="{{ asset('image/da-resord_icon.png') }}"></a>
      <div class="head-right">
        <a href="{{ url('profil') }}" style="opacity: 1; text-decoration: underline;">Profil</a>
        <a href="{{ url('cart') }} ">Keranjang <strong>({{$cart->count()}})</strong></a>
        <a href="{{ url('transaksi') }}">Transaksi</a>
        <a href="{{ url('keluar') }}">Keluar</a>
      </div>
    </header>

    <div class="container">
      <h1 style="text-decoration: underline;">profil kamu</h1><br>
    <div class="profil">
      <img src="{{ asset('image/ava.png') }}"><hr>
      @foreach($data as $dt)
      <h2>Nama: <b>{{$dt->nama}}</b></h2>
      <h2>Nomor Telepon: <b>0{{$dt->no_telp}}</b></h2>
      <h2>E-mail: <b>{{$dt->email}}</b></h2>
      <h2>Sebagai: <b>{{$dt->level}} da-resord</b></h2>
      @endforeach
    </div>
    </div>
  </body>
</html>