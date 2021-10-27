<?php include "session.php"; ?>
<?php include 'admin_authentication.php';?>
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
                             <li><b><button style="background-color:#03a9f4;border-radius: 10px"><a href="assign_task.php" class="animate__animated animate__pulse" style="color:white;padding: 5px;font-style: italic;font-weight: bold;"><i class="fa fa-tasks" aria-hidden="true"></i></i>Assign Task</a></button></b></li>
                            <li><b><button style="background-color:#03a9f4;border-radius: 10px"><a href="regestration.php" class="animate__animated animate__pulse" style="color:white;padding: 5px;font-style: italic;font-weight: bold;"><i class="fa fa-plus-square" aria-hidden="true" ></i>Add Employee</a></button></b></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12  grid-mrgin">
                <div class="card text-center" style="box-shadow: 0px 0px 35px  #ccc">
                    <h1 style="color:white;background-color: black;font-family:auto">Admin Data</h1>
                      
                <div style="overflow-x:auto;">     
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr style="font-style: bold">
                     <th>S. NUMBER</th>
                    <th>NAME</th>
                    <th>ROLE</th>
                    <th>NUMBER</th>
                    <th>EMAIL</th>
                    <th>IMAGE</th>
                    <th>ACTION</th>
                  </tr>
                  </thead>
                  <?php
                  include '../dbcon.php';
                  $query = "select * from employe where role='admin'";
                  $data = mysqli_query($con,$query);
                  while($fetch=mysqli_fetch_array($data)){
                    
                    ?>


                  <tbody>
                    <tr>
                      <td><?php echo $fetch['id']  ?> </td>
                      <td><?php echo $fetch['first_name']  ?> </td>
                      <td><?php echo $fetch['role']  ?> </td>
                      <td><?php echo $fetch['number']  ?> </td>
                      <td style="text-align: justify;"><?php echo $fetch['email']  ?> </td>
                      <td>
                        <img src="<?php echo $fetch['image']?>" style="width: 100px;height: 100px;border-radius: 70px">
                      </td>
                      <td style="font-size: 20px">
                        <a href=" " class=""><i style="color: blue" class="fa fa-eye" aria-hidden="true"></i></a>
                        <a href="edit_employee.php?id=<?php echo $fetch['id'] ?>" class=""><i class="fa fa-pencil-square-o" style="color: green" aria-hidden="true"></i></a>
                        <a href="employee_delete.php?id=<?php echo $fetch['id']?>" class=""><i class="fa fa-trash-o"  style="color:red;"></i></a>
                         
                      </td>
                    </tr>
                    <?php
                  }
                  ?>
                      
                   
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>S. NUMBER</th>
                    <th>NAME</th>
                    <th>ROLE</th>
                    <th>NUMBER</th>
                    <th>EMAIL</th>
                    <th>IMAGE</th>
                    <th>ACTION</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
         </div>
    </div>
                      
        </div>
    </div>


<?php include "footer.php";   ?>
     
      
