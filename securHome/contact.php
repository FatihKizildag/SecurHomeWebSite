<?php
// Database connection information
$servername = "localhost"; // Database server name
$username = "root"; // Database user name
$password = ""; // Database password
$dbname = "securhome"; // Database name

// Connect Database
$conn = new mysqli($servername, $username, $password, $dbname);

// Check Connection
if ($conn->connect_error) {
    die("Could not connect to the database: " . $conn->connect_error);
}

// Form submit işlemi kontrolü
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Formdaki verileri al
  $name = $_POST['w3lName'];
  $email = $_POST['w3lSender'];
  $message = $_POST['w3lMessage'];

  // Verileri veritabanına ekle
  $sql = "INSERT INTO comment (name, email, message) VALUES ('$name', '$email', '$message')";
  if ($conn->query($sql) === TRUE) {
    echo '<script>alert("Datas saved successfully.");</script>';
  } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
  }
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <title>Secure Home |Contact</title>

    <link
      href="//fonts.googleapis.com/css?family=Spartan:400,500,600,700,900&display=swap"
      rel="stylesheet"
    />
    <link rel="icon" type="image/x-icon" href="assets/images/favicon.png" />

    
    <link rel="stylesheet" href="assets/css/style-starter.css" />
  </head>
  <body>
                                                      <!--header-->

    <header class="w3l-header-nav">
      
      <nav class="navbar navbar-expand-lg navbar-light fill px-lg-0 py-0 px-3">
        <div class="container">
          <a class="navbar-brand" href="index.php">
            <img
              src="assets/images/lg.png"
              alt="Your logo"
              style="height: 35px"
          /></a>

          <button
            class="navbar-toggler"
            type="button"
            data-toggle="collapse"
            data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item @@about__active">
                <a class="nav-link" href="index.php">Home</a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="contact.php">Contact</a>
              </li>
            </ul>
            <a href="signIn.php" class="ml-3 book btn btn-secondary btn-style"
              >Sign In</a
            >
          </div>
        </div>
      </nav>
      
    </header>
                                                  <!--header-->
<section class="w3l-breadcrumb">
    <div class="breadcrum-bg py-sm-5 py-4">
        <div class="container py-lg-3">
            <h2>Contact Us</h2>
            <p><a href="index.php">Home</a> &nbsp; / &nbsp; Contact</p>

        </div>
    </div>
</section>
<!-- contact1 -->
<section class="w3l-contact-1 py-5">
    <div class="contacts-9 py-lg-5 py-sm-4">
        <div class="container">
            <div class="d-grid contact-view">
                <div class="cont-details">
                    <p>Get in touch</p>
                    <h3 class="title-big">Contact and Access</h3>
                </div>
                <div class="map-content-9">
                    <p>You can reach us by mail or phone. If you have the opportunity, 
                      we can have face-to-face meetings by contacting us at our current address.</p>
                </div>
            </div>
            <div class="map-iframe my-5">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1341.4811261790023!2d30.64486473277679!3d36.
                89996893464868!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14c391d4afe6ac4b%3A0x8f9d88b2dd970272!2s
                Technopolis%20Antalya!5e0!3m2!1sen!2str!4v1681689184708!5m2!1sen!2str" width="100%" height="300" style="border:0;" 
                allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            <div class="d-grid contact-view">
                <div class="cont-details">
                    <div class="cont-top">
                        <div class="cont-left text-center">
                            <span class="fa fa-phone text-primary"></span>
                        </div>
                        <div class="cont-right">
                            <h6>Call Us</h6>
                            <p><a href="tel:+905555555555">+905555555555</a></p>
                        </div>
                    </div>
                    <div class="cont-top margin-up">
                        <div class="cont-left text-center">
                            <span class="fa fa-envelope-o text-primary"></span>
                        </div>
                        <div class="cont-right">
                            <h6>Email Us</h6>
                            <p><a href="mailto:securhome@gmail.com" class="mail">securhome@gmail.com</a></p>
                        </div>
                    </div>
                    <div class="cont-top margin-up">
                        <div class="cont-left text-center">
                            <span class="fa fa-map-marker text-primary"></span>
                        </div>
                        <div class="cont-right">
                            <h6>Address</h6>
                            <p>Akdeniz Ünivercity Antalya Teknokent</p>
                        </div>
                    </div>
                </div>
                <div class="map-content-9 mt-lg-0 mt-4">
                    <form class="form-horizontal" action="contact.php" method="post">
                        <div class="twice-two">
                            <input type="text" class="form-control" name="w3lName" name="name" placeholder="Name"
                                required="">
                            <input type="email" class="form-control" name="w3lSender" name="email" placeholder="Email"
                                required="">
                        </div>
                        <textarea name="w3lMessage" class="form-control" name="message" placeholder="Message"
                            required=""></textarea>
                        <button type="submit" class="btn btn-contact">Send Message</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /contact1 -->

