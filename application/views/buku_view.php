<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buku</title>
</head>
<body>
    <center>
        <h2>Data Buku</h2>
        <a href="<?= base_url('Buku/tambah') ?>">Tambah Data</a>
    <table border='1'>
        <tr>
            <th>No</th>
            <th>Judul</th>
            <th>Pengarang</th>
            <th>Aksi</th>
        </tr>
        <?php
        $no = 1;
    foreach($data as $row){ ?>
        <tr>
            <td><?= $no++ ?></td>
            <td><?= $row->judul ?></td>
            <td><?= $row->pengarang ?></td>
            <td>
                <a href="<?= base_url('Buku/edit')?>/<?= $row->id?>">Edit</a>
                <a href="<?= base_url('Buku/hapus')?>/<?= $row->id?>">Delete</a>
            </td>
        </tr>
        <?php }
    ?>
    </table>
    </center>
</body>
</html>