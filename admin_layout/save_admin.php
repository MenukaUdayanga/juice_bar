

<?php 

session_start();

?>


<html>
  <head>

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

        /* Save Admin page Form Style */

        input[type=text],[type=password], select {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
        }

        button[type=submit] {
        width: 100%;
        background-color: #4CAF50;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        }

        button[type=submit]:hover {
        background-color: #45a049;
        }

        div {
        border-radius: 5px;
        background-color: #f2f2f2;
      
        }

        /* error handling */

        .alert {
            padding: 10px;
            background-color: #f44336;
            color: white;
            opacity: 0.7;
            transition: opacity 0.6s;
            margin-bottom: 15px;
            width:30%;
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

<a style="float:right; " href="../admin_layout/admin_controller_data.php"><i style="font-size: 40px;" class="fa fa-arrow-circle-o-left" aria-hidden="true"></i></a>

<h1 style="margin-bottom:50px;">Adding New admin</h1>

<div>

  <form action="../admin_layout/save_admin_function.php" method="POST">
    <label for="fname">Admin Username</label>
    <input type="text"  name="adminName" placeholder="UserName..">

    <label for="lname">Password</label>
    <input type="password" name="password" placeholder="Password..">

    <?php 
        if(isset($_GET["error"])){
            
            if(($_GET["error"]=="dataEmpty")){
                echo '<div class="alert">
                <span class="closebtn">&times;</span> 
                <strong> Error!</strong> Required to fill all the fields..!
              </div>';

              }

               else if(($_GET["error"]=="uidExit")){
                echo '<div class="alert">
                <span class="closebtn">&times;</span>  
                <strong>Error!</strong> UserName Already Exit..!
              </div>';

              }

       }

        ?>


  
    <button type="submit" name="save_admin">Add Admin</button>

  </form>
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