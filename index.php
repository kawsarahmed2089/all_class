<?php
	echo "This is my first PHP Class";
	
	$k = 11;
	
	echo $k;
	
	//$j = "<br> <h1>Hello </h1> ";
	$j = 11;
	echo $j;
	
	$status = 'pass2';
	
	echo $k." Example".$j;
	
	
	//operators
	
	// + , - , < , > , <=, >= , %, == , = , / , ! , != *
	
	// Conditions (  AND = && , OR = || )
	
	if($k == 10 || $status == 'pass'  ){
		echo 'K is Equal to 10';
	}
	else if($k == $j){
		echo "<br> k and".$k." j are same";
	}
	else if($k >= $j){
		echo "<br> k is greater than j ";
	}
	else if($k <= $j){
		echo "<br> k is less than j";
	}
 	else{
		echo "K is not Equal to 10";
	} 
	
	
	//else{}
	
?>


