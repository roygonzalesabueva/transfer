







<?php
$conn = mysqli_connect("localhost","root","@DavaosurDB2023","db_transfer");
$sql = "SELECT * FROM `member1` ORDER BY mem_id ASC";
$result = mysqli_query($conn,$sql);
?>





<?php
include_once("session.php")
?>


<link rel="icon" href="modal\css1\images\favicon.ico" type="image" />
















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



    <title>Del.S.U.R | Division of Davao del Sur </title>


  <!--Header-->
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>





    <!--modal with tables-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>








    <!--ICONS-->

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>


    <!--responsive-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">









    <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1" />

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

    <!--supply allert-->

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.28/dist/sweetalert2.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">








    <!--responsive-->

    <style>
    * {
        box-sizing: border-box;
    }

    .menu {
        float: left;
        width: 20%;
    }

    .menuitem {
        padding: 8px;
        margin-top: 7px;
        border-bottom: 1px solid #f1f1f1;
    }

    .main {
        float: left;
        width: 60%;
        padding: 0 20px;
        overflow: hidden;
    }

    .right {
        background-color: lightblue;
        float: left;
        width: 20%;
        padding: 10px 15px;
        margin-top: 7px;
    }

    @media only screen and (max-width:800px) {

        /* For tablets: */
        .main {
            width: 80%;
            padding: 0;
        }

        .right {
            width: 100%;
        }
    }

    @media only screen and (max-width:500px) {

        /* For mobile phones: */
        .menu,
        .main,
        .right {
            width: 100%;
        }
    }
    </style>












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
        box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
        z-index: 1;
    }

    .dropdown-content a {
        color: black;
        padding: 6px 8px;
        text-decoration: none;
        display: block;
    }

    .dropdown-content a:hover {
        background-color: #ddd;
    }

    .dropdown:hover .dropdown-content {
        display: block;
    }

    .dropdown:hover .dropbtn {
        background-color: #3e8e41;
    }
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
        padding: 0 10px;

    }

    /* Remove extra left and right margins, due to padding */
    .row {
        margin: 0 -5px;
    }

    /* Clear floats after the columns */
    .row:after {
        content: "";
        display: table;
        clear: both;
    }

    /* Responsive columns */
    @media screen and (max-width: 900px) {
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

            <img src="davsur2.png" width="150" height="40">
           

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
            <!-- <li>  <button class="btn btn-primary" onclick="generateTrackingID()" type="button" data-toggle="modal" data-target="#form_modal"> <font size="3"> <B>Create Transaction</B></font></button></li>  -->

            <li>    <a href="index.php"><div class="dropdown"></a>
    <a href="#" > <font color="BLUE" size="4"><i class="fa fa-cog"></i> SECTIONS</font></a>
						
							<div class="dropdown-content">

              <a href="index.php">Admin</a>
              <a href="indexrecord.php">Records</a>
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












       
                <li> <a href="#"><font color="White" size="4"><B> <p id="demo"></p> </B></font></a> </li>
                <li> <a href="chat_index.php"><font color="White" size="4"><B>Chat Room</B></font></a></li>
                <li>
                    <a href="indexclient.php"> <i class="fa fa-bar-chart" style="font-size:18px"></i><font color="White" size="4"><B>Transaction
                            Status</B></font></a>
                </li>

                <li><a href="#"> <font color="White" size="4"><B><i class="fa fa-fw fa-user"></i> <span
                                class="nav-profile-name"><?php echo $_SESSION['username'];?> </span></B></font></a></li>


                <li> <a href="http://202.137.126.58"><font color="White" size="4" ><B>Home</B></font></a></li>
               
                        </ul>

                      
  

 
   
  

</div>
    </nav>


    <br><br> <br><br>






    <nav >
        <!--<nav class="navbar navbar-inverse">-->
        <div class="container-fluid">
            <div class="navbar-header">

         
           



<button class="btn btn-primary" onclick="generateTrackingID()" type="button" data-toggle="modal" data-target="#form_modal"> <font size="3"> <B>Create Transaction</B></font></button>


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
            <!-- <li>  <button class="btn btn-primary" onclick="generateTrackingID()" type="button" data-toggle="modal" data-target="#form_modal"> <font size="3"> <B>Create Transaction</B></font></button></li>  -->

             
</div></li> 




<li><form action="index.php" method="post" enctype="multipart/form-data">

<div class="form-group">
    <input type="text" name="valueToSearch" placeholder="Search ID..">

    <!--<input type="submit" name="search" value="Search"> -->
   
    <button type="submit" class="btn btn-primary" name="search" value="Search"><i class="fa fa-search"></i></button>
 
    </div>
</form></li>







       
                        </ul>

                      
  

 
   
  

</div>
    </nav>























  <!-- <center> -->

  


  
   


<!--  

<button class="btn btn-primary" onclick="generateTrackingID()" type="button" data-toggle="modal" data-target="#form_modal2"><font size="5"> <B>Claim</font></B> </button>
-->

<!-- </center> -->
		

<div class="col-md-3"></div>
	<!--  <div class="col-md-20 well">-->




    <center><h3 class="text-primary"><B>Documents Verification </B></h3></center>



  
	
		<hr style="border-top:1px dotted #ccc;"/>
		

    <!-- <center>
        <font size="5">
            <B> Documents Verification </B>
        </font>
    </center> -->



    <div class="row">
        <div class="column">
            <div class="card">
          


  




            <form class="" action="print.php" method="post" target="_blank">

            <div class="form-group">
                <select class="" name="trackid">
                    
                    <?php
	while($rows =mysqli_fetch_array($result)){
		echo '<option value="'.$rows["trackid"].'">'.$rows["trackid"].'</option>';
	}
	
	
	?>


                </select>
             
                <button type="submit" class="btn btn-primary" name="search" value="Search"><span class="glyphicon glyphicon-print"></span></button>
                <!-- <input type="submit"  name="search" value="  Print"> -->
              
                </div>














            </form>




















            
                <h3><B>Window 1<B></h3>
                <p>New Transaction ID</p>










                <table class="table table-bordered">











                    <thead class="alert-info">
                        <tr>
                            <th>On queue</th>
                            <!--  <th>Action</th>-->






                        </tr>
                    </thead>
                    <tbody>

                        <?php



require'conn.php';
$query=mysqli_query($conn, "SELECT * FROM `member1` ORDER BY mem_id ASC ") or die(mysqli_error());
while($fetch=mysqli_fetch_array($query)){

 


?>



                        <tr>
                            <td><?php echo $fetch['trackid']?></td>

                            <!--			<td>
            <a href="transferclaim_record.php?mem_id=<?php echo $fetch['mem_id']?>">Claim</a>
            </td>-->

                        </tr>



                        <?php
						}

         
					?>

                    </tbody>

                </table>
            </div>
        </div>



        <br>


        <div class="column">

      











        

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
                        <th>Action</th>
                        <th>Update</th>





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
                                <a href="#" class="notification"><i class="fa fa-bell-o"
                                        style="font-size:20px"></i><span class="badge">1</span></a>

                                <div class="dropdown-content">
                                 






<!-- 
                <button type="button" class="btn btn-link" data-target="#modal_confirm" data-toggle="modal"><span class="glyphicon glyphicon-save" ></span>Forward to Records</button>
              <button type="button" class="btn btn-link" data-target="#modal_confirmasds" data-toggle="modal"><span class="glyphicon glyphicon-save" ></span>Forward to ASDS</button>
              <button type="button" class="btn btn-link" data-target="#modal_confirmhrmo" data-toggle="modal"><span class="glyphicon glyphicon-save" ></span>Forward to HRMO</button> -->
              <!-- <button type="button" class="btn btn-link" data-target="#modal_confirmsds" data-toggle="modal"><span class="glyphicon glyphicon-save" ></span>Forward to SDS</button> -->
              <!-- <button type="button" class="btn btn-link" data-target="#modal_confirmsgod" data-toggle="modal"><span class="glyphicon glyphicon-save" ></span>Forward to SGOD</button>
              <button type="button" class="btn btn-link" data-target="#modal_confirmcid" data-toggle="modal"><span class="glyphicon glyphicon-save" ></span>Forward to CID</button> -->
              <!-- <button type="button" class="btn btn-link" data-target="#modal_confirmdpsu" data-toggle="modal"><span class="glyphicon glyphicon-save" ></span>Forward to DPSU</button>
              <button type="button" class="btn btn-link" data-target="#modal_confirmsupply" data-toggle="modal"><span class="glyphicon glyphicon-save" ></span>Forward to Supply</button>
              <button type="button" class="btn btn-link" data-target="#modal_confirmcashier" data-toggle="modal"><span class="glyphicon glyphicon-save" ></span>Forward to Cashier</button>
              <button type="button" class="btn btn-link" data-target="#modal_confirmbudget" data-toggle="modal"><span class="glyphicon glyphicon-save" ></span>Forward to Budget</button>
              <button type="button" class="btn btn-link" data-target="#modal_confirmacct" data-toggle="modal"><span class="glyphicon glyphicon-save" ></span>Forward to Accounting</button>
              <button type="button" class="btn btn-link" data-target="#modal_confirmlegal" data-toggle="modal"><span class="glyphicon glyphicon-save" ></span>Forward to Legal</button>
              -->





              <a onclick="indexrecord('<?php echo $fetch['mem_id']; ?>')" class=" btn btn-link"> <i class="fas fa-share"></i>Records</a>
              <a onclick="indexhrmo('<?php echo $fetch['mem_id']; ?>')" class=" btn btn-link"> <i class="fas fa-share"></i>HRMO</a>
              <a onclick="indexsds('<?php echo $fetch['mem_id']; ?>')" class=" btn btn-link"> <i class="fas fa-share"></i>SDS</a>
              <a onclick="indexasds('<?php echo $fetch['mem_id']; ?>')" class=" btn btn-link"> <i class="fas fa-share"></i>ASDS</a>
              <a onclick="indexsgod('<?php echo $fetch['mem_id']; ?>')" class=" btn btn-link"> <i class="fas fa-share"></i>SGOD</a>
              <a onclick="indexcid('<?php echo $fetch['mem_id']; ?>')" class=" btn btn-link"> <i class="fas fa-share"></i>CID</a>

              <a onclick="indexdpsu('<?php echo $fetch['mem_id']; ?>')" class=" btn btn-link"> <i class="fas fa-share"></i>DPSU</a>
              <a onclick="indexsupply('<?php echo $fetch['mem_id']; ?>')" class=" btn btn-link"> <i class="fas fa-share"></i>Supply</a>
              <a onclick="indexcashier('<?php echo $fetch['mem_id']; ?>')" class=" btn btn-link"> <i class="fas fa-share"></i>Cashier</a>
              <a onclick="indexbudget('<?php echo $fetch['mem_id']; ?>')" class=" btn btn-link"> <i class="fas fa-share"></i>Budget</a>
              <a onclick="indexacctg('<?php echo $fetch['mem_id']; ?>')" class=" btn btn-link"> <i class="fas fa-share"></i>Accounting</a>
              <a onclick="indexlegal('<?php echo $fetch['mem_id']; ?>')" class=" btn btn-link"> <i class="fas fa-share"></i>Legal</a>


                                     <!-- <a type="button" class="btn btn-link" href="transferrecord.php?mem_id=<?php //echo $fetch['mem_id']?>">Records</a> -->
                                        <!-- <a type="button" class="btn btn-link" href="transferhrmo.php?mem_id=<?php// echo $fetch['mem_id']?>">HRMO</a> -->
                                        <!-- <a type="button" class="btn btn-link" href="transfersds.php?mem_id=<?php //echo $fetch['mem_id']?>">SDS</a> -->
                                        <!-- <a type="button" class="btn btn-link" href="transferasds.php?mem_id=<?php //echo $fetch['mem_id']?>">ASDS</a> -->
                                        <!-- <a type="button" class="btn btn-link" href="transfersgod.php?mem_id=<?php //echo $fetch['mem_id']?>">SGOD</a> -->
                                        <!-- <a type="button" class="btn btn-link" href="transferscid.php?mem_id=<?php //echo $fetch['mem_id']?>">CID</a> -->
                                        <!-- <a type="button" class="btn btn-link" href="transferdpsu.php?mem_id=<?php //echo $fetch['mem_id']?>">DPSU</a>
                                        <a type="button" class="btn btn-link" href="transfersupply.php?mem_id=<?php //echo $fetch['mem_id']?>">Supply</a>
                                        <a type="button" class="btn btn-link" href="transfercashier.php?mem_id=<?php //echo $fetch['mem_id']?>">Cashier</a>
                                        <a type="button" class="btn btn-link" href="transferbudget.php?mem_id=<?php// echo $fetch['mem_id']?>">Budget</a>
                                        <a type="button" class="btn btn-link" href="transferacct.php?mem_id=<?php //echo $fetch['mem_id']?>">Accounting</a>
                                        
                                        <a type="button" class="btn btn-link" href="transferlegal.php?mem_id=<?php //echo $fetch['mem_id']?>">Legal</a> -->
                                </div>
                            </div>

                        </td>
                        <td>
                         
                        <!-- <a type="button" class="btn btn-success" href="del.php?mem_id=<?php //echo $fetch['mem_id']?>"><font color="White" size="2">Delete</font></a>
                                   -->
                        <a onclick="delete_data('<?php echo $fetch['mem_id']; ?>')" class=" btn btn-sm btn-danger"> <i class="fas fa-solid fa-trash"></i>Delete</a>






                        </td>

                        <td>
                        <!-- <a type="button" class="btn btn-success" href="edit_index.php?mem_id=<?php //echo $fetch['mem_id']?>"><i class="fa fa-edit"
                                    style='font-size:16px;color:White'>
                                    <font size="4"><B>Edit
                               </B></font>
                               </i></a> -->


                               <a class=" btn btn-sm btn-success" href="edit_index.php?mem_id=<?php echo $fetch['mem_id']?>" ><i class="fa fa-edit" ></i>Update</a>




                        </td>









                    </tr>
                    <?php endwhile;?>
                </tbody>

            </table>

        </div>
        </center>










    </div>

    </div>
    </div>



















    <div class="modal fade" aria-hidden="true" id="form_modal">
	<div class="modal-dialog">
		<div class="modal-content">
			<form method="POST" action="save.php">
				<div class="modal-header">
					<h3 class="modal-title">Create Transaction ID</h3>
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
                                <label>Tracking_ID </label>
                                <input type="text" id="trackid" name="trackid" class="form-control"
                                    required="required" />
                            </div>




                        </div>
                    </div>
                    <br style="clear:both;" />
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal"><span
                                class="glyphicon glyphicon-remove"></span> Close</button>
                        <button class="btn btn-primary" name="save2"><span class="glyphicon glyphicon-save"></span>
                            Submit</button>





                    </div>
                </form>
            </div>
        </div>
    </div>




















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
                                <th>Tracking_ID</th>
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
                    <!--	<cemter><a href="del.php?mem_id=<?php //echo $fetch['mem_id']?>"><i class="fa fa-trash" style='font-size:20px;'></i>Del</a></center>-->


                    <!--   <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>-->

                </div>
            </div>

        </div>
    </div>

    </div>








<!-- SUpply alert -->

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.28/dist/sweetalert2.all.min.js"></script>





    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/bootstrap.js"></script>

<!-- Supply alert -->
<script>

function delete_data(data_id) {
    Swal.fire({
        title: 'Are you sure?',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!',
        closeOnConfirm: false,
        closeOnCancel: false
    }).then((result) => {
        if (result.isConfirmed) {
            window.location = ("del.php?mem_id=" + data_id);        
        }
    })
}
</script>




<!-- Supply alert -->
<script>

function indexrecord(data_id) {
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
            window.location = ("transferrecord.php?mem_id=" + data_id);   
            
            
        }
    })
}
</script>



