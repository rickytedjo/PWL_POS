<!DOCTYPE html>
<html>
    <head>
        <title>Data Kategori Baranag</title>
    </head>
    <body>
        <h1>Data Kategori Barang</h1>
        <table cellpadding="2" cellspacing="0" border="1">
            <tr>
                <th>ID</th>
                <th>Kode Kategori</th>
                <th>Nama Kategori</th>
            </tr>
            @foreach ($data as $d)
            <tr>
                <td>{{ $d->kategori_id }}</td>
                <td>{{ $d->kategori_kode }}</td>
                <td>{{ $d->kategori_nama }}</td>
            </tr>
            @endforeach
        </table>
    </body>
</html>