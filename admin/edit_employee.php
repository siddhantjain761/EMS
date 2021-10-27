<?php include "session.php"; ?>
<?php include "admin_authentication.php"?>
<?php include 'header.php'?>


<?php include 'sidebar.php'?>

<?php
include "../dbcon.php";
$id = $_GET['id'];
$query = "select * from employe where id='$id'";
$data = mysqli_query($con,$query);
$fetch = mysqli_fetch_array($data);

?>

<div class="main-panel">
    <div class="content-wrapper">
        <!-- Page Title Header Starts-->
        <div class="row page-title-header">
            <div class="col-12">
                <div class="page-header">
                    <h4 class="page-title">Dashboard</h4>
                    <div class="quick-link-wrapper w-100 d-md-flex flex-md-wrap">
                         
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 grid-margin">
                <div class="card text-center" style="box-shadow: 0px 0px 35px  #ccc">
                    <h1 style="color:white;background-color: black;font-family:auto">Employee Data</h1>
                    <div class="container-fliud">
                    <div class="card">
                        <div class="card-body"> 
                   
                         
                     
                        <form method="post" action="employee_update.php" enctype="multipart/form-data" >
                            <input type="hidden" name="id" value="<?php echo $fetch['id'] ?>"><br> 
                            <div class="row"> 
                                <div class="col-md-6">
                                   
                                    <div class="form-group">
                                        <label>First Name</label><br>
                                        <input type="text" name="fn"  class="form-control" value="<?php echo $fetch['first_name']  ?>">
                                    </div><br>
                                    <div class="form-group">
                                        <label>Email-id</label><br>
                                        <input type="text" name="eid" class="form-control" value="<?php echo $fetch['email']  ?>">
                                    </div><br>
                                    <div class="form-group">
                                        <label>Age</label><br>
                                        <input type="text" name="age" class="form-control" value="<?php echo $fetch['age']  ?>">
                                    </div><br>
                                    <div class="form-group">
                                        <label>Department</label><br>
                                        <select name="dept" class="form-control">
                                             <option value="Select"
                                                <?php
                                                if($fetch['department']=='Select'){
                                                    echo 'selected';
                                                }

                                                ?>>

                                             Select</option>
                                            <option value="ECE"
                                                <?php
                                                if($fetch['department']=='ECE'){
                                                    echo 'selected';
                                                }

                                                ?>>ECE</option>

                                            <option value="CS"
                                                <?php
                                                if($fetch['department']=='CS'){
                                                    echo 'selected';
                                                }

                                                ?>>CS</option>
                                            
                                            <option value="IT"
                                                <?php
                                                if($fetch['department']=='IT'){
                                                    echo 'selected';
                                                }

                                                ?>>IT</option>
                                            <option value="EE"
                                                <?php
                                                if($fetch['department']=='EE'){
                                                    echo 'selected';
                                                }

                                                ?>>EE</option>        
                                                


                                        </select>
                                        <br>
                                    </div>
                                    <div class="form-group">
                                        <label>Image</label><br>
                                        <input type="file" name="image" class="form-control">
                                        <img src="<?php echo $fetch['image']   ?>" style="width: 50px;height: 50px;border-radius: 70px">
                                    </div><br>
                                </div>    
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Last NAME</label><br>
                                        <input type="text" name="ln" class="form-control" value="<?php echo $fetch['last_name']  ?>">
                                    </div><br>
                                    <div class="form-group">
                                        <label>Password</label><br>
                                        <input type="password"  name="pass" value="<?php echo $fetch['password1']?>"  class="form-control"   >
                                    </div><br>
                                    <div class="form-group">
                                        <label>Number</label><br>
                                        <input type="text" name="number" class="form-control" value="<?php echo $fetch['number']?>">
                                    </div><br>
                                    <div class="form-group">
                                        <label>Role</label><br>
                                        <select name="role" class="form-control">
                                            <option value="Select"
                                                <?php
                                                if($fetch['role']=='Select'){
                                                    echo 'selected';
                                                }

                                                ?>>Select</option>
                                            <option value="employee"
                                                <?php
                                                if($fetch['role']=='employee'){
                                                    echo 'selected';
                                                }

                                                ?>>emloyee</option>
                                             <option value="admin"
                                                <?php
                                                if($fetch['role']=='admin'){
                                                    echo 'selected';
                                                }

                                                ?>>admin</option>
                                             <option value="other"
                                                <?php
                                                if($fetch['role']=='other'){
                                                    echo 'selected';
                                                }

                                                ?>>other</option>
                                             
                                        </select>
                                        <br>
                                    </div>
                                    <div class="form-group">
                                        <label>Address</label><br>
                                        <input type="text" name="address" class="form-control" value="<?php echo $fetch['address']  ?>"> 
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
        </div>
    </div>

<?php include "footer.php";   ?>
     
      
