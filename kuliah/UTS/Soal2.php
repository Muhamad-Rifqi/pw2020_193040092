<?php

	$mahasiswa = 
	[
		[
		'nama' => 'sandhika',
		'nrp' => '040123456',
		'email' => 'shandika@gmail.com',
		'jurusan' => 'Teknik Informatika'
		],
		[
		'nama' => 'sandhika',
		'nrp' => '040123456',
		'email' => 'shandika@gmail.com',
		'jurusan' => 'Teknik Informatika'
		]
	];

	for ($i=1; $i<= count($mahasiswa); $i++)
	{ 
		print($i."<br/>");
		print($mahasiswa[$i - 1] ['nama']."<br/>");
		print($mahasiswa[$i - 1] ['nrp']."<br/>");
		print($mahasiswa[$i - 1] ['email']."<br/>");
		print($mahasiswa[$i - 1] ['jurusan']."<br/>");
	}

?>