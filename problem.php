<?php
	$n = 5;
	$space = $n;
	for($k = $n; $k >= 1; $k--){
		$temp = 0;
		for($c = 1; $c <= $k-1; $c++){
			echo "-";
			//$space--;
			$temp = $c;
		}
		for($c=1; $c<= $n-$temp; $c++){
			echo "*";
		}
		echo "<br>";
	}
?>