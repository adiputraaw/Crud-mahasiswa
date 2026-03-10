<?php

include_once "service/MahasiswaService.php";

$service = new MahasiswaService();

$id = $_GET['id'];

$data = mysqli_query($service->connect(),"SELECT * FROM mahasiswa WHERE id='$id'");
$row = mysqli_fetch_array($data);

$jurusan = array("Informatika","Sistem Informasi","Teknik Komputer");

if(isset($_POST['update'])){

$input = [
"nim" => $_POST['nim'],
"nama" => $_POST['nama'],
"jurusan" => $_POST['jurusan']
];

$service->edit($id,$input);

header("location:index.php");

}

?>

<!DOCTYPE html>
<html>
<head>

<title>Edit Mahasiswa</title>

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

<h4 class="mb-4">Edit Mahasiswa</h4>

<form method="POST">

<div class="mb-3">

<label>NIM</label>
<input type="text" name="nim" class="form-control" value="<?= $row['nim'] ?>">

</div>

<div class="mb-3">

<label>Nama</label>
<input type="text" name="nama" class="form-control" value="<?= $row['nama'] ?>">

</div>

<div class="mb-3">

<label>Jurusan</label>

<select name="jurusan" class="form-control">

<?php

foreach($jurusan as $j){

$selected = ($j == $row['jurusan']) ? "selected" : "";

echo "<option $selected>$j</option>";

}

?>

</select>

</div>

<button class="btn btn-dark" name="update">

Update

</button>

<a href="index.php" class="btn btn-light border">

Kembali

</a>

</form>

</div>

</div>

</div>

</body>
</html>