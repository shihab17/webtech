<?php
$itemName=$itemDescription=$itemCat=$itemSubCat=$itemQty=$itemPrice="";
if(isset ($_REQUEST['itemId']) )
	{
		$itemId= $_REQUEST['itemId'];
	}
	else
	{
		header('location: ../view/item.php');
	}
	//echo $itemId;
	if(isset($_POST['formUpdateItems']))
{
	if(empty($_POST['iname']))
	{
		$itemNameErr="Please Enter Item Name";
	}
	else{
		$itemName=$_POST['iname'];
	}
	if(empty($_POST['idescription']))
	{
		$itemDescriptionErr="Please Enter Item Description";
	}
	else{
		$itemDescription=$_POST['idescription'];
	}
	if(empty($_POST['icat']))
	{
		$itemCatErr="Select a Cetagory";
	}
	else{
		$itemCat=$_POST['icat'];
	}
	if(empty($_POST['isubcat']))
	{
		$itemSubCatErr="Select a Sub-Cetagory";
	}
	else{
		$itemSubCat=$_POST['isubcat'];
	}
	if(empty($_POST['iQty']))
	{
		$itemQtyErr="Select a Cetagory";
	}
	else{
		$itemQty=$_POST['iQty'];
	}
	if(empty($_POST['iprice']))
	{
		$itemPriceErr="Select a Cetagory";
	}
	else{
		$itemPrice=$_POST['iprice'];
	}
	$myfile= fopen("../data/item.txt","a") or die("Unable to open the file");
	fwrite($myfile,$itemName);
	fwrite($myfile,$itemDescription);
	fwrite($myfile,$itemCat);
	fwrite($myfile,$itemSubCat);
	fwrite($myfile,$itemQty);
	fwrite($myfile,$itemPrice);
	fclose($myfile);
}
?>
<style>
.error{color:red;}
</style>
<!DOCTYPE html>
<html>
<title>Items</title>
<body>
<?php include('../view/header.php'); ?>
<h1>Add items</h1>
<form action="" method="POST" >
	<label for="iname" >Items Name</label>
	<input type="text" name="iname" id="iname" value="Hayrabadi Birani" placeholder="Enter Item Name" >
	<span class="error" ><?php if(isset($itemNameErr)){echo $itemNameErr;} ?></span>
	<br>
	<br>
	<label for="idescription" >Description</label>
	<textarea name="idescription" id="idescription" cols="30" rows="5" ></textarea>
	<span class="error" ><?php if(isset($itemDescriptionErr)){echo $itemDescriptionErr;} ?></span>
	<br>
	<br>
	<label for="icat" >Cetagory</label>
	<select name="icat" id="icat" >
		<option disabled>Choose...</option>
		<option selected value="salads" >Salads</option>
		<option value="desserts" >Desserts</option>
		<option value="drinks" >Drinks</option>
	</select><span class="error" >
	<?php if(isset($itemCatErr)){echo $itemCatErr;} ?></span>
	<br>
	<br>
	<label for="isubcat" >Sub Cetagory</label>
	<select name="isubcat" id="isubcat" >
		<option disabled >Choose...</option>
		<option selected value="salads" >Salads</option>
		<option value="desserts" >Desserts</option>
		<option value="drinks" >Drinks</option>
	</select>
	<span class="error" ><?php if(isset($itemSubCatErr)){echo $itemSubCatErr;} ?></span>
	<br>
	<br>
	<label for="iQty" >Quantity: </label>
	<input type="number" name="iQty" id="iQty" value="25" min="1" max="100"  >
	<span class="error" ><?php if(isset($itemQtyErr)){echo $itemQtyErr;} ?></span>
	<br>
	<br>
	<label for="iprice" >Price</label>
	<input type="text" name="iprice" id="iprice" value="250" placeholder="Enter Price" >
	<span class="error" ><?php if(isset($itemPriceErr)){echo $itemPriceErr;} ?></span>
	<br>
	<br>
 <input type="Submit" name="formUpdateItems" value="Update" >

	
</form>
<br>
<br>
<?php include('../view/footer.php'); ?>
</body>
</html>