<?php
session_start();

require 'functions.php';

// add data dari session
$username = $_SESSION['username'];

if (isset($username)) {
    $user = query("SELECT * FROM user WHERE username = '$username'")[0];
}

require('views/index.view.php');
