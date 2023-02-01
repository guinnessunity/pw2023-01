<?php
// Koneksi DB
$conn = mysqli_connect('localhost', 'root', '', 'd_mahasiswa');
// query isi tabel
$result = mysqli_query($conn, "SELECT * FROM mahasiswa");
//ubah data jadi array (melihat isi data dari db di web)
// $row = mysqli_fetch_row($result); // memperlihatkan data menajdi array numerik
// var_dump($row);
// $assoc = mysqli_fetch_assoc($result); // memperlihatkan data menjadi arrat bentuk huruf
// var_dump($assoc);
// $array = mysqli_fetch_array($result);// keduanya
// var_dump($array);
$rows = []; // cara membuat array kosong
while ($assoc = mysqli_fetch_assoc($result)) {
  $rows[] = $assoc; // rows di isi dengan data yang ad di assoc(yang ad di DB dengan tabel mahasiswa)
}

// tampung ke variabel mahasiswa
$mahasiswa = $rows
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar Mahasiswa</title>
</head>

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