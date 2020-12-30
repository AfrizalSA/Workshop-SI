<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Membuat CRUD dengan PHP dan Mysql - Menampilkan data dari Database</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <div class="judul">
        <h1>Membuat CRUD dengan PHP dan Mysql</h1>
        <h2>Menampilkan data dari Database</h2>
    </div>
    <br>
    <?php
    if (isset($_GET['pesan'])) {
        $pesan = $_GET['pesan'];
        if ($pesan == "input") {
            echo "Data berhasil di input";
        }elseif ($pesan == "update") {
            echo "Data berhasil di update";
        }elseif ($pesan == "hapus"){
            echo "Data berhasil di hapus";
        }
        
        
    }

    ?>
    <br>

    <a href="input.php" class="tombol"> + Tambah Data Baru</a>

    <h3>Data User</h3>
    <table border="1" class="table">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Pekerjaan</th>
            <th>Opsi</th>
        </tr>
        <?php
        include 'koneksi.php';
        $query_mysql = $koneksi->prepare("select * from user");
        $query_mysql->execute();
        $data = $query_mysql->fetchAll();
        $nomor = 1;    
        ?>
        <?php foreach ($data as $value):?> 

          <tr>
            <td><?php echo $nomor++; ?></td>
            <td><?php echo $value['nama']; ?></td>
            <td><?php echo $value['alamat']; ?></td>
            <td><?php echo $value['pekerjaan']; ?></td>
            <td>
                <a href="edit.php?id=<?php echo $value['id']; ?>" class="edit">Edit</a>
                <a href="hapus.php?id=<?php echo $value['id']; ?>" class="hapus">Hapus</a>
            </td>
        </tr>  
        
        <?php endforeach; ?>
    </table>
</body>

</html>