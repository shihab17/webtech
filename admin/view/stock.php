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
<title>Stock</title>
<body>
<?php include('header.php'); ?>
<center><h1><a style="text-decoration: none;" href="addStock.php" >Add Stock</a></h1>
<table  border= "1"  cellpadding= "25" >
<tr>
	<th>#</th>
	<th>Item name</th>
	<th>Quantity</th>
	<th>Rate</th>
	<th>Amount</th>
</tr>
<tr>
<td>1</td>
<td>Chiken</td>
<td>50</td>
<td>200</td>
<td>10000</td>
</tr>
</table>
</center>
<br>
<br>
<?php include('footer.php'); ?>
</body>
</html>