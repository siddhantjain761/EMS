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
                    <h4 class="page-title">Assigned Task</h4>
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
                    <h1 style="color:white;background-color: black;font-family:auto">Show Assign Task</h1>
                     <div class="card">
               
              <!-- /.card-header -->
              <div class="card-body">
                <div style="overflow-x:auto;"> 
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr style="font-style: bold">
                    <th>T.ID</th>
                    <th>EMPLOYEE ID</th>
                    <th>TASK</th>
                    <th>ASSIGNED BY</th>
                    <th>DATE TIME</th>
                    <th>ACTION</th>
                     
                  </tr>
                  </thead>
                  <?php
                  include '../dbcon.php';
                  $query_task= "select * from assign_task order by t_id desc";
                   
                  $data = mysqli_query($con,$query_task);
                  while($fetch=mysqli_fetch_array($data)){
                    
                    ?>


                  <tbody>
                    <tr>
                      <td><?php echo $fetch['t_id']  ?> </td>
                      <td><?php echo $fetch['e_id']?></td>
                      <td><?php echo $fetch['task']?></td>
                      <td><?php echo  "ADMIN"  ?> </td>
                      <td><?php echo $fetch['date_time']  ?></td>
                      </td>
                      <td style="font-size: 20px">
                        <a href=""><i style="color: blue" class="fa fa-eye" aria-hidden="true"></i></a>
                        <a href="admin_edit_task.php?t_id=<?php echo $fetch['t_id']?>"  ><i class="fa fa-pencil-square-o" style="color: green" aria-hidden="true"></i></a>
                        <a href="admin_delete_task.php?t_id=<?php echo $fetch['t_id']?>"><i class="fa fa-trash-o"  style="color:red;"></i></a>
                         
                      </td>
                    </tr>
                    <?php
                  }
                  ?>
                      
                   
                  </tbody>
                  <tfoot>
                  <tr>
                     <th>T.ID</th>
                    <th>EMPLOYEE ID</th>
                    <th>TASK</th>
                    <th>ASSIGNED BY</th>
                    <th>DATE TIME</th>
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

<?php include "footer.php";   ?>
     
      
