<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">










<?php



if(isset($_POST['search']))
{
    $valueToSearch = $_POST['valueToSearch'];
	$query = "SELECT * FROM `membertracking` WHERE  CONCAT(`trackid`)LIKE '%".$valueToSearch."%'";
  //  $query = "SELECT * FROM `membertracking` WHERE  CONCAT(`mem_id`, `trackid`, `firstname`, `lastname`, `address`)LIKE '%".$valueToSearch."%'";
    $search_result = filterTable($query);
    
}
    else {
        $query ="SELECT * FROM `membertracking` ORDER BY mem_id DESC";
        $search_result = filterTable($query);
        
    }
    
    function filterTable($query)
    {
        $connect = mysqli_connect("localhost", "root", "", "db_transfer");
        $filter_Result = mysqli_query($connect, $query);
        return $filter_Result;
    }
        
    
    

?>




<!DOCTYPE html>
<html>  
    <head>
       
       <!-- <link rel="stylesheet" href="styles.css"/>-->


	   <meta name="viewport" content="width=device-width, initial-scale=1">
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



<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1"/>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css" />


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
 <center> <h2>Client Transactions Queries</h2><center>

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

<form action="client.php" method="post" enctype="multipart/form-data">
                



                    <input type="text" name="valueToSearch"> 
            
            <input type="submit" name="search" value="Search"> 
            


        </form>


                
		<thead class="alert-info">
				<th>TrackingID</th>
						<th>Firstname</th>
						<th>Lastname</th>
						<th>Address</th>
            <th>EDIT</th>
                </thead>

                <tbody>


                 


  <?php while($row = mysqli_fetch_array($search_result)): ?>



                    <tr> 

					<td><?php echo $row['trackid']?></td>
						<td><?php echo $row['firstname']?></td>
						<td><?php echo $row['lastname']?></td>
						<td><?php echo $row['address']?></td>
                        
                  <td>   
                  <center><a href="client.php?mem_id=<?php echo $fetch['mem_id']?>"><i class="fa fa-trash" style='font-size:20px;'></i>EDIT</a></center>
  </td>      









                    </tr>
 <?php endwhile;?>


                   
                </tbody>

            </table>


        

<!--  end Downlod-->






     </div>
 </body>
</html>


<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_transfer";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "UPDATE serving SET lastname='xx' WHERE mem_id=154";

if ($conn->query($sql) === TRUE) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . $conn->error;
}

$conn->close();
?>