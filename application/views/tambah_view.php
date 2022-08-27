<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Tambah</title>
</head>
<body>
    <h2>Tambah Data Buku</h2>

    <form action="<?= base_url('Buku/simpan') ?>" method="POST">
        <table>
            <tr>
                <td>Judul Buku</td>
                <td>:</td>
                <td><input type="text" name="judul"></td>
            </tr>
            <tr>
                <td>Pengarang</td>
                <td>:</td>
                <td><input type="text" name="pengarang"></td>
            </tr>
            <tr>
                <td><Button type="submit">Simpan</Button></td>
            </tr>
        </table>
    </form>
    
</body>
</html>