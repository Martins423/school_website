
<?php 
include "includes/dbcon.php";
session_start();
if (isset($_POST['update_student'])){

$id = $_POST['id'];
$full_name = mysqli_real_escape_string($con, $_POST['name']);
$email = mysqli_real_escape_string($con, $_POST['email']);
$phone_num = mysqli_real_escape_string($con, $_POST['phone_num']);

// handle image upload
 if ($_FILES['image']['name'] != "") {
   $image = $_FILES['image']['name'];
   $tmp_name = $_FILES['image']['tmp_name'];
   $target = "../school-website/student-image/" . basename($image);
   move_uploaded_file($tmp_name, $target);

   $query = "UPDATE `registration` SET full_name='$full_name', email='$email', phone_num='$phone_num', image='$image' WHERE id=$id";
 }else{
    $query = "UPDATE `registration` SET full_name='$full_name', email='$email', phone_num='$phone_num' WHERE id=$id";
 }

 if (mysqli_query($con, $query)) {
    $fetch = mysqli_query($con, "SELECT * FROM `registration` WHERE id = $id");
    $updated_data = mysqli_fetch_assoc($fetch);
    $_SESSION['student_image'] = $updated_data['image'];
    $_SESSION['student_name'] = $updated_data['full_name'];
    $_SESSION['student_email'] = $updated_data['email'];
    $_SESSION['student_phone'] = $updated_data['phone_num'];
    echo "<div class='alert alert-success col-md-5 text-center m-auto mb-2' role='alert'>
    Password does not match.please input the correct password</div>";
    header("Location: student-dashboard.php");
 } else {
    echo "Error updating profile: " . mysqli_error($con);
 }

}

?>
