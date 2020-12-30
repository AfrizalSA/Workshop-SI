<?php
include 'koneksi.php';

try{
	$query = "update user SET nama=:nama,alamat=:alamat,pekerjaan=:pekerjaan WHERE id=:id";
	$konn = $koneksi->prepare($query);
	$konn->bindParam(':nama',$_POST['nama']);
	$konn->bindParam(':alamat',$_POST['alamat']);
	$konn->bindParam(':pekerjaan',$_POST['pekerjaan']);
	$konn->bindParam(':id',$_POST['id']);
	if($konn->execute()){
		echo "berhasil";
	}else{
		die('gagal.');
	}
	
}catch(PDOException $exception){
	echo "error" . $exception->getMessage();
}

header("Location:index.php?pesan=update");
?>

