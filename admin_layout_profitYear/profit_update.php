


<?php 

session_start();
require_once "../login_database/dbc.php";

?>


<html>
  <head>

  
  <link rel="stylesheet" href="../user_layout/user_page.css">
  <link rel="stylesheet" href="../style/profit.css">
  
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






    
<div class="container" style="margin:20px;">

     
<div class="layout" style="  background-color: white; width: 90%; height:100%; float:right; padding:7px;">

<a style="float:right; " href="../admin_layout_profitYear/show_profit.php"><i style="font-size: 40px;" class="fa fa-arrow-circle-o-left" aria-hidden="true"></i></a>

   <h1 class="t_profit">Profit Calulation And Update</h1>


   <?php

if(isset($_GET['id'])){

    $profit_id = mysqli_real_escape_string($conn,($_GET['id']));
    $query = "SELECT*FROM profitchart WHERE id=' $profit_id ';";
    $query_run=mysqli_query($conn,$query);

    if(mysqli_num_rows($query_run)>0){

        $profit = mysqli_fetch_array($query_run);

        

         ?>
  
   <form action="update_fun.php" method="post">

   <input type="hidden" value="<?= $profit['id'];?>" name="id">

   <label for="" class="head">Enter Year</label><br>
   <input class="t_field" value="<?= $profit['year'];?>" type="year" name="year" id="" placeholder="Enter Year">
   <br>

   <label for="" class="head">Annual Income</label><br>
   <input class="t_field" value="<?= $profit['income'];?>" type="text" id="income" name="income"  placeholder="Enter Income.." required>
   <br>

   <label for="" class="head">Annual Expentiture</label><br>
   <input class="t_field" value="<?= $profit['expense'];?>" type="text" id="expence" name="expense"  placeholder="Enter Expence.." required>
   <br>
   
   <label for="" class="head">Annual Profit</label><br>
   <div class="a_field" value="<?= $profit['profit'];?>" id="answer"  type="text"></div>
   <br>

   <label for="" class="head">Re-enter Above Profit</label><br>
   <input class="t_field" value="<?= $profit['profit'];?>" type="text"  name="profit"  placeholder="Enter Profit.." required>
   <br>

   
   
   <button class="b_btn" type="submit" name="p_update">Update</button>
  

   </form>

   
   <br>
   <button class="c_btn" type="submit" name="cal" onclick="profi()">Calculate</button>
   <br>
   
   
   <?php 

}

               else{

                echo"<h4>No such Id Found</h4>";
              
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
                    <a href="../admin_layout/dashboard.php">
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

                <li>
                    <a href="../admin_layout_supplier/supplier.php">
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

                <li>
                    <a href="../admin_layout_profitYear/show_profit.php">
                    <i class="fa fa-bullhorn" aria-hidden="true"></i>
                        <span class="nav-text">
                            Annual Profit
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
        
      

    <script src="../style/profit.js"></script>

  </body>


  
    </html>