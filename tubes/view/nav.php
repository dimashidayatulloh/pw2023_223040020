<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dtech News</title>
    <!-- bootstrap cdn -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <!-- css -->
    <link rel="stylesheet" href="css/index.css">
</head>
<style>
    /* nav */
    header {
        height: 70px;
    }

    header li {
        border-bottom: 1px solid transparent;
    }

    header li:hover {
        border-bottom: 1px solid gold;
    }

    /* footer */
    footer {
        background-color: #000;
        color: #fff;
        height: 60px;
    }

    h4:hover {
        background-color: blue;
        border-radius: 50px;
    }
</style>

<body>
    <header class="p-3 text-bg-dark">
        <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                <a href="/" class="d-flex align-items-center me-2">
                    <img src="../img/logo.png" alt="" width="70" height="39">
                </a>

                <ul class="nav col-12 col-lg-auto me-lg-auto justify-content-center">
                    <li><a href="#" class="nav-link px-2 text-white">BERANDA</a></li>
                    <li><a href="#" class="nav-link px-2 text-white">BERITA</a></li>
                    <li><a href="#" class="nav-link px-2 text-white">TENTANG</a></li>
                    <li><a href="#" class="nav-link px-2 text-white">KONTAK</a></li>
                </ul>

                <form class="col-12 col-lg-auto me-lg-3" role="search">
                    <input type="search" class="form-control form-control-dark text-bg-dark" placeholder="Search" aria-label="Search">
                </form>

                <div class="text-end">
                    <button type="button" class="btn btn-outline-light me-2">MASUK</button>
                    <button type="button" class="btn btn-success">DAFTAR</button>
                </div>
            </div>
        </div>
    </header>

    <h2>Hello W</h2>

    <!-- botstrap -->
    <footer>
        <div class="container">
            <div class="d-flex flex-column flex-sm-row justify-content-between">
                <p class="mt-3">&copy; 2022 Copyright | Made By Dimas H</p>
                <ul class="list-unstyled d-flex mt-3">
                    <li class="ms-3"><a class="link-light" href="#">
                            <h4 class="bi bi-github"></h4>
                        </a></li>
                    <li class="ms-3"><a class="link-light" href="#">
                            <h4 class="bi bi-instagram"></h4>
                        </a></li>
                    <li class="ms-3"><a class="link-light" href="#">
                            <h4 class="bi bi-facebook"></h4>
                        </a></li>
                </ul>
            </div>

        </div>
    </footer>
    <!-- bootstrap 5 js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>