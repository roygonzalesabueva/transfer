
<link rel="icon" href="modal\css1\images\favicon.ico" type="image" />


<script>
setInterval(myTimer, 1000);
function myTimer() {
  const d = new Date();
  document.getElementById("demo").innerHTML = d.toLocaleTimeString();
}
</script>












<?php
  session_start();

  function verify($data){
    $data = trim($data);
    $data = htmlspecialchars($data );
    $data = stripslashes($data );
    return $data;
  }

  if(isset($_POST['login'])){
    //getting the form data
     $username = verify($_POST['username']);
      $password = verify($_POST['password']);
     
      
        

     // Cookie - last nani ayaw e apil sa first code na login
     //   $remember = $_POST['remember'];
     //   if($remember==1)
      //  {
      //    setcookie('uname' , $username, time()+60*60*24*10,"/");
      //     setcookie('password' , $password, time()+60*60*24*10,"/");
 
   //     }



    //sql statement
    $sql = "SELECT * FROM users WHERE username='$username' and password='$password'";
 
    //Db Connection
    require_once('db.php');

    //qry
    $qry = mysqli_query ($conn, $sql) or die ("Login problem");
    $count = mysqli_num_rows($qry);
    if($count==1)
    {
      $_SESSION['user']= $username;
      //header("location: dashboard.php");
      header("location: index.php");
      
    }

    if($count<>1);
    {
      $_SESSION['user']= $username;
      //header("location: dashboard.php");
    //  header("location: index.php");
  echo"<script>alert('Error=Incorrect User Name or password.')</script>";
   


    }



  //else {

		//	echo"<script>alert('error=Incorrect User Name or password.')</script>";
	//	}



{

    //sql statement
    $sql = "SELECT * FROM usersds WHERE username='$username' and password='$password'";
 
    //Db Connection
    require_once('conn.php');

    //qry
    $qry = mysqli_query ($conn, $sql) or die ("Login problem");
    $count = mysqli_num_rows($qry);
    if($count==1)
    {
      $_SESSION['user']= $username;
      //header("location: dashboard.php");
      header("location: indexsds.php");
      
      
    }
   


  }



{

    //sql statement
    $sql = "SELECT * FROM userasds WHERE username='$username' and password='$password'";
 
    //Db Connection
    require_once('conn.php');

    //qry
    $qry = mysqli_query ($conn, $sql) or die ("Login problem");
    $count = mysqli_num_rows($qry);
    if($count==1)
    {
      $_SESSION['user']= $username;
      //header("location: dashboard.php");
      header("location: indexasds.php");
      
      
    }


  }




  {

    //sql statement
    $sql = "SELECT * FROM userrecord WHERE username='$username' and password='$password'";
 
    //Db Connection
    require_once('conn.php');

    //qry
    $qry = mysqli_query ($conn, $sql) or die ("Login problem");
    $count = mysqli_num_rows($qry);
    if($count==1)
    {
      $_SESSION['user']= $username;
      //header("location: dashboard.php");
      header("location: indexrecord.php");
      
    }



  }



  {

    //sql statement
    $sql = "SELECT * FROM userqueue WHERE username='$username' and password='$password'";
 
    //Db Connection
    require_once('conn.php');

    //qry
    $qry = mysqli_query ($conn, $sql) or die ("Login problem");
    $count = mysqli_num_rows($qry);
    if($count==1)
    {
      $_SESSION['user']= $username;
      //header("location: dashboard.php");
      header("location: indexqueue.php");
      
    }



  }




  {

    //sql statement
    $sql = "SELECT * FROM userhrmo WHERE username='$username' and password='$password'";
 
    //Db Connection
    require_once('conn.php');

    //qry
    $qry = mysqli_query ($conn, $sql) or die ("Login problem");
    $count = mysqli_num_rows($qry);
    if($count==1)
    {
      $_SESSION['user']= $username;
      //header("location: dashboard.php");
      header("location: indexhrmo.php");
      
    }


  }




  {

    //sql statement
    $sql = "SELECT * FROM usersgod WHERE username='$username' and password='$password'";
 
    //Db Connection
    require_once('conn.php');

    //qry
    $qry = mysqli_query ($conn, $sql) or die ("Login problem");
    $count = mysqli_num_rows($qry);
    if($count==1)
    {
      $_SESSION['user']= $username;
      //header("location: dashboard.php");
      header("location: indexsgod.php");
      
    }



  }




  {

    //sql statement
    $sql = "SELECT * FROM usercid WHERE username='$username' and password='$password'";
 
    //Db Connection
    require_once('conn.php');

    //qry
    $qry = mysqli_query ($conn, $sql) or die ("Login problem");
    $count = mysqli_num_rows($qry);
    if($count==1)
    {
      $_SESSION['user']= $username;
      //header("location: dashboard.php");
      header("location: indexcid.php");
      
    }




  }





  {

    //sql statement
    $sql = "SELECT * FROM useracct WHERE username='$username' and password='$password'";
 
    //Db Connection
    require_once('conn.php');

    //qry
    $qry = mysqli_query ($conn, $sql) or die ("Login problem");
    $count = mysqli_num_rows($qry);
    if($count==1)
    {
      $_SESSION['user']= $username;
      //header("location: dashboard.php");
      header("location: indexacct.php");
      
    }




  }



  {

    //sql statement
    $sql = "SELECT * FROM usersupply WHERE username='$username' and password='$password'";
 
    //Db Connection
    require_once('conn.php');

    //qry
    $qry = mysqli_query ($conn, $sql) or die ("Login problem");
    $count = mysqli_num_rows($qry);
    if($count==1)
    {
      $_SESSION['user']= $username;
      //header("location: dashboard.php");
      header("location: indexsupply.php");
      
    }




  }



  
  {

    //sql statement
    $sql = "SELECT * FROM userbudget WHERE username='$username' and password='$password'";
 
    //Db Connection
    require_once('conn.php');

    //qry
    $qry = mysqli_query ($conn, $sql) or die ("Login problem");
    $count = mysqli_num_rows($qry);
    if($count==1)
    {
      $_SESSION['user']= $username;
      //header("location: dashboard.php");
      header("location: indexbudget.php");
      
    }


  }



  
  {

    //sql statement
    $sql = "SELECT * FROM usercashier WHERE username='$username' and password='$password'";
 
    //Db Connection
    require_once('conn.php');

    //qry
    $qry = mysqli_query ($conn, $sql) or die ("Login problem");
    $count = mysqli_num_rows($qry);
    if($count==1)
    {
      $_SESSION['user']= $username;
      //header("location: dashboard.php");
      header("location: indexcashier.php");
      
    }
    

  }


  {

    //sql statement
    $sql = "SELECT * FROM userlegal WHERE username='$username' and password='$password'";
 
    //Db Connection
    require_once('conn.php');

    //qry
    $qry = mysqli_query ($conn, $sql) or die ("Login problem");
    $count = mysqli_num_rows($qry);
    if($count==1)
    {
      $_SESSION['user']= $username;
      //header("location: dashboard.php");
      header("location: indexlegal.php");
      
    }
    

  }




  {

    //sql statement
    $sql = "SELECT * FROM userdpsu WHERE username='$username' and password='$password'";
 
    //Db Connection
    require_once('conn.php');

    //qry
    $qry = mysqli_query ($conn, $sql) or die ("Login problem");
    $count = mysqli_num_rows($qry);
    if($count==1)
    {
      $_SESSION['user']= $username;
      //header("location: dashboard.php");
      header("location: indexdpsu.php");
      
    }
    

  }




  {

    //sql statement
    $sql = "SELECT * FROM usertrans WHERE username='$username' and password='$password'";
 
    //Db Connection
    require_once('conn.php');

    //qry
    $qry = mysqli_query ($conn, $sql) or die ("Login problem");
    $count = mysqli_num_rows($qry);
    if($count==1)
    {
      $_SESSION['user']= $username;
      //header("location: dashboard.php");
      header("location: index_trans.php");
      
    }
    

  }


    
  }



  

