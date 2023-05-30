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

$name = 'Home';

// Siapkan data $users 
$users = query("SELECT * FROM user");

require 'views/dashboard.view.php';
