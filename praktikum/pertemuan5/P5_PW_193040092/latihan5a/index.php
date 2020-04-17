<?php 
  //Melakukan Koneksi ke database
  $conn = mysqli_connect("localhost", "root", "") or die ("Koneksi ke Database Gagal");

  //Memili Database
  mysqli_select_db($conn, "tubes_193040092") or die ("Database Salah");

  //query mengambil objek dari tabel di dalam Database
  $result = mysqli_query($conn, "SELECT * FROM makanan");
?>

<html>
    <head>
        <title>Makanan Nusantara</title>
        <link rel="stylesheet" href="asset/css/style.css">
    </head>
    <body class="body">
        <h1 class="judul">Makanan Khas Nusantara</h1>
        <table>
            <tr>
                <th>No</th>
                <th>Gambar</th>
                <th>Nama</th>
                <th>Asal</th>
                <th>Deskripsi</th>
                <th>Harga</th>
            </tr>
            <?php $i=1 ?>
            <?php while($row = mysqli_fetch_assoc($result)) : ?>
            <tr>
                <td><?= $i ?></td>
                <td><img src="asset/img/<?= $row["Gambar"]; ?>"></td>
                <td><?= $row["Nama"]; ?></td>
                <td><?= $row["Asal"]; ?></td>
                <td><?= $row["Deskripsi"]; ?></td>
                <td><?= $row["Harga"]; ?></td>
            </tr>
            <?php $i++?>
            <?php endwhile; ?>
        </table>
		
		<h5><a href="../../index.php">Kembali</a></h5>
    </body>
</html>
