<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mahasiswa oleh Vivia Ayu Elvina dan 2110020069</title>
    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Optional CSS for custom styling */
        .container {
            margin-top: 50px;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1 class="text-center">Selamat Datang di Web Vivia</h1>
        <a class="btn btn-primary mb-3" href="<?php echo site_url('mahasiswa/tambah') ?>">Tambah</a>
        <a class="btn btn-primary mb-3" href="<?php echo site_url('mahasiswa/cetak') ?>">Cetak</a>
        <table class="table table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th>NO</th>
                    <th>NIM</th>
                    <th>Nama</th>
                    <th>Program Studi</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                foreach ($mahasiswa as $row) { ?>
                    <tr>
                        <td><?php echo $no++ ?></td>
                        <td><?php echo $row->NIM ?></td>
                        <td><?php echo $row->nama_mhs ?></td>
                        <td><?php echo $row->nama_prodi ?></td>
                        <td>
                            <a class="btn btn-info btn-sm mr-2" href="<?php echo site_url('mahasiswa/edit/' . $row->id_mahasiswa) ?>">Edit</a>
                            <a class="btn btn-danger btn-sm" href="<?php echo site_url('mahasiswa/hapus/' . $row->id_mahasiswa) ?>">Hapus</a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>