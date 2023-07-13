<?php 

require_once "../login_database/dbc.php";



if(isset($_POST["delete_profit"])){

    $profit = mysqli_real_escape_string($conn,$_POST["delete_profit"]);

    $query = "DELETE FROM profitchart WHERE id='$profit';";

    $query_run=mysqli_query($conn,$query);

    if($query_run){

        header("location:../admin_layout_profitYear/show_profit.php?delete");
        exit(0);
       
      
    }

    else{

        header("location:../admin_layout_profitYear/show_profit.php?notDelete");
        exit(0);
        

    }
}

if (isset($_POST['p_update'])) {
    $id = $_POST['id'];
    $year = $_POST['year'];
    $income = $_POST['income'];
    $expense = $_POST['expense'];
    $profit = $_POST['profit'];

    $query = "UPDATE profitchart SET year='$year', income='$income', expense='$expense', profit='$profit' WHERE id='$id';";

    $query_run = mysqli_query($conn, $query);

    if ($query_run) {
        header("location:../admin_layout_profitYear/show_profit.php?success");
        exit();
    } else {
        header("location:../admin_layout_profitYear/show_profit.php?notUpdate");
        exit();
    }
}







?>