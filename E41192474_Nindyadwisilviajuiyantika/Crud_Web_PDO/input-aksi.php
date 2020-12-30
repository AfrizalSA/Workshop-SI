<?php
include 'koneksi.php';

try{
	$query = "insert into user SET id ='',nama=?,alamat=?,pekerjaan=?";
	$konn = $koneksi->prepare($query);
	$konn->bindParam(1,$_POST['nama']);
	$konn->bindParam(2,$_POST['alamat']);
	$konn->bindParam(3,$_POST['pekerjaan']);
	if($konn->execute()){
		echo "berhasil";
	}else{
		die('gagal.');
	}
	
}catch(PDOException $exception){
	echo "error" . $exception->getMessage();
}

header("Location:index.php?pesan=input");
?>
