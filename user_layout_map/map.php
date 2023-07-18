

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

   <p><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3947.4437086520725!2d80.49909267419638!3d8.357936399133857!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3afc8bb50e4a5211%3A0x8982eeef6ad20ad9!2sFruit%20Juice%20bar!5e0!3m2!1sen!2slk!4v1688198383303!5m2!1sen!2slk" 
    width="100%" height="450px" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></p>

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
                   <a href="../user_layout_about/about_us.php">
                   <i class="fa fa-info fa-2x"></i>             
                        <span class="nav-text">
                           About Us
                        </span>
                    </a>
                </li>
                <li>
                <a href="map.php">
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