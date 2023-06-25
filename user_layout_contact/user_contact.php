


<?php 

session_start();

?>


<html>
  <head>

  <link rel="stylesheet" href="../style/contact.css">
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

<div class="layout" style="  width: 90%; height:100%; float:right; padding:7px;">

   

   <div class="c_main">

    

    <div class="first">
        
        
         <button type="submit" onclick="s_form()"><div class="above"><i style="font-size:100px; padding-top:50%; padding-left:95%; color:black; "  class="fa fa-comments" aria-hidden="true"></i><h1 class="m_topic">Ditrect Message</h1>
         <?php
   
            if(isset($_GET['error'])){

                if($_GET['error']=="fieledEmpty"){
                    echo '<div class="error">Not Sended Message Empty Fields!</div>';
                }

            }
            
            
            ?>
        </div></button>
         <a href="tel:+94712150586"><div class="above"><i style="font-size:100px; padding-top:50%; padding-left:120%; color:black;" class="fa fa-phone-square" aria-hidden="true"></i><h1 class="m_topic">Phone Call</h1></div></a> 
         <a href="mailto:ujayaweera738@gmail.com"><div class="above"><i style="font-size:100px; padding-top:50%; padding-left:95%; color:black;" class="fa fa-envelope" aria-hidden="true"></i><h1 class="m_topic">Send Email</h1></div></a> 
        
    </div>

   

    <div class="second">
    <a href="https://www.facebook.com/people/Tropical-Fresh/100064445149395/?mibextid=ZbWKwL"><div class="below"><i style="font-size:100px; padding-top:50%; padding-left:120%; color:black; " class="fa fa-facebook-square" aria-hidden="true"></i><h1 class="m_topic">Facebook</h1></div></a> 
    <a href="https://www.instagram.com/your_username/"><div class="below"><i style="font-size:100px; padding-top:50%; padding-left:120%; color:black; "  class="fa fa-instagram" aria-hidden="true"></i><h1 class="m_topic">Instagram</h1></div></a> 
    <a href="https://twitter.com/your_username"><div class="below"><i style="font-size:100px; padding-top:50%; padding-left:120%; color:black; "  class="fa fa-twitter-square" aria-hidden="true"></i><h1 class="m_topic">Twitter</h1></div></a> 
    </div>



   </div>


   <form action="contact_save.php"method="POST">

   <div id="kk" class="test">

   <div class="d_main">
    <h1 class="d_topic">Direct Message</h1>
    
   <label class="letter" for="">Email Address</label><br>
   <input class="field" type="email" name="email" placeholder="example@gmail.com" >

   <br>

   <label class="letter" for="">Message</label><br>
   <textarea class="field" name="message" id="" placeholder="Write...." ></textarea>
   <br>

   <button class="s_btn" type="submit" name="send">Send</button>
   <br>

   <button class="c_btn" type="submit" name="cancel" onclick="close()">Cancel</button>

   
  
   </form>
   
   </div>
   
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
                <a href="user_contact.php">
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



        <script src="../style/script.js"></script>

  </body>


  
    </html>