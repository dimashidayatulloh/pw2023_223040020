<?php
session_start();

// cek session
// if (!isset($_SESSION["login"])) {
//     header("Location: ../login.php");
//     exit;
// }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sejarah Smartphone</title>
    <!-- bootstrap cdn -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <!-- css -->
    <link rel="stylesheet" href="../css/artikel1.css">
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-text fw-semibold navbar-custom navbar-dark fixed-top">
        <div class="container">
            <a class="navbar-brand me-3" href="index.php">
                <img src="img/logo.png" alt="Logo" width="70" height="40" />
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-lg-1 ">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#beranda">BERANDA</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#berita">BERITA</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#tentang">TENTANG</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#kontak">KONTAK</a>
                    </li>
                </ul>
                <form class="container-fluid justify-content-end navbar-nav">
                    <button class="btn btn-outline-success me-2 p-0" type="button"><a class="nav-link" href="login.php">MASUK</a></button>
                    <br>
                    <button class="btn btn-outline-success me-2 p-0" type="button"><a class="nav-link" href="register.php">DAFTAR</a></button>
                </form>
            </div>
        </div>
    </nav>

    <div class="container px-5">
        <div class="card pt-5 mt-3">
            <img src="img/smartphone.jpg" class="card-img-top img" alt="smartphone">
            <div class="card-body">
                <h2 class="card-title">Sejarah Perkembangan Smartphone</h2>
                <p class="card-text"><small class="text-muted">Maret 27, 2023</small></p>
                <br>

                <p>
                    Smartphone sudah menjadi bagian dari kehidupan kita saat ini. Kita menggunakannya dalam berbagai kegiatan, mulai dari membantu pekerjaan, hiburan, sarana belajar, berinteraksi dengan orang-orang, memotret, dan lain sebagainya. Satu alat kecil tapi bisa melakukan segalanya. Nah, kira-kira bagaimana sih sejarah perkembangan ponsel pintar yang sekarang kita gunakan? Mungkin generasi 2000-an masih kurang familiar dengan beberapa posel ini. Yuk, intip nenek moyang smartphone kesayangan kita.
                </p>

                <h5>1. IBM Simon Personal Communicator.</h5>
                <p>
                    Ponsel pintar pertama di dunia ini diluncurkan oleh perusahaan IBM pada 16 Agustus 1994 dengan harga yang terbilang cukup mahal, yaitu berkisar 12-14 juta rupiah. Beratnya mencapai 500 gram dengan fitur-fitur yang cukup lengkap pada zamannya. Aplikasi dalam ponsel ini antara lain kalender, e-mail, catatan, mengirim pesan singkat, dan dilengkapi dengan stylus. Bentuknya berupa kotak berwana hitam dengan layar berwarna hijau dengan layar sentuh monokrom. Sayangnya apabila sudah digunakan selama 1 jam, ponsel ini harus diisi kembali dayanya. Inilah yang menyebabkan alat komunikasi ini hilang dari pasaran 2 tahun kemudian.
                </p>

                <h5>2. Nokia 9000 Communicator.</h5>
                <p>
                    Ponsel ini dirilis pada tahun 1996 dengan ketebalan 1,5 inci dan bobot 397 gram, serta dilengkapi dengan tombol dial, navigasi, dan tentunya layar monokrom. Nokia 9000 Communicator bisa dibilang yang paling mendekati smartphone saat ini karena memiliki fitur yang ada di smartphone modern. Gadget ini juga memiliki keyboard QWERTY dengan kemampuan mengirim e-mail, faks, browsing di internet, pemrosesan kata, hingga lembar kerja. Sistem oprasinya adalah GEOS yang merupakan cikal bakal dari Symbian. Produk terakhirnya adalah Nokia E90 Communicator yang rilis di tahun 2007.
                </p>

                <h5>3. PDA Phone.</h5>
                <p>
                    PDA Phone yang diperkalkan pada tahun 2005 ini memang jarang digunakan oleh orang Indonesia. Namun ponsel ini lebih sering digunakan oleh para eksekutif yang selalu sibuk dengan pekerjaannya. PDA sendiri memiliki kepanjangan Personal Digital Asisstant dan menggunakan sistem operasi Windows Phone. Ponsel pintar ini sanggup diajak berkomunikasi selama 3,5-4 jam. Sementara waktu tunggunya diklaim sanggup hingga 150-200 jam.
                </p>

                <h5>4. Nokia Symbian.</h5>
                <p>
                    Nokia Symbian bisa dibilang Nokia yang dikenal pada tahun 2005-2010an. Ponsel ini memiliki banyak tipe seperti Nokia 3650, 6600, N-Gage, N70, dan lainnya. Harganya beragam sesuai dengan tipe dan waktu keluarannya. Fitur-fiturnya juga semakin lengkap, seperti multitasking, bermain game, internet, musik player, perekam video, bahkan mengedit file Microsoft Word.
                </p>

                <h5>5. BlackBerry.</h5>
                <p>
                    Smartphone ini terkenal dengan aplikasi chatting-nya, yaitu Blackberry Messenger (BBM). Gadget yang pertama diluncurkan adalah BlackBerry 5810 pada tahun 2002 oleh perusahan RIM yang merupakan perusahaan di bidang Pager. Ponsel ini sudah dilegkapi jaringan GSM dan GPRS namun ketika menelpon harus menggunakan headset. Sampai akhirnya pada tahun 2009, BlackBerry makin terkenal karena mengelurkan tipe-tipe baru dengan spesifikasi yang lebih lengkap dan paket internet yang terjangkau.
                </p>

                <h5>6. Android.</h5>
                <p>
                    Android merupakan sistem operasi berbasis Linux yang dikembangkan oleh Android Inc dan dibeli Google pada tahun 2005. Awalnya Android dikembangkan sebagai sistem operasi kamera digital namun, beralih pada ponsel agar mencapai pasar lebih luas. Kemudian dinamai Sooner dengan desain awalnya mirip dengan BlackBerry dengan keyboard QWERTY tanpa touch screen. Seiring berjalanya waktu, Sooner didesain ulang sehingga menjadi layar sentuh. Kemunculan android pun tidak langsung tenar seperti BlackBerry dengan BBM nya. Pada tahun 2008, produk smartphone Android pertama diluncurkan dengan nama HTC Dream yang dikenal juga dengan nama G1. Dan terus berkembang sampai sekarang.
                </p>

                <h5>7. Iphone.</h5>
                <p>
                    Pada tahun 2007, Steve Jobs menggabungkan 3 produk luar biasa yaitu; iPod, telepon seluler, dan perangkat komunikasi internet ke dalam satu produk bernama iPhone. Ponsel pertama ini masih belum mendukung 3G, namun memiliki segudang kelebihan seperti multitouch tanpa stylus, singkronasi dengan iTunes, multitasking, dan mampu memutar film berdurasi panjang. perangkat lunaknya adalah ios dan dianggap smartphone premium karena harga dan kualitasnya yang terbilang mahal.
                </p>

                <h5>8. Windows Phone.</h5>
                <p>
                    Setelah Symbian kian redup pada akhir tahun 2010, dan muncul smartphone yang menggandeng Android dan Ios, Microsoft akhirnya masuk ke sistem operasi smartphone. Windows Phone pertama diluncurkan pada Februari 2010. Kemudian Microsoft menjalin kerja sama dengan Nokia untuk menjadi sistem operasinya menggantikan Symbian. Produk Windows Phone yang muncul pertama kali dan masuk ke pasar Indonesia pada than 2015 adalah Nokia Lumia 800 dan Nokia Lumia 710 dengan touchscreen dan berbagai aplikasi.
                </p>
            </div>
        </div>



    </div>
    <!-- Footer -->
    <footer class="bg-dark p-1 text-center">
        <p class="pt-3 text-white">Made with 💖 By Dimas Hidayatulloh</p>
    </footer>

    <!-- bootstrap 5 js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>