
<?php 
  session_start();
  if (!isset($_SESSION["user"])) {
    header("Location: student-login.php");
  }
  // fetch individual student ID//
  include "includes/dbcon.php";
  $student_id = $_SESSION['student_id'];
  $query = mysqli_query($con, "SELECT * FROM `registration` WHERE id = $student_id");
  $row = mysqli_fetch_assoc($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>student profile</title>
</head>
<body>
  
 <?php 
  include "includes/student-nav.php"; 
  include "includes/header.php"; 
 ?>
<style>
  @media (max-width: 768px) {

    #sidebar-wrapper {
        width: 100%;
        /* max-width: 100%; */
      }

      .general-content{
        width: 100%;
        margin: 0 auto;
        /* margin-left: 24px; */
      }

       #page-content-wrapper {
        padding: 1rem;
      }

       .card {
        margin-bottom: 1rem;
      }

      .row.mt-4 {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        
      }

      .row{
        max-width: 1200px;
       
      }

      .col-md-3 {
        flex: 0  0 100%;
        width: 100%;
      }

    .form-group {
      width: 100%;
     
    }

    .container.mt-4.text-center h1 {
      font-size: 24px;
    }

    img.img-fluid.rounded-circle.img-thumbnail {
      width: 100px;
      height: 100px;
    }

    .btn.btn-success.mt-3 {
      font-size: 13px;
    }
    .form_control{
      width: 100%;
    }
  }

  @media (max-width: 576px) {
    .form-group {
      width: 100%;
    }

    .container.mt-4.text-center h1 {
      font-size: 20px;
    }

    img.img-fluid.rounded-circle.img-thumbnail {
      width: 80px;
      height: 80px;
    }

    .btn.btn-success.mt-3 {
      font-size: 12px;
    }
  }
</style>
 <div class="general-content" style="width: 91%; margin-top:5px;">
 <div class="row">
    <div class="col-md-3 col-lg-2 bg-dark text-white min-vh-50 p-0">
        <?php include "student-sidebar.php"; ?>
    </div>

    <div class="col-md-9 col-lg-10">
          <div class="container mt-4 text-center">
             <h1 class="text-white">Edit Profile</h1>
             <form action="update-profile.php" method="POST" enctype="multipart/form-data">
                <div class="text-center mb-3">
                <img src="../school-website/student-image/<?php echo $row['image'] ;?>" alt="Student Photo" class="img-fluid rounded-circle  img-thumbnail mb-2" style="width: 150px; height: 150px; object-fit: cover;">
                </div>
                <input type="hidden" name="id" value="<?php echo $row['id']; ?>">

                <div class="form-group" style="width: 85%; justify-content:center; align-content:center; margin:0 auto;">
                  <label class="text-white mb-2">Full Name</label>
                  <input type="text" class="form-control" name="name" value="<?php echo $row['full_name']; ?>" required>
                </div>

                
                <div class="form-group" style="width: 85%; justify-content:center; align-content:center; margin:0 auto;">
                  <label class="text-white mb-2">Email</label>
                  <input type="text" class="form-control" name="email" value="<?php echo $row['email']; ?>" required>
                </div>

                 
                <div class="form-group" style="width: 85%; justify-content:center; align-content:center; margin:0 auto;">
                  <label class="text-white mb-2">Phone Number</label>
                  <input type="text" class="form-control" name="phone_num" value="<?php echo $row['phone_num']; ?>" required>
                </div>

                
                <div class="form-group" style="width: 85%; justify-content:center; align-content:center; margin:0 auto;">
                  <label class="text-white mb-2">Change Profile Picture</label>
                  <input type="file" class="form-control" name="image" accept="image/*">
                </div>

                <button type="submit" name="update_student" class="btn btn-success mt-3" style="font-size: 15px;">Update Profile</button>
             </form>
          </div>
    </div>
    
 </div>
</div>
 
         
</body>
</html>

<style>
  body{
    font-family: poppins, sans-serif;
    background-color: #333333;
  }
</style>