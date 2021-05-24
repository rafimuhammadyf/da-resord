<!DOCTYPE html>
<html>
<head>
  <title>menu da-resto</title>
  <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/menu-style.css') }}">
  <link rel="icon" href="{{ asset('image/title-icon.svg') }}">
</head>
<body>

    <header>
      <a href="{{ url('dashboard') }}"><img src="{{ asset('image/da-resord_icon.png') }}"></a>
      <div class="head-right">
        <a href="{{ url('admin') }}">Profil</a>
        <a href="{{ url('menu') }}" style="opacity: 1; text-decoration: underline;">Menu</a>
        <a href="{{ url('meja') }}">Meja</a>
        <a href="{{ url('user') }}">User</a>
        <a href="{{ url('pesanan') }}">Pesanan</a>
        <a href="{{ url('keluar') }}">Keluar</a>
      </div>
    </header>

    <div class="container">
      <h1>menu</h1>
        <a href="{{ url('menu_create') }}" class="add">+ Tambah menu</a>
        <table id="dataTable" width="90%" cellspacing="0">
            <thead>
              <tr>
                <th>ID Menu</th>
                <th>Nama Menu</th>
                <th>Picture</th>
                <th>Tipe</th>
                <th>Deskripsi</th>
                <th>Price</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
              @foreach($data as $dt)
              <tr>
                <td>{{ $dt->id }}</td>
                <td>{{ $dt->nama_menu}}</td>
                <td><img src="/upload/{{$dt->picture}}" alt="picture" width="100px"></td>
                <td>{{ $dt->type}}</td>
                <td>{{ $dt->description}}</td>
                <td>{{ $dt->price}}</td>
                <td>
                  <form action="{{ url('menu_destroy', $dt->id) }}" method="post">
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}
                    <a href="{{ url('menu_edit', $dt->id) }}">Edit</a>
                    <button type="submit" onclick="return confirm('Yakin ingin menghapus data?')">Delete</button>
                  </form>
                </td>
              </tr>
              @endforeach
            </tbody>
        </table>
        <p style="margin: 0 0 36px 72px">Menampilkan 1 hingga {{$data->count()}} dari {{$data->count()}} data menu.</p>
    </div>

  </body>
</html>