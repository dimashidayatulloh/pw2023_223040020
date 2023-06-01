<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <!-- bootstrap cdn -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
</head>

<body>
    <?php include "partials/nav_admin.php"; ?>
    <!-- Nav -->
    <div class="container pt-5 mt-4">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php" class="text-decoration-none">Beranda</a></li>
                <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
            </ol>
        </nav>
    </div>

    <!-- daftar -->
    <div class="container my-5">
        <div class="card-body text-center pb-5">
            <h2 class="card-title">Daftar Pengguna</h2>
        </div>

        <!-- Button tambah -->
        <div class="position-absolute">
            <button type="button" class="btn btn-success">
                <a class="nav-link" href="tambah.php">Add New List</a>
            </button>
        </div>

        <!-- live search -->
        <form class="d-flex justify-content-end" role="search" action="" method="post">
            <input class="form-control me-2 w-25" type="search" placeholder="Search" aria-label="Search" name="keyword" autocomplete="off" id="keyword">
            <button class="btn btn-outline-success" type="submit" name="cari" id="tombol-cari">Search</button>
        </form>

        <hr>

        <div class="card" id="tabel">
            <!-- Table -->
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Gambar</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Email</th>
                        <th scope="col">Level</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($users as $user) : ?>
                        <tr>
                            <th scope="row"><?= $i++; ?></th>
                            <td><img src="img/<?= $user['gambar']; ?>" alt="" class="img img-thumbnail rounded-circle" width="50px" height="50px"></td>
                            <td><?= $user["username"]; ?></td>
                            <td><?= $user["email"]; ?></td>
                            <td><?= $user["level"]; ?></td>
                            <td>
                                <a class="btn btn-sm btn-primary" href="ubah.php?id=<?= $user['id']; ?>">Ubah</a>
                                <a class="btn btn-sm btn-danger" href="hapus.php?id=<?= $user['id']; ?>">Hapus</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>

    <!-- bootstrap 5 js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

    <script src="js/script.js"></script>
</body>

</html>