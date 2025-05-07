<?php 
  session_start();
  if (isset($_SESSION["user"])) {
    header("Location: student-dashboard.php");
  }
?>
    <?php 
     include "includes/header.php";
     include "includes/nav.php";
    ?>

<div class="container mt-5" >
  
    <div class="text-content text-center">
        <h1 class="text-center mb-4">Student Login</h1>
        <p class="text-center">Please fill in the form below to <span>Login</span></p>
    </div>

      <?php 
      if(isset($_POST['login'])) {
        require_once "includes/dbcon.php";
        $email = mysqli_real_escape_string($con, $_POST['email']);
        $password = mysqli_real_escape_string($con, $_POST['password']);
       
        $sql = "SELECT * FROM registration WHERE email = '$email'";
        require_once "includes/dbcon.php";
        $result = mysqli_query($con, $sql);
        $user = mysqli_fetch_array($result, MYSQLI_ASSOC);
        if ($user) {
          if (password_verify($password, $user['password'])) {
            session_start();
            echo "<script>window.open('student-dashboard.php', '_self')</script>";
            $_SESSION['user'] = "yes";
            $_SESSION['student_image'] = $user['image'];
            $_SESSION['student_email'] = $user['email'];
            $_SESSION['student_name'] =  $user ['full_name'];
            $_SESSION['student_id'] = $user['id'];
            $_SESSION['student_course'] = $user['course'];
            $_SESSION['student_phone'] = $user['phone_num'];
            die();
          }else{
            echo "<div class='alert alert-danger col-md-5 text-center m-auto mb-2' role='alert'>
            Password does not match.please input the correct password</div>";
          }
        }else{
          echo "<div class='alert alert-danger col-md-5 text-center m-auto mb-2' role='alert'>
          Invalid email. Please try again.</div>";
        }
      }
      ?>
  
    <form action="student-login.php" class="mt-4 col-md-6 justify-content-center mx-auto " method="post">
        <div class="mb-3">
            <label for="exampleInputUsername" class="form-label">Email</label>
            <input type="text" name="email" class="form-control">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" name="password" class="form-control">
        </div>
        <div class="mb-4">
            <button type="submit" name="login" class="btn btn-success " value="login">Login</button>
        </div>
    </form>
</div>
