<?php
$uname = "root";
$dbpass = "";
$host = "localhost";
$db = "db_transfer";


$conn = mysqli_connect("$host", "$uname","$dbpass","$db") or die ("DB Connection Error");


?>

<?php
	$conn=mysqli_connect("localhost", "root", "", "db_transfer");
	
	if(!$conn){
		die("Error: Failed to connect to database!");
	}
?>