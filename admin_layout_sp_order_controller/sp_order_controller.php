

<?php 

session_start();
require_once "../login_database/dbc.php";

?>


<html>
  <head>
   <link rel="stylesheet" href="../admin_layout_order/order.css">
  <link rel="stylesheet" href="../user_layout/user_page.css">
  <style>

        *{
            margin:0;
            
        }


        ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
        overflow: hidden;
        background-color: #333;
        
    
        }

        li {
        float: left;
        }

        li a {
        display: block;
        color: white;
        text-align: center;
        padding: 22px 22px;
        text-decoration: none;
        }

        li a:hover:not(.active) {
        background-color: #111;
        }

        .active {
        background-color: #04AA6D;
        }

       
</style>
 
  </head>
  <body>




  <div style="position: sticky; top:0; display: inline;">

  

    <li style="position: absolute; top:0; left:40%; color:white;   list-style-type: none; padding-top: 10px;
 "> <h1 class="heading">The Fresh juice bar</h1></li>
  <ul>

 <li style="float:right"><a href="../login_formate/admin_login.php">logout</a></li>;

 
  
</ul>

</div>






    
<!-- Search bar form -->

<div class="container" style="margin: 20px;">
    <div class="layout" style="background-color: white; width: 90%; height: 100%; float: right; padding: 7px;">
      <h1>User Special Order Controller Table</h1>
      <form action="" method="POST" style="margin:1%;">
        <input type="text" id="search" name="search" placeholder="Search Data...." style="width:20%; height:5%; color:blue; 
        font-size: 20px; border:2px solid blue; padding:15px; margin-right:3%; margin-right:1%; ">
        <button type="submit" name="submit" value="Submit" style="width:5%; height:5%; background-color:black; color:white; cursor:pointer;">Search</button>
        
         <!-- Show all form -->

        <button type="submit" name="click" style = "background-color:#73dae6; color:black; float:right; display:inline; 
        width:10%; height:30px; font-weight: bold; border:3px solid red; cursor:pointer; border-radius: 10px;">Show All Data</button>
      </form>


   

      <form action="" method=POST style="";>
       
      </form>

      <table id="customers">
        <tr>
          <th>Order Id</th>
          <th>First Name</th>
          <th>Last Name</th>
          <th>Phone Number</th>
          <th>Email</th>
          <th>Address</th>
          <th>Description</th>
          <th>Order date</th>
          <th>Need date</th>
          <th>Time</th>
         
          
        </tr>


<?php

  if(isset($_POST['click'])){

     $query = "SELECT*FROM userspecialorder ;";

     $query_run = mysqli_query($conn, $query);

     if(mysqli_num_rows($query_run)>0){
      while($orders=mysqli_fetch_assoc($query_run)){
        ?>

<tr>
          <td><?php echo $orders['id']; ?></td>
          <td><?php echo $orders['firstName']; ?></td>
          <td><?php echo $orders['lastName']; ?></td>
          <td><?php echo $orders['PhoneNumber']; ?></td>
          <td><?php echo $orders['email']; ?></td>
          <td><?php echo $orders['address']; ?></td>
          <td><?php echo $orders['special_order_about']; ?></td>
          <td><?php echo $orders['orderDate']; ?></td>
          <td><?php echo $orders['requiredDate']; ?></td>
          <td><?php echo $orders['time']; ?></td>
         
         
          <!-- <td>
            <form action="select_user_code.php" method="POST">
            <button onclick="return confirmDelete();" type="submit" name="delete_users" value="<?php echo $users['id']; ?>" style="background-color: red; color: white; height: 30px; cursor: pointer; padding: 2px;">
                Remove
              </button>
            </form>
          </td> -->
        </tr>
        <?php

      }
     }else{echo "NOt found data";}

  }

  ?>



  
