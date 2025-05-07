
<?php 
session_start();
require_once 'includes/dbcon.php';
//  check if student is logged in
 $student_id = $_SESSION['student_id'] ?? null;
 ?>

<?php 
include "includes/header.php";
include "includes/nav.php";
?>

<!-- FIRST SECTION -->
<div class="first-section">
    <img src="image/bg-img-4.jpg" alt="background" class="bg-img">
    <div class="overlay">
     <div class="first-section-content">
        <h1>Contact Us</h1>
        <p>Your future starts here</p>
    </div>
 </div>
</div>

<!-- SECOND-SECTION -->
<section class="contact-section">
    <div class="container">
        <div class="row contact-content">
            <div class="col-md-6">
                <h2 class="mb-5">Contact <span>Us</span></h2>
                <p class="small">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed euismod, nisl eget consectetur sagittis, nisl nunc
                    aliquet
                    sapien, eget tincidunt nunc nisl eget dolor. Sed euismod, nisl eget consectetur sagittis, nisl nunc aliquet
                    sapien,
                    eget tincidunt nunc nisl eget dolor.</p>
            </div>
            <div class="col-md-6">


                <?php 
                 if (isset($_SESSION['success'])) {
                    echo $_SESSION['success'];
                    unset($_SESSION['success']);
                }
                ?>
                <form action="contact.php" method="POST" class="contact-form">
                    <input type="text" name="full_name" placeholder="Your Name" required>
                    <input type="email" name="email" placeholder="Your Email" required>
                    <input type="text" name="subject" placeholder="Your Subject" required>
                    <textarea name="message" rows="5" placeholder="Your Message" required></textarea>
                    <button type="submit" name="submit">Send Message</button>
                </form>
            </div>
        </div>
    </div>
</section>

<?php 
 if (isset($_POST['submit'])) {
    $full_name = mysqli_real_escape_string($con, $_POST['full_name']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $subject = mysqli_real_escape_string($con, $_POST['subject']);
    $message = mysqli_real_escape_string($con, $_POST['message']);

    $query = "INSERT INTO messages( student_id, full_name, email, subject, message, created_at) VALUES ('$student_id','$full_name','$email','$subject','$message', NOW())";
    // $query = "INSERT INTO messages(full_name, email, subject, message, created_at ) VALUES ('$full_name','$email','$subject','$message', NOW())";
    if(mysqli_query($con, $query)){
            $_SESSION['success'] = "<div class='alert alert-success col-md-7 text-center m-auto mb-2' role='alert'>
            Message sent successfully</div>";
            echo "<script>window.open('contact.php', '_self')</script>";
            // $_SESSION['student_id'] = $student_id;
            }else{
                echo "Error: " .mysqli_error($con);
            }
    }
   
 
 ?>









<?php  
include "includes/footer.php";
?> 