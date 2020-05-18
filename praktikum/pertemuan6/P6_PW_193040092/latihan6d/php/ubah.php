<?php
require 'function.php';

$id = $_GET['id'];
$m = query("SELECT * FROM makanan WHERE id = $id")[0];

if (isset($_POST['ubah'])) {
    if (tambah($_POST) > 0) {
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
    <title>Document</title>
</head>
<body>
<h3>Form Ubah Data Makanan</h3>
    <form action="" method="post">
        <ul>  
                <input type="hidden" name="id" id="id" required value="<?= $m['id']; ?>"><br><br>
            <li>
                <label for="Nama">Nama Makanan :</label><br>
                <input type="text" name="Nama" id="Nama" required value="<?= $m['Nama']; ?>"><br><br>
            </li>
            <li>
                <label for="Gambar">Gambar Makanan :</label><br>
                <input type="text" name="Gambar" id="Gambar" required value="<?= $m['Gambar']; ?>"><br><br>
            </li>
            <li>
                <label for="Asal">Asal Makanan :</label><br>
                <input type="text" name="Asal" id="Asal" required value="<?= $m['Asal']; ?>"><br><br>
            </li>
            <li>
                <label for="Deskripsi">Deskripsi Makanan :</label><br>
                <input type="text" name="Deskripsi" id="Deskripsi" required value="<?= $m['Deskripsi']; ?>"><br><br>
            </li>
            <li>
                <label for="Harga">Harga Makanan :</label><br>
                <input type="text" name="Harga" id="Harga" required value="<?= $m['Harga']; ?>"><br><br>
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