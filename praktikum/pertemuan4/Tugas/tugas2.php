<?php 
$makanan = [
    [
        "gambar" => "rd.jpg",
        "nama" => "Rendang",
        "asal" => "Sumatera Barat",
        "Deskripsi" => "Bersantan",
        "harga" => "Rp.15000"
    ],
    [
        "gambar" => "sm.jpg",
        "nama" => "Soto Madura",
        "asal" => "Madura",
        "Deskripsi" => "Berkuah",
        "harga" => "Rp.20000"
    ],
    [
        "gambar" => "lk.jpeg",
        "nama" => "Laksa",
        "asal" => "Betawi!",
        "Deskripsi" => "Berkuah",
        "harga" => "Rp.15000"
    ],
    [
        "gambar" => "gd.jpg",
        "nama" => "Gudeg",
        "asal" => "Yogtakarta",
        "Deskripsi" => "Makanan Berat",
        "harga" => "Rp.20000"
    ],
    [
        "gambar" => "lw.jpg",
        "nama" => "Nasi Liwet",
        "asal" => "Jawa Barat",
        "Deskripsi" => "Makanan Berat",
        "harga" => "Rp.35000"
    ]
     [
        "gambar" => "ayambetutu.jpg",
        "nama" => "Ayam Betutu",
        "asal" => "Bali",
        "Deskripsi" =>
        "Betutu adalah lauk yang terbuat dari ayam atau bebek yang utuh yang berisi bumbu, kemudian di panggang dalam api sekam. Betutu ini telah dikenal di seluruh kabupaten di Bali. Betutu merupakan jenis makanan tradisional daerah Bali yang bahan mentahnya berupa karkas utuh itik dan ayam.",
        "harga" => "Rp.15000"
    ],
    [
        "gambar" => "sm.jpg",
        "nama" => "Soto Madura",
        "asal" => "Madura",
        "Deskripsi" => "Berkuah",
        "harga" => "Rp.20000"
    ],
    [
        "gambar" => "lk.jpeg",
        "nama" => "Laksa",
        "asal" => "Betawi!",
        "Deskripsi" => "Berkuah",
        "harga" => "Rp.15000"
    ],
    [
        "gambar" => "gd.jpg",
        "nama" => "Gudeg",
        "asal" => "Yogtakarta",
        "Deskripsi" => "Makanan Berat",
        "harga" => "Rp.20000"
    ],
    [
        "gambar" => "lw.jpg",
        "nama" => "Nasi Liwet",
        "asal" => "Jawa Barat",
        "Deskripsi" => "Makanan Berat",
        "harga" => "Rp.35000"
    ]
];
?>

<html>
    <head>
        <title>Tugas2_193040092</title>
    </head>
    <style>
        
    </style>
    <body>
        <h3>Makanan Nusantara</h3>
        <table>
            <tr>
                <th>Gambar</th>
                <th>Nama</th>
                <th>Asal</th>
                <th>Jenis</th>
                <th>Harga</th>
            </tr>
            <?php foreach ($makanan as $m) { ?>
            <tr>
                <td><img src="../img/<?= $m['gambar']; ?>"></td>
                <td><?= $m["nama"]; ?></td>
                <td><?= $m["asal"]; ?></td>
                <td><?= $m["jenis"]; ?></td>
                <td><?= $m["harga"]; ?></td>
            </tr>
            <?php } ?>
        </table>
		
		<h5 align="center"><a href="../../index.php">Kembali</a></h5>
    </body>
</html>
