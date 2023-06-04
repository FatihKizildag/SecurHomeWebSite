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

// Get the posted data from the HTML form
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["name_surname"]) && isset($_POST["mail"]) && isset($_POST["password"]) && isset($_POST["phone"])) {
        $name_surname = filter_var($_POST["name_surname"], FILTER_SANITIZE_STRING);
        $mail = filter_var($_POST["mail"], FILTER_SANITIZE_EMAIL);
        $password = $_POST["password"];
        $phone = filter_var($_POST["phone"], FILTER_SANITIZE_NUMBER_INT);

        // Check whether the user with the same phone number exists in the database using the prepared statement
        $stmt = $conn->prepare("SELECT id FROM users WHERE phone = ?");
        $stmt->bind_param("s", $phone);
        $stmt->execute();
        $stmt->store_result();
        
        if ($_POST["password"] !== $_POST["confirm_password"]) {
          echo "Passwords do not match.";
          exit; // Hata mesajını gösterdikten sonra işlemi sonlandır
      }
        // If there is a user registered with the same phone number, show an error message
        if ($stmt->num_rows > 0) {
            echo '<script>alert("There is a previously registered user with this phone number.");</script>';
        } else {
            // If there is no registered user with the same phone number October, add the new user to the database
            $stmt = $conn->prepare("INSERT INTO users (name_surname, mail, password, phone) VALUES (?, ? , ? , ?)");
            $stmt->bind_param("ssss", $name_surname, $mail, $password, $phone);

            // Running a SQL query
            if ($stmt->execute() === TRUE) {
               echo '<script>alert("The user was added successfully.");</script>';
            } else {
                echo "Error: " . $stmt->error;
            }

            $stmt->close();
        }
    } else {
        echo '<script>alert("Sending incorrect or incomplete data.");</script>';
    }
}
// Close the database connection
$conn->close();
?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <title>Secure Home | Sign Up</title>

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
            <h3 class="card-title">Sing Up</h3>
          </div> 
        <form class="form-horizontal" action="singUp.php" method="post">
          <div class="card-body">
            <div class="form-group row">
              <label for="name_surname" class="col-sm-2 col-form-label"
                >Full name</label>
                <div class="col-sm-10">
                  <input
                    type="text" 
                    class="form-control" 
                    name="name_surname" 
                    placeholder="Full name"
                  />
                </div>
          </div>

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
                required
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

          <div class="form-group row">
            <label for="password" class="col-sm-2 col-form-label"
              >Retype password</label>
              <div class="col-sm-10">
                  <input type="password" 
                  class="form-control" 
                  name="confirm_password"
                  placeholder="Retype password"/>
              </div>
          </div>

          <div class="form-group row">
            <label for="phone" class="col-sm-2 col-form-label"
              >Phone</label
            >
            <div class="col-sm-10">
            <input type="text" 
            class="form-control" 
            placeholder="Phone" 
            name="phone"
            required/>
              
            </div>
          </div>

          <div class="form-group mb-0">
                      <div class="custom-control custom-checkbox">
                        <input type="checkbox" name="terms" class="custom-control-input" id="agreeTerms" required>
                        <label class="custom-control-label" for="agreeTerms" >I agree to the <a href="#">terms</a></label>
                      </div>
                      
                      <a href="signIn.php" class="text-left" >I already have a membership</a>
          </div>

          <div class="social-auth-links text-center">
            <button type="submit" class="btn btn-secondary">Register</button>
          </div>

          
          
        </form>
      </div>
      
    
  </body>
</html>