<?php
	include('config.php');
$con = new mysqli('localhost','root','','php_class');
?>

<?php 
	$exist = '';
	if(isset($_POST['submit'])){
		$user = $_POST['user'];
		$fname = $_POST['fname'];
		$email = $_POST['email'];
		$pass = md5($_POST['pass']);
		$address = $_POST['address'];
		$user_type = $_POST['user_type'];
		$sql = "SELECT * FROM `users` where user_name = '".$user."' ";
		
		$login = $con -> query($sql);
		if($login -> num_rows > 0){
			$exist = 'Already Exist';
		}
		else{
			$sql3 = "INSERT INTO `users` (`userid`, `name`, `user_name`, `address`, `email`, `password`, `usertype`, `employeeID`) VALUES (NULL, '".$fname."', '".$user."', '".$address."', '".$email."', '".$pass."', '".$user_type."', '')";
			
			
			if($con -> query($sql3)){
				echo 'Successfully Registered';
			}
		}
		
		
	}
?>

<html>
	<head>
		<style>
			.tbl_design{
				color: #36811C;
			}
		</style>
	</head>
	<body>
		<form method="post" action="">
			Full Name: <input type="text" name="fname" Placeholder = " Full Name"><br /><br />
			User Name: <input type="text" name="user" Placeholder = " User Name"><br /><br />
			Email: <input type="email" name="email"><br /><br />
			Address: <textarea name="address"></textarea><br /><br />
			User Type: <select name="user_type">
				<option value="Admin">Admin</option>
				<option value="Superadmin">Superadmin</option>
				<option value="Manager">Manager</option>
			</select><br /><br />
			Password: <input type="password" name="pass"><br /><br />
			<input type="submit" name="submit" value="Sign Up">
		</form>
		
	</body>
</html>