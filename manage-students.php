<?php 
session_start();
require_once "includes/dbcon.php";
// Check if the user is logged in as admin
if(!isset($_SESSION['user_name'])) {
    header("Location: login.php");
    exit();
}

?>


<?php 
include "includes/student-nav.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Manage student</title>
  <link rel="stylesheet" href="css/manage-students.css">
</head>
<body>
 <div class="container-fluid">
   <div class="row">
   <div class="col-md-3 col-lg-2 bg-dark text-white min-vh-50 p-0">
      <?php include "includes/sidebar.php"; ?>
   </div>
 <?php 
    //  <!-- fetch students from database -->
    $query = "SELECT id, full_name, course, phone_num, email, image, date FROM registration";
    $result = mysqli_query($con, $query);
 ?>
   <div class="col-md-9 col-lg-10">
   <div class="container container-2 py-4">
      <h1 class="text-center mb-4">Manage Students</h1>
      <div class="table-responsive">
         <table class="table table-bordered table-hover align-middle">
            <thead class="table-dark">
                  <th>Students ID</th>
                  <th>Full Name</th>
                  <th>Course</th>
                  <th>Phone No</th>
                  <th>Email</th>
                  <th>image</th>
                  <th>date</th>
                  <th>Action</th>
                </tr>
            </thead>
            <tbody>
              <?php 
               $Id = 1;
                while($row = mysqli_fetch_assoc($result)){
                  ?>
                  <tr>
                    <td><?= $Id++ ?></td> 
                    
                    <td><?= $row['full_name'] ?></td>
                    <td><?= $row['course'] ?></td>
                    <td><?= $row['phone_num'] ?></td>
                    <td><?= $row['email'] ?></td>
                    <td>
                      <img src="../school-website/student-image/<?= $row['image'] ?>" alt="Student Photo" class="img-thumbnail" style="width: 100px; height: 100px; object-fit: cover;">
                   </td>
                    <td><?= $row['date'] ?></td>
                    <td class="action-btns">
                        <a href="student-edit.php?id=<?= $row['id'] ?>" class="btn btn-sm btn-outline-warning">Edit</a>
                        <a href="student-delete.php?id=<?= $row['id'] ?>" class="btn btn-sm btn-outline-danger" onclick="return confirm('Are you sure you want to delete this student?')">Delete</a>
                    </td>
                </tr>
            <?php } ?>
            </tbody>
         </table>
      </div>
   </div>
    </div> 
  </div>    
 </div>
</body>
</html>

<div class="col-md-9 col-lg-10">
      <div class="container container-2 py-4">
        <?php 
          // Your student table content goes here
        ?>
      </div>
    </div>

    <style>
      td{
        font-size: 15px;
      }
    </style>