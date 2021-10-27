<?php include "session.php"; ?>
<?php include "employee_auth.php";?>
<?php include 'header.php'?> 


<?php include 'employee_sidebar.php'?>

<div class="main-panel">
    <div class="content-wrapper">
        <!-- Page Title Header Starts-->
        <div class="row page-title-header">
            <div class="col-12">
                <div class="page-header">
                    <h4 class="page-title">Dashboard</h4>
                    <div class="quick-link-wrapper w-100 d-md-flex flex-md-wrap">
                         
                        <ul class="quick-links ml-auto">
                            <li><a href="#">Settings</a></li>
                            <li><a href="#">Analytics</a></li>
                            <li><b><button style="background-color:#03a9f4;border-radius: 10px"><a href="assign_task.php" class="animate__animated animate__pulse" style="color:white;padding: 5px;font-style: italic;font-weight: bold;"><i class="fa fa-tasks" aria-hidden="true"></i></i>Reply Task</a></button> </b></li>
                            <li><b><button style="background-color:#03a9f4;border-radius: 10px"><a href="regestration.php" class="animate__animated animate__pulse" style="color:white;padding: 5px;font-style: italic;font-weight: bold;"><i class="fa fa-plus-square" aria-hidden="true" ></i>Add Employee</a></button> </b></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 grid-margin">
                <?php 
                include "../dbcon.php";
                $t_id=$_GET['t_id'];
                $query="select * from assign_task where t_id='$t_id'";
                $data=mysqli_query($con,$query);
                $fetch=mysqli_fetch_array($data);
                ?>
                <div class="card text-center" style="box-shadow: 0px 0px 35px  #ccc">
                    <h1 style="color:white;background-color: black;font-family:auto">Reply Task</h1>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                     <h3 style="font-family: auto;    background-color: #a7a7f6;color: white;">TASK</h3>
                                     <div class="card-body">
                                       <h2> <textarea class="form-control" disabled="disabled"><?php echo $fetch['task'] ?></textarea></h2>
                                     
                                    </div>
                                </div>
                                    
                            </div>
                        </div> 
                        <br>
                        <div class="row">
                            <div class="col-12">
                                <form method="post" action="employee_reply_insert.php">
                                    <div class="card">
                                        <h3 style="font-family: auto;    background-color: #a7a7f6;color: white;">Message</h3>
                                        <div class="card-body" style="font-weight: 700;">
                                            <div class="form-gorup">
                                                <textarea name="employee_reply"   class="form-control"></textarea>
                                                <input type="hidden" name="t_id" value="<?php echo  $t_id ?>">
                                            </div>
                                            <br>
                                            <input type="submit" style="color:white;background-color: black;font-family:auto" value="submit">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>      
         
    </div>
<div class="modal fade" id="bb">
    <div class="modal-dialog" style="margin-top:5%" >
        <div class="modal-content">
             
            <div class="modal-body" style="background: #11f41130">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8"><h2 style="text-align:center;color: #008A45;font-weight: 500;font-size: 14px">Task Successfully Submited</h2></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php include "footer.php";   ?>
     
      
