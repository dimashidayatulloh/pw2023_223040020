<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Berita : Guardian Tales Mobile</title>
    <!-- bootstrap cdn -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <!-- css -->
    <link rel="stylesheet" href="css/artikel.css">
</head>

<body>
    <?php
    // header
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

    <section id="main">
        <div class="container px-5 small">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php" class="text-decoration-none">Beranda</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Artikel</li>
                </ol>
            </nav>
        </div>

        <div class="container px-5">
            <div class="row">
                <div class="col-md-8">
                    <h2 class="card-title pb-3">Guardian Tales Mobile</h2>
                    <img src="img/gt-1.jpg" class="card-img-top img" alt="smartphone">
                    <div class="card-body">
                        <p class="card-text py-1"><small class="text-muted">Maret 27, 2023</small></p>

                        <p>
                            Guardian Tales adalah game RPG petualangan yang penuh dengan puzzle dan jalan tersembunyi di setiap dunia yang unik! Dengan banyak senjata dan pahlawan untuk dikoleksi, kamu dapat bermain dengan Pahlawan lain di Raid atau bertarung satu sama lain di Arena dan Colosseum. Setelah kesuksesannya dengan Global Launch mereka, Guardian Tales menerima banyak feedback. Para player mengatakan bahwa game ini cukup menarik untuk dimainkan.
                        </p>

                        <img src="img/gt-2.jpg" class="card-img-top px-5 pb-3" alt="smartphone">
                        <p>
                            Untuk membuat semuanya lebih menarik, Guardian Tales telah merilis Summoning Event dimana pemain dapat melakukan 10x summon GRATIS setiap hari! Event ini dimulai pada 26 Agustus dan berakhir pada Minggu, 30 Agustus. Pemain dapat memilih tipe summon apa saja yang diinginkan untuk summon secara gratis, baik itu Pick-Up banner atau Normal Summon untuk Pahlawan dan Equipment!
                        </p>
                        <h4>Side story</h4>
                        <p>
                            Guardian Tales juga merilis event cerita: Once Upon a Time in Burywood dimana pemain dapat mengumpulkan poin event dari babak cerita dan retakan untuk ditukarkan dengan hadiah. Bersamaan dengan itu, mereka merilis karakter baru, Dragon Avatar Vishuvac, bersama dengan senjata eksklusifnya, Volcanic Horn! Karakter ini bisa didapatkan melalui Hero summon hingga 8 September!
                        </p>

                        <h4>Event</h4>
                        <p>
                            Guardian Tales juga mengadakan event komunitas - Perburuan Harta Karun Rachel yang berlangsung hingga 10 September.Temukan harta karun dengan voting koordinat yang kamu inginkan di map dan vote tertinggi akan digali! 5 pemenang terpilih juga akan mendapatkan hadiah bonus.

                            Tidak menyenangkan melakukan petualangan solo! Kamu bisa bertemu Guardian lain di server Discord mereka dan mendapatkan pengumuman terbaru di halaman Facebook mereka! Sampai jumpa di sana, Guardian!
                        </p>
                        <p>
                            Official Facebook Page: <a href="https://www.facebook.com/guardiantales/">Guardian Tales Facebook</a>
                        </p>
                        <p>
                            Official Discord: <a href="https://discord.com/invite/mmznZ3V">Guardian Tales Discord</a>
                        </p>

                    </div>
                </div>

                <div class="col-md-4" id="lainnya">
                    <h4 class="card-title py-3 ps-5">Berita lainnya</h4>

                    <div class="card mb-3" style="width: 17rem;">
                        <img src="img/rn10p.jpg" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">Redmi Note 10 Pro</h5>
                            <p class="card-text">
                                Xiaomi selalu mengeluarkan smartphone yang memiliki harga ...
                                <a href="artikel.php">Lihat Selengkapnya</a>
                            </p>
                        </div>
                    </div>

                    <div class="card mb-3" style="width: 17rem;">
                        <img src="img/laptop-1.jpg" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">Rekomendasi Laptop Harga 4 jutaan</h5>
                            <p class="card-text">
                                Semakin berkembangnya teknologi informasi dan teknolo ...
                                <a href="artikel1.php">Lihat Selengkapnya</a>
                            </p>
                        </div>
                    </div>

                    <div class="card mb-3" style="width: 17rem;">
                        <img src="img/indihome.jpg" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">Integrasi Indihome ke Telkomsel</h5>
                            <p class="card-text">
                                PT Telkom Indonesia (Persero) Tbk memperoleh ...
                                <a href="artikel3.php">Lihat Selengkapnya</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Footer -->
    <?php
    require "partials/footer.php";
    ?>