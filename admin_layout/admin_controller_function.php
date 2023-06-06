<?php 

// Main Admin Fuctions


function mainAdminLogin($adminName, $password){
    $result;

    if(empty($adminName)||empty( $password)){

        return true;
    }
    else{

        return false;
    }

    return $result;
}


function AdminLogin($conn,$adminName,$password){

    $query="SELECT*FROM mainAdmin WHERE adminName=? AND password=?;";
    $stmt=mysqli_prepare($conn,$query);
    mysqli_stmt_bind_param($stmt,"ss",$adminName,$password);
    mysqli_stmt_execute($stmt);
    $result=mysqli_stmt_get_result($stmt);

    if(mysqli_num_rows($result)==0){

        header("location:../admin_layout/admin_controller_login.php?error=WrongLogin");
        exit();
    }

    else{

        header("location:../admin_layout/admin_controller_data.php?error=none");
        exit();
    }
}


// Adding Admin Fuctions

 function emptyUid($adminName,$password){

    $result;

    if(empty($adminName)||empty( $password)){

        return true;
    }
    else{

        return false;
    }

    return $result;
 }


function uidExit($conn,$adminName){

    $sql ="SELECT * FROM admin WHERE adminName= ? ;";
     $stmt = mysqli_stmt_init($conn);
     if(!mysqli_stmt_prepare($stmt,$sql)){

        header('location:../admin_layout/save_admin.php?error=stmtFailed');
        exit();

     }

     mysqli_stmt_bind_param($stmt,"s",$adminName);
     mysqli_stmt_execute($stmt);
     $resultData = mysqli_stmt_get_result($stmt);

     if($row = mysqli_fetch_assoc( $resultData)){

        return $row;
     }

     else{
         return false;
     }

     mysqli_stmt_close($stmt);
 }


?>