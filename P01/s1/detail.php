<?php
require 'functions.php';

$iddetail = $_GET['id'];

$mhs = query("SELECT * FROM mahasiswa WHERE id_mhs = $iddetail");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Detail Mahasiswa</title>
</head>

<body>
  <h3>DEATIL MAHASISWA</h3>
  <li><img src="img/<?= $mhs['gambar_mhs']; ?>" width="80"></li>
  <li>NIM : <?= $mhs['nim_mhs']; ?></li>
  <li>Nama : <?= $mhs['nama_mhs']; ?></li>
  <li>Email : <?= $mhs['email_mhs']; ?></li>
  <li>Jurusan : <?= $mhs['jurusan_mhs']; ?></li>
  <li>Program Studi : <?= $mhs['prodi_mhs']; ?></li>
  <li><a href="">Ubah</a> | <a href="">Hapus</a></li>
  <li><a href="latihan3.php">Kembali ke Dashboard</a></li>
  </ul> -->

</body>

</html>