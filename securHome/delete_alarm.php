<?php
include "./connection/connect.php";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $alarmID = $_POST["alarmID"];

    $deleteQuery = $db->prepare("DELETE FROM alarms WHERE alarmID = :alarmID");
    $deleteQuery->bindParam(":alarmID", $alarmID);

    if ($deleteQuery->execute()) {
        header("Location: adminAlarms.php");
        exit();
    } else {
        echo "Alarm silinirken bir hata oluştu.";
    }
}
?>
