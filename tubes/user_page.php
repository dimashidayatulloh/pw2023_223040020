<?php

session_start();

require 'functions.php';

// cek session
if (!isset($_SESSION["username"])) {

    header("Location: index.php");
    exit;
}
if ($_SESSION["level"] != "user") {

    header("Location: index.php");
    exit;
}
