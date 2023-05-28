<?php
session_start();

require 'functions.php';

// cek session
if (isset($_SESSION["login"])) {
    header("Location: index.php");
    exit;
}

// alert user 
if (isset($_POST["register"])) {
    if (register($_POST) > 0) {
        echo "<script>
                alert('User baru berhasil ditambahkan!');
                window.location.href='login.php';
              <script>";
        exit;
    } else {
        echo mysqli_error($conn);
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DAFTAR</title>
    <!-- bootstrap cdn -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
</head>

<body style="background: url(img/blur-hero.jpg);
            background-size: cover;">
    <div class="card shadow mx-auto mt-5" style="max-width: 400px;">
        <div class="card-body">
            <h2 class="text-center">DAFTAR</h2>
            <form action="" method="post" autocomplete="off">
                <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" class="form-control" id="username" name="username" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                </div>
                <div class="mb-3">
                    <label for="password2" class="form-label">Confirm Password</label>
                    <input type="password" class="form-control" id="password" name="password2" required>
                </div>
                <button type="submit" name="register" class="btn btn-success w-100">Daftar</button>
            </form>
            <hr>
            <p class="text-center mb-2">Sudah punya akun? <a style="text-decoration: none;" href="login.php">Masuk</a></p>
        </div>
    </div>

    <!-- bootstrap 5 js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>