<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Membuat CRUD dengan PHP dan MYSQL - menampilkan data dari Database</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <div class="judul">
        <h1>Membuat CRUD dengan PHP dan MYSQL</h1>
        <h2>Menambahkan data dari Database </h2>
    </div>
    <br>

    <h3>Edit Data</h3>
    <?php
    include "koneksi.php";
        

$query = $koneksi->prepare("SELECT * FROM user WHERE id = :id ");
$query->bindParam(":id", $_GET['id']);
$query->execute();
while($data=$query->fetch())
{?>
    <form action="update.php" method="POST">
        <table>
            <tr>
                <td>Nama</td>
                <td><input type="hidden" name="id" value="<?php echo $data['id']?>">
                    <input type="text" name="nama" value="<?php echo $data['nama']?>">
                </td>
            </tr>

            <tr>
                <td>Alamat</td>
                <td><input type="text" name="alamat" value="<?php echo $data['alamat']?>">
                </td>
            </tr>

            <tr>
                <td>Pekerjaan</td>
                <td><input type="text" name="pekerjaan" value="<?php echo $data['pekerjaan']?>">
                </td>
            </tr>

            <tr>
                <td></td>
                <td>
                    <input type="submit" value="simpan">
                </td>
            </tr>

        </table>
    </form>
    <?php } ?>
</body>

</html>