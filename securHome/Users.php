<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <title>Secure Home | Home</title>

    <link
      href="//fonts.googleapis.com/css?family=Spartan:400,500,600,700,900&display=swap"
      rel="stylesheet"
    />
    <link rel="icon" type="image/x-icon" href="assets/images/favicon.png" />

    <!-- Template CSS -->
    <link rel="stylesheet" href="assets/css/style-starter.css" />
  </head>
  <body>
    
                                                  <!--header-->
    <header class="w3l-header-nav">
      <!--/nav-->
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
              <li class="nav-item @@contact__active">
                <a class="nav-link" href="AdminAlarms.php">Alarms</a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="Users.php">Users</a>
              </li>
              <li class="nav-item @@contact__active">
                <a class="nav-link" href="messages.php">Messages</a>
              </li>
            </ul>
            <a href="#" class="ml-3 book btn btn-secondary btn-style"
              >Admin</a
            >
          </div>
        </div>
      </nav>
    </header>
                                                  <!--header-->
    
    <section>
      

      <div>
      <div class="col-12">
                        <div class="bg-light rounded h-100 p-4">
                            <h6 class="mb-4">Responsive Table</h6>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">User ID</th>

                                            <th scope="col">First Name</th>
                                            <th scope="col">Last Name</th>
                                            <th scope="col">Email</th>
                                            <th scope="col">Country</th>
                                            
                                            <th scope="col">Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>US-7</td>
                                            <td>John</td>
                                            <td>Doe</td>
                                            <td>jhon@email.com</td>
                                            <td>USA</td>
                                            
                                            <td><p style="color: yellowgreen;">Member</p></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">2</th>
                                            <td>US-9</td>
                                            <td>Mark</td>
                                            <td>Otto</td>
                                            <td>mark@email.com</td>
                                            <td>UK</td>
                                           
                                            <td><p style="color: yellowgreen;">Member</p></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">3</th>
                                            <td>US-2</td>
                                            <td>Jacob</td>
                                            <td>Thornton</td>
                                            <td>jacob@email.com</td>
                                            <td>AU</td>
                                            
                                            <td><p style="color: red;">Deleted Account</p></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
      </div>
      <div class="btn-toolbar" role="toolbar" style="position:relative;margin: auto;" >
                                <div class="btn-group me-2" role="group" aria-label="First group">
                                    <button type="button" class="btn btn-primary">1</button>
                                    <button type="button" class="btn btn-primary">2</button>
                                    <button type="button" class="btn btn-primary">3</button>
                                    <button type="button" class="btn btn-primary">4</button>
                                    <button type="button" class="btn btn-primary">5</button>
                                    <button type="button" class="btn btn-primary">6</button>
                                    <button type="button" class="btn btn-primary">7</button>
                                    <button type="button" class="btn btn-primary">8</button>
                                
                            </div>
      </div>


    
      


      
    </section>

    






















     
    

    <section class="w3l-footer-29-main w3l-copyright">
      <div class="container">
        <div class="row bottom-copies">
          <p class="col-lg-8 copy-footer-29">
          © 2023 Home Automation Systems. All rights reserved | Designed by
            SecurHome LTD. ŞTİ.
          </p>

          <div class="col-lg-4 main-social-footer-29">
            <a href="http://www.facebook.com" class="facebook"
              ><span class="fa fa-facebook"></span
            ></a>
            <a href="http://www.twitter.com" class="twitter"
              ><span class="fa fa-twitter"></span
            ></a>
            <a href="http://www.instagram.com" class="instagram"
              ><span class="fa fa-instagram"></span
            ></a>
            <a href="http://www.linkedin.com" class="linkedin"
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
          scrollFunction();
        };

        function scrollFunction() {
          if (
            document.body.scrollTop > 20 ||
            document.documentElement.scrollTop > 20
          ) {
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
        $(".owl-one").owlCarousel({
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
              nav: false,
            },
            480: {
              items: 1,
              nav: false,
            },
            667: {
              items: 1,
              nav: true,
            },
            1000: {
              items: 1,
              nav: true,
            },
          },
        });
      });
    </script>
    <!-- //script -->

    <!-- script for owlcarousel -->
    <script>
      $(document).ready(function () {
        $(".owl-testimonial").owlCarousel({
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
              nav: false,
            },
            480: {
              items: 1,
              nav: false,
            },
            667: {
              items: 1,
              nav: true,
            },
            1000: {
              items: 1,
              nav: true,
            },
          },
        });
      });
    </script>
    <!-- //script for owlcarousel -->
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <script>
      $(document).ready(function () {
        $(".popup-with-zoom-anim").magnificPopup({
          type: "inline",

          fixedContentPos: false,
          fixedBgPos: true,

          overflowY: "auto",

          closeBtnInside: true,
          preloader: false,

          midClick: true,
          removalDelay: 300,
          mainClass: "my-mfp-zoom-in",
        });

        $(".popup-with-move-anim").magnificPopup({
          type: "inline",

          fixedContentPos: false,
          fixedBgPos: true,

          overflowY: "auto",

          closeBtnInside: true,
          preloader: false,

          midClick: true,
          removalDelay: 300,
          mainClass: "my-mfp-slide-bottom",
        });
      });
    </script>

    <!-- disable body scroll which navbar is in active -->
    <script>
      $(function () {
        $(".navbar-toggler").click(function () {
          $("body").toggleClass("noscroll");
        });
      });
    </script>
    <!-- disable body scroll which navbar is in active -->

    <script src="assets/js/bootstrap.min.js"></script>
  </body>
</html>
