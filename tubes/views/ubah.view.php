<?php require('partials/header.php'); ?>
<?php require('partials/nav_admin.php'); ?>

<!-- form -->
<div class="py-4"></div>
<div class="card shadow mx-auto mt-5" style="max-width: 500px;">
    <div class="card-body">
        <h2 class="text-center mt-3 mb-5">Ubah Data</h2>
        <form action="" method="post" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?= $user['id']; ?>">
            <input type="hidden" name="gambarLama" value="<?= $user['gambar']; ?>">
            <div class="mb-3">
                <label for="username" class="form-label">username</label>
                <input type="text" class="form-control" name="username" id="username" autofocus required value="<?= $user['username']; ?>">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" name="email" id="email" required value="<?= $user['email']; ?>">
            </div>
            <div class="mb-3">
                <label for="level" class="form-label">Level</label>
                <input type="text" class="form-control" name="level" id="level" required value="<?= $user['level']; ?>">
            </div>
            <div class="mb-3">
                <label for="gambar" class="form-label">Gambar</label><br>
                <img src="img/<?= $user['gambar']; ?>" alt="" class="img img-thumbnail mb-2" width="75">
                <input type="file" class="form-control form-control-sm" name="gambar" id="gambar">
            </div>
            <button class="btn btn-primary" type="submit" name="ubah">Ubah Data</button>
        </form>

    </div>
</div>

<!-- bootstrap 5 js -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>