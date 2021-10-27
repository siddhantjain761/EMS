<?php
include "../dbcon.php";
include "session.php";
$t_id = $_POST['t_id'];
$message=$_POST['employee_reply'];
$query = "select * from assign_task where t_id='$t_id'";
$data=mysqli_query($con,$query);
$fetch = mysqli_fetch_array($data);
$task=$fetch['task'];
$name=$_SESSION['name'];
$search=mysqli_query($con,"select * from reply_task where t_id='$t_id'");


if(mysqli_num_rows($search)>0){
	echo $update_query="update reply_task SET reply='$message' where t_id='$t_id'";
	mysqli_query($con,$update_query);

}
else{
	echo $insert_query="insert into reply_task(task,reply,t_id,reply_by)value('$task','$message','$t_id','$name')";
	mysqli_query($con,$insert_query);


}
 
 
header('location:employee_task.php');




?>