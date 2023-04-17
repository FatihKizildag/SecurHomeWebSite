<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <style>
      
      
      
      .switch {
        position: relative;
        display: inline-block;
        width: 60px;
        height: 34px;
      }
      
      .switch input { 
        opacity: 0;
        width: 0;
        height: 0;
      }
      
      .slider {
        position: absolute;
        cursor: pointer;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-color: #ccc;
        -webkit-transition: .4s;
        transition: .4s;
      }
      
      .slider:before {
        position: absolute;
        content: "";
        height: 26px;
        width: 26px;
        left: 4px;
        bottom: 4px;
        background-color: white;
        -webkit-transition: .4s;
        transition: .4s;
      }
      
      input:checked + .slider {
        background-color: #2196F3;
      }
      
      input:focus + .slider {
        box-shadow: 0 0 1px #2196F3;
      }
      
      input:checked + .slider:before {
        -webkit-transform: translateX(26px);
        -ms-transform: translateX(26px);
        transform: translateX(26px);
      }
      
      /* Rounded sliders */
      .slider.round {
        border-radius: 34px;
      }
      
      .slider.round:before {
        border-radius: 50%;
      }
    </style>

    <title>Secure Home | Services</title>

    <link
      href="//fonts.googleapis.com/css?family=Spartan:400,500,600,700,900&display=swap"
      rel="stylesheet"
    />
    <link rel="icon" type="image/x-icon" href="assets/images/favicon.png" />

    <!-- Template CSS -->
    <link rel="stylesheet" href="assets/css/style-starter.css" />
  </head>
  <body>
    <!--w3l-header-->

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
              <li class="nav-item @@services__active">
                <a class="nav-link" href="index.php">Home</a>
              </li>
              <li class="nav-item @@about__active">
                <a class="nav-link" href="about.php">About</a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="services.php">Services</a>
              </li>
              <li class="nav-item @@contact__active">
                <a class="nav-link" href="contact.php">Contact</a>
              </li>
            </ul>
            <a href="#" class="ml-3 book btn btn-secondary btn-style"
              >User#</a
            >
          </div>
        </div>
      </nav>
      <!--//nav-->
    </header>
  <section class="w3l-breadcrumb">
    <div class="breadcrum-bg py-sm-5 py-4">
        <div class="container py-lg-3">

            <h2>Our Services</h2>
            <p><a href="index.php">Home</a> &nbsp; / &nbsp; Services</p>

        </div>
    </div>
  </section>
  <!--  services section -->
  <section class="w3l-servicesblock1" id="service">
    <div class="features-with-17_sur py-5">
        <div class="container py-lg-5 py-sm-4">
            <div class="features-with-17-top_sur">
                <div class="row">
                    
                  <div style="margin-bottom: 20px;" class="col-lg-4 col-md-6 mt-md-0 mt-4">
                        <div class="features-with-17-right-tp_sur">
                            <div class="features-with-17-left1">
                                <span class="fa fa-lock" aria-hidden="true"></span>
                            </div>
                            <div class="features-with-17-left2">
                                <h5>Doors Locks</h5>
                                <div style="margin: 0px auto;width: 337px; ">
                                
                                  <div style="float:left;margin:10px;">
                                    <p>Garden</p>
                                  <label class="switch">
                                    <input type="checkbox">
                                    <span class="slider"></span>
                                  </label>
                                  </div>
                                  <div style="float:left;margin: 10px;">
                                    <p>Bedroom</p>
                                  <label class="switch">
                                    <input type="checkbox">
                                    <span class="slider"></span>
                                  </label>
                                  </div>
                                  <div style="float:left;margin: 10px;">
                                    <p>Garage</p>
                                  <label class="switch">
                                    <input type="checkbox">
                                    <span class="slider"></span>
                                  </label>
                                  </div>
                                  <div style="float:left;margin: 10px;">
                                    <p>Gate</p>
                                  <label class="switch">
                                    <input type="checkbox">
                                    <span class="slider"></span>
                                  </label>
                                  </div>
                                  <div style="float:left;margin: 10px;">
                                    <p>Back Yard</p>
                                  <label class="switch">
                                    <input type="checkbox">
                                    <span class="slider"></span>
                                  </label>
                                  </div>
                                </div> 
                            </div>
                        </div>
                  </div>

                  <div class="col-lg-4 col-md-6 mt-lg-0 mt-sm-5 mt-4">
                        <div class="features-with-17-right-tp_sur">
                            <div class="features-with-17-left1">
                                <span class="fa fa-thermometer" aria-hidden="true"></span>
                            </div>
                            <div class="features-with-17-left2">
                                <h5>Air Conditioning </h5>
                                <h6 style="text-align: center;margin-bottom: 10px;"><input type="number" id="number" value="35"/> &#8451</h6>
                                <label class="switch">
                                  <input type="checkbox" checked>
                                  <span class="slider round"></span>
                                </label>
                                <label style="margin-left: 55px;">
                                  <div  class="value-button" id="decrease" onclick="decreaseValue()" value="Decrease Value"><span class="fa fa-minus" aria-hidden="true"></span></div>
                                  <div  class="value-button" id="increase" onclick="increaseValue()" value="Increase Value"><span class="fa fa-plus" aria-hidden="true"></span></div>
                                </label>
                              
                                
                                
                            </div>
                        </div>
                  </div>

                  <div class="col-lg-4 col-md-6 mt-md-0 mt-4">
                      <div class="features-with-17-right-tp_sur">
                          <div class="features-with-17-left1">
                              <span class="fa fa-lightbulb-o  " aria-hidden="true"></span>
                          </div>
                          <div class="features-with-17-left2">
                              <h5>Lights</h5>
                              <div style="margin: 0px auto;width: 337px; ">
                              
                                <div style="float:left;margin:10px;">
                                  <p>Bedroom</p>
                                  <label class="switch">
                                    <input type="checkbox" checked>
                                    <span class="slider round"></span>
                                  </label>
                                </div>
                                <div style="float:left;margin: 10px;">
                                  <p>Kitchen</p>
                                  <label class="switch">
                                    <input type="checkbox" checked>
                                    <span class="slider round"></span>
                                  </label>
                                </div>
                                <div style="float:left;margin: 10px;">
                                  <p>Balcony</p>
                                  <label class="switch">
                                    <input type="checkbox" checked>
                                    <span class="slider round"></span>
                                  </label>
                                </div>
                                <div style="float:left;margin: 10px;">
                                  <p>Roof</p>
                                  <label class="switch">
                                    <input type="checkbox" checked>
                                    <span class="slider round"></span>
                                  </label>
                                </div>
                                <div style="float:left;margin: 10px;">
                                  <p>Corridor </p>
                                  <label class="switch">
                                    <input type="checkbox" checked>
                                    <span class="slider round"></span>
                                  </label>
                                </div>
                              </div> 
                          </div>
                      </div>
                  </div>




                  <div style="margin-bottom: 20px;" class="col-lg-4 col-md-6 mt-md-0 mt-4">
                    <div class="features-with-17-right-tp_sur">
                        <div class="features-with-17-left1">
                            <span class="fa fa-television" aria-hidden="true"></span>
                        </div>
                        <div class="features-with-17-left2">
                            <h5>Cameras</h5>
                            
                            
                              <div style="float:left;margin:10px;">
                                <p>POWER</p>
                                <label class="switch">
                                  <input type="checkbox" checked>
                                  <span class="slider round"></span>
                                </label>
                              </div>
                              <div class="custom-select" style="width:200px;color:peru; ">
                                <select>
                                  <option value="0">Select Camera:</option>
                                  <option value="1">ROOM 1</option>
                                  <option value="2">ROOM 2</option>
                                  <option value="3">ROOM 3</option>
                                  <option value="4">ROOM 4 </option>
                                  <option value="5">ROOM 5 </option>

                                </select>
                              </div>

                              <button style="margin-top: 10px;margin-left: 60px;" class="btn btn-info next">Wacht</button>
                              
                              </div>
                              
                        </div>
                  </div>

                  <div class="col-lg-4 col-md-6 mt-md-0 mt-4">
                    <div class="features-with-17-right-tp_sur">
                        <div class="features-with-17-left1">
                            <span class="fa fa-music  " aria-hidden="true"></span>
                        </div>
                        <div class="features-with-17-left2">
                            <h5>Music Box</h5>
                            <div style="margin: 0px auto;width: 337px; ">
                            
                              <div style="float:left;margin:10px;">
                                
                                <div style="margin: 0px auto;width: 337px; ">
                              
                                  <div style="float:left;margin:10px;">
                                    <p>Bluetooth</p>
                                    <label class="switch">
                                      <input type="checkbox" checked>
                                      <span class="slider round"></span>
                                    </label>
                                  </div>
                                  <div style="float:left;margin: 10px;">
                                    <p>Mute</p>
                                    <label class="switch">
                                      <input type="checkbox" checked>
                                      <span class="slider round"></span>
                                    </label>
                                  </div>
                                  
                                  
                                </div>
                                <audio controls autoplay>
                                  <source src="assets/Music/music.mp3" type="audio/mpeg">
                                   
                                </audio>
                              </div>
                              
                              
                            </div> 
                        </div>
                    </div>
                </div>  
                </div>
            </div>
        </div>
            
    </div>
  </section>


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
                <li><a href="index.html">Home</a></li>
                <li><a href="about.html">About System</a></li>
                <li><a href="contact.html">Contact us</a></li>
              </ul>
            </div>
            
            <div
              class="col-lg-4 col-md-6 col-sm-7 footer-list-29 footer-4 mt-lg-0 mt-5"
            >
              <h6 class="footer-title-29">Contact Us</h6>
              <p>
                Enter your email and let mail all the details of the system. We'll
                never share your email address.
              </p>

              <form action="#" class="subscribe" method="post">
                <input
                  type="email"
                  name="email"
                  placeholder="Your Email Address"
                  required=""
                />
                <button><span class="fa fa-envelope-o"></span></button>
              </form>
            </div>
          </div>
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
<script>
  function increaseValue() {
  var value = parseInt(document.getElementById('number').value, 10);
  value = isNaN(value) ? 0 : value;
  value++;
  document.getElementById('number').value = value;
}

function decreaseValue() {
  var value = parseInt(document.getElementById('number').value, 10);
  value = isNaN(value) ? 0 : value;
  value < 1 ? value = 1 : '';
  value--;
  document.getElementById('number').value = value;
}
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