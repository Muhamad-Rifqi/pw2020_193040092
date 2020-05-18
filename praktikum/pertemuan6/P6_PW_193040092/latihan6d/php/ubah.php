<?php
require 'function.php';

$id = $_GET['id'];
$m = query("SELECT * FROM makanan WHERE id = $id")[0];

if (isset($_POST['ubah'])) {
    if (tambah($_POST) > 0) {
        echo "<script>
                    alert('Data berhasil ditambahkan!');
                    document.location.href = 'admin.php';
                </script>";
    } else {
        echo "<script>
                    alert('Data gagal ditambahkan!');
                    document.location.href = 'admin.php';
                </script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
<h3>Form Ubah Data Makanan</h3>
    <form action="" method="post">
        <ul>  
                <input type="hidden" name="id" id="id" required value="<?= $m['id']; ?>"><br><br>
            <li>
                <label for="nama">Nama Makanan :</label><br>
                <input type="text" name="nama" id="nama" required value="<?= $m['nama']; ?>"><br><br>
            </li>
            <li>
                <label for="gambar">Gambar Makanan :</label><br>
                <input type="file" name="gambar" id="gambar" required value="<?= $m['gambar']; ?>"><br><br>
            </li>
            <li>
                <label for="asal">Asal Makanan :</label><br>
                <input type="text" name="asal" id="asal" required value="<?= $m['asal']; ?>"><br><br>
            </li>
            <li>
                <label for="deskripsi">Deskripsi Makanan :</label><br>
                <input type="text" name="deskripsi" id="deskripsi" required value="<?= $m['deskripsi']; ?>"><br><br>
            </li>
            <li>
                <label for="harga">Harga Makanan :</label><br>
                <input type="text" name="harga" id="harga" required value="<?= $m['nama']; ?>"><br><br>
            </li>
            <br>
            <button type="submit" name="ubah">Ubah Data!</button>
            <button type="submit">
                <a href="index.php">Kembali</a>
            </button>
        </ul>

    </form>    
</body>
</html>