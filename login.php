<?php
session_start();
// Database Connection
require_once('db.php');
// $_SESSION['user_id'];
// $_SESSION['username'];
// $_SESSION['user_role'];
// $_SESSION['security_key'];

if (!isset($_SESSION['username'])) {
  header("Location: http://202.137.126.58/");
  exit();
}
?>


<!-- <script>
  setInterval(myTimer, 1000);

  function myTimer() {
    const d = new Date();
    document.getElementById("demo").innerHTML = d.toLocaleTimeString();
  }
</script> -->


<?php

function verify($data)
{
  $data = trim($data);
  $data = htmlspecialchars($data);
  $data = stripslashes($data);
  return $data;
}

if (isset($_POST['login'])) {

  $email = verify($_POST['email']);

  //sql statement
  $sql = "SELECT * FROM users_tbl WHERE email='" . $email . "'";

  // $sql = "SELECT * FROM users_tbl WHERE username='$username' and password='$password'";

  //qry
  $result = mysqli_query($conn, $sql) or die("Login problem");

  $count = mysqli_num_rows($result);

  // if user exist
  if ($count == 1) {
    $row = mysqli_fetch_assoc($result);
    // $_SESSION['user_role']
    $_SESSION['id'] = $row['id'];

    // $_SESSION['username']= $row['username'];
    $_SESSION['email'] = $row['email'];
    $_SESSION['password'] = $row['password'];
    $_SESSION['status'] = $row['status'];
    $_SESSION['role'] = $row['role'];
    $_SESSION['department_id'] = $row['department_id'];

    if ($_SESSION['department_id'] == 1) {
      header("location: indexasds.php");
    } elseif ($_SESSION['department_id'] == 2) {
      header("location: indexsds.php");
    } elseif ($_SESSION['department_id'] == 3) {
      header("location: indexrecord.php");
    } elseif ($_SESSION['department_id'] == 4) {
      header("location: indexqueue.php");
    } elseif ($_SESSION['department_id'] == 5) {
      header("location: indexhrmo.php");
    } elseif ($_SESSION['department_id'] == 6) {
      header("location: indexsgod.php");
    } elseif ($_SESSION['department_id'] == 7) {
      header("location: indexcid.php");
    } elseif ($_SESSION['department_id'] == 8) {
      header("location: indexacct.php");
    } elseif ($_SESSION['department_id'] == 10) {
      header("location: indexsupply.php");
    } elseif ($_SESSION['department_id'] == 11) {
      header("location: indexbudget.php");
    } elseif ($_SESSION['department_id'] == 12) {
      header("location: indexcashier.php");
    } elseif ($_SESSION['department_id'] == 13) {
      header("location: indexlegal.php");
    } elseif ($_SESSION['department_id'] == 14) {
      header("location: indexdpsu.php");
    } elseif ($_SESSION['department_id'] == 15) {
      header("location: index_trans.php");
    } elseif ($_SESSION['department_id'] == 16) {
      header("location: index.php");
    }

    //header("location: dashboard.php");
    //header("location: index.php");

  } else {
    //$_SESSION['user'] = $username;
    //header("location: dashboard.php");
    //header("location: index.php");
    echo "<script>alert('Failed! User not Found!.')</script>";
  }
}


//else {

//	echo"<script>alert('error=Incorrect User Name or password.')</script>";
//	}




//sql statement
//$sql = "SELECT * FROM userschat WHERE username='$username' ";

//Db Connection
//require_once('conn.php');

//qry
// $qry = mysqli_query ($conn, $sql) or die ("Login problem");
// $count = mysqli_num_rows($qry);
// if($count==1)
// {
//   $_SESSION['user']= $username;
//header("location: dashboard.php");
//   header("location: chat_client.php");

// }     




