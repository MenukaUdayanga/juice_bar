

<?php 

session_start();
require_once "../login_database/dbc.php";

?>


<html>
  <head>

  <link rel="stylesheet" href="../style/comment.css">
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

   

   <div class="com">

   <h1 class="c_topic">Type Anycomment Regrading Service</h1>

   <form action="comment_fun.php" method="post">

   <label class="ll" for="">Email Address</label><br>
   <input class="filed" type="email" name="email" placeholder="example@gmail.com" required>
   <br>
   
   <label class="ll" for="">Comment</label><br>
   <input class="filed" type="text" name="message" placeholder="Comment"  required>
   <br>

   <label class="ll" for="">Date</label> <br>
   <input class="filed" type="date" name="date" placeholder="2023/05/08" required >
   <br>

   <button class="btn" type="submit" name="save">Comment</button>

   </form>

   </div>


   <!-- Select Customer Cooment -->

   


   <div class="main_squire">

   <h1 class="r_topic">Customer Comment Regarding our Products</h1>

     <?php 
     
     $query = "SELECT*FROM comment";

     $query_run = mysqli_query($conn,$query);

     while($com = mysqli_fetch_array($query_run) ){

        echo "<div class='squire'>";

        echo "<p class='mail'><i style ='font-size:35px; display:inline; color:red;padding-right: 1%;' class='fa fa-user' aria-hidden='true'></i> " . $com['email'] . "</p>";

        echo "<p class='c_date'>". $com['date'] . "</p>";

        echo "<p class='f_com'>". $com['c_comment'] . "</p>";

        echo "</div>";

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
                    <a href="../user_layout/dashboard.php">
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
                <a href="../user_avilable_juice/avilable_juice.php">
                    <i class="fa fa-picture-o" aria-hidden="true"></i>
                        <span class="nav-text">
                            Juice Gallery
                        </span>
                    </a>
                   
                </li>
                <li>
                    <a href="../user_layout_complaint/user_complaint.php">
                    <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>
                        <span class="nav-text">
                            Customer Complaint
                        </span>
                    </a>
                </li>
                <li>
                <a href="user_comment.php">
                    <i class="fa fa-comment-o" aria-hidden="true"></i>
                        <span class="nav-text">
                           Customer Comment
                        </span>
                    </a>
                </li>
                <li>
                <a href="../user_layout_contact/user_contact.php">
                   <i class="fa fa-phone-square" aria-hidden="true"></i>
                        <span class="nav-text">
                            Contact Us
                        </span>
                    </a>
                </li>
                <li>
                <a href="../user_layout_about/about_us.php">
                   <i class="fa fa-info fa-2x"></i>             
                        <span class="nav-text">
                           About Us
                        </span>
                    </a>
                </li>
                <li>
                <a href="../user_layout_map/map.php">
                    <i class="fa fa-map-marker fa-2x"></i>
                        <span class="nav-text">
                           Location
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