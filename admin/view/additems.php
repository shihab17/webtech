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
<title>Items</title>
<body>
<?php include('header.php'); ?>
<h1>Add items</h1>
<form action="../controller/action_additems.php" method="POST" >
	<label for="iname" >Items Name</label>
	<input type="text" name="iname" id="iname" placeholder="Enter Item Name" >
	<br>
	<br>
	<label for="idescription" >Description</label>
	<textarea name="idescription" id="idescription" cols="30" rows="5" ></textarea>
	<br>
	<br>
	<label for="icat" >Cetagory</label>
	<select name="icat" id="icat" >
		<option selected disabled>Choose...</option>
		<option value="salads" >Salads</option>
		<option value="desserts" >Desserts</option>
		<option value="drinks" >Drinks</option>
	</select>
	<br>
	<br>
	<label for="isubcat" >Sub Cetagory</label>
	<select name="isubcat" id="isubcat" >
		<option selected disabled >Choose...</option>
		<option value="salads" >Salads</option>
		<option value="desserts" >Desserts</option>
		<option value="drinks" >Drinks</option>
	</select>
	<br>
	<br>
	<label for="iQty" >Quantity: </label>
	<input type="number" name="iQty" id="iQty" min="1" max="100"  >
	<br>
	<br>
	<label for="iprice" >Price</label>
	<input type="text" name="iprice" id="iprice" placeholder="Enter Price" >
	<br>
	<br>
 <input type="Submit" name="formAddItems" value="Add Items" >
 <input type="reset" >

	
</form>
<br>
<br>
<?php include('footer.php'); ?>
</body>
</html>