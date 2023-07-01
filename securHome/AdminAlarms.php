<?php 
include "delete_alarm.php";
include "update_status.php";


$pdo = new PDO("mysql:host=localhost;dbname=securhome", "root", ""); // Veritabanı bağlantısı için gerekli olan PDO nesnesini oluşturunuz

$alarmsAsk = $pdo->prepare("SELECT * FROM alarms");
$alarmsAsk->execute();

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <title>Secure Home | Alarms</title>

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
              <li class="nav-item active">
                <a class="nav-link" href="AdminAlarms.php">Alarms</a>
              </li>
              <li class="nav-item @@about__active">
                <a class="nav-link" href="users.php">Users</a>
              </li>
              <li class="nav-item @@contact__active">
                <a class="nav-link" href="messages.php">Messages</a>
              </li>
            </ul>
            <a href="index.php" class="ml-3 book btn btn-secondary btn-style">Log Out</a>
            
          </div>
        </div>
      </nav>
    </header>
                                                  <!--header-->
    
    <section>
      

      <div>
      <div class="col-12">
                        <div class="bg-light rounded h-100 p-4">
                            <h4 class="mb-4"><b>Alarms History</b></h4>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">Alarm ID</th>
                                            <th scope="col">User ID</th>
                                            <th scope="col">Name Surname</th>
                                            <th scope="col">Error</th>
                                            <th scope="col">Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                          <?php
                                            while ($alarmsGet = $alarmsAsk->fetch(PDO::FETCH_ASSOC)) {
                                                $userID = $alarmsGet['userID'];

                                                // users tablosundan name_surname değerini al
                                                $userAsk = $pdo->prepare("SELECT name_surname FROM users WHERE id = :userID");
                                                $userAsk->bindParam(':userID', $userID);
                                                $userAsk->execute();
                                                $userGet = $userAsk->fetch(PDO::FETCH_ASSOC);
                                                $nameSurname = $userGet['name_surname'];

                                                ?>
                                                <tr>
                                                    <th scope="row"><?php echo $alarmsGet['alarmID'] ?></th>
                                                    <td>User-<?php echo $userID ?></td>
                                                    <td><?php echo $nameSurname ?></td>
                                                    <td><?php echo $alarmsGet['error'] ?></td>
                                                    <td>
                                                        <?php if ($alarmsGet['status'] == 'solved') { ?>
                                                            <button class="btn btn-success" disabled>Solved</button>
                                                            <?php if ($alarmsGet['status'] == 'solved') { ?>
                                                                <form action="delete_alarm.php" method="POST" style="display: inline;">
                                                                    <input type="hidden" name="alarmID" value="<?php echo $alarmsGet['alarmID']; ?>">
                                                                    <button type="submit" class="btn btn-secondary">Delete</button>
                                                                </form>
                                                            <?php } ?>
                                                        <?php } else { ?>
                                                            <form action="update_status.php" method="POST" style="display: inline;">
                                                                <input type="hidden" name="alarmID" value="<?php echo $alarmsGet['alarmID']; ?>">
                                                                <button type="submit" class="btn btn-danger">Alarm</button>
                                                            </form>
                                                        <?php } ?>
                                                    </td>
                                                </tr>
                                                <?php
                                            }
                                          ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <button onclick="topFunction()" id="movetop" title="Go to top">
        &#10548;
      </button>
    </section>

    


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
