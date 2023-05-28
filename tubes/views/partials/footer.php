<!-- Footer -->
<footer>
    <div class="container">
        <div class="d-flex flex-column flex-sm-row justify-content-between">
            <p class="mt-3 ">&copy; 2022 Copyright | Dimas Hidayatulloh</p>
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

<!-- scrolled -->
<script>
    const navbar = document.querySelector('.nav-fixed');
    window.onscroll = () => {
        if (window.scrollY > 100) {
            navbar.classList.add('nav-active');
        } else {
            navbar.classList.remove('nav-active');
        }
    };
</script>

</body>

</html>