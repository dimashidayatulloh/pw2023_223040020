<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forum Dtech</title>
    <!-- bootstrap cdn -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <!-- css -->
    <link rel="stylesheet" href="css/index.css">
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

    <!-- Hero -->
    <section id="beranda">
        <img src="img/hero-img.jpg" class="card-img" alt="hero img">
    </section>

    <!-- Berita -->
    <section id="berita">
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
                            <a href="artikel.php" class="btn btn-primary">Read More</a>
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
                            <a href="artikel1.php" class="btn btn-primary">Read More</a>
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
                            <a href="artikel1.php" class="btn btn-primary">Read More</a>
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
                            <a href="artikel1.php" class="btn btn-primary">Read More</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- btn -->
            <button type="button" class="btn btn-primary my-5">View All</button>
        </div>
    </section>

    <!-- Tentang -->
    <section id="tentang">
        <div class="container text-center">
            <h2>Tentang Kami</h2>
            <p>Forum Dtech adalah website yang mengulas tentang seputar teknologi.</p>
        </div>
    </section>

    <!-- Kontak -->
    <section id="kontak" class="my-5">
        <div class="container card py-3 shadow bg-light">
            <h2 class="text-center">Kontak kami</h2>
            <form>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Nama</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="nama anda">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Email</label>
                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="email anda">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Pesan</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="tulis pesan anda"></textarea>
                </div>
                <button type="submit" class="btn btn-success w-100">Kirim</button>
            </form>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-dark p-1 text-center">
        <p class="pt-3 text-white">Made with 💖 By Dimas Hidayatulloh</p>
    </footer>

    <!-- bootstrap 5 js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>