 <?php
include "../dbcon.php";

$t_id=$_POST['t_id'];
$admin_reply=$_POST['admin_reply'];
echo $query="update reply_task SET admin_reply='$admin_reply' where t_id='$t_id'";
mysqli_query($con,$query);
header('location:admin_replytask.php');


 ?>
