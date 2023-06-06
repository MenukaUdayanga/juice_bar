<?php
    require_once 'dbc.php';
    require_once 'db_function.php';
   

?>

<?php

if(isset($_POST['submit'])){

    $userName=$_POST['adminName'];
    $password=$_POST['password'];


    $emptyRows = emptyRows($userName,$password);

    if($emptyRows!== false){

        header("location:../login_formate/admin_login.php?error=emptyInputs");
        exit();
    }

    

    loginAdmin($conn,$userName,$password);


   
}

    else{

        header("location:../login_formate/admin_login.php?error=WrongLogin");
    }




?>