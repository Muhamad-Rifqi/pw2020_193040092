<?php
    require 'php/function.php';

    if (isset($_GET['cari'])){
        $keyword = $_GET['keyword'];
        $alatmusik = query ("SELECT * FROM makanan WHERE
        Nama LIKE '%$keyword%'OR
        Gambar LIKE '%$keyword%'OR
        Asal LIKE '%$keyword%'OR
        Deskripsi LIKE '%$keyword%'OR
        Harga LIKE '%$keyword%' ");
    
    }else{
        //melakukan query 
    $makanan = query("SELECT * FROM makanan");
    
    }
?>

<!DOCTYPE html>
<html>
<head>
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>
<body>
<div class="container">
<h3>Makanan Tradisional</h3>
<form action="" method="get">
        <input type="text" name="keyword" >
        <button type="submit" name="cari">Cari</button>
    </form>

    <?php if(empty($makanan)) : ?>
    <h1>Data tidak ditemukan</h1>
    <?php else : ?>

    <?php foreach ($makanan as $row) : ?>
        <p class="nama">
            <a href="php/detail.php?id=<?= $row['id'] ?>">
                <?= $row["nama"] ?>
            </a>
        </p>
    <?php endforeach; ?>
    <?php endif; ?>
</div>
<a href="php/admin.php">
        <button type="">
        Masuk ke halaman admin
        </button>
    </a>
</body>
</html>