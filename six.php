<?php
session_start();
	//$connection = new mysqli('servername','username','password','database_name');
	
	$con = new mysqli('localhost','root','','pms');
	// FOR Database Connection
	
	
	$sql = "SELECT * FROM employeeinfo";
	// Assign a query to a variable 
	
	$empl = $con -> query($sql);
	// Run a query
	
	/* while($row = $empl -> fetch_assoc()){
		echo $row['name'].'<br>';
	} */
	
	// Showing result;
?>

<?php 

	if(isset($_POST['submit'])){
		$user = $_POST['user'];
		$pass = md5($_POST['pass']);
		$sql2 = "SELECT * FROM users where email = '".$user."' AND password ='".$pass."' ";
		
		$login = $con -> query($sql2);
		if($login -> num_rows > 0){
			$row = $login -> fetch_assoc();
			$_SESSION['id'] = $row['userid'];
			$_SESSION['name'] = $row['name'];
			
			header('Location: http://localhost/first_php/after_login.php');
		}
		else{
			echo 'Incorrect Login';
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
		
		<table border='1' class="tbl_design">
			<tr>
				<th>S/N</th>
				<th>Emp. Name</th>
				<th>EmployeeType</th>
				<th>joiningDate</th>
			</tr>
			<?php 
			$i=1;
			$total_price = 0;
			while($row = $empl -> fetch_assoc()){
			?>
			<tr>
				<td><?php echo $i;?></td>
				<td><?php echo $row['name'];?></td>
				<td><?php echo $row['employeeType'];?></td>
				<td><?php echo $row['joiningDate'];?></td>
			</tr>
			<?php 
			
			$total_price += $i; 
			$i++;
			}
			?>
			<tr>Total Price: <?php echo $total_price;?></tr>
		</table>
		
		
		<form method="post" action="">
			Email: <input type="text" name="user"><br /><br />
			Password: <input type="password" name="pass"><br /><br />
			<input type="submit" name="submit" value="Login">
		</form>
	</body>
</html>