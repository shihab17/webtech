<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "webtech";

$conn = new mysqli($servername, $username, $password, $dbname);

if($conn -> connect_error) {
	die("Error in db connection: " . $conn -> connect_error);
}

?>