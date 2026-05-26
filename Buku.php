<?php

require "Model.php";

$dataBuku = getAllBuku();

if(isset($_GET['hapus'])){

    deleteBuku($_GET['hapus']);

    header("Location: Buku.php");
}

?>

<!DOCTYPE html>
<html>

<head>

<title>Data Buku</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<link rel="stylesheet" href="assets/style.css">

</head>

<body>

<?php require "Navbar.php"; ?>

<div class="container mt-5">

<div class="card">

<div class="card-body">

<div class="d-flex justify-content-between mb-3">

<h3>Data Buku</h3>

<a href="FormBuku.php"
class="btn btn-primary">

+ Tambah Buku

</a>

</div>

<table class="table table-bordered table-hover">

<thead class="table-dark">

<tr>
<th>ID</th>
<th>Kode</th>
<th>Judul</th>
<th>Pengarang</th>
<th>Penerbit</th>
<th>Tahun</th>
<th>Aksi</th>
</tr>

</thead>

<tbody>

<?php while($b = mysqli_fetch_assoc($dataBuku)) : ?>

<tr>

<td><?= $b['id_buku']; ?></td>
<td><?= $b['kode_buku']; ?></td>
<td><?= $b['judul']; ?></td>
<td><?= $b['pengarang']; ?></td>
<td><?= $b['penerbit']; ?></td>
<td><?= $b['tahun_terbit']; ?></td>

<td>

<a href="FormBuku.php?id=<?= $b['id_buku']; ?>"
class="btn btn-warning btn-sm">

Edit

</a>

<a href="?hapus=<?= $b['id_buku']; ?>"
class="btn btn-danger btn-sm"
onclick="return confirm('Yakin hapus data?')">

Hapus

</a>

</td>

</tr>

<?php endwhile; ?>

</tbody>

</table>

</div>

</div>

</div>

</body>
</html>