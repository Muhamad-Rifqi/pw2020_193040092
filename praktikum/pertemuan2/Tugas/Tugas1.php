<!DOCTYPE html>
<html>
<head>
    <title>Tugas1</title>
</head>
<body>
    <table border="2" cellspacing="5" cellpadding="25">
        <?php for ($a = 1; $a <= 6; $a++) :?>

            <tr>

                <?php for ($b = 1; $b <= 6; $b++) :?>

                    <?php

                    if(($a %2 == 0 && $b % 2 == 0) || ($a % 2 == 1 && $b % 2 == 1)) {
                        echo '<td bgcolor="lightblue"></td>';
                    }
                    else {
                        echo '<td bgcolor="salmon"></td>';
                    }

                    ?>

                <?php endfor ; ?>

            </tr>
            
        <?php endfor ; ?>
    </table>
</body>
</html>