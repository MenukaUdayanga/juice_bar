<?php 


require_once "../login_database/dbc.php";


if(isset($_POST["delete_orders"])){

    $orderId = mysqli_real_escape_string($conn,$_POST["delete_orders"]);

    $query = "DELETE FROM userspecialorder WHERE id='$orderId';";

    $query_run=mysqli_query($conn,$query);

    if($query_run){

        header("location:../admin_layout_sp_order_controller/sp_order_controller.php?delete");
        exit(0);
       
      
    }

    else{

        header("location:../admin_layout_sp_order_controller/sp_order_controller.php?error=notSent");
        exit(0);
        

    }
}


?>