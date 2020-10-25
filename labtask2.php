<?php 
	$stdIdErr=$stdNameErr=$stdGenderErr=$stdEmailErr=$stdAddressErr=$stdAddress2Err=$cityErr=$stateErr=$countryErr="";
	$stdId=$stdName=$stdGender=$stdEmail=$stdAddress=$addressLine=$city=$state=$zip=$country="";
	if($_SERVER["REQUEST_METHOD"] == "POST"){
		if(empty($_REQUEST["stdId"])) {
				  $stdIdErr = "Student Id is required";
			}
		else {
				$stdId= $_REQUEST["stdId"];
			}
		if(empty($_REQUEST["stdName"])) {
				  $stdNameErr = "Student Name is required";
			}
		else {
				$stdName= $_REQUEST["stdName"];
			}
		if(empty($_REQUEST["gender1"])){
				$gender1= "";
			}
			else{
				$gender1= $_REQUEST["gender1"];
			}
		if(empty($_REQUEST["gender2"])){
				$gender2= "";
			}
			else{
				$gender2= $_REQUEST["gender2"];
			}
		if(empty($_REQUEST["gender1"]) && empty($_REQUEST["gender2"]))
		{
			$stdGenderErr = "Please Select One";
		}
		if($gender1 != "" && $gender2 != "" )
		{
			$stdGenderErr = "Please Select One";
		}
		else{
			if($gender1 != ""){
				$stdGender=$gender1;
			}
			else{
				$stdGender=$gender2;
			}
		}
		if(empty($_REQUEST["stdEmail"])) {
				  $stdEmailErr = "Email is required";
			}
		else {
				$stdEmail= $_REQUEST["stdEmail"];
			}
		if(empty($_REQUEST["address"])) {
				  $stdAddressErr = "Address is required";
			}
		else {
				$stdAddress= $_REQUEST["address"];
			}
		if(empty($_REQUEST["address2"])) {
				  $stdAddress2Err = "";
			}
		else {
				$addressLine= $_REQUEST["address"];
			}
		//$addressLine=$_REQUEST["address2"];
		if(empty($_REQUEST["city"])) {
				  $cityErr = "City required";
			}
		else {
				$city= $_REQUEST["city"];
			}
		if(empty($_REQUEST["state"])) {
				  $stateErr = "Sate required";
			}
		else {
				$state= $_REQUEST["state"];
			}
		$Zip=$_REQUEST["zip"];
		if(empty($_REQUEST["country"])) {
				  $countryErr = "Country is required";
			}
		else {
				$country= $_REQUEST["country"];
			}
		
	}
 ?>
 <style>
 .error{
	 color:red;
 }
 </style>
<!doctype>
<html>
	<head>
		<title>Form Validation</title>
	</head>
	<body>
		<h1>Student Form</h1>
		<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" >
			<label for="stdId" >Student Id</label><span class="error">*</span><br/>
			<span class="error" ><?php echo $stdIdErr."<br/>"; ?></span>
			<input type="text" name="stdId" id="stdId" required />
			<br/><br/>
			<label for="stdName" >Student Name</label><span class="error">*</span><br/>
			<span class="error"><?php echo $stdNameErr."<br/>"; ?></span>
			<input type="text" name="stdName" id="stdName" required/>
			<br/><br/>
			<label for="">Gender</label><span class="error">*</span><br/>
			<span class="error"><?php echo $stdGenderErr."<br/>"; ?></span><br/>
			<input type="checkbox" name="gender1" value="Male" id="gender1" />
			<label for="gender1" >Male</label><br>
			<input type="checkbox" name="gender2" value="Female" id="gender2" />
			<label for="gender2">Female</label><br>
			<br/><br/>
			<label for="email">Student Email</label><span class="error">*</span></br>
			<span class="error"><?php echo $stdEmailErr."<br/>"; ?></span>
			<input type="text" name="stdEmail" id="email" value="" placeholder="@"/>
			<br/><br/>
			<label>Address</label><span class="error">*</span></br>
			<span class="error"><?php echo $stdAddressErr."<br/>"; ?></span>
			<textarea name="address" cols="34" rows="1" id="streetAddress" required ></textarea><br/>
			<small for="streetAddress" >Street Address</small></br>
			<textarea name="address2" cols="34" rows="1" ></textarea><br/>
			<small>Address Line 2</small></br>
			<input type="text" name="city" required /><br/>
			<span class="error"><?php echo $cityErr."<br/>"; ?></span>
			<small>City</small><span class="error">*</span><br/>
			<input type="text" name="state" required /><br/>
			<span class="error"><?php echo $stateErr."<br/>"; ?></span>
			<small>State/Provience/Region</small><span class="error">*</span><br/>
			<input type="text" name="zip" />
			<br/>
			<small>Zip/Postal Code</small>
			<br/>
			<select name="country" required  >
				<option name="country" value="" ></option>
				<option name="country" value="Bangladesh" >Bangladesh</option>
				<option name="country" value="India" >India</option>
				<option name="country" value="Pakistan" >Pakistan</option>
			</select>
			<span class="error"><?php echo $countryErr."<br/>"; ?></span>
			<small>Country</small><span class="error">*</span></br>
			<input type="submit" name="" value="Save Form" />
			
		</form>
	</body>
	<?php
		echo "Student Id: ".$stdId."<br>";
		echo "Student Id: ".$stdName."<br>";
		echo "Student Gender: ".$stdGender."<br>";
		echo "Email Address: ".$stdEmail."<br>";
		echo "Street Address: ".$stdAddress."<br>";
		echo "Address line2: ".$addressLine."<br>";
		echo "City: ".$city."<br>";
		echo "State/Provience/Region: ".$state."<br>";
		echo "Zip/Postal: ".$zip."<br>";
		echo "Country: ".$country."<br>";
	
	?>
</html>