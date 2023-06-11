<?php
require "partials/header.php";
?>

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

<!-- Hero -->
<section class="heroContent">
    <div class="container textBox">
        <h2>Selamat <span>Datang</span></h2><br>
        <p>Semoga harimu menyenangkan!</p>
        <a href="" class="btn btn-primary rounded-pill">Get started</a>
    </div>
    <div class="imgBox">
        <img src="img/bg_landing.png" class="pe-5" width="750px">
    </div>
</section>

<!-- Berita populer -->
<section>
    <div class="container mt-5 pt-3">
        <div class="card my-3 mx-auto w-100 shadow">
            <div class="row g-3">
                <div class="col-md-7">
                    <img src="img/rn10p.jpg" class="img-fluid rounded-start">
                </div>
                <div class="col-md-5">
                    <div class="card-body">
                        <p class="card-text"><small class="text-muted">Juni 02, 2023</small></p>
                        <h5 class="card-title">Redmi Note 10 Pro</h5>
                        <p class="card-text">
                            Xiaomi selalu mengeluarkan smartphone yang memiliki harga ...
                            <a href="artikel.php">Lihat Selengkapnya</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col">
                <div class="card h-100 shadow">
                    <img src="img/laptop-1.jpg" class="card-img-top" height="250px">
                    <div class="card-body">
                        <p class="card-text"><small class="text-muted">Juni 02, 2023</small></p>
                        <h5 class="card-title">Rekomendasi Laptop 4 jutaan</h5>
                        <p class="card-text">
                            Semakin berkembangnya teknologi informasi dan teknologi ...
                            <a href="artikel1.php">Lihat Selengkapnya</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100 shadow">
                    <img src="img/gt-1.jpg" class="card-img-top" height="250px">
                    <div class="card-body">
                        <p class="card-text"><small class="text-muted">Juni 02, 2023</small></p>
                        <h5 class="card-title">Guardian Tales</h5>
                        <p class="card-text">
                            Guardian Tales adalah game RPG petualangan yang penuh dengan puzzle dan ...
                            <a href="artikel2.php">Lihat Selengkapnya</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100 shadow">
                    <img src="img/indihome.jpg" class="card-img-top" height="250px">
                    <div class="card-body">
                        <p class="card-text"><small class="text-muted">Juni 02, 2023</small></p>
                        <h5 class="card-title">Integrasi Indihome ke Telkomsel</h5>
                        <p class="card-text">
                            PT Telkom Indonesia (Persero) Tbk memperoleh persetujuan ...
                            <a href="artikel3.php">Lihat Selengkapnya</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- btn -->
        <button type="button" class="btn btn-primary my-5"><a href="news.php" class="text-white text-decoration-none">View All</a></button>
    </div>
</section>

<?php
require "partials/footer.php";
?>