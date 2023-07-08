


<?php 

session_start();
require_once "../login_database/dbc.php";

?>


<html>
  <head>

  <link rel="stylesheet" href="../user_layout/user_page.css">
  <link rel="stylesheet" href="../style/save_supplier.css">
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

  

    <li style="position: absolute; top:0; left:40%; color:white;   list-style-type: none; padding-top: 10px;"> <h1 class="heading">The Fresh juice bar</h1></li>
  <ul>

 <li style="float:right"><a href="../login_formate/admin_login.php">logout</a></li>;

 
  
</ul>

</div>






    
<div class="container" style="margin:20px;">

     
<div class="layout" style="  background-color: white; width: 90%; height:100%; float:right; padding:7px;">

<a style="float:right;  z-index: -5; " href="../admin_layout_supplier/supplier.php"><i style="font-size: 40px;" class="fa fa-arrow-circle-o-left" aria-hidden="true"></i></a>

   <h3 class="m_topic">Suppiler Data Update Form</h3>

<div>

   <?php 
   
 if(isset($_GET['id'])){

    $supplierId = $_GET['id'];

   $query = "SELECT*FROM supplier WHERE id='$supplierId';";

   $query_run = mysqli_query($conn,$query);

   if(mysqli_num_rows( $query_run)>0){
   
    $suppliers=mysqli_fetch_array($query_run);
   
   ?>

  <form action="update_code.php" method="POST">

    
    <input type="hidden" value="<?= $suppliers['id'];?>" name="s_id">

    <label for="lname">Date</label>
    <input class="su_date" type="date"  name="date" value="<?= $suppliers['date'];?>">

    <label for="fname">Company/Supplier Name</label>
    <input type="text" name="name" placeholder="ABC Company/Jayasighe" value="<?= $suppliers['name'];?>" required>

    <label for="fname">Phone Number</label>
    <input type="text" name="phone" placeholder="066-7785432" value="<?= $suppliers['phone'];?>" required>

    <label for="fname">Address</label>
    <input type="text" name="address" placeholder="No.55-Anukumbura,Kandy" value="<?= $suppliers['address'];?>" required>

    <label for="fname">Email</label>
    <input type="text" name="email" placeholder="example@gmail.com" value="<?= $suppliers['email'];?>" required>

    <label for="fname">Amount</label>
    <input type="text" name="price" placeholder="120,453" value="<?= $suppliers['value'];?>">

    <label for="fname">Receivable</label>
    <input type="text" name="receivable" placeholder="12,000" value="<?= $suppliers['receivable'];?>">

    <label for="fname">Receivable Date</label>
    <input class="su_date" type="date" name="receivable_date" value="<?= $suppliers['receivable_date'];?>">

    <label for="fname">Payable</label>
    <input type="text" name="payable" placeholder="10,000" value="<?= $suppliers['payable'];?>">

    <label for="fname">Payable Date</label>
    <input class="su_date" type="date" name="payable_date" value="<?= $suppliers['payable_date'];?>">

    <label for="fname">Desctiption</label>
    <input type="text" name="des" placeholder="dessciption" value="<?= $suppliers['desciption'];?>">


    <button type="submit" name="data_update">Update Data</button>

  </form>

  <?php 
  
   }
  
}
  
  ?>
</div>

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
                    <a href=" ../admin_layout/admin_controller_login.php">
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

                <li>
                    <a href="supplier.php">
                    <i class="fa fa-truck" aria-hidden="true"></i>
                        <span class="nav-text">
                            Supplier Controller
                        </span>
                    </a>
                </li>

                <li>
                    <a href="../admin_layout_profit/show_profit.php">
                    <i class="fa fa-money" aria-hidden="true"></i>
                        <span class="nav-text">
                            Profit Handling
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