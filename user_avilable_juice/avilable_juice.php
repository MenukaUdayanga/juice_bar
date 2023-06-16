

<?php 

session_start();
require_once "../login_database/dbc.php";
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

       
       
</style>
 
  </head>
  <body>




  <div style="position: sticky; top:0; display: inline;">

  

    <li style="position: absolute; top:0; left:40%; color:white;   list-style-type: none; padding-top: 10px;
 "> <h1 class="heading">The Fresh juice bar</h1></li>
  <ul>

  <?php 
if(isset($_SESSION["userName"])){

    echo '<li style="float:right"><a href="../login_formate/user_login.php">logout</a></li>';
    echo '<li style="float:right"><a href="#"> Wellcome &nbsp; User &nbsp;'.$_SESSION["userName"].' !</a></li>';
    
}
else{
    echo '<li style="float:right"><a href="../login_formate/user_login.php">login</a></li>';
}

?>
  
</ul>

</div>






    
<div class="container" style="margin:20px;">

<div class="layout" style="  background-color: white; width: 90%; height:100%; float:right; padding:7px;">

   <h1>I can do that so far</h1>

   <?php 
   
    $query = "SELECT* FROM availablejuice;";

    $query_run=mysqli_query($conn,$query);

    if(mysqli_num_rows($query_run)>0){

        while($row= mysqli_fetch_assoc($query_run)){

          echo  '<h1>'.$row['row'].'</h1>';
          echo  '<h1>'.$row['row1'].'</h1>';
          echo  '<h1>'.$row['row2'].'</h1>';
            
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
                    <a href="../user_layout_order/user_order.php">
                    <i class="fa fa-book" aria-hidden="true"></i>
                        <span class="nav-text">
                            Customer Order
                        </span>
                    </a>
                    
                </li>
                <li class="has-subnav">
                    <a href="../user_special_order/user_sp_order.php">
                    <i class="fa fa-bookmark" aria-hidden="true"></i>
                        <span class="nav-text">
                           User Special Order
                        </span>
                    </a>
                    
                </li>
                <li class="has-subnav">
                    <a href="avilable_juice.php">
                       <i class="fa fa-camera-retro fa-2x"></i>
                        <span class="nav-text">
                          Avilable Juice
                        </span>
                    </a>
                   
                </li>
                <li>
                    <a href="#">
                        <i class="fa fa-film fa-2x"></i>
                        <span class="nav-text">
                            Surveying Tutorials
                        </span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fa fa-book fa-2x"></i>
                        <span class="nav-text">
                           Surveying Jobs
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