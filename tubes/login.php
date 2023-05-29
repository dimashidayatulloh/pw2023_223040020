<?php
session_start();

require 'functions.php';

// cek session
if (isset($_SESSION['username'])) {
    header("Location: index.php");
    exit;
}

if (isset($_POST["login"])) {

    $username = $_POST["username"];
    $password = $_POST["password"];

    $result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");

    // cek username
    if (mysqli_num_rows($result) === 1) {

        // cek password
        $row = mysqli_fetch_assoc($result);
        if (password_verify($password, $row["password"])) {

            // set session
            $_SESSION["username"] = $row["username"];
            $_SESSION["level"] = $row["level"];

            if ($row["level"] == "admin") {
                header('location:admin_page.php');
                exit;
            } else {
                header('location:user_page.php');
                exit;
            }
        } else {
            $error = true;
        }
    } else {
        $error = true;
    }
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MASUK</title>
    <!-- bootstrap cdn -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>

<body style="background: url(img/blur-hero.jpg);
            background-size: cover;background-repeat:no-repeat;">
    <div class="card shadow mx-auto mt-5" style="max-width: 400px;">
        <div class="card-body">
            <h2 class="text-center pb-2">MASUK</h2>
            <!-- error -->
            <?php if (isset($error)) : ?>
                <div class="alert alert-danger" role="alert" id="alert">
                    Username atau Password salah!
                </div>
            <?php endif; ?>

            <form action="" method="post" autocomplete="off">
                <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" class="form-control" id="username" name="username" required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="rememberme">
                    <label class="form-check-label" for="rememberme">Remember me</label>
                </div>
                <button type="submit" class="btn btn-success w-100" name="login">Masuk</button>
            </form>
            <hr>
            <p class="text-center mb-2">Belum punya akun? <a style="text-decoration:none;" href="register.php">Daftar</a></p>
        </div>
    </div>

    <!-- bootstrap 5 js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js">
    </script>
</body>

</html>