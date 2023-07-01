<?php
// Formdan gelen değerleri alın
$id = $_POST['id'];
$type = $_POST['type'];
$who = $_POST['who'];

// Veritabanı bağlantısı
$servername = "localhost"; // Veritabanı sunucusunun adı
$username = "root"; // Veritabanı kullanıcı adı
$password = ""; // Veritabanı parolası
$dbname = "securhome"; // Veritabanı adı

$conn = new mysqli($servername, $username, $password, $dbname);

// Bağlantıyı kontrol etme
if ($conn->connect_error) {
    die("Veritabanı bağlantısı başarısız: " . $conn->connect_error);
}

// Veriyi veritabanına ekleme
$sql = "INSERT INTO doors ( baslik, aktif) VALUES ( '$type', '$who')";

if ($conn->query($sql) === TRUE) {
    echo "Veri başarıyla eklendi.";
} else {
    echo "Veri eklenirken hata oluştu: " . $conn->error;
}

// Veritabanı bağlantısını kapatma
$conn->close();
?>
