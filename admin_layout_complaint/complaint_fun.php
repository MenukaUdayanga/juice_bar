
<?php 



require_once "../login_database/dbc.php";


if(isset($_POST["delete_complaint"])){

    $complaintId = mysqli_real_escape_string($conn,$_POST["delete_complaint"]);

    $query = "DELETE FROM complaint WHERE id='$complaintId';";

    $query_run=mysqli_query($conn,$query);

    if($query_run){

        header("location:../admin_layout_complaint/user_complaint_con.php?delete");
        exit(0);
       
      
    }

    else{

        header("location:../admin_layout_complaint/user_complaint_con.php?notDelete");
        exit(0);
        

    }
}




?>







