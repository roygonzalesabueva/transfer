<?php
// Your PHP code and processing here

// Refresh the page after 3 seconds (adjust the value as needed)
$refreshDelay = 10;
header("refresh: $refreshDelay");

// The rest of your PHP code and HTML content
?>

<?php
include_once("session.php")
?>




<link rel="icon" href="modal\css1\images\favicon.ico" type="image" />


<?php
// Your PHP code and processing here

// Refresh the page after 3 seconds (adjust the value as needed)
$refreshDelay = 15;
header("refresh: $refreshDelay");

// The rest of your PHP code and HTML content
?>


<?php



if(isset($_POST['search']))
{
    $valueToSearch = $_POST['valueToSearch'];
	$query = "SELECT * FROM `memberrecord` WHERE  CONCAT(`trackid`)LIKE '%".$valueToSearch."%'";
  //  $query = "SELECT * FROM `membertracking` WHERE  CONCAT(`mem_id`, `trackid`, `firstname`, `lastname`, `address`)LIKE '%".$valueToSearch."%'";
    $search_result = filterTable($query);
    
}
    else {
        $query ="SELECT * FROM `memberrecord` ORDER BY mem_id DESC";
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
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
	
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


<!--send-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">





<!--header-->

<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>




<!--header-->

<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>





<!--supply allert-->

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.28/dist/sweetalert2.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">







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
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
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
  width: 18%;
  padding: 0 4px;
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


    <li>    <div class="dropdown"><font color="BLUE" size="4"><i class="fa fa-cog"></i> SECTIONS</font>
						
							<div class="dropdown-content">

              <a href="index.php">Admin</a>
              <a href="indexrecord.php">Records</a>
              <a href="indexgaso.php">GASO</a>
              <a href="indexsds.php">SDS</a>
              <a href="indexasds.php">ASDS</a> 
              <a href="indexhrmo.php">HRMO</a>
              <a href="indexcid.php">CIS</a>
              <a href="indexsgod.php">SGOD</a>
              <a href="indexsupply.php">Supply</a>
              <a href="indexlegal.php">Legal</a>
              <a href="indexcashier.php">Cashier</a>
              <a href="indexdpsu.php">DPSU</a> 
              <a href="indexacct.php">Accounting</a>
              <a href="indexbudget.php">Budget</a>
              <a href="indexqueue.php">Queue</a>
              <a href="index_trans.php">New Transaction / Claim</a>
             
</div></li> 

    

    
    <li> <a href="#"><font color="White" size="4"><B> <p id="demo"></p> </B></font></i></a> </li>
    <li> <a href="chatrecord.php"><font color="White" size="4"><B>Chat Room</B></font></a></li>
    <li>  
    <a href="indexclient_record.php"> <i class="fa fa-bar-chart" style="font-size:18px"></i><font color="White" size="4"><B>Transaction Status</B></font></a>
          </li>
        
        <li><a href="#"> <font color="White" size="4"><B><i class="fa fa-fw fa-user"></i>   <span class="nav-profile-name"><?php echo $_SESSION['username'];?> </span></B></font></a></li>
      
     
      
        <li> <a href="http://202.137.126.58"><font color="White" size="4"><B>Home</B></font></a></li>
    </ul>


    

  </div>
</nav>

<br><br><br>
<center><h2> <B>RELEASING SECTION </B></h2></center>
<br>
  



		



		



       
<!-- 

<div class="row"> -->
  <!-- <div class="column">
    <div class="card">
      <h3>Window 2</h3>
      <p>Claim</p>
     
         
        
        
         
        
	



			<table class="table table-bordered">




			






				<thead class="alert-info">
					<tr>
						<th>Transaction_ID on queue</th>
          <th>Action</th>
					
						
		
	
						

					</tr>
				</thead>
				<tbody>

        <?php



require'conn.php';
$query=mysqli_query($conn, "SELECT * FROM `memberclaim` ORDER BY mem_id ASC ") or die(mysqli_error());
while($fetch=mysqli_fetch_array($query)){

 


?>
					
       
        
					<tr>
						<td><?php echo $fetch['trackid']?></td>

            
            
						
						
				<td>
            <a href="del_record_claim.php?mem_id=<?php echo $fetch['mem_id']?>">Claimed</a>
            </td>
						
					</tr>
         


          <?php
						}

         
					?>

				</tbody>

			</table>
    </div>
  </div>
 -->



<!-- 

  <div class="column"> -->
   
	

  <div class="col-md-1"></div>
		<div class="col-md-5">
		
		
			<div class="card-header">
					<div class="card-title">
					
					</div>	
			</div>



  <form action="indexrecord.php" method="post" enctype="multipart/form-data">
                



	<input type="text" name="valueToSearch" placeholder="Search ID.."> 
		
		<!--<input type="submit" name="search" value="Search"> -->
		
		<button type="submit" name="search" value="Search"><i class="fa fa-search"></i>Search</button>
		
        
        
          </form>



	
          <form class="" action="printclient.php" method="post" target="_blank">

	

	
<input type="text"  name="trackid">
<!-- <input type="submit" name="search"  value="Print"> -->
 <button type="submit" name="search" value="Print"><span class="glyphicon glyphicon-print"></span>    Print </button>

<!--<select class="" name="trackid">-->




</form>






			<table class="table table-bordered">
				<thead class="alert-info">
					<tr>
					
					<th>Transaction_ID</th>
					
					<th>Sender</th>
                        <th>Transaction/Description</th>
						<th>Receiver</th>
						<th>Remarks/Status</th>
						<th>Date/Time</th>
						<th>Notification</th>
						
						<th>Update</th>
						<th>Action</th>
            <th>Delete</th>
						
					</tr>
				</thead>
				<tbody>
					
       
        <?php while($fetch = mysqli_fetch_array($search_result)): ?>

          
					<tr>
					
					<td><?php echo $fetch['trackid']?></td>
					<!-- <td><?php echo $_SESSION['username'];?></td> -->
						<td><?php echo $fetch['firstname']?></td>
						<td><?php echo $fetch['lastname']?></td>
						
						
						
						<td><?php echo $fetch['section']?></td>
						
						
						
						<td><?php echo $fetch['address']?></td>
					<td><?php echo $fetch['date_created']?></td>


						<td>

            <div class="dropdown">
								<a href="#" class="notification"><i class="fa fa-bell-o" style="font-size:20px"></i><span class="badge">1</span></a>
						
							<div class="dropdown-content">


              <a onclick="record('<?php echo $fetch['mem_id']; ?>')" class=" btn btn-link"> <i class="fas fa-share"></i>Records</a>
              <a onclick="gaso('<?php echo $fetch['mem_id']; ?>')" class=" btn btn-link"> <i class="fas fa-share"></i>GASO</a>
             
              <a onclick="hrmo('<?php echo $fetch['mem_id']; ?>')" class=" btn btn-link"> <i class="fas fa-share"></i>HRMO</a>
              <a onclick="sds('<?php echo $fetch['mem_id']; ?>')" class=" btn btn-link"> <i class="fas fa-share"></i>SDS</a>
              <a onclick="asds('<?php echo $fetch['mem_id']; ?>')" class=" btn btn-link"> <i class="fas fa-share"></i>ASDS</a>
              <a onclick="sgod('<?php echo $fetch['mem_id']; ?>')" class=" btn btn-link"> <i class="fas fa-share"></i>SGOD</a>
              <a onclick="cid('<?php echo $fetch['mem_id']; ?>')" class=" btn btn-link"> <i class="fas fa-share"></i>CID</a>

              <a onclick="dpsu('<?php echo $fetch['mem_id']; ?>')" class=" btn btn-link"> <i class="fas fa-share"></i>DPSU</a>
              <a onclick="supply('<?php echo $fetch['mem_id']; ?>')" class=" btn btn-link"> <i class="fas fa-share"></i>Supply</a>
              <a onclick="cashier('<?php echo $fetch['mem_id']; ?>')" class=" btn btn-link"> <i class="fas fa-share"></i>Cashier</a>
              <a onclick="budget('<?php echo $fetch['mem_id']; ?>')" class=" btn btn-link"> <i class="fas fa-share"></i>Budget</a>
              <a onclick="acctg('<?php echo $fetch['mem_id']; ?>')" class=" btn btn-link"> <i class="fas fa-share"></i>Accounting</a>
              <a onclick="legal('<?php echo $fetch['mem_id']; ?>')" class=" btn btn-link"> <i class="fas fa-share"></i>Legal</a>



 
  </div>
</div>

</td>			

<td>
							
<!-- <a class="btn btn-success" href="edit_record.php?mem_id=<?php// echo $fetch['mem_id']?>"><i class="fa fa-edit" style="font-size:16px;color:White"><font size="4"><B>Update</B></font></i></a> -->
<a class=" btn btn-sm btn-success" href="edit_record.php?mem_id=<?php echo $fetch['mem_id']?>" ><i class="fa fa-edit" ></i>Update</a>
				

							


				 	</td>

           <td>
<!--<button class="btn"><i class="fa fa-trash"></i> Trash</button>-->
<!--<center><a href="del_record.php?mem_id=<?php //echo $fetch['mem_id']?>"><i class="fa fa-trash" style='font-size:16px;color:Blue'><font size="4"><B>Claimed</B></font></i></a></center>-->
<!-- <a type="button" class="btn btn-success" href="del_record.php?mem_id=<?php //echo $fetch['mem_id']?>">Claimed</a> -->
<a onclick="acceptrecord('<?php echo $fetch['mem_id']; ?>')" class=" btn btn-sm btn-success"> <i class="fa fa-check"></i>Accept</a>




</td>			
          







           <td>
<!--<button class="btn"><i class="fa fa-trash"></i> Trash</button>-->
<!--<center><a href="del_record.php?mem_id=<?php //echo $fetch['mem_id']?>"><i class="fa fa-trash" style='font-size:16px;color:Blue'><font size="4"><B>Claimed</B></font></i></a></center>-->
<!-- <a type="button" class="btn btn-success" href="del_record.php?mem_id=<?php //echo $fetch['mem_id']?>">Claimed</a> -->
<a onclick="delete_data('<?php echo $fetch['mem_id']; ?>')" class=" btn btn-sm btn-danger"> <i class="fas fa-solid fa-trash"></i>Claimed</a>




</td>



          
						
						
					</tr>
         

          <?php endwhile;?>




				</tbody>
			</table>
		<!-- </div>

		</div> -->








    </div>



		</div>
	</div>









<!-- SUpply alert -->

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.28/dist/sweetalert2.all.min.js"></script>






<script src="js/jquery-3.2.1.min.js"></script>	
<script src="js/bootstrap.js"></script>	


<!-- 
<a class="btn btn-link" href="transferrecord_record.php?mem_id=<?php //echo $fetch['mem_id']?>">Records</a>
  <a class="btn btn-link" href="transferrecord_hrmo.php?mem_id=<?php// echo $fetch['mem_id']?>">HRMO</a>
    <a class="btn btn-link" href="transferrecord_sds.php?mem_id=<?php //echo $fetch['mem_id']?>">SDS</a>
    <a class="btn btn-link" href="transferrecord_asds.php?mem_id=<?php //echo $fetch['mem_id']?>">ASDS</a>
    <a class="btn btn-link" href="transferrecord_sgod.php?mem_id=<?php //echo $fetch['mem_id']?>">SGOD</a>
	<a class="btn btn-link" href="transferrecord_cid.php?mem_id=<?php //echo $fetch['mem_id']?>">CID</a>
	<a class="btn btn-link" href="transferrecord_dpsu.php?mem_id=<?php //echo $fetch['mem_id']?>">DPSU</a>
	<a class="btn btn-link" href="transferrecord_supply.php?mem_id=<?php// echo $fetch['mem_id']?>">Supply</a>
	<a class="btn btn-link" href="transferrecord_cashier.php?mem_id=<?php// echo $fetch['mem_id']?>">Cashier</a>
    <a class="btn btn-link" href="transferrecord_budget.php?mem_id=<?php //echo $fetch['mem_id']?>">Budget</a>
	<a class="btn btn-link" href="transferrecord_acct.php?mem_id=<?php //echo $fetch['mem_id']?>">Accounting</a>
    <a class="btn btn-link" href="transferrecord_legal.php?mem_id=<?php //echo $fetch['mem_id']?>">Legal</a> -->


<!-- Supply alert -->
<script>

function acceptrecord(data_id) {
    Swal.fire({
        title: 'Are you sure?',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, I Accept it!',
        closeOnConfirm: false,
        closeOnCancel: false
    }).then((result) => {
        if (result.isConfirmed) {
            window.location = ("acceptrecord.php?mem_id=" + data_id);        
        }
    })
}
</script>











<!-- Supply alert -->
<script>

function delete_data(data_id) {
    Swal.fire({
        title: 'Are you sure?',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, Claimed it!',
        closeOnConfirm: false,
        closeOnCancel: false
    }).then((result) => {
        if (result.isConfirmed) {
            window.location = ("del_record.php?mem_id=" + data_id);        
        }
    })
}
</script>








<!-- Supply alert -->
<script>

function record(data_id) {
    Swal.fire({
        title: 'Are you sure?',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, transfer it!',
        closeOnConfirm: false,
        closeOnCancel: false
    }).then((result) => {
        if (result.isConfirmed) {
            window.location = ("transferrecord_record.php?mem_id=" + data_id);   
            
            
        }
    })
}
</script>




<!-- Supply alert -->
<script>

function gaso(data_id) {
    Swal.fire({
        title: 'Are you sure?',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, transfer it!',
        closeOnConfirm: false,
        closeOnCancel: false
    }).then((result) => {
        if (result.isConfirmed) {
            window.location = ("transferrecord_gaso.php?mem_id=" + data_id);   
            
            
        }
    })
}
</script>








<!-- Supply alert -->
<script>

function hrmo(data_id) {
    Swal.fire({
        title: 'Are you sure?',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, transfer it!',
        closeOnConfirm: false,
        closeOnCancel: false
    }).then((result) => {
        if (result.isConfirmed) {
            window.location = ("transferrecord_hrmo.php?mem_id=" + data_id);   
            
            
        }
    })
}
</script>



<!-- Supply alert -->
<script>

function sds(data_id) {
    Swal.fire({
        title: 'Are you sure?',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, transfer it!',
        closeOnConfirm: false,
        closeOnCancel: false
    }).then((result) => {
        if (result.isConfirmed) {
            window.location = ("transferrecord_sds.php?mem_id=" + data_id);   
            
            
        }
    })
}
</script>



<!-- Supply alert -->
<script>

function asds(data_id) {
    Swal.fire({
        title: 'Are you sure?',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, transfer it!',
        closeOnConfirm: false,
        closeOnCancel: false
    }).then((result) => {
        if (result.isConfirmed) {
            window.location = ("transferrecord_asds.php?mem_id=" + data_id);   
            
            
        }
    })
}
</script>


<!-- Supply alert -->
<script>

function sgod(data_id) {
    Swal.fire({
        title: 'Are you sure?',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, transfer it!',
        closeOnConfirm: false,
        closeOnCancel: false
    }).then((result) => {
        if (result.isConfirmed) {
            window.location = ("transferrecord_sgod.php?mem_id=" + data_id);   
            
            
        }
    })
}
</script>


<!-- Supply alert -->
<script>

function cid(data_id) {
    Swal.fire({
        title: 'Are you sure?',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, transfer it!',
        closeOnConfirm: false,
        closeOnCancel: false
    }).then((result) => {
        if (result.isConfirmed) {
            window.location = ("transferrecord_cid.php?mem_id=" + data_id);   
            
            
        }
    })
}
</script>

<!-- Supply alert -->
<script>

function dpsu(data_id) {
    Swal.fire({
        title: 'Are you sure?',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, transfer it!',
        closeOnConfirm: false,
        closeOnCancel: false
    }).then((result) => {
        if (result.isConfirmed) {
            window.location = ("transferrecord_dpsu.php?mem_id=" + data_id);   
            
            
        }
    })
}
</script>


<!-- Supply alert -->
<script>

function supply(data_id) {
    Swal.fire({
        title: 'Are you sure?',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, transfer it!',
        closeOnConfirm: false,
        closeOnCancel: false
    }).then((result) => {
        if (result.isConfirmed) {
            window.location = ("transferrecord_supply.php?mem_id=" + data_id);   
            
            
        }
    })
}
</script>


<!-- Supply alert -->
<script>

function cashier(data_id) {
    Swal.fire({
        title: 'Are you sure?',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, transfer it!',
        closeOnConfirm: false,
        closeOnCancel: false
    }).then((result) => {
        if (result.isConfirmed) {
            window.location = ("transferrecord_cashier.php?mem_id=" + data_id);   
            
            
        }
    })
}
</script>



<!-- Supply alert -->
<script>

function budget(data_id) {
    Swal.fire({
        title: 'Are you sure?',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, transfer it!',
        closeOnConfirm: false,
        closeOnCancel: false
    }).then((result) => {
        if (result.isConfirmed) {
            window.location = ("transferrecord_budget.php?mem_id=" + data_id);   
            
            
        }
    })
}
</script>



<!-- Supply alert -->
<script>

function acctg(data_id) {
    Swal.fire({
        title: 'Are you sure?',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, transfer it!',
        closeOnConfirm: false,
        closeOnCancel: false
    }).then((result) => {
        if (result.isConfirmed) {
            window.location = ("transferrecord_acct.php?mem_id=" + data_id);   
            
            
        }
    })
}
</script>


<!-- Supply alert -->
<script>

function legal(data_id) {
    Swal.fire({
        title: 'Are you sure?',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, transfer it!',
        closeOnConfirm: false,
        closeOnCancel: false
    }).then((result) => {
        if (result.isConfirmed) {
            window.location = ("transferrecord_legal.php?mem_id=" + data_id);   
            
            
        }
    })
}
</script>















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
