

<?php
// Your PHP code and processing here

// Refresh the page after 3 seconds (adjust the value as needed)
$refreshDelay = 5;
header("refresh: $refreshDelay");

// The rest of your PHP code and HTML content
?>

<?php
include_once("session.php")
?>


<link rel="icon" href="modal\css1\images\favicon.ico" type="image" />


<!--time-->

<script>
setInterval(myTimer, 1000);
function myTimer() {
  const d = new Date();
  document.getElementById("demo").innerHTML = d.toLocaleTimeString();
}
</script>










<?php



if(isset($_POST['search']))
{
    $valueToSearch = $_POST['valueToSearch'];
	$query = "SELECT * FROM `member1` WHERE  CONCAT(`trackid`)LIKE '%".$valueToSearch."%'";
  //  $query = "SELECT * FROM `membertracking` WHERE  CONCAT(`mem_id`, `trackid`, `firstname`, `lastname`, `address`)LIKE '%".$valueToSearch."%'";
    $search_result = filterTable($query);
    
}
    else {
        $query ="SELECT * FROM `member1` ORDER BY mem_id DESC";
        $search_result = filterTable($query);
        
    }
    
    function filterTable($query)
    {
        $connect = mysqli_connect("localhost", "root", "@DavaosurDB2023", "db_transfer");
        $filter_Result = mysqli_query($connect, $query);
        return $filter_Result;
    }
        
    
    

?>






















<!DOCTYPE html>
<html lang="en">
	<head>
  <title>Project DavaoSur - Del.S.U.R  </title>
<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1"/>

<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
	
		<meta name="viewport" content="width=device-width, initial-scale=1">

		
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<!--edit-->

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<!--send-->

<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">





<!--header-->

<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>











<!--notificion-->

<style>
body {
  font-family: Arial, Helvetica, sans-serif;
}

.notification {
  background-color: #555;
  color: white;
  text-decoration: none;
  padding: 4px 6px;
  position: relative;
  display: inline-block;
  border-radius: 6px;
}

.notification:hover {
  background: Yellow;
}

.notification .badge {
  position: absolute;
  top: -10px;
  right: -10px;
  padding: 5px 10px;
  border-radius: 50%;
  background-color: red;
  color: white;
}
</style>



<style>
.dropbtn {
  background-color: #04AA6D;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 80px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 6px 8px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #ddd;}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {background-color: #3e8e41;}
</style>
	

	
<style>
* {
  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;
}

/* Float four columns side by side */
.column {
  float: left;
  width: 30%;
  padding: 0 10px;
}

/* Remove extra left and right margins, due to padding */
.row {margin: 0 -5px;}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive columns */
@media screen and (max-width: 600px) {
  .column {
    width: 100%;
    display: block;
    margin-bottom: 20px;
  }
}

/* Style the counter cards */
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  padding: 16px;
  text-align: center;
  background-color: #f1f1f1;
}
</style>









	
	
	
	</head>
  <body style="height:1500px">



<div class="container">




</div>


<nav class="navbar navbar-inverse navbar-fixed-top">
    <!--<nav class="navbar navbar-inverse">-->
    <div class="container-fluid">
        <div class="navbar-header">

        <img src="davsur2.png" width="200" height="50">
        </div>
    <ul class="nav navbar-nav navbar-right">
	<li><a href="#"> <font color="White" size="4"><B><p id="demo"></p></B> </font></a></li>
     		
  <li><a href="#"> <font color="White" size="4"><B><i class="fa fa-fw fa-user"></i>   <span class="nav-profile-name"><?php echo $_SESSION['username'];?> </span></B></font></a></li>
	  
	 
	 
  <li> <a href="http://202.137.126.58"><font color="White" size="4"><B>Home</B></font></a></li>
    </ul>

  </div>
</nav>

		<br><br><br><br>
<center><font size="5"> 
		 <B>Office of the Division Records</B> <br>
		 <B>Now Serving</B>
		 </font></center>
	
	

	<br>

<center>
<!--<h2>Responsive Column Cards</h2>
<p>Resize the browser window to see the effect.</p>-->

<div class="row">
  <div class="column">
    <div class="card">
      <h3><B>Window 1</B></h3>
	  <p>New Transaction</p>
     
	<form action="indexqueue.php" method="post" enctype="multipart/form-data">
        
	

		<table class="table table-bordered">

			<thead class="alert-info">
				<tr>
					<th>Transaction_ID on queue</th>	

				</tr>
			</thead>
			<tbody>
				
			<?php
					require'conn.php';
					$query=mysqli_query($conn, "SELECT * FROM `member1` ORDER BY mem_id ASC") or die(mysqli_error());
					while($fetch=mysqli_fetch_array($query)){
				?>
				<tr>
					<td><?php echo $fetch['trackid']?></td>
					
	</tr>
				<?php
					}
				?>
			</tbody>

		</table>
		</form>
    </div>
  </div>

  <div class="column">
    <div class="card">
     <h3> <B>Window 2</B></h3>
	  <p>Claim</p>
	<form action="indexqueue.php" method="post" enctype="multipart/form-data">
        
	

		<table class="table table-bordered">

			<thead class="alert-info">
				<tr>
					<th>Transaction_ID on queue</th>	

				</tr>
			</thead>
			<tbody>
				
			<?php
					require'conn.php';
					$query=mysqli_query($conn, "SELECT * FROM `memberclaim` ORDER BY mem_id ASC") or die(mysqli_error());
					while($fetch=mysqli_fetch_array($query)){
				?>
				<tr>
					<td><?php echo $fetch['trackid']?></td>
					
	</tr>
				<?php
					}
				?>
			</tbody>

		</table>
		</form>
    </div>
  </div>
  
		
  <div class="column">
    <div class="card">
     <h3> <B>Window 3</B></h3>
	  <p>_________</p>
	<form action="indexqueue.php" method="post" enctype="multipart/form-data">
        
	

		<table class="table table-bordered">

			<thead class="alert-info">
				<tr>
					<th>Transaction_ID on queue</th>	

				</tr>
			</thead>
			<tbody>
				
			<?php
					require'conn.php';
					$query=mysqli_query($conn, "SELECT * FROM `applicant` ORDER BY mem_id ASC") or die(mysqli_error());
					while($fetch=mysqli_fetch_array($query)){
				?>
				<tr>
					<td><?php echo $fetch['trackid']?></td>
					
	</tr>
				<?php
					}
				?>
			</tbody>

		</table>
		</form>
    </div>
  </div>
  












  </center>
  
</div>












						






















<script src="js/jquery-3.2.1.min.js"></script>	
<script src="js/bootstrap.js"></script>	
</body>	
</html>



<script type="text/javascript">
		function generateTrackingID(){
			const d = new Date();
			var month = d.getMonth();
			var year = d.getFullYear();
			var day = d.getDate();
			var inputF = document.getElementById("trackid");
			var inputD = document.getElementById("datetoday");
			//var inputT = document.getElementById("datetoday");

			inputF.setAttribute('value', year+"-"+(month+1)+""+(day)+"-"+(Math.floor(Math.random()*100000)+1));

			inputD.setAttribute('value', year+"-"+(month+1)+"-"+(day)+"-"+d.getHours()+":"+d.getMinutes());
			//inputT.setAttribute('value', year+"-"+(month+1)+"-"+(day)+"-"+d.getHours()+":"+d.getMinutes());

			//inputF.setAttribute('value', 'Marlon');
		}			
</script>

