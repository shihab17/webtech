<?php
$oldPsw=$newPsw=$rePsw="";
if(isset ($_REQUEST['uname']) )
	{
		$uname= $_REQUEST['uname'];
	}
else
	{
		header('location: ../view/employee.php');
	}
if(isset($_POST['formCngPass']))
{
	try{
		if(empty($_POST['oldPsw'])){
		throw new Exception ('! Please enter Your Old Password..');
		}
		if(empty($_POST['newPsw']))
		{
			throw new Exception ('! Please enter password..');
		}
		if(empty($_POST['rePsw']))
		{
			throw new Exception ('! Please Enter  password..');
		}
		else{
			if($_POST['newPsw']!=$_POST['rePsw']){
				throw new Exception ('Do not match password');
			}
		}
		$myfile = fopen("../data/admininfo.txt", "r") or die("Unable to open file!");
	while( $line=fgets($myfile))
	{
		$words = explode(",",$line);
		$pass=$words[2];
	}
	fclose($myfile);
	if($pass!=$_POST['oldPsw']){
		throw new Exception ('Your Old Password is Wrong');
	}
	$success= "Change Your Password Successfully";
	}
	catch (Exception $e){
			$error_message = $e->getMessage();
		}
}
?>
<!DOCTYPE html>
<html>
<title>Change Password</title>
<body>
<style>
.error{
	color:red;
}
</style>
<?php include('../view/header.php'); ?>
<h2>Change Password</h2>
<span class= "success" ><?php if (isset($success)){echo $success;} ?></span><br>
<span class="error" ><?php if(isset($error_message)){echo $error_message;} ?></span>
<form action="" method="POST" >
	<label for="oldPsw" >Old Password:</label>
	<input type="password" name="oldPsw" id="oldPsw" placeholder="Type your current Password">
	<span class="error" ><?php if(isset($oldPswErr)){echo $oldPswErr;} ?></span>
	<br>
	<br>
	<label for="newPsw" >New Password:</label>
	<input type="password" name="newPsw" id="newPsw" placeholder="Type New Password">
	<span class="error" ><?php if(isset($newPswErr)){echo $newPswErr;} ?></span>
	<br>
	<br>
	<label for="rePsw" >Confirm Password:</label>
	<input type="password" name="rePsw" id="rePsw" placeholder="Repeat Password">
	<span class="error" ><?php if(isset($rePswErr)){echo $rePswErr;} ?></span>
	<br>
	<br>
	<input type="submit" name="formCngPass" value="Change Password" >
	<br>
	<br>
</form>
<br>
<br>
<?php include('../view/footer.php'); ?>
</body>
</html>