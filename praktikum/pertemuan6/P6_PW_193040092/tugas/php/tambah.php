<?php
require 'function.php';

if (isset($_POST['tambah'])) {
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
<h3>Form Tambah Data Makanan</h3>
    <form action="" method="post">
        <ul>
            <li>
                <label for="nama">Nama Makanan :</label><br>
                <input type="text" name="nama" id="nama" required><br><br>
            </li>
            <li>
                <label for="gambar">Gambar Makanan :</label><br>
                <input type="text" name="gambar" id="gambar" required><br><br>
            </li>
            <li>
                <label for="cara">Asal Makanan :</label><br>
                <input type="text" name="cara" id="cara" required><br><br>
            </li>
            <li>
                <label for="asal">Deskripsi Makanan :</label><br>
                <input type="text" name="asal" id="asal" required><br><br>
            </li>
            <li>
                <label for="harga">Harga Makanan :</label><br>
                <input type="text" name="harga" id="harga" required><br><br>
            </li>
            <br>
            <button type="submit" name="tambah">Tambah Data!</button>
            <button type="submit">
                <a href="index.php">Kembali</a>
            </button>
        </ul>

    </form>    
</body>
</html>