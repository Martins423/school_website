<?php
 include 'includes/header.php';
?>
 
<!-- SUB-NAV-BAR -->
<div class="sub-navbar bg-success text-light py-1">
  <div class="container d-flex justify-content-between align-items-center small">
   
    <div class="contact-info">
      <span class="me-3"><i class="fa-solid fa-phone-flip"></i>  +234 812 345 6789</span>
      <span><i class="fa-solid fa-envelope"></i>  info@yourschool.edu.ng</span>
    </div>
    
    
    <div class="social-icons">
      <a href="#" class="text-light me-3"> <i class="fa-brands fa-facebook"></i></a>
      <a href="#" class="text-light me-3">  <i class="fa-brands fa-instagram"></i></a>
      <a href="#" class="text-light me-3">  <i class="fa-brands fa-whatsapp"></i></a>
      <a href="#" class="text-light me-3">  <i class="fa-brands fa-x-twitter"></i></a>
    </div>
  </div>
</div>


<!-- MAIN NAV-BAR -->
<nav class="navbar navbar-expand-lg navbar-2 sticky-top shadow-sm">
  <div class="container">
    <!-- Brand/Logo -->
    <a class="navbar-brand" href="#">
      <img src="image/school-icon-removebg-preview.png" alt="" width="45px" height="45px">
    </a>

    <!-- Toggler button for mobile -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Navbar content -->
    <div class="collapse navbar-collapse" id="navbarSupportedContent">

      <!-- Centered Nav Links -->
      <ul class="navbar-nav mx-auto mb-2 mb-lg-0" style="gap: 25px;" >
        <li class="nav-item ">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about.php">About us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="student.php">Student</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contact.php">Contact us</a>
        </li>
      </ul>

      <!-- Right-aligned items -->
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="register.php">Register</a>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Login
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="login.php">Admin Login</a></li>
            <li><a class="dropdown-item" href="student-login.php">Student Login</a></li>
          </ul>
        </li>
       
      </ul>
    </div>
  </div>
</nav>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>


<!-- SUB NAV-BAR -->
<style> 
    .sub-navbar a:hover {
      color: var(--accent-color); 
    }
</style>

<!--  STYLE FOR MAIN NAV-BAR */-->
<style>   
    .navbar-2 {
      background-color: var(--primary-color);
    }

        
    .button {
      background-color: var(--accent-color);
      color: #fff;
    }

    .nav-link{
      font-size: 17px;
      font-weight: 600;
    }

</style>


<!-- MEDIA QUERY -->
 <style>
@media (max-width: 768px) {
  .sub-navbar .container {
    flex-direction: column;
    align-items: flex-start;
    gap: 4px;
  }

  .sub-navbar .contact-info,
  .sub-navbar .social-icons {
    width: 100%;
    text-align: left;
  }

  .sub-navbar .social-icons {
    margin-top: 4px;
  }

  .navbar .navbar-nav {
    text-align: center;
  }

  .navbar .navbar-nav .nav-link {
    padding: 0.5rem 1rem;
  }
}
 </style>