<?php 
   
        
if (isset($_POST['submit'])) {
  $search = $_POST['search'];

  if (!empty($search)) {
    $query = "SELECT * FROM userspecialorder WHERE firstName LIKE '%$search%' OR lastName LIKE '%$search%' OR PhoneNumber LIKE '%$search%'
    OR email LIKE '%$search%' OR address LIKE '%$search%' OR special_order_about LIKE '%$search%' OR orderDate LIKE '%$search%' OR requiredDate LIKE '%$search%' OR time  LIKE '%$search%' ;";
    $query_run = mysqli_query($conn, $query);

    if (mysqli_num_rows($query_run) > 0) {
      while ($orders = mysqli_fetch_assoc($query_run)) {
        ?>
        <tr>
          <td><?php echo $orders['id']; ?></td>
          <td><?php echo $orders['firstName']; ?></td>
          <td><?php echo $orders['lastName']; ?></td>
          <td><?php echo $orders['PhoneNumber']; ?></td>
          <td><?php echo $orders['email']; ?></td>
          <td><?php echo $orders['address']; ?></td>
          <td><?php echo $orders['special_order_about']; ?></td>
          <td><?php echo $orders['orderDate']; ?></td>
          <td><?php echo $orders['requiredDate']; ?></td>
          <td><?php echo $orders['time']; ?></td>

          <!-- <td>
          <form action="select_user_code.php" method="POST">
          <button onclick="return confirmDelete();" type="submit" name="delete_users" value="<?php echo $users['id']; ?>" style="background-color: red; color: white; height: 30px; cursor: pointer; padding: 2px;">
          Remove
          </button>
          </form>

          
          </td> -->
        </tr>
        <?php
      }
    } else {
      echo '<tr><td colspan="7"><h1 style="color: red;">Data not found</h1></td></tr>';
    }
  } else {
    // Handle empty search field here
    echo '<tr><td colspan="7"><h1 style="color: red;">Please enter a search query</h1></td></tr>';
  }
}
?>


<nav class="main-menu">
            <br>
            <br>
            <br>
            <ul>
                <li>
                    <a href="https://jbfarrow.com">
                        <i class="fa fa-home fa-2x"></i>
                        <span class="nav-text">
                           Community Dashboard
                        </span>
                    </a>
                  
                </li>
                <li class="has-subnav">
                    <a href="../admin_layout/select_users.php">
                    <i class="fa fa-users" aria-hidden="true"></i>
                        <span class="nav-text">
                            User Controller
                        </span>
                    </a>
                    
                </li>
                <li class="has-subnav">
                    <a href="../admin_layout/admin_controller_login.php">
                    <i class="fa fa-lock" aria-hidden="true"></i>
                        <span class="nav-text">
                            Admin Controller
                        </span>
                    </a>
                    
                </li>
                <li class="has-subnav">
                    <a href="order_controller.php">
                    <i class="fa fa-book" aria-hidden="true"></i>
                        <span class="nav-text">
                            Order Controller
                        </span>
                    </a>
                   
                </li>
                <li>
                <a href="../admin_layout_edit/edit_inter.php">
                    <i class="fa fa-plus-circle" aria-hidden="true"></i>
                        <span class="nav-text">
                            Juice Item Controller
                        </span>
                    </a>
                </li>
                <li>
                <a href="sp_order_controller.php">
                <i class="fa fa-bookmark" aria-hidden="true"></i>
                        <span class="nav-text">
                           Special Order Controller
                        </span>
                    </a>
                </li>
                <li>
                   <a href="#">
                       <i class="fa fa-cogs fa-2x"></i>
                        <span class="nav-text">
                            Tools & Resources
                        </span>
                    </a>
                </li>
                <li>
                   <a href="#">
                        <i class="fa fa-map-marker fa-2x"></i>
                        <span class="nav-text">
                            Member Map
                        </span>
                    </a>
                </li>
                <li>
                    <a href="#">
                       <i class="fa fa-info fa-2x"></i>
                        <span class="nav-text">
                            Documentation
                        </span>
                    </a>
                </li>
            </ul>

            <!-- <ul class="logout">
                <li>
                   <a href="#">
                         <i class="fa fa-power-off fa-2x"></i>
                        <span class="nav-text">
                            Logout
                        </span>
                    </a>
                </li>  
            </ul> -->
        </nav> 
        
      

  </body>


  
    </html>