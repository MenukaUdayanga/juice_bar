<?php 

require_once "../login_database/dbc.php";



if(isset($_POST["delete_item"])){

    $item = mysqli_real_escape_string($conn,$_POST["delete_item"]);

    $query = "DELETE FROM additem WHERE id='$item';";

    $query_run=mysqli_query($conn,$query);

    if($query_run){

        header("location:../admin_layout_edit/edit_inter.php?delete");
        exit(0);
       
      
    }

    else{

        header("location:../admin_layout_edit/edit_inter.php?notDelete");
        exit(0);
        

    }
}

if(isset($_POST['update'])){

    $id= $_POST['id'];
    $juice= $_POST['juice'];

    $query = "UPDATE additem SET item='$juice' WHERE id='$id';";

    $query_run=mysqli_query($conn,$query);

    if( $query_run){

        header("location:../admin_layout_edit/edit_inter.php?success");
        exit();
       
    }

    else{

        header("location:../admin_layout_edit/edit_inter.php?error=notSent");
        exit();
    }
}







?>