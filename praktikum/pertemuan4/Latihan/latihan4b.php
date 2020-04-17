<?php 
	$lama = ["Mohammad Salah", "Cristiano Ronaldo", "Lionel Messi", "Zlantan Ibrahimovic", "Neymar Jr"];

 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>Latihan 4b</title>
 	<style>
 		h5 a{
            text-decoration: none;
            color: black;
            font-size: 25px;
        }
 	</style>
 </head>
 <body>
 	<h3>Daftar Pemain Bola Terkenal</h3>
 	<?php foreach ($lama as $L):?>
 		<ul>
 			<li><?php echo $L ; ?></li>
 		</ul>
 	<?php endforeach ?><br>

 	<h3>Daftar Pemain Bola Terkenal Baru</h3>
 	<?php 
 		$hasil = array_push($lama, "Luca Modric", "Sadio Mane");

 		$hasil = sort($lama);
 			foreach ($lama as $L) :?>
 				<ul>
 					<li><?php echo $L; ?></li>
 				</ul>
 			<?php endforeach ?>
 		<h5 align="center"><a href="../../index.php">Kembali</a></h5>
 </body>
 </html>