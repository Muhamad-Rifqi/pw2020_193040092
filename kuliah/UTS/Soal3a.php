<?php

	// var_dump($_POST);

?>

<!DOCTYPE html>
<html>
<head>
	<title>Document</title>
</head>
<body>

	<h1>Daftar Peserta Lomba</h1>

	<table>
		<tr>
			<td>No KTP</td>
			<td>:</td>
			<td><?php echo $_POST['no_ktp'] ?></td>
		</tr>

		<tr>
			<td>Nama</td>
			<td>:</td>
			<td><?php echo $_POST['nama'] ?></td>
		</tr>

		<tr>
			<td>Alamat</td>
			<td>:</td>
			<td><?php echo $_POST['alamat'] ?></td>
		</tr>
	</table>

</body>
</html>