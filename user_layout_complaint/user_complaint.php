

<?php 

session_start();

?>


<html>
  <head>

  <link rel="stylesheet" href="../user_layout/user_page.css">

  <link rel="stylesheet" href="../style/user_complaint.css">
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

   <div class="circle"></div>
   <div class="circle1"></div>
   <div class="circle2"></div>
   <div class="circle3"></div>
   <div class="circle4"></div>
   

   <div class="main">

    <h1 class="c_topic">Customer Complaint Section</h1>

    <form action="complaint_fun.php" method="post">

    <label for="" class="lv">First Name</label>
    <br>
    <input class="box" type="text" name="fName" placeholder="First Name.." required>
    <br>


    <label for="" class="lv">Last Name</label>
    <br>
    <input class="box" type="text" name="lName" placeholder="Last Name.." required>
    <br>


    <label for="" class="lv">Email Address</label>
    <br>
    <input class="box" type="email" name="email" placeholder="exaple@gamail.com" required>
    <br>


    <label for="" class="lv">Phone Number</label>
    <br>
    <input  class="box" type="text" name="number" placeholder="066-0000000" required>
    <br>


    <label for="" class="lv">Complaint</label>
    <br>
    <textarea class="area" name="c_complaint" id=""  placeholder="I have a complaint" required></textarea>


    <br>
    <br>
    <button type="submit" class="bt" name="c_file">File Complaint</button>

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