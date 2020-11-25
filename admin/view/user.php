<?php
	ob_start();
	session_start();
	if($_SESSION['name']!='resdnt'){
		header("location: login.php");
	}
	else{
	$uname= $_SESSION['uname'];
	}
?>
<!DOCTYPE html>
<html>
<title>User</title>
<body>
<?php include('header.php'); ?>
<center><h1><a href="../view/employee.php">Employee</a></h1>
<h1><a href="../view/customer.php">Customer</a></h1>
</center>
<br>
<br>
<?php include('footer.php'); ?>
</body>
</html>