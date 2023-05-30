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

// tambah data
if (isset($_POST["tambah"])) {
    if (tambah($_POST) > 0) {
        echo "<script>
                alert('Data berhasil ditambahkan!');
                document.location.href = 'admin_page.php';
              </script>";
    }
}

// Siapkan data user 
$data = query("SELECT * FROM user");

require('views/tambah.view.php');
