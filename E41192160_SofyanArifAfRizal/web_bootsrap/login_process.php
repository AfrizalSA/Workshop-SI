<?php
$email = $_POST['email'];
$password = $_POST['password'];
$email_saya = "afrizal31@gmail.com";
$password_saya = 12345678;
if((strcasecmp($email_saya, $email) == 0)&&($password_saya==$password)){
    header("location:index.php?pesan=berhasil");}
else{
    header("location:login.php?pesan=gagal");}
    ?>
