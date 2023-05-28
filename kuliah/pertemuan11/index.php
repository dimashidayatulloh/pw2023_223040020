<?php
require('functions.php');
$name = 'Home';
// koneksi ke DB
$conn = mysqli_connect('localhost', 'root', '', 'pw2023_223040020') or die('Database Error');

// query ke tabel mahasiswa
$result = mysqli_query($conn, 'SELECT * FROM mahasiswa') or die(mysqli_error($conn));

$rows = [];

while ($row = mysqli_fetch_assoc($result)) {
  $rows[] = $row;
}
// Siapkan data $students 
$students = $rows;

// dd(BASE_URL === $_SERVER["REQUEST_URI"]);
require('views/index.view.php');
