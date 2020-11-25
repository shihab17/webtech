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
<title>Profile</title>
<body>
<?php include('header.php'); ?>
<center>
<h2>Profile</h2>
<h4><a style="text-decoration: none; background-color:#d1ffad;" href="../controller/action_changePassword.php?uname=admin">Change Password&nbsp;&nbsp;</a>
<a style="text-decoration: none; background-color:#d1ffad;" href="../controller/action_updateProfile.php?uname=admin">Edit Profile&nbsp;&nbsp;</a></h4>
<table>
	<tr> 
		<td><b> Username: </b></td>
		<td> Admin</td>
	</tr>
	<tr><td></td><td></td></tr>
	<tr> 
		<td><b> Full Name: </b></td>
		<td> Shihab Ahmed Efty </td>
	</tr>
	<tr><td></td><td></td></tr>
	<tr> 
		<td><b> Email Address: </b></td>
		<td> shihabahmed620@gmail.com </td>
	</tr>
	<tr><td></td><td></td></tr>
	<tr> 
		<td><b> Phone Number: </b></td>
		<td> 016XXXXXXXX </td>
	</tr>
	<tr><td></td><td></td></tr>
	<tr> 
		<td><b> Gender: </b></td>
		<td> Male </td>
	</tr>
	<tr><td></td><td></td></tr>
	<tr> 
		<td><b> Birthday: </b></td>
		<td> 17/02/1998 </td>
	</tr>
	<tr><td></td><td></td></tr>
	<tr> 
		<td><b> Salary </b></td>
		<td> 20000$ </td>
	</tr>
	<tr><td></td><td></td></tr>
</table></center>
<br>
<br>
<?php include('footer.php'); ?>
</body>
</html>