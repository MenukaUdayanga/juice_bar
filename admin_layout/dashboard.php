

<?php 
require_once "../login_database/dbc.php";
session_start();

$dataPoints1 = array();
$dataPoints2 = array();
$dataPoints3 = array();

$query = "SELECT * FROM profitchart";
$query_run = mysqli_query($conn, $query);

while ($row = mysqli_fetch_array($query_run)) {
    $dataPoints1[] = array("label" => $row["year"], "y" => $row["income"]);
    $dataPoints2[] = array("label" => $row["year"], "y" => $row["expense"]);
    $dataPoints3[] = array("label" => $row["year"], "y" => $row["profit"]);
}

?>


<html>
  <head>

  <script src="https://cdn.canvasjs.com/canvasjs.min.js"></script>
    <script>
        window.onload = function() {
            var chart = new CanvasJS.Chart("chartContainer", {
                animationEnabled: true,
                theme: "light2",
                title: {
                    text: "The Summery Of Finance For Years"
                },
                axisY: {
                    includeZero: true
                },
                legend: {
                    cursor: "pointer",
                    verticalAlign: "center",
                    horizontalAlign: "right",
                    itemclick: toggleDataSeries
                },
                data: [{
                    type: "column",
                    name: "Income",
                    indexLabel: "{y}",
                    yValueFormatString: "LKR#0.##",
                    showInLegend: true,
                    dataPoints: <?php echo json_encode($dataPoints1, JSON_NUMERIC_CHECK); ?>
                }, {
                    type: "column",
                    name: "Expense",
                    indexLabel: "{y}",
                    yValueFormatString: "LKR#0.##",
                    showInLegend: true,
                    dataPoints: <?php echo json_encode($dataPoints2, JSON_NUMERIC_CHECK); ?>
                }, {
                    type: "column",
                    name: "profit",
                    indexLabel: "{y}",
                    yValueFormatString: "LKR#0.##",
                    showInLegend: true,
                    dataPoints: <?php echo json_encode($dataPoints3, JSON_NUMERIC_CHECK); ?>
                }]
            });

            chart.render();

            function toggleDataSeries(e) {
                if (typeof(e.dataSeries.visible) === "undefined" || e.dataSeries.visible) {
                    e.dataSeries.visible = false;
                } else {
                    e.dataSeries.visible = true;
                }
                chart.render();
            }
        }
    </script>

  <link rel="stylesheet" href="../user_layout/user_page.css">
  <link rel="stylesheet" href="../style/a_dashboard.css">
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




  <div style="position: sticky; top:0; display: inline; z-index:1;">

  

    <li style="position: absolute; top:0; left:40%; color:white;   list-style-type: none; padding-top: 10px;
 "> <h1 class="heading">The Fresh juice bar</h1></li>
  <ul>

 <li style="float:right"><a href="../login_formate/admin_login.php">logout</a></li>;

 
  
</ul>

</div>






    
<div class="container" style="margin:20px; ">

     
<div class="layout" style="  background-color: white; width: 90%; height:800; float:right; padding:7px;  ">

<div id="chartContainer" style="height: 370px; width: 100%; "></div>
<script src="https://cdn.canvasjs.com/canvasjs.min.js"></script>


<div class="l_card">


 <div class="f_handle">
  <a style="text-decoration: none; color:black;" href="../admin_layout/select_users.php"><div class="f_card">  <i style="font-size:100px; padding-top:30%; padding-left:55%; color:black;" class="fa fa-users" aria-hidden="true"></i>
  <div style="text-align:center; padding-top:8%;"><h3> User Controller</h3></div></a>
</div>

<a style="text-decoration: none; color:black;" href="../admin_layout/admin_controller_login.php"><div class="f_card">  <i style="font-size:100px; padding-top:40%; padding-left:120%; color:black;" class="fa fa-lock" aria-hidden="true"></i>
  <div style="text-align:center; padding-top:8%;"><h3> Admin Controller</h3></div></a>
</div>

