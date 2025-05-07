
<?php
session_start();
require_once 'includes/dbcon.php';  
// make sure student is logged in
$student_id = $_SESSION['student_id'];

$query = "SELECT * FROM messages WHERE student_id IS NULL OR student_id = ? ORDER BY date_sent DESC";
$stmt = mysqli_prepare($con, $query);
mysqli_stmt_bind_param($stmt, "i", $student_id);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);
?>


<?php
 include "includes/header.php";
 include "includes/student-nav.php";
?>
<div class="general-content" style="width:97%;">
<div class="row">
    <div class="col-md-3 col-lg-2 bg-light" id="sidebar-wrapper">
      <?php include "student-sidebar.php"; ?>
    </div>
    
    <div class="col-md-9 col-lg-10 p-4" id="page-content-wrapper">
      <h1 class="text-center">Welcome to your Dashboard, <?php echo $_SESSION['student_name']; ?>!</h1>
      <hr>
      <h2>Your Messages From school ADMIN</h2>
      <?php while ($row = mysqli_fetch_assoc($result)) : ?>
        <div class="message-box">
            <h4><?= htmlspecialchars($row['subject']) ?></h4>
            <p><?= htmlspecialchars($row['message']) ?></p>
            <small><?= htmlspecialchars($row['date_sent']) ?></small>
            <hr>
        </div> 
      <?php endwhile;?>   
    </div>
</div> 
</div>





<style>
  
.student-nav {
  width: 100%;
  max-width: 250px; /* Set a maximum width */
}

h4{
  color: green;
  font-weight: 700;
}

p{
  /* color: black; */
  font-weight: 600;
}

small{
  color: red;
  
}
 
.message-box{
  background: #f8f9fa;
  border-left: 4px solid black ;
  margin-bottom: 20px;
  padding: 15px;
  border-radius: 5px;
}

/* Media query for responsiveness */
@media (max-width: 768px) {
  .student-nav {
    max-width: 100%; /* Allow full width on smaller screens */
  }

  .col-md-8 {
    width: 100%; /* Adjust content width for smaller screens */
  }

  .col-md-3 {
    flex: 0  0 100%;
    width: 100%;
  }

  .genral-content{
    margin: 0 auto;
  }
}

</style>