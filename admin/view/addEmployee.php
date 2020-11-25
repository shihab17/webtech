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
<title>Add Employee</title>
<body>
<?php include('header.php'); ?>
<h1>Add employee</h1>
<form action="../controller/action_addEmployee.php" method="POST" >
	<label for="empFName">First Name </label>
	<input type="text" id="empFName" name="empFName" value="" placeholder="Enter first name" required >
	<br>
	<br>
	<label for="empLName">Last Name </label>
	<input type="text" id="empLName" name="empLName" value="" placeholder="Enter Last name" required >
	<br>
	<br>
	<label for="empUName">Username </label>
	<input type="text" id="empUName" name="empUName" value="" placeholder="Enter username" required >
	<br>
	<br>
	<label for="empGender">Gender</label>
	<input type="radio" id="empGender" name="empGender" value="male" >Male
	<input type="radio" id="empGender" name="empGender" value="female" >Female
	<input type="radio" id="empGender" name="empGender" value="other" >Other
	<br>
	<br>
	<label for="empBirthday" >Birthday</label>
	<input type="date" id="empBirthday" name="empBirthday" value="" required>
	<br>
	<br>
	<label  for="empAddress" >Address</label>
	<textarea id="empAddress" name="empAddress" rows="5" cols="20" ></textarea>
	<br>
	<br>
	<label for="empEmail">Email Address </label>
	<input type="email" id="empEmail" name="empEmail" value="" placeholder="Enter Email Address" required >
	<br>
	<br>
	<label for="empPhn">Phone Number </label>
	<input type="tel" id="empPhn" name="empPhn" value="" placeholder="Enter Phone Number " pattern="[0]{1}[1]{1}[3-9]{1}[0-9]{8}" required >
	<br>
	<br>
	<label for="empdgn" >Designation</label>
	<select id="empdgn" name="empdgn" required >
	<option selected disabled >Choose...</option>
	<option value="manager" >Manager</option>
	<option value="account" >Accounts</option>
	</select>
	<br>
	<br>
	<label for="empSalgrade" >Salary grade</label>
	<select id="empSalgrade" name="empSalgrade" required >
	<option selected disabled >Choose...</option>
	<option value="1" >Grade 1</option>
	<option value="2" >Grade 2</option>
	<option value="3" >Grade 3</option>
	<option value="4" >Grade 4</option>
	<option value="5" >Grade 5</option>
	</select>
	<br>
	<br>
	<input type="submit" name="formAddEmp" value="Add Employee" >
</form>
<br>
<br>
<?php include('footer.php'); ?>
</body>
</html>