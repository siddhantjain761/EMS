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
                    <h4 class="page-title">Leaves</h4>
                     
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 grid-margin">
                <div class="card text-center"  >
                    <h1 style="color:white;background-color: black;font-family:auto">Official Leaves</h1>
                     <div class="card" style="box-shadow: 0px 0px 35px  #ccc">
               
              <!-- /.card-header -->
              <div class="card-body" >
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
                  $name=$_SESSION['name']; 
                  $query = "select * from assign_leave1 where assign_to='$name'";
                  $data = mysqli_query($con,$query);
                  $fetch=mysqli_fetch_array($data);
                  $rows1=mysqli_num_rows($data);
                  if($rows1>'0'){
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
                       
                    </tr>
                  </tbody>
                  <?php
                }
                    else
                      echo "Not Yet Assigned";
                  
                  ?>
                  <tfoot>
                  <tr>
                     <th>L.ID</th>
                    <th>ASSIGN TO</th>
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
                  </tr>
                  </thead>
                  <?php
                  include '../dbcon.php';
                  $name=$_SESSION['name']; 
                  $query3 = "select * from apply_leave where apply_by='$name'";
                  $data3 = mysqli_query($con,$query3);
                  $fetch3=mysqli_fetch_array($data3);
                  $rows=mysqli_num_rows($data3);
                  if($rows>'0'){
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
                      <td> <?php
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
                          <button class="btn btn-danger">Pending</button>


                       <?php
                        }
                        ?>
                      </td>
                      <td><?php echo $fetch3['comment1']?> </td>
                       
                    </tr>

                   
                      
                   
                  </tbody>
                  <?php
                }
                else{
                  echo "No leaves applied";
                }
                 ?>

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
        <br>
        <div class="row">
            <div class="col-md-12 grid-margin">
              <div class="card text-center" style="box-shadow: 0px 0px 35px  #ccc">
                    <h1 style="color:white;background-color:black;font-family:auto">Apply Leave</h1>
                <div class="card-body" style="font-weight: 700;">
                        <form method="post" action="employee_apply_leave_insert.php">
                             <div class="container-fluid">
                                <div class="row"> 
                                    <div class="col-md-12">
                                        <div class="card">
                                             
                                            <div class="card-body" style="text-align:justify;font-weight:200 ">
                                                <div class="form-gorup">
                                                    <label>leave from:</label>
                                                    <input type="date" name="leave_from" placeholder="dd-mm-yy" class="form-control">
                                                </div>
                                                <div class="form-gorup">
                                                    <label>leave to:</label>
                                                    <input type="date" name="leave_to" placeholder="dd-mm-yy" class="form-control">
                                                </div>
                                                <div class="form-gorup">
                                                    <label>Earning leave:</label>
                                                    <input type="text" name="earning_leave" placeholder="Number of leaves" class="form-control">
                                                </div>
                                                <div class="form-gorup">
                                                    <label>Medical leave:</label>
                                                    <input type="text" name="medical_leave" placeholder="Number of leaves" class="form-control">
                                                </div>
                                                <div class="form-gorup">
                                                    <label>Casual leave:</label>
                                                    <input type="text" name="Casual_leave" placeholder="Number of leaves" class="form-control">
                                                </div>

                                                 
                                                
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <br>
                                  <input type="submit" name="sumbit" value="APPLY" style="background-color: black;color: white">
                             </div>
                        </form>
                    </div>
                </div>
            </div>      
        </div>
      </div>
    </div>
  </div>




                </div>
            </div>      
        </div>
    </div>

<?php include "footer.php";   ?>
     
      
