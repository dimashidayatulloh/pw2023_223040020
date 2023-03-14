<?php
$mahasiswa = [
    [
        "nama" => "Sandhika Galih",
        "nrp" => "043040023",
        "email" => "sandhikagalih@unpas.ac.id",
        "jurusan" => "Teknik Informatika",
        "gambar" => "sandhika.jpg"
    ],
    [
        "nama" => "Doddy Ferdiansyah",
        "nrp" => "033040001",
        "email" => "doddy@gmail.com",
        "jurusan" => "Teknik Industri",
        "gambar" => "doddy.jpg"
    ],
    [
        "nama" => "Dimas Hidayatulloh",
        "nrp" => "223040020",
        "email" => "dimas@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "batman.jpg"
    ],
    [
        "nama" => "Fadhlul Nur Mahfuzh",
        "nrp" => "223040021",
        "email" => "fadhlul@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "Wiro.jpg"
    ],
    [
        "nama" => "Diaz Alfiari Rachmad",
        "nrp" => "223040024",
        "email" => "diaz@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "flash.jpg"
    ],
    [
        "nama" => "Ahmad Mulia Huda",
        "nrp" => "223040029",
        "email" => "ahmad@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "superman.jpg"
    ],
    [
        "nama" => "Muhammad Fauzan Dwi Putera",
        "nrp" => "223040033",
        "email" => "fauzan@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "joker.jpg"
    ],
    [
        "nama" => "Pramudya Dimas Wilanda",
        "nrp" => "223040005",
        "email" => "pramudya@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "xeniel.jpg"
    ],
    [
        "nama" => "Bintang Arya Putra Yusar",
        "nrp" => "223040032",
        "email" => "bintang@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "lumbur.jpg"
    ],
    [
        "nama" => "Hikmal Ryvaldi Pelu",
        "nrp" => "223040023",
        "email" => "hikmal@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "ybneth.jpg"
    ]
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 5a</title>
</head>

<body>
    <h1>Daftar Mahasiswa</h1>
    <?php foreach ($mahasiswa as $mhs) : ?>
        <ul>
            <li>
                <img src="img/<?= $mhs["gambar"]; ?>">
            </li>
            <li>Nama : <?= $mhs["nama"]; ?></li>
            <li>NRP : <?= $mhs["nrp"]; ?></li>
            <li>Jurusan : <?= $mhs["jurusan"]; ?></li>
            <li>Email : <?= $mhs["email"]; ?></li>
        </ul>
    <?php endforeach; ?>
</body>

</html>