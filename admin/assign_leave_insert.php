<?php
include "../dbcon.php";
include "session.php";

 
$e_id=$_POST['e_id'];
 
echo $valid_from=$_POST['valid_from'];
echo $valid_to=$_POST['valid_to'];
echo $earning_leave=$_POST['earning_leave'];
echo $medical_leave=$_POST['medical_leave'];
echo $casual_leave=$_POST['Casual_leave'];

/* echo "<pre>";
 print_r($e);*/

/*$e= implode(',',$e_id);
echo $e;*/
foreach ($e_id as $e) {
	include "../dbcon.php";
	echo $query="select * from employe where id='$e'";
	$data=mysqli_query($con,$query);
    $fetch=mysqli_fetch_array($data);
    $n=$fetch['first_name'];
    $name=$_SESSION['name'];
	echo $query1 = "insert into assign_leave1(valid_from,valid_to,earning_leave,medical_leave,casual_leave,assign_to,assign_by)value('$valid_from','$valid_to','$earning_leave','$medical_leave','$casual_leave','$n','$name')";
	mysqli_query($con,$query1);
	header('location:display_leave.php');
	
}



?>