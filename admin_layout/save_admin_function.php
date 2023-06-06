
<?php 

require_once "../login_database/dbc.php";
require_once "../admin_layout/admin_controller_function.php";

if(isset($_POST['save_admin'])){

	$adminName= mysqli_real_escape_string($conn,$_POST['adminName']);
	$password= mysqli_real_escape_string($conn,$_POST['password']);

	$emptyUid=emptyUid($adminName,$password);
	$uidExit=uidExit($conn,$adminName);


	if($emptyUid!==false){

		header("location:../admin_layout/save_admin.php?error=dataEmpty");
		exit();
	}

	
	if($uidExit!==false){

		header("location:../admin_layout/save_admin.php?error=uidExit");
		exit();
	}

    

	

	$query = "INSERT INTO admin(adminName,password) VALUES('$adminName','$password');";

	$query_run =mysqli_query($conn,$query);

	if(!$query_run){

		header("location:../admin_layout/admin_controller_data.php?error=notSent");
		exit();

	}

	else{

		header("location:../admin_layout/admin_controller_data.php?error=success");
		exit();
	}




}



?>

