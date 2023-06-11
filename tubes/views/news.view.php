<?php
require('partials/news.header.php');

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

<!-- hero -->
<section class="list-card pt-5">
    <div class="d-flex justify-content-center align-items-center" id="hero">
        <h2 class="text-center text-white fw-bold">ARTIKEL</h2>
    </div>
    <!-- card -->
    <div class="container p-5">
        <div class="row mb-3" id="kategori">
            <div class="col-md-3">
                <h1 class="fw-bold">Blog</h1>
            </div>

            <!-- kategori -->
            <div class="col-md-5 pt-2">
                <form action="" method="get">
                    <a class="btn btn-primary me-2" href="news.php" role="button">All</a>
                    <?php foreach ($kategoris as $kategori) : ?>
                        <button class="btn btn-primary me-2" type="submit" name="kategori" value="<?= $kategori["id_kategori"]; ?>"><?= $kategori["nama_kategori"]; ?></button>
                    <?php endforeach; ?>
                </form>
            </div>
            <div class="col-md-4 pt-2">
                <!-- live search -->
                <form class="d-flex justify-content-end" action="" method="post">
                    <input class="form-control me-2 w-50" type="search" placeholder="Search" aria-label="Search" name="judul" autocomplete="off" id="judul">
                    <button class="btn btn-outline-primary" type="submit" name="search" id="search-button">Search</button>
                </form>
            </div>


        </div>
        <div class="row row-cols-1 row-cols-md-3 g-4" id="search-container">
            <!-- list postingan -->
            <?php foreach ($cards as $card) : ?>
                <div class="col">
                    <div class="card shadow">
                        <img src="img/<?= $card["gambar"]; ?>" class="card-img-top" height="230px">
                        <div class="card-body">
                            <p class="card-text"><small class="text-muted">Juni 02, 2023</small></p>
                            <h5 class="card-title"><?= $card["judul"]; ?></h5>
                            <p class="card-text"><?= $card["deskripsi"]; ?><a href="<?= $card["link"]; ?>.php">Baca Selengkapnya</a></p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- pagination -->
<section class="position-absolute start-50 pb-5 translate-middle" id="pagination">
    <div class="container">
        <nav aria-label="Page navigation">
            <ul class="pagination">
                <?php if ($halamanAktif > 1) : ?>
                    <li class="page-item"><a class="page-link" href="?halaman=<?= $halamanAktif - 1; ?>">
                            &lt </a>
                    </li>
                <?php endif; ?>
                <?php for ($j = 1; $j <= $jumlahHalaman; $j++) : ?>
                    <?php if ($j == $halamanAktif) : ?>
                        <li class="page-item"><a class="page-link active" href="?halaman=<?= $j; ?>"><?= $j; ?></a></li>
                    <?php else : ?>
                        <li class="page-item"><a class="page-link" href="?halaman=<?= $j; ?>"><?= $j; ?></a></li>
                    <?php endif; ?>
                <?php endfor; ?>

                <?php if ($halamanAktif < $jumlahHalaman) : ?>
                    <li class="page-item"><a class="page-link" href="?halaman=<?= $halamanAktif + 1; ?>">&gt</a></li>
                <?php endif; ?>
            </ul>
        </nav>
    </div>
</section>

<?php
require('partials/footer.php');
?>