<?php
require('functions.php');
$name = 'Tambah Data Mahasiswa';

if (isset($_POST["tambah"])) {
    if (tambah($_POST) > 0) {
        echo "<script>
                alert('Data berhasil ditambahkan!');
                document.location.href = 'index.php';
              </script>";
    }
}

// Siapkan data $students 
$students = query("SELECT * FROM mahasiswa");

require('views/tambah.view.php');
