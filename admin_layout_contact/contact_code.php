
<?php 

require_once "../login_database/dbc.php";


if(isset($_POST["delete_contact"])){

    $contactId = mysqli_real_escape_string($conn,$_POST["delete_contact"]);

    $query = "DELETE FROM contact WHERE id='$contactId';";

    $query_run=mysqli_query($conn,$query);

    if($query_run){

        header("location:../admin_layout_contact/contact.php?delete");
        exit(0);
       
      
    }

    else{

        header("location:../admin_layout_contact/contact.php?notDelete");
        exit(0);
        

    }
}




?>