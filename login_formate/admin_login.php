
<?php 

session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="login.css">
  <link rel="stylesheet"  href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <title>admin_login</title>

  <style type="text/css">
    twelve h1 {
  font-size:26px; font-weight:700;  letter-spacing:1px; text-transform:uppercase; width:160px; text-align:center; margin:auto; white-space:nowrap; padding-bottom:13px;
}
.twelve h1:before {
    background-color: #c50000;
    content: '';
    display: block;
    height: 3px;
    width: 75px;
    margin-bottom: 5px;
}


.alert {
  padding: px;
  background-color: #f44336;
  color: white;
  opacity: 0.7;
  transition: opacity 0.6s;
  margin-bottom: 2px;
}

.alert.success {background-color: #04AA6D;}
.alert.info {background-color: #2196F3;}
.alert.warning {background-color: #f05951;}

.closebtn {
  margin-left: 2px;
  color: white;
  font-weight: bold;
  float: right;
  font-size: 22px;
  line-height: 20px;
  cursor: pointer;
  transition: 0.3s;
}

.closebtn:hover {
  color: black;
}


  </style>
</head>
<body>

<section class="vh-100">
  <div class="container py-5 h-100">
    <div class="row d-flex align-items-center justify-content-center h-100">
      <div class="col-md-8 col-lg-7 col-xl-6">
        <p style ="text-align: center;"class="h1">The Fresh JuiceBar</p>
        <img style="width: 100%" src="images/first.PNG"
          class="img-fluid" alt="Phone image">
      </div>
      <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
        <form action="../login_database/admin_login.php" method ="POST">

         <!--  Admin Heading -->

          <div class="twelve">
          <h1>Admin Login</h1>
          </div>

          <!-- Username or email address -->
          <div class="form-outline mb-4">
            <input type="text" id="form1Example13" class="form-control form-control-lg" name="adminName" />
            <label class="form-label" for="form1Example13" >AdminName</label>
          </div>

          <!-- Password input -->
          <div class="form-outline mb-4">
            <input type="password" id="form1Example23" class="form-control form-control-lg" name="password" />
            <label class="form-label" for="form1Example23" >Password</label>
          </div>

          <!-- Login page php error handling -->
          
          <?php 

          if(isset($_GET["error"])){

            if(($_GET["error"]=="emptyInputs")){
              echo '<div class="alert">
              <span class="closebtn">&times;</span> 
              <strong> Error!</strong>AdminName or Password is empty..!
            </div>';

            }

            else if(($_GET["error"]=="WrongLogin")){
              echo '<div class="alert">
              <span class="closebtn">&times;</span>  
              <strong>Error!</strong> Check Username and password..!
            </div>';

            }

            

            }

            ?>

          <div class="d-flex justify-content-around align-items-center mb-4">
            <!-- Checkbox -->
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="form1Example3" checked />
              <label class="form-check-label" for="form1Example3"> Remember me </label>
            </div>
          </div>
         
           <!-- User and Admin Buttons -->
          
          <div style="display: flex; justify-content: space-between;" class="btn mb-3 ">
         
          <a href="user_login.php"> <button type="button" class="btn btn-danger">&nbsp&nbspUser&nbsp&nbsp</button></a>
           <a href="admin_login.php"><button type="button" class="btn btn-danger">Admin</button></a>
          </div>


           <!-- Submit button -->
          
           <button type="submit" class="btn btn-primary btn-lg btn-block" name="submit">Login</button>


        </form>





      </div>
    </div>
  </div>
</section>
  
</body>
</html>