<!DOCTYPE html>
<html lang="en">
<head>
    <title>Latihan3a</title>
    <style>
        .tulisan{
            font-size : 28px;
            font-family : arial;
            font-style : italic;
            color : #8c782d;
            font-weight : bolder;
            margin-top : 0px;
        
        }
        .bungkus{
            border : 1px solid black;
            box-shadow : 1px 1px 10px 1px; 
            border-radius : 3px;
            width : 500px;
            height : 40px;
            
        }
         </style>
    </head>
<body>

<?php 

function gantiStyle($tulisan, $style1, $style2) {
    echo "<div class = '$style1'> 
            <p class = '$style2'> $tulisan </p>
        </div>";
}
?>

<?php 
        echo gantiStyle(" Selamat datang di praktikum pw 2020 ", "bungkus" , "tulisan");
    ?>
</body>
</html>