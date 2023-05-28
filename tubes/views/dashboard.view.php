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
    <!-- Nav -->
    <div class="container pt-5">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Beranda</a></li>
                <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
            </ol>
        </nav>
    </div>

    <!-- daftar -->
    <div class="container my-5">
        <div class="card-body text-center pb-5">
            <h2 class="card-title">Daftar Pengguna</h2>
        </div>
        <div class="card">
            <!-- Button trigger modal -->
            <button id="create" type="button" class="btn btn-success position-absolute" data-bs-toggle="modal" data-bs-target="#exampleModal" style="top: -38px;right:0;">
                Add New List
            </button>
            <!-- Table -->
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Email</th>
                        <th scope="col">Ubah</th>
                        <th scope="col">Info</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Subaru</td>
                        <td>subaru@mail.com</td>
                        <td>
                            <a class="btn btn-sm btn-primary" href="#">Ubah</a>
                            <a class="btn btn-sm btn-danger" href="#">Hapus</a>
                        </td>
                        <td><a class="btn btn-sm btn-info" href="#">Selengkapnya</a></td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Colly</td>
                        <td>colly@mail.com</td>
                        <td>
                            <a class="btn btn-sm btn-primary" href="#">Ubah</a>
                            <a class="btn btn-sm btn-danger" href="#">Hapus</a>
                        </td>
                        <td><a class="btn btn-sm btn-info" href="#">Selengkapnya</a></td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Larry</td>
                        <td>larry@mail.com</td>
                        <td>
                            <a class="btn btn-sm btn-primary" href="#">Ubah</a>
                            <a class="btn btn-sm btn-danger" href="#">Hapus</a>
                        </td>
                        <td><a class="btn btn-sm btn-info" href="#">Selengkapnya</a></td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah akun</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <!-- form -->
                        <div class="card-body">
                            <form>
                                <div class="mb-3">
                                    <label for="username" class="form-label">Username</label>
                                    <input type="text" class="form-control" id="username" required>
                                </div>
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email address</label>
                                    <input type="email" class="form-control" id="email" aria-describedby="emailHelp" required>
                                </div>
                                <div class="mb-3">
                                    <label for="password" class="form-label">Password</label>
                                    <input type="password" class="form-control" id="password" required>
                                </div>
                                <div class="mb-3">
                                    <label for="password" class="form-label">Confirm Password</label>
                                    <input type="password" class="form-control" id="password" required>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                        <button type="button" class="btn btn-primary">Simpan</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- bootstrap 5 js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>