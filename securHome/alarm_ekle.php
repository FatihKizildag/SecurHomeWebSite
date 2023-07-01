<?php
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

// Değerleri al
$id = 1;
$userName = "can";
$error = "door";
$status = "on";

// Sorguyu oluştur
$sql = "INSERT INTO alarms (id,username,error, stat)
        VALUES ('$id', '$userName', '$error', '$status')";

// Sorguyu çalıştır ve sonucu kontrol et
if ($conn->query($sql) === TRUE) {
    echo "Yeni kayıt başarıyla eklendi.";
} else {
    echo "Hata: " . $sql . "<br>" . $conn->error;
}

// Veritabanı bağlantısını kapat
$conn->close();
?>
