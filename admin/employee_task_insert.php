<?php
include "../dbcon.php";

$task=$_POST['task'];
$employee_id=$_POST['e_id'];
$assign_by=$_POST['assign_by'];
/* echo "<pre>";
 print_r($e);*/

/*$e= implode(',',$employee);
echo $e;*/
foreach ($employee_id as $e) {
	echo $query = "insert into assign_task(task,e_id,assign_by)value('$task','$e','$assign_by')";
	mysqli_query($con,$query);
	header('location:assign_task.php');
}



?>