<?php

require_once __DIR__ . '/vendor/autoload.php';
require 'functions.php';

// Siapkan data user
$users = query("SELECT * FROM user");

$mpdf = new \Mpdf\Mpdf();

$html = '<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Halaman admin</title>
</head>
<style>
    body {
        font-family: arial;
    }
    tr:nth-child(even) {
        background-color: #eaeaea;
    }
</style>
<body>

            <table border="1" cellpadding="10" cellspacing="0">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Gambar</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Email</th>
                        <th scope="col">Level</th>
                    </tr>
                </thead>
                <tbody>';
$i = 1;
foreach ($users as $user) {
    $html .= '<tr>
                            <td>' . $i++ . '</td>
                            <td><img src="img/' . $user["gambar"] . '" width="50px" height="50px"></td>
                            <td>' . $user["username"] . '</td>
                            <td>' . $user["email"] . '</td>
                            <td>' . $user["level"] . '</td>
                        </tr>';
}

$html .= '</tbody>
</table>

</body>

</html>';


$mpdf->WriteHTML($html);
$mpdf->Output();
