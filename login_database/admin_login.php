<?php
    require_once 'dbc.php';
    require_once '../admin_layout/admin_controller_function.php';
   

?>

<?php

if(isset($_POST['submit'])){

    $adminName=$_POST['adminName'];
    $password=$_POST['password'];




   
    $emptyUid = emptyUid($adminName,$password);

    if( $emptyUid!== false){

        header("location:../login_formate/admin_login.php?error=emptyInputs");
        exit();
    }

    

    LoginAdmin($conn,$adminName,$password);

   
}

    else{

        header("location:../login_formate/admin_login.php?error=WrongLogin");
    }




?>