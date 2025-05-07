<?php 
include "includes/header.php";
include "includes/nav.php";
?>

<section class="student-section">
  <div class="container">
   <div class="row mt-3">
     <div class="col-md-9">
      <small class="text-center text-dark">
        <h3>Some of Our Sucessful Student</h3>
      </small><hr>
      <table class="table table-bordered table-striped padding-3">
          <thead class="thead-dark">
                <tr>
                  <th>Id</th>
                  <th>Student Name</th>
                  <th>Batch</th>
                  <th>Image</th>
                </tr>
          </thead>
          <tbody>
                <tr>
                  <td>1</td>
                  <td>John Doe</td>
                  <td>Batch 2023</td>
                  <td><img src="image/student-1.jpg" alt="Student Image" class="img-fluid" style="width: 100px; height:100px; object-fit:cover;"></td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>Jane Smith</td>
                  <td>Batch 2023</td>
                  <td><img src="image/student-2.jpg" alt="Student Image" class="img-fluid" style="width: 100px; height: 100px; object-fit:cover;" ></td>
                </tr>
                
                <tr>
                  <td>3</td>
                  <td>Jane Smith</td>
                  <td>Batch 2023</td>
                  <td><img src="image/lec-3.jpg" alt="Student Image" class="img-fluid" style="width: 100px; height: 100px; object-fit:cover;"></td>
                </tr>
               
                <tr>
                  <td>4</td>
                  <td>Jane Smith</td>
                  <td>Batch 2023</td>
                  <td><img src="image/student-4.jpg" alt="Student Image" class="img-fluid" style="width: 100px; height: 100px;object-fit:cover;"></td>
                </tr>
                <tr>
                  <td>5</td>
                  <td>Jane Smith</td>
                  <td>Batch 2023</td>
                  <td><img src="image/footer-pic-4.jpg" alt="Student Image" class="img-fluid" style="width: 100px; height: 100px;object-fit:cover;"></td>
                </tr>
          </tbody>
      </table>
   </div>
   
   <div class="col-md-3">
      <div class="card bg-warning text-white">
         <div class="card-body">
           <h4 class="card-title text-center">Parents Review</h4>
           <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem sit error ad nam veniam necessitatibus debitis maiores alias voluptas officiis.</p>
         </div>
      </div><br>
      <img src="image/lec-2.jpg" alt="" class="img-fluid">
   </div>
   </div>
  </div> 
</section>

<?php  
include "includes/footer.php";
?> 