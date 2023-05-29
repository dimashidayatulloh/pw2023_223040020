<?php

session_start();

require 'functions.php';

// cek session
if (!isset($_SESSION["admin_name"])) {

    header("Location: index.php");
    exit;
}

require 'views/dashboard.view.php';
