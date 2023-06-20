<?php

require_once "../login_database/dbc.php";



// Initialize message variable
$msg = "";

// If upload button is clicked ...
if (isset($_POST['dataSave'])) {


    // Get juice name
    $juice_name = mysqli_real_escape_string($conn, $_POST['juiceName']);

    // Get image name
    $image = $_FILES['image']['name'];

    // Get text
    $image_text = mysqli_real_escape_string($conn, $_POST['text']);

    // image file directory
    $target = "images/".basename($image);

    $sql = "INSERT INTO availablejuice (juiceName,image,text) VALUES ('$juice_name', '$image','$image_text')";
    // execute query
    mysqli_query($conn, $sql);

    if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
        $msg = "Image uploaded successfully";
        
        header("location:../admin_layout_gallery/admin_gallery_select.php?success");
        exit();

    }else{
        $msg = "Failed to upload image";
        header("location:../admin_layout_gallery/admin_gallery_select.php?error=notSent");
        exit();
    }
}




?>