<!DOCTYPE html>
<html>
<head>
	<title>	Latihan 1c</title>
	<style >
		.kotak {
			width: 35px;
			height: 35px;
			line-height: 35px;
			background-color: salmon;
			border: 1px solid black;
			display: inline-block;
			margin: 2px;
			text-align: center;
            border-radius: 100%;

		}
		.container {
			padding: 5px;
			margin: 3px;
			width: 150px;
			height: 130px;
			border: 1px solid;
		}




	</style>
</head>
<body>

		<div class="container">
            <?php 	
            $a = "1";
            $b = "2";
            $c = "3";
				echo "<div class='kotak'>$a</div>";
			    echo "<br>";

				echo "<div class='kotak'>$b</div>";
				echo "<div class='kotak'>$b</div>"; echo "<br>";

                echo "<div class='kotak'>$c</div>";
                echo "<div class='kotak'>$c</div>";
                echo "<div class='kotak'>$c</div>";

			 ?>
				
		</div>
</body>
</html>