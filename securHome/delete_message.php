<?php
include "./connection/connect.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $messageID = $_POST["messageID"];

    $deleteQuery = $db->prepare("DELETE FROM comment WHERE messageID = :messageID");
    $deleteQuery->bindParam(":messageID", $messageID);

    if ($deleteQuery->execute()) {
        header("Location: messages.php");
        exit();
    } else {
        echo "Mesaj silinirken bir hata oluştu.";
    }
}
?>
