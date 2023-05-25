<?php
// Sesuaikan dengan URL project kalian
function base_url($url = null)
{
  $base_url = "http://localhost/pw2023_223040155/kuliah/pertemuan11";
  if ($url != null) {
    return $base_url . "/" . $url;
  } else {
    return $base_url;
  }
}

function conn()
{
  $conn = mysqli_connect('localhost', 'root', '', 'pw2023_223040155') or die('KONEKSI GAGAL!');
  return $conn;
}

function query($query)
{
  $conn = conn();
  $result = mysqli_query($conn, $query) or die(mysqli_error($conn));

  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }

  return $rows;
}

function tambah($data)
{
  $conn = conn();

  $nim = htmlspecialchars($data['nim']);
  $nama = htmlspecialchars($data['nama']);
  $email = htmlspecialchars($data['email']);
  $jurusan = htmlspecialchars($data['jurusan']);

  $gambar = htmlspecialchars($data['gambar']);

  if (strlen($nim) > 9) {
    return [
      'error' => true,
      'massage' => 'nim terlalu panjang'
    ];
    exit;
  }

  if (strlen($nim) < 9) {
    return [
      'error' => true,
      'massage' => 'nim terlalu pendek'
    ];
    exit;
  }

  $query = "INSERT INTO mahasiswa VALUES (null,'$gambar','$nim','$nama','$email','$jurusan')";

  mysqli_query($conn, $query);
  echo mysqli_error($conn);
  return [
    'error' => false,
    'massage' => 'data berhasil di tambah'
  ];
  exit;
}

function dd($value)
{
  echo "<pre>";
  var_dump($value);
  echo "</pre>";
  die;
}

function uriIS($uri)
{
  return ($_SERVER["REQUEST_URI"] === $uri) ? 'active' : '';
}
