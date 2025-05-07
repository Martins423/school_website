 <?php 
 session_start();
//  if session variable is not found
if(!isset($_SESSION['user_name'])) {
    // Redirect to the login page
    header("Location: login.php");
    exit();
}
include "includes/dbcon.php";
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <!-- FAV ICON -->
   <link rel="ICON" href="image/school-icon.png">

    <link rel="stylesheet" href="css/admin.css">
    <!-- BOOSTRAP CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
    
   <!-- FONT AWESOME -->
   <script src="https://kit.fontawesome.com/43deff0b3e.js" crossorigin="anonymous"></script>
</head>
<body class="body">

 
<?php 
    include "includes/dbcon.php";
    // Fetch the latest 5 students from the database
     $query = "SELECT `id`, `full_name`, `course`, `phone_num`, `email`, `password`, `image`, `date` FROM `registration`  ORDER BY `date` DESC LIMIT 5";
     $result = mysqli_query($con, $query);
?> 

<?php
include "includes/header.php";
include "includes/admin_nav.php";
?>

<div class="container-fluid">
   <div class="row">
    <div class="col-md-3 col-lg-2 bg-light min-vh-50 p-0" id="sidebar-wrapper">
      <?php 
      include "includes/sidebar.php";
      ?>
    </div>
    
  <div class="col-md-9 col-lg-10" id="page-content-wrapper">
    <div class="container container-2 py-4">
      <h5 class="text-center mt-3">Recent Student Registration</h5>
    <!-- <div class="d-flex justify-content-center text-center" style="width: 70%; margin:0 auto; margin-left:200px;"> -->
    <div class="table-responsive">
    <table class="table table-bordered mt-4">
      <thead class="thead-dark">
        <tr>
          <th>Student ID</th>
          <th>Full Name</th>
          <th>Course</th>
          <th>Phone No</th>
          <th>Email</th>
          <th>Date</th>
        </tr>
      </thead>
      <tbody>
        <?php if (mysqli_num_rows($result) > 0): ?>
            <?php while ($row = mysqli_fetch_assoc($result)): ?>
                <tr>
                <td><?= $row['id'] ?></td>
                <td><?= $row['full_name'] ?></td>
                <td><?= $row['course'] ?></td>
                <td><?= $row['phone_num'] ?></td>
                <td><?= $row['email'] ?></td>
                <td><?= $row['date'] ?></td>
                </tr>
            <?php endwhile; ?>
            <?php else: ?>
        <tr>
            <td colspan="5" class="text-center">No students found</td>
        </tr>
        <?php endif; ?>
    </tbody>
 </table>
 </div>
 </div>
 </div>
 </div>
</div>    
</body>
</html>

<style>
   
   td{
    font-size: 15px;
   }
    @media screen and (max-width: 768px) {
        .contain {
            width: 100%;
            /* padding: 0 15px; */
        }

        .contain h5{
          text-align: center;
        }

        .sidebar{
          width: 100%;
        }
        
    }
</style>



