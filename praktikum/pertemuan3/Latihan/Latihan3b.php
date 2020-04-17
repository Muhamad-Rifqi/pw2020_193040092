<!DOCTYPE html>
<html>
<head>
    <title>latihan3b</title>
    <style>
    
    .tulisan{
        font-size: 28px;
        font-family: arial;
    }
    .bungkus{
        border : 1px solid black;
        border-radius: 5px;
        box-shadow: 1px 1px 1px rgba(0,0,0);
        width: 600px;     
    }

</style>
</head>
<body>

    <?php
        function soal($tulisan, $tulisan2, $style1, $style2) {
        echo "<div class='$style1'>
        <p class='$style2'>$tulisan</p>
        <p class='$style2'>$tulisan2</p>
        </div>";
        }
    ?>


    

    <?php
        soal("isset adalah =..............","empty adalah =..............","bungkus","tulisan");
        
    ?>
</html>

    