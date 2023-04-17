<?php 

if(isset($_POST["login_button"])){
    $mail=trim(htmlspecialchars($_POST["mail"]));
    $password=trim(htmlspecialchars($_POST["password"]));
    $usersor=$db->prepare("SELECT * FROM users WHERE mail=:mail and password=:password");
    $usergetir=$usersor->execute(array("mail" => $mail, "password" =>$password));
    $usergetir=$usersor->fetch(PDO::FETCH_ASSOC);
    $say=$usersor->rowCount();
    
    if($say){
        $_SESSION["user_mail"]=$usergetir["mail"];
        $_SESSION["user_power"]=$usergetir["power"];
        header("Location:../panel/index.php");
    }
    else{
        header("Location:../index.html?islem=no");
    }
    
}

?>