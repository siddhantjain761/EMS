<?php
include "../dbcon.php";

$id=$_POST['id'];
$fn = $_POST['fn'];
$ln = $_POST['ln'];
$eid = $_POST['eid'];
$password = $_POST['pass'];
$age = $_POST['age'];
$number = $_POST['number'];
$dept = $_POST['dept'];
$role = $_POST['role'];
$address = $_POST['address'];

$image = $_FILES['image']['name'];
$filename = $_FILES['image']['tmp_name'];
$file_check="upload/".$image;

$name = md5(rand()).'.'.$image;
$file = "upload/".$name;

$_file1 = move_uploaded_file($filename,$file);
 

if($file_check=="upload/"){
	echo $query = "update employe SET first_name='$fn',last_name='$ln',email='$eid',password1='$password',age='$age',number='$number',department='$dept',role='$role',address='$address' where id='$id'";
	mysqli_query($con,$query);
	header('location:index.php');
}
else
{
	echo $query = "update employe SET first_name='$fn',last_name='$ln',email='$eid',password1='$password',age='$age',number='$number',department='$dept',role='$role',image='$file',address='$address' where id='$id'";
	mysqli_query($con,$query);
	header('location:index.php');

}


?>



 