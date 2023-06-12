<?php 

require_once "../login_database/dbc.php";


function emptyItem($item){

    $result;

    if(empty($item)){

        return true;
    }

    else{

        return false;
    }

    return $result;
    
}




function exitItem($conn, $item) {
    $sql = "SELECT * FROM additem WHERE item = ?";
    $stmt = mysqli_stmt_init($conn);
    
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location:../admin_layout_edit/edit_inter.php?error=stmtFailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "s", $item);
    mysqli_stmt_execute($stmt);
    $resultData = mysqli_stmt_get_result($stmt);

    if ($row = mysqli_fetch_assoc($resultData)) {
        return $row;
    } else {
        return false;
    }

    mysqli_stmt_close($stmt);
}




?>