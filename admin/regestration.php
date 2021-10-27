<?php include "session.php"; ?>
<?php include 'header.php'?> 

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
                        	 
                            <li><b><button style="background-color:#03a9f4;border-radius: 10px"><a href="assign_task.php" class="animate__animated animate__pulse" style="color:white;padding: 5px;font-style: italic;font-weight: bold;"><i class="fa fa-tasks" aria-hidden="true"></i></i>Assign Task</a></button> </b></li>
                            <li><b><button style="background-color:#03a9f4;border-radius: 10px"><a href="regestration.php" class="animate__animated animate__pulse" style="color:white;padding: 5px;font-style: italic;font-weight: bold;"><i class="fa fa-plus-square" aria-hidden="true" ></i>Add Employee</a></button> </b></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 grid-margin">
            	<div class="card text-center" style="box-shadow: 0px 0px 35px  #ccc">
                    <h1 style="color:white;background-color: black;font-family:auto">Employee Regestraion </h1>
            		<div class="card-body" style="font-weight: 700;">
                        <form method="post" action="employee_insert.php" enctype="multipart/form-data" >
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>First Name</label><br>
                                        <input type="text" name="fn" class="form-control">
                                    </div><br>
                                    <div class="form-group">
                                        <label>Email-id</label><br>
                                        <input type="text" name="eid" class="form-control">
                                    </div><br>
                                    <div class="form-group">
                                        <label>Age</label><br>
                                        <input type="text" name="age" class="form-control">
                                    </div><br>
                                    <div class="form-group">
                                        <label>Department</label><br>
                                        <select name="dept" class="form-control">
                                            <option value="Select">Select</option>
                                            <option value="ECE">ECE</option>
                                            <option value="CS">CS</option>
                                            <option value="IT">IT</option>
                                            <option value="EE">EE</option>
                                        </select>
                                        <br>
                                    </div>
                                    <div class="form-group">
                                        <label>Image</label><br>
                                        <input type="file" name="image" class="form-control">
                                    </div><br>
                                         
                                </div>    
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Last NAME</label><br>
                                        <input type="text" name="ln" class="form-control">
                                    </div><br>
                                    <div class="form-group">
                                        <label>Password</label><br>
                                        <input type="password" name="pass" class="form-control">
                                    </div><br>
                                    <div class="form-group">
                                        <label>Number</label><br>
                                        <input type="text" name="number" class="form-control">
                                    </div><br>
                                    <div class="form-group">
                                        <label>Role</label><br>
                                        <select name="role" class="form-control">
                                            <option value="select">Select</option>
                                            <option value="employee">Employee</option>
                                            <option value="admin">Admin</option>
                                            <option value="other">Other</option>
                                             
                                        </select>
                                        <br>
                                    </div>
                                    <div class="form-group">
                                        <label>Address</label><br>
                                        <textarea type="text" name="address" class="form-control"></textarea>
                                    </div><br>
                                    
                                </div> 
                                
                            </div>
                            <input type="submit" style="color:white;background-color: black;font-family:auto" value="submit">
                        </form>
                    </div>
                </div>
            </div>      
        </div>
    </div>

<?php include "footer.php";   ?>
     
      
