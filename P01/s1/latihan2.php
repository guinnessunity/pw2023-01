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
      <th>NIM</th>
      <th>Nama</th>
      <th>Email</th>
      <th>Jurusan</th>
      <th>Prodi</th>
      <th>Aksi</th>
    </tr>
    <?php $no = 1;
    foreach ($mahasiswa as $mhs) : ?>
      <tr>
        <td><?= $no++; ?></td>
        <td><img src="img/<?= $mhs['gambar_mhs']; ?>" width="80"></td>
        <td><?= $mhs['nim_mhs']; ?></td>
        <td><?= $mhs['nama_mhs']; ?></td>
        <td><?= $mhs['email_mhs']; ?></td>
        <td><?= $mhs['jurusan_mhs']; ?></td>
        <td><?= $mhs['prodi_mhs']; ?></td>
        <td>
          <a href="">Ubah</a> | <a href="">Hapus</a>
        </td>
      </tr>
    <?php endforeach; ?>
  </table>
</body>

</html>