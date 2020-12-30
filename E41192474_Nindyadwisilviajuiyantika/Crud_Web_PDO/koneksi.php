<?php
$hostname = "localhost";
$db = "db_crud_web";
$user = "root";
$pw = "";

try{
	$koneksi = new PDO("mysql:host={$hostname};dbname={$db}", $user, $pw);
}
catch(PDOException $exception){
	echo "Periksa Koneksi Database:" . $exception->getMessage();
}?>