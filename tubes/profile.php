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

// reset password
if (isset($_POST["resetPass"])) {
    if (resetPass($_POST) > 0) {
        echo "<script>
                alert('Password berhasil diubah!');
                document.location.href = 'profile.php';
              </script>";
    }
}

require "views/profile.view.php";
