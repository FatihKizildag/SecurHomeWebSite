<?php
if ($_POST) { //post var mı diye bakıyoruz
    include("connection/vt.php"); //veri tabanına bağlanıyoruz

    //değişkenleri integer olarak alıyoruz
    $id = (int)$_POST['num'];
    $durum = (int)$_POST['enamle'];

    //Güncellme sorgumuzu yazıyoruz
    $sorgu = $baglanti->query("UPDATE lights SET enables=$durum WHERE  num=$id");

    
}


