<div class="sidebar" style="width: 100%;">
      <div class="row">
            <div class="col-md-3 bg-dark text-white p-4" id="sidebar-wrapper" style="height: 100vh; width: 250px;">
                <h4 class="mb-4 text-center">Student Panel</h4>
                <div class="text-center mb-3">
                  <img src="../school-website/student-image/<?php echo $_SESSION['student_image'];?>" alt="profile picture" class="img-fluid rounded-circle" style="width: 150px; height: 150px; object-fit: cover; border:2px solid #fff;">
                  <p class="mt-2"><?php echo $_SESSION['student_name'];?></p>
                </div>
                <hr>
                <ul class="list-unstyled list nav flex-column">
                  <li><a href="student-dashboard.php" class="text-white">Dashboard</a></li>
                  <li><a href="student-dashboard.php" class="text-white">My Courses</a></li>
                  <li><a href="student-dashboard.php" class="text-white">My Results</a></li>
                  <li><a href="student-profile.php" class="text-white">My Profile</a></li>
                  <li><a href="student-view-message.php" class="text-white">Messages</a></li>
                  <li><a href="student-logout.php" class="text-white">Logout</a></li>
                </ul>
             </div>
         <!-- <div class="col-md-9" id="page-content-wrapper">
          <h1 class="text-center">Welcome to your Dashboard, <?php echo $_SESSION['student_name'];?>!</h1>
          <hr>
          <p class="text-center">This is your dashboard where you can access your course materials, results, and profile.</p>
       </div>   -->
   
      </div>
</div>



<style>
  body {
    font-family: Arial, Helvetica, sans-serif;
  }

  .card-text h1{
    font-weight: 30px;
  }

  .list a {
    text-decoration: none;
    color: green;
  }

  .list li {
    text-align: center;
    margin-bottom: 20px;
   
  }

  
  .list li:hover {
    color: #007bff;
    font-weight: bold;
    transition: 0.3s;
  }

  #sidebar-wrapper img {
    margin: auto;
    display: block;
  }
</style>