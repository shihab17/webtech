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
<center><h1><a style="text-decoration: none;" href="addItems.php" >Add items</a></h1>
<table  border= "1"  cellpadding= "25" >
<tr>
	<th>#</th>
	<th>Item Name</th>
	<th>Cetagory</th>
	<th>Sub-Cetagory</th>
	<th>Quantity</th>
	<th>Price</th>
	<th>Action</th>
</tr>
<tr>
<td>1</td>
<td>1</td>
<td>1</td>
<td>1</td>
<td>1</td>
<td>1</td>
<td> <a href="../controller/action_itemUpdate.php?itemId=1" style="text-decoration:none;" >EDIT </a> ||
<a href="../controller/action_itemRemove.php?itemId=1" style="text-decoration:none;" >REMOVE</a></td>
</tr>
</table>
</center>
<br>
<br>
<?php include('footer.php'); ?>
</body>
</html>