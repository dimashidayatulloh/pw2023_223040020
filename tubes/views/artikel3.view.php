<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Berita : Integrasi Indihome ke Telkomsel</title>
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
                    <h2 class="card-title pb-3">Integrasi Indihome ke Telkomsel</h2>
                    <img src="img/indihome.jpg" class="card-img-top img" alt="gedung telkom">
                    <div class="card-body">
                        <p class="card-text py-1"><small class="text-muted">Maret 27, 2023</small></p>

                        <p>
                            PT Telkom Indonesia (Persero) Tbk memperoleh persetujuan pemegang saham independen atas aksi korporasi pemisahan segmen usaha (spin-off) IndiHome ke Telkomsel dalam Rapat Umum Pemegang Saham Tahunan (RUPST) Tahun Buku 2022.
                        </p>
                        <p>
                            Aksi korporasi yang tergolong sebagai transaksi afiliasi sebagaimana diatur dalam Peraturan Otoritas Jasa Keuangan (POJK) No.42/2020 ini memerlukan persetujuan pemegang saham independen di mana telah tercapai kuorum dan disetujui mayoritas pemegang saham independen.
                        </p>
                        <p>
                            Pemisahan IndiHome dalam rangka implementasi layanan fixed mobile convergence (FMC) merupakan bagian dari strategi utama perusahaan “Five Bold Moves” yang strategis bagi Telkom dalam mendukung terciptanya inklusi digital melalui peningkatan keandalan konektivitas yang lebih luas dan merata bagi masyarakat.
                        </p>
                        <p>
                            Sinergi antara IndiHome dan Telkomsel yang merupakan pemimpin pasar bisnis broadband diharapkan akan memudahkan masyarakat dalam mengakses beragam layanan digital.
                        </p>
                        <p>
                            Telkomsel akan memiliki mesin pertumbuhan baru yang akan memperkuat kinerja ke depannya. Dari sisi bisnis, integrasi layanan broadband ini diharapkan dapat menjadikan belanja modal (capital expenditure) perusahaan lebih efisien dan mampu menciptakan nilai yang optimal bagi seluruh pemangku kepentingan.
                        </p>
                        <p>
                            "Sejalan dengan arahan Menteri BUMN Erick Thohir, Telkomsel akan fokus menjalankan segmen business to customer (B2C) dan Telkom pada segmen business to business (B2B)," kata Direktur Utama Telkom Ririek Adriansyah di Jakarta, Selasa, 30 Mei 2023. Menurutnya, persetujuan atas implementasi FMC menjadi penting dalam langkah transformasi perseroan untuk menciptakan nilai yang optimal baik bagi perusahaan, pelanggan, masyarakat, pemegang saham, dan pemerintah.
                        </p>
                        <p>
                            Selain itu, integrasi layanan tersebut sejalan dengan fokus Telkom untuk menjadi pemain dan pemimpin di pasar B2B. Dengan diperolehnya persetujuan pemegang saham independen, maka proses integrasi IndiHome ke Telkomsel diharapkan selesai pada awal kuartal III 2023.
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
                        <img src="img/gt-1.jpg" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">Guardian Tales</h5>
                            <p class="card-text">
                                Guardian Tales adalah game RPG petualangan ...
                                <a href="artikel2.php">Lihat Selengkapnya</a>
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