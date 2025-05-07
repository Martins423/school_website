
<footer class="text-white text-center pt-5 pb-3">
  <div class="container">
      <div class="row">
         <!-- Logo & Description -->
          <div class="col-md-3 mb-4">
             <h6>
              <img src="image/school-icon-removebg-preview.png" alt="Academics Logo" class="img-fluid mb-2" style="height: 30px;width:30px;">  ACADEMICS
             </h6>
             <p class="small">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
             </p>
             <div class="social-icons">
                <a href="#" class="text-white me-2"><i class="fa-brands fa-facebook"></i></a>
                <a href="#" class="text-white me-2"><i class="fa-brands fa-twitter"></i></a>
                <a href="#" class="text-white me-2"><i class="fa-brands fa-instagram"></i></a>
                <a href="#" class="text-white"><i class="fa-brands fa-linkedin-in"></i></a>
             </div>
          </div>

          <!-- Featured Links -->
          <div class="col-md-3 mb-4 footer-links">
             <h6>Featured Links</h6>
             <ul class="list-unstyled small">
                <li><a href="index.php" class="text-white">Home</a></li>
                <li><a href="about-us.php.php" class="text-white">About Us</a></li>
                <li><a href="courses.php" class="text-white">Courses</a></li>
                <li><a href="student.php" class="text-white">Student</a></li>
                <li><a href="contact.php" class="text-white">Contact Us</a></li>
                <li><a href="FAQ.php" class="text-white">FAQ</a></li>
             </ul>
      </div>

          <!-- Contact & Newsletter -->
           <div class="col-md-3 mb-4 contact-info">
            <h6>Information</h6>
            <p class="small"><i class="fa-solid fa-phone-alt"></i>  +234 7689040495</p>
            <p class="small"><i class="fa-solid fa-envelope"></i>   info@ourschool.com</p>
            <h6 class="mt-4">Newsletter</h6>
            <form class="newsletter-form d-flex">
                <input type="email" class="form-control me-2" placeholder="Enter your email" aria-label="Email">
                <button class="btn btn-warning ms-2"><i class="fa-solid fa-paper-plane"></i></button>
            </form>
           </div>

           <!-- Flickr photos -->
            <div class="col-md-3 mb-4">
               <h6>Student Gallery</h6>
                <div class="row">
                    <div class="col-4">
                      <img src="image/footer-pic-1.jpg" alt="Gallery Image" class="img-fluid mb-2">
                    </div>
                    <div class="col-4">
                      <img src="image/footer-pic-2.jpg" alt="Gallery Image" class="img-fluid mb-2">
                    </div>
                    <div class="col-4">
                      <img src="image/footer-pic-3.jpg" alt="Gallery Image" class="img-fluid mb-2">
                    </div>
                    <div class="col-4">
                      <img src="image/footer-pic-4.jpg" alt="Gallery Image" class="img-fluid mb-2">
                    </div>
                    <div class="col-4">
                      <img src="image/footer-pic-5.jpg" alt="Gallery Image" class="img-fluid mb-2">
                    </div>
                    <div class="col-4">
                      <img src="image/footer-pic-6.jpg" alt="Gallery Image" class="img-fluid mb-2">
                    </div>
                 </div>
              </div>

              <!-- Bottom Bar -->
               <div class="d-flex justify-content-between align-items-center border-top pt-3  small">
                  <p class="mb-0">© 2023 Your School. All rights reserved. Designed by <a href="#" class="text-warning">MARTINELLI</a> </p>
                  <div class="payment-icons">
                    <img src="image/paypal.png" alt="#" height="60px" width="60px" style="object-fit: cover;">
                    <img src="image/visa-png.jpg" alt="" height="60px" width="60px" style="object-fit: cover;">
                    <img src="image/master-card.webp" alt="" height="60px" width="60px" style="object-fit: cover;">
                    
                  </div>
               </div>
      </div>
  </div>
</footer>

<style>
  footer{
    background-color: #333333;
    color: white;
  }

  footer a{
    /* color: #ddd; */
    text-decoration: none;
  }

  .footer-links a:hover{
    color: #FF9800;
  }

  .contact-info i{
    font-size: 15px;
    
  }

  .contact-info i:hover{
    color: #FF9800;
  }

  .social-icons a{
    font-size: 16px;
    color: white;
    margin-right: 10px;
  }

  .newsletter-form input{
    border-radius: 0;
    border: none;
  }

  .newsletter-form button{
    border-radius: 0;
  }

  .payment-icons img{
    margin-left: 10px;
  }
</style>

<style>
  @media (max-width: 992px) {
    footer .row > div {
     margin-bottom: 30px;
     text-align: center;
    }
    .newsletter-form {
      flex-direction: column;
      align-items: center;
    }
    .newsletter-form input{
      width: 100%;
      margin-bottom: 10px;
    }
    .newsletter-form button{
      width: 100%;
    }
    .social-icons{
      justify-content: center;
      display: flex;
      flex-wrap: wrap;
    }

    .payment-icons{
      margin-top: 15px;

    }

    .payment-icons img{
      margin-left: 5px;
      margin-right: 5px;
    }
  }

  @media (max-width: 576px) {
    footer{
      padding-left:15px;
      padding-right: 15px;
    }
  
    .payment-icons{
      align-items: center;
      flex-direction: column;
    }

    .payment-icons img{
     margin-bottom: 5px;
    }
  }
</style>

