 <?php
	for($i = 2;$i<= 100 ; $i++){
		$prime = 1;
		
		for($j=2;$j<$i;$j++){
			if($i!=2){
				if($i%$j == 0){
					$prime = 0;
					break;
				}
			}
		}
		if($prime == 1){
			echo $i.'<br>';
		}
	}
 ?>