?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Project DavaoSur - Del.S.U.R </title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="icon" href="modal\css1\images\favicon.ico" type="image" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Add icon library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--supply allert-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.28/dist/sweetalert2.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <!-- icons sa Pass and User -->

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
        font-family: Arial, Helvetica, sans-serif;
        background-image: url("mm.png");
    }

    h1 {
        text-align: center;
    }

    h2 {
        text-align: left;
    }

    h3 {
        text-align: right;
    }


    * {
        box-sizing: border-box;
    }

    .input-container {
        display: -ms-flexbox;
        /* IE10 */
        display: flex;
        with: 100%;
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



    .btn:hover {
        opacity: 1;
    }

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
</head>

<body>
    <nav class="navbar navbar-inverse ">
        <!-- <nav class="navbar navbar-inverse"> -->
        <div class="container-fluid">
            <div class="navbar-header">
            </div>
            <ul class="nav navbar-nav navbar-right">

                <li> <a href="#">
                        <font color="White" size="2"><B><?= $_SESSION['username'] ?></B></font>
                    </a>
                    <a href="http://202.137.126.58/">
                        <font color="White" size="2"><B> | Home</B></font>
                    </a>
                <li>
            </ul>
        </div>

    </nav>
    <div class="container">
        <div class="row w-100 mx-auto">
            <div class="col-lg- 100 mx-auto">
                <br><br><br>
                <form class="pt-3" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                    <img src="davsur2.png" width="350" height="80">

                    <br><br><br>

                    <!-- <center><label><font color="White" size="4"> <B><h4>CHOOSE DEPARTMENT/SECTION</h4></B> </font></label></center> -->



                    <a href="indexclient.php" class="btn btn-primary btn-block btn-lg"> CLIENT FILES LOCATOR</a>

                    <input type="hidden" name="email" value="<?php echo $_SESSION['username'];  ?>">
                    <button type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn mt-3"
                        name="login"> DEPARTMENTAL DASHBOARD </button>
                </form>

                <!-- <a href="login.php" class="btn btn-primary btn-block btn-lg"> DEPARTMENTAL DASHBOARD</a> -->



                <!-- <div class="input-container">
                  
                

                  <select type="text" name="username" class="form-control" required="required"/>

        <option type="text" value="<?php  //echo $username;
                                    ?>"</option>   
       
        <option value="Cashier">CASHIER</option>

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
</div> -->

                <!-- <input type="text" name="username" class="form-control form-control-lg" id="username" placeholder="Username" 
                 
                  value="<?php if (isset($_COOKIE['uname'])) echo $_COOKIE['uname']; ?>"> -->


                <!-- <input type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" name ="login"  value="Continue" /> -->


            </div>





        </div>
    </div>
    <!-- content-wrapper ends -->

    <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->

    <!-- endinject -->


    <!-- page-body-wrapper ends -->


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
                                <input type="text" name="username" class="form-control" required="required" />
                            </div>

                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" name="password" class="form-control" required="required" />
                            </div>

                            <div class="form-group">
                                <label>Email</label>
                                <input type="text" name="email" class="form-control" required="required" />
                            </div>

                            <div class="form-group">
                                <label>School</label>
                                <input type="text" name="school" class="form-control" required="required" />
                            </div>




                            <button type="button" class="btn btn-danger" data-dismiss="modal"><span
                                    class="glyphicon glyphicon-remove"></span> Cancel</button>
                            <button class="btn btn-primary" name="save2"><span class="glyphicon glyphicon-save"></span>
                                Save</button>



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
                                <input type="text" name="email" class="form-control" required="required" />
                            </div>

                            <div class="form-group">
                                <label>Username</label>
                                <input type="text" name="username" class="form-control" required="required" />
                            </div>

                            <div class="form-group">
                                <label>Change Password</label>
                                <input type="password" name="password" class="form-control" required="required" />
                            </div>






                            <button type="button" class="btn btn-danger" data-dismiss="modal"><span
                                    class="glyphicon glyphicon-remove"></span> Cancel</button>
                            <button class="btn btn-primary" name="save3"><span
                                    class="glyphicon glyphicon-save"></span>YES</button>



                        </div>
                    </div>







                </form>
            </div>
        </div>
    </div>




    <!-- SUpply alert -->

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.28/dist/sweetalert2.all.min.js"></script>



    <!-- Supply alert -->
    <script>
    function login(data_id) {
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
                window.location = ("transfersupply_record.php?mem_id=" + data_id);

            }
        });
    }
    </script>

</body>

</html>