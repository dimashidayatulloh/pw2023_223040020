<?php

session_start();

// cek session
if (!isset($_SESSION["admin_name"])) {
    header("Location: login.php");
    exit;
} else if (!isset($_SESSION["user_name"])) {
    header("Location: login.php");
    exit;
}

require('datas.php');

require('views/news.view.php');
