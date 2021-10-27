<?php
SESSION_START();


if(empty($_SESSION['auth'])){
	header('location:../index.php');
}



?>