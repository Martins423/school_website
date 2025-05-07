<?php 
  session_start();
  if (!isset($_SESSION["user"])) {
    header("Location: student-login.php");
  }
?>

<?php 
include "includes/dbcon.php";
include "includes/header.php";
include "includes/student-nav.php";

?>
  <style>
    @media (max-width: 768px) {
      #sidebar-wrapper {
        width: 100%;
        /* max-width: 100%; */
      }

      .general-content{
        width: 100%;
        margin: 0 auto;
        /* margin-left: 24px; */
      }

       #page-content-wrapper {
        padding: 1rem;
      }

       .card {
        margin-bottom: 1rem;
      }

      .row.mt-4 {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        
      }

      .row{
        max-width: 1200px;
       
      }

      .col-md-3 {
        flex: 0  0 100%;
        width: 100%;
        
      }
      
    } 
  </style>



<?php 
  $apiKey = '8f6a42a39755457c889b87103e62eb90';
  $url = 'https://newsapi.org/v2/everything?q=tesla&from=2025-04-02&sortBy=publishedAt&apiKey=' . $apiKey;

  // Initialize CURL 
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, $url);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

  // excute request
  $response = curl_exec($ch);
  curl_close($ch);

  // Decode JSON response
  $data = json_decode($response, true);
  $articles = isset($data['articles']) && is_array($data['articles']) ? $data['articles'] : [];
 
  ?>


<div class="general-content" style="width: 93%;">
  <div class="row">
    <div class="col-md-3 col-lg-2 bg-light min-vh-50" id="sidebar-wrapper">
      <?php include "student-sidebar.php"; ?>
    </div>

    <div class="col-md-9 col-lg-10 p-4" id="page-content-wrapper">
      <h1 class="text-center">Welcome to your Dashboard, <b><strong><?php echo $_SESSION['student_name']; ?>!</strong></b></h1>
      <hr>
      <div class="row mt-4">
        <div class="col-md-3">
          <div class="card bg-primary text-white">
            <div class="card-body">
              <h1 class="card-title">Student ID</h1>
              <h2 class="card-text" style="font-size: large;"><b><?php echo $_SESSION['student_id']; ?></b></h2>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card bg-success text-white">
            <div class="card-body">
              <h1 class="card-title">Registered Email</h1>
              <h4 class="card-text" style="font-size: large;"><b><?php echo $_SESSION['student_email']; ?></b></h4>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card bg-warning text-white">
            <div class="card-body">
              <h1 class="card-title">Registered Course</h1>
              <h4 class="card-text" style="font-size: large;"><b><?php echo $_SESSION['student_course']; ?></b></h4>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card bg-dark text-white">
            <div class="card-body">
              <h1 class="card-title">Phone Number</h1>
              <h4 class="card-text" style="font-size: large;"><b><?php echo $_SESSION['student_phone']; ?></b></h4>
            </div>
          </div>
        </div>
      </div>

      
    <!-- DISPLAY RESULTS WITH BOOSTRAP -->

        
        <div class="container my-4">
           <h3 class="mb-4">Latest Education News</h3>
            
           <div class="row">
              <!-- News Item 1 -->
               <div class="col-md-4 mb-4">
                 <div class="card h-100">
                   <img src="image/bg-img-3.jpg" alt="">
                   <div class="card-body">
                       <h5 class="card-title">Web Development Deadline Announced</h5>
                      <p class="card-text">Web Development Examination Council  has announced the final deadline for 2025 registration...</p>
                      <a href="#" class="btn btn-sm btn-success">Read More</a>
                   </div>
                 </div>
               </div>

                <!-- News Item 2 -->
                <div class="col-md-4 mb-4">
                 <div class="card h-100">
                   <img src="image/lec-2.jpg" alt="">
                   <div class="card-body">
                       <h5 class="card-title">The School Introduces New Tech Courses..</h5>
                      <p class="card-text">We have introduced new undergradute program in AI and Data Science</p>
                      <a href="#" class="btn btn-sm btn-success">Read More</a>
                   </div>
                 </div>
               </div>

                <!-- News Item 3 -->
                <div class="col-md-4 mb-4">
                 <div class="card h-100">
                   <img src="image/bg-img-4.jpg" alt="">
                   <div class="card-body">
                       <h5 class="card-title">Top Scholarships for Nigerian Students in 2025..</h5>
                      <p class="card-text">Explore fully funded and partial scholarship available for Nigerian undergradutes this year...</p>
                      <a href="#" class="btn btn-sm btn-success">Read More</a>
                   </div>
                 </div>
               </div>

           </div>
        </div>

    </div>
  </div>    
</div>


  


<style>
  body {
    font-family: Arial, Helvetica, sans-serif;
  }

  .card-text h2{
    font-weight: 30px;
  }

  /* #wrapper {
    display: flex;
  } */

  /* #sidebar-wrapper{
    width: 250px;
    height: 90vh;
  } */
/* 
  #page-cotent-wrapper{
    flex: 1;
  } */

  .list a {
    text-decoration: none;
    color: green;
    /* margin-bottom: 20px; */
  }

  .list li {
    text-align: center;
    margin-bottom: 20px;
   
  }

  
  .list li:hover {
    color: #007bff;
    font-weight: bold;
    transition: 0.3s;
  }

  #sidebar-wrapper img {
    margin: auto;
    display: block;
  }
</style>