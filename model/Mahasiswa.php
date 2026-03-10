<?php

class Mahasiswa {

    public $nim;
    public $nama;
    public $jurusan;

    public function __construct($nim,$nama,$jurusan){

        $this->nim = $nim;
        $this->nama = $nama;
        $this->jurusan = $jurusan;

    }

}

?>