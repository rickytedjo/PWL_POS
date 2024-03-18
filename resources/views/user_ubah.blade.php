<!DOCTYPE html>
<html>
    <head>
        <title>Data User </title>
    </head>
    <body>
        <h1>Form Tambah Data User</h1>
        <a href="/user">Kembali</a>
        <form method="POST" action="/user/ubah_simpan/{{$data->user_id}}">

            {{ csrf_field() }}
            {{ method_field('PUT')}}

            <label>Username</label>
            <input type="text" name="username" placeholder="Masukan Username" value="{{$data->username}}">
            <br>
            <label>Nama</label>
            <input type="text" name="nama" placeholder="Masukan Nama" value="{{$data->username}}">
            <br>
            <label>Password</label>
            <input type="password" name="nama" placeholder="Masukan Nama" value="{{$data->password}}">
            <br>
            <label>Level ID</label>
            <input type="number" name="level_id" placeholder="Masukan ID Level" value="{{$data->level_id}}">
            <br><br>
            <input type="submit" class = "btn btn-success" value="Simpan">
            
        </form>
    </body>
</html>