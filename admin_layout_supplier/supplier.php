<?php 
require_once "../login_database/dbc.php";
session_start();
?>

<html>
<head>
  <link rel="stylesheet" href="../style/supplier.css">
  <link rel="stylesheet" href="../user_layout/user_page.css">
  
  <style>
    * {
      margin: 0;
      padding: 0;
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
  <div style="position: sticky; top: 0; display: inline;">
    <h1 class="heading" style="position: absolute; top: 0; left: 40%; color: white; padding-top: 10px;">The Fresh Juice Bar</h1>
    <ul>
      <li style="float: right"><a href="../login_formate/admin_login.php">Logout</a></li>
    </ul>
  </div>

  <!-- Search bar form -->

  <div class="container" style="margin: 20px;">
    <div class="layout" style="background-color: white; width: 90%; height: 100%; float: right; padding: 7px;">
      <h1>Supplier Controller Section</h1>
      <form action="" method="POST" style="margin:1%;">
        <input type="text" id="search" name="search" placeholder="Search Data...." style="width:20%; height:5%; color:blue; 
        font-size: 20px; border:2px solid blue; padding:15px; margin-right:3%; margin-right:1%; ">
        <button type="submit" name="submit" value="Submit" style="width:5%; height:5%; background-color:black; color:white; cursor:pointer;">Search</button>
        
         <!-- Show all form -->

        <button type="submit" name="click" style = "background-color:#73dae6; color:black; float:right; display:inline; 
        width:10%; height:30px; font-weight: bold; border:3px solid red; cursor:pointer;">Show All Data</button>
      </form>

       <!-- Save Suppliers -->

      <form action="supplier_save.php" method="post">
      <button class="b_save" type="submit" name="sup_data">Add Data</button>
      </form>


   

      <form action="" method=POST style="";>
       
      </form>

      <table id="customers">
        <tr>
          <th>Supplier Id</th>
          <th>Date</th>
          <th>Company Name</th>
          <th>Phone Number</th>
          <th>Address</th>
          <th>Email</th>
          <th>Value</th>
          <th>Receivable</th>
          <th>Receivable Date</th>
          <th>Payable</th>
          <th>Payable Date</th>
          <th>Description</th>
          <th>Action</th>
        </tr>


<?php

  if(isset($_POST['click'])){

     $query = "SELECT*FROM supplier;";

     $query_run = mysqli_query($conn, $query);

     if(mysqli_num_rows($query_run)>0){
      while($suppliers=mysqli_fetch_assoc($query_run)){
        ?>

<tr>
          <td><?php echo $suppliers['id']; ?></td>
          <td><?php echo $suppliers['date']; ?></td>
          <td><?php echo $suppliers['name']; ?></td>
          <td><?php echo $suppliers['phone']; ?></td>
          <td><?php echo $suppliers['address']; ?></td>
          <td><?php echo $suppliers['email']; ?></td>
          <td><?php echo $suppliers['value']; ?></td>
          <td><?php echo $suppliers['receivable']; ?></td>
          <td><?php echo $suppliers['receivable_date']; ?></td>
          <td><?php echo $suppliers['payable']; ?></td>
          <td><?php echo $suppliers['payable_date']; ?></td>
          <td><?php echo $suppliers['desciption']; ?></td>
          
          <td>
            <form action="supplier_delete.php" method="POST">
            <button onclick="return confirmDelete();" type="submit" name="delete_supplier" value="<?php echo $suppliers['id']; ?>" style="background-color: red; color: white; height: 30px; cursor: pointer; padding: 2px;">
                Remove
              </button>
            </form>
          </td>
        </tr>
        <?php

      }
     }else{ echo "<h2 class='sup_a'>Not Found Data </h2>"; }

  }

  ?>



  
<?php 
   
        
if (isset($_POST['submit'])) {
  $search = $_POST['search'];

  if (!empty($search)) {
    $query = "SELECT * FROM supplier WHERE date LIKE '%$search%' OR name LIKE '%$search%' OR phone LIKE '%$search%' OR address LIKE '%$search%'
    OR email LIKE '%$search%'  OR value LIKE '%$search%'  OR receivable LIKE '%$search%'  OR receivable_date LIKE '%$search%'  OR payable LIKE '%$search%'
    OR payable_date LIKE '%$search%'  OR desciption LIKE '%$search%';";
    $query_run = mysqli_query($conn, $query);

    if (mysqli_num_rows($query_run) > 0) {
      while ($suppliers = mysqli_fetch_assoc($query_run)) {
        ?>
        <tr>

        
          <td><?php echo $suppliers['id']; ?></td>
          <td><?php echo $suppliers['date']; ?></td>
          <td><?php echo $suppliers['name']; ?></td>
          <td><?php echo $suppliers['phone']; ?></td>
          <td><?php echo $suppliers['address']; ?></td>
          <td><?php echo $suppliers['email']; ?></td>
          <td><?php echo $suppliers['value']; ?></td>
          <td><?php echo $suppliers['receivable']; ?></td>
          <td><?php echo $suppliers['receivable_date']; ?></td>
          <td><?php echo $suppliers['payable']; ?></td>
          <td><?php echo $suppliers['payable_date']; ?></td>
          <td><?php echo $suppliers['desciption']; ?></td>

          <td>
          <form action="supplier_delete.php" method="POST">
            <button onclick="return confirmDelete();" type="submit" name="delete_supplier" value="<?php echo $suppliers['id']; ?>" style="background-color: red; color: white; height: 30px; cursor: pointer; padding: 2px;">
                Remove
              </button>
            </form>

          
          </td>
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
                    <a href="select_users.php">
                    <i class="fa fa-users" aria-hidden="true"></i>
                        <span class="nav-text">
                            User Controller
                        </span>
                    </a>
                    
                </li>
                <li class="has-subnav">
                    <a href="admin_controller_login.php">
                    <i class="fa fa-lock" aria-hidden="true"></i>
                        <span class="nav-text">
                        Admin Controller
                        </span>
                    </a>
                    
                </li>
                <li class="has-subnav">
                <a href="../admin_layout_order/order_controller.php">
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
                <a href="../admin_layout_sp_order_controller/sp_order_controller.php">
                <i class="fa fa-bookmark" aria-hidden="true"></i>
                        <span class="nav-text">
                           Special Order Controller
                        </span>
                    </a>
                </li>
                <li>
                <a href="../admin_layout_gallery/admin_gallery_select.php">
                   <i class="fa fa-picture-o" aria-hidden="true"></i>
                        <span class="nav-text">
                            Gallery Controller
                        </span>
                    </a>
                </li>
                <li>
                <a href="../admin_layout_complaint/user_complaint_con.php">
                <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>
                        <span class="nav-text">
                            Customer Complaint
                        </span>
                    </a>
                </li>
                <li>
                <a href="../admin_layout_comment/comment_controller.php">
                    <i class="fa fa-comment-o" aria-hidden="true"></i>
                        <span class="nav-text">
                            Customer Comment
                        </span>
                    </a>
                </li>

                <li>
                    <a href="../admin_layout_contact/contact.php">
                    <i class="fa fa-phone-square" aria-hidden="true"></i>
                        <span class="nav-text">
                            Contact Us
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

       <!-- Rest of the HTML code -->

<script>
    function confirmDelete() {
        return confirm('Are you sure to delete this data?');
    }
</script>

  </body>


  
    </html>