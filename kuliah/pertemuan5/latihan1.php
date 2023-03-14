<?php

$hari = array('Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu', 'Minggu');
$mahasiswa = array('Dimas', 'Fadhlul', 'Fauzan', 'Ahmad', 'Bintang');
$bulan = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'July', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];
$myArray = ['Dimas', 19, true];
$binatang = ['🐕', '🐄', '🦖'];

// Mencetak Array
echo $hari[1];
echo "<hr>";
var_dump($hari);
echo "<hr>";
print_r($bulan);
echo "<hr>";
var_dump($myArray);
echo "<hr>";

// Manipulasi Array
$mahasiswa[] = 'Diaz';
print_r($mahasiswa);
echo "<hr>";
$hari[0] = 'Lebaran';
print_r($hari);
echo "<hr>";

// Menambah elemen di akhir menggunakan array_push()
array_push($bulan, 'April', 'Mei', 'Juni');
print_r($bulan);
echo "<hr>";

// Menambah elemen di awal menggunakan array_unshift()
array_unshift($binatang, '🐊');
print_r($binatang);
echo "<hr>";

// Menghapus elemen di akhir menggunakan array_pop()
array_pop($hari);
print_r($hari);
echo "<hr>";

// Menghapus elemen di awal menggunakan array_shift()
array_shift($hari);
print_r($hari);
