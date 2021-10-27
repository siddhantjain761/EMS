<?php
include "../dbcon.php";

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

$name = md5(rand()).'.'.$image;
$file = "upload/".$name;

$_file1 = move_uploaded_file($filename,$file);
 
echo $query = "insert into employe(first_name,last_name,email,password1,age,number,department,role,image,address)value('$fn','$ln','$eid','$password','$age','$number','$dept','$role','$file','$address' )";
mysqli_query($con,$query);
header('location:employee_dashboard.php');


?>