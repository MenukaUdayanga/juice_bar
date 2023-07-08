<?php 

require_once "../login_database/dbc.php";



if(isset($_POST["delete_profit"])){

    $profit = mysqli_real_escape_string($conn,$_POST["delete_profit"]);

    $query = "DELETE FROM profitcal WHERE id='$profit';";

    $query_run=mysqli_query($conn,$query);

    if($query_run){

        header("location:../admin_layout_profit/show_profit.php?delete");
        exit(0);
       
      
    }

    else{

        header("location:../admin_layout_profit/show_profit.php?notDelete");
        exit(0);
        

    }
}

if (isset($_POST['p_update'])) {
    $id = $_POST['id'];
    $date = $_POST['date'];
    $income = $_POST['income'];
    $expence = $_POST['expence'];
    $profit = $_POST['profit'];

    $query = "UPDATE profitcal SET date='$date', income='$income', expence='$expence', profit='$profit' WHERE id='$id';";

    $query_run = mysqli_query($conn, $query);

    if ($query_run) {
        header("location:../admin_layout_profit/show_profit.php?success");
        exit();
    } else {
        header("location:../admin_layout_profit/show_profit.php?notSave");
        exit();
    }
}







?>