<!-- Supply alert -->
<script>

function indexhrmo(data_id) {
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
            window.location = ("transferhrmo.php?mem_id=" + data_id);   
            
            
        }
    })
}
</script>



<!-- Supply alert -->
<script>

function indexsds(data_id) {
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
            window.location = ("transfersds.php?mem_id=" + data_id);   
            
            
        }
    })
}
</script>



<!-- Supply alert -->
<script>

function indexasds(data_id) {
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
            window.location = ("transferasds.php?mem_id=" + data_id);   
            
            
        }
    })
}
</script>


<!-- Supply alert -->
<script>

function indexsgod(data_id) {
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
            window.location = ("transfersgod.php?mem_id=" + data_id);   
            
            
        }
    })
}
</script>


<!-- Supply alert -->
<script>

function indexcid(data_id) {
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
            window.location = ("transferscid.php?mem_id=" + data_id);   
            
            
        }
    })
}
</script>

<!-- Supply alert -->
<script>

function indexdpsu(data_id) {
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
            window.location = ("transferdpsu.php?mem_id=" + data_id);   
            
            
        }
    })
}
</script>


<!-- Supply alert -->
<script>

function indexsupply(data_id) {
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
            window.location = ("transfersupply.php?mem_id=" + data_id);   
            
            
        }
    })
}
</script>


<!-- Supply alert -->
<script>

function indexcashier(data_id) {
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
            window.location = ("transfercashier.php?mem_id=" + data_id);   
            
            
        }
    })
}
</script>



<!-- Supply alert -->
<script>

function indexbudget(data_id) {
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
            window.location = ("transferbudget.php?mem_id=" + data_id);   
            
            
        }
    })
}
</script>



<!-- Supply alert -->
<script>

function indexacctg(data_id) {
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
            window.location = ("transferacct.php?mem_id=" + data_id);   
            
            
        }
    })
}
</script>


<!-- Supply alert -->
<script>

function indexlegal(data_id) {
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
            window.location = ("transferlegal.php?mem_id=" + data_id);   
            
            
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


<script type="text/javascript" >

    function myFunction(id) {
        alert(id);
    }

</script>