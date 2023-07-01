<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <link rel="icon" type="image/x-icon" href="assets/images/favicon.png" />
    <link
      href="//fonts.googleapis.com/css?family=Spartan:400,500,600,700,900&display=swap"
      rel="stylesheet"
    />
    
    <script src="assets/js/jquery.min.js"></script>
    <title>Secure Home | Services</title>
    <link href="assets/css/switch.css" rel="stylesheet"/>
    <link rel="stylesheet" href="assets/css/style-starter.css" />
    <link rel="stylesheet" href="assets/css/form.css">
</head>


<body>
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

    <section  class="w3l-servicesblock1" id="service" >
        <div class="features-with-17_sur py-5">
            <div class="container py-lg-5 py-sm-4" >
                <div class="features-with-17-top_sur">
                    <div class="row">
                        
                        <div style="margin-bottom: 20px;" class="col-lg-4 col-md-6 mt-md-0 mt-4">

                            <div class="features-with-17-right-tp_sur">
                                <div class="features-with-17-left1">
                                    <span class="fa fa-lock" aria-hidden="true"></span>                               
                                   

                                    <button id="alarmButton" style="margin-top: 0px; margin-left: 160px;" class="btn btn-info next">Alarm</button>
                                    <button style="margin-top: -10px; margin-left: 200px;" class="btn btn-info next" onclick="openForm()">Add</button>

                                    <div id="alarmForm" style="display: none;">
  <form id="myForm">


    <label for="type">Door Type:</label>
    <input type="text" id="type" name="type" required><br><br>

    <label for="who">On - Off</label>
    <input type="text" id="who" placeholder="enter 1 or 0" name="who"><br><br>

    <input type="submit" value="Submit">
  </form>
</div>
<script>
  function openForm() {
    document.getElementById("alarmForm").style.display = "block";
  }

  // Form gönderildiğinde
  document.getElementById("myForm").addEventListener("submit", function(event) {
    // Formu sıfırlamadan önce submit olayını engellemek için bir süre bekleyin
    event.preventDefault();

    // Form verilerini alın
    var type = document.getElementById("type").value;
    var who = document.getElementById("who").value;

    // Type alanının boş olup olmadığını kontrol edin
    if (type.trim() === "") {
      alert("cannot be empty");
      return; // Formun gönderimini durdurun
    }

    // AJAX ile sunucuya verileri gönderin
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        console.log(this.responseText); // Yanıtı konsola yazdırabilir veya başka bir işlem yapabilirsiniz

        // Formu sıfırlayın
        document.getElementById("myForm").reset();

        // Sayfayı yeniden yükleyin
        location.reload();
      }
    };
    xhttp.open("POST", "addDoor.php", true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send("&type=" + type + "&who=" + who);
  });
</script>
<div id="alarmForm" style="display: none;">
  <form id="myForm">


    <label for="type">Door Type:</label>
    <input type="text" id="type" name="type" required><br><br>

    <label for="who">On - Off</label>
    <input type="text" id="who" placeholder="enter 1 or 0" name="who"><br><br>

    <input type="submit" value="Submit">
  </form>
</div>
<script>
  function openForm() {
    document.getElementById("alarmForm").style.display = "block";
  }

  // Form gönderildiğinde
  document.getElementById("myForm").addEventListener("submit", function(event) {
    // Formu sıfırlamadan önce submit olayını engellemek için bir süre bekleyin
    event.preventDefault();

    // Form verilerini alın
    var type = document.getElementById("type").value;
    var who = document.getElementById("who").value;

    // Type alanının boş olup olmadığını kontrol edin
    if (type.trim() === "") {
      alert("Door Type cannot be empty");
      return; // Formun gönderimini durdurun
    }

    // AJAX ile sunucuya verileri gönderin
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        console.log(this.responseText); // Yanıtı konsola yazdırabilir veya başka bir işlem yapabilirsiniz

        // Formu sıfırlayın
        document.getElementById("myForm").reset();

        // Sayfayı yeniden yükleyin
        location.reload();
      }
    };
    xhttp.open("POST", "addDoor.php", true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send("&type=" + type + "&who=" + who);
  });
