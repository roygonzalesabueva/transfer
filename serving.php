<!DOCTYPE html>
<html lang="en">
	<head>
	<title>Project DavaoSur - Del.S.U.R  </title>
<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1"/>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
	
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


<!--send-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

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
	

	
	
	
	
	
	
	
	</head>
<body>




















	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<a class="navbar-brand" href="index.php">Del. S.U.R</a>
		</div>
	</nav>
	<div class="col-md-3"></div>
	<!--  <div class="col-md-20 well">-->
		<h3 class="text-primary">Delivery System for Unified Records (Del. S.U.R)</h3>
		<hr style="border-top:1px dotted #ccc;"/>
		<center>
		<button class="btn btn-primary" onclick="generateTrackingID()" type="button" data-toggle="modal" data-target="#form_modal">Add Record</button>
		<!--<a href="transfer.php?mem_id=<?php echo $fetch['mem_id']?>" class="btn btn-primary"><span class="glyphicon glyphicon-arrow-right"></span></a>-->
		<a href="transfer.php?mem_id=<?php echo $fetch['mem_id']?>" class="btn btn-primary">RECORDS</a>
		<a href="transferhr.php?mem_id=<?php echo $fetch['mem_id']?>" class="btn btn-primary">HRMO</a>
		<a href="transfercashier.php?mem_id=<?php echo $fetch['mem_id']?>" class="btn btn-primary">Cashier</a>
		<a href="transferacct.php?mem_id=<?php echo $fetch['mem_id']?>" class="btn btn-primary">Accounting</a>
		<a href="transferbudget.php?mem_id=<?php echo $fetch['mem_id']?>" class="btn btn-primary">Budget</a>
		<a href="transferlegal.php?mem_id=<?php echo $fetch['mem_id']?>" class="btn btn-primary">Legal</a>
		<a href="transfersupply.php?mem_id=<?php echo $fetch['mem_id']?>" class="btn btn-primary">Supply</a>
</center>
		<br /><br />
		<div class="col-md-6">
			<table class="table table-bordered">
				<thead class="alert-info">
					<tr>
						<th>Tracking_ID</th>
					
						<th>Carrier/School</th>
						<th>File_Type/Name</th>
						<th>Office/Section</th>
						<th>Purpose</th>
						<th>Date Received</th>
						<th>Action</th>
						<th>Action</th>
						
						
						

					</tr>
				</thead>
				<tbody>
					<?php
						require'conn.php';
						$query=mysqli_query($conn, "SELECT * FROM `member1`") or die(mysqli_error());
						while($fetch=mysqli_fetch_array($query)){
					?>
					<tr>
						<td><?php echo $fetch['trackid']?></td>
						
						<td><?php echo $fetch['firstname']?></td>
						<td><?php echo $fetch['lastname']?></td>
						
							
						<td><?php echo $fetch['section']?></td>


						
						<td><?php echo $fetch['address']?></td>
						<td><?php echo $fetch['date_created']?></td>
						
						<td>

						<div class="dropdown">

						
 					 
							
							<a href="#" class="notification">Message<span class="badge">1</span></a>
							<!--<button ><i class="material-icons" style='font-size:16px;color:red'">send</i></button>-->
							
  <div class="dropdown-content">
  <a href="transferrecord.php?mem_id=<?php echo $fetch['mem_id']?>">Records</a>
  <a href="transfer.php?mem_id=<?php echo $fetch['mem_id']?>">HRMO</a>
    <a href="transfersds.php?mem_id=<?php echo $fetch['mem_id']?>">SDS</a>
    <a href="transferasds.php?mem_id=<?php echo $fetch['mem_id']?>">ASDS</a>

	
    <a href="transfersgod.php?mem_id=<?php echo $fetch['mem_id']?>">SGOD</a>
	<a href="#">CID</a>
	<a href="#">DPSU</a>
    <a href="#">Supply</a>
	<a href="#">Cashier</a>
    <a href="#">Budget</a>
	<a href="#">Accounting</a>
    <a href="#">Legal</a>
  </div>
</div>

				
<td>
<!--<button class="btn"><i class="fa fa-trash"></i> Trash</button>-->
<cemter><a href="del.php?mem_id=<?php echo $fetch['mem_id']?>"><i class="fa fa-trash" style='font-size:20px;'></i>Del</a></center>


</td>		
						</td>
					</tr>
					<?php
						}
					?>
				</tbody>

			</table>

		</div>




		



