<?php
require 'partials/contact.header.php';

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

<!-- Kontak -->
<section id="contact" class="mt-5 pt-5 container">
    <div class="card my-3 mx-auto w-100 shadow">
        <div class="row g-3">
            <div class="col-md-7">
                <img src="img/kontak.jpg" class="img-fluid pt-4">
            </div>
            <div class="col-md-5">
                <div class="card-body">
                    <div class="container py-3">
                        <h2 class="text-center mb-5">Kontak kami</h2>
                        <form action="" method="post">
                            <input type="hidden" name="id_user" value="<?= $user['id']; ?>">
                            <div class="mb-3">
                                <label for="nama" class="form-label">Nama</label>
                                <input type="text" class="form-control" id="nama" name="nama" placeholder="nama anda" required>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="email anda" required>
                            </div>
                            <div class="mb-3">
                                <label for="pesan" class="form-label">Pesan</label>
                                <textarea class="form-control" id="pesan" name="pesan" rows="5" placeholder="tulis pesan anda" required></textarea>
                            </div>
                            <button type="submit" class="btn btn-success w-100" name="kirimPesan">Kirim</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- bootstrap 5 js -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>