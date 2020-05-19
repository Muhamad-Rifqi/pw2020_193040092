<?php

session_start();
if (isset($_SESSION['username'])){
	header("location: login.php");
	exit;
}

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
                <label for="Nama">Nama Makanan :</label><br>
                <input type="text" name="Nama" id="Nama" required><br><br>
            </li>
            <li>
                <label for="Gambar">Gambar Makanan :</label><br>
                <input type="file" name="Gambar" id="Gambar" required><br><br>
            </li>
            <li>
                <label for="Asal">Asal Makanan :</label><br>
                <input type="text" name="Asal" id="Asal" required><br><br>
            </li>
            <li>
                <label for="Deskripsi">Deskripsi Makanan :</label><br>
                <input type="text" name="Deskripsi" id="Deskripsi" required><br><br>
            </li>
            <li>
                <label for="Harga">Harga Makanan :</label><br>
                <input type="text" name="Harga" id="Harga" required><br><br>
            </li>
            <br>
            <button type="submit" name="tambah">Tambah Data!</button>
            <button type="submit">
                <a href="admin.php">Kembali</a>
            </button>
        </ul>

    </form>    
</body>
</html>