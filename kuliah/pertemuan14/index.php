<?php
require('functions.php');
$name = 'Home';

// cari data pakai keyword
if (isset($_POST['search'])) {
    $keyword = $_POST['keyword'];
    $query = "SELECT * FROM 
                mahasiswa
            WHERE 
                nim LIKE '%$keyword%' OR
                nama LIKE '%$keyword%' OR
                email LIKE '%$keyword%' OR
                jurusan LIKE '%$keyword%' ";
    $students = query($query);
} else {
    $students = query("SELECT * FROM mahasiswa");
}

require('views/index.view.php');
