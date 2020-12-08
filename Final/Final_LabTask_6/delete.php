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
	$stmt = $conn -> prepare("DELETE from users WHERE id = ?");
	$stmt -> bind_param("i", $id);
	$stmt -> execute();
	echo "Deleted rows"."<br>";
	echo "<a href='finalLabTask6.php' >back</a>";
?>