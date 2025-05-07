<?php 
include('includes/dbcon.php');

if(isset($_GET['id'])) {
  $id = intval($_GET['id']); {
  $delete = "DELETE FROM `messages` WHERE id = $id";
  
  if (mysqli_query($con, $delete)) {
     echo "<script>alert('Message deleted sucessfully'); window.location= 'admin-manage-messages.php';</script>";
  }else{
    echo "<script>alert('failed to delete message'); window.location= 'admin-manage-messages.php';</script>";
  }
}
}else{
  header("location: admin_manage_messages.php");
}

?>

