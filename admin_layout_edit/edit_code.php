<?php 

require_once "../login_database/dbc.php";


if(isset($_POST['add'])){

    $item= $_POST['item'];

    $query = "INSERT INTO additem(item) VALUES('$item');";

    $query_run = mysqli_query($conn,$query);

    if($query_run){

        header("location:../admin_layout_edit/edit_inter.php?success");
    }

    else{

        header("location:../admin_layout_edit/edit_inter.php?error=notSet");
    }
}







?>