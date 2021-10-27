<?php
$role = $_SESSION['role'];
if($role=="employee"){
	header('location:employee_dashboard.php');
}


?>
