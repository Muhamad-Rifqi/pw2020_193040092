<?php
    require 'php/function.php';
    $makanan = query("SELECT * FROM makanan");

    if (isset($_GET['cari'])) {
        $makanan = cari($_GET['keyword']);
        }
?>

<!DOCTYPE html>
<html>
    <title>Makanan Khas Nusantara</title>
    <!-- <link rel="stylesheet" type="text/css" href="css/style.css"> -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
</head>
<body class="bg-warning">
    <div class="container bg-light">

    <!-- Bagian Navbar -->
        <nav class="navbar navbar-light bg-warning">
    <a class="navbar-brand" href="index.php">Makanan Khas Nusantara</a>
    <form action="" method="get" class="form-inline">
        <input class="form-control mr-sm-2" type="text" name="keyword" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-light my-2 my-sm-0 bg-secondary" type="submit" name="cari">Search</button>
    </form>
    </nav>
            <!-- <form action="" method="get">
            <input type="text" name="keyword" autofocus>
            <button type="submit" name="cari" class="btn btn-secondary">Cari!</button>
            </form> -->

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

    <a href="php/login.php"><button>Masuk Halaman Admin</button></a>
    </div>
</body>
</html>