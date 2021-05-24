<!DOCTYPE html>
<html>
<head>
  <title>pesanan da-resto</title>
  <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/menu-style.css') }}">
  <link rel="icon" href="{{ asset('image/title-icon.svg') }}">
</head>
<body>

    <header>
      <a href="{{ url('dashboard') }}"><img src="{{ asset('image/da-resord_icon.png') }}"></a>
      <div class="head-right">
        <a href="{{ url('admin') }}">Profil</a>
        <a href="{{ url('menu') }}">Menu</a>
        <a href="{{ url('meja') }}">Meja</a>
        <a href="{{ url('user') }}">User</a>
        <a href="{{ url('pesanan') }}" style="opacity: 1; text-decoration: underline;">Pesanan</a>
        <a href="{{ url('keluar') }}">Keluar</a>
      </div>
    </header>

    <div class="container">
      <h1>pesanan</h1>
        <table id="dataTable" width="90%" cellspacing="0">
            <thead>
              <tr>
                <th>ID Pesanan</th>
                <th>Nama Menu</th>
                <th>Nomor Meja</th>
                <th>Nama</th>
                <th>Total Harga</th>
                <th>Status Pesanan</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
              @foreach($data as $dt)
              <tr>
                <td>{{ $dt->id }}</td>
                <td>{{ $dt->nama_menu }}</td>
                <td>{{ $dt->no_meja}}</td>
                <td>{{ $dt->nama }}</td>
                <td>{{ $dt->price_total }}</td>
                <td><p>{{ $dt->status }}</p></td>
                <td>
                  <form action="{{ url('pesanan_destroy', $dt->id) }}" method="post">
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}
                    <a href="{{ url('pesanan_edit', $dt->id) }}">Edit</a>
                    <button type="submit" onclick="return confirm('Yakin ingin menghapus data?')">Delete</button>
                  </form>
                </td>
              </tr>
              @endforeach
            </tbody>
        </table>
        <p style="margin: 0 0 36px 72px">Menampilkan 1 hingga {{$data->count()}} dari {{$data->count()}} data pesanan.</p>
    </div>

  </body>
</html>