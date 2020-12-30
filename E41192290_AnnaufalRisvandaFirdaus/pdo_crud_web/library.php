<?php
class Library
{
    public function __construct()
    {
        $host = "localhost";
        $dbname = "db_mahasiswa";
        $username = "root";
        $password = "";
        $this->db = new PDO("mysql:host={$host};dbname={$dbname}", $username, $password);
    }
    public function add_data($nama_mahasiswa, $kelas, $alamat)
    {
        $data = $this->db->prepare('INSERT INTO tb_mahasiswa (nama_mahasiswa,kelas,alamat) VALUES (?, ?, ?)');
        
        $data->bindParam(1, $nama_mahasiswa);
        $data->bindParam(2, $kelas);
        $data->bindParam(3, $alamat);
 
        $data->execute();
        return $data->rowCount();
    }
    public function show()
    {
        $query = $this->db->prepare("SELECT * FROM tb_mahasiswa");
        $query->execute();
        $data = $query->fetchAll();
        return $data;
    }
 
    public function get_by_id($kd_mahasiswa){
        $query = $this->db->prepare("SELECT * FROM tb_mahasiswa where kd_mahasiswa=?");
        $query->bindParam(1, $kd_mahasiswa);
        $query->execute();
        return $query->fetch();
    }
 
    public function update($kd_mahasiswa,$nama_mahasiswa,$kelas,$alamat){
        $query = $this->db->prepare('UPDATE tb_mahasiswa set nama_mahasiswa=?,kelas=?,alamat=? where kd_mahasiswa=?');
        
        $query->bindParam(1, $nama_mahasiswa);
        $query->bindParam(2, $kelas);
        $query->bindParam(3, $alamat);
        $query->bindParam(4, $kd_mahasiswa);
 
        $query->execute();
        return $query->rowCount();
    }
 
    public function delete($kd_mahasiswa)
    {
        $query = $this->db->prepare("DELETE FROM tb_mahasiswa where kd_mahasiswa=?");
 
        $query->bindParam(1, $kd_mahasiswa);
 
        $query->execute();
        return $query->rowCount();
    }
 
}
?>