<!DOCTYPE html>
<html>
<head>
  <title>keranjang kamu di da-resto</title>
  <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/cart-style.css') }}">
  <link rel="icon" href="{{ asset('image/title-icon.svg') }}">
</head>
<body>

  <header>
      <a href="homepage"><img src="{{ asset('image/da-resord_icon.png') }}"></a>
      <div class="head-right">
        <a href="{{ url('profil') }}">Profil</a>
        <a href="{{ url('cart') }} " style="opacity: 1; text-decoration: underline;">Keranjang <strong>({{$data->count()}})</strong></a>
        <a href="{{ url('transaksi') }}">Transaksi</a>
        <a href="{{ url('keluar') }}">Keluar</a>
      </div>
  </header>

  <div class="container">

    <h1>keranjang kamu</h1><br>
    <form action="{{ url('pesanan_store') }}" method="post" enctype="multipart/form-data">
    {{ csrf_field() }}  

    <div class="cart-container">
      @foreach($data as $dt)
      <div class="produk">
        <img src="/upload/{{$dt->picture}}">
        <div class="detail-produk">
          <input type="hidden" name="nama_menu" value="{{ $dt->nama_menu}}">
          <h2>{{ $dt->nama_menu}}</h2>
          <!-- <form action="{{ url('cart_destroy', $dt->id_menus) }}" method="post">
          {{ csrf_field() }}
          {{ method_field('DELETE') }}
            <button type="sub[[mit" name="hapus" onclick="return confirm('Yakin ingin menghapus menu dari keranjang?')"><strong>x</strong></button>
          </form> -->
          <h3><span style="font-weight: normal;">Tipe:</span> {{ $dt->type}}</h3>

          <label>QTY:</label>
          <a href="#">-</a>
          <input type="number" value="{{$dt->qty}}" min="1" max="10" readonly>
          <a href="#"><b>+</b></a>

          

          <div class="price">
            <p>Rp. {{ $dt->price}}</p>
            <input type="hidden" name="price_total" value="{{ $dt->price * $dt->qty}}">
            <span>Rp. {{ $dt->price * $dt->qty}}</span>
          </div>
        </div><hr class="cf">
      </div>
      @endforeach
      
    </div>
    <input type="hidden" name="no_meja" value="{{ $dt->no_meja }}">
    <div class="cart-sum cf">
      <h1>rangkuman keranjang</h1>
      <p>Nomor Meja: <b>{{ $dt->no_meja }}</b></p>
      <p>Grand Total:</p>
      <p>({{ $data->count()}} Menu)</p>
      <input type="hidden" name="nama" value="{{ $dt->nama}}">
      <span name="price_total">Rp. {{ $dt->price * $dt->qty}}</span><br>
      <button type="submit">CHECKOUT</button>
    </div>
        
    </form>
  </div>

</body>
</html>