<?php
$conn = mysqli_connect("localhost", "root", "", "phpdasar");

function query($query)
{
    // query untuk menampilkan data dari tabel
    global $conn;
    // untuk memanggil variabel conn yang diluar function,karena seperti yang diketahui variabel yang diluar function itu berbeda dengan yang didalam function jadi jika ingin memanggilnya,maka kita buat global dan nama variabelnya 
    $result = mysqli_query($conn, $query);
    // disini ada variabel untuk memanggil variabel yang sudah dibuat untuk memanggil database
    $rows = [];
    // variabel row dibuat array kosong untuk menampung bagian bagian array,variabel row disini bernilai array kosong
    while ($row = mysqli_fetch_assoc($result)) {
        //  jika variabel result adalah array associative(array string),maka isi dari row yang merupakan database akan dimasukkan ke dalam array rows 
        $rows[] = $row;
    }
    return $rows;
}

function register($data)
{
    global $conn;

    $email = strtolower(stripslashes($data["email"]));
    $username = strtolower(stripslashes($data["username"]));
    $password = mysqli_real_escape_string($conn, $data["password"]);
    $password2 = mysqli_real_escape_string($conn, $data["password2"]);

    // cek whitespace username
    if (empty(trim($username))) {
        return false;
    }


    // cek confirm password
    if ($password !== $password2) {
        echo "<script>
                alert('konfirmasi password tidak sesuai!');
                </script>";
        return false;
    } else {
        return true;
    }
}
