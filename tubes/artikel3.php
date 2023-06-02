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

if (isset($username)) {
    $user = query("SELECT * FROM user WHERE username = '$username'")[0];
}

require "views/artikel3.view.php";
