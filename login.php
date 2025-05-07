<?php
session_start();
?>

<?php 
include "includes/nav.php";
require_once "includes/dbcon.php";
?>


<?php
if (isset($_POST['login'])) {
    $username = mysqli_real_escape_string($con, $_POST['username']);
    $password = mysqli_real_escape_string($con, $_POST['password']);

    // Check if the username and password are correct
    $query = "SELECT * FROM users WHERE user_name='$username' AND user_password='$password'";
    $result = mysqli_query($con, $query);
    $check = mysqli_num_rows($result);
    if ($check == 1) {
        // If the username and password are correct, set session variables
        $_SESSION['user_name'] = $username;
        echo "<script>window.open('admin_dashboard.php', '_self')</script>";
        exit();
    } else {
        // If the username and password are incorrect, show an error message
        echo "<script>alert('Invalid username or password. Please try again.')</script>";
        
    }
      
}
?>

<div class="container mt-5" >
    <div class="text-content text-center">
        <h1 class="text-center mb-4">Admin Login</h1>
        <p class="text-center">Please fill in the form below to <span>Login</span></p>
    </div>

     <!-- <div class="alert alert-danger col-md-5 text-center m-auto mb-2" role="alert">
            A simple danger alert—check it out!
     </div>
        <div class="alert alert-success col-md-5 text-center m-auto" role="alert">
                A simple success alert—check it out!
        </div>        -->
    <form class="mt-4 col-md-6 justify-content-center mx-auto " method="post">
        <div class="mb-3">
            <label for="exampleInputUsername" class="form-label">Username</label>
            <input type="text" name="username" class="form-control">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" name="password" class="form-control">
        </div>
        <div class="mb-4">
            <button type="submit" name="login" class="btn btn-primary">Login</button>
        </div>
    </form>
</div>



<?php  
include "includes/footer.php";
?> 