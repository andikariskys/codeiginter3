<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Edit</title>
</head>
<body>
    <h2>Edit Data Buku</h2>

    <form action="<?= base_url('Buku/simpan_edit') ?>" method="POST">
        <table>
        <!-- mengedit data berdasar id -->
        <td><input hidden type="text" name="id" value="<?= $buku->id ?>"></td>
            <tr>
                <td>Judul Buku</td>
                <td>:</td>
                <td><input type="text" name="judul" value="<?= $buku->judul ?>"></td>
            </tr>
            <tr>
                <td>Pengarang</td>
                <td>:</td>
                <td><input type="text" name="pengarang" value="<?= $buku->pengarang ?>"></td>
            </tr>
            <tr>
                <td><Button type="submit">Edit</Button></td>
            </tr>
        </table>
    </form>
    
</body>
</html>