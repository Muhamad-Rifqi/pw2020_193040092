<?php
$Club = [
    [
        "Nama" => "Cristiano Ronaldo",
        "Club" => "Juventus",
        "Main" => 100,
        "Goal" => 76,
        "Asist" => 30
    ],
    [
        "Nama" => "Lionel Messi",
        "Club" => "Barcelona",
        "Main" => 120,
        "Goal" => 80,
        "Asist" => 12
    ],
    [
        
        "Nama" => "Luca Modric",
        "Club" => "Real Madrid",
        "Main" => 87,
        "Goal" => 12,
        "Asist" => 48
    ],
    [
        
        "Nama" => "Mohammad Salah",
        "Club" => "Liverpool",
        "Main" => 90,
        "Goal" => 103,
        "Asist" => 8
    ],
    [
        
        "Nama" => "Neymar JR",
        "Club" => "Paris saint German",
        "Main" => 109,
        "Goal" => 56,
        "Asist" => 15
    ],
    [
        
        "Nama" => "Sadio Mane",
        "Club" => "Liverpool",
        "Main" => 63,
        "Goal" => 30,
        "Asist" => 70
    ],
    [
        
        "Nama" => "Zlatan Ibrahimovic",
        "Club" => "Ac Milan",
        "Main" => 100,
        "Goal" => 70,
        "Asist" => 12
    ],
];
?>

<html>
    <head>
        <title>Latihan 4d</title>
        <style>
            h5 a{
            text-decoration: none;
            color: black;
            font-size: 25px;
        }
        </style>
    </head>
    <body>
        <table border="3" cellpadding="8" cellspacing="0">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Club</th>
            <th>Main</th>
            <th>Goal</th>
            <th>Asist</ht>
        </tr>
        <?php $i = 1; ?>
    <?php foreach ($Club as $P) :?>
        <tr>
            <td><?php echo $i++; ?></td>
            <td><?php echo $P['Nama']; ?></td>
            <td><?php echo $P['Club']; ?></td>
            <td><?php echo $P['Main']; ?></td>
            <td><?php echo $P['Goal']; ?></td>
            <td><?php echo $P['Asist']; ?></td>
            
        </tr>
    <?php endforeach; ?>
    <tr>
                <td><b>#</b></td>
                <td colspan="2" align="center"><b>Jumlah</b></td>
                <?php 
                $sum = 0;
                foreach ($Club as $P) {
                    $sum += $P["Main"];}
                ?>
                <td><?= $sum;?></td>
                <?php 
                $sum2 = 0;
                foreach ($Club as $P) {
                    $sum2 += $P["Goal"]; }
                ?>
                <td><?= $sum2 ?></td>
                <?php 
                $sum2 = 0;
                foreach ($Club as $P) {
                    $sum2 += $P["Asist"]; }
                ?>
                <td><?= $sum2 ?></td>
            </tr>

    </table>
<h5 align="center"><a href="../../index.php">Kembali</a></h5>
    </body>
        

</html>