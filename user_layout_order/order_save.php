<?php 

require_once "../login_database/dbc.php";


if(isset($_POST['order'])){

    $firstName = $_POST["firstname"];
    $lastName = $_POST["lastname"];
    $phone = $_POST["phone"];
    $email = $_POST["email"];
    $address = $_POST["address"];
    $juice = $_POST["juice"];
    $number = $_POST["number"];
    $orderDate = $_POST["orderDate"];
    $needDate = $_POST["needDate"];
    $time = $_POST["time"];

    $query = "INSERT INTO customerorder(firstName,lastName,phoneNumber,email,address,juiceType,glass,orderDate,needDate,time)
    values( '$firstName', '$lastName', '$phone', '$email', '$address', '$juice', '$number','$orderDate',' $needDate','$time');";

    $query_run=mysqli_query($conn,$query);

    if( $query_run){

        header("location:../user_layout_order/user_order.php?sucssess");
        exit();
    }

    else{

        header("location:../user_layout_order/user_order.php?error=notSet");
        exit();
    }



}








?>