<?php 

require_once "../login_database/dbc.php";


if(isset($_POST["order"])){

    $firstName = $_POST["firstname"];
    $lastName = $_POST["lastname"];
    $phone = $_POST["phone"];
    $email = $_POST["email"];
    $address = $_POST["address"];
    $spOrder = $_POST["spOrder"];
    $dateOr = $_POST["dateOr"];
    $dateRq = $_POST["dateRq"];
    $time = $_POST["time"];

    $query = "INSERT INTO userspecialorder(firstName,lastName,PhoneNumber,email,address,special_order_about,orderDate,requiredDate,time)
     values('$firstName','$lastName','$phone','$email','$address','$spOrder','$dateOr','$dateRq','$time');";

     $query_run = mysqli_query($conn,$query);

     if($query_run){

        header("location:../user_special_order/user_sp_order.php?success");
        exit();
     }

     else{

        header("location:../user_special_order/user_sp_order.php?error=notSent");
        exit();
     }
}

?>