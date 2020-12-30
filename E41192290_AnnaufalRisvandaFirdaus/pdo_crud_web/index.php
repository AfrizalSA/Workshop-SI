<?php 
include('library.php');
$lib = new Library();
$data_mahasiswa = $lib->show();
 
if(isset($_GET['hapus_mahasiswa']))
{
    $kd_mahasiswa = $_GET['hapus_mahasiswa'];
    $status_hapus = $lib->delete($kd_mahasiswa);
    if($status_hapus)
    {
        header('Location: index.php');
    }
}
?>
<html>
    <head>
        <title></title>
        <link rel="stylesheet" href="bootstrap.min.css">
    </head>
    <body>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h3>Data mahasiswa</h3>
            </div>
            <div class="card-body">
                <a href="form_add.php" class="btn btn-success">Tambah</a>
                <hr/>
                <table class="table table-bordered" width="60%">
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Kelas</th>
                        <th>Alamat</th>
                        <th>Action</th>
                    </tr>
                    <?php 
                    $no = 1;
                    foreach($data_mahasiswa as $row)
                    {
                        echo "<tr>";
                        echo "<td>".$no."</td>";
                        echo "<td>".$row['nama_mahasiswa']."</td>";
                        echo "<td>".$row['kelas']."</td>";
                        echo "<td>".$row['alamat']."</td>";
                        echo "<td><a class='btn btn-info' href='form_edit.php?kd_mahasiswa=".$row['kd_mahasiswa']."'>Update</a>
                        <a class='btn btn-danger' href='index.php?hapus_mahasiswa=".$row['kd_mahasiswa']."'>Hapus</a></td>";
                        echo "</tr>";
                        $no++;
                    }
                    ?>
                </table>
            </div>
        </div>
    </div>
    </body>
</html>