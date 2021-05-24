<!DOCTYPE html>
<html>
<head> 
  <title>da-resord by da-resto</title>
  <meta>
  <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/home-style.css') }}">
  <link rel="icon" href="{{ asset('image/title-icon.svg') }}">
</head>
<body> 
  <div class="top">
    <header>
      <a href="#"><img src="{{ asset('image/da-resord_icon.png') }}"></a>
      <div class="head-right">
        <a href="{{ url('profil') }}">Profil</a>
        <a href="{{ url('cart') }} ">Keranjang <strong>({{$cart->count()}})</strong></a>
        <a href="{{ url('transaksi') }}">Transaksi</a>
        <a href="{{ url('keluar') }}">Keluar</a>
      </div>
    </header>


    <div class="copy-top cf">
      <h1>Halo Selamat Datang di da-resto<span>,</span></h1>
      <h2>Selamat Menggunakan Aplikasi da-resord<span>.</span></h2>
    </div>
    <div class="btn-top">
      <a href="#menu">Lihat Menu Kami</a>
      <a href="{{ url('transaksi') }}">Cek Transaksi Anda</a>
    </div>
  </div>

  <form action="{{ url('cart_store') }}" method="post">
  {{ csrf_field() }}

  @foreach($nama as $nm)
    <input type="hidden" name="id_users" value="{{ $nm->id }}">
  @endforeach

  <div class="menu cf" id="menu">
    <div class="menu-top">
      <h1>Beberapa Sajian Khas Nusantara</h1>
      <hr>
    </div>
    <div class="menu-list">
      @foreach($data as $dt)
      <fieldset>
        <input type="hidden" name="id_menus" value="{{ $dt->id }}">
        <div class="up">
          <h1>{{ $dt->nama_menu }}</h1>
          <img src="/upload/{{ $dt->picture }}">
        </div>
        <div class="info">
          <p>{{ $dt->description }}</p><hr>
          <span>Rp. {{ $dt->price }}</span><br>
          <button type="submit">Tambah ke Keranjang</button>
        </div>
      </fieldset>
      @endforeach
    </div>
  </div>
  
  <div class="meja">
    <div class="meja-top">
      <h1>Pilihlah Meja yang Tersedia!</h1>
      <hr>
    </div>
      @foreach($tabel as $tab)
      <fieldset>
        <input type="hidden" name="id_tables" value="{{ $tab->id }}">
        <legend name="no_meja">{{ $tab->no_meja }}</legend>
        <p>{{ $tab->status }}</p>
      </fieldset>
      @endforeach
  </div>

  <div class="action cf">
    <h1>Sudah Lapar Belum Hari Ini?</h1>
    <a href="{{ url('cart') }}">Pesan Sekarang!</a>
    <a href="#top">Kembali ke Atas</a>
  </div>

  </form>

  <footer>
    <div class="logo">
      <img src="{{ asset('image/da-resord_icon.png') }}">
    </div><hr>
    <div class="foot">
      <h2>NAVIGASI</h2>
      <ul>
        <li><a href="#menu">Menu</a></li>
        <li><a href="{{ url('cart') }}">Keranjang</a></li>
        <li><a href="{{ url('transaksi') }}">Transaksi</a></li>
        <li><a href="{{ url('keluar') }}">Keluar</a></li>
      </ul>
    </div>
    <div class="foot">
      <h2>INFORMASI</h2>
      <ul>
        <li><a href="#">Operasional</a></li>
        <li><a href="{{ url('profil') }}">Profil</a></li>
        <li><a href="#">Pegawai</a></li>
        <li><a href="https://linkedin.com" target="_blank">Karier</a></li>
      </ul>
    </div>
    <div class="foot">
      <h2>HAK CIPTA</h2>
      <p>2021 &copy; da-company</p>
      <p>All rights reserved.</p>
    </div>
    <form>
      <label for="imel">Berlangganan!</label>
      <input type="email" id="imel" placeholder="youremail@domain">
      <button>></button>
    </form>
    <div class="con">
      <a href="https://linkedin.com" target="_blank">i</a>
      <a href="https://youtube.com" target="_blank">y</a>
      <a href="https://instagram.com" target="_blank">c</a>
      <a href="https://wa.me/6289646977644" target="_blank">n</a>
      <a href="https://spotify.com" target="_blank">r</a>
    </div>
  </footer>
</body>
</html>