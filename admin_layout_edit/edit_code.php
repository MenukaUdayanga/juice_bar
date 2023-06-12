<?php

require_once "../login_database/dbc.php";
require_once "extra_function.php";

if (isset($_POST['add'])) {
    $item = $_POST['item'];

    $empty = emptyItem($item);
    $exitItem=exitItem($conn,$item);

    if ($empty == true) {
        header("location:../admin_layout_edit/edit_inter.php?error=empty");
        exit();
    }

    if ($exitItem == true) {
        header("location:../admin_layout_edit/edit_inter.php?error=uidExit");
        exit();
    }



    $query = "INSERT INTO additem (item) VALUES ('$item')";
    $query_run = mysqli_query($conn, $query);

    if ($query_run) {
        header("location:../admin_layout_edit/edit_inter.php?success");
    } else {
        header("location:../admin_layout_edit/edit_inter.php?error=notSet");
    }
}
?>
