<?php
session_start();

require('functions.php');

// cek session
if (isset($_SESSION["login"])) {
    if ($row["level"] == "admin") {
        header("Location: dashboard.php");
        exit;
    } else {
        header("Location: index.php");
        exit;
    }
} else {
    header("Location: login.php");
    exit;
}

// if (!isset($_SESSION["login"])) {
//     header("Location: login.php");
//     exit;
// }
// cek level
// if ($row['level'] !== 'admin') {
//     header("Location: index.php");
//     exit;
// }
// ui
require('views/dashboard.view.php');
