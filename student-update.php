
<?php 
require_once "includes/dbcon.php";

  if (isset($_POST['update_student'])) {
      $id = $_POST['id'];
     $full_name = $_POST['full_name'];
     $course = $_POST['course'];
     $phone_num = $_POST['phone_num'];
     $email = $_POST['email'];
    
     if(!empty($_FILES['image']['name'])) {
      $image = $_FILES['image']['name'];
      $target_dir = "student-image/";
      $target_file = $target_dir . basename($_FILES["image"]["name"]);
      move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);
     }else{
      $image = $student['image'];
     }

      // Ensure $id is retrieved from the form submission
     $updateQuery = "UPDATE `registration` SET full_name= '$full_name',`course`= '$course',`phone_num`='$phone_num',`email`='$email',`image`='$image' WHERE id =$id";

     if(mysqli_query($con, $updateQuery)) {
        echo "Student updated successfully";
        header("Location: manage-students.php");
        exit();
     } else{
      echo "Error updating student: " . mysqli_error($con);
     }
  }
?>