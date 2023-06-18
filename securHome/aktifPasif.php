<?php
if ($_POST) { //post var mı diye bakıyoruz
    include("connection/vt.php"); //veri tabanına bağlanıyoruz

    //değişkenleri integer olarak alıyoruz
    $id = (int)$_POST['id'];
    $durum = (int)$_POST['durum'];

    //Güncellme sorgumuzu yazıyoruz
    $sorgu = $baglanti->query("UPDATE doors SET aktif=$durum WHERE  id=$id");

   
}
?>
