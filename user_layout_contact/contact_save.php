<?php
require_once "../login_database/dbc.php";

if (isset($_POST['send'])) {
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Perform input validation and sanitation
    // Example:
    $email = filter_var($email, FILTER_SANITIZE_EMAIL);
    $message = filter_var($message, FILTER_SANITIZE_STRING);

    if (empty($email) || empty($message)) {
        header("location: ../user_layout_contact/user_contact.php?error=fieledEmpty");
        exit();
    }

    $query = "INSERT INTO contact(email, message) VALUES('$email', '$message')";
    $query_run = mysqli_query($conn, $query);

    if ($query_run) {
        header("location: ../user_layout_contact/user_contact.php?success");
        exit();
    } else {
        header("location: ../user_layout_contact/user_contact.php?error=notSent");
        exit();
    }
}

if (isset($_POST['cancel'])) {
    header("location: ../user_layout_contact/user_contact.php?cancel");
    exit();
}
?>
