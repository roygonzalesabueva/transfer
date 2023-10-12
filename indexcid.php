
<?php
// Your PHP code and processing here

// Refresh the page after 3 seconds (adjust the value as needed)
$refreshDelay = 15;
header("refresh: $refreshDelay");

// The rest of your PHP code and HTML content
?>

<?php
include_once("session.php")
?>
<link rel="icon" href="modal\css1\images\favicon.ico" type="image" />





<?php



if(isset($_POST['search']))
{
    $valueToSearch = $_POST['valueToSearch'];
	$query = "SELECT * FROM `membercid` WHERE  CONCAT(`trackid`)LIKE '%".$valueToSearch."%'";
  //  $query = "SELECT * FROM `membertracking` WHERE  CONCAT(`mem_id`, `trackid`, `firstname`, `lastname`, `address`)LIKE '%".$valueToSearch."%'";
    $search_result = filterTable($query);
    
}
    else {
        $query ="SELECT * FROM `membercid` ORDER BY mem_id ASC";
        $search_result = filterTable($query);
        
    }
    
    function filterTable($query)
    {
        $connect = mysqli_connect("localhost", "root", "@DavaosurDB2023", "db_transfer");
        $filter_Result = mysqli_query($connect, $query);
        return $filter_Result;
    }
        
    
    

?>







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
	

	
	
	
	
	
	
	
	</head>
    <body style="height:1500px">



<div class="container">




</div>






  <nav class="navbar navbar-inverse navbar-fixed-top">
    <!--<nav class="navbar navbar-inverse">-->
    <div class="container-fluid">
        <div class="navbar-header">

        <img src="davsur2.png" width="290" height="70">
        </div>
  
    <ul class="nav navbar-nav navbar-right">
    <li> <a href="#"><font color="White" size="4"><B> <p id="demo"></p> </B></font></a> </li>
    <li> <a href="chatcid.php"><font color="White" size="4"><B>Chat Room</B></font></a></li>
		
    <li>  
    <a href="indexclient_cid.php"> <i class="fa fa-bar-chart" style="font-size:18px"></i><font color="White" size="4"><B>Transaction Status</B></font></a>
          </li>
        
        <li><a href="#"> <font color="White" size="4"><B><i class="fa fa-fw fa-user"></i>   <span class="nav-profile-name"><?php echo $_SESSION['user'];?> </span></B></font></a></li>
      
     
      <li> <a href="logout.php"><font color="White" size="4"><B>Logout</B></font></a></li>
    </ul>

  </div>
</nav>


<br><br><br><br>

		
	

         <div class="col-md-3"></div>
	<!--  <div class="col-md-20 well">-->
	<center><h3 class="text-primary"><B>Office of the Curriculum Implementation Division</B></h3></center>
		<hr style="border-top:1px dotted #ccc;"/>

		






		
<div class="col-md-1"></div>
		<div class="col-md-5">
		
		
			<div class="card-header">
					<div class="card-title">
					
					</div>	
			</div>
	


	<form action="indexcid.php" method="post" enctype="multipart/form-data">
                



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
						<th>Notification</th>
						<th>Action</th>
						<!-- <th>Update</th> -->
						
						
					</tr>
				</thead>
				<tbody>
				<?php while($fetch = mysqli_fetch_array($search_result)): ?>
					<tr>
					
					<td><?php echo $fetch['trackid']?></td>
					
						<td><?php echo $_SESSION['user'];?></td>
						<td><?php echo $fetch['lastname']?></td>
						
						
						
						<td><?php echo $fetch['section']?></td>
						
						
						
						<td><?php echo $fetch['address']?></td>
					<td><?php echo $fetch['date_created']?></td>


						<td>

						<div class="dropdown">
								<a href="#" class="notification"><i class="fa fa-bell-o" style="font-size:20px"></i><span class="badge">1</span></a>
						
							<div class="dropdown-content">

            <a onclick="record('<?php echo $fetch['mem_id']; ?>')" class=" btn btn-link"> <i class="fas fa-share"></i>Records</a>
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












  <!--<a href="transfercid_record.php?mem_id=<?php// echo $fetch['mem_id']?>">Records</a>
  <a href="transfercid_hrmo.php?mem_id=<?php //echo $fetch['mem_id']?>">HRMO</a>
    <a href="transfercid_sds.php?mem_id=<?php //echo $fetch['mem_id']?>">SDS</a>
    <a href="transfercid_asds.php?mem_id=<?php //echo $fetch['mem_id']?>">ASDS</a>
    <a href="transfercid_sgod.php?mem_id=<?php //echo $fetch['mem_id']?>">SGOD</a>
	<a href="transfercid_cid.php?mem_id=<?php //echo $fetch['mem_id']?>">CID</a>
	<a href="transfercid_dpsu.php?mem_id=<?php //echo $fetch['mem_id']?>">DPSU</a>
	<a href="transfercid_supply.php?mem_id=<?php// echo $fetch['mem_id']?>">Supply</a>
	<a href="transfercid_cashier.php?mem_id=<?php //echo $fetch['mem_id']?>">Cashier</a>
    <a href="transfercid_budget.php?mem_id=<?php //echo $fetch['mem_id']?>">Budget</a>
	<a href="transfercid_acct.php?mem_id=<?php //echo $fetch['mem_id']?>">Accounting</a>
    <a href="transfercid_legal.php?mem_id=<?php //echo $fetch['mem_id']?>">Legal</a>-->
  </div>
</div>

</td>			
<!-- <td>

<center><a href="del_cid.php?mem_id=<?php //echo $fetch['mem_id']?>"><i class="fa fa-trash" style='font-size:16px;color:Blue'><font size="4"><B>Del</B></font></i></a></center>


</td> -->


<td>
<!-- <a href="edit_cid.php?mem_id=<?php //echo $fetch['mem_id']?>"><i class="fa fa-edit" style="font-size:16px;color:Blue"><font size="4"><B>Update</B></font></i></a> -->
<a class=" btn btn-sm btn-success" href="edit_cid.php?mem_id=<?php echo $fetch['mem_id']?>" ><i class="fa fa-edit" ></i>Update</a>
		



								
				 	</td>
						
						
						
					</tr>
					<?php endwhile;?>
				</tbody>
			</table>
		</div>














		</div>
	</div>









<!-- SUpply alert -->

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.28/dist/sweetalert2.all.min.js"></script>







<script src="js/jquery-3.2.1.min.js"></script>	
<script src="js/bootstrap.js"></script>	






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
            window.location = ("transfercid_record.php?mem_id=" + data_id);   
            
            
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
            window.location = ("transfercid_hrmo.php?mem_id=" + data_id);   
            
            
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
            window.location = ("transfercid_sds.php?mem_id=" + data_id);   
            
            
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
            window.location = ("transfercid_asds.php?mem_id=" + data_id);   
            
            
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
            window.location = ("transfercid_sgod.php?mem_id=" + data_id);   
            
            
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
            window.location = ("transfercid_cid.php?mem_id=" + data_id);   
            
            
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
            window.location = ("transfercid_dpsu.php?mem_id=" + data_id);   
            
            
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
            window.location = ("transfercid_supply.php?mem_id=" + data_id);   
            
            
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
            window.location = ("transfercid_cashier.php?mem_id=" + data_id);   
            
            
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
            window.location = ("transfercid_budget.php?mem_id=" + data_id);   
            
            
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
            window.location = ("transfercid_acct.php?mem_id=" + data_id);   
            
            
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
            window.location = ("transfercid_legal.php?mem_id=" + data_id);   
            
            
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
