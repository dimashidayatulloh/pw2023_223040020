<?php

session_start();

require "functions.php";

// cek session
if (!isset($_SESSION["username"])) {
    header("Location: login.php");
    exit;
}

// add data dari session
$username = $_SESSION['username'];

$user = query("SELECT * FROM user WHERE username = '$username'")[0];

// tambah data pesan
if (isset($_POST["kirimPesan"])) {
    if (pesan($_POST) > 0) {
        echo "<script>
                alert('Pesan berhasil dikirim!');
                document.location.href = 'contact.php';
              </script>";
    }
}

// Siapkan data pesan 
$data = query("SELECT * FROM pesan");

require('views/contact.view.php');
