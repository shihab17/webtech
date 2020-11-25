<?php
if(isset ($_REQUEST['empId']) )
	{
		$empId= $_REQUEST['empId'];
	}
	else
	{
		header('location: ../view/employee.php');
	}
?>