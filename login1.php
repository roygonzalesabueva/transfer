






<link rel="icon" href="modal\css1\images\favicon.ico" type="image" />






<?php
  session_start();

  function verify($data){
    $data = trim($data);
    $data = htmlspecialchars($data );
    $data = stripslashes($data );
    return $data;
  }

  if(isset($_POST['login1'])){
    //getting the form data
     $username = verify($_POST['username']);
      // $password = verify($_POST['password']);

     

    

    //sql statement
    $sql = "SELECT * FROM user_tbl WHERE username='$username'";
 
    //Db Connection
    require_once('conn.php');

    //qry
    $qry = mysqli_query ($conn, $sql) or die ("Login problem");
    $count = mysqli_num_rows($qry);
    if($count==1)
    {
      $row=mysqli_fetch_assoc($qry);

      $_SESSION['id']= $row['id'];
      $_SESSION['username']= $row['username'];
      $_SESSION['email']= $row['email'];
      $_SESSION['password']= $row['password'];
      $_SESSION['status']= $row['status'];
      $_SESSION['role']= $row['role'];
      $_SESSION['department_id']= $row['department_id'];

      if ($_SESSION['department_id'] == 1) {
        header("location: filesscnhs.php");
      }
      elseif ($_SESSION['department_id'] == 2) {
        header("location: filesscces.php");
      }

      elseif ($_SESSION['department_id'] == 3) {
        header("location: filessnhs.php");
      }

      elseif ($_SESSION['department_id'] == 4) {
        header("location: indexqueue.php");
      }

      elseif ($_SESSION['department_id'] == 5) {
        header("location: filesfnhs.php");
      }

      elseif ($_SESSION['department_id'] == 6) {
        header("location: filespnhs.php");
      }
      elseif ($_SESSION['department_id'] == 7) {
        header("location: filesmnhs.php");
      }

      elseif ($_SESSION['department_id'] == 8) {
        header("location: indexacct.php");
      }

      elseif ($_SESSION['department_id'] == 10) {
        header("location: indexsupply.php");
      }

      elseif ($_SESSION['department_id'] == 11) {
        header("location: indexbudget.php");
      }

      elseif ($_SESSION['department_id'] == 12) {
        header("location: indexcashier.php");
      }

      elseif ($_SESSION['department_id'] == 13) {
        header("location: indexlegal.php");
      }

      elseif ($_SESSION['department_id'] == 14) {
        header("location: indexdpsu.php");
      }

      elseif ($_SESSION['department_id'] == 15) {
        header("location: index_trans.php");
      }

      elseif ($_SESSION['department_id'] == 16) {
        header("location: home.php");
      }



      //header("location: dashboard.php");
      // header("location: index.php");
      
    }

    if($count===1);
    {
      $_SESSION['user']= $username;
      //header("location: dashboard.php");
    //  header("location: index.php");
  echo"<script>alert('Error=Incorrect User Name or password.')</script>";
   


    }


  {

    //sql statement
    $sql = "SELECT * FROM userschat WHERE username='$username'";
 
    //Db Connection
    require_once('conn.php');

    //qry
    $qry = mysqli_query ($conn, $sql) or die ("Login problem");
    $count = mysqli_num_rows($qry);
    if($count==1)
    {
      $_SESSION['user']= $username;
      //header("location: dashboard.php");
      header("location: chat_client.php");
      
      
    }
   
  }

  {

    //sql statement
    $sql = "SELECT * FROM users WHERE username='$username'";
 
    //Db Connection
    require_once('conn.php');

    //qry
    $qry = mysqli_query ($conn, $sql) or die ("Login problem");
    $count = mysqli_num_rows($qry);
    if($count==1)
    {
      $_SESSION['user']= $username;
      //header("location: dashboard.php");
      header("location: files2.php");
      
      
    }
   
  }
















    
  }



  

?>  

<!DOCTYPE html>
<html lang="en">

<head>












<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>




<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Add icon library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


<link rel="icon" href="modal\css1\images\favicon.ico" type="image" />




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
	











<!-- icons sa Pass and User -->
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
  padding: 30px;
  outline: 5px;
}

.input-field:focus {
  border: 20px solid dodgerblue;
}

</style>











  <!-- Required meta tags -->
   <title>M.E.M.O. | Division Davao del Sur</title>
  <!-- plugins:css -->
 
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="images/logo.png" />

  <style>
body {
  background-color: white;
}
</style>


<style>
h1 {
  text-align: center;
}

h2 {
  text-align: left;
}

h3 {
  text-align: right;
}
</style>






<style> 
  
body {
  background-image: url("bg.png");
}
</style> 




</head>

<body>

