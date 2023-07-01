<?php

$pdo = new PDO("mysql:host=localhost;dbname=securhome", "root", ""); // Veritabanı bağlantısı için gerekli olan PDO nesnesini oluşturunuz

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $alarmID = $_POST['alarmID'];

    // alarms tablosunda ilgili alarmın status değerini "solved" olarak güncelle
    $updateStatus = $pdo->prepare("UPDATE alarms SET status = 'solved' WHERE alarmID = :alarmID");
    $updateStatus->bindParam(':alarmID', $alarmID);
    $updateStatus->execute();

    // İşlem tamamlandıktan sonra yönlendirme yapabilirsiniz
    header('Location: adminAlarms.php');
    exit();
}
?>
