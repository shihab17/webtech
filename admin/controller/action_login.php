<?php
$uname=$password=$txt="";
if (isset ($_POST['formLogin']) )
{
	if(empty($_POST['uname']))
	{
		$unameErr = "User Name is Requierd";
	}
	else{
		$uname=$_POST['uname'];
	}
	if(empty($_POST['psw']))
	{
		$passwordErr = "Password is Requierd";
	}
	else{
		$password=$_POST['psw'];
	}
	$myfile = fopen("../data/admininfo.txt", "r") or die("Unable to open file!");
	while( $line=fgets($myfile))
	{
		$words = explode(",",$line);
		$user=$words[1];
		$pass=$words[2];
		
	}
	fclose($myfile);
	setcookie($user, $pass, time() + (86400), "/"); 
	if(isset($_COOKIE[$user])){
		$myfile = fopen("../data/cookies.txt", "a") or die("Unable to open file!");
		$txt=$_COOKIE[$user].$_COOKIE[$pass];
		fwrite($myfile, $txt);
		fclose($myfile);
	}
	if ($uname==$user && $password=$pass){
		session_start();
		$_SESSION['name'] = "resdnt";
		$_SESSION['uname'] =$uname;
		header ("location: ../view/index.php");
	}
	else{
		 $error = "Invaild Username or password";
	}
	


}

?>
<style>
.error{
	color:red;
}
</style>
<!DOCTYPE html>
<html>
<title>Login</title>
<body>

<h1>Login</h1>
<h4 style="color:red;"><?php if(isset($error)){ echo $error; }  ?></h4>
<form action="" method="POST" >
  <label for="uname">Username: </label>
  <input type="text" id="uname" name="uname" placeholder="Enter your unsername" >
  <span class="error"><?php if(isset($unameErr)) { echo $unameErr; }  ?></span><br><br>
  <label for="pwd">Password: </label>
  <input type="password" id="pwd" name="pwd" placeholder="Enter your password" >
  <span class="error"><?php if(isset($passwordErr)){ echo $passwordErr; }  ?></span>
  <br><br>
  <input type="submit" name="formLogin" value="Login" >
</form>

</body>
</html>