<br>



  <div class="container">
   
    
      
      
        <div class="row w-100 mx-auto">
       
        
          <div class="col-lg- 100 mx-auto">



          <br>    <br>



          <img src="davsur2.png" width="330" height="80">

            <br>    

            <br>  
       
             <form class="pt-3" method="post" name="login1" action="login1.php">



            
    
   
   
             <h1><label><font color="White" size="4"> <B>CHOOSE SCHOOL / DISTRICT</B> </font></label></h1>


    
 



             

           
         
             <div class="input-container">
                  
                  <!-- <i class="fa fa-user icon"></i> -->

                  <select type="text" name="username" class="form-control" required="required"/>

                  <!-- <select type="text" name="username" value="<?php // echo $username;    ?> class="form-control" required="required"/> -->
 
        <option type="text" value="<?php  echo $username;?>"</option>   
        <option value="SCNHS">SCNHS</option>
        <option value="SCCES">SCCES</option>
          <option value="SNHS">SNHS</option>
          <option value="PNHS">PNHS</option>
          <option value="MNHS">MNHS</option>
          <option value="FNHS">FNHS</option>
          
        </select>
</div>
                
               <!-- <B> <label>PASSWORD</label></B>
               <div class="input-container">
    <i class="fa fa-key icon"></i>
               
                  <input type="password" name="password" class="form-control form-control-lg" id="password" placeholder="Password"
                   value="<?php if(isset($_COOKIE['upass'])) echo $_COOKIE['upass'];?>">
                </div> -->
                <div class="mt-3">
             <input type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" name ="login1"  value="Continue" /> 
                </div><br>
                <!-- <button type="button" class="btn btn-link" data-target="#form_modal" data-toggle="modal"><span class="glyphicon glyphicon-save" ></span>Create Account</button> -->
           
                <!-- <button type="button" class="btn btn-link" data-target="#form_modal2" data-toggle="modal"><span class="glyphicon glyphicon-save" ></span>Forgot Your Password? </button> -->
           
               
                
              <!--    <div class="my-2 d-flex justify-content-between align-items-center">
                  <div class="form-check">
                    <label class="form-check-label text-muted">


                   
                     <input type="checkbox" name ="remember" value="1" class="form-check-input">
                     Keep me signed in
                    </label>
                  </div>
                   <a href="#" class="auth-link text-black">Forgot password?</a>
                </div>
                <div class="mb-2">
                  <button type="button" class="btn btn-block btn-facebook auth-form-btn">
                    <i class="mdi mdi-facebook mr-2"></i> <a href="https://www.facebook.com" class="text-primary">Connect using facebook
                  </button>
                </div>
               <div class="text-center mt-4 font-weight-light">
                  Don't have an account? <a href="register.php" class="text-primary">Create</a>
                </div>-->
              </form>
               
            
        </div>
      </div>
      <!-- content-wrapper ends -->
   
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
 
  <!-- endinject -->
      <!-- page-body-wrapper ends -->





  <!-- inject:js -->
 
  <!-- endinject -->





  <div class="modal fade" aria-hidden="true" id="form_modal">
	<div class="modal-dialog">
		<div class="modal-content">
			<form method="POST" action="save2.php">
				<div class="modal-header">


        







					<h3 class="modal-title">Register</h3>
				</div>
				<div class="modal-body">
					<div class="col-md-2"></div>
					<div class="col-md-16">
						
						
					<!--	<div class="form-group">
							
						<label>ID</label>	<input type="text" name="id" class="form-control" required="required"/>
						</div>-->


						<div class="form-group">
							<label>Username</label>
							<input type="text" name="username" class="form-control" required="required"/>
						</div>

            <div class="form-group">
							<label>Password</label>
							<input type="password" name="password" class="form-control" required="required"/>
						</div>
						
						<div class="form-group">
							<label>Email</label>
							<input type="text" name="email" class="form-control" required="required"/>
						</div>

            <div class="form-group">
							<label>School</label>
							<input type="text" name="school" class="form-control" required="required"/>
						</div>




            <button type="button" class="btn btn-danger" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
					<button  class="btn btn-primary" name="save2"  ><span class="glyphicon glyphicon-save"></span> Save</button>
					


					</div>
				</div>
			
				




				
			</form>
		</div>
	</div>
</div>	










<div class="modal fade" aria-hidden="true" id="form_modal2">
	<div class="modal-dialog">
		<div class="modal-content">
			<form method="POST" action="save3.php">
				<div class="modal-header">
					<h3 class="modal-title">Forgot Password</h3>
				</div>
				<div class="modal-body">
					<div class="col-md-2"></div>
					<div class="col-md-16">
						
						
					<!--	<div class="form-group">
							
						<label>ID</label>	<input type="text" name="id" class="form-control" required="required"/>
						</div>-->
            <div class="form-group">
							<label>Email</label>
							<input type="text" name="email" class="form-control" required="required"/>
						</div>

						<div class="form-group">
							<label>Username</label>
							<input type="text" name="username" class="form-control" required="required"/>
						</div>

            <div class="form-group">
							<label>Change Password</label>
							<input type="password" name="password" class="form-control" required="required"/>
						</div>
						
						




            <button type="button" class="btn btn-danger" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
					<button  class="btn btn-primary" name="save3"  ><span class="glyphicon glyphicon-save"></span>YES</button>
					


					</div>
				</div>
			
				




				
			</form>
		</div>
	</div>
</div>	









</body>

</html>
