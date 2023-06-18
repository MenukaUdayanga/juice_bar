
<?php 

require_once "../login_database/dbc.php";


if(isset($_POST["delete_picture"])){

    $juiceId = mysqli_real_escape_string($conn,$_POST["delete_picture"]);

    $query = "DELETE FROM availablejuice WHERE id='$juiceId';";

    $query_run=mysqli_query($conn,$query);

    if($query_run){

        header("location:../admin_layout_gallery/admin_gallery_select.php?delete");
        exit(0);
       
      
    }

    else{

        header("location:../admin_layout_gallery/admin_gallery_select.php?notDelete");
        exit(0);
        

    }
}