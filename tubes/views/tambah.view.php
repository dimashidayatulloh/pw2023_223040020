<?php require('partials/header.php'); ?>
<?php require('partials/nav_login.php'); ?>

<div class="py-4"></div>
<div class="card shadow mx-auto mt-5" style="max-width: 500px;">
    <div class="card-body">
        <h2 class="text-center py-3">Tambah Data</h2>
        <form action="" method="post">
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
                <div class="form-check">
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
            <button class="btn btn-primary" type="submit" name="tambah">Tambah Data</button>
        </form>
    </div>
</div>