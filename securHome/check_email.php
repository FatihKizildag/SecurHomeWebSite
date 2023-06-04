<?php
include "./connection/connect.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $userId = $_POST['user_id'];

  // E-posta adresini sorgula
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
  } else {
    // E-posta adresi kontrolü başarılı ise
    $response = array(
      'status' => 'success',
      'message' => 'Email check successful.'
    );
  }

  echo json_encode($response);
  exit;
}
?>
