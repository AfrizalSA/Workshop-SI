<?php
    include 'koneksi.php';
    $query = $db->prepare("SELECT * FROM tbl_siswa");
    $query->execute();
    $data = $query->fetchAll();
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>CRUD PDO</title>
</head>
<body bgcolor="#CCCCCC">
<h2><strong><p align="center">Data Siswa</p></strong></h2>
<table width="807" border="1" cellpadding="0" cellspacing="0" align="center">
  <tr>
    <td width="115" height="30" align="center" valign="middle" bgcolor="#00FFFF">NIS</td>
    <td width="175" align="center" valign="middle" bgcolor="#00FFFF">Nama</td>
    <td width="250" align="center" valign="middle" bgcolor="#00FFFF">Alamat</td>
    <td width="100" align="center" valign="middle" bgcolor="#00FFFF">Kelas</td>
    <td width="135" align="center" valign="middle" bgcolor="#00FFFF"><a href="create.php">TAMBAH</a></td></tr>
            <?php foreach ($data as $value): ?>
                <tr>
                    <td p align="center" bgcolor="#FFFFFF"><?php echo $value['nis'] ?></td>
                    <td p align="left" bgcolor="#FFFFFF"><?php echo $value['nama'] ?></td>
                    <td p align="left" bgcolor="#FFFFFF"><?php echo $value['alamat'] ?></td>
                    <td p align="center" bgcolor="#FFFFFF"><?php echo $value['kelas'] ?></td>
                    <td p align="center" bgcolor="#FFFFFF">
                        <a href="edit.php?nis=<?php echo $value['nis']?>">Edit</a>
                        <a href="delete.php?nis=<?php echo $value['nis']?>">Delete</a>
                    </td>
                </tr>
 </td>
  </tr>
<?php endforeach; ?>
</table>
</body>
</html>