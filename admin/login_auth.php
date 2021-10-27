<?php
 

$role = $_SESSION['role'];
if(empty($_SESSION['auth'])){
	 
	header('location:./nologin.php');
}
else if($role=="employee"){
	header('location:admin/employee_dashboard.php');
}

else if($role=="admin"){
	header('location:admin/index.php');
}

  
 



 



?>
