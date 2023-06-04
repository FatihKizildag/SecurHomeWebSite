<?php 
include "./connection/connect.php";

$userAsk=$db->prepare("SELECT * FROM users ORDER BY id ASC");
$userAsk->execute();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $userId = $_POST['user_id'];
  
  // E-posta adresi kontrolü yap
  $checkEmail = $db->prepare("SELECT mail FROM users WHERE id = :user_id");
  $checkEmail->bindParam(':user_id', $userId);
  $checkEmail->execute();
  $userEmail = $checkEmail->fetch(PDO::FETCH_ASSOC)['mail'];

  if ($userEmail === 'admin@admin') {
    // E-posta adresi "admin@admin" ise kullanıcıyı silemezsiniz uyarısı gönder
    $response = array(
      'status' => 'error',
      'message' => 'You cannot delete this user.'
    );
    echo json_encode($response);
    exit;
  }

  // Kullanıcıyı veritabanından silmek için gerekli sorguyu çalıştır
  $deleteUser = $db->prepare("DELETE FROM users WHERE id = :user_id");
  $deleteUser->bindParam(':user_id', $userId);
  $deleteUser->execute();
  
  // Kullanıcı silindikten sonra kullanıcıları listeleyen sayfaya yönlendir
  $response = array(
    'status' => 'success',
    'message' => 'User has been successfully deleted!'
  );
  echo json_encode($response);
  exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

  <title>Secure Home | Users</title>

  <link href="//fonts.googleapis.com/css?family=Spartan:400,500,600,700,900&display=swap" rel="stylesheet" />
  <link rel="icon" type="image/x-icon" href="assets/images/favicon.png" />

  <!-- Template CSS -->
  <link rel="stylesheet" href="assets/css/style-starter.css" />
  <style>
    /* Stil örnekleri */
    h1 {
      color: #333;
    }
    .table-container {
      background-color: #f8f9fa;
      padding: 20px;
    }
    .btn-delete {
      color: #fff;
      background-color: #dc3545;
      border-color: #dc3545;
    }
    .btn-delete:hover {
      color: #fff;
      background-color: #c82333;
      border-color: #bd2130;
    }
  </style>
</head>
<body>
  <!--header-->
  <header class="w3l-header-nav">
    <!--/nav-->
    <nav class="navbar navbar-expand-lg navbar-light fill px-lg-0 py-0 px-3">
      <div class="container">
        <a class="navbar-brand" href="index.php">
          <img src="assets/images/lg.png" alt="Your logo" style="height: 35px" />
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
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
          <a href="index.php" class="ml-3 book btn btn-secondary btn-style">Log Out</a>
        </div>
      </div>
    </nav>
  </header>
  <!--header-->

  <section>
    <div class="container py-5">
      <h1 class="mb-4">Users</h1>
      <div class="table-container">
        <div class="table-responsive">
          <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">User ID</th>
                <th scope="col">Name Surname</th>
                <th scope="col">Email</th>
                <th scope="col">Phone</th>
                <th scope="col">Actions</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $counter = 1;
              while ($userGet = $userAsk->fetch(PDO::FETCH_ASSOC)) {
                ?>
                <tr>
                  <th scope="row"><?php echo $counter; ?></th>
                  <td><?php echo $userGet['id'] ?></td>
                  <td><?php echo $userGet['name_surname'] ?></td>
                  <td><?php echo $userGet['mail'] ?></td>
                  <td><?php echo $userGet['phone'] ?></td>
                  <td>
                    <button class="btn btn-danger btn-sm btn-delete" onclick="deleteUser(<?php echo $userGet['id']; ?>)">
                      Delete
                    </button>
                  </td>
                </tr>
                <?php $counter++;
              } ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </section>

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

  <script>
    // Kullanıcıyı silmek için AJAX isteği gönderen fonksiyon
    function deleteUser(userId) {
      Swal.fire({
        title: 'Are you sure?',
        text: "Are you sure you want to delete this user?",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'I am sure!',
        cancelButtonText: 'Cancel'
      }).then((result) => {
        if (result.isConfirmed) {
          // AJAX isteği gönder
          $.ajax({
            url: 'users.php',
            type: 'POST',
            data: { user_id: userId },
            dataType: 'json',
            success: function (response) {
              if (response.status === 'success') {
                Swal.fire({
                  title: 'Succesful',
                  text: response.message,
                  icon: 'success'
                }).then(() => {
                  // Kullanıcılar sayfasını yeniden yükle
                  location.reload();
                });
              }
            },
            error: function () {
              Swal.fire({
                title: 'Error',
                text: 'An error occurred, please try again.',
                icon: 'error'
              });
            }
          });
        }
      });
    }
  </script>
  <script>
  // Kullanıcıyı silmek için AJAX isteği gönderen fonksiyon
  function deleteUser(userId) {
    // E-posta adresini kontrol etmek için AJAX isteği gönder
    $.ajax({
      url: 'check_email.php', // E-posta kontrolü yapacak ayrı bir PHP dosyası
      type: 'POST',
      data: { user_id: userId },
      dataType: 'json',
      success: function (response) {
        if (response.status === 'success') {
          // E-posta adresi kontrolü başarılı ise kullanıcıyı silme işlemine devam et
          Swal.fire({
            title: 'Are you sure?',
            text: "Are you sure you want to delete this user?",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'I am sure!',
            cancelButtonText: 'Cancel'
          }).then((result) => {
            if (result.isConfirmed) {
              // AJAX isteği gönder
              $.ajax({
                url: 'users.php',
                type: 'POST',
                data: { user_id: userId },
                dataType: 'json',
                success: function (response) {
                  if (response.status === 'success') {
                    Swal.fire({
                      title: 'Successful',
                      text: response.message,
                      icon: 'success'
                    }).then(() => {
                      // Kullanıcılar sayfasını yeniden yükle
                      location.reload();
                    });
                  }
                },
                error: function () {
                  Swal.fire({
                    title: 'Error',
                    text: 'An error occurred, please try again.',
                    icon: 'error'
                  });
                }
              });
            }
          });
        } else if (response.status === 'error') {
          // E-posta adresi "admin@admin" ise uyarı mesajı göster
          Swal.fire({
            title: 'Warning',
            text: response.message,
            icon: 'warning'
          });
        }
      },
      error: function () {
        Swal.fire({
          title: 'Error',
          text: 'An error occurred, please try again.',
          icon: 'error'
        });
      }
    });
  }
</script>

  <!-- Template JavaScript -->
  <script src="assets/js/bootstrap.min.js"></script>
</body>
</html>
