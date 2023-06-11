<?php

require('functions.php');

$name = 'Ubah Data Mahasiswa';
$id = $_GET['id'];
$student = query("SELECT * FROM mahasiswa WHERE id = $id")[0];
if (isset($_POST["ubah"])) {
    if (ubah($_POST) > 0) {
        echo "<script>
                alert('Data berhasil diubah!');
                document.location.href = 'index.php';
              </script>";
    }
}

// Siapkan data $students 
$students = query("SELECT * FROM mahasiswa");

require('views/ubah.view.php');
