<?php   
include "includes/dbcon.php";
session_start();
?>

<?php
include "includes/header.php";
include "includes/admin_nav.php";
include "includes/sidebar.php";
?>

<!-- Fetch all student for thr dropdown -->
 <?php 
  $students = mysqli_query($con, "SELECT id, full_name, email FROM registration");
 ?>


 <div class="container text-center : ?? ">
     <h3 class="mb-4">Send Message to individual Student or All Student</h3>
    <form action="send-message.php" method="post">
      <div class="form-group" style="width: 70%; margin: 0 auto;">
         <label><b>Send to:</b></label>
         <select name="student_id" class="form-control">
            <option value="">--All Students--</option>
            <?php while($row = mysqli_fetch_assoc($students)) : ?>
            <option value="<?= $row['id']?>">
               <?= $row['full_name'] . '=>' .$row['email']?>
            </option>
            <?php endwhile; ?>
         </select>
      </div><br>

      <div class="form-group" style="width: 70%; margin: 0 auto;">
         <label><b>Subject:</b></label>
          <input type="text" name="subject" class="form-control"required>
      </div><br>

      <div class="form-group" style="width: 70%; margin: 0 auto;">
         <label><b>Message:</b></label>
         <textarea name="message" class="form-control" rows="4" required></textarea>
      </div><br>
      <button type="submit" name="send" class="btn btn-success mt-2">Send Message</button>
    </form>
 </div>


 <style>
@media screen and (max-width: 768px) {
   .container {
      padding: 5px;
   }

   form {
      max-width: 100%;
      width: 100%;
      margin: 0 auto;
   }

   .form-group {
      width: 100%;
      margin-bottom: 15px;
   }

   .form-group input, 
   .form-group textarea, 
   .form-group select {
      width: 100%;
      font-size: 14px;
   }
   
}
</style>