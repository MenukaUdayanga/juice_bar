<?php 

require_once "../login_database/dbc.php";

if(isset($_POST['c_file'])){

    $firstName = mysqli_real_escape_string($conn,$_POST['fName']);
    $lastName = mysqli_real_escape_string($conn,$_POST['lName']);
    $email = mysqli_real_escape_string($conn,$_POST['email']);
    $number = mysqli_real_escape_string($conn,$_POST['number']);
    $c_complaint = mysqli_real_escape_string($conn,$_POST['c_complaint']);

    $query = "INSERT INTO complaint(firstName,lastName,email,number,c_complaint)
     VALUES('$firstName','$lastName','$email','$number','$c_complaint');";

     $run_query= mysqli_query($conn,$query);

     if($run_query){

        header("location:../user_layout_complaint/user_complaint.php?success");
        exit();
     }

     else{

        header("location:../user_layout_complaint/user_complaint.php?error=notSent");
        exit();
     }
}



?>