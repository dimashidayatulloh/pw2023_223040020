<?php
require('partials/header.php');

if (isset($_SESSION["username"])) {
    include "partials/nav_login.php";
} else {
    include "partials/nav.php";
}

?>

<!-- Hero -->
<section id="beranda">
</section>

<!-- Berita populer -->
<section id="populer">
    <div class="container mt-5 pt-3">
        <div class="card my-3 mx-auto w-100 shadow">
            <div class="row g-3">
                <div class="col-md-7">
                    <img src="img/rn10p.jpg" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-5">
                    <div class="card-body">
                        <p class="card-text"><small class="text-muted">Mar 27, 2023</small></p>
                        <h5 class="card-title">Redmi Note 10 Pro</h5>
                        <p class="card-text">This is a wider card with supporting text ...</p>
                        <a href="artikel/artikel.php" class="btn btn-primary">Read More</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col">
                <div class="card h-100 shadow">
                    <img src="img/smartphone.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text"><small class="text-muted">Mar 27, 2023</small></p>
                        <h5 class="card-title">Sejarah Smartphone</h5>
                        <p class="card-text">This is a wider card with supporting text ...</p>
                        <a href="artikel/artikel1.php" class="btn btn-primary">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100 shadow">
                    <img src="img/smartphone.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text"><small class="text-muted">Mar 27, 2023</small></p>
                        <h5 class="card-title">Sejarah Smartphone</h5>
                        <p class="card-text">This is a wider card with supporting text ...</p>
                        <a href="artikel/artikel1.php" class="btn btn-primary">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100 shadow">
                    <img src="img/smartphone.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text"><small class="text-muted">Mar 27, 2023</small></p>
                        <h5 class="card-title">Sejarah Smartphone</h5>
                        <p class="card-text">This is a wider card with supporting text ...</p>
                        <a href="artikel/artikel1.php" class="btn btn-primary">Read More</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- btn -->
        <button type="button" class="btn btn-primary my-5">View All</button>
    </div>
</section>

<?php
require('partials/footer.php');
?>