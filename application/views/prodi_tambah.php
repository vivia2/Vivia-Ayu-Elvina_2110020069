<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Prodi oleh Vivia Dan 2110020069</title>
</head>

<body>
    <h1> Form tambah prodi</h1>
    <form action="<?= site_url('prodi/simpan') ?>" method="post">
        <label for="id_prodi">ID Prodi</label>
        <input type="text" name="id_prodi"><br><br>
        <label for="kode_prodi">Kode Prodi</label>
        <input type="text" name="kode_prodi"><br><br>
        <label for="nama_prodi">Nama Prodi</label>
        <input type="text" name="nama_prodi"><br><br>
        <input type="submit" value="Simpan">
    </form>
</body>

</html>