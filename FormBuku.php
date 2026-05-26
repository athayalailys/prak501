<?php

require "Model.php";

$data = null;

if(isset($_GET['id'])){

    $data = getBukuById($_GET['id']);
}

if(isset($_POST['submit'])){

    if($_POST['id_buku']==""){

        insertBuku($_POST);

    }else{

        updateBuku($_POST);
    }

    header("Location: Buku.php");
}

?>

<!DOCTYPE html>
<html>

<head>

<title>Form Buku</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<link rel="stylesheet" href="assets/style.css">

</head>

<body>

<?php require "Navbar.php"; ?>

<div class="container mt-5">

<div class="card">

<div class="card-header bg-primary text-white">

<?= $data ? "Edit Buku" : "Tambah Buku"; ?>

</div>

<div class="card-body">

<form method="POST">

<input type="hidden"
name="id_buku"
value="<?= $data['id_buku'] ?? ''; ?>">

<div class="mb-3">

<label>Kode Buku</label>

<input type="text"
name="kode_buku"
class="form-control"
value="<?= $data['kode_buku'] ?? ''; ?>">

</div>

<div class="mb-3">

<label>Judul</label>

<input type="text"
name="judul"
class="form-control"
value="<?= $data['judul'] ?? ''; ?>">

</div>

<div class="mb-3">

<label>Pengarang</label>

<input type="text"
name="pengarang"
class="form-control"
value="<?= $data['pengarang'] ?? ''; ?>">

</div>

<div class="mb-3">

<label>Penerbit</label>

<input type="text"
name="penerbit"
class="form-control"
value="<?= $data['penerbit'] ?? ''; ?>">

</div>

<div class="mb-3">

<label>Tahun Terbit</label>

<input type="number"
name="tahun_terbit"
class="form-control"
value="<?= $data['tahun_terbit'] ?? ''; ?>">

</div>

<button type="submit"
name="submit"
class="btn btn-success">

Simpan

</button>

<a href="Buku.php"
class="btn btn-secondary">

Kembali

</a>

</form>

</div>

</div>

</div>

</body>
</html>