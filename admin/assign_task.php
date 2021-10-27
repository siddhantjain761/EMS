 <?php include "session.php"; ?>
<?php include 'header.php'?> 
<?php include "admin_authentication.php"?>

<?php include 'sidebar.php'?>
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
                            <li><b><button style="background-color:#03a9f4;border-radius: 10px"><a href="regestration.php" class="animate__animated animate__pulse" style="color:white;padding: 5px;font-style: italic;font-weight: bold;"><i class="fa fa-tasks" aria-hidden="true"></i></i>Assign Task</a></button> </b></li>
                            <li><b><button style="background-color:#03a9f4;border-radius: 10px"><a href="regestration.php" class="animate__animated animate__pulse" style="color:white;padding: 5px;font-style: italic;font-weight: bold;"><i class="fa fa-plus-square" aria-hidden="true" ></i>Add Employee</a></button> </b></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <?php
      
        if(isset($_POST['submit'])) {
            echo "Task successfully submit";
            
        }
         
    ?>
        <div class="row">
            <div class="col-md-12 grid-margin">
            	<div class="card text-center" style="box-shadow: 0px 0px 35px  #ccc">
                    <h1 style="color:white;background-color:#b0c9fc;font-family:auto">Assigning Task</h1>
            		<div class="card-body" style="font-weight: 700;">
                        <form method="post" action="employee_task_insert.php">
                             <div class="container-fluid">
                                <div class="row"> 
                                    <div class="col-md-6">
                                        <div class="card">
                                         <h3 style="font-family: auto;    background-color: #a7a7f6;color: white;">Employee's</h3>
                                         <div class="card-body" style="font-family: auto;text-align:justify;font-weight: 100">
                                            <div class="form-gorup">
                                                <?php 
                                                    include "../dbcon.php";
                                                 $query = "select * from employe  where role='employee'";
                                                 $data = mysqli_query($con,$query);
                                                while($fetch = mysqli_fetch_array($data)){
                                                ?>
                                                <input type="checkbox" name="e_id[]" value="<?php echo $fetch['id']?>"><?php echo $fetch['first_name']?><br>
                                                <?php 
                                                }

                                                ?> 
                                            </div> 
                                             
                                         </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="card">
                                            <h3 style="font-family: auto;    background-color: #a7a7f6;color: white;">TASK</h3>
                                            <div class="card-body">
                                                <div class="form-gorup">
                                                    <input type="text" name="task" class="form-control">
                                                    <input type="hidden" name="assign_by" value="<?php echo $_SESSION['id']?>">
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <br>
                                  <input type="submit" name="sumbit" value="submit" style="background-color: black;color: white">
                             </div>
                        </form>
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
     
      
