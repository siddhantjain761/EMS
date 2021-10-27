<?php
include "../dbcon.php";

echo $t_id=$_GET['t_id'];
echo $query="delete from assign_task where t_id='$t_id'";
mysqli_query($con,$query);
header('location:admin_task.php');


?>