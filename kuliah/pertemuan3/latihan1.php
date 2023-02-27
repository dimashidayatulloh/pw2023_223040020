<?php

$nama_lengkap = "Dimas Hidayatulloh";

// 3. Increment / Decrement

$nilai_awal = 1; // Inisialisasi
echo "Mulai.<br>";
while ($nilai_awal <= 10) {     // Kondisi terminasi
    echo "Hello World " . $nilai_awal . "x <br>";
    $nilai_awal++;
}

echo "<hr>";

$nilai_awal = 10; // Inisialisasi
echo "Mulai.<br>";
while ($nilai_awal >= 1) {     // Kondisi terminasi
    echo "Hello World " . $nilai_awal . "x <br>";
    $nilai_awal--;
}

echo "<hr>";

$nilai_awal = 1; // Inisialisasi
echo "Mulai.<br>";
while ($nilai_awal <= 10) {     // Kondisi terminasi
    echo "Hello World " . $nilai_awal . "x <br>";
    $nilai_awal += 2;
}

echo "<hr>";

$nilai_awal = 2; // Inisialisasi
echo "Mulai.<br>";
while ($nilai_awal <= 10) {     // Kondisi terminasi
    echo "Hello World " . $nilai_awal . "x <br>";
    $nilai_awal += 2;
}

echo "<hr>";

for ($i = 1; $i <= 10; $i++) {   // Kondisi
    echo "Angkot no." . $i . " beroperasi dengan baik. <br>";
}
