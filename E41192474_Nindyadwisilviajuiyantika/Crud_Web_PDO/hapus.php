<?php
include 'koneksi.php';

try{
$query = "DELETE FROM user WHERE id = '$_GET[id]' ";
 
// use exec() because no results are returned
$koneksi->exec($query);
echo "Record deleted successfully";
}
catch(PDOException $e){
echo $query . "<br>" . $e->getMessage();
}

header("location:index.php?pesan=hapus");
?>