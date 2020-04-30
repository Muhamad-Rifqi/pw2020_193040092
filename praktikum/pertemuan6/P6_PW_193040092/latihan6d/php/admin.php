<?php
require 'function.php';
$makanan = query("SELECT * FROM makanan");
?>

<!DOCTYPE html>
<html>
<head>
	<title>Halaman Admin</title>
	<link rel="stylesheet" type="text/css" href="../assets/css/styleadmin.css">
</head>
<body>
  <div class="container">
  	<div class="add"><a href="tambah.php">Tambah Data</a></div>
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

		<?php $i=1; ?>
		<?php foreach ($makanan as $m) : ?>

		<div class="tabel">
			<tr>
				<td><?=$i;?></td>
				<td>
					<a href="ubah.php?id= <?= $row['id']; ?>"><button>Ubah</button></a>
            		<a href="hapus.php?id= <?= $row['id']; ?>" onclick="return confirm('hapus data?')"><button>Hapus</button></a>
				</td>
				<td><img src="../assets/img/<?= $m['Gambar']; ?>"></td>
				<td><?= $m['Nama']; ?></td>
				<td><?= $m['Asal']; ?></td>
				<td><?= $m['Deskripsi']; ?></td>
				<td> Rp <?= $m['Harga']; ?></td>
			</tr>
			<?php $i++; ?>
		<?php endforeach; ?>
		</div>
  	</table>
</body>
</html>