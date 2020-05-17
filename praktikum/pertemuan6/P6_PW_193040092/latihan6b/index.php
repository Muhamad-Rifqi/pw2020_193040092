<?php
    require 'php/function.php';

    $makanan = query("SELECT * FROM makanan")
?>

<!DOCTYPE html>
<html>
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>
<body>
<div class="container">
    <?php foreach ($makanan as $row) : ?>
        <p class="nama">
            <a href="php/admin.php?id=<?= $row['id'] ?>">
                <?= $row["Nama"] ?>
            </a>
        </p>
    <?php endforeach; ?>
</div>
</body>
</html>