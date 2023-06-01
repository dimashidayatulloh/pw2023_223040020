<?php require('partials/header.php'); ?>
<?php require('partials/nav_admin.php'); ?>

<div class="py-4"></div>
<div class="card shadow mx-auto mt-4" style="max-width: 500px;">
    <div class="card-body">
        <h2 class="text-center py-3">Tambah Data</h2>
        <form action="" method="post" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control" name="username" id="username" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="text" class="form-control" name="email" id="email" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">password</label>
                <input type="password" class="form-control" name="password" id="password" required>
            </div>
            <div class="mb-3">
                <label for="password2" class="form-label">Confirm Password</label>
                <input type="password" class="form-control" name="password2" id="password2" required>
            </div>
            <div class="mb-3">
                <label for="level" class="form-label">Level</label>
                <div class="d-flex flex-row">
                    <div class="form-check me-5">
                        <input class="form-check-input" type="radio" name="level" id="level" value="admin">
                        <label class="form-check-label" for="level">
                            admin
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="level" id="level" value="user">
                        <label class="form-check-label" for="level">
                            user
                        </label>
                    </div>
                </div>
            </div>
            <div class="mb-3">
                <label for="gambar" class="form-label">Gambar</label>
                <input type="file" class="form-control form-control-sm" name="gambar" id="gambar">
            </div>
            <button class="btn btn-primary w-100" type="submit" name="tambah">Tambah Data</button>
        </form>
    </div>
</div>

<!-- bootstrap 5 js -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>