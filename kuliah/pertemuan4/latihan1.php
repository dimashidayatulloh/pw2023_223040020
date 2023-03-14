<?php
// $angka = 101;
// Memeriksa apakah $angka itu bilangan ganjil
// Bilangan yang jika dibagi 2 sisa 1

function cek_ganjil_genap($angka, $nama = 'admin')
{
    if ($angka % 2 == 1) {
        echo "Hai $nama, $angka adalah bilangan GANJIL!";
    } else {
        echo "Hai $nama, $angka adalah bilangan GENAP!";
    }
}

cek_ganjil_genap(5, 'Dimas');    //Argument
echo "<br>";
cek_ganjil_genap(10);
echo "<br>";
cek_ganjil_genap(101, 'Samid');

//
