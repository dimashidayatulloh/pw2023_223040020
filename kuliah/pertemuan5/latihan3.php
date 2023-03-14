<?php
$mahasiswa = [['Dimas', '🐊', '🍕'], ['Samid', '🦖', '🍿'], ['Samidin', '🐄', '🍔']];
echo $mahasiswa[0][0];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
</head>

<body>
    <h2>Daftar Mahasiswa</h2>
    <ul>
        <?php foreach ($mahasiswa as $m) { ?>
            <li>Nama: <?= $m[0]; ?></li>
            <li>Peliharaan: <?= $m[1]; ?></li>
            <li>Makanan Favorit: <?= $m[2]; ?></li>
            <br>
        <?php } ?>
    </ul>
</body>

</html>