<?php
    include 'koneksi.php';
    if(isset($_POST['submit'])){
        $nis = htmlentities($_POST['nis']);
  $nama = htmlentities($_POST['nama']);
        $alamat = htmlentities($_POST['alamat']);
        $kelas = htmlentities($_POST['kelas']);
        $query = $db->prepare("INSERT INTO `tbl_siswa`(`nis`,`nama`, `alamat`, `kelas`)
        VALUES (:nis,:nama,:alamat,:kelas)");
  $query->bindParam(":nis", $nis);
        $query->bindParam(":nama", $nama);
        $query->bindParam(":alamat", $alamat);
        $query->bindParam(":kelas", $kelas);
        $query->execute();
        header("location: index.php");
    }
?>
<!DOCTYPE html>
<html>
    <head>
     <meta charset="utf-8">
  <title>CRUD PDO Javanet Media </title>
    </head>
<body bgcolor="#CCCCCC">
<h2><p align="center">TAMBAH DATA</p></h2>
<form method="post">
<table width="546" border="0" cellpadding="0" cellspacing="0" align="center" bgcolor="#FFFFFF">
  <tr>
    <td width="189" height="20"> </td>
    <td width="26"> </td>
    <td width="331"> </td>
  </tr>
  <tr>
    <td height="27" align="right" valign="middle">NIS</td>
    <td align="center" valign="top">:</td>
    <td valign="middle"><label>
      <input name="nis" type="text" size="10">
    </label></td>
  </tr>
  <tr>
    <td height="27" align="right" valign="middle">Nama</td>
    <td align="center" valign="top">:</td>
    <td valign="middle"><label>
      <input type="text" name="nama">
    </label></td>
  </tr>
  <tr>
    <td height="27" align="right" valign="middle">Alamat</td>
    <td align="center" valign="top">:</td>
    <td valign="middle"><label>
      <input name="alamat" type="text" size="50">
    </label></td>
  </tr>
  <tr>
    <td height="27" align="right" valign="middle">Kelas</td>
    <td align="center" valign="top">:</td>
    <td valign="middle"><label>
      <select name="kelas">
    <option selected="selected">--Pilih--</option>
  <option>1</option>
  <option>2</option>
  <option>3</option>
      </select>
    </label></td>
  </tr>
  <tr>
    <td height="42"> </td>
    <td> </td>
    <td><input type="submit" name="submit" value="TAMBAH"></td>
  </tr>
</table>
</body>
</html>