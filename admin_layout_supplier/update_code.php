<?php

require_once "../login_database/dbc.php";

if(isset($_POST['data_update'])){
    $id = $_POST['s_id']; // Assuming the ID is stored in the "s_id" field
    $date = $_POST['date'];
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $value = $_POST['value'];
    $receivable = $_POST['receivable'];
    $receivable_date = $_POST['receivable_date'];
    $payable = $_POST['payable'];
    $payable_date = $_POST['payable_date'];
    $des = $_POST['des'];

    $query = "UPDATE supplier SET date='$date', name='$name', phone='$phone', address='$address', email='$email', 
              value='$value', receivable='$receivable', receivable_date='$receivable_date', payable='$payable',
              payable_date='$payable_date', desciption='$des' WHERE id='$id';";

    $query_run = mysqli_query($conn, $query);

    if($query_run){
        header("location:../admin_layout_supplier/supplier.php?updatedSuccess");
        exit();
    }
    else{
        header("location:../admin_layout_supplier/supplier.php?notUpdated");
        exit(); 
    }
}

?>
