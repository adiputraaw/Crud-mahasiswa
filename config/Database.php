<?php

class Database {

    public function connect(){

        $host = "localhost";
        $user = "root";
        $password = "";
        $db = "db_mahasiswa";

        $conn = mysqli_connect($host,$user,$password,$db);

        if(!$conn){
            die("Koneksi gagal");
        }

        return $conn;

    }

}

?>