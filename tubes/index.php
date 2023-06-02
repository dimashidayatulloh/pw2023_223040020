<?php
session_start();

require 'functions.php';

// add data dari session
if (isset($_SESSION['username'])) {
    $username = $_SESSION['username'];
    $user = query("SELECT * FROM user WHERE username = '$username'")[0];
}

require('views/index.view.php');
