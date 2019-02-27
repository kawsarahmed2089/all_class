<?php
	$student = array();
	$student[0] = 'Rahim';
	$student[1] = 'Shahriar';
	$student[2] = 'Salam';
	
//	print_r($student);
	/* echo $student;
	
	echo $number; */
	
	$student1 = array('0' => 'Nazmul','1'=>'Kabir');
	
//	print_r($student1);
	
	$teacher = array('name' => 'Rashid Sir','contact' => '016765765','address' => 'Zindabazar, Sylhet');
	
//	print_r($teacher);
	
	$all_teacher = array(
				'0' => array('name' => 'Rashid Sir','contact' => '016765765','address' => 'Zindabazar, Sylhet'),
				'1' => array('name' => 'Sabbir Sir','contact' => '01868767','address' => 'Kumarpara, Sylhet'),
				'2' => array('name' => 'Kashem Sir','contact' => '01876783','address' => 'Kumarpara2, Sylhet'),
				'3' => array('name' => 'Ahmed Sir','contact' => '01776567','address' => 'Kumarpara1, Sylhet')
					);
					
//	print_r($all_teacher);
//	echo '<br>'.$all_teacher[2]['name'].'<br>';
//	echo $all_teacher[2]['address'].'<br>';
	
	//echo json_encode($all_teacher);
	
	
?>

<html>
	<head>
		<link rel="stylesheet" href="css/style.css" type="text/css">
	</head>
	<body>
		<table border=1>
			<tr>
				<th>Teacher Name</th>
				<th>Contact</th>
				<th>Address</th>
			</tr>
			<?php foreach($all_teacher as $single_te):?>
			<tr>
				<td><?php echo $single_te['name'];?></td>
				<td><?php echo $single_te['contact'];?></td>
				<td><?php echo $single_te['address'];?></td>
			</tr>
			<?php endforeach; ?>
		</table>
	</body>
</html>