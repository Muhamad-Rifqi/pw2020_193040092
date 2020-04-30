<?php
require 'functions.php';

$id = $_GET['id'];
$row = query("SELECT * FROM alat_musik WHERE id = $id") [0];

if (isset($_POST['ubah'])) {
    if (ubah($_POST) > 0) {
        echo "<script>
                    alert('Data berhasil diubah!');
                    document.location.href = 'admin.php';
                </script>";
    } else {
        echo "<script>
                    alert('Data gagal diubah!');
                    document.location.href = 'admin.php';
                </script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Form ubah data</title>
</head>
<body>
<h3>Form Ubah Data Alat Musik</h3>
    <form action="" method="post">
    <input type="hidden" name="id" value="<?= $row['id']; ?>">
        <ul>
            <li>
                <label for="nama">Nama alat musik :</label><br>
                <input type="text" name="nama" id="nama" required value="<?= $row['nama']; ?>"><br><br>
            </li>
            <li>
                <label for="gambar">Gambar alat musik :</label><br>
                <input type="text" name="gambar" id="gambar" required value="<?= $row['gambar']; ?>"><br><br>
            </li>
            <li>
                <label for="cara">Cara bermain :</label><br>
                <input type="text" name="cara" id="cara" required value="<?= $row['cara']; ?>"><br><br>
            </li>
            <li>
                <label for="asal">Asal alat musik :</label><br>
                <input type="text" name="asal" id="asal" required value="<?= $row['asal']; ?>"><br><br>
            </li>
            <li>
                <label for="harga">Harga alat musik :</label><br>
                <input type="text" name="harga" id="harga" required value="<?= $row['harga']; ?>"><br><br>
            </li>
            <br>
            <button type="submit" name="ubah">Ubah Data!</button>
            <button type="submit">
                <a href="admin.php">Kembali</a>
            </button>
        </ul>

    </form>    
</body>
</html>