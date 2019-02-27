<?php

	$first_error = '';
	$last_error = '';
	$reg_error = '';
	$exam_error = '';
	if(isset($_POST['submit'])){
		echo "Click Submit Button";
		
		$first = $_POST['first_name'];
		$last = $_POST['last_name'];
		$reg_no = $_POST['reg_number'];
		$exam_year = $_POST['exam_year'];
		
		if($first == ''){
			$first_error = 'First Name is Required';
		}
		if($last == ''){
			$last_error = 'Last Name is Required';
		}
		if($reg_no == ''){
			$reg_error = 'Registration Number is Required';
		}
		if($exam_year == ''){
			$exam_error = 'Exam Year is Required';
		}
		
		if($first_error != '' || $last_error!= '' || $reg_error != ''){
			echo '<div style="color: red;">Validation Error</div>';
		}
		else{
			echo '<div style="color: green;">Validation Ok.</div>';
		}
	}
?>

<html>
	<body>
		<h2>Form Validation</h2>
		<h3>Student Info</h3>
		<form method="post">
			First Name <input type="text" name="first_name" required="required"> <br />
			<?php echo $first_error;?>
			<br />
			Last Name <input type="text" name="last_name" required="required"><br />
			<?php echo $last_error;?>
			<br />
			Registration No. <input type="number" name="reg_number" required="required"><br />
			<?php echo $reg_error;?>
			<br />
			<?php //echo date('d-m-Y H:i:s');?>
			Exam Year: 
			<select name="exam_year">
			<?php for($i= 1970;$i<=date('Y');$i++){?>
				<option value="<?php echo $i;?>"><?php echo $i;?></option>
			<?php } ?>
			</select>
			<br />
			<?php echo $exam_error;?>
			<br />
			<input type="submit" name="submit" value="submit">
		</form>
	</body>
</html>