<?php
	$num1 = 20;
	$num2 = 30;
	$stu = array('Bashar','Afroz','Munna');
	
	$sum = sum($num1,$num2);
	echo $sum;
$all_teacher = array(
		'0' => array('name' => 'Rashid Sir','contact' => '016765765','address' => 'Zindabazar, Sylhet'),
		'1' => array('name' => 'Sabbir Sir','contact' => '01868767','address' => 'Kumarpara, Sylhet'),
		'2' => array('name' => 'Kashem Sir','contact' => '01876783','address' => 'Kumarpara2, Sylhet'),
		'3' => array('name' => 'Ahmed Sir','contact' => '01776567','address' => 'Kumarpara1, Sylhet')
			);
	result($all_teacher,$num1,$num2);

	
	function sum($a,$b){
		return $a+$b;
	}
	
	function result($all_teacher,$m,$n){
		//return $myArray[0];
		
		
		
	echo '<table border=1>
			<tr>
				<th>Teacher Name</th>
				<th>Contact</th>
				<th>Address</th>
				<th>Sum</th>
			</tr>';
			foreach($all_teacher as $single_te):
			echo '<tr>
				<td>'. $single_te['name'].'</td>
				<td>'.$single_te['contact'].'</td>
				<td>'. $single_te['address'].'</td>
				<td>'. ($m+$n).'</td>
			</tr>';
			endforeach;
		echo '</table>';
		//return 0;
	}
?>