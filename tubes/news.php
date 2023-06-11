<?php

session_start();

require 'functions.php';

// cek session
if (!isset($_SESSION["username"])) {
    header("Location: login.php");
    exit;
}

// add data dari session
$username = $_SESSION['username'];

$user = query("SELECT * FROM user WHERE username = '$username'")[0];

// pagination
$jumlahDataPerHalaman = 6;
$jumlahData = count(query("SELECT * FROM postingan"));
$jumlahHalaman = ceil($jumlahData / $jumlahDataPerHalaman);
$halamanAktif = (isset($_GET["halaman"])) ? $_GET["halaman"] : 1;
$awalData = ($jumlahDataPerHalaman * $halamanAktif) - $jumlahDataPerHalaman;

// Siapkan data postingan
$cards = query("SELECT * FROM postingan LIMIT $awalData, $jumlahDataPerHalaman");

// data kategori
$kategoris = query("SELECT * FROM kategori");

// tombol kategori ditekan
if (isset($_GET['kategori'])) {
    $cards = cariK($_GET['kategori']);
}

// tombol cari ditekan
if (isset($_POST['judul'])) {
    $cards = cariJ($_POST['judul']);
}

require 'views/news.view.php';
