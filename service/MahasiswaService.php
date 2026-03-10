<?php

include_once "config/Database.php";
include_once "interface/CrudInterface.php";
include_once "model/Mahasiswa.php";

class MahasiswaService extends Database implements CrudInterface {

    private $conn;

    public function __construct(){

        $db = new Database();
        $this->conn = $db->connect();

    }

    public function tampil(){

        return mysqli_query($this->conn,"SELECT * FROM mahasiswa");

    }

    public function tambah($data){

        $nim = $data['nim'];
        $nama = $data['nama'];
        $jurusan = $data['jurusan'];

        mysqli_query($this->conn,
        "INSERT INTO mahasiswa(nim,nama,jurusan)
        VALUES('$nim','$nama','$jurusan')");

    }

    public function hapus($id){

        mysqli_query($this->conn,
        "DELETE FROM mahasiswa WHERE id='$id'");

    }

    public function edit($id,$data){

    $nim = $data['nim'];
    $nama = $data['nama'];
    $jurusan = $data['jurusan'];

    mysqli_query($this->conn,
    "UPDATE mahasiswa SET
    nim='$nim',
    nama='$nama',
    jurusan='$jurusan'
    WHERE id='$id'");

}

}

?>