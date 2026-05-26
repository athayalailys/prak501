<?php

$koneksi = mysqli_connect(
    "localhost",
    "root",
    "",
    "prak501"
);

if(!$koneksi){
    die("Koneksi gagal");
}

?>