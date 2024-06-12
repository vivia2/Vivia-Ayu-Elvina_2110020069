<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Mahasiswa oleh Vivia Dan 2110020069</title>
</head>

<body>
    <h1> Form tambah Mahasiswa</h1>
    <form action="<?= site_url('mahasiswa/simpan') ?>" method="post">
        <label for="nim">NIM</label>
        <input type="text" name="nim"><br><br>
        <label for="nama_mhs">Nama Mahasiswa</label>
        <input type="text" name="nama_mhs"><br>
        <label for="id_prodi">Program Studi</label>
        <select name="id_prodi" id="id_prodi" required>
            <option value="">Pilih Program Studi</option> 
            <?php foreach ($prodi as $ps) : ?>
                <option value="<?= $ps->id_prodi ?>">
                    <?= $ps->nama_prodi ?>
                </option>
                    <?php endforeach; ?>
        </select><br>
        <input type="submit" value="Simpan">
    </form>
</body>

</html>