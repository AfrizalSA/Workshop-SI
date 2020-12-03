<?php 
$koneksi = mysqli_connect("localhost","root","","dblogin");

if(mysqli_connect_error()){
    echo "koneksi databse gagal: " , mysqli_connect_error();
}
?>