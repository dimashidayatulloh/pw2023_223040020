<?php

require "partials/about.header.php";

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

<!-- konten -->
<section id="about" class="pt-5">
    <div class="d-flex justify-content-center align-items-center" id="hero">
        <h2 class="text-center text-white fw-bold">ABOUT US</h2>
    </div>
    <div class="container pt-5">
        <div class="row justify-content-around fs-5">
            <div class="col-md-4">
                <h3 class="text-primary pb-3">Tentang Web</h3>
                <p>Web ini berisi konten yang membahas tentang teknologi. Dibuat oleh Dimas Hidayatulloh dengan tujuan untuk menuntaskan tugas besar mata kuliah pemograman web.</p>
            </div>
            <div class="col-md-4 text-center">
                <h4>Dimas Hidayatulloh</h4>
                <small class="d-block pb-3">Web Developer</small>
                <img src="img/logo.png" alt="" class="img-thumbnail rounded-circle">
            </div>
        </div>
    </div>
</section>

<?php
require('partials/footer.php');
?>