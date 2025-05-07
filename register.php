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


<div class="container reg-box my-5 text-content">
<?php  
if(isset($_POST['submit'])) {
    $fullname = $_POST['full_name'];
    $course = $_POST['course'];
    $phoneNum = $_POST['phone_num'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $image = $_FILES['image']['name'];
    $target_dir = "student-image/";
    $target_file = $target_dir . basename($_FILES["image"]["name"]);
    move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);
    $errors = array();
    // Hash the password
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Validate the users inputs
    if (empty($fullname)OR empty($course) OR empty($phoneNum) OR empty($email) OR empty($password) OR empty($image)){
        $errors[] = "All fields are required";
    }
    // Check if the email already exists in the database
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Invalid email ";
    }
    // check password length
    if (strlen($password) < 8) {
        $errors[] = "Password must be at least 8 characters long";
    }
    
    $sql = "SELECT * FROM registration WHERE email = '$email'";
    require_once "includes/dbcon.php";
    $result = mysqli_query($con, $sql);
    if (mysqli_num_rows($result) > 0) {
        $errors[] = "Email already exists";
    }


    if(count($errors)> 0){
        foreach($errors as $error){
            echo "<div class='alert alert-danger'>$error</div>";
        }
      }else{
        // Insert into database AND using bind_param to prevent SQL injection
        $sql = "INSERT INTO registration (full_name, course, phone_num, email, password, image, date) VALUES (?, ?, ?, ?, ?, ?, NOW())";
        require_once "includes/dbcon.php";
        $stmt = mysqli_stmt_init($con);
        $prepareStmt = mysqli_stmt_prepare($stmt, $sql);
        if($prepareStmt){
            mysqli_stmt_bind_param($stmt, "ssssss", $fullname, $course, $phoneNum, $email, $hashed_password, $image);
            mysqli_stmt_execute($stmt);
            echo "<div class='alert alert-success'>Registration successful</div>";
            echo "<script>window.open('student-login.php', '_self')</script>";
      }else{
            die("something went wrong");
      }
    }
}
?>  
        <div class="text-center mb-4">
            <h1>Register</h1>
            <p>Please fill in the form below to <span class="text-success">Register</span></p>
        </div>

<form action="register.php" method="post" enctype="multipart/form-data" class="col-md-8 mx-auto">
    <div class="mb-3">
        <label for="fullName" class="form-label">Full Name</label>
        <input type="text" class="form-control" name="full_name" id="fullName" required>
    </div>

    <div class="mb-3">
        <label for="course" class="form-label">Course</label>
        <select class="form-select" name="course" id="course" required>
            <option value="" disabled selected>Select your course</option>
            <option value="Computer Science">Computer Science</option>
            <option value="Information Technology">Information Technology</option>
            <option value="Software Engineering">Software Engineering</option>
            <option value="Cyber Security">Cyber Security</option>
            <option value="Data Science">Data Science</option>
            <option value="Web Development">Web Development</option>
        </select>  
    </div>

    <div class="mb-3">
        <label for="phoneNum" class="form-label">Phone Number</label>
        <input type="text" class="form-control" name="phone_num" id="phoneNum" required>
    </div>

    <div class="mb-3">
        <label for="emailAddress" class="form-label">Email Address</label>
        <input type="email" class="form-control" name="email" id="emailAddress" required>
        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
    </div>

    <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" class="form-control" name="password" id="password" required>
    </div>

    <div class="mb-3">
        <label for="imageUpload" class="form-label">Upload Photo</label>
        <input type="file" class="form-control" name="image" id="imageUpload" accept="image/*">
    </div>

    <div class="mb-4 text-center">
        <button type="submit" name="submit" class="btn btn-primary w-100">Register</button>
    </div>

    <div class="mb-3 text-center">
        <p>Already have an account? <a href="student-login.php">Login</a></p>
    </div>

    <div class="text-center text-muted small">
        <p>By clicking "Sign Up", you agree to our 
            <a href="#">Terms of Service</a> and 
            <a href="#">Privacy Policy</a>.
        </p>
    </div>
</form>
</div>

<style>

body {
    background-color: #f8f9fa;
    font-family: Arial, Helvetica, sans-serif;
}


.reg-box {
    width: 50%;
    margin: 40px auto;
    padding: 20px;
    background-color: #fff;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}


form {
    width: 100%;
}

.form-label {
    font-weight: 600;
}

.form-control {
    width: 100%;
    border: 1px solid black;
    border-radius: 3px;
}

.form-control:focus {
    border-color: #000;
    box-shadow: none;
}

.btn-primary {
    background-color: #007B77;
    border-color: #007B77;
}

.btn-primary:hover {
    background-color: #005f5f;
    border-color: #005f5f;
}


.text-content {
    margin-top: 50px;
   
}

.text-content h1 {
    font-size: 40px;
    font-weight: 700;
}

.text-content p {
    font-size: 20px;
    font-weight: 400;
}

.text-content span {
    color: #007B77;
    font-weight: 800;
}

@media (max-width: 768px) {
    .reg-box {
        width: 90%;
    }
}

</style>



<?php  
include "includes/footer.php";
?> 