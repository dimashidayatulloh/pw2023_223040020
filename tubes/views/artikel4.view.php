<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Komputer</title>
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
                    <h2 class="card-title pb-3">Smartphone Redmi Note 10 Pro</h2>
                    <img src="img/rn10p.jpg" class="card-img-top img" alt="smartphone">
                    <div class="card-body">
                        <p class="card-text py-1"><small class="text-muted">Maret 27, 2023</small></p>

                        <h4>Snapdragon 732G yang kencang dan kamera 108 MP yang tajam pada harga tiga jutaan saja</h4>
                        <p>
                            Setiap kali, Xiaomi selalu mengeluarkan smartphone yang memiliki harga yang tergolong terjangkau pada kelasnya. Xiaomi mengklaim bahwa penetapan harga tersebut tidak lepas dari pengambilan keuntungan yang hanya 5% per perangkat. Hal tersebut juga berlaku pada smartphone yang baru saja mereka luncurkan yang memiliki kamera mobile dengan resolusi paling tinggi saat ini. Perangkat tersebut adalah Xiaomi Redmi Note 10 Pro.
                        </p>
                        <p>
                            Dengan menyandang nama Pro, Xiaomi membenamkan kamera dengan resolusi 108 MP. Selain itu, perangkat ini juga dipasangkan layar yang mampu memberikan refresh rate 120 Hz. Penyimpanan internal pada Redmi Note 10 Pro juga menggunakan UFS 2.2. Terakhir, baterai 5020 mAh yang digunakan dapat diisi dengan cepat karena menggunakan charger 33 watt.
                        </p>
                        <p>
                            Menggunakan layar Super AMOLED memang memiliki kontras yang lebih baik dibandingkan dengan IPS. Dan menyajikan untuk para gamer, perangkat ini juga hadir dengan touch sampling 240 Hz yang akan merespons dengan cepat saat disentuh.
                        </p>

                        <h4>Desain</h4>
                        <p>
                            Beda perangkat, tentu saja beda desain bagian belakang dari Xiaomi Redmi Note 10 Pro. Hal tersebut sangat terlihat dari desain bagian kameranya yang sangat fresh dan berbeda dari saudaranya maupun pesaingnya. Logo Redmi terletak pada bagian kiri bawah dari perangkat ini dan menggunakan font yang cukup kecil. Warna yang saya dapatkan adalah Onyx Gray.
                        </p>

                        <p>
                            Layar Xiaomi Redmi Note 10 memiliki resolusi 2400×1080 pada layar dengan dimensi 6,67 inci ini. Smartphone ini sudah menggunakan layar dengan jenis Super AMOLED dan dilindungi dengan Gorilla Glass 5 sehingga lebih tahan terhadap goresan serta benturan. Layarnya juga sudah memiliki rasio kontras 4.500.000:1 dan mendukung DCI-P3. Xiaomi juga sudah menempelkan lapisan anti gores tambahan sehingga lebih melindungi lagi dari goresan.
                        </p>

                        <h4>Jaringan</h4>
                        <p>
                            Xiaomi Redmi Note 10 Pro menggunakan SoC yang ditujukan untuk perangkat pada kelas premium. System on Chip ini sendiri menggunakan modem X15 yang sudah masuk dalam Catergory 15. Modem ini telah mendukung Carrier Aggregation hingga 3 koneksi. Secara teoritis, kecepatan download dari modem ini bisa mencapai hinggai 800 Mbps.
                        </p>

                        <h4>Kamera</h4>
                        <p>
                            Xiaomi kembali menghadirkan kamera 108 MP pada Redmi Note 10 Pro. Akan tetapi, sensornya berbeda dengan yang digunakan pada Mi Note 10 Pro dan Mi 10T Pro. Redmi Note 10 Pro menggunakan ISOCELL HM2 yang menggunakan teknologi nonapixel, menggabungkan 9 piksel menjadi sebuah piksel berukuran 2.1μm. Berbeda dengan kedua pendahulunya yang menggunakan ISOCELL HMX yang menggunakan teknologi tetrapixel.
                        </p>
                    </div>
                </div>

                <div class="col-md-4" id="populer">
                    <h4 class="card-title py-3 ps-5">Berita Populer</h4>
                    <div class="card mb-3" style="width: 17rem;">
                        <img src="img/smartphone.jpg" class="card-img-top" alt="..">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">
                                Some quick example text to build on the card title and .
                                <a href="#" class="">Lihat Selengkapnya</a>
                            </p>

                        </div>
                    </div>
                    <div class="card mb-3" style="width: 17rem;">
                        <img src="img/smartphone.jpg" class="card-img-top" alt="..">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">
                                Some quick example text to build on the card title and .
                                <a href="#" class="">Lihat Selengkapnya</a>
                            </p>

                        </div>
                    </div>
                    <div class="card mb-3" style="width: 17rem;">
                        <img src="img/smartphone.jpg" class="card-img-top" alt="..">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">
                                Some quick example text to build on the card title and .
                                <a href="#" class="">Lihat Selengkapnya</a>
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