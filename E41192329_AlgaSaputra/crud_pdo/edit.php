<?php
    include 'koneksi.php';
    if(!isset($_GET['nis'])){
        die("Error: NIS Tidak Dimasukkan");
    }
    $query = $db->prepare("SELECT * FROM `tbl_siswa` WHERE nis = :nis");
    $query->bindParam(":nis", $_GET['nis']);
    $query->execute();
    if($query->rowCount() == 0){
        die("Error: NIS Tidak Ditemukan");
    }else{
        $data = $query->fetch();
    }
    if(isset($_POST['submit'])){
        $nama = htmlentities($_POST['nama']);
        $alamat = htmlentities($_POST['alamat']);
        $kelas = htmlentities($_POST['kelas']);
        $query = $db->prepare("UPDATE `tbl_siswa` SET `nama`=:nama,`alamat`=:alamat,`kelas`=:kelas WHERE nis=:nis");
        $query->bindParam(":nama", $nama);
        $query->bindParam(":alamat", $alamat);
        $query->bindParam(":kelas", $kelas);
        $query->bindParam(":nis", $_GET['nis']);
        $query->execute();
        header("location: index.php");
    }
?>

<!DOCTYPE html>
<html>
    <head>
 <title>CRUD PDO</title>
    <meta charset="utf-8">
    </head>
 <body bgcolor="#CCCCCC">
    <h2><p align="center">EDIT DATA</p></h2>
    <form method="post">
 <table width="546" border="0" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF" align="center">
  <tr>
    <td width="189" height="20"> </td>
    <td width="26"> </td>
    <td width="331"> </td>
  </tr>
  <tr>
    <td height="27" align="right" valign="middle">NIS</td>
    <td align="center" valign="top">:</td>
    <td valign="middle">
      <input type="text" name="nis" value="<?php echo $data['nis'] ?>" readonly="readonly"> 
    </td>
  </tr>
  <tr>
    <td height="27" align="right" valign="middle">Nama</td>
    <td align="center" valign="top">:</td>
    <td valign="middle"><label>
      <input type="text" name="nama" value="<?php echo $data['nama'] ?>">
    </label></td>
  </tr>
  <tr>
    <td height="27" align="right" valign="middle">Alamat</td>
    <td align="center" valign="top">:</td>
    <td valign="middle"><label>
      <input name="alamat" type="text" size="50" value="<?php echo $data['alamat'] ?>">
    </label></td>
  </tr>
  <tr>
    <td height="27" align="right" valign="middle">Kelas</td>
    <td align="center" valign="top">:</td>
    <td valign="middle"><label>
  <input name="kelas" type="text" size="50" value="<?php echo $data['kelas'] ?>">
    </label></td>
  </tr>
  <tr>
    <td height="42"> </td>
    <td> </td>
    <td><input type="submit" name="submit" value="EDIT"></td>
  </tr>
  </table>
</body>
</html>