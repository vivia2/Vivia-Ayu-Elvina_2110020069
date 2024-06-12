<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Mahasiswa oleh Vivia Dan 2110020069</title>
</head>

<body>
    <h1> Form Edit Prodi</h1>
    <form action="<?php echo site_url('prodi/perbaharui/' . $prodi->id_prodi) ?>" method="post">
        <label for="id_prodi">ID Prodi</label>
        <input type="text" name="id_prodi" value="<?php echo $prodi->id_prodi ?>"><br>
        <label for="kode_prodi">Kode Prodi</label>
        <input type="text" name="kode_prodi" value="<?php echo $prodi->kode_prodi ?>"><br>
        <label for="nama_prodi">Nama Prodi</label>
        <input type="text" name="nama_prodi" value="<?php echo $prodi->nama_prodi ?>"><br>
        <input type="submit" value="Perbaharui">
    </form>
</body>

</html>