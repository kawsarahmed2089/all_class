<?php
	$con = new mysqli('localhost','root','','ahmed_medicine');
	
	$sql = "select * from users ";
	
	
	$use = $con -> query($sql);
	
	while($row = $use->fetch_assoc()){
		echo $row['username'].' '.$row['password'].' &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$row['user_type'].'<br>';
	}
?>