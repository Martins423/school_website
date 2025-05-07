
<?php
 include 'includes/header.php';
?>
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
      <ul class="navbar-nav mx-auto mb-2 mb-lg-0" style="gap: 15px;" >
        <li class="nav-item ">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about.php">About Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="student.php">Student</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contact.php">Contact Us</a>
        </li>
      </ul>

      <!-- Right-aligned items -->
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="student-logout.php">Logout</a>
        </li>
      </ul>
    </div>
  </div>
</nav>


<!--  STYLE FOR MAIN NAV-BAR */-->
<style>   
    .navbar-2 {
      background-color: var(--primary-color);
    }

        
    .button {
      background-color: var(--accent-color);
      color: #fff;
    }

  @media (max-width:768px) {
    .navbar .navbar-nav {
    text-align: center;
  }

  .navbar .navbar-nav .nav-link {
    padding: 0.5rem 1rem;
  }
  }  
  
</style>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
