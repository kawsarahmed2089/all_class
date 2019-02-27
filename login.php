<?php
	include('config.php');
?>

<?php 
	$login_check = '';
	if(isset($_POST['submit'])){
		$user = $_POST['user'];
		$pass = md5($_POST['pass']);
		$sql2 = "SELECT * FROM users where email = '".$user."' AND password ='".$pass."' ";
		
		$login = $con -> query($sql2);
		if($login -> num_rows > 0){
			$row = $login -> fetch_assoc();
			$_SESSION['id'] = $row['userid'];
			$_SESSION['name'] = $row['name'];
		
			setcookie('name', $row['userid'], time() + (7));
			
			header('Location: http://localhost/first_php/after_login.php');
		}
		else{
			$login_check = 'Incorrect Login';
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
			Email: <input type="text" name="user"><br /><br />
			Password: <input type="password" name="pass"><br /><br />
			<?php echo $login_check;?><br />
			<input type="submit" name="submit" value="Login">
		</form>
		<br/>
		Don't Have An Account?
		<a href="signup.php">
			Sign Up
		</a>
		
	</body>
</html>