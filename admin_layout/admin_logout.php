<?php

session_start();
session_unset();
session_destroy();
header("location:../admin_layout/dashboard.php");
exit();