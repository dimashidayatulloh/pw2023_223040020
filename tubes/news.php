<?php

session_start();

require 'functions.php';

// cek session
if (!isset($_SESSION["username"])) {
    header("Location: login.php");
    exit;
}

// Siapkan data $cards 
$cards = query("SELECT * FROM article_list");

require 'views/news.view.php';
