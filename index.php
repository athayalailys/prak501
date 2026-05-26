<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Perpustakaan</title>

    <style>
        body{
            margin:0;
            padding:0;
            font-family: Arial, sans-serif;
            background:#f4f4f4;
        }

        .container{
            width:100%;
            height:100vh;
            display:flex;
            justify-content:center;
            align-items:center;
        }

        .card{
            background:white;
            padding:40px;
            border-radius:15px;
            box-shadow:0 0 15px rgba(0,0,0,0.1);
            text-align:center;
            width:350px;
        }

        h1{
            margin-bottom:10px;
            color:#333;
        }

        p{
            color:#666;
            margin-bottom:30px;
        }

        .menu{
            display:flex;
            flex-direction:column;
            gap:15px;
        }

        .menu a{
            text-decoration:none;
            background:#007bff;
            color:white;
            padding:15px;
            border-radius:10px;
            transition:0.3s;
            font-weight:bold;
        }

        .menu a:hover{
            background:#0056b3;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="card">
        <h1>Sistem Perpustakaan</h1>
        <p>CRUD Data Perpustakaan</p>

        <div class="menu">
            <a href="Member.php">Data Member</a>
            <a href="Buku.php">Data Buku</a>
            <a href="Peminjaman.php">Data Peminjaman</a>
        </div>
    </div>
</div>

</body>
</html>
