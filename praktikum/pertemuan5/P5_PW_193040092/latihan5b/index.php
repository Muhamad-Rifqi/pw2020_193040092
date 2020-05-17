<?php 
    // menghubugnkan dengan file php lainnya
    require 'php/function.php';

    //melakukan query
    $makanan = query("SELECT * FROM makanan")
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
                
            <?php $i = 1 ?>    
            <?php foreach ($makanan as $m) : ?>
            <tr>
                <td><?= $i ?></td>
                <td><img src="asset/img/<?= $m["Gambar"]; ?>"></td>
                <td><?= $m["Nama"]; ?></td>
                <td><?= $m["Asal"]; ?></td>
                <td><?= $m["Deskripsi"]; ?></td>
                <td><?= $m["Harga"]; ?></td>
            </tr>
            <?php $i++ ?>
            <?php endforeach; ?>
        </table>
		
		<h5><a href="../../index.php">Kembali</a></h5>
    </body>
</html>
