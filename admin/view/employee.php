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
<title>Employee</title>
<body>
<?php include('header.php'); ?>
<center><h1><a style="text-decoration: none;" href="addEmployee.php" >Add Employee</a></h1>
<table  border= "1"  cellpadding= "25" >
<tr>
	<th>#</th>
	<th>Full Name</th>
	<th>Username</th>
	<th>Gender</th>
	<th>Birthday</th>
	<th>Address</th>
	<th>Email</th>
	<th>Phone Number</th>
	<th>Designation</th>
	<th>Salary</th>
	<th>Action</th>
</tr>
<tr>
<td>1</td>
<td>1</td>
<td>1</td>
<td>1</td>
<td>1</td>
<td>1</td>
<td>1</td>
<td>1</td>
<td>1</td>
<td>1</td>
<td> <a href="../controller/action_employeeUpdate.php?empId=1" style="text-decoration:none;" >EDIT </a> ||
<a href="../controller/action_employeeRemove.php?empId=1" style="text-decoration:none;" >REMOVE</a></td>
</tr>
</table>
</center>
<br>
<br>
<?php include('footer.php'); ?>
</body>
</html>