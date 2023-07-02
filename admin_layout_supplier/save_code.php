<?php 

require_once "../login_database/dbc.php";


if(isset($_POST['data_save'])){

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
   
    $query ="INSERT INTO supplier(date,name,phone,address,email,value,receivable,receivable_date,payable,payable_date,desciption)
    VALUES('$date','$name','$phone',' $address','$email','$value','$receivable','$receivable_date','$payable','$payable_date',' $des');";

    $query_run=mysqli_query($conn,$query);

    if($query_run){

        header("location:../admin_layout_supplier/supplier_save.php?savedSuccess");
        exit();
    }
    else{

        header("location:../admin_layout_supplier/supplier_save.php?notSent");
        exit(); 
    }
}


?>