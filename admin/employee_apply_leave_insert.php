<?php
include "../dbcon.php";
include "session.php";

 
 
 
echo $leave_from=$_POST['leave_from'];
echo $leave_to=$_POST['leave_to'];
echo $earning_leave=$_POST['earning_leave'];
echo $medical_leave=$_POST['medical_leave'];
echo $casual_leave=$_POST['Casual_leave'];

/* echo "<pre>";
 print_r($e);*/

/*$e= implode(',',$e_id);
echo $e;*/
 
    $name=$_SESSION['name'];
	echo $query1 = "insert into apply_leave(leave_from,leave_to,earning_leave,medical_leave,casual_leave,apply_by,status1,comment1)value('$leave_from','$leave_to','$earning_leave','$medical_leave','$casual_leave','$name','','')";
	mysqli_query($con,$query1);
	header('location:employee_display_leave1.php');
	




?>