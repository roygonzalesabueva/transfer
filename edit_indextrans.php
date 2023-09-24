



<!DOCTYPE html>
<html lang="en">
	<head>








    <meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Icons CSS -->

    <meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Add icon library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


<!-- icons CSS -->

<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

.input-container {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  width: 100%;
  margin-bottom: 15px;
}

.icon {
  padding: 18px;
  background: dodgerblue;
  color: white;
  min-width: 50px;
  text-align: center;
}

.input-field {
  width: 100%;
  padding: 10px;
  outline: none;
}

.input-field:focus {
  border: 2px solid dodgerblue;
}

/* Set a style for the submit button */
.btn {
  background-color: dodgerblue;
  color: white;
  padding: 15px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.btn:hover {
  opacity: 1;
}
</style>






<!-- Forms CSS -->

    <style>
* {
  box-sizing: border-box;
  
}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 0px;
  resize: vertical;
}

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}

input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}

.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
}

.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
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
  width: 100%;
  padding: 0 300px;
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
  text-align: left;
  background-color: #f1f1f1;
}
</style>










</head>
<body>

<?php

//include('conn.php');
require'conn.php';

$mem_id=$_GET['mem_id'];
$result=mysqli_query($conn,"SELECT * from member1 Where mem_id=$mem_id");

//$result=mysqli_query($conn, "SELECT * FROM `indexupdate`") or die(mysqli_error());
                while($fetch=mysqli_fetch_array($result)){

    $mem_id=$fetch['mem_id'];

    $trackid=$fetch['trackid'];
    $date_created=$fetch['date_created'];
    $firstname=$fetch['firstname'];
    $lastname=$fetch['lastname'];
    $section=$fetch['section'];
    $address=$fetch['address'];


}

?>

<?php
if(isset($_POST['update'])){

    $mem_id=$_POST['mem_id'];
    $trackid=$_POST['trackid'];
    $date_created=$_POST['date_created'];
    $firstname=$_POST['firstname'];
    $lastname=$_POST['lastname'];
    $section=$_POST['section'];
    $address=$_POST['address'];
    $result=mysqli_query($conn,"Update member1 SET trackid='$trackid', date_created='$date_created', firstname='$firstname', lastname='$lastname', section='$section', address='$address' Where mem_id=$mem_id");
if($result){

    echo "Updated";
   
    header("refresh:1; url=index_trans.php");

}
else{
    echo "Failed";

}


}

?>










<div class="row">
  <div class="column">
    <div class="card">
      






<form action="" method="POST">
<input type="submit" name="update" value="Save">
<br><br>
<B>Transaction_ID</B>
<div class="input-container"> 
           
<i class="fa fa-card icon"></i>
<input type="text" name="trackid" value="<?php  echo $trackid;    ?>" class="form-control" required="required" readonly>
</div>


<B>Date/Time</B>
<br>

<input type="text" name="date_created" value="<?php  echo $date_created;    ?>" class="form-control" required="required" readonly >
<div>
<br>

<B>Sender/Client</B>
<div class="input-container">                
<i class="fa fa-user icon"></i>
<select type="text" name="firstname" value="<?php  echo $firstname;    ?>">
 
       <!-- <option type="text" value="<?php  echo $firstname;?>"</option>   -->
        <option value="index_trans">index_trans</option>
        
        </select>
</div>


<B>Transaction/Description</B>
<div class="input-container">                
<i class="fa fa-description  icon"></i>
<input type="text" name="lastname" value="<?php  echo $lastname;    ?>">
</div>

<B>Receiver</B>
<div class="input-container">                
<i class="fa fa-user icon"></i>

<select type="text" name="section" value="<?php  echo $section;    ?>">
 
        <option type="text" value="<?php  echo $section;?>"</option>   
        <option value="Records">RECORDS</option>
        <option value="Cashier">CASHIER</option>
          <option value="SDS">SDS</option>
          <option value="ASDS">ASDS</option>
          <option value="SGOD">SGOD</option>
          <option value="CID">CID</option>
          <option value="HRMO">HRMO</option>
          <option value="Accounting">ACCOUNTING</option>
          <option value="Budget">BUDGET</option>
          <option value="Supply">SUPPLY</option>
          <option value="Legal">LEGAL</option>
          <option value="DPSU">DPSU</option>
        </select>
</div>

<B>Remarks/Status</B>
<div class="input-container">                
<i class="fa fa-description  icon"></i>
<input type="text" name="address" value="<?php  echo $lastname;    ?>">
</div>
<br>
<input type="hidden" name="mem_id"  value=<?php echo $_GET['mem_id'];?> >
<br>


</div>
</div>
</div>

</body>

</html>