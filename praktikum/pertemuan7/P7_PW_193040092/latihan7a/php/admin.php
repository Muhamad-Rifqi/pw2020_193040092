<?php
require 'function.php';
$makanan = query("SELECT * FROM makanan");


if (isset($_GET['cari'])) {
	$makanan = cari($_GET['keyword']);
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Halaman Admin</title>
	<link rel="stylesheet" type="text/css" href="../css/styleadmin.css">
</head>
<body>
  <div class="container">
  	<div class="add"><a href="tambah.php">Tambah Data</a></div>
	  	<form action="" method="get">
		  <input type="text" name="keyword" autofocus>
		  <button type="submit" name="cari">Cari!</button>
		</form>
  	<table border="1" cellpadding="13" cellspacing="0">
  		<tr>
			<th>#</th>
			<th>Opsi</th>
			<th>Gambar</th>
			<th>Nama</th> 	
			<th>Asal</th>
			<th>Deskripsi</th>
			<th>Harga</th>
		</tr>

	<?php if (empty($makanan)) : ?>
	<tr>
		<td colspan="7">
		 	<h1>Data tidak di temukan</h1>
		</td>
	</tr>

		<?php else : ?>
		<?php $i=1; ?>
		<?php foreach ($makanan as $m) : ?>

		<div class="tabel">
			<tr>
				<td><?=$i;?></td>
				<td>
					<a href="ubah.php?id= <?= $m['id']; ?>"><button>Ubah</button></a>
            		<a href="hapus.php?id= <?= $m['id']; ?>" onclick="return confirm('hapus data?')"><button>Hapus</button></a>
				</td>
				<td><img src="../assets/img/<?= $m['Gambar']; ?>"></td>
				<td><?= $m['Nama']; ?></td>
				<td><?= $m['Asal']; ?></td>
				<td><?= $m['Deskripsi']; ?></td>
				<td> Rp <?= $m['Harga']; ?></td>
			</tr>
			<?php $i++; ?>
		<?php endforeach; ?>
		<?php endif; ?>
		</div>
  	</table>
</body>
</html>