<a style="text-decoration: none; color:black;" href="../admin_layout_order/order_controller.php"><div class="f_card">  <i style="font-size:100px; padding-top:30%; padding-left:70%; color:black;" class="fa fa-book" aria-hidden="true"></i>
  <div style="text-align:center; padding-top:8%;"><h3> Order Controller</h3></div></a>
</div>

<a style="text-decoration: none; color:black;" href="../admin_layout_edit/edit_inter.php"><div class="f_card">  <i style="font-size:100px; padding-top:30%; padding-left:80%; color:black;" class="fa fa-plus-circle" aria-hidden="true"></i>
  <div style="text-align:center; padding-top:8%;"><h3>Juice Item Controller</h3></div></a>
</div>
 
</div>




<div class="f_handle">
<a style="text-decoration: none; color:black;" href="../admin_layout_sp_order_controller/sp_order_controller.php"><div class="f_card">  <i style="font-size:100px; padding-top:50%; padding-left:100%; color:black;" class="fa fa-bookmark" aria-hidden="true"></i>
  <div style="text-align:center; padding-top:8%;"><h3> Special Order Controller</h3></div></a>
</div>

<a style="text-decoration: none; color:black;" href="../admin_layout_gallery/admin_gallery_select.php"><div class="f_card">  <i style="font-size:100px; padding-top:35%; padding-left:55%; color:black;" class="fa fa-picture-o" aria-hidden="true"></i>
  <div style="text-align:center; padding-top:8%;"><h3> Gallery Controller</h3></div></a>
</div>

<a style="text-decoration: none; color:black;" href="../admin_layout_complaint/user_complaint_con.php"><div class="f_card">  <i style="font-size:100px; padding-top:40%; padding-left:60%; color:black;" class="fa fa-exclamation-triangle" aria-hidden="true"></i>
  <div style="text-align:center; padding-top:8%;"><h3> Customer Complaint</h3></div></a>
</div>

<a style="text-decoration: none; color:black;" href="../admin_layout_comment/comment_controller.php"><div class="f_card">  <i style="font-size:100px; padding-top:40%; padding-left:60%; color:black;" class="fa fa-comment-o" aria-hidden="true"></i>
  <div style="text-align:center; padding-top:8%;"><h3>Customer Comment</h3></div></a>
</div>
 
</div>


<div class="f_handle">
<a style="text-decoration: none; color:black;" href="../admin_layout_contact/contact.php"><div class="f_card">  <i style="font-size:100px; padding-top:50%; padding-left:80%; color:black;" class="fa fa-phone-square" aria-hidden="true"></i>
  <div style="text-align:center; padding-top:8%;"><h3> Contact Us</h3></div></a>
</div>

<a style="text-decoration: none; color:black;" href="../admin_layout_supplier/supplier.php"><div class="f_card">  <i style="font-size:100px; padding-top:45%; padding-left:55%; color:black;" class="fa fa-truck" aria-hidden="true"></i>
  <div style="text-align:center; padding-top:8%;"><h3> Supplier Controller</h3></div></a>
</div>

<a style="text-decoration: none; color:black;" href="../admin_layout_profit/show_profit.php"><div class="f_card">  <i style="font-size:100px; padding-top:40%; padding-left:50%; color:black;" class="fa fa-money" aria-hidden="true"></i>
  <div style="text-align:center; padding-top:8%;"><h3> Profit Handling</h3></div></a>
</div>

<a style="text-decoration: none; color:black;" href="../admin_layout_profitYear/show_profit.php"><div class="f_card">  <i style="font-size:100px; padding-top:40%; padding-left:60%; color:black;" class="fa fa-bullhorn" aria-hidden="true"></i>
  <div style="text-align:center; padding-top:8%;"><h3>Annual Profit</h3></div></a>
</div>
 
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

                <li>
                    <a href="../admin_layout_profit/show_profit.php">
                    <i class="fa fa-money" aria-hidden="true"></i>
                        <span class="nav-text">
                            Profit Handling
                        </span>
                    </a>
                </li>

                <li>
                    <a href="../admin_layout_profitYear/show_profit.php">
                    <i class="fa fa-bullhorn" aria-hidden="true"></i>
                        <span class="nav-text">
                            Annual Profit
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