<?php
	
	function cetak_bintang($banyak)
	{
		for($i=1; $i<=$banyak; $i++){
			for($j=1; $j<=$banyak-$i+1; $j++){
			print("*");
			}
			print("<br/>");
		}
	}

	cetak_bintang(20)

?>