</script>



  <script>
    function openForm() {
      document.getElementById("alarmForm").style.display = "block";
    }
  </script>



                                    


                                </div>



                                <div class="features-with-17-left2">
                                    <h5>Doors Locks</h5>
                                    <div style="margin: 0px auto;width: 337px; ">

                                        <div class="col-md-4">
                                            <table class="table">
                                                <tbody>
                                                    <tr>
                                                        <th>Door ID</th>
                                                        <th>Type</th>
                                                        <th>Situation</th>
                                                    </tr>
                                                    <?php
                                                        include("connection/vt.php"); //veri tabanına bağlanıyoruz

                                                        //verileri çekiyoruz
                                                        $sorgu = $baglanti->query("select * from doors");

                                                        //verileri yazıyoruz
                                                        while ($sonuc = $sorgu->fetch_assoc()) {?>
                                                            <tr>
                                                                <td><?php echo $sonuc['doorID'] ?></td>
                                                                <td><?php echo $sonuc['baslik'] ?></td>
                
                                                                <td>
                                                                    <label class="switch">
                                                                        <input type="checkbox" id='<?php echo $sonuc['doorID'] ?>' class="aktifPasif" <?php echo $sonuc['aktif']==1?'checked':'' ?>  />
                                                                        <span class="slider round"></span>
                                                                    </label>
                                                                </td>

                                                            </tr>
                                                    <?php } ?>
                                                
                                                </tbody>
                                            
                                            </table>
                                    
                                        </div>
                                        </div>
                                    </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 mt-lg-0 mt-sm-5 mt-4">
                            <div class="features-with-17-right-tp_sur">
                                <div class="features-with-17-left1">
                                    <span class="fa fa-thermometer" aria-hidden="true"></span>
                                    <button id="alarmButtonair" style="margin-top: 0px; margin-left: 150px;" class="btn btn-info next">Alarm</button>
                                </div>
                                <div class="features-with-17-left2">
                                    <h5>Air Conditioning </h5>
                                    
                                    
                                    <h6 style="text-align: center;margin-bottom: 10px;"><input type="number" id="number" value="35"/> &#8451</h6>
                                    <label style="margin-left: 130px;">
                                        <div  class="value-button" id="decrease" onclick="decreaseValue()" value="Decrease Value"><span class="fa fa-minus" aria-hidden="true"></span></div>
                                        <div  class="value-button" id="increase" onclick="increaseValue()" value="Increase Value"><span class="fa fa-plus" aria-hidden="true"></span></div>
                                     </label>

                                     <table class="table">
                                                    <tbody>
                                                    <tr>
                                                        <th>Mod ID</th>
                                                        <th>Mod</th>
                                                        <th>Action</th>
                                                        <th>Mod</th>
                                                    </tr>
                                                    <?php
                                                        include("connection/vt.php"); //veri tabanına bağlanıyoruz

                                                        //verileri çekiyoruz
                                                        $sorgu = $baglanti->query("select * from airconditioning");

                                                        //verileri yazıyoruz
                                                        while ($sonuc = $sorgu->fetch_assoc()) {?>
                                                            <tr>
                                                                <td><?php echo $sonuc['acID'] ?></td>
                                                                <td><?php echo $sonuc['baslik'] ?></td>
                
                                                                <td>
                                                                    <label class="switch">
                                                                        <input type="checkbox" id='<?php echo $sonuc['acID'] ?>' class="aktifPasifsss" <?php echo $sonuc['aktif']==1?'checked':'' ?>  />
                                                                        <span class="slider"></span>
                                                                    </label>
                                                                </td>
                                                                <td><?php echo $sonuc['modes'] ?></td>

                                                            </tr>
                                                    <?php } ?>
                                                
                                                </tbody>
                                            
                                            </table>   
                              </div>
                            </div>
                        </div>







                        <div style="margin-bottom: 20px;" class="col-lg-4 col-md-6 mt-md-0 mt-4">

                            <div class="features-with-17-right-tp_sur">
                                <div class="features-with-17-left1">
                                    <span class="fa fa-lightbulb-o" aria-hidden="true"></span>
                                    <button id="alarmButtonlight" style="margin-top: 0px; margin-left: 150px;" class="btn btn-info next">Alarm</button>
                                </div>
                        

                                <div class="features-with-17-left2">
                                    <h5>Lights</h5>
                                    <div style="margin: 0px auto;width: 337px; ">

                                        <div class="col-md-4">
                                            <table class="table">
                                                <tbody>
                                                    <tr>
                                                        <th>Lights ID</th>
                                                        <th>Type</th>
                                                        <th>Situation</th>
                                                    </tr>
                                                    <?php
                                                        include("connection/vt.php"); //veri tabanına bağlanıyoruz

                                                        //verileri çekiyoruz
                                                        $sorgu = $baglanti->query("select * from lights");

                                                        //verileri yazıyoruz
                                                        while ($sonuc = $sorgu->fetch_assoc()) {?>
                                                            <tr>
                                                                <td><?php echo $sonuc['lightID'] ?></td>
                                                                <td><?php echo $sonuc['baslik'] ?></td>
                
                                                                <td>
                                                                    <label class="switch">
                                                                        <input type="checkbox" id='<?php echo $sonuc['lightID'] ?>' class="aktifPasifss" <?php echo $sonuc['aktif']==1?'checked':'' ?>  />
                                                                        <span class="slider round"></span>
                                                                    </label>
                                                                </td>

                                                            </tr>
                                                    <?php } ?>
                                                
                                                </tbody>
                                            
                                            </table>
                                    
                                        </div>
                                        </div>
                                    </div>
                            </div>
                        </div>


                        <div style="margin-bottom: 20px;" class="col-lg-4 col-md-6 mt-md-0 mt-4">
                    <div class="features-with-17-right-tp_sur">
                        <div class="features-with-17-left1">
                            <span class="fa fa-television" aria-hidden="true"></span>
                            <button id="alarmButtoncam" style="margin-top: 0px; margin-left: 150px;" class="btn btn-info next">Alarm</button>
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
                            <button id="alarmBdddutton" style="margin-top: 0px; margin-left: 150px;" class="btn btn-info next">Alarm</button>
                        </div>
                        <div class="features-with-17-left2">
                            <h5>Music Box</h5>
                            <div style="margin: 0px auto;width: 337px; ">
                            
                              <div style="float:left;margin:10px;">
                                
                                <div style="margin: 0px auto;width: 337px; ">
                              
                                  <div style="float:left;margin:10px;">
                                    <p>Off - On</p>
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

    </section>

