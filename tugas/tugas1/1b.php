<?php
$i = 20;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 1b</title>
</head>

<body>
    <?php
    echo "Aku adalah angka <b>$i</b><br>";
    $i = $i * 5;
    echo "Jika aku dikali 5, maka aku sekarang menjadi <b>$i</b><br>";
    $i = $i / 2;
    echo "Jika aku dibagi 2, maka aku sekarang menjadi <b>$i</b><br>";
    $i = $i + 75;
    echo "Jika aku ditambah 75, maka aku sekarang menjadi <b>$i</b><br>";
    $i = $i - 20;
    echo "Jika aku dikurangi 20, maka aku sekarang menjadi <b>$i</b><br>";
    ?>
</body>

</html>