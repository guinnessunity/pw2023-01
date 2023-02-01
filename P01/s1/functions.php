<?php
function Koneksi()
{
  return mysqli_connect('localhost', 'root', '', 'd_mahasiswa');
}

function query($query)
{
  $conn = Koneksi();

  $result = mysqli_query($conn, $query);

  // jika menampilkan hanya 1 data untuk halamn detail
  if (mysqli_num_rows($result) == 1) {
    return mysqli_fetch_assoc($result);
  }
  $rows = [];
  while ($assoc = mysqli_fetch_assoc($result)) {
    $rows[] = $assoc;
  }

  return $rows;
}
