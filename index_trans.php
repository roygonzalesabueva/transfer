













<link rel="icon" href="modal\css1\images\favicon.ico" type="image" />






<?php
$conn = mysqli_connect("localhost","root","@DavaosurDB2023","db_transfer");
$sql = "SELECT * FROM `member1` ORDER BY mem_id ASC";
$result = mysqli_query($conn,$sql);
?>

























<?php



if(isset($_POST['search']))
{
    $valueToSearch = $_POST['valueToSearch'];
	$query = "SELECT * FROM `member1` WHERE  CONCAT(`trackid`)LIKE '%".$valueToSearch."%'";
  //  $query = "SELECT * FROM `membertracking` WHERE  CONCAT(`mem_id`, `trackid`, `firstname`, `lastname`, `address`)LIKE '%".$valueToSearch."%'";
    $search_result = filterTable($query);
    
}
    else {
        $query ="SELECT * FROM `member1` ORDER BY mem_id ASC";
        $search_result = filterTable($query);
        
    }
    
    function filterTable($query)
    {
        $connect = mysqli_connect("localhost", "root", "@DavaosurDB2023", "db_transfer");
        $filter_Result = mysqli_query($connect, $query);
        return $filter_Result;
    }
        
    
    

?>














<!--time-->

<script>
setInterval(myTimer, 1000);
function myTimer() {
  const d = new Date();
  document.getElementById("demo").innerHTML = d.toLocaleTimeString();
}
</script>










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
  width: 100%;
  padding: 0 10px;
  
}

/* Remove extra left and right margins, due to padding */
.row {margin: 0 60px;}

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
	column-align: center;
  }
}

/* Style the counter cards */
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  padding: 16px;
  text-align:Left;
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
  <!--  <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Page 1 <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#">Page 1-1</a></li>
          <li><a href="#">Page 1-2</a></li>
          <li><a href="#">Page 1-3</a></li>
        </ul>
      </li>
      <li><a href="#">Page 2</a></li>
    </ul>-->
    <ul class="nav navbar-nav navbar-right">
    <li> <a href="#"><font color="White" size="4"><B> <p id="demo"></p> </B></font></a> </li>
		
	<li>  
	<a href="http://202.137.126.59/transfer/indexclient.php"> <i class="fa fa-bar-chart" style="font-size:18px"></i><font color="White" size="4"><B>Transaction Status</B></font></a>
        </li>
			
       
	 
	
		<li> <a href="http://202.137.126.58"><font color="White" size="4"><B>Home</B></font></a></li>
    </ul>

  </div>
</nav>


<br><br><br><br>

<div class="row">
  <div class="column">
    <div class="card">
		
			
	
		<br>
	

	
<center>

     <button class="btn btn-primary" onclick="generateTrackingID()" onclick="window.location.reload()"  type="button" data-toggle="modal" data-target="#form_modal"> <font size="5"> <B>Create New Transaction</B></font></button>
    
   

  
  
 
  
      <button class="btn btn-primary" onclick="generateTrackingID()" type="button" data-toggle="modal" data-target="#form_modal2"><font size="5"> <B>Claim</font></B> </button>
   

		
</center>







				
	

	
	
	

	

	

	<form action="index_trans.php" method="post" enctype="multipart/form-data">
                

	<input type="text" name="valueToSearch" placeholder="Search ID.."> 
		
		<!--<input type="submit" name="search" value="Search"> -->
		
		<button type="submit" name="search" value="Search"><i class="fa fa-search"></i>Search</button>
		
		


	</form>
	



			<table class="table table-bordered">




			






				<thead class="alert-info">
					<tr>
					
						<th>Transaction_ID</th>
					
						<th>Sender/Client</th>
						<th>Transaction/Description</th>
						<th>Receiver</th>
						<th>Remarks/Status</th>
						<th>Date/Time</th>
						
						
						<th>Update</th>
						
		
	
						

					</tr>
				</thead>
				<tbody>
				


<?php while($fetch = mysqli_fetch_array($search_result)): ?>
					<tr>
						<td><?php echo $fetch['trackid']?></td>
						
						<td><?php echo $fetch['firstname']?></td>
						<td><?php echo $fetch['lastname']?></td>
						
							
						<td><?php echo $fetch['section']?></td>


						
						<td><?php echo $fetch['address']?></td>
						<td><?php echo $fetch['date_created']?></td>
						
						
	

<td>
				


