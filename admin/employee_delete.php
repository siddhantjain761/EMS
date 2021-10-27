<?php
include "../dbcon.php";
$id = $_GET['id'];
$query = "delete from employe where id='$id'";
mysqli_query($con,$query);
header('location:index.php');


?>

