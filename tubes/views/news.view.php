<?php

require('partials/news.header.php');

if (isset($_SESSION["username"])) {
    include "partials/nav_login.php";
} else {
    include "partials/nav.php";
}
?>

<!-- hero -->
<section class="list-card">
    <div class="d-flex justify-content-center align-items-center" id="hero">
        <h2 class="text-center text-white fw-bold">ARTIKEL</h2>
    </div>
    <!-- card -->
    <div class="container p-5">
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <?php foreach ($cards as $card) : ?>
                <div class="col">
                    <div class="card h-100 shadow">
                        <img src="img/<?= $card["image"]; ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text"><small class="text-muted">Mar 27, 2023</small></p>
                            <h5 class="card-title"><?= $card["title"]; ?></h5>
                            <p class="card-text"><?= $card["description"]; ?></p>
                            <a href="artikel/artikel1.php" class="btn btn-primary">Baca Selengkapnya</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<section class="position-absolute pb-5 start-50 translate-middle">
    <div class="container">
        <nav aria-label="Page navigation">
            <ul class="pagination">
                <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">Next</a></li>
            </ul>
        </nav>
    </div>
</section>

<?php
require('partials/footer.php');
?>