<?php 

require_once "../login_database/dbc.php";

if(isset($_POST['p_data'])){

    $income = $_POST['income'];
    $expence = $_POST['expence'];
    $profit = $_POST['profit'];
    $date = $_POST['date'];
    
   

    $query = "INSERT INTO profitcal(income,expence,profit,date) VALUES('$income','$expence',' $profit','$date');";
    $query_run =mysqli_query($conn, $query);

    if($query_run){

        header('location:../admin_layout_profit/profit.php?success');
        exit();
    }
    else{

        header('location:../admin_layout_profit/profit.php?error=notSent');
        exit();

    }
}

?>