<html>
<body>

<?php
session_start();
$_SESSION["login"]=$_POST["username"]
?>
<h2>Welcome</h2>
Selamat Datang <?php echo $_SESSION["login"]; ?><br>
Your Password is: <?php echo $_POST["password"]; ?>

</body>
</html>