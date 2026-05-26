<?php

require "Model.php";

$dataPeminjaman = getAllPeminjaman();

if(isset($_GET['hapus'])){

    deletePeminjaman($_GET['hapus']);

    header("Location: Peminjaman.php");
}

?>

<!DOCTYPE html>
<html>

<head>

<title>Data Peminjaman</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<link rel="stylesheet" href="assets/style.css">

</head>

<body>

<?php require "Navbar.php"; ?>

<div class="container mt-5">

<div class="card">

<div class="card-body">

<div class="d-flex justify-content-between mb-3">

<h3>Data Peminjaman</h3>

<a href="FormPeminjaman.php"
class="btn btn-primary">

+ Tambah Peminjaman

</a>

</div>

<table class="table table-bordered table-hover">

<thead class="table-dark">

<tr>

<th>ID</th>
<th>Nama Member</th>
<th>Judul Buku</th>
<th>Tanggal Pinjam</th>
<th>Tanggal Kembali</th>
<th>Aksi</th>

</tr>

</thead>

<tbody>

<?php while($p = mysqli_fetch_assoc($dataPeminjaman)) : ?>

<tr>

<td><?= $p['id_peminjaman']; ?></td>
<td><?= $p['nama_member']; ?></td>
<td><?= $p['judul']; ?></td>
<td><?= $p['tgl_pinjam']; ?></td>
<td><?= $p['tgl_kembali']; ?></td>

<td>

<a href="FormPeminjaman.php?id=<?= $p['id_peminjaman']; ?>"
class="btn btn-warning btn-sm">

Edit

</a>

<a href="?hapus=<?= $p['id_peminjaman']; ?>"
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