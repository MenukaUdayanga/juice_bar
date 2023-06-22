
<?php 

  require_once "../login_database/dbc.php";


  if(isset($_POST['save'])){

    $email = mysqli_real_escape_string($conn,$_POST['email']);
    $message = mysqli_real_escape_string($conn,$_POST['message']);
    $date = mysqli_real_escape_string($conn,$_POST['date']);

    $query = "INSERT INTO comment(email,c_comment,date) VALUES('$email','$message','$date');";

    $query_run = mysqli_query($conn,$query);

    if($query_run){

        header("location:../user_layout_comment/user_comment.php?success");
        exit();
    }

    else{

        header("location:../user_layout_comment/user_comment.php?error=ontSent");
        exit();
    }

  }


?>