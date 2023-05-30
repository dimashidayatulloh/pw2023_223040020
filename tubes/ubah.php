<?php

session_start();

require('functions.php');

// cek session
if (!isset($_SESSION["username"])) {

    header("Location: index.php");
    exit;
}
if ($_SESSION["level"] != "admin") {

    header("Location: index.php");
    exit;
}

// ubah data
$id = $_GET['id'];
$user = query("SELECT * FROM user WHERE id = $id")[0];
if (isset($_POST["ubah"])) {
    if (ubah($_POST) > 0) {
        echo "<script>
                alert('Data berhasil diubah!');
                document.location.href = 'admin_page.php';
              </script>";
    }
}

// Siapkan data user
$users = query("SELECT * FROM user");

require('views/ubah.view.php');
