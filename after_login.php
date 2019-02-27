<?php
 session_start();
if($_SESSION['id'] == '' || !isset($_COOKIE['name']) ){
	header('Location: http://localhost/first_php/login.php');
}

?>

<html>
	<body> <!--onload="window.print();"--> 
		<h1>Welcome, <?php echo $_SESSION['name'];?></h1>
		
		<a href="http://localhost/first_php/logout.php">Logout</a>
	</body>
</html>