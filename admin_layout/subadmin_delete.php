<?php 

require_once "../login_database/dbc.php";

if(isset($_POST["delete_admins"])){

    $adminId = mysqli_real_escape_string($conn,$_POST["delete_admins"]);

    $query = "DELETE FROM admin WHERE id=' $adminId';";

    $query_run=mysqli_query($conn,$query);

    if($query_run){

        header("location:../admin_layout/admin_controller_data.php?delete");
        exit(0);
       
      
    }

    else{

        header("location:../admin_layout/admin_controller_data.php?notDelete");
        exit(0);
        

    }
}





?>