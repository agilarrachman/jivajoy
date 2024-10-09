<header class="header d-flex flex-wrap align-items-center" data-page="home" data-overlay="true">
    <div class="container d-flex flex-wrap flex-xl-nowrap align-items-center justify-content-between">
        <div class="link d-flex flex-wrap flex-xl-nowrap align-items-center justify-content-between">
            <a class="brand header_logo d-flex align-items-center" href="index.html">
                <span class="logo">
                    <svg width="48" height="45" viewBox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <image href="img/logo.svg" width="100%" height="100%" clip-path="url(#logoHeader)" />
                        <defs>
                            <clipPath id="logoHeader">
                                <rect width="60" height="60" fill="white" />
                            </clipPath>
                        </defs>
                    </svg>
                </span>
                <span class="accent">JivaJoy</span>
            </a>
            <nav class="header_nav">
                <ul class="header_nav-list">
                    <li class="header_nav-list_item">
                        <a
                            class="nav-link d-inline-flex align-items-center {{ ($active === 'beranda') ? 'active' : '' }}"
                            href="index.html"
                            aria-expanded="false"
                            aria-controls="homeMenu">
                            Beranda
                        </a>
                    </li>
                    <li class="header_nav-list_item {{ ($active === 'produk') ? 'active' : '' }}">
                        <a
                            class="nav-link d-inline-flex align-items-center"
                            href="product.html"
                            aria-expanded="false"
                            aria-controls="shopMenu">
                            Produk
                        </a>
                    </li>

                    <li class="header_nav-list_item dropdown {{ ($active === 'berita') ? 'active' : '' }}">
                        <a
                            class="nav-link d-inline-flex align-items-center"
                            href="news2.html"
                            aria-expanded="false"
                            aria-controls="newsMenu">
                            Berita
                        </a>
                    </li>
                    <li class="header_nav-list_item dropdown {{ ($active === 'tim') ? 'active' : '' }}">
                        <a
                            class="nav-link d-inline-flex align-items-center"
                            href="team.html"
                            aria-expanded="false"
                            aria-controls="pagesMenu">
                            Tim
                        </a>
                    </li>
                    <li class="header_nav-list_item dropdown {{ ($active === 'konsultasi') ? 'active' : '' }}">
                        <a
                            class="nav-link d-inline-flex align-items-center"
                            href="konsultasi.html"
                            aria-expanded="false"
                            aria-controls="pagesMenu">
                            Konsultasi
                        </a>
                    </li>
                </ul>
            </nav>
            <span class="header_trigger d-inline-flex d-xl-none flex-column justify-content-between" style="cursor: pointer;">
                <span class="line line--short"></span>
                <span class="line line"></span>
                <span class="line line--short"></span>
                <span class="line line"></span>
            </span>
        </div>
        <a href="/login" class="btn-login">Masuk</a>
    </div>
</header>