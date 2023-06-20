
<?php

require_once "../login_database/dbc.php";


if(isset($_POST['update'])){

    $id= $_POST['id'];
    $juiceName= $_POST['juiceName'];
    $image= $_POST['image'];
    $text= $_POST['text'];
    

    $query = "UPDATE availablejuice SET juiceName='$juiceName',image='$image',text='$text' WHERE id='$id';";

    $query_run=mysqli_query($conn,$query);

    if( $query_run){

        header("location:../admin_layout_gallery/admin_gallery_select.php?success");
        exit();
       
    }

    else{

        header("location:../admin_layout_gallery/admin_gallery_select.php?error=notSent");
        exit();
    }
}





?>