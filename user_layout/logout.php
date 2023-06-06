<?php

session_start();
session_unset();
session_destroy();
header("location:../user_layout/dashboard.php");
exit();