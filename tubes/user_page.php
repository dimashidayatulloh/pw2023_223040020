<?php

session_start();

require 'functions.php';

// cek session
if (!isset($_SESSION["user_name"])) {

    header("Location: index.php");
    exit;
}
