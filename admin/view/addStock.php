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
<title>Add Stock</title>
<body>

<h1>Add Stock</h1>
<form action="" method="POST">
	<label for="stkName">Item Name</label>
	<input type="text" name="stkName" id="stkName" value=""  >
	<br>
	<br>
	<label for="stkQty">Quantity</label>
	<input type="number" name="stkQty" id="stkQty" value=""  >
	<br>
	<br>
	<label for="stkRate">Rate</label>
	<input type="text" name="stkRate" id="stkRate" value=""  >
	<br>
	<br>
	<label for="stkAmount">Amount</label>
	<input type="text" name="stkAmount" id="stkAmount" value=""  >
	<br>
	<br>
	<input type="submit" name="formAddStock" value="Add" >
</form>

</body>
</html>