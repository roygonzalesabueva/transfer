<?php
$con = mysqli_connect("localhost","root","@DavaosurDB2023","db_transfer");
$sql = "select distinct mem_id from member1 order by  mem_id";
$result = mysqli_query($con,$sql);
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
<title>Del.S.U.R | Division of Davao del Sur </title>
	<meta charset="utf-8">
	<title></title>
	</head>
	<body>
	<form class="" action="fpdfdemo2.php" method="post" target="_blank">
	<select class="" name="mem_id">
	<?php
	while($rows =mysqli_fetch_array($result)){
		echo '<option value="'.$rows["mem_id"].'">'.$rows["mem_id"].'</option>';
	}
	
	
	?>
	
	
	</select>
	
	<button type="submit" name="button">Generate report</button>
	</form>
	</body>
	</html>
	