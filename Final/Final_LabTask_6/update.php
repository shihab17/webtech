<?php
include ("dbConn.php");
	if(isset ($_REQUEST['id']) )
	{
		$id= $_REQUEST['id'];
	}
	else
	{
		
		header('location:finalLabTask6.php');
	}
	if(isset($_POST['formUpdate'])){
		$username=$_POST['uname'];
		$password=$_POST['pass'];
		$email=$_POST['email'];
		$dob=$_POST['dob'];
		//$stmt= mysql_query("UPDATE users SET username = '$username', pass='$password', email='$email', dob='$dob' WHERE id = '$id'");
		//$stmt -> bind_param(,,,, );
		$stmt = $conn -> prepare("UPDATE users SET username = ?,pass=?,email =?,dob=? WHERE id = ? ");
		$stmt -> bind_param("sssss",$username,$password,$email,$dob, $id);
		$stmt->execute();
		if ($stmt->error) {
			echo "FAILURE!!! " . $stmt->error;
		}
		else echo "Updated {$stmt->affected_rows} rows";

		$stmt->close();
	}
?>
<!DOCTYPE html>
<html>
<head>
<title>Update</title>
</head>
<body>
<?php
	$sql = "SELECT id,username,pass,email,dob FROM users where id=$id";
	$result = $conn -> query($sql);
		while($row = $result -> fetch_assoc()){
			$unameOld=$row['username'];
			$passOld=$row['pass'];
			$emailOld=$row['email'];
			$dobOld=$row['dob'];
		}
	
?>
<h1>User Update Information</h1>
<form action="" method="POST">
	<label for="uname">Username</label>
	<input type="text" id="uname" name="uname" value="<?php echo $unameOld; ?>">
	<br>
	<br>
	<label for="pass">Pssword</label>
	<input type="text"  id="pass" name="pass" value="<?php echo $passOld; ?>">
	<br>
	<br>
	<label for="email">Email</label>
	<input type="text" id="email" name="email" value="<?php echo $emailOld; ?>">
	<br>
	<br>
	<label for="dob">Birthday</label>
	<input type="text" id="dob" name="dob" value="<?php echo $dobOld; ?>">
	<br>
	<br>
	<input type="submit" name="formUpdate" value="UPDATE" >
</form>

</body>
</html>