?>  

<!DOCTYPE html>
<html lang="en">

<head>
<title>Del.S.U.R | Division of Davao del Sur </title>

<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>




<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Add icon library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">





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

/* Set a style for the submit button */
.btn {
  background-color: dodgerblue;
  color: white;
  padding: 20px 20px;
  border: 15px ;
  cursor: pointer;
  width: 100%;
  opacity: 1;
}

.btn:hover {
  opacity: 1;
}
</style>










  <!-- Required meta tags -->
   <title>Del.S.U.R | Division Davao del Sur</title>
  <!-- plugins:css -->
 
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="images/favicon.ico" />

  <style>
body {
  background-color: white;
}
</style>


</head>

<body>







<br>


  <div class="container">
   
    
      
      
        <div class="row w-100 mx-auto">
       
        
          <div class="col-lg- 100 mx-auto">
         
            
         
  
    <img src="DAVAOSUR.png" width="310" height="120">
              <form class="pt-3" method="post" name="login" action="login.php">
              
              <B><label>USERNAME</label></B><br>
              <div class="input-container">
                  
                  <i class="fa fa-user icon"></i>
                  <input type="text" name="username" class="form-control form-control-lg" id="username" placeholder="Username" 
                 
                  value="<?php if(isset($_COOKIE['uname'])) echo $_COOKIE['uname'];?>">

                
                       


                </div>
                
               <B> <label>PASSWORD</label></B>
               <div class="input-container">
    <i class="fa fa-key icon"></i>
               
                  <input type="password" name="password" class="form-control form-control-lg" id="password" placeholder="Password"
                   value="<?php if(isset($_COOKIE['upass'])) echo $_COOKIE['upass'];?>">
                </div>
                <div class="mt-3">
             <input type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" name ="login"  value="LOGIN" /> 
                </div><br>
                <h3>Register</h3> 
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
</body>

</html>
