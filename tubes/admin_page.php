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

// Siapkan data user
$users = query("SELECT * FROM user");

// tombol cari ditekan
if (isset($_POST['cari'])) {
    $users = cari($_POST['keyword']);
}

require 'views/dashboard.view.php';
