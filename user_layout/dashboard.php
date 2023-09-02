

<?php 

session_start();

?>


<html>
  <head>

  <link rel="stylesheet" href="../style/a_dashboard.css">
  <link rel="stylesheet" href="user_page.css">
  <link rel="stylesheet" href="../style/u_dashboard.css">
  
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




  <div style="position: sticky; top:0; display: inline; z-index: 1;">

  

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

  

<div class="l_card">


<div class="f_handle">
<a style="text-decoration: none; color:black;" href="../user_layout_order/user_order.php"><div class="f_card">  <i style="font-size:100px; padding-top:30%; padding-left:70%; color:black;" class="fa fa-book" aria-hidden="true"></i>
  <div style="text-align:center; padding-top:8%;"><h3>Customer Order</h3></div></a>
</div>

<a style="text-decoration: none; color:black;" href="../user_special_order/user_sp_order.php"><div class="f_card">  <i style="font-size:100px; padding-top:50%; padding-left:100%; color:black;" class="fa fa-bookmark" aria-hidden="true"></i>
  <div style="text-align:center; padding-top:8%;"><h3>User Special Order</h3></div></a>
</div>

<a style="text-decoration: none; color:black;" href="../user_avilable_juice/avilable_juice.php"><div class="f_card">  <i style="font-size:100px; padding-top:35%; padding-left:55%; color:black;" class="fa fa-picture-o" aria-hidden="true"></i>
  <div style="text-align:center; padding-top:8%;"><h3>Juice Gallery</h3></div></a>
</div>

<a style="text-decoration: none; color:black;" href="../user_layout_complaint/user_complaint.php"><div class="f_card">  <i style="font-size:100px; padding-top:40%; padding-left:60%; color:black;" class="fa fa-exclamation-triangle" aria-hidden="true"></i>
  <div style="text-align:center; padding-top:8%;"><h3> Customer Complaint</h3></div></a>
</div>

</div>




<div class="f_handle">
<a style="text-decoration: none; color:black;" href="../user_layout_comment/user_comment.php"><div class="f_card">  <i style="font-size:100px; padding-top:40%; padding-left:60%; color:black;" class="fa fa-comment-o" aria-hidden="true"></i>
  <div style="text-align:center; padding-top:8%;"><h3>Customer Comment</h3></div></a>
</div>

<a style="text-decoration: none; color:black;" href="../user_layout_contact/user_contact.php"><div class="f_card">  <i style="font-size:100px; padding-top:50%; padding-left:80%; color:black;" class="fa fa-phone-square" aria-hidden="true"></i>
  <div style="text-align:center; padding-top:8%;"><h3> Contact Us</h3></div></a>
</div>

<a style="text-decoration: none; color:black;" href="../user_layout_about/about_us.php"><div class="f_card">  <i style="font-size:100px; padding-top:80%; padding-left:150%; color:black;"  class="fa fa-info fa-2x"></i>
 <div style="text-align:center; padding-top:8%;"><h3>About Us</h3></div></a>
</div>

<a style="text-decoration: none; color:black;" href="../user_layout_map/map.php"><div class="f_card">  <i style="font-size:100px; padding-top:70%; padding-left:130%; color:black;" class="fa fa-map-marker fa-2x"></i>
 <div style="text-align:center; padding-top:8%;"><h3>Location</h3></div></a>
</div>

</div>

</div>


<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="../admin_layout_gallery/images/one.jpg" style="width:100%">
  <div class="text">Our Juice</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="../admin_layout_gallery/images/two.jpg" style="width:100%">
  <div class="text">Quality Juice</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="../admin_layout_gallery/images/three.jpg" style="width:100%">
  <div class="text">Fresh Juice</div>
</div>

<a class="prev" onclick="plusSlides(-1)">❮</a>
<a class="next" onclick="plusSlides(1)">❯</a>

</div>
<br>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
</div>

</div> 

</div>


<nav class="main-menu">
            <br>
            <br>
            <br>
            <ul>
                <li>
                    <a href="dashboard.php">
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
                    <a href="../user_layout_comment/user_comment.php">
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
        
    <script src="../style/slide.js"></script>
  </body>


  
    </html>