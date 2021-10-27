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
                    <h4 class="page-title">Task's</h4>
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
                    <h1 style="color:white;background-color: black;font-family:auto">Reply Task</h1>
                    <div class="card">
                      <div class="card-body">
                        <div style="overflow-x:auto;"> 
                          <table id="example1" class="table table-bordered table-striped">
                            <thead>
                              <tr style="font-style: bold">
                              <th>T.ID</th>
                              <th>TASK</th>
                              <th>REPLY BY</th>
                              <th>ASSIGNED BY</th>
                              <th>REPLY</th>
                              <th>DATE TIME</th>
                              <th>ADMIN REMARK</th>
                              <th>MESSAGE</th>
                              <th>ACTION</th>
                              </tr>
                            </thead>
                            <?php
                            include '../dbcon.php';
                            $query_task= "select * from reply_task";
                            $data = mysqli_query($con,$query_task);
                            while($fetch=mysqli_fetch_array($data)){
                    
                            ?>
                            <tbody>
                              <form method="POST" action="admin_reply_insert.php"> 
                                <input type="hidden" name="t_id" value="<?php echo $fetch['t_id']?>">
                                <tr>
                                  <td><?php echo $fetch['t_id']  ?> </td>
                                  <td><?php echo $fetch['task']?></td>
                                  <td><?php echo $fetch['reply_by']?></td>
                                  <td><?php echo  "ADMIN"  ?> </td>
                                  <td><?php echo $fetch['reply']  ?></td>
                                  <td><?php echo $fetch['data_time']  ?> </td>
                                  <td><?php echo $fetch['admin_reply']  ?></td>
                                  <td>
                                    <textarea name="admin_reply" cols="40" rows="1" class="form-control"></textarea>      
                                  </td>
                                  <td>

                                    <button type="submit" class="btn btn-success">reply</button>
                                   </td>
                                 </tr>
                              </form>
                              <?php
                               }
                              ?>
                            </tbody>
                            <tfoot>
                              <tr>
                                <th>T.ID</th>
                                <th>TASK</th>
                                <th>REPLY BY</th>
                                <th>ASSIGNED BY</th>
                                <th>REPLY</th>
                                <th>DATE TIME</th>
                                <th>ADMIN REMARK</th>
                                <th>MESSAGE</th>
                                <th>ACTION</th>
                              </tr>
                            </tfoot>
                          </table>
                        </div>
                      </div><!-- /.card-body -->
                    </div><!---card end-->
                </div>
            </div>      
        </div><!----row end---->
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
     
      