<section class="w3l-logos py-5">
      <div class="container py-lg-3">
        <div class="row">
          <div class="col-lg-2 col-md-3 col-sm-4 col-6 logo-view">
            <img
              src="assets/images/logo1.jpg"
              alt="company-logo"
              class="img-fluid"
            />
          </div>
          <div class="col-lg-2 col-md-3 col-sm-4 col-6 logo-view">
            <img
              src="assets/images/logo2.jpg"
              alt="company-logo"
              class="img-fluid"
            />
          </div>
          <div class="col-lg-2 col-md-3 col-sm-4 col-6 logo-view mt-sm-0 mt-4">
            <img
              src="assets/images/logo3.jpg"
              alt="company-logo"
              class="img-fluid"
            />
          </div>
          <div class="col-lg-2 col-md-3 col-sm-4 col-6 logo-view mt-md-0 mt-4">
            <img
              src="assets/images/logo4.jpg"
              alt="company-logo"
              class="img-fluid"
            />
          </div>
          <div class="col-lg-2 col-md-3 col-sm-4 col-6 logo-view mt-lg-0 mt-4">
            <img
              src="assets/images/logo2.jpg"
              alt="company-logo"
              class="img-fluid"
            />
          </div>
          <div class="col-lg-2 col-md-3 col-sm-4 col-6 logo-view mt-lg-0 mt-4">
            <img
              src="assets/images/logo1.jpg"
              alt="company-logo"
              class="img-fluid"
            />
          </div>
        </div>
      </div>
    </section>
    <section class="w3l-footer-29-main">
      <div class="footer-29 py-5">
        <div class="container py-lg-4">
          <div class="row footer-top-29">
            <div class="col-lg-3 col-md-6 col-sm-8 footer-list-29 footer-1">
              <h6 class="footer-title-29">Contact Us</h6>
              <ul>
                <li>
                  <p>
                    <span class="fa fa-map-marker"></span> Akdeniz Ünivercity Antalya Teknokent
                  </p>
                </li>
                <li>
                  <a href="tel:+905555555555"
                    ><span class="fa fa-phone"></span> +905555555555</a
                  >
                </li>
                <li>
                  <a href="mailto:securhome@gmail.com" class="mail"
                    ><span class="fa fa-envelope-open-o"></span>
                    securhome@gmail.com</a
                  >
                </li>
              </ul>
            </div>
            <div
              class="col-lg-2 col-md-6 col-sm-4 footer-list-29 footer-2 mt-sm-0 mt-5"
            >
              <ul>
                <h6 class="footer-title-29">Useful Links</h6>
                <li><a href="index.php">Home</a></li>
                <li><a href="contact.php">Contact us</a></li>
              </ul>
            </div>
            
          </div>
        </div>
      </div>
    </section>

   
      <div class="container">
        <div class="row bottom-copies">
          <p class="col-lg-8 copy-footer-29">
            © 2023 Home Automation Systems. All rights reserved | Designed by
            SecurHome LTD. ŞTİ.
          </p>

          <div class="col-lg-4 main-social-footer-29">
            <a href="#facebook" class="facebook"
              ><span class="fa fa-facebook"></span
            ></a>
            <a href="#twitter" class="twitter"
              ><span class="fa fa-twitter"></span
            ></a>
            <a href="#instagram" class="instagram"
              ><span class="fa fa-instagram"></span
            ></a>
            <a href="#linkedin" class="linkedin"
              ><span class="fa fa-linkedin"></span
            ></a>
          </div>
        </div>
      </div>

      <!-- move top -->
      <button onclick="topFunction()" id="movetop" title="Go to top">
        &#10548;
      </button>
<script>
  // When the user scrolls down 20px from the top of the document, show the button
  window.onscroll = function () {
    scrollFunction()
  };

  function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
      document.getElementById("movetop").style.display = "block";
    } else {
      document.getElementById("movetop").style.display = "none";
    }
  }

  // When the user clicks on the button, scroll to the top of the document
  function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
  }
</script>
<!-- /move top -->
</section>

<!-- Template JavaScript -->
<script src="assets/js/jquery-3.3.1.min.js"></script>

<script src="assets/js/owl.carousel.js"></script>
<!-- script for banner slider-->
<script>
  $(document).ready(function () {
    $('.owl-one').owlCarousel({
      loop: true,
      margin: 0,
      nav: false,
      responsiveClass: true,
      autoplay: false,
      autoplayTimeout: 5000,
      autoplaySpeed: 1000,
      autoplayHoverPause: false,
      responsive: {
        0: {
          items: 1,
          nav: false
        },
        480: {
          items: 1,
          nav: false
        },
        667: {
          items: 1,
          nav: true
        },
        1000: {
          items: 1,
          nav: true
        }
      }
    })
  })
</script>
<!-- //script -->

<!-- script for owlcarousel -->
<script>
  $(document).ready(function () {
    $('.owl-testimonial').owlCarousel({
      loop: true,
      margin: 0,
      nav: true,
      responsiveClass: true,
      autoplay: false,
      autoplayTimeout: 5000,
      autoplaySpeed: 1000,
      autoplayHoverPause: false,
      responsive: {
        0: {
          items: 1,
          nav: false
        },
        480: {
          items: 1,
          nav: false
        },
        667: {
          items: 1,
          nav: true
        },
        1000: {
          items: 1,
          nav: true
        }
      }
    })
  })
</script>
<!-- //script for owlcarousel -->
<script src="assets/js/jquery.magnific-popup.min.js"></script>
<script>
  $(document).ready(function () {
    $('.popup-with-zoom-anim').magnificPopup({
      type: 'inline',

      fixedContentPos: false,
      fixedBgPos: true,

      overflowY: 'auto',

      closeBtnInside: true,
      preloader: false,

      midClick: true,
      removalDelay: 300,
      mainClass: 'my-mfp-zoom-in'
    });

    $('.popup-with-move-anim').magnificPopup({
      type: 'inline',

      fixedContentPos: false,
      fixedBgPos: true,

      overflowY: 'auto',

      closeBtnInside: true,
      preloader: false,

      midClick: true,
      removalDelay: 300,
      mainClass: 'my-mfp-slide-bottom'
    });
  });
</script>


<!-- disable body scroll which navbar is in active -->
<script>
$(function () {
  $('.navbar-toggler').click(function () {
    $('body').toggleClass('noscroll');
  })
});
</script>
<!-- disable body scroll which navbar is in active -->

<script src="assets/js/bootstrap.min.js"></script>

</body>

</html>