<?php 
	$koneksi = mysqli_connect("localhost","root","","akun");

	if (mysqli_connect_error()) {
		echo "Koneksi database gagal :".mysqli_connect_error();
	}
 ?>