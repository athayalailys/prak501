<?php

require "Model.php";

$dataMember = getAllMember();

if(isset($_GET['hapus'])){

    deleteMember($_GET['hapus']);

    header("Location: Member.php");
}

?>

<!DOCTYPE html>
<html>

<head>

<title>Data Member</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<link rel="stylesheet" href="assets/style.css">

</head>

<body>

<?php require "Navbar.php"; ?>

<div class="container mt-5">

<div class="card">

<div class="card-body">

<div class="d-flex justify-content-between mb-3">

<h3>Data Member</h3>

<a href="FormMember.php"
class="btn btn-primary">

+ Tambah Member

</a>

</div>

<table class="table table-bordered table-hover">

<thead class="table-dark">

<tr>

<th>ID</th>
<th>Nama</th>
<th>Nomor</th>
<th>Alamat</th>
<th>Tanggal Daftar</th>
<th>Terakhir Bayar</th>
<th>Aksi</th>

</tr>

</thead>

<tbody>

<?php while($m = mysqli_fetch_assoc($dataMember)) : ?>

<tr>

<td><?= $m['id_member']; ?></td>
<td><?= $m['nama_member']; ?></td>
<td><?= $m['nomor_member']; ?></td>
<td><?= $m['alamat']; ?></td>
<td><?= $m['tgl_mendaftar']; ?></td>
<td><?= $m['tgl_terakhir_bayar']; ?></td>

<td>

<a href="FormMember.php?id=<?= $m['id_member']; ?>"
class="btn btn-warning btn-sm">

Edit

</a>

<a href="?hapus=<?= $m['id_member']; ?>"
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