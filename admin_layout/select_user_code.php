
<?php 

require_once "../login_database/dbc.php";


if(isset($_POST["delete_users"])){

    $studentId = mysqli_real_escape_string($conn,$_POST["delete_users"]);

    $query = "DELETE FROM users WHERE id='$studentId';";

    $query_run=mysqli_query($conn,$query);

    if($query_run){

        header("location:select_users.php?delete");
        exit(0);
       
      
    }

    else{

        header("location:select_users.php?notDelete");
        exit(0);
        

    }
}




?>