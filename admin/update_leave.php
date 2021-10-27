<?php
include "../dbcon.php";

if(isset($_POST['approved'])){
	echo $status="Approved";
	echo $comment=$_POST['comment1'];
	echo $a_id=$_POST['a_id'];
	echo $query="update apply_leave set status1='$status',comment1='$comment' where a_id='$a_id'";
	mysqli_query($con,$query);
	header('location:display_leave.php');
}
elseif (isset($_POST['rejected'])) {
	echo $status="Rejected";
	echo $comment=$_POST['comment1'];
	echo $a_id=$_POST['a_id'];
	echo $query="update apply_leave set status1='$status',comment1='$comment' where a_id='$a_id'";
	mysqli_query($con,$query);
	header('location:display_leave.php');
	# code...
}
 



?>