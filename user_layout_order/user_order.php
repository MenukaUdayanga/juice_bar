

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


        /* User Order Form*/

        body {
        font-family: Arial;
        }

        input[type=text], select {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        display: block;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
        }

        button[type=submit] {
        width: 100%;
        background-color: #04AA6D;
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

        div.container {
        border-radius: 5px;
        background-color: #f2f2f2;
        
        }

        .fileds{
            width:18%;
            margin-right:19%;
            height:35px;
            margin-bottom:2%;
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

<div class="layout" style="  background-color: white; width: 70%; height:100%; margin-left:16%;
 padding:7px;">

<h1 style="margin-bottom:2%;">Coustomer Order Form</h1>


<div class="container">
  <form action="order_save.php" method="POST">
    <label for="fname">First Name</label>
    <input type="text"  name="firstname" placeholder="Your name.." required>

    <label for="lname">Last Name</label>
    <input type="text"  name="lastname" placeholder="Your last name.." required>

    
    <label for="lname">Phone Number</label>
    <input type="text"  name="phone" placeholder="077-1757836"required>

    <label for="email">Email Address </label>
    <input type="text"  name="email" placeholder="Your email .." required>
     
    <label for="address">Home Address </label>
    <textarea rows="4" cols="123"  name="address" >
    </textarea>

    <label for="juice">Juice Type</label>
    <select  name="juice">
        <?php 
        $query = "SELECT*FROM additem;";

        $query_run = mysqli_query($conn, $query);

        if($query_run){

            while($row=mysqli_fetch_assoc($query_run)){

                echo'<option value='.$row['item'].'>'.$row['item'].'</option>';
            }
        }

        else{ echo"Error executing query:".mysqli_error($conn);}
        
      
        
        ?>

    </select>
    
     
   

    <br>

    <label for="number">Glass of The Juice</label>
    <input class="fileds" type="number"  name="number" placeholder="Number of Glass .." required>

    <label for="date">Date of order</label>
    <input class="fileds" type="date"  name="orderDate"  required>
    
    <label for="date">Need Date of order</label>
    <input class="fileds" type="date"  name="needDate"  required>

    <label for="time">Need of Time</label>
    <input class="fileds" type="time"  name="time"  required>

    
    <br>

    <button type="submit" name="order">Order Now</button>
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
                           Customer Special Order
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