<a type="button" class="btn btn-success" href="edit_indextrans.php?mem_id=<?php echo $fetch['mem_id']?>"><i class="fa fa-edit"
                                    style='font-size:16px;color:White'>
                                    <font size="4"><B>Edit
                               </B></font>
                               </i></a>






								
				 	</td>
	







						
					</tr>
					<?php endwhile;?>
				</tbody>

			</table>

		</div></center>




		<div>


		<div>

		<div>















<div class="modal fade" aria-hidden="true" id="form_modal">
	<div class="modal-dialog">
		<div class="modal-content">
			<form method="POST" action="save.php">
				<div class="modal-header">
					<h3 class="modal-title">New Transaction</h3>
				</div>
				<div class="modal-body">
					<div class="col-md-2"></div>
					<div class="col-md-8">

					

						<div class="form-group">
							<label>Transaction_ID </label>
							<input type="text" id="trackid" name="trackid" class="form-control" required="required" readonly/>
						</div>
						<div class="form-group">
							<label>Date/Time</label>
							<input type="text" id="datetoday" name="datetoday" class="form-control" required="required" readonly/>
						</div>
						<div class="form-group">
							<label>Sender/Client</label>
							<input type="text" name="firstname" class="form-control" required="required"/>
						</div>


						<div class="form-group">
							<label>Transaction/Description</label>
							<input type="text" name="lastname" class="form-control" required="required"/>
						</div>


						
						


						  <div class="form-group">
							<label>Receiver</label>

							
							<select id="country" name="section" class="form-control" required="required">
									<option value="Records">Records</option>
								<!--	<option value="SDS">SDS</option>
									<option value="ASDS">ASDS</option>
									<option value="SGOD">SGOD</option>
									<option value="CID">CID</option>
									<option value="HRMO">HRMO</option>
									<option value="ACCOUNTING">ACCOUNTING</option>-->
						</select>

						
						</div>


						<div class="form-group">
							<label>Remarks/Status</label>
							<input type="text" name="address" class="form-control" />
						</div>



					</div>
				</div>
				<br style="clear:both;"/>
				<div class="modal-footer">
					<button type="button" class="btn btn-danger" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Close</button>
					<button  class="btn btn-primary" name="save"  ><span class="glyphicon glyphicon-save"></span> Submit</button>
					




				</div>
			</form>
		</div>
	</div>
</div>	











<!--Claim-->
<div class="modal fade" aria-hidden="true" id="form_modal2">
	<div class="modal-dialog">
		<div class="modal-content">
			<form method="POST" action="saveclaim.php">
				<div class="modal-header">
					<h3 class="modal-title">Claim</h3>
				</div>
				<div class="modal-body">
					<div class="col-md-2"></div>
					<div class="col-md-8">
						<div class="form-group">
							<label>Transaction_ID </label>
							<input type="text" id="trackid" name="trackid" class="form-control" required="required"/>
						</div>
						



						<div class="form-group">
							<label>Remarks/Status</label>
							<select  type="text" name="address" class="form-control" required="required"/>
						
							<!--<select type="text" name="address" value="<?php  echo $address;    ?>">-->
 
 <!--    <option type="text" name="address" value="<?php  echo $address;?>"</option> -->  
						 <option value="Claimed">Claimed</option>
	  					
	   
						 </select>








					</div>
				</div>
				<br style="clear:both;"/>
				<div class="modal-footer">
					<button type="button" class="btn btn-danger" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Close</button>
					<button  class="btn btn-primary" name="save2"><span class="glyphicon glyphicon-save"></span> Submit</button>
			




				</div>
			</form>
		</div>
	</div>
</div>	








<!--modal-->
<!--

<div class="container">
  <h2>Office of Division Records</h2>
  <h2>is Now Serving You</h2>
   Trigger the modal with a button -->
 <!-- <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Modal</button>-->

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4><B>Office of Division Records</B></h4>
  <h4>is now serving. Please save your tracking ID number.</h4>
        </div>
		
        <div class="modal-body">

		<table class="table table-bordered">
				<thead class="alert-info">
					<tr>
						<th>Transaction_ID</th>
					</tr>
				</thead>
				<tbody>
					<?php
						require'conn.php';
						$query=mysqli_query($conn, "SELECT * FROM `serving`") or die(mysqli_error());
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
        </div>


        <div class="modal-footer">
	<!--	<cemter><a href="del.php?mem_id=<?php echo $fetch['mem_id']?>"><i class="fa fa-trash" style='font-size:20px;'></i>Del</a></center>-->
		
		
      <!--   <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>-->
		  
        </div>
      </div>
      
    </div>
  </div>
  
</div>





<script>
        function refreshPage() {
            // This JavaScript function will be executed when the button is clicked.
            location.reload(); // This will reload the current page.
        }
    </script>





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

