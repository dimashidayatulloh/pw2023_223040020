<?php

function hitungLuasLingkaran($r)
{
    echo "<h4>Menghitung Luas Lingkaran</h4>";
    echo "Jari-jari = $r cm. <br>";
    echo "Luas Lingkaran = " . 3.14 * $r * $r . "<hr>";
}

function hitungKelilingLingkaran($r)
{
    echo "<h4>Menghitung Keliling Lingkaran</h4>";
    echo "Jari-jari = $r cm. <br>";
    echo "Keliling Lingkaran = " . 3.14 * ($r * 2) . "<hr>";
}

hitungLuasLingkaran(10);
hitungKelilingLingkaran(20);
