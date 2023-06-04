<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Profile</title>
    <!-- bootstrap cdn -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>

<body>
    <?php
    if (isset($_SESSION["username"])) {
        if ($_SESSION["level"] === "admin") {
            include "partials/nav_admin.php";
        } else {
            include "partials/nav_user.php";
        }
    } else {
        include "partials/nav.php";
    }
    ?>

    <div class="container pt-5 mt-4">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php" class="text-decoration-none">Beranda</a></li>
                <li class="breadcrumb-item active" aria-current="page">Profile</li>
            </ol>
        </nav>
    </div>

    <!-- main -->
    <div class="card shadow mx-auto mt-5" style="max-width: 1000px;">
        <div class="d-flex flex-row">
            <div class="card-body col-md-8">
                <form action="" method="post" autocomplete="off enctype=" enctype="multipart/form-data">
                    <input type="hidden" name="id" value="<?= $user['id']; ?>">
                    <input type="hidden" name="level" value="<?= $user['level']; ?>">
                    <input type="hidden" name="gambarLama" value="<?= $user['gambar']; ?>">
                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" class="form-control" id="username" name="username" required value="<?= $user['username']; ?>" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" required value="<?= $user['email']; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="gambar" class="form-label">Ganti Profile</label>
                        <input type="file" class="form-control form-control-sm" name="gambar" id="gambar">
                    </div>
                    <button type="submit" name="ubah" class="btn btn-success me-2">Simpan</button>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalReset">Reset Password</button>
                </form>
            </div>
            <div class="card-body col-md-5 text-center">
                <h5 class="card-title mt-1">Profile</h5>
                <img src="img/<?= $user['gambar']; ?>" class="img img-thumbnail my-2 rounded-circle" width="200">
            </div>
        </div>
        <div class="container pb-5">
            <hr>
        </div>
    </div>

    <!-- modal reset password -->
    <div class="modal" tabindex="-1" id="modalReset">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Reset Password</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="" method="post" autocomplete="off">
                        <input type="hidden" name="id" value="<?= $user['id']; ?>">
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" name="password" required>
                        </div>
                        <div class="mb-3">
                            <label for="password2" class="form-label">Konfirmasi password</label>
                            <input type="password" class="form-control" id="password2" name="password2" required>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary" name="resetPass">Save changes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- bootstrap 5 js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>