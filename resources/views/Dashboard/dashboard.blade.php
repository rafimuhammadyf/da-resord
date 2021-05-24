<!DOCTYPE html>
<html>
<head> 
  <title>dashboard da-resord</title>
  <meta>
  <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/home-style.css') }}">
  <link rel="icon" href="{{ asset('image/title-icon.svg') }}">
</head>
<body> 
  <div class="top">
    <header>
      <a href="#"><img src="{{ asset('image/da-resord_icon.png') }}"></a>
      <div class="head-right">
        <a href="{{ url('admin') }}">Profil</a>
        <a href="{{ url('menu') }}">Menu</a>
        <a href="{{ url('meja') }}">Meja</a>
        <a href="{{ url('user') }}">User</a>
        <a href="{{ url('pesanan') }}">Pesanan</a>
        <a href="{{ url('keluar') }}">Keluar</a>
      </div>
    </header>

    <div class="copy-top cf">
      <h1>Halo Selamat Datang<span>,</span></h1>
      <h2>Administrator<span>.</span></h2>
    </div>

    <div class="btn-top">
      <a href="#rekap">Lihat Rekap Restoran</a>
      <a href="{{ url('user') }}">Kelola Data Pengguna</a>
    </div>
  </div>

    <div class="box" id="rekap">
      <div class="box-top">
        <h1>Rekap Restoran da-resto</h1>
        <hr>
      </div>
      <div class="repot a">
        <h2>Menu da-resto</h2>
        <img src="{{ asset('image/menu.png') }}">
        <p>Terdapat <b>{{$menu->count()}} menu</b> di da-resto.</p>
      </div>
      <div class="repot b">
        <h2>Meja da-resto</h2>
        <img src="{{ asset('image/table.png') }}">
        <p>Terdapat <b>{{$meja->count()}} meja</b> di da-resto.</p>
      </div>
      <div class="repot c">
        <h2>User da-resord</h2>
        <img src="{{ asset('image/user.png') }}">
        <p>Terdapat <b>{{$user->count()}} pengguna</b> aplikasi da-resord.</p>
      </div>
      <div class="repot d">
        <h2>Transaksi da-resord</h2>
        <img src="{{ asset('image/trans.png') }}">
        <p>Terdapat <b>{{$trans->count()}} pesanan</b> aplikasi da-resord.</p>
      </div>
    </div>

  <footer>
    <div class="logo">
      <img src="{{ asset('image/da-resord_icon.png') }}">
    </div><hr>
    <div class="foot">
      <h2>NAVIGASI</h2>
      <ul>
        <li><a href="{{ url('menu') }}">Menu</a></li>
        <li><a href="{{ url('meja') }}">Meja</a></li>
        <li><a href="{{ url('pesanan') }}">Pesanan</a></li>
        <li><a href="{{ url('keluar') }}">Keluar</a></li>
      </ul>
    </div>
    <div class="foot">
      <h2>INFORMASI</h2>
      <ul>
        <li><a href="#">Operasional</a></li>
        <li><a href="{{ url('admin') }}">Profil</a></li>
        <li><a href="{{ url('user') }}">User</a></li>
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