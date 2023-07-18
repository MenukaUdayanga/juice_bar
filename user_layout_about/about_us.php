

<?php 

session_start();

?>


<html>
  <head>

  <link rel="stylesheet" href="../user_layout/user_page.css">
  <link rel="stylesheet" href="../style/about.css">
  
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

<div class="layout" style="  width: 90%; height:100%; float:right; padding:7px;">
<h1 class="p_topic">About Our Juice bar</h1>
<img class="im" src="picture/about.jpg" alt="" srcset="">

   <div class="a_manin">


   <div class="box">
    <h3 class="a_topic">Our Shop</h3>
    <p class="a_des">Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit, quia. 
        Enim dolore dignissimos debitis, accusamus velit nulla natus sunt beatae ullam. Asperiores
         dignissimos expedita pariatur<span  id="dot">...</span> <span class="h_text" id="more">Saepe perferendis, nostrum quae officiis tenetur molestias 
         maiores inventore? Cum ullam in officiis nesciunt 
        non quam deleniti. Maxime nemo dicta velit est delectus quasi similique!</span></p>
        <button type="submit" class="a_btn" onclick="read()" id="btn_text" >Read more</button>
   </div>
   <div  class="box">
    
   <h3 class="a_topic">Product & Services</h3>

  

   <p class="a_des">Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit, quia. 
        Enim dolore dignissimos debitis, accusamus velit nulla natus sunt beatae ullam. Asperiores
         dignissimos expedita pariatur<span  id="dot1">...</span> <span class="h_text" id="more1">Saepe perferendis, nostrum quae officiis tenetur molestias 
         maiores inventore? Cum ullam in officiis nesciunt 
        non quam deleniti. Maxime nemo dicta velit est delectus quasi similique!</span></p>

        <button type="submit" class="a_btn" onclick="read1()" id="btn_text1" >Read more</button>

        
        
   </div>
   
   <div  class="box">
   <h3 class="a_topic">Ownership</h3>
   <p class="a_des">Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit, quia. 
        Enim dolore dignissimos debitis, accusamus velit nulla natus sunt beatae ullam. Asperiores
         dignissimos expedita pariatur<span  id="dot2">...</span> <span class="h_text" id="more2">Saepe perferendis, nostrum quae officiis tenetur molestias 
         maiores inventore? Cum ullam in officiis nesciunt 
        non quam deleniti. Maxime nemo dicta velit est delectus quasi similique!</span></p>

        <button type="submit" class="a_btn" onclick="read2()" id="btn_text2" >Read more</button>
   </div>

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
                   <a href="about_us.php">
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
        
      <script src="../style/about.js"></script>

  </body>


  
    </html>