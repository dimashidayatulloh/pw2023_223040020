<?php

session_start();

require 'functions.php';

// cek session
if (!isset($_SESSION["username"])) {

    header("Location: index.php");
    exit;
}
if ($_SESSION["level"] != "admin") {

    header("Location: index.php");
    exit;
}

// add data dari session
$username = $_SESSION['username'];

$user = query("SELECT * FROM user WHERE username = '$username'")[0];

// pagination
$jumlahDataPerHalaman = 5;
$jumlahData = count(query("SELECT * FROM user"));
$jumlahHalaman = ceil($jumlahData / $jumlahDataPerHalaman);
$halamanAktif = (isset($_GET["halaman"])) ? $_GET["halaman"] : 1;
$awalData = ($jumlahDataPerHalaman * $halamanAktif) - $jumlahDataPerHalaman;

// Siapkan data user
$users = query("SELECT * FROM user LIMIT $awalData, $jumlahDataPerHalaman");

// tombol cari ditekan
if (isset($_POST['cari'])) {
    $users = cari($_POST['keyword']);
}

require 'views/dashboard.view.php';
