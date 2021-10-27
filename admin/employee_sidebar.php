 
<!-- partial:partials/_sidebar.html -->

<div class="container-fluid page-body-wrapper">
        <nav class="sidebar sidebar-offcanvas" id="sidebar" style="background-image: url(https://images.pexels.com/photos/462030/pexels-photo-462030.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500);background-size: cover">
          <ul class="nav">
            <li class="nav-item nav-profile">
              
                <div class="profile-image">

                  <img class="img-xs rounded-circle" src="<?php echo $_SESSION['image']?>" style="height: 100px;width: 100px" alt="profile image">
                  <div class="dot-indicator bg-success"></div>
                </div>
                <br>
                
                <div class="text-wrapper">
                  <p class="profile-name" style="color: white;font-size: 20px;font-style: italic;font-weight: bold;"><?php echo $_SESSION['name'] ?></p>
                   
                </div>
              
            </li>
            <li class="nav-item nav-category">Main Menu</li>
            <li class="nav-item">
              <a class="nav-link" href="employee_dashboard.php">
                <i class="menu-icon typcn typcn-document-text"></i>
                <span class="menu-title">Dashboard</span>
              </a>
            </li>
             
             
            <li class="nav-item">
              <a class="nav-link" href="employee_task.php">
                <i class="menu-icon typcn typcn-shopping-bag"></i>
                <span class="menu-title">Assigned Task</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="employee_display_leave1.php">
                <i class="menu-icon typcn typcn-shopping-bag"></i>
                <span class="menu-title">leave</span>
              </a>
            </li>
            <li class="nav-item logout">
              <a class="nav-link" href="logout.php">
                <i class="menu-icon typcn typcn-shopping-bag"></i>
                <span class="menu-title">logout</span>
              </a>
            </li>
             
             
             
             
             
             
          </ul>
        </nav>


        <!-- partial -->