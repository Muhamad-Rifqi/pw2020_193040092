<?php
    
    //Menegecek apakah ada id yang di kirimkan
    //jika tidak ada maka akan dikembalikan ke index.php
    if (!isset($_GET['id'])){
        header("location: ../index.php");
        exit;
    } 

    require 'function.php';

    //mengambil id dari url
    $id = $_GET['id'];

    //melakukan query dgn parameter dari id
    $m = query("SELECT * FROM makanan WHERE id = $id")[0];

 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <title>Admin</title>
    <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
 </head>
 <body>
    <div class="container">
        <div class="gambar">
            <img src="../assets/img/<?= $m["Gambar"]; ?>" alt="">
        </div>
            <div class="keterangan">
                <p><?= $m["Nama"]; ?></p>
                <p><?= $m["Asal"]; ?></p>
                <p><?= $m["Deskripsi"]; ?></p>
                <p><?= $m["Harga"]; ?></p>
            </div>
        <button class="tombol_kembali"> <a href="../index.php">kembali</a></button>
    </div>
 </body>
 </html>