<br>



		<div class="col-md-1"></div>
		<div class="col-md-5">
		
		<div class="card">
			<div class="card-header">
					<div class="card-title">
					<h3>SGOD</h3>
					</div>	
			</div>
	<div class="card-body">



			<table class="table table-bordered">
				<thead class="alert-info">
					<tr>
					
					<th>Tracking_ID</th>
					
						<th>Carrier/School</th>
						<th>File_Type/Name</th>
						<th>Office/Section</th>
						<th>Purpose</th>
						<th>Date Received</th>
						<th>Action</th>
						<th>Action</th>
						
						
					</tr>
				</thead>
				<tbody>
					<?php



						require'conn.php';
						$query=mysqli_query($conn, "SELECT * FROM `membersgod` ORDER BY mem_id DESC ") or die(mysqli_error());
						while($fetch=mysqli_fetch_array($query)){
					?>
					<tr>
					
					<td><?php echo $fetch['trackid']?></td>
					
						<td><?php echo $fetch['firstname']?></td>
						<td><?php echo $fetch['lastname']?></td>
						
						
						
						<td><?php echo $fetch['section']?></td>
						
						
						
						<td><?php echo $fetch['address']?></td>
					<td><?php echo $fetch['date_created']?></td>


						<td>

<div class="dropdown">
<a href="#" class="notification">Message<span class="badge">1</span></a>

<!--<button > <i class="material-icons" style="font-size:18px" color:red">send</i></button>-->


<div class="dropdown-content">
<a href="transferrecord.php?mem_id=<?php echo $fetch['mem_id']?>">Records</a>
  <a href="transfer.php?mem_id=<?php echo $fetch['mem_id']?>">HRMO</a>
    <a href="transfersds.php?mem_id=<?php echo $fetch['mem_id']?>">SDS</a>
    <a href="transferasds.php?mem_id=<?php echo $fetch['mem_id']?>">ASDS</a>
<a href="#">CID</a>
<a href="#">SGOD</a>
<a href="#">DPSU</a>
<a href="#">Supply</a>
<a href="#">Cashier</a>
<a href="#">Budget</a>
<a href="#">Accounting</a>
<a href="#">Legal</a>
</div>
</div>


</td>

						
						
						
					</tr>
					<?php
						}
					?>
				</tbody>
			</table>
		</div>














		</div>
	</div>














<div class="modal fade" aria-hidden="true" id="form_modal">
	<div class="modal-dialog">
		<div class="modal-content">
			<form method="POST" action="save.php">
				<div class="modal-header">
					<h3 class="modal-title">Add Record</h3>
				</div>
				<div class="modal-body">
					<div class="col-md-2"></div>
					<div class="col-md-8">
						<div class="form-group">
							<label>Tracking_ID </label>
							<input type="text" id="trackid" name="trackid" class="form-control" required="required" readonly/>
						</div>
						<div class="form-group">
							<label>Date Received</label>
							<input type="text" id="datetoday" name="datetoday" class="form-control" required="required" readonly/>
						</div>
						<div class="form-group">
							<label>Carrier/School</label>
							<input type="text" name="firstname" class="form-control" required="required"/>
						</div>


						<div class="form-group">
							<label>File_Type/Name</label>
							<input type="text" name="lastname" class="form-control" required="required"/>
						</div>


						
						


						  <div class="form-group">
							<label>Office/Section</label>

							<input type="text" name="section" class="form-control" required="required"/>
						
						</div>


						<div class="form-group">
							<label>Purpose</label>
							<input type="text" name="address" class="form-control" required="required"/>
						</div>



					</div>
				</div>
				<br style="clear:both;"/>
				<div class="modal-footer">
					<button type="button" class="btn btn-danger" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Close</button>
					<button class="btn btn-primary" name="save"><span class="glyphicon glyphicon-save"></span> Save</button>
					<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Modal</button>





				</div>
			</form>
		</div>
	</div>
</div>	









<div class="container">
  <h2>Office oF Division Records</h2>
  <h2>Now Serving You</h2>
  <!-- Trigger the modal with a button -->
  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Modal</button>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4><B>Office of Division Records</B></h4>
  <h4>Now serving. Please save your tracking ID number.</h4>
        </div>
		
        <div class="modal-body">

		<table class="table table-bordered">
				<thead class="alert-info">
					<tr>
						<th>Tracking_ID</th>
					</tr>
				</thead>
				<tbody>
					<?php
						require'conn.php';
						$query=mysqli_query($conn, "SELECT * FROM `member1`") or die(mysqli_error());
						while($fetch=mysqli_fetch_array($query)){
					?>
					<tr>
					<font size="16">	<td><?php echo $fetch['trackid']?></td>	</font>

					</tr>
					



					<?php
						}
					?>
				</tbody>

			</table>
        </div>


        <div class="modal-footer">
		
         <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		  
        </div>
      </div>
      
    </div>
  </div>
  
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
