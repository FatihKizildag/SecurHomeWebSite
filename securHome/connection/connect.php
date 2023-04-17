<?php
ob_start();
session_start();
try{
	$db=new PDO("mysql:host=localhost;dbname=securhome","root","");
	//echo "Bağlantı Başarılı";
}
catch(Exception $e){
	echo "Bir hata oluştu: ".$e->getMessage();
}

?>