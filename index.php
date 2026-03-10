<?php

include_once "service/MahasiswaService.php";

$service = new MahasiswaService();
// mengambil data mahasiswa dari database
$data = $service->tampil();

?>

<!DOCTYPE html>
<html>
<head>

<title>Data Mahasiswa</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

<style>

body{
    background:#f5f6f8;
}

.card{
    border:none;
    border-radius:12px;
}

.table{
    margin-top:20px;
}

.btn-delete{
    border:1px solid #ddd;
    background:white;
}

</style>

</head>

<body>

<div class="container mt-5">

<div class="card shadow-sm">

<div class="card-body p-4">

<div class="d-flex justify-content-between align-items-center">

<h4 class="mb-0">Data Mahasiswa</h4>

<a href="tambah.php" class="btn btn-dark btn-sm">
Tambah Data
</a>

</div>

<table class="table table-hover">

<thead>

<tr>
<th>NIM</th>
<th>Nama</th>
<th>Jurusan</th>
<th width="120">Aksi</th>
</tr>

</thead>

<tbody>

<?php while($row = mysqli_fetch_array($data)){ ?>

<tr>

<td><?= $row['nim'] ?></td>
<td><?= $row['nama'] ?></td>
<td><?= $row['jurusan'] ?></td>

<td>

<a href="edit.php?id=<?= $row['id'] ?>" 
class="btn btn-sm btn-outline-dark">

Edit

</a>

<a href="hapus.php?id=<?= $row['id'] ?>" 
class="btn btn-sm btn-outline-danger"
onclick="return confirm('Yakin ingin menghapus data?')">

Hapus

</a>

</td>

</tr>

<?php } ?>

</tbody>

</table>

</div>

</div>

</div>

</body>
</html>