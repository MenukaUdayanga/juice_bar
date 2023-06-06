<?php 

require_once "../login_database/dbc.php";
require_once "admin_controller_function.php";

if(isset($_POST['submit'])){

    $adminName= $_POST['adminName'];
    $password= $_POST['password'];

    $mainAdminLogin=mainAdminLogin($adminName, $password);

    if($mainAdminLogin!==false){

        header("location:../admin_layout/admin_controller_login.php?error=emptyFileds");
        exit();
    }

    AdminLogin($conn,$adminName,$password);

     
}
    else{
        header("location:/admin_controller_login.php?error=empty");
        exit();
    }


   





?>