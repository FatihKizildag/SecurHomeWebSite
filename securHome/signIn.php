<?php
// DataBase Connection
$servername = "localhost"; // DataBase server name
$username = "root"; // DataBase user name
$password = ""; // DataBase password
$dbname = "securhome"; // DataBase name

$conn = new mysqli($servername, $username, "", $dbname); // Create database connection

// Check the connection
if ($conn->connect_error) {
    die("Could not connect to the database: " . $conn->connect_error);
}

// Check the user login form
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $mail = $_POST["mail"];
    $user_password = $_POST["password"]; // We have assigned the password in the user login here
    $remember_me = isset($_POST["remember_me"]) ? true : false;

    // Check the username and password in the database
    $sql = "SELECT * FROM users WHERE mail = '$mail' AND password ='$user_password'"; // SQL query
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        if ($mail == "admin@admin" && $user_password == "admin") { // We have checked the private mail and password here, thanks to the mail required for admin login, it is redirected to the private page
            if ($remember_me) {
                setcookie("user", $mail, time() + (86400 * 30), "/"); // set cookies for 30 days
            } else {
                setcookie("user", $mail, 0, "/"); // Set cookies only during this session
            }
            // Login is successful, redirect the user
            header("Location: AdminAlarms.php"); 
            exit;
        } else {
            // Standard login is successful, redirect the user
            header("Location: services.php"); 
            exit;
        }
    } else {
        $hata = "Unvalid mail or password";
    }
} else {
    $hata = ""; // Form submit edilmediğinde hata mesajını boş olarak başlat
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

    <title>Secure Home | Sign In</title>

    <link
      href="//fonts.googleapis.com/css?family=Spartan:400,500,600,700,900&display=swap"
      rel="stylesheet"
    />
    <link rel="icon" type="image/x-icon" href="assets/images/favicon.png" />

    
    <link rel="stylesheet" href="assets/css/style-starter.css" />
  </head>
  <body>
    <!-- header-->
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
              <li class="nav-item @@about__active">
                <a class="nav-link" href="about.php">About</a>
              </li>
              
              <li class="nav-item @@contact__active">
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
    
    <div class="card card-info">
      <div class="card-header">
        <h3 class="card-title">Sing In</h3>
      </div>
      <!-- labels-->
      <form class="form-horizontal" method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
        <div class="card-body">
          <div class="form-group row">
            <label for="mail" class="col-sm-2 col-form-label"
              >Email</label
            >
            <div class="col-sm-10">
              <input
                type="email"
                class="form-control"
                name="mail"
                placeholder="Email"
              />
            </div>
          </div>

          <div class="form-group row">
            <label for="password" class="col-sm-2 col-form-label"
              >Password</label
            >
            <div class="col-sm-10">
              <input
                type="password"
                class="form-control"
                name="password"
                placeholder="Password"
              />
            </div>
          </div>
        

          <div class="form-group mb-0">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" name="remember_me" class="custom-control-input" id="remember_me">
                      <label class="custom-control-label" for="remember_me" >Remember me</label>
                    </div>
                  </div>
        </div>
        
        <div class="card-footer">
          <button type="submit" class="btn btn-info">Sign In</button>
          <button type="submit" class="btn btn-outline-secondary" formaction="singUp.php">
            Sing Up
          </button>
        </div>
       
      </form>
      <?php if (isset($hata)) echo $hata; ?>
    </div>
  </body>
</html>
<?php
// Veritabanı bağlantısını kapat
$conn->close();
?>