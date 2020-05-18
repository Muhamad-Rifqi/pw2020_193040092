<?php
    require 'php/function.php';
    $makanan = query("SELECT * FROM makanan");

    if (isset($_GET['cari'])) {
        $makanan = cari($_GET['keyword']);
        }
?>

<!DOCTYPE html>
<html>
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<div class="container">
        <form action="" method="get">
		  <input type="text" name="keyword" autofocus>
		  <button type="submit" name="cari">Cari!</button>
		</form>

    <?php if (empty($makanan)) : ?>
	<tr>
		<td colspan="7">
		<h1>Data tidak di temukan</h1>
		</td>
	</tr>

	<?php else : ?>
    <?php $i=1; ?>
    <?php foreach ($makanan as $row) : ?>
        <p class="nama">
            <a href="php/detail.php?id=<?= $row['id'] ?>">
                <?= $row["Nama"] ?>
            </a>
        </p>
    <?php endforeach; ?>
    <?php endif; ?>

    <a href="php/admin.php"><button>Halaman Admin</button></a>
</div>
</body>
</html>