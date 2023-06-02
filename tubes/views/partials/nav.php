<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-text navbar-custom fixed-top nav-fixed">
    <div class="container">
        <a class="navbar-brand me-3" href="index.php">
            <img src="img/logo.png" alt="Logo" width="55" height="30" />
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-lg-0 ">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="index.php">BERANDA</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="news.php">BERITA</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about.php">TENTANG</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.php">KONTAK</a>
                </li>
            </ul>

            <!-- when not login -->
            <form class="container-fluid justify-content-end navbar-nav">
                <button class="btn btn-outline-warning me-2 p-0 rounded-0" type="button"><a class="nav-link" href="login.php">MASUK</a></button>
                <button class="btn btn-outline-warning me-2 p-0 rounded-0" type="button"><a class="nav-link" href="register.php">DAFTAR</a></button>
            </form>
        </div>
    </div>
</nav>