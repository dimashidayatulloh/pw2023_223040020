<?php

define('BASE_URL', '/pw2023_223040020/tubes/');

$conn = mysqli_connect("localhost", "root", "", "phpdasar");

function query($query)
{
    global $conn;
    $result = mysqli_query($conn, $query) or die(mysqli_error($conn));

    $rows = [];

    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

// tambah data
function tambah($data)
{
    global $conn;

    $username = $data['username'];
    $email = $data['email'];
    $level = $data['level'];
    $gambar = $data['gambar'];


    $query = "INSERT INTO mahasiswa VALUES (null, '$username', '$email', '$level', '$gambar')";
    mysqli_query($conn, $query) or die(mysqli_error($conn));

    return mysqli_affected_rows($data);
}

// registrasi
function register($data)
{
    global $conn;

    $username = strtolower(stripslashes($data["username"]));
    $email = strtolower(stripslashes($data["email"]));
    $password = mysqli_real_escape_string($conn, $data["password"]);
    $password2 = mysqli_real_escape_string($conn, $data["password2"]);

    // cek username
    $result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username'");
    if (mysqli_fetch_assoc($result)) {
        echo "<script>alert('username sudah terdaftar!')</script>";
        return false;
    }

    // cek confirm password
    if ($password !== $password2) {
        echo "<script>
                alert('konfirmasi password tidak sesuai!');
              </script>";
        return false;
    }

    // eknkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);

    // Tambahkan user baru ke db
    mysqli_query($conn, "INSERT INTO user VALUES( null, '$username', '$email', '$password')");

    return mysqli_affected_rows($conn);
}

function uriIS($uri)
{
    return ($_SERVER["REQUEST_URI"] === BASE_URL) ? 'active' : '';
}
