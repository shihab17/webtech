<?php
$counter = 0;
if(isset ($_REQUEST['uname']) )
	{
		$uname= $_REQUEST['uname'];
	}
else
	{
		header('location: ../view/employee.php');
	}
if(isset($_POST['formUpdateProfile']))
{
	if(empty($_POST['u_fname'])){
		$u_fnameErr="First Name is reqierd";
		$counter = $counter + 1;
	}
	else{
		if (!preg_match("/^[a-zA-Z ]*$/",$_POST['u_fname'])){
			$u_fnameErr = "Only letters and white space allowed";//First name is Invaild.
			$counter = $counter + 1;
		}
		else{
		$u_fname=$_POST['u_fname'];
		}
	}
	if(empty($_POST['u_lname'])){
		$u_lnameErr="Last Name is reqierd";
		$counter = $counter + 1;
	}
	else{
		if (!preg_match("/^[a-zA-Z ]*$/",$_POST['u_lname'])){
			$u_lnameErr = "Only letters and white space allowed";//First name is Invaild.
			$counter = $counter + 1;
		}
		else{
		$u_lname=$_POST['u_lname'];
		}
	}
	if(empty($_POST['u_email'])){
		$u_emailErr="Email is reqierd";
		$counter = $counter + 1;
	}
	else{
		if (!filter_var($_POST['u_email'], FILTER_VALIDATE_EMAIL)){
			$u_emailErr ="Email Address is invalid";
			$counter = $counter + 1;
		}
		else{
		$u_email=$_POST['u_email'];
		}
	}
	if(empty($_POST['u_phone'])){
		$u_phoneErr="Phone number is reqierd";
		$counter = $counter + 1;
	}
	else{
		if (!preg_match (" /(^(\+8801|8801|01|008801))[1|5-9]{1}(\d){8}$/",$_POST['u_phone']) )
			{
				$u_phoneErr="Invaild Phone Number";
				$counter = $counter + 1;
			}
		else{
		$u_phone=$_POST['u_phone'];
		}
	}
	if($counter == 0){
		$sucess="Succsessfully Updated your profile information";
	}
	else{
		$error="Faild! please try again";
	}
}
?>
<!DOCTYPE html>
<html>
<title>Edit Profile</title>
<body>
<style>
.error{color:red;}
</style>
<?php include('../view/header.php'); ?>
<h1>Edit Profile</h1>
<h3 style="color:green;" ><?php if(isset($sucess)){echo $sucess;} ?></h3>
<h3 style="color:red;" ><?php if(isset($error)){echo $error;} ?></h3>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
	<label for="u_fname" >First Name</label>
	<input type="text" name="u_fname" id="u_name" value="Shihab" required>
	<span class="error" ><?php if(isset($u_fnameErr)){echo $u_fnameErr;} ?></span>
	<br>
	<br>
	<label for="u_lname" >Last Name</label>
	<input type="text" name="u_lname" id="u_lname" value="Ahmed" required>
	<span class="error" ><?php if(isset($u_lnameErr)){echo $u_lnameErr;} ?></span>
	<br>
	<br>
	<label for="u_uname" >Username Name</label>
	<input type="text" name="u_uname" id="u_uname" value="shihab" required readonly>
	<br>
	<br>
	<label for="u_email" >Email Address</label>
	<input type="text" name="u_email" id="u_email" value="shihabahmed620@gmail.com" required>
	<span class="error" ><?php if(isset($u_emailErr)){echo $u_emailErr;} ?></span>
	<br>
	<br>
	<label for="u_phone" >Phone Number</label>
	<input type="text" name="u_phone" id="u_phone" value="01**********" required>
	<span class="error" ><?php if(isset($u_phoneErr)){echo $u_phoneErr;} ?></span>
	<br>
	<br>
	<label for="" >Birthday</label>
	<input type="date" id="u_birthday" name="u_birthday" value="02/17/1998" required>
	<span class="error" ><?php if(isset($u_birthdayErr)){echo $u_birthdayErr;} ?></span>
	<br>
	<br>
	<label for="" >Salary</label>
	<input type="text" name="u_salary" value="$2000" readonly>
	<br>
	<br>
	<input type="submit" name="formUpdateProfile" value="Update">
</form>
<br>
<br>
<?php include('../view/footer.php'); ?>
</body>
</html>