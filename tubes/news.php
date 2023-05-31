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

// Siapkan data $cards 
$cards = query("SELECT * FROM article_list");

require 'views/news.view.php';
