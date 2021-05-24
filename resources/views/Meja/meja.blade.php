<!DOCTYPE html>
<html>
<head>
  <title>meja da-resto</title>
  <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/menu-style.css') }}">
  <link rel="icon" href="{{ asset('image/title-icon.svg') }}">
</head>
<body>

    <header>
      <a href="{{ url('dashboard') }}"><img src="{{ asset('image/da-resord_icon.png') }}"></a>
      <div class="head-right">
        <a href="{{ url('admin') }}">Profil</a>
        <a href="{{ url('menu') }}">Menu</a>
        <a href="{{ url('meja') }}" style="opacity: 1; text-decoration: underline;">Meja</a>
        <a href="{{ url('user') }}">User</a>
        <a href="{{ url('pesanan') }}">Pesanan</a>
        <a href="{{ url('keluar') }}">Keluar</a>
      </div>
    </header>

    <div class="container">
      <h1>meja</h1>
        <a href="{{ url('meja_create') }}" class="add">+ Tambah meja</a>
        <table id="dataTable" width="90%" cellspacing="0">
            <thead>
              <tr>
                <th>ID Meja</th>
                <th>Nomor Meja</th>
                <th>Status</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
              @foreach($data as $dt)
              <tr>
                <td>{{ $dt->id }}</td>
                <td>{{ $dt->no_meja }}</td>
                <td><p>{{ $dt->status}}</p></td>
                <td>
                  <form action="{{ url('meja_destroy', $dt->id) }}" method="post">
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}
                    <a href="{{ url('meja_edit', $dt->id) }}">Edit</a>
                    <button type="submit" onclick="return confirm('Yakin ingin menghapus data?')">Delete</button>
                  </form>
                </td>
              </tr>
              @endforeach
            </tbody>
        </table>
        <p style="margin-left: 72px">Menampilkan 1 hingga {{$data->count()}} dari {{$data->count()}} data meja.</p><br>
    </div>

  </body>
</html>