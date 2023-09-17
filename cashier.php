





<?php



if(isset($_POST['search']))
{
    $valueToSearch = $_POST['valueToSearch'];
	$query = "SELECT * FROM `membercashier` WHERE  CONCAT(`trackid`)LIKE '%".$valueToSearch."%'";
  //  $query = "SELECT * FROM `membertracking` WHERE  CONCAT(`mem_id`, `trackid`, `firstname`, `lastname`, `address`)LIKE '%".$valueToSearch."%'";
    $search_result = filterTable($query);
    
}
    else {
        $query ="SELECT * FROM `membercashier` ORDER BY mem_id DESC";
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
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #04AA6D;
  color: white;
}

.topnav-right {
  float: right;
}
</style>














</head>





<body>
 
<div class="topnav">

<center> <font color="Orange"><h2>Delivery System for Unified Records (Del. S.U.R)</h2></font><center>
  <!--<a class="active" href="#"></a>
  <a href="#"></a>
  <a href="#"></a>
  <div class="topnav-right">
    <a href="#"></a>
    <a href="#"></a>
  </div>-->
</div>

<div style="padding-left:16px">
 <center> <h2>Human Resource Management Office</h2><center>

</div>






















<!--  Downlod-->

<div class="col-md-1"></div>
		<div class="col-md-5">
		
		<div class="card">
			<div class="card-header">
					<div class="card-title">
					<h3></h3>
					</div>	
			</div>
	<div class="card-body">









	

	

				<table class="table table-bordered">

<form action="cashier.php" method="post" enctype="multipart/form-data">
                



                    <input type="text" name="valueToSearch"> 
            
            <input type="submit" name="search" value="Search"> 
            


        </form>


                
		<thead class="alert-info">
    <th>Tracking_ID</th>
					
          <th>Carrier/School</th>
          <th>File_Type/Name</th>
          <th>Office/Section</th>
          <th>Purpose</th>
          <th>Date_Forwarded</th>
          <th>Forward_to_Records</th>
          <th>Action</th>

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

						<div class="dropdown">
							<a href="#" class="notification">Message<span class="badge">1</span></a>
							<!--<button ><i class="material-icons" style='font-size:16px;color:red'">send</i></button>-->
							
  <div class="dropdown-content">
  <a href="transferrecord.php?mem_id=<?php echo $fetch['mem_id']?>">Records</a>
  <a href="transfer.php?mem_id=<?php echo $fetch['mem_id']?>">HRMO</a>
    <a href="transfersds.php?mem_id=<?php echo $fetch['mem_id']?>">SDS</a>
    <a href="transferasds.php?mem_id=<?php echo $fetch['mem_id']?>">ASDS</a>
    <a href="transfersgod.php?mem_id=<?php echo $fetch['mem_id']?>">SGOD</a>
	<a href="transferscid.php?mem_id=<?php echo $fetch['mem_id']?>">CID</a>
	<a href="transferdpsu.php?mem_id=<?php echo $fetch['mem_id']?>">DPSU</a>
	<a href="transfersupply.php?mem_id=<?php echo $fetch['mem_id']?>">Supply</a>
	<a href="transfercashier.php?mem_id=<?php echo $fetch['mem_id']?>">Cashier</a>
	<a href="transferbudget.php?mem_id=<?php echo $fetch['mem_id']?>">Budget</a>
	<a href="transferacct.php?mem_id=<?php echo $fetch['mem_id']?>">Accounting</a>
    <a href="transferlegal.php?mem_id=<?php echo $fetch['mem_id']?>">Legal</a>
  </div>
</div>
</td>			
<td>
<!--<button class="btn"><i class="fa fa-trash"></i> Trash</button>-->
<cemter><a href="delcashier.php?mem_id=<?php echo $fetch['mem_id']?>"><i class="fa fa-trash" style='font-size:20px;'></i>Del</a></center>


</td>		



                    </tr>
 <?php endwhile;?>


                   
                </tbody>

            </table>


        

<!--  end Downlod-->






     </div>
 </body>
</html>


