<?php
session_start();
include "../dbcon.php";
$email = $_POST['email'];
$password = $_POST['password'];

$query = "select * from employe where email='$email'AND password1='$password'";

$data = mysqli_query($con,$query);
$fetch = mysqli_fetch_array($data);

echo $rows = mysqli_num_rows($data);
echo  $role=$fetch['role'];
if($rows=='1'){
	$role=$fetch['role'];
	 
    //die;
    if($role=='admin'){ 
        $_SESSION['id']=$fetch['id'];
    	$_SESSION['email']=$fetch['email'];
	    $_SESSION['name']=$fetch['first_name'];
	    $_SESSION['image']=$fetch['image'];
	    $_SESSION['role']=$fetch['role'];
	    $_SESSION['submit']='Task Assigned Sccessfully';
	    $sessionid = session_id();

	    //die;
	    $_SESSION['auth']= $sessionid ;

	    header('location:index.php');
	}
    else if($role=='employee') {
    	$_SESSION['email']=$fetch['email'];
	    $_SESSION['name']=$fetch['first_name'];
	    $_SESSION['image']=$fetch['image'];
	    $_SESSION['e_id']=$fetch['id'];
	    $_SESSION['role']=$fetch['role'];
	    $sessionid = session_id();

	    //die;
	    $_SESSION['auth']= $sessionid ;

	    header('location:employee_dashboard.php');
     	# code...
     } 

}
else{
	 
	$_SESSION['error']='Invaid Username or Password';
	header('location:../index.php');
}



?>
