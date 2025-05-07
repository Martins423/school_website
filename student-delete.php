<?php 
  include "includes/student-nav.php";
  include "includes/sidebar.php";
  include "includes/dbcon.php";
 ?>
 <!-- Check if Id is passed -->
<?php
if(isset($_GET['id'])) {
  $student_id = $_GET['id'];

  // Delete the student from the database
  $query = "DELETE FROM registration WHERE id = $student_id";

  if(mysqli_query($con, $query)) {
    // Redirect to the manage-students.php page after deletion
    echo "<script>window.open('manage-students.php', '_self')</script>";
    exit();
  } else {
    echo "Error deleting student: " . mysqli_error($con);
  }
}

?>