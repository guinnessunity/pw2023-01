<?php
require 'functions.php';
$mahasiswa = query('SELECT * FROM mahasiswa');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar Mahasiswa</title>
</head>
<h3>DAFTAR MAHASISWA</h3>

<body>
  <table border="1" cellpadding="10" cellspacing="0">
    <tr>
      <th>No</th>
      <th>Gambar</th>
      <th>Nama</th>
      <th>Aksi</th>
    </tr>
    <?php $no = 1;
    foreach ($mahasiswa as $mhs) : ?>
      <tr>
        <td><?= $no++; ?></td>
        <td><img src="img/<?= $mhs['gambar_mhs']; ?>" width="80"></td>
        <td><?= $mhs['nama_mhs']; ?></td>
        <td>
          <a href="detail.php?id=<?= $mhs['id_mhs']; ?> ">Detail</a>
        </td>
      </tr>
    <?php endforeach; ?>
  </table>
</body>

</html>