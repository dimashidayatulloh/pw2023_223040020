<?php
session_start();

require('functions.php');

// cek session
if (!isset($_SESSION["username"])) {

    header("Location: index.php");
    exit;
}

// ubah data
$username = $_SESSION['username'];

$user = query("SELECT * FROM user WHERE username = '$username'")[0];
if (isset($_POST["ubah"])) {
    if (ubah($_POST) > 0) {
        echo "<script>
                alert('Data berhasil diubah!');
                document.location.href = 'profil.php';
              </script>";
    }
}

require "views/profile.view.php";
