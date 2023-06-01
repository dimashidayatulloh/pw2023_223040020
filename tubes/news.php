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

// Siapkan data postingan
$cards = query("SELECT * FROM postingan");

// data kategori
$kategoris = query("SELECT * FROM kategori");

// tombol kategori ditekan
if (isset($_GET['kategori'])) {
    $cards = cariK($_GET['kategori']);
}

require 'views/news.view.php';
