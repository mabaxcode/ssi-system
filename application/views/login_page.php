<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>School Stationeries Inventory System</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link rel="shortcut icon" href="<?=base_url()?>assets/logo/my-logo.png" />

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?=base_url()?>assets-m/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?=base_url()?>assets-m/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="<?=base_url()?>assets-m/vendor/aos/aos.css" rel="stylesheet">
  <link href="<?=base_url()?>assets-m/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="<?=base_url()?>assets-m/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="<?=base_url()?>assets-m/css/main.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Eterna
  * Template URL: https://bootstrapmade.com/eterna-free-multipurpose-bootstrap-template/
  * Updated: Aug 07 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="contact-page">

  <header id="header" class="header sticky-top">

    <div class="topbar d-flex align-items-center dark-background">
      <div class="container d-flex justify-content-center justify-content-md-between">
        <div class="contact-info d-flex align-items-center">
          <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:contact@example.com">thegloryschool@info.com</a></i>
          <i class="bi bi-phone d-flex align-items-center ms-4"><span>+0328272687</span></i>
        </div>
        <div class="social-links d-none d-md-flex align-items-center">
          <a href="#" class="twitter"><i class="bi bi-twitter-x"></i></a>
          <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
          <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
          <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
        </div>
      </div>
    </div><!-- End Top Bar -->

    <div class="branding">

      <div class="container position-relative d-flex align-items-center justify-content-between">
        <a href="<?=base_url()?>" class="logo d-flex align-items-center">
          <!-- Uncomment the line below if you also wish to use an image logo -->
          <!-- <img src="<?=base_url()?>assets-m/img/logo.png" alt=""> -->
          <h5 class="sitename">School Stationeries Inventory System<br></h5>
        </a>

        <nav id="navmenu" class="navmenu">
          <ul>
            <li><a href="<?=base_url()?>" class="active">Home</a></li>
            <!-- <li><a href="about.html">Inventory</a></li> -->
            <!-- <li><a href="services.html">Services</a></li>
            <li><a href="portfolio.html">Portfolio</a></li>
            <li><a href="team.html">Team</a></li>
            <li><a href="pricing.html">Pricing</a></li>
            <li><a href="blog.html">Blog</a></li> -->
            <?/*
            <li class="dropdown"><a href="#"><span>Dropdown</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
              <ul>
                <li><a href="#">Dropdown 1</a></li>
                <li class="dropdown"><a href="#"><span>Deep Dropdown</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                  <ul>
                    <li><a href="#">Deep Dropdown 1</a></li>
                    <li><a href="#">Deep Dropdown 2</a></li>
                    <li><a href="#">Deep Dropdown 3</a></li>
                    <li><a href="#">Deep Dropdown 4</a></li>
                    <li><a href="#">Deep Dropdown 5</a></li>
                  </ul>
                </li>
                <li><a href="#">Dropdown 2</a></li>
                <li><a href="#">Dropdown 3</a></li>
                <li><a href="#">Dropdown 4</a></li>
              </ul>
            </li>
            */?>
            <li><a href="<?=base_url('main/register_page')?>">Register</a></li>
            <li><a href="<?=base_url('main/login_page')?>">Login</a></li>
          </ul>
          <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>

      </div>

    </div>

  </header>

  <main class="main">

    <!-- Page Title -->
    <div class="page-title" data-aos="fade">
      <div class="container">
        <nav class="breadcrumbs">
          <ol>
            <li><a href="<?=base_url()?>">Home</a></li>
            <li class="current">Login</li>
          </ol>
        </nav>
        <h1>Login</h1>
      </div>
    </div><!-- End Page Title -->

    <!-- Contact Section -->
    <section id="contact" class="contact section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

      

        <div class="row gy-4 mt-2">
          <center><h2><div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">Login to our system</div></h2></center>
        <center>
          <div class="col-lg-6">
            <!-- <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="400"> -->
              <form action="<?=base_url('main/loginProcess')?>" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="500">
              
              <div class="row gy-4">

                <div class="col-md-12" style="text-align: left;">
                  <label>Email</label>
                  <input type="text" name="email" class="form-control" placeholder="" required="">
                </div>


                <div class="col-md-12" style="text-align:left;">
                  <label>Password</label>
                  <input type="password" class="form-control" name="password" placeholder="" required="">
                </div>


                <div class="col-md-12 text-center">
                  <div class="loading">Loading</div>
                  <!-- <div class="error-message"></div> -->
                  <!-- <div class="sent-message">Your message has been sent. Thank you!</div> -->
                  <? if($this->session->flashdata('error')){ ?>
                  <div class="error-message d-block">
                      <?=$this->session->flashdata('error')?>
                  </div>
                  <? } ?>

                  <button type="submit">Login</button>
                </div>

              </div>
            </form>
          </div><!-- End Contact Form -->
        </center>
        </div>

      </div>

    </section><!-- /Contact Section -->

  </main>

 <footer id="footer" class="footer position-relative dark-background">

    

    <div class="container footer-top">
      <div class="row gy-4">
        <div class="col-lg-4 col-md-6 footer-about">
          <a href="#" class="d-flex align-items-center">
            <span class="sitename">School Stationeries Inventory System</span>
          </a>
          <div class="footer-contact pt-3">
            <p>A108 Adam Street</p>
            <p>New York, NY 535022</p>
            <p class="mt-3"><strong>Phone:</strong> <span>+1 5589 55488 55</span></p>
            <p><strong>Email:</strong> <span>info@example.com</span></p>
          </div>
        </div>
<!-- 
        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Useful Links</h4>
          <ul>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Home</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#">About us</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Services</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Terms of service</a></li>
          </ul>
        </div> -->

        <!-- <div class="col-lg-2 col-md-3 footer-links">
          <h4>Our Services</h4>
          <ul>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Web Design</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Web Development</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Product Management</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Marketing</a></li>
          </ul>
        </div> -->
<!-- 
        <div class="col-lg-4 col-md-12">
          <h4>Follow Us</h4>
          <p>Cras fermentum odio eu feugiat lide par naso tierra videa magna derita valies</p>
          <div class="social-links d-flex">
            <a href=""><i class="bi bi-twitter-x"></i></a>
            <a href=""><i class="bi bi-facebook"></i></a>
            <a href=""><i class="bi bi-instagram"></i></a>
            <a href=""><i class="bi bi-linkedin"></i></a>
          </div>
        </div> -->

      </div>
    </div>

    <div class="container copyright text-center mt-4">
      <p>© <span>Copyright</span> <strong class="px-1 sitename">School Stationeries Inventory System</strong> <span>All Rights Reserved</span></p>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you've purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
        <!-- Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a> -->
      </div>
    </div>

  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="<?=base_url()?>assets-m/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?=base_url()?>assets-m/vendor/php-email-form/validate.js"></script>
  <script src="<?=base_url()?>assets-m/vendor/aos/aos.js"></script>
  <script src="<?=base_url()?>assets-m/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="<?=base_url()?>assets-m/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="<?=base_url()?>assets-m/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="<?=base_url()?>assets-m/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="<?=base_url()?>assets-m/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="<?=base_url()?>assets-m/vendor/isotope-layout/isotope.pkgd.min.js"></script>

  <!-- Main JS File -->
  <script src="<?=base_url()?>assets-m/js/main.js"></script>

</body>

</html>