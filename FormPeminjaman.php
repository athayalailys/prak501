<?php

require "Model.php";
require "Koneksi.php";

$data = null;

if(isset($_GET['id'])){

    $data = getPeminjamanById($_GET['id']);
}

$member = mysqli_query(
    $koneksi,
    "SELECT * FROM member"
);

$buku = mysqli_query(
    $koneksi,
    "SELECT * FROM buku"
);

if(isset($_POST['submit'])){

    if($_POST['id_peminjaman']==""){

        insertPeminjaman($_POST);

    }else{

        updatePeminjaman($_POST);
    }

    header("Location: Peminjaman.php");
}

?>

<!DOCTYPE html>
<html>

<head>

<title>Form Peminjaman</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<link rel="stylesheet" href="assets/style.css">

</head>

<body>

<?php require "Navbar.php"; ?>

<div class="container mt-5">

<div class="card">

<div class="card-header bg-primary text-white">

<?= $data ? "Edit Peminjaman" : "Tambah Peminjaman"; ?>

</div>

<div class="card-body">

<form method="POST">

<input type="hidden"
name="id_peminjaman"
value="<?= $data['id_peminjaman'] ?? ''; ?>">

<div class="mb-3">

<label>Member</label>

<select name="id_member"
class="form-control">

<?php while($m = mysqli_fetch_assoc($member)) : ?>

<option value="<?= $m['id_member']; ?>"

<?php
if(isset($data['id_member'])){

    if($data['id_member']==$m['id_member']){

        echo "selected";
    }
}
?>

>

<?= $m['nama_member']; ?>

</option>

<?php endwhile; ?>

</select>

</div>

<div class="mb-3">

<label>Buku</label>

<select name="id_buku"
class="form-control">

<?php while($b = mysqli_fetch_assoc($buku)) : ?>

<option value="<?= $b['id_buku']; ?>"

<?php
if(isset($data['id_buku'])){

    if($data['id_buku']==$b['id_buku']){

        echo "selected";
    }
}
?>

>

<?= $b['judul']; ?>

</option>

<?php endwhile; ?>

</select>

</div>

<div class="mb-3">

<label>Tanggal Pinjam</label>

<input type="date"
name="tgl_pinjam"
class="form-control"
value="<?= $data['tgl_pinjam'] ?? ''; ?>">

</div>

<div class="mb-3">

<label>Tanggal Kembali</label>

<input type="date"
name="tgl_kembali"
class="form-control"
value="<?= $data['tgl_kembali'] ?? ''; ?>">

</div>

<button type="submit"
name="submit"
class="btn btn-success">

Simpan

</button>

<a href="Peminjaman.php"
class="btn btn-secondary">

Kembali

</a>

</form>

</div>

</div>

</div>

</body>
</html>