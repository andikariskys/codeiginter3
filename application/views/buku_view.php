<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css')?>">
    <title>Buku</title>
</head>
<body>
    <div class="container">

   
        <h2>Data Buku</h2>
        <a class="btn btn-primary mb-2" href="<?= base_url('Buku/tambah') ?>">Tambah Data</a>
    <table class="table table-bordered table-hover">
        <thead>
        <tr>
            <th>No</th>
            <th>Judul</th>
            <th>Pengarang</th>
            <th>Aksi</th>
        </tr>
        </thead>
        <?php
        $no = 1;
    foreach($data as $row){ ?>
        <tbody>
        <tr>
            <td><?= $no++ ?></td>
            <td><?= $row->judul ?></td>
            <td><?= $row->pengarang ?></td>
            <td>
                <a class="btn btn-warning" href="<?= base_url('Buku/edit')?>/<?= $row->id?>">Edit</a>
                <a class="btn btn-danger" href="<?= base_url('Buku/hapus')?>/<?= $row->id?>">Delete</a>
            </td>
        </tr>
        </tbody>
        <?php }
    ?>
    </table>

    </div>
</body>
</html>