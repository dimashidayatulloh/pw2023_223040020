<?php
define('BASE_URL', '/pw2023_223040020/kuliah/pertemuan12/');

// koneksi ke DB
function koneksi()
{
  $conn = mysqli_connect('localhost', 'root', '', 'pw2023_223040020') or die('KONEKSI GAGAL!');
  return $conn;
}

// query ke tabel mahasiswa
function query($query)
{
  $conn = koneksi();
  $result = mysqli_query($conn, $query) or die(mysqli_error($conn));

  $rows = [];

  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }

  return $rows;
}

function tambah($data)
{
  $conn = koneksi();

  $nim = $data['nim'];
  $nama = $data['nama'];
  $email = $data['email'];
  $jurusan = $data['jurusan'];
  $gambar = $data['gambar'];


  $query = "INSERT INTO mahasiswa VALUES (null, '$nim', '$nama', '$email', '$jurusan', '$gambar')";
  mysqli_query($conn, $query) or die(mysqli_error($conn));

  return mysqli_affected_rows($data);
}

function dd($value)
{
  echo "<pre>";
  var_dump($value);
  die;
  echo "</pre>";
}

function uriIS($uri)
{
  return ($_SERVER["REQUEST_URI"] === BASE_URL) ? 'active' : '';
}
