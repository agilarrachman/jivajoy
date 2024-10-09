<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <title>Product JivaJoy</title>
        <link rel="stylesheet preload" as="style" href="css/preload.min.css" />
        <link rel="stylesheet preload" as="style" href="css/libs.min.css" />

        <link rel="stylesheet" href="css/product.min.css" />
    </head>
    <body>
        <header class="header d-flex flex-wrap align-items-center" data-page="home" data-overlay="true">
            <div class="container d-flex flex-wrap flex-xl-nowrap align-items-center justify-content-between">
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
                                class="nav-link d-inline-flex align-items-center"
                                href="index.html"
                                aria-expanded="false"
                                aria-controls="homeMenu"
                            >
                                Beranda
                            </a>
                        </li>                        
                        <li class="header_nav-list_item">
                            <a
                                class="nav-link d-inline-flex align-items-center"
                                href="product.html"
                                aria-expanded="false"
                                aria-controls="shopMenu"
                            >
                                Produk
                            </a>
                        </li>
                        
                        <li class="header_nav-list_item dropdown">
                            <a
                                class="nav-link d-inline-flex align-items-center"
                                href="news2.html"
                                aria-expanded="false"
                                aria-controls="newsMenu"
                            >
                                Berita
                            </a>
                        </li>
                        <li class="header_nav-list_item dropdown">
                            <a
                                class="nav-link d-inline-flex align-items-center"
                                href="team.html"
                                aria-expanded="false"
                                aria-controls="pagesMenu"
                            >
                                Tim
                            </a>
                        </li>
                        <li class="header_nav-list_item dropdown">
                            <a
                                class="nav-link d-inline-flex align-items-center"
                                href="konsultasi.html"
                                aria-expanded="false"
                                aria-controls="pagesMenu"
                            >
                                Konsultasi
                            </a>
                        </li>
                    </ul>
                    </ul>
                </nav>
                <span class="header_trigger d-inline-flex d-xl-none flex-column justify-content-between">
                    <span class="line line--short"></span>
                    <span class="line line"></span>
                    <span class="line line--short"></span>
                    <span class="line line"></span>
                </span>
            </div>
        </header>
        <!-- Single product content start -->
        <main>
            <section class="about section--nopb">
                <div class="container">
                    <!-- Product main -->
                    <div class="about_main d-lg-flex flex-nowrap">
                        <div class="about_main-slider">
                            <div class="about_main-slider--single" data-modal="false">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <a href="img/product1.png" data-role="gallery">
                                            <picture>
                                                <source
                                                    data-srcset="img/product1.png"
                                                    srcset="img/product1.png"
                                                    type="image/webp"
                                                />
                                                <img
                                                    class="lazy"
                                                    data-src="img/product1.png"
                                                    src="img/product1.png"
                                                    alt="media"
                                                />
                                            </picture>
                                        </a>
                                    </div>
                                    <div class="swiper-slide">
                                        <a href="img/box.png" data-role="gallery">
                                            <picture>
                                                <source
                                                    data-srcset="img/box.png"
                                                    srcset="img/box.png"
                                                    type="image/webp"
                                                />
                                                <img
                                                    class="lazy"
                                                    data-src="img/box.png"
                                                    src="img/box.png"
                                                    alt="media"
                                                />
                                            </picture>
                                        </a>
                                    </div>
                                    <div class="swiper-slide">
                                        <a href="img/product.png" data-role="gallery">
                                            <picture>
                                                <source
                                                    data-srcset="img/product.png"
                                                    srcset="img/product.png"
                                                    type="image/webp"
                                                />
                                                <img
                                                    class="lazy"
                                                    data-src="img/product.png"
                                                    src="img/product.png"
                                                    alt="media"
                                                />
                                            </picture>
                                        </a>
                                    </div>
                                </div>
                                <div class="swiper-controls d-flex align-items-center justify-content-between">
                                    <a class="swiper-button-prev d-inline-flex align-items-center justify-content-center" href="#">
                                        <i class="icon-caret_left icon"></i>
                                    </a>
                                    <a class="swiper-button-next d-inline-flex align-items-center justify-content-center" href="#">
                                        <i class="icon-caret_right icon"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="about_main-slider--thumbs">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <picture>
                                            <source
                                                data-srcset="img/box.png"
                                                srcset="img/box.png"
                                                type="image/webp"
                                            />
                                            <img
                                                class="lazy"
                                                data-src="img/box.png"
                                                src="img/box.png"
                                                alt="media"
                                            />
                                        </picture>
                                    </div>
                                    <div class="swiper-slide">
                                        <picture>
                                            <source
                                                data-srcset="img/product.png"
                                                srcset="img/product.png"
                                                type="image/webp"
                                            />
                                            <img
                                                class="lazy"
                                                data-src="img/product.png"
                                                src="img/product.png"
                                                alt="media"
                                            />
                                        </picture>
                                    </div>
                                    <div class="swiper-slide">
                                        <picture>
                                            <source
                                                data-srcset="img/product1.png"
                                                srcset="img/product1.png"
                                                type="image/webp"
                                            />
                                            <img
                                                class="lazy"
                                                data-src="img/product1.png"
                                                src="img/product1.png"
                                                alt="media"
                                            />
                                        </picture>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="about_main-info">
                            <div class="about_main-info_product d-sm-flex align-items-center justify-content-between">
                                <h2 class="title">JivaJoy: Aromatherapy 2in1 
                                    (Inhaler & Roll On)  </h2>
                            </div>
                            <!-- <div class="about_main-info_rating d-flex align-items-center">
                                <ul class="stars d-flex align-items-center accent">
                                    <li class="stars_star">
                                        <i class="icon-star_fill"></i>
                                    </li>
                                    <li class="stars_star">
                                        <i class="icon-star_fill"></i>
                                    </li>
                                    <li class="stars_star">
                                        <i class="icon-star_fill"></i>
                                    </li>
                                    <li class="stars_star">
                                        <i class="icon-star_fill"></i>
                                    </li>
                                    <li class="stars_star">
                                        <i class="icon-star_fill"></i>
                                    </li>
                                </ul>
                                <a class="reviews-amount" href="#reviews">(2 customer reviews)</a>
                            </div> -->
                            <p class="about_main-info_description">
                                Aromatherapy 2in1 (Inhaler & Roll On) dari Kemangi dan Cendana sebagai Upaya Pencegahan Baby Blues dengan Integrated Website Packaging
                            </p>
                            <ul class="about_main-info_list">
                                <li class="list-item">
                                    <span class="property">Category:</span>
                                    <span class="value">Oil</span>
                                </li>
                                <li class="list-item">
                                    <span class="property">Size Inhaler:</span>
                                    <span class="value">2ml</span>
                                </li>
                                <li class="list-item">
                                    <span class="property">Size Roll On:</span>
                                    <span class="value">5ml</span>
                                </li>
                                <li class="list-item">
                                    <span class="property">Varian</span>
                                    <span class="value">Hot and Warm</span>
                                </li>
                            </ul>
                            <a href="product.html" style="background-color: #4682A9; color: white; padding: 10px 20px; text-align: center; text-decoration: none; display: inline-block; border-radius: 30px; font-size: 16px; cursor: pointer; margin-top: 4%;">
                                <b>Beli Sekarang</b>
                            </a>                            
                        </div>
                    </div>
                    <!-- Product additional information -->
                    <div class="about_secondary">
                        <div class="about_secondary-content">
                            <ul class="about_secondary-content_nav nav nav-tabs" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <div
                                        class="nav-link active"
                                        id="description-tab"
                                        data-bs-toggle="tab"
                                        data-bs-target="#description"
                                        role="tab"
                                        aria-selected="true"
                                    >
                                        Deskripsi
                                    </div>
                                </li>
                                
                                <li class="nav-item" role="presentation">
                                    <div
                                        class="nav-link"
                                        id="additional-tab"
                                        data-bs-toggle="tab"
                                        data-bs-target="#additionalInfo"
                                        role="tab"
                                        aria-selected="false"
                                    >
                                        Informasi Tambahan
                                    </div>
                                </li>
                            </ul>
                            <div class="about_secondary-content_tabs tab-content" id="productTabs">
                                <div class="wrapper">
                                    <h4
                                        class="accordion_component-item_header d-flex justify-content-between align-items-center"
                                        data-bs-toggle="collapse"
                                        data-bs-target="#description"
                                        aria-expanded="true"
                                    >
                                        Deskripsi
                                        <i class="icon-caret_down transform icon"></i>
                                    </h4>
                                    <div
                                        class="tab-pane collapse show active"
                                        id="description"
                                        role="tabpanel"
                                        aria-labelledby="description-tab"
                                        data-bs-parent="#productTabs"
                                    >
                                        <p class="text">
                                            Aromatherapy 2in1 (Inhaler & Roll On) dari Kemangi dan Cendana sebagai Upaya Pencegahan Baby Blues dengan Integrated Website Packaging
                                        </p>
                                        <!-- <p class="text">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                        </p> -->
                                    </div>
                                </div>
                               
                                <div class="wrapper">
                                    <h4
                                        class="accordion_component-item_header d-flex justify-content-between align-items-center"
                                        data-bs-toggle="collapse"
                                        data-bs-target="#additionalInfo"
                                    >
                                        Informasi Tambahan
                                        <i class="icon-caret_down icon"></i>
                                    </h4>
                                    <div
                                        class="tab-pane collapse"
                                        id="additionalInfo"
                                        role="tabpanel"
                                        aria-labelledby="additional-tab"
                                        data-bs-parent="#productTabs"
                                    >
                                        <table class="table d-flex flex-column">
                                            <tbody>
                                                <tr class="table_row d-flex flex-column flex-lg-row">
                                                    <th class="table_row-header">Komposisi:</th>
                                                    <td class="table_row-cell">
                                                        Mentol 24% b/v
                                                        <br>Camphor 24% b/v
                                                        <br>Metil Salisilat 24% v/v
                                                        <br>Minyak cendana 48% v/v
                                                        <br>Minyak kemangi 28% v/v
                                                    </td>                                                    
                                                </tr>
                                                <!-- <tr class="table_row d-flex flex-column flex-lg-row">
                                                    <th class="table_row-header">Recommended Usage:</th>
                                                    <td class="table_row-cell">
                                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                                    </td>
                                                </tr> -->
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            
        </main>
        <!-- Single product content end -->
        <footer class="footer">
            <div class="footer_main section">
                <div class="container d-flex flex-column flex-md-row flex-wrap flex-xl-nowrap justify-content-xl-between">
                    <div class="footer_main-about footer_main-block col-md-6 col-xl-auto">
                        <a class="brand footer_main-about_brand d-flex align-items-center" href="index.html">
                            <span class="logo">
                                <svg width="48" height="45" viewBox="0 0 48 45" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#logoFooter)">
                                        <image href="img/logo3.svg" width="100%" height="100%" clip-path="url(#logoHeader)" />
                                        <defs>
                                        <clipPath id="logoFooter">
                                            <rect width="48" height="45" fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg>
                            </span>
                            <span class="accent" style="color: white;">JivaJoy</span>
                        </a>
                        <div class="footer_main-about_wrapper">
                            <p class="text">
                                Aromatherapy 2in1 (Inhaler & Roll On) dari Kemangi dan Cendana sebagai Upaya Pencegahan Baby Blues dengan Integrated Website Packaging
                            </p>
                            <ul class="socials d-flex align-items-center accent">
                                <!-- <li class="list-item">
                                    <a class="link" href="https://facebook.com" target="_blank" rel="noopener noreferrer">
                                        <i class="icon-facebook icon" style="color: white;"></i>
                                    </a>
                                </li>
                                <li class="list-item">
                                    <a class="link" href="https://instagram.com" target="_blank" rel="noopener noreferrer">
                                        <i class="icon-instagram icon" style="color: white;"></i>
                                    </a>
                                </li>
                                <li class="list-item">
                                    <a class="link" href="https://twitter.com" target="_blank" rel="noopener noreferrer">
                                        <i class="icon-twitter icon" style="color: white;"></i>
                                    </a>
                                </li>
                                <li class="list-item">
                                    <a class="link" href="https://whatsapp.com" target="_blank" rel="noopener noreferrer">
                                        <i class="icon-whatsapp icon" style="color: white;"></i>
                                    </a>
                                </li> -->
                            </ul>                            
                        </div>
                    </div>
                    <div class="footer_main-contacts footer_main-block col-md-6 col-xl-auto">
                        <h4 class="footer_main-contacts_header footer_main-header">Contacts information</h4>
                        <ul class="footer_main-contacts_list">
                            <li class="list-item d-flex align-items-center">
                                <span class="icon d-flex justify-content-center align-items-center" style="background-color: white;">
                                    <i class="icon-call"></i>
                                </span>
                                <div class="wrapper d-flex flex-column">
                                    <a class="link" href="tel:+1234567890">+62 895-3597-28314 (Rangga)</a>
                                </div>
                            </li>
                            <li class="list-item d-flex align-items-center">
                                <span class="icon d-flex justify-content-center align-items-center" style="background-color: white;">
                                    <i class="icon-location"></i>
                                </span>
                                <div class="wrapper d-flex flex-column">
                                    <span>Sekolah Vokasi Bogor</span>
                                </div>
                            </li>
                            <li class="list-item d-flex align-items-center">
                                <span class="icon d-flex justify-content-center align-items-center" style="background-color: white;">
                                    <i class="icon-clock"></i>
                                </span>
                                <div class="wrapper d-flex flex-column">
                                    <span>9:00 am to 5:00 pm</span>
                                    <span>Monday to Saturday</span>
                                </div>
                            </li>
                        </ul>
                        
                    </div>
                    <div class="footer_main-nav footer_main-block col-md-6 col-xl-auto">
                        <h4 class="footer_main-nav_header footer_main-header">Shop Products</h4>
                        <ul class="footer_main-nav_list d-flex flex-wrap flex-md-column">
                            <li class="list-item">
                                <a class="link d-inline-flex align-items-center" href="https://shopee.co.id/jivajoy">
                                    <i class="icon-caret_right accent icon" style="color: white;"></i>
                                    Shopee
                                </a>
                            </li>
                            <li class="list-item">
                                <a class="link d-inline-flex align-items-center" href="https://www.tokopedia.com/jivajoy">
                                    <i class="icon-caret_right accent icon" style="color: white;"></i>
                                    Tokopedia
                                </a>
                            </li>
                            </li>
                            <li class="list-item">
                                <a class="link d-inline-flex align-items-center" href="https://s.lazada.co.id/s.rL1Wf?dsource=share&laz_share_info=646959714_100_1600_0_646959714_null&laz_token=66e2b61c2b7c264eb062fb0776b3abae">
                                    <i class="icon-caret_right accent icon" style="color: white;"></i>
                                    Lazada
                                </a>
                            </li>
                        </ul>
                    </div>
                    
                    <!-- <div class="footer_main-instagram footer_main-block col-md-6 col-xl-auto">
                        <h4 class="footer_main-instagram_header footer_main-header">Instagram</h4>
                        <ul class="footer_main-instagram_list d-grid">
                            <li class="list-item">
                                <a class="link" href="#" target="_blank" rel="noopener norefferer">
                                    <picture>
                                        <source data-srcset="img/footer1.png" srcset="img/footer1.png" type="image/webp" />
                                        <img
                                            class="lazy preview"
                                            data-src="img/footer1.png"
                                            src="img/footer1.png"
                                            alt="instagram post"
                                        />
                                    </picture>
                                </a>
                            </li>
                            <li class="list-item">
                                <a class="link" href="#" target="_blank" rel="noopener norefferer">
                                    <picture>
                                        <source data-srcset="img/footer2.png" srcset="img/footer2.png" type="image/webp" />
                                        <img
                                            class="lazy preview"
                                            data-src="img/footer2.png"
                                            src="img/footer2.png"
                                            alt="instagram post"
                                        />
                                    </picture>
                                </a>
                            </li>
                            <li class="list-item">
                                <a class="link" href="#" target="_blank" rel="noopener norefferer">
                                    <picture>
                                        <source data-srcset="img/footer3.png" srcset="img/footer3.png" type="image/webp" />
                                        <img
                                            class="lazy preview"
                                            data-src="img/footer3.png"
                                            src="img/footer3.png"
                                            alt="instagram post"
                                        />
                                    </picture>
                                </a>
                            </li>
                            <li class="list-item">
                                <a class="link" href="#" target="_blank" rel="noopener norefferer">
                                    <picture>
                                        <source data-srcset="img/footer4.png" srcset="img/footer4.png" type="image/webp" />
                                        <img
                                            class="lazy preview"
                                            data-src="img/footer4.png"
                                            src="img/footer4.png"
                                            alt="instagram post"
                                        />
                                    </picture>
                                </a>
                            </li>
                            <li class="list-item">
                                <a class="link" href="#" target="_blank" rel="noopener norefferer">
                                    <picture>
                                        <source data-srcset="img/footer5.png" srcset="img/footer5.png" type="image/webp" />
                                        <img
                                            class="lazy preview"
                                            data-src="img/footer5.png"
                                            src="img/footer5.png"
                                            alt="instagram post"
                                        />
                                    </picture>
                                </a>
                            </li>
                            <li class="list-item">
                                <a class="link" href="#" target="_blank" rel="noopener norefferer">
                                    <picture>
                                        <source data-srcset="img/footer6.png" srcset="img/footer6.png" type="image/webp" />
                                        <img
                                            class="lazy preview"
                                            data-src="img/footer6.png"
                                            src="img/footer6.png"
                                            alt="instagram post"
                                        />
                                    </picture>
                                </a>
                            </li>
                        </ul>
                    </div> -->
                </div>
            </div>
            <div class="footer_secondary">
                <div
                    class="
                        container
                        d-flex
                        flex-column-reverse flex-md-row
                        justify-content-center justify-content-md-between
                        align-items-md-center
                    "
                >
                    <p class="footer_secondary-copyright">
                         &copy; JivaJoy
                        <span class="linebreak">All rights reserved Copyrights 2024</span>
                    </p>
                    </ul>
                </div>
            </div>
        </footer>
        <script src="js/common.min.js"></script>
        <div class="cartOffcanvas offcanvas offcanvas-end" tabindex="-1" id="cartOffcanvas">
            <div class="cartOffcanvas_header d-flex align-items-center justify-content-between">
                <h2 class="cartOffcanvas_header-title" id="cartOffcanvasLabel">Cart</h2>
                <button class="cartOffcanvas_header-close" type="button" data-bs-dismiss="offcanvas" aria-label="Close">
                    <i class="icon-close"></i>
                </button>
            </div>
            <div class="cartOffcanvas_body">
                <ul class="cartOffcanvas_body-list">
                    <li class="cartOffcanvas_body-list_item d-sm-flex align-items-center">
                        <div class="media">
                            <a href="product.html" target="_blank" rel="noopener norefferer">
                                <picture>
                                    <source data-srcset="img/placeholder.jpg" srcset="img/placeholder.jpg" type="image/webp" />
                                    <img class="lazy" data-src="img/placeholder.jpg" src="img/placeholder.jpg" alt="media" />
                                </picture>
                            </a>
                        </div>
                        <div class="main d-flex flex-wrap justify-content-between align-items-end align-items-lg-center">
                            <a class="main_title" href="product.html" target="_blank" rel="noopener norefferer">
                                <span class="main_title-product"> Jonny Chronic - French Macaroon </span>
                            </a>
                            <div class="main_price">
                                <span class="price">$14.98</span>
                            </div>
                            <div class="qty d-flex align-items-center justify-content-between">
                                <span class="qty_minus control disabled d-flex align-items-center">
                                    <i class="icon-minus"></i>
                                </span>
                                <input class="qty_amount" type="number" readonly value="1" min="1" max="99" />
                                <span class="qty_plus control d-flex align-items-center">
                                    <i class="icon-plus"></i>
                                </span>
                            </div>
                            <a class="btn--underline" href="#">Remove</a>
                        </div>
                    </li>
                    <li class="cartOffcanvas_body-list_item d-sm-flex align-items-center">
                        <div class="media">
                            <a href="product.html" target="_blank" rel="noopener norefferer">
                                <picture>
                                    <source data-srcset="img/placeholder.jpg" srcset="img/placeholder.jpg" type="image/webp" />
                                    <img class="lazy" data-src="img/placeholder.jpg" src="img/placeholder.jpg" alt="media" />
                                </picture>
                            </a>
                        </div>
                        <div class="main d-flex flex-wrap justify-content-between align-items-end align-items-lg-center">
                            <a class="main_title" href="product.html" target="_blank" rel="noopener norefferer">
                                <span class="main_title-product"> House Shatter – Durban Poison </span>
                            </a>
                            <div class="main_price">
                                <span class="price">$6.96</span>
                            </div>
                            <div class="qty d-flex align-items-center justify-content-between">
                                <span class="qty_minus control disabled d-flex align-items-center">
                                    <i class="icon-minus"></i>
                                </span>
                                <input class="qty_amount" type="number" readonly value="1" min="1" max="99" />
                                <span class="qty_plus control d-flex align-items-center">
                                    <i class="icon-plus"></i>
                                </span>
                            </div>
                            <a class="btn--underline" href="#">Remove</a>
                        </div>
                    </li>
                    <li class="cartOffcanvas_body-list_item d-sm-flex align-items-center">
                        <div class="media">
                            <a href="product.html" target="_blank" rel="noopener norefferer">
                                <picture>
                                    <source data-srcset="img/placeholder.jpg" srcset="img/placeholder.jpg" type="image/webp" />
                                    <img class="lazy" data-src="img/placeholder.jpg" src="img/placeholder.jpg" alt="media" />
                                </picture>
                            </a>
                        </div>
                        <div class="main d-flex flex-wrap justify-content-between align-items-end align-items-lg-center">
                            <a class="main_title" href="product.html" target="_blank" rel="noopener norefferer">
                                <span class="main_title-product"> Natures: CBD Tincture </span>
                            </a>
                            <div class="main_price">
                                <span class="price">$7.49</span>
                            </div>
                            <div class="qty d-flex align-items-center justify-content-between">
                                <span class="qty_minus control disabled d-flex align-items-center">
                                    <i class="icon-minus"></i>
                                </span>
                                <input class="qty_amount" type="number" readonly value="1" min="1" max="99" />
                                <span class="qty_plus control d-flex align-items-center">
                                    <i class="icon-plus"></i>
                                </span>
                            </div>
                            <a class="btn--underline" href="#">Remove</a>
                        </div>
                    </li>
                </ul>
                <div class="cartOffcanvas_body-total d-flex justify-content-between align-items-center">
                    <span>Total</span>
                    <span class="cartTotal">$29.43</span>
                </div>
                <a class="cartOffcanvas_body-btn btn" href="cart.html">Proceed to checkout</a>
            </div>
        </div>
        <script src="js/shop.min.js"></script>
    </body>
</html>
