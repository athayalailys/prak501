<?php
date_default_timezone_set('Asia/Makassar');

require "Model.php";

$data = null;

if(isset($_GET['id'])){

    $data = getMemberById($_GET['id']);
}

if(isset($_POST['submit'])){

    if($_POST['id_member']==""){

        insertMember($_POST);

    }else{

        updateMember($_POST);
    }

    header("Location: Member.php");
}

?>

<!DOCTYPE html>
<html>

<head>

<title>Form Member</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<link rel="stylesheet" href="assets/style.css">

</head>

<body>

<?php require "Navbar.php"; ?>

<div class="container mt-5">

<div class="card">

<div class="card-header bg-primary text-white">

<?= $data ? "Edit Member" : "Tambah Member"; ?>

</div>

<div class="card-body">

<form method="POST">

<input type="hidden"
name="id_member"
value="<?= $data['id_member'] ?? ''; ?>">

<div class="mb-3">

<label>Nama Member</label>

<input type="text"
name="nama_member"
class="form-control"
value="<?= $data['nama_member'] ?? ''; ?>">

</div>

<div class="mb-3">

<label>Nomor Member</label>

<input type="text"
name="nomor_member"
class="form-control"
value="<?= $data['nomor_member'] ?? ''; ?>">

</div>

<div class="mb-3">

<label>Alamat</label>

<textarea name="alamat"
class="form-control"><?= $data['alamat'] ?? ''; ?></textarea>

</div>

<div class="mb-3">

<label>Tanggal Mendaftar</label>

<input type="date"
name="tgl_mendaftar"
class="form-control"
value="<?= $data['tgl_daftar'] ?? date('Y-m-d'); ?>">

</div>

<div class="mb-3">

<label>Tanggal Terakhir Bayar</label>

<input type="date"
name="tgl_terakhir_bayar"
class="form-control"
value="<?= $data['tgl_terakhir_bayar'] ?? ''; ?>">

</div>

<button type="submit"
name="submit"
class="btn btn-success">

Simpan

</button>

<a href="Member.php"
class="btn btn-secondary">

Kembali

</a>

</form>

</div>

</div>

</div>

</body>
</html>
