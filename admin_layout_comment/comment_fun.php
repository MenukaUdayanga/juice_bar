

<?php 

require_once "../login_database/dbc.php";


if(isset($_POST["delete_comment"])){

    $commentId = mysqli_real_escape_string($conn,$_POST["delete_comment"]);

    $query = "DELETE FROM comment WHERE id='$commentId';";

    $query_run=mysqli_query($conn,$query);

    if($query_run){

        header("location:../admin_layout_comment/comment_controller.php?delete");
        exit(0);
       
      
    }

    else{

        header("location:../admin_layout_comment/comment_controller.php?notDelete");
        exit(0);
        

    }
}




?>