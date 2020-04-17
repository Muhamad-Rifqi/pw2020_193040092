<?php
    function hitungDeterminan($style1,$style2,$style3,$style4){
        $hitung = (( $style1 * $style4)- ($style2 * $style3));
    
    //baris code perhitung detertiminan
    echo "<table style = 'border-left: 1px  solid black; border-right: 1px  solid black ;' cellspacing='5' cellpadding='5'>
        <tr>
            <td>$style1</td>
            <td>$style2</td>
        </tr>
        <tr>
            <td>$style3</td>
            <td>$style4</td>
        </tr>
        </table>";
   
    echo " Determinan dari matriks tersebut adalah $hitung";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>
<body>
    <?php hitungDeterminan (1,2,3,4) ?>
    
</body>
</html>