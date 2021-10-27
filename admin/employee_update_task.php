<?php
include "../dbcon.php";

$t_id=$_POST['t_id'];
$task=$_POST['task'];
$employee_id=$_POST['e_id'];
 /* echo "<pre>";
 print_r($e);*/

$e= implode(',',$employee_id);

 
	echo $query = "UPDATE assign_task set task='$task',e_id='$e' where t_id='$t_id'";
	mysqli_query($con,$query);
	header('location:assign_task.php');
 



?>