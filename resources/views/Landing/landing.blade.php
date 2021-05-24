<!DOCTYPE html>
<html>
<head>
	<title>da-resto | restoran pilihan-mu</title>
	<meta>	
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">
	<link rel="icon" href="{{ asset('image/title-icon.svg') }}">
</head>
<body>
	<div class="top" id="top">
		<header>
			<a href="#"><img src="{{ asset('image/da-resto_icon.png') }}"></a>
			<div class="head-right">
				<a href="{{url('masuk')}}">Masuk</a>
				<a href="{{url('daftar')}}">Daftar</a>
			</div>
		</header>
		<div class="copy-top cf">
			<h1>Orang Indonesia Itu<span>,</span></h1>
			<h2>Belum Kenyang Kalau Belum Makan Nasi<span>.</span></h2>
		</div>
		<div class="btn-top">
			<a href="{{url('masuk')}}">Pesan Sekarang!</a>
			<a href="#menu">Lihat Menu Dulu</a>
		</div>
	</div>

	<div class="intro">
		<div class="intro-img">
			<img src="{{ asset('image/intro.png') }}">
		</div>
		<div class="intro-copy">
			<h1>Selamat Datang di da-resto</h1>
			<hr>
			<p>Selamat datang di restoran kami, da-resto. Di dalam restoran ini, Anda dapat menggunakan table services melalui sistem da-resord. Disana Anda dapat memesan segala menu yang tersedia. Sebelum itu siapkan akun yang ingin digunakan. Kemudian, nikmati mudahnya pelayanan kami. Selamat berkuliner!</p>
		</div>
	</div>

	<div class="menu cf" id="menu">
		<div class="menu-top">
			<h1>Beberapa Sajian Khas Nusantara</h1>
			<hr>
		</div>
		<div class="menu-list">
			<fieldset>
				<div>
					<h1>Nasi Goreng</h1>
					<img src="{{ asset('image/nasgor.jpeg') }}">
				</div>
				<p>Nasi goreng khas Indonesia, pilihan spesial dari da-resto.</p>
			</fieldset>
			<fieldset>
				<div>
					<h1>Mi Goreng</h1>
					<img src="{{ asset('image/migor.jpeg') }}">
				</div>
				<p>Mi goreng khas Indonesia, pilihan spesial dari da-resto.</p>
			</fieldset>
			<fieldset>
				<div>
					<h1>Nasi Bakar</h1>
					<img src="{{ asset('image/naskar.jpeg') }}">
				</div>
				<p>Nasi bakar khas Indonesia, pilihan spesial dari da-resto.</p>
			</fieldset>
			<fieldset>
				<div>
					<h1>Mi Godhok</h1>
					<img src="{{ asset('image/mibus.jpeg') }}">
				</div>
				<p>Mi rebus khas Indonesia, pilihan spesial dari da-resto.</p>
			</fieldset>
			<fieldset>
				<div>
					<h1>Nasi Liwet</h1>
					<img src="{{ asset('image/liwet.jpeg') }}">
				</div>
				<p>Nasi rempah khas Indonesia, pilihan spesial dari da-resto.</p>
			</fieldset>
			<fieldset>
				<div>
					<h1>Sekoteng</h1>
					<img src="{{ asset('image/skote.jpeg') }}">
				</div>
				<p>Minuman segar khas Indonesia, pilihan spesial dari da-resto.</p>
			</fieldset>
			<fieldset>
				<div>
					<h1>Wedang Ronde</h1>
					<img src="{{ asset('image/ronde.jpeg') }}">
				</div>
				<p>Minuman jahe khas Indonesia, pilihan spesial dari da-resto.</p>
			</fieldset>
			<fieldset>
				<div>
					<h1>Bir Pletok</h1>
					<img src="{{ asset('image/bir.jpeg') }}">
				</div>
				<p>Minuman kocok khas Indonesia, pilihan spesial dari da-resto.</p>
			</fieldset>
			<fieldset>
				<div>
					<h1>Bajigur</h1>
					<img src="{{ asset('image/jigur.jpeg') }}">
				</div>
				<p>Minuman daerah khas Indonesia, pilihan spesial dari da-resto.</p>
			</fieldset>
			<fieldset>
				<div>
					<h1>Es Cendol</h1>
					<img src="{{ asset('image/cendol.jpeg') }}">
				</div>
				<p>Es segar khas Indonesia, pilihan spesial dari da-resto.</p>
			</fieldset>
			<fieldset>
				<div>
					<h1>Mi Aceh</h1>
					<img src="{{ asset('image/aceh.jpeg') }}">
				</div>
				<p>Mi daerah khas Indonesia, pilihan spesial dari da-resto.</p>
			</fieldset>
			<fieldset>
				<div>
					<h1>Nasi Uduk</h1>
					<img src="{{ asset('image/uduk.jpeg') }}">
				</div>
				<p>Sarapan khas Indonesia, pilihan spesial dari da-resto.</p>
			</fieldset>
			<fieldset>
				<div>
					<h1>Soto Mi</h1>
					<img src="{{ asset('image/somi.jpeg') }}">
				</div>
				<p>Soto khas Indonesia, pilihan spesial dari da-resto.</p>
			</fieldset>
			<fieldset>
				<div>
					<h1>Nasi Kuning</h1>
					<img src="{{ asset('image/naskun.jpeg') }}">
				</div>
				<p>Nasi kunyit khas Indonesia, pilihan spesial dari da-resto.</p>
			</fieldset>
			<fieldset>
				<div>
					<h1>Mi Tek-tek</h1>
					<img src="{{ asset('image/tektek.jpeg') }}">
				</div>
				<p>Mi daerah khas Indonesia, pilihan spesial dari da-resto.</p>
			</fieldset>
		</div>
	</div>

	<div class="wooden cf" id="wooden">
		<div class="wood-copy">
			<h1>Penawaran Spesial!</h1>
			<h2><i>09:59:59</i></h2>
		</div>
		<div class="wood-list">
			<fieldset>
				<h1>Separuh Harga!</h1>
				<hr>
				<span>50%</span>
				<hr>
				<p>Dapatkan potongan harga hingga 50%! Untuk pembelian meliputi semua menu dengan minimal 5 banyaknya per menu.</p>
			</fieldset>
			<fieldset>
				<h1>Bayar 3/4 Harga!</h1>
				<hr>
				<span>25%</span>
				<hr>
				<p>Dapatkan potongan harga hingga 25%! Untuk pembelian meliputi semua menu dengan minimal 3 banyaknya per menu.</p>
			</fieldset>
			<fieldset>
				<h1>Harga Lumayan!</h1>
				<hr>
				<span>15%</span>
				<hr>
				<p>Dapatkan potongan harga sebesar 15%! Untuk pembelian meliputi semua menu dengan minimal 1 banyaknya per menu.</p>
			</fieldset>
			<fieldset>
				<h1>Potongan Murah!</h1>
				<hr>
				<span>10%</span>
				<hr>
				<p>Dapatkan potongan harga sebesar 10%! Untuk pembelian meliputi satu menu makanan dan satu menu minuman.</p>
			</fieldset>
		</div>
	</div>

	<div class="review cf" id="review">
		<div class="rev-copy">
			<h1>Cerita Mereka Tentang Kami...</h1><hr>
		</div>
		<div class="rev a">
			<img src="{{ asset('image/ava.png') }}">
			<h2>Raden</h2>
			<p><span>"</span>Wah gilaseh wenak banget!<span>"</span></p>
		</div>
		<div class="rev b">
			<img src="{{ asset('image/ava.png') }}">
			<h2>Kanjeng</h2>
			<p><span>"</span>Mantep sak pol pol ee!<span>"</span></p>
		</div>
		<div class="rev c">
			<img src="{{ asset('image/ava.png') }}">
			<h2>Raja</h2>
			<p><span>"</span>Lengkap dan kaya akan budaya!<span>"</span></p>
		</div>
		<div class="rev d">
			<img src="{{ asset('image/ava.png') }}">
			<h2>Ratu</h2>
			<p><span>"</span>Pemanfaatan rempah yang berlimpah!<span>"</span></p>
		</div>
		<div class="rev e">
			<img src="{{ asset('image/ava.png') }}">
			<h2>Ajudan</h2>
			<p><span>"</span>Murah, terjangkau, dan <i>easy access</i>!<span>"</span></p>
		</div>
		<div class="rev f">
			<img src="{{ asset('image/ava.png') }}">
			<h2>Aparat</h2>
			<p><span>"</span>Sangat direkomendasikan!<span>"</span></p>
		</div>
		<div class="rev g">
			<img src="{{ asset('image/ava.png') }}">
			<h2>Abdi</h2>
			<p><span>"</span>Langganan makan siang yaa disini!<span>"</span></p>
		</div>
	</div>

	<div class="action cf">
		<h1>Sudah Lapar Belum Hari Ini?</h1>
		<a href="{{ url('masuk') }}">Pesan Sekarang!</a>
		<a href="#top">Kembali ke Atas</a>
	</div>
	
	<footer>
		<div class="logo">
			<img src="{{ asset('image/da-resto_icon.png') }}">
		</div><hr>
		<div class="foot">
			<h2>NAVIGASI</h2>
			<ul>
				<li><a href="#menu">Menu</a></li>
				<li><a href="{{ url('masuk') }}">Masuk</a></li>
				<li><a href="{{ url('daftar') }}">Daftar</a></li>
				<li><a href="#review">Ulasan</a></li>
			</ul>
		</div>
		<div class="foot">
			<h2>INFORMASI</h2>
			<ul>
				<li><a href="#">Operasional</a></li>
				<li><a href="#wooden">Promo</a></li>
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