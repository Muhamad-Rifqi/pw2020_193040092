<?php 
$makanan = [
    [
        "Gambar" => "rd.jpg",
        "Nama" => "Rendang",
        "Asal" => "Sumatera Barat",
        "Deskripsi" => "Rendang atau randang adalah masakan daging dengan bumbu rempah-rempah yang berasal dari Minangkabau. Masakan ini dihasilkan dari proses memasak yang dipanaskan berulang-ulang menggunakan santan sampai kuahnya kering sama sekali.",
        "Harga" => "Rp.15000"
    ],
    [
        "Gambar" => "sm.jpg",
        "Nama" => "Soto Madura",
        "Asal" => "Madura",
        "Deskripsi" => "Soto Madura adalah jenis soto yang berasal dari daerah Madura, Jawa Timur berbahan dasar daging sapi, telur rebus, kentang goreng dan tauge, dengan bumbu ketumbar, bawang merah dan bawang putih, jahe, kunir, laos, Kemiri, jeruk purut, dan garam secukupnya",
        "Harga" => "Rp.20000"
    ],
    [
        "Gambar" => "lk.jpg",
        "Nama" => "Laksa",
        "Asal" => "Betawi!",
        "Deskripsi" => "Laksa adalah makanan berjenis mi yang ditaruh bumbu dengan kebudayaan Peranakan, yang digabung dengan elemen Tionghoa dan Melayu. Laksa mempunyai beberapa jenis, yang paling dikenal adalah yang berjenis Laksa Penang, bentuk mi-nya bulat putih dan sedikit tebal.",
        "Harga" => "Rp.15000"
    ],
    [
        "Gambar" => "gd.jpg",
        "Nama" => "Gudeg",
        "Asal" => "Yogtakarta",
        "Deskripsi" => "Gudeg adalah makanan khas Yogyakarta dan Jawa Tengah yang terbuat dari nangka muda yang dimasak dengan santan. Perlu waktu berjam-jam untuk membuat masakan ini. Warna coklat biasanya dihasilkan oleh daun jati yang dimasak bersamaan.",
        "Harga" => "Rp.20000"
    ],
    [
        "Gambar" => "nasitimbel.jpg",
        "Nama" => "Nasi Timbel",
        "Asal" => "Jawa Barat",
        "Deskripsi" => "Nasi timbel adalah masakan Sunda yang populer di Jawa Barat dan Banten. Makanan ini biasanya dibuat dari beras bagolo atau beras merah campuran yang dimasak dengan bungkus daun pisang.",
        "Harga" => "Rp.35000"
    ],
    [
        "Gambar" => "ayambetutu.jpg",
        "Nama" => "Ayam Betutu",
        "Asal" => "Bali",
        "Deskripsi" =>
        "Betutu adalah lauk yang terbuat dari ayam atau bebek yang utuh yang berisi bumbu, kemudian di panggang dalam api sekam. Betutu ini telah dikenal di seluruh kabupaten di Bali. Betutu merupakan jenis makanan tradisional daerah Bali yang bahan mentahnya berupa karkas utuh itik dan ayam.",
        "Harga" => "Rp.15000"
    ],
    [
        "Gambar" => "mieaceh.jpg",
        "Nama" => "Mie Aceh",
        "Asal" => "Aceh",
        "Deskripsi" => "Mie Aceh adalah masakan mie pedas khas Aceh di Indonesia. Mie kuning tebal dengan irisan daging sapi, daging kambing atau makanan laut disajikan dalam sup sejenis kari yang gurih dan pedas. Mie Aceh tersedia dalam tiga jenis, Mie Aceh Goreng, Mie Aceh Tumis dan Mie Aceh Kuah",
        "Harga" => "Rp.20000"
    ],
    [
        "Gambar" => "keraktelor.jpg",
        "Nama" => "Kerak Telor",
        "Asal" => "Betawi",
        "Deskripsi" => "Kerak telur adalah makanan asli daerah Jakarta, dengan bahan-bahan beras ketan putih, telur ayam, ebi yang disangrai kering ditambah bawang merah goreng, lalu diberi bumbu yang dihaluskan berupa kelapa sangrai, cabai merah, kencur, jahe, merica butiran, garam dan gula pasir.",
        "Harga" => "Rp.15000"
    ],
    [
        "Gambar" => "pempek.jpg",
        "Nama" => "Pempek",
        "Asal" => "Palembang",
        "Deskripsi" => "Pempek atau empek-empek adalah makanan khas Palembang yang terbuat dari daging ikan yang digiling lembut dan tepung kanji, serta beberapa komposisi lain seperti telur, bawang putih yang dihaluskan, penyedap rasa dan garam.",
        "Harga" => "Rp.20000"
    ],
    [
        "Gambar" => "satebandeng.jpg",
        "Nama" => "Sate Bandeng",
        "Asal" => "Banten",
        "Deskripsi" => "Sate Bandeng adalah masakan tradisional khas Banten, Indonesia. Sate Bandeng dibuat dari ikan bandeng yang dihilangkan durinya, dagingnya dibumbui dan dimasukkan kembali ke kulitnya, lalu ditusuk atau dijepit tusukan tangkai bambu, lalu dibakar di atas bara arang.",
        "Harga" => "Rp.35000"
    ]
];
?>

<html>
    <head>
        <title>Tugas2_193040092</title>
        <link rel="stylesheet" type="text/css" href="../asset/css/style.css">
    </head>
    <body>
        <h3 class="judul">Makanan Nusantara</h3>
        <table>
            <tr>
                <th>Gambar</th>
                <th>Nama</th>
                <th>Asal</th>
                <th>Deskripsi</th>
                <th>Harga</th>
            </tr>
            <?php foreach ($makanan as $m) { ?>
            <tr>
                <td><img src="../asset/img/<?= $m["Gambar"]; ?>"></td>
                <td><?= $m["Nama"]; ?></td>
                <td><?= $m["Asal"]; ?></td>
                <td><?= $m["Deskripsi"]; ?></td>
                <td><?= $m["Harga"]; ?></td>
            </tr>
            <?php } ?>
        </table>
		
		<h5 align="center"><a href="../../index.php">Kembali</a></h5>
    </body>
</html>
