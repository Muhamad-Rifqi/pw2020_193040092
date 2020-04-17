<?php 
    // menghubungnkan dengan file php lainnya
    require 'asset/php/function.php';

    //melakukan query
    $makanan = query("SELECT * FROM makanan")
?>

<html>
    <head>
        <title>Makanan Nusantara</title>
    </head>
    <body class="body">
        <div class="container">
            <?php foreach ($makanan as $m) : ?>
                <p class="nama">
                    <a href="asset/php/detail.php?id=$m['id'] ?>">
                        <?= $m["Nama"] ?>
                    </a>
                </p>
            <?php endforeach; ?>
        </div>
    </body>
</html>
