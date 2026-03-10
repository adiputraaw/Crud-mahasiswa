<?php

include_once "service/MahasiswaService.php";

$service = new MahasiswaService();

$jurusan = array("Informatika","Sistem Informasi","Teknik Komputer");

if(isset($_POST['simpan'])){

$data = [
"nim" => $_POST['nim'],
"nama" => $_POST['nama'],
"jurusan" => $_POST['jurusan']
];

$service->tambah($data);

header("location:index.php");

}

?>

<!DOCTYPE html>
<html>
<head>

<title>Tambah Mahasiswa</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

<style>

body{
background:#f5f6f8;
}

.card{
border:none;
border-radius:12px;
}

</style>

</head>

<body>

<div class="container mt-5">

<div class="card shadow-sm">

<div class="card-body p-4">

<h4 class="mb-4">Tambah Mahasiswa</h4>

<form method="POST">

<div class="mb-3">

<label class="form-label">NIM</label>

<input type="text" name="nim" class="form-control">

</div>

<div class="mb-3">

<label class="form-label">Nama</label>

<input type="text" name="nama" class="form-control">

</div>

<div class="mb-3">

<label class="form-label">Jurusan</label>

<select name="jurusan" class="form-control">

<?php

foreach($jurusan as $j){
echo "<option>$j</option>";
}

?>

</select>

</div>

<div class="mt-4">

<button class="btn btn-dark" name="simpan">

Simpan

</button>

<a href="index.php" class="btn btn-light border">

Kembali

</a>

</div>

</form>

</div>

</div>

</div>

</body>
</html>