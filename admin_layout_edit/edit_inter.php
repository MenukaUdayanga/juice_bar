

<?php 

session_start();
require_once "../login_database/dbc.php";

?>


<html>
  <head>

  <link rel="stylesheet" href="../user_layout/user_page.css">
  <link rel="stylesheet" href="item.css">
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


        /* Error Handling */

        .alert {
        margin-left:10%;
        margin-top:10px;
        padding: 10px;
        background-color: #c41831;
        color: white;
        opacity: 0.7;
        transition: opacity 0.6s;
        margin-bottom: 15px;
        width:25%;
       
      }

      .alert.success {background-color: #04AA6D;}
      .alert.info {background-color: #2196F3;}
      .alert.warning {background-color: #f05951;}

      .closebtn {
        margin-left: 15px;
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




  <div style="position: sticky; top:0; display: inline;">

  

    <li style="position: absolute; top:0; left:40%; color:white;   list-style-type: none; padding-top: 10px;
 "> <h1 class="heading">The Fresh juice bar</h1></li>
  <ul>

 <li style="float:right"><a href="../login_formate/admin_login.php">logout</a></li>;

 
  
</ul>

</div>






    
<div class="container" style="margin:20px;">

     
<div class="layout" style="  background-color: white; width: 90%; height:100%; float:right; padding:7px;">

   <h1>Juice Item Controller Table</h1>

    <form action="edit_code.php" method="POST">

     <div style="margin:2%;">

    <label style=" font-size:25px;">Enter Juice</label>
   <input type="text" name="item" id="" placeholder="Enter Juice Name" style="border: 2px solid blue; width:17%; height:40px; font-size:20px;margin-left:1%;">

   <button type="submit" name="add" style="width:9%; height:40px; margin-left:1%; color:white; 
   background-color:#d61834; cursor: pointer; border-radius: 10px;">Add Item</button>


 <!-- Login page php error handling -->
          
      <?php 

      if(isset($_GET["error"])){

        if(($_GET["error"]=="empty")){
          echo '<div class="alert">
          <span class="closebtn">&times;</span> 
          <strong> Error!</strong>The text field is empty..!
        </div>';

        }

        else if(($_GET["error"]=="uidExit")){
          echo '<div class="alert">
          <span class="closebtn">&times;</span>  
          <strong>Error!</strong> That item already entered..!
        </div>';

        }

        

        }

        ?>


   </div>
    
</form>


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
          <th>Item Id</th>
          <th>Juice Name</th>
          <th>Edit</th>
          <th>Remove</th>
          
        </tr>


<?php

  if(isset($_POST['click'])){

     $query = "SELECT*FROM additem;";

     $query_run = mysqli_query($conn, $query);

     if(mysqli_num_rows($query_run)>0){
      while($items=mysqli_fetch_assoc($query_run)){
        ?>

<tr>
          <td><?php echo $items['id']; ?></td>
          <td><?php echo $items['item']; ?></td>


          <td>

          <a href="edit_order.php?id=<?= $items['id']; ?>"  style="  text-decoration: none; background-color:#32459c ; color: white; height: 30px; cursor: pointer; padding: 5px;" >Edit</a>
          </td>
          
         
          <td>
            <form action="function.php" method="POST">
            <button onclick="return confirmDelete();" type="submit" name="delete_item" value="<?php echo $items['id']; ?>" style="background-color: red; color: white; height: 30px; cursor: pointer; padding: 2px;">
              Delete
              </button>
            </form>
          </td>
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
    $query = "SELECT * FROM additem WHERE item LIKE '%$search%';";
    $query_run = mysqli_query($conn, $query);

    if (mysqli_num_rows($query_run) > 0) {
      while ($items = mysqli_fetch_assoc($query_run)) {
        ?>
        <tr>
         
          <td><?php echo $items['id']; ?></td>
          <td><?php echo $items['item']; ?></td>

          <td>

          <a href="edit_order.php?id=<?= $items['id']; ?>"  style="  text-decoration: none; background-color:#32459c ; color: white; height: 30px; cursor: pointer; padding: 5px;" >Edit</a>
          </td>

          <td>

          <form action="function.php" method="POST">
          <button onclick="return confirmDelete();" type="submit" name="delete_item" value="<?php echo $items['id']; ?>" style="background-color: red; color: white; height: 30px; cursor: pointer; padding: 2px;">
          Delete
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


   

</div>


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
                    <a href="../admin_layout_order/order_controller.php">
                    <i class="fa fa-book" aria-hidden="true"></i>
                        <span class="nav-text">
                            Order Controller
                        </span>
                    </a>
                   
                </li>
                <li>
                    <a href="edit_inter.php">
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
        
      
        <script>
        function confirmDelete() {
        return confirm('Are you sure to delete this user?');
          }
        </script>

  </body>


  
    </html>