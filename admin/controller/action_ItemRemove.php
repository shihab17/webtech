<?php
if(isset ($_REQUEST['itemId']) )
	{
		$itemId= $_REQUEST['itemId'];
	}
	else
	{
		header('location: ../view/item.php');
	}
	//echo $itemId;
?>