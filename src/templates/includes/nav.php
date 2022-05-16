<?php?>
<div class="header__top bg-secondary">
    <div class="container">
        <ul class="header__list list list--header">
            <li>
                <i class="icon--contact-top fas fa-map-marker-alt"></i>adres:
                <span class="list__break">ul. dolor sit 66/6,</span> <span class="list__break">61-333 Poznań</span>
            </li>
            <li>
                <i class="icon--contact-top fas fa-phone-square-alt"></i>
                tel: <a href="tel:">666 777 888</a>
            </li>
            <li>
                <i class="icon--contact-top fas fa-envelope-square"></i>
                e-mail: <a href="mailto:">lorem@ipsum.pl</a>
            </li>
        </ul>
    </div>
</div>
<nav class="navbar navbar-dark navbar-expand-md bg-primary" data-fixed-element="">
    <div class="container d-flex justify-content-md-end flex-column flex-md-row py-3 py-md-0">
        <a class="navbar-brand page__figure" href="/">
            <img src="assets/images/logo.png" alt="logo">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="navbarNav" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="navbar__list">
            <div id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link <?php echo  getActiveLink($request, '/') ?>" aria-current="page" href="/">Strona główna</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo  getActiveLink($request, '/o-nas') ?>" href="o-nas">
                            O nas
                        </a>
                    </li>
                    <li class="nav-item dropdown__toggle">
                        <a class="nav-link <?php echo  getActiveLink($request, '/oferta') ?>" href="oferta">
                            Oferta
                        </a>
                        <i class="fas fa-arrow-circle-down dropdown__toggle--icon d-md-none d-inline"></i>
                        <ul class="dropdown__list" aria-labelledby="navbarDropdown">
                            <li>
                                <a href="#">Oferta 1</a>
                            </li>
                            <li>
                                <a href="#">Oferta 2</a>
                            </li>
                            <li class="pb-0">
                                <a href="#">Oferta 3</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo  getActiveLink($request, '/galeria') ?>" href="galeria">
                            Galeria
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo  getActiveLink($request, '/kontakt') ?>" href="kontakt">
                            Kontakt
                        </a>
                    </li>
                </ul>
            </div>
            <div class="header__social">
                <ul class="header__list list">
                    <li>
                        <a href="#" rel="nofollow" target="_blank">
                            <i class="icon icon--social fab fa-facebook-square"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#" rel="nofollow" target="_blank">
                            <i class="icon icon--social fab fa-instagram-square"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#" rel="nofollow" target="_blank">
                            <i class="icon icon--social fab fa-twitter-square pe-0"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>
<?php?>
