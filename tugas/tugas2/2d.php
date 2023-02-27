<?php
for ($i = 1; $i <= 5; $i++) {
    for ($j = 1; $j <= 5; $j++) {
        if (($i + $j) % 2 == 0) {
            echo "<span class='hitam'></span>";
        } else {
            echo "<span></span>";
        }
    }
    echo '<br/>';
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 2c</title>
</head>
<style>
    span {
        padding: 30px;
        display: inline-block;
        border: 1px solid;
    }

    .hitam {
        background-color: #000;
    }
</style>

<body>
</body>

</html>