<!DOCTYPE html>
<html>
<head>
  <title>transaksi kamu di da-resto</title>
  <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/menu-style.css') }}">
  <link rel="icon" href="{{ asset('image/title-icon.svg') }}">
</head>
<body>
 
    <header>
      <a href="{{ url('homepage') }}"><img src="{{ asset('image/da-resord_icon.png') }}"></a>
      <div class="head-right">
        <a href="{{ url('profil') }}">Profil</a>
        <a href="{{ url('cart') }} ">Keranjang <strong>({{$cart->count()}})</strong></a>
        <a href="{{ url('transaksi') }}" style="opacity: 1; text-decoration: underline;">Transaksi</a>
        <a href="{{ url('keluar') }}">Keluar</a>
      </div>
    </header>

    <div class="container">
      <h1 style="text-decoration: underline;">transaksi kamu</h1>
      <br>
  <div class="orders">
    <h2>Pesanan yang Sudah dipesan <b>({{$booked->count()}})</b></h2> 
    @foreach($booked as $bkd)
    <div class="order">
      <p>Id Pesanan: <span>{{$bkd->id}}</span></p>
      <p>Menu dipesan: <span>{{$bkd->nama_menu}}</span></p>
      <p>Nomor Meja: <span>{{$bkd->no_meja}}</span></p>
      <p>Nama Pemesan: <span>{{$bkd->nama}}</span></p>
      <p>Total Harga: <span>Rp. {{$bkd->price_total}}</span></p>
      <p>Status Pesanan: <span>telah {{$bkd->status}}</span></p>
      <form action="{{ url('transaksi_update', $bkd->id) }}" method="post">
        {{ csrf_field() }}
        {{ method_field('PATCH') }}
        <button type="submit">Bayar Pesanan Ini!</button>
      </form>
      <hr>
    </div>
    @endforeach
    <br>

    <h2>Pesanan yang Sudah dibayar <b>({{$paid->count()}})</b></h2>
    @foreach($paid as $pd)
    <div class="order">
      <p>Id Pesanan: <span>{{$pd->id}}</span></p>
      <p>Menu dipesan: <span>{{$pd->nama_menu}}</span></p>
      <p>Nomor Meja: <span>{{$pd->no_meja}}</span></p>
      <p>Nama Pemesan: <span>{{$pd->nama}}</span></p>
      <p>Total Harga: <span>Rp. {{$pd->price_total}}</span></p>
      <p>Status Pesanan: <span>telah {{$pd->status}}</span></p>
      <hr>
    </div>
    @endforeach
    <br>

    <h2>Pesanan yang Sudah Selesai <b>({{$finish->count()}})</b></h2>
    @foreach($finish as $fin)
    <div class="order">
      <p>Id Pesanan: <span>{{$fin->id}}</span></p>
      <p>Menu dipesan: <span>{{$fin->nama_menu}}</span></p>
      <p>Nomor Meja: <span>{{$fin->no_meja}}</span></p>
      <p>Nama Pemesan: <span>{{$fin->nama}}</span></p>
      <p>Total Harga: <span>Rp. {{$fin->price_total}}</span></p>
      <p>Status Pesanan: <span>telah {{$fin->status}}</span></p>
      <hr>
    </div>
    @endforeach
    <br><br><br>

  </div>

    </div>
  </body>
</html>