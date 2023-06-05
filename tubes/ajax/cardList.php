<?php
require '../functions.php';

$judul = $_GET['judul'];

$query = "SELECT * FROM postingan 
    WHERE 
        judul LIKE '%$judul%' ";
$cards = query($query);
?>

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