<?php

include_once "service/MahasiswaService.php";

$service = new MahasiswaService();

$id = $_GET['id'];

$service->hapus($id);

header("location:index.php");

?>