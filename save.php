<?php
	require_once'conn.php';
	
	if(ISSET($_POST['save'])){
		
		$trackid=$_POST['trackid'];
		$datetoday=$_POST['datetoday'];
		$firstname=$_POST['firstname'];
		$lastname=$_POST['lastname'];
		$section=$_POST['section'];
		$address=$_POST['address'];
		
		
		
		//mysqli_query($conn, "INSERT INTO `membertracking` VALUES ('', '$trackid', '$firstname', '$lastname', '', '$address')") or die(mysqli_error());
		mysqli_query($conn, "INSERT INTO `member1` VALUES ('', '$trackid', '$datetoday', '$firstname', '$lastname', '$section','$address')") or die(mysqli_error());
		mysqli_query($conn, "INSERT INTO `memberclient` (mem_id,trackid,firstname,lastname,section,address) VALUES('','$trackid','$firstname', '$lastname', '$section','$address')") or die(mysqli_error());
		
		echo"<script>confirm('Transactions Saved')</script>";
		header("location: http://202.137.126.59/transfer/index_trans.php");
		// header("refresh:1; url=index_trans.php");
		
	}
?>



	
	




