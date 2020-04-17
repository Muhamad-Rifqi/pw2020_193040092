<?php 
    // menghubungnkan dengan file php lainnya
    require 'asset/php/function.php';

    //melakukan query
    $makanan = query("SELECT * FROM makanan")
?>

<html>
    <head>
        <title>Makanan Nusantara</title>
        <link rel="stylesheet" type="text/css" href="asset/css/style.css">
    </head>
    <body>
        <div class="container">
            <?php foreach ($makanan as $m) : ?>
                <p class="nama">
                    <a href="php/detail.php?id=<?=$m['id']?>">
                        <?= $m["Nama"] ?>
                    </a>
                </p>
            <?php endforeach; ?>
        </div>
    </body>
</html>
