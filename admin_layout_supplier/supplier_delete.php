<?php 

require_once "../login_database/dbc.php";

if(isset($_POST["delete_supplier"])){

    $supplierId = mysqli_real_escape_string($conn,$_POST["delete_supplier"]);

    $query = "DELETE FROM supplier WHERE id=' $supplierId';";

    $query_run=mysqli_query($conn,$query);

    if($query_run){

        header("location:../admin_layout_supplier/supplier.php?delete");
        exit(0);
       
      
    }

    else{
        
        header("location:../admin_layout_supplier/supplier.php?notDelete");
        exit(0);
        

    }
}





?>