<?php
include "./connection/connect.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $userId = $_POST['user_id'];

  // Kullanıcıyı veritabanından silmek için gerekli sorguyu çalıştır
  $deleteUser = $db->prepare("DELETE FROM users WHERE id = :user_id");
  $deleteUser->bindParam(':user_id', $userId);
  $deleteUser->execute();

  // Kullanıcı silindiğinde SweetAlert ile bildirim göster
  $response = array(
    'status' => 'success',
    'message' => 'User has been successfully deleted!'
  );
  echo json_encode($response);
  exit;
}
