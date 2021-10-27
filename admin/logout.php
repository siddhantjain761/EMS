<?php

session_start();
unset($_SESSION['auth']);  //logout session
$_SESSION['role']="non";
header('location:../index.php');


?>