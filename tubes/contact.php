<?php

session_start();

// cek session
if ((!isset($_SESSION['user_name'])) || (!isset($_SESSION['admin_name']))) {
    header("Location: login.php");
    exit;
}

require('views/contact.view.php');
