<?php
	require_once'conn.php';
	
	if(ISSET($_REQUEST['mem_id'])){
		$mem_id=$_REQUEST['mem_id'];
		
		$query=mysqli_query($conn, "SELECT * FROM `memberbudget` WHERE `mem_id`='$mem_id'") or die(mysqli_error());
		$fetch=mysqli_fetch_array($query);
		
		$trackid=$fetch['trackid'];
		$firstname=$fetch['firstname'];
		$lastname=$fetch['lastname'];
		$section=$fetch['section'];
		$address=$fetch['address'];
		
		
		//mysqli_query($conn, "INSERT INTO `membertracking` VALUES('','$trackid','$firstname', '$lastname', '', '$address')") or die(mysqli_error());
		mysqli_query($conn, "INSERT INTO `membersds` (mem_id,trackid,firstname,lastname,section,address) VALUES('','$trackid','$firstname', '$lastname', '$section','$address')") or die(mysqli_error());
		mysqli_query($conn, "INSERT INTO `memberclient` (mem_id,trackid,firstname,lastname,section,address) VALUES('','$trackid','$firstname', '$lastname', '$section','$address')") or die(mysqli_error());
		//mysqli_query($conn, "INSERT INTO `membertracking` (mem_id,trackid,firstname,lastname,section,address) VALUES('','$trackid','$firstname', '$lastname', '$section','$address')") or die(mysqli_error());
		mysqli_query($conn, "DELETE FROM `memberbudget` WHERE `mem_id`='$mem_id'") or die(mysqli_error());
		
		echo"<script>alert('Data successfully transfer')</script>";
		echo"<script>window.location='indexbudget.php'</script>";
		header("refresh:1; indexsds.php");
	}
?>