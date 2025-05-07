<?php 
 session_start();
 include 'includes/dbcon.php'; 

if (isset($_POST['send'])) {
  $student_id = !empty($_POST['student_id']) ? $_POST['student_id'] :null;
  $subject = mysqli_real_escape_string($con, $_POST['subject']);
  $message = mysqli_real_escape_string($con, $_POST['message']);
  
  $sql = "INSERT INTO `messages`(`student_id`, `subject`, `message`, `date_sent`) VALUES (?,?,?,NOW())";
  $stmt = mysqli_prepare($con, $sql);
  mysqli_stmt_bind_param($stmt, "iss", $student_id, $subject, $message);

  if (mysqli_stmt_execute($stmt)) {
    echo "<script>alert('Message sent successfully!'); window.location='admin-message.php';</script> ";
    $_SESSION['student_id'] = $student_id;
  } else {
    echo "<script>alert('Error sending message. Please try again.');</script>";
  }
}
?>

