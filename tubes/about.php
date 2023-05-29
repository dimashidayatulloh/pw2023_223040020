<?php

session_start();

// cek session
if (!isset($_SESSION["username"])) {
    header("Location: login.php");
    exit;
}

require('views/about.view.php');
