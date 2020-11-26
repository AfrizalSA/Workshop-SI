<!DOCTYPE html>
<html lang="en">
<head>
    <title>Membuat CRUD dengan PHP dan MySQL - Menampilkan data dari Database</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="judul">
        <h1>Membuat CRUD dengan PHP dan MySQL</h1>
        <h2>Menampilkan data dari Database</h2>
    </div>

    <br>

    <a href="index.php">Lihat Semua Data</a>
    
    <br>
    <h3>Input Data Baru</h3>
    <form action="input-aksi.php" method="POST">
        <table>
            <tr>
                <td>Nama</td>
                <td><Input type="text" name="nama"></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><Input type="text" name="alamat"></td>
            </tr>
            <tr>
                <td>Pekerjaan</td>
                <td><Input type="text" name="pekerjaan"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Simpan"></td>
            </tr>
        </table>
    </form>
</body>
</html>