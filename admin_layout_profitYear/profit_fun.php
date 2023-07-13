<?php 

require_once "../login_database/dbc.php";

if(isset($_POST['p_data'])){

    $income = $_POST['income'];
    $expense = $_POST['expense'];
    $profit = $_POST['profit'];
    $year = $_POST['year'];
    
   

    $query = "INSERT INTO profitchart(income,expense,profit,year) VALUES('$income','$expense',' $profit','$year');";
    $query_run =mysqli_query($conn, $query);

    if($query_run){

        header('location:../admin_layout_profitYear/show_profit.php?success');
        exit();
    }
    else{

        header('location:../admin_layout_profitYear/show_profit.php?error=notSent');
        exit();

    }
}

?>