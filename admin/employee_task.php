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
                    <h4 class="page-title">My Task</h4>
                     
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 grid-margin">
              <div class="card text-center" style="box-shadow:0px 0px 35px #818181;">
                    <h1 style="color:white;background-color: black;font-family:auto">Assigned Task</h1>
                  <div class="card">
              <div class="card-body">
                <div style="overflow-x:auto;"> 
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr style="font-style: bold">
                    <th>TASK ID</th>
                    <th>EMPLOYEE NAME</th>
                    <th>TASK</th>
                    <th>ASSIGNED BY</th>
                    <th>DATE TIME</th>
                    <th>ACTION</th>
                     
                  </tr>
                  </thead>
                  <?php
                  include '../dbcon.php';
                  $e_id=$_SESSION['e_id']; 
                  $query = "select * from assign_task where e_id='$e_id'";
                  $data = mysqli_query($con,$query);
                  if(mysqli_num_rows($data)>'0')
                  {
                  while($fetch=mysqli_fetch_array($data)){
                    
                    ?>


                  <tbody>
                    <tr>
                      <td><?php echo $fetch['t_id']  ?> </td>
                      <td><?php echo  $_SESSION['name'] ?> </td>
                      <td><?php echo $fetch['task']  ?> </td>
                      <td><?php echo "ADMIN"  ?> </td>
                      <td><?php echo $fetch['date_time']  ?> </td>
                      <td><a href="employee_reply.php?t_id=<?php echo $fetch['t_id']?>">Reply task</td>
                     
  
                       
                     
                    </tr>

                    <?php
                  }
                  }
                  else
                    echo "No Task Assigned";
                  ?>
                      
                   
                  </tbody>
                  <tfoot>
                  <tr>
                     <th>TASK ID</th>
                    <th>EMPLOYEE NAME</th>
                    <th>TASK</th>
                    <th>ASSIGNED BY</th>
                    <th>DATE TIME</th>
                    <th>ACTION</th>
                     
                  </tr>
                  </tfoot>
                </table>
              </div><!----card body-->
            </div>
        </div> <!-- /.card -->
        <br>
        <div class="row">
            <div class="col-md-12 grid-margin">
                <div class="card text-center" style=" ">
                    <h1 style="color:white;background-color: black;font-family:auto">Task Status</h1>
                     <div class="card">
               
              <!-- /.card-header -->
              <div class="card-body">
                <div style="overflow-x:auto;"> 
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr style="font-style: bold">
                    <th>REPLY ID</th>
                    <th>TASK</th>
                    <th>MY REPLY</th>
                    <th>TASK ID</th>
                    <th>DATE TIME</th>
                    <th>ADMIN REMARK</th>
                     
                  </tr>
                  </thead>
                  <?php
                  include '../dbcon.php';
                  $name=$_SESSION['name']; 
                  $query = "select * from reply_task where reply_by='$name'";
                  $data = mysqli_query($con,$query);
                  while($fetch=mysqli_fetch_array($data)){
                    
                    ?>


                  <tbody>
                    <tr>
                      <td><?php echo $fetch['r_id']  ?> </td>
                       
                      <td><?php echo $fetch['task']  ?> </td>
                      <td><?php echo $fetch['reply']?> </td>
                      <td><?php echo $fetch['t_id']  ?> </td>
                      <td><?php echo $fetch['data_time']  ?> </td>
                      <td><?php echo $fetch['admin_reply']   ?></td>
                       
                    <?php
                  }
                  ?>
                      
                   
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>REPLY ID</th>
                    <th>TASK</th>
                    <th>MY REPLY</th>
                    <th>TASK id</th>
                    <th>DATE TIME</th>
                    <th>ADMIN REMARK</th>
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
     
      