</form>
<!-- js dosyamızı sona ekliyoruz -->



<script>
$(document).ready(function () {
    $('.aktifPasif').click(function (event) {
        var id = $(this).attr("id");  //id değerini alıyoruz

        var durum = ($(this).is(':checked')) ? '1' : '0';
        //checkbox a göre aktif mi pasif mi bilgisini alıyoruz.

        $.ajax({
            type: 'POST',
            url: 'aktifPasif.php',  //işlem yaptığımız sayfayı belirtiyoruz
            data: { id:id, durum: durum }, //datamızı yolluyoruz
            success: function (result) {
                $('#sonuc').text(result);
                //gelen sonucu h2 tagında gösteriyoruz
            },
            error: function () {
                alert('Hata');
            }
        });
    });
});



$(document).ready(function () {
    $('.aktifPasifsss').click(function (event) {
        var id = $(this).attr("id");  //id değerini alıyoruz

        var durum = ($(this).is(':checked')) ? '1' : '0';
        //checkbox a göre aktif mi pasif mi bilgisini alıyoruz.

        $.ajax({
            type: 'POST',
            url: 'aktifPasifAir.php',  //işlem yaptığımız sayfayı belirtiyoruz
            data: { id:id, durum: durum }, //datamızı yolluyoruz
            success: function (result) {
                $('#sonuc').text(result);
                //gelen sonucu h2 tagında gösteriyoruz
            },
            error: function () {
                alert('Hata');
            }
        });
    });
});

    
$(document).ready(function () {
    $('.aktifPasifss').click(function (event) {
        var id = $(this).attr("id");  //id değerini alıyoruz

        var durum = ($(this).is(':checked')) ? '1' : '0';
        //checkbox a göre aktif mi pasif mi bilgisini alıyoruz.

        $.ajax({
            type: 'POST',
            url: 'aktifPasiflight.php',  //işlem yaptığımız sayfayı belirtiyoruz
            data: { id:id, durum: durum }, //datamızı yolluyoruz
            success: function (result) {
                $('#sonuc').text(result);
                //gelen sonucu h2 tagında gösteriyoruz
            },
            error: function () {
                alert('Hata');
            }
        });
    });
});

</script>

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
<script src="assets/js/jquery.min.js"></script>

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
<script>
        $(document).ready(function() {
            // Butona tıklanma olayını dinle
            $('#alarmButtonlight').click(function() {
                // AJAX isteği gönder
                $.ajax({
                    type: 'POST',
                    url: 'alarm_eklelight.php',
                    success: function(response) {
                        console.log(response); // Yanıtı konsola yazdır (isteğe bağlı)
                        alert('Alarm added.');
                    },
                    error: function(xhr, status, error) {
                        console.log(xhr.responseText); // Hata mesajını konsola yazdır (isteğe bağlı)
                        alert('Alarm ekleme sırasında bir hata oluştu.');
                    }
                });
            });
            $('#alarmButton').click(function() {
                // AJAX isteği gönder
                $.ajax({
                    type: 'POST',
                    url: 'alarm_ekle.php',
                    success: function(response) {
                        console.log(response); // Yanıtı konsola yazdır (isteğe bağlı)
                        alert('Alarm added.');
                    },
                    error: function(xhr, status, error) {
                        console.log(xhr.responseText); // Hata mesajını konsola yazdır (isteğe bağlı)
                        alert('Alarm ekleme sırasında bir hata oluştu.');
                    }
                });
            });
            $('#alarmButtonair').click(function() {
                // AJAX isteği gönder
                $.ajax({
                    type: 'POST',
                    url: 'alarm_ekleair.php',
                    success: function(response) {
                        console.log(response); // Yanıtı konsola yazdır (isteğe bağlı)
                        alert('Alarm added.');
                    },
                    error: function(xhr, status, error) {
                        console.log(xhr.responseText); // Hata mesajını konsola yazdır (isteğe bağlı)
                        alert('Alarm ekleme sırasında bir hata oluştu.');
                    }
                });
            });
            $('#alarmButtoncam').click(function() {
                // AJAX isteği gönder
                $.ajax({
                    type: 'POST',
                    url: 'alarm_eklecameras.php',
                    success: function(response) {
                        console.log(response); // Yanıtı konsola yazdır (isteğe bağlı)
                        alert('Alarm added.');
                    },
                    error: function(xhr, status, error) {
                        console.log(xhr.responseText); // Hata mesajını konsola yazdır (isteğe bağlı)
                        alert('Alarm ekleme sırasında bir hata oluştu.');
                    }
                });
            });
        });
    </script>
    <script>
  function showForm() {
    var form = document.getElementById("myForm");
    form.style.display = "block";
  }
</script>


</body>
</html>
