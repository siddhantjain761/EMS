<?php include "session.php"; ?>
<?php include "admin_authentication.php"?>
<?php include 'header.php'?> 

<?php include 'sidebar.php'?>

<div class="main-panel">
    <div class="content-wrapper">
        <!-- Page Title Header Starts-->
        <div class="row page-title-header">
            <div class="col-12">
                <div class="page-header">
                    <h4 class="page-title">Leaves</h4>
                    <div class="quick-link-wrapper w-100 d-md-flex flex-md-wrap">
                         
                        <ul class="quick-links ml-auto">
                             
                            <li><b><button style="background-color:#03a9f4;border-radius: 10px"><a href="assign_leave.php" class="animate__animated animate__pulse" style="color:white;padding: 5px;font-style: italic;font-weight: bold;"><i class="fa fa-tasks" aria-hidden="true"></i></i>Assign Leave</a></button> </b></li>
                            <li><b><button style="background-color:#03a9f4;border-radius: 10px"><a href="regestration.php" class="animate__animated animate__pulse" style="color:white;padding: 5px;font-style: italic;font-weight: bold;"><i class="fa fa-plus-square" aria-hidden="true" ></i>Add Employee</a></button> </b></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 grid-margin">
                <div class="card text-center" style="box-shadow: 0px 0px 35px  #ccc">
                    <h1 style="color:white;background-color: black;font-family:auto">Offical Leaves</h1>
                     <div class="card">
               
              <!-- /.card-header -->
              <div class="card-body">
                <div style="overflow-x:auto;"> 
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr style="font-style: bold">
                    <th>L.ID</th>
                    <th>ASSIGN TO</th>
                    <th>ASSIGN_BY</th>
                    <th>VALID FROM</th>
                    <th>VALID TO</th>
                    <th>ERANING LEAVE</th>
                    <th>MEDICAL LEAVE</th>
                    <th>CASUAL LEAVE</th>
                  </tr>
                  </thead>
                  <?php
                  include '../dbcon.php';
                  $query_task= "select * from assign_leave1";
                   
                  $data = mysqli_query($con,$query_task);
                  while($fetch=mysqli_fetch_array($data)){
                    
                    ?>


                  <tbody>
                    <tr>
                      <td><?php echo $fetch['l_id']  ?> </td>
                      <td><?php echo $fetch['assign_to']?></td>
                      <td><?php echo $fetch['assign_by']?></td>
                      <td><?php echo $fetch['valid_from']?></td>
                      <td><?php echo $fetch['valid_to']?></td>
                      <td><?php echo $fetch['earning_leave']?></td>
                      <td><?php echo $fetch['medical_leave']?></td>
                      <td><?php echo $fetch['casual_leave']?> </td>
                       
                       
                    </td>
                    </tr>
                    <?php
                  }
                  ?>
                      
                   
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>L.ID</th>
                    <th>ASSIGN_TO</th>
                    <th>ASSIGN_BY</th>
                    <th>VALID FROM</th>
                    <th>VALID TO</th>
                    <th>ERANING LEAVE</th>
                    <th>MEDICAL LEAVE</th>
                    <th>CASUAL LEAVE</th>
                     
                  </tr>
                  </tfoot>
                </table>
              </div>
            </div>
              <!-- /.card-body -->
        </div>
        <br>
         <div class="row">
            <div class="col-md-12 grid-margin">
                <div class="card text-center"  >
                    <h1 style="color:white;background-color: black;font-family:auto">Applied Leaves</h1>
                     <div class="card" style="box-shadow: 0px 0px 35px  #ccc">
               
              <!-- /.card-header -->
              <div class="card-body" >
                <div style="overflow-x:auto;"> 
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr style="font-style: bold">
                    <th>A.ID</th>
                    <th>LEAVE_FROM</th>
                    <th>LEAVE_TO</th>
                    <th>APPLY_BY</th>
                    <th>ERANING LEAVE</th>
                    <th>MEDICAL LEAVE</th>
                    <th>CASUAL LEAVE</th>
                    <th>STATUS</th>
                    <th>COMMENT</th>
                    <th></th>
                  </tr>
                  </thead>
                  <?php
                  include '../dbcon.php';
                  $name=$_SESSION['name']; 
                  $query3 = "select * from apply_leave";
                  $data3 = mysqli_query($con,$query3);
                  while($fetch3=mysqli_fetch_array($data3)){
                  ?>
                  <tbody>
                    <tr>
                      <td><?php echo $fetch3['a_id']  ?> </td>
                      <td><?php echo $fetch3['leave_from']?></td>
                      <td><?php echo $fetch3['leave_to']?></td>
                      <td><?php echo $fetch3['apply_by']?></td> 
                      <td><?php echo $fetch3['earning_leave']?></td>
                      <td><?php echo $fetch3['medical_leave']?></td>
                      <td><?php echo $fetch3['casual_leave']?> </td>
                      <td>
                        <?php
                        if($fetch3['status1']=='Approved'){
                          ?>
                         <button class="btn btn-success"><?php echo $fetch3['status1']  ?></button>
                        <?php
                        }
                        elseif ($fetch3['status1']=='Rejected') {
                          ?>
                          <button class="btn btn-danger"><?php echo $fetch3['status1']  ?></button>

                           
                          <?php
                        }
                        else{
                          ?>
                          <button class="btn btn-warning">Pending</button>


                       <?php
                        }
                        ?>
                         


                        
                      <td>
                         <form  action="update_leave.php" method="post">
                          <textarea name="comment1" cols="50" rows="1"   class="form-control"></textarea>
                      </td>
                      <input type="hidden" name="a_id" value="<?php echo $fetch3['a_id'] ?>">
                      <td>
                        <button type="submit" class="btn btn-success" name="approved">APPROVED</button>
                        <button type="submit" class="btn btn-danger" name="rejected">REJECTED</button>
                      </td>
                      </form>
                       
                       
                    </tr>
                    <?php
                  }
                    ?>

                   
                      
                   
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>A.ID</th>
                    <th>LEAVE_FROM</th>
                    <th>LEAVE_TO</th>
                    <th>APPLY_BY</th>
                    <th>ERANING LEAVE</th>
                    <th>MEDICAL LEAVE</th>
                    <th>CASUAL LEAVE</th>
                    <th>STATUS</th>
                    <th>COMMENT</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
            </div>
              <!-- /.card-body -->
        </div>
      </div>
    </div>
  </div>
                </div>
            </div>      
        </div>
    </div>

<?php include "footer.php";   ?>
     
      
