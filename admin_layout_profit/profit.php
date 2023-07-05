

<?php 

session_start();

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

   <h1 class="t_profit">Profit Calulation And Save</h1>


  
   <form action="profit_fun.php" method="post">

   <label for="" class="head">Select Date</label><br>
   <input class="t_field" type="date" name="date" id="">
   <br>

   <label for="" class="head">Today Income</label><br>
   <input class="t_field" type="text" id="income" name="income"  placeholder="Enter Income.." required>
   <br>

   <label for="" class="head">Today Expentiture</label><br>
   <input class="t_field" type="text" id="expence" name="expence"  placeholder="Enter Expence.." required>
   <br>
   
   <label for="" class="head">Today Profit</label><br>
   <div class="a_field" id="answer" type="text"></div>
   <br>

   <label for="" class="head">Re-enter Above Profit</label><br>
   <input class="t_field" type="text"  name="profit"  placeholder="Enter Expence.." required>
   <br>

   
   
   <button class="b_btn" type="submit" name="p_data">Save</button>
  

   </form>

   
   <br>
   <button class="c_btn" type="submit" name="cal" onclick="profi()">Calculate</button>
   <br>
   
   

  
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