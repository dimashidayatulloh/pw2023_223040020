<?php
require('partials/contact.header.php');

if (isset($_SESSION["username"])) {
    include "partials/nav_login.php";
} else {
    include "partials/nav.php";
}
?>

<!-- Kontak -->
<section id="contact" class="mt-5 pt-5 container">
    <div class="card my-3 mx-auto w-100 shadow">
        <div class="row g-3">
            <div class="col-md-7">
                <img src="img/kontak.jpg" class="img-fluid rounded-start" alt="...">
            </div>
            <div class="col-md-5">
                <div class="card-body">
                    <div class="container py-3">
                        <h2 class="text-center mb-5">Kontak kami</h2>
                        <form>
                            <div class="mb-3">
                                <label for="nama" class="form-label">Nama</label>
                                <input type="text" class="form-control" id="nama" placeholder="nama anda">
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" placeholder="email anda">
                            </div>
                            <div class="mb-3">
                                <label for="pesan" class="form-label">Pesan</label>
                                <textarea class="form-control" id="pesan" rows="3" placeholder="tulis pesan anda"></textarea>
                            </div>
                            <button type="submit" class="btn btn-success w-100">Kirim</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>