<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta property="og:title" content="JivaJoy" />
    <meta property="og:type" content="Website" />
    <meta property="og:url" content="https://jivajoy.id/" />
    <meta property="og:description"
        content="Aromaterapi 2in1 (Inhaler & Roll On) dari Kemangi dan Cendana Sebagai Upaya Mencegah Baby Blues dengan Kemasan Website Terintegrasi" />
    <meta name="description" content="Aromaterapi 2in1 (Inhaler & Roll On) dari Kemangi dan Cendana Sebagai Upaya Mencegah Baby Blues dengan Kemasan Website Terintegrasi">
    <title> JivaJoy </title>
    <link rel="stylesheet preload" as="style" href="css/preload.min.css" />
    <link rel="stylesheet preload" as="style" href="css/libs.min.css" />
    <link rel="stylesheet" href="css/index.css" />
    <link rel="shortcut icon" type="image/x-icon" href="img/logo.svg">
    <script src="js/script.js"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>

<body>
    @if(session('deleteAccountSuccess'))
    <script>
        // Tampilkan pesan sukses dalam alert
        alert("{{ session('deleteAccountSuccess') }}");
    </script>
    @endif

    @include('partials.navbar')
    <!-- Homepage content start -->
    <main>
        <!-- Hero section start -->
        <section class="hero">
            <div class="container d-xl-flex align-items-start">
                <div class="hero_about col-xl-6">
                    <div class="hero_header">
                        <h1 class="hero_header-title">JivaJoy</h1>
                        <p class="hero_header-text">
                            Aromaterapi 2in1 (Inhaler & Roll On) dari Kemangi dan Cendana Sebagai Upaya Mencegah Baby Blues dengan Kemasan Website Terintegrasi
                        </p>
                        <a href="/product" style="background-color: #4682A9; color: white; padding: 10px 20px; text-align: center; text-decoration: none; display: inline-block; border-radius: 30px; font-size: 16px; cursor: pointer;">
                            <b>Lihat Produk</b>
                        </a>
                    </div>
                    <div class="hero_contacts">
                        <p class="hero_contacts-text">Tim dukungan kami tersedia 24/7 untuk menyelesaikan masalah produk</p>
                        <span class="hero_contacts-data d-flex flex-column flex-sm-row align-items-center">
                            <span class="icon d-flex align-items-center justify-content-center">
                                <i class="icon-call"></i>
                            </span>
                            <span class="d-flex flex-column">
                                <span>Nomor telepon</span>
                                <a class="link" href="https://wa.me/62895359728314">+62 895-3597-28314 (Rangga)</a>
                            </span>
                        </span>
                    </div>
                </div>
                <div class="hero_promo col-xl-6">
                    <div class="hero_promo-underlay"></div>
                    <div class="hero_promo-underlay--highlight"></div>
                    <div class="hero_slider swiper">
                        <div class="swiper-wrapper">
                            <div
                                class="
                                        hero_slider-slide
                                        d-flex
                                        flex-column flex-xl-row
                                        justify-content-between justify-content-md-start
                                        align-items-md-center
                                        swiper-slide
                                    ">
                                <div class="hero_slider-slide_media d-flex justify-content-center">
                                    <picture style="height: 100%;">
                                        <source data-srcset="img/productrv.png" srcset="img/productrv.png" type="image/webp" />
                                        <img class="lazy" data-src="img/productrv.png" src="img/productrv.png" alt="media" style="margin-left: 10%; max-height: 500px; width: auto;" />
                                    </picture>
                                </div>
                                <div class="hero_slider-slide_main mt-3 mt-xl-0">
                                    <h2 class="title">JivaJoy Warm</h2>
                                    <p class="text">
                                        Nikmati kehangatan lembut dengan kombinasi kemangi yang menenangkan dan cendana yang hangat untuk Anda yang mencari kenyamanan sehari-hari.
                                    </p>
                                    <ul class="list">
                                        <!-- <li class="list-item d-flex align-items-center justify-content-center justify-content-sm-start">
                                                <span class="icon d-flex align-items-center justify-content-center" style="background-color: white;">
                                                    <i class="icon-check"></i>
                                                </span>
                                                Linalool
                                            </li>                                            
                                            <li class="list-item d-flex align-items-center justify-content-center justify-content-sm-start">
                                                <span class="icon d-flex align-items-center justify-content-center" style="background-color: white;">
                                                    <i class="icon-check"></i>
                                                </span>
                                                Myrcene
                                            </li>
                                            <li class="list-item d-flex align-items-center justify-content-center justify-content-sm-start">
                                                <span class="icon d-flex align-items-center justify-content-center" style="background-color: white;">
                                                    <i class="icon-check"></i>
                                                </span>
                                                Eugenol
                                            </li> -->
                                    </ul>
                                </div>
                            </div>
                            <div
                                class="
                                        hero_slider-slide
                                        d-flex
                                        flex-column flex-xl-row
                                        justify-content-between justify-content-md-start
                                        align-items-md-center
                                        swiper-slide
                                    ">
                                <div class="hero_slider-slide_media d-flex justify-content-center">
                                    <picture style="height: 100%;">
                                        <source data-srcset="img/productrv1.png" srcset="img/productrv1.png" type="image/webp" />
                                        <img class="lazy" data-src="img/productrv1.png" src="img/productrv1.png" alt="media" style="margin-left: 10%; max-height: 500px; width: auto;"/>
                                    </picture>
                                </div>
                                <div class="hero_slider-slide_main mt-3 mt-xl-0">
                                    <h2 class="title">JivaJoy Hot</h2>
                                    <p class="text">
                                        Nikmati kehangatan JivaJoy Hot untuk memberikan aroma yang lebih kuat untuk mengatasi stres berat dan memberikan kenyamanan mendalam.
                                    </p>
                                    <ul class="list">
                                        <!-- <li class="list-item d-flex align-items-center justify-content-center justify-content-sm-start">
                                                <span class="icon d-flex align-items-center justify-content-center" style="background-color: white;">
                                                    <i class="icon-check"></i>
                                                </span>
                                                Santalol
                                            </li>
                                            <li class="list-item d-flex align-items-center justify-content-center justify-content-sm-start">
                                                <span class="icon d-flex align-items-center justify-content-center" style="background-color: white;">
                                                    <i class="icon-check"></i>
                                                </span>
                                                Alpha-Santalol
                                            </li>
                                            <li class="list-item d-flex align-items-center justify-content-center justify-content-sm-start">
                                                <span class="icon d-flex align-items-center justify-content-center" style="background-color: white;">
                                                    <i class="icon-check"></i>
                                                </span>
                                                Beta-santalol
                                            </li> -->
                                    </ul>
                                </div>
                            </div>

                        </div>
                        <div class="hero-pagination swiper-pagination d-xl-flex flex-column ms-5"></div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Hero section end -->
        <!-- About section start -->
        <section class="about section--nopb">
            <div class="container">
                <div class="about_main d-lg-flex justify-content-between">
                    <div class="about_main-content col-lg-6 col-xl-auto">
                        <h2 class="about_main-content_header">
                            Memberikan Kenyamanan dan Dukungan untuk Ibu
                        </h2>
                        <p class="about_main-content_text">
                            Dalam perjalanan menawan sebagai ibu, produk kami berfungsi sebagai jangkar yang lembut namun kokoh, memberikan para ibu surga yang nyaman dan tenteram di tengah pusaran emosi dan tantangan. Dengan dedikasi abadi untuk membina lanskap mental dan emosional keibuan, kami berusaha untuk menerangi jalan dengan sinar ketenangan dan kegembiraan, memastikan setiap ibu merasa dibuai dalam tempat perlindungan cinta dan dukungan sepanjang pengembaraan luar biasa dalam mengasuh kehidupan.
                        </p>
                    </div>
                    <div class="about_main-media">
                        <picture>
                            <source data-srcset="img/mom1.png" srcset="img/mom1.png" type="image/webp" />
                            <img class="lazy" data-src="img/mom1.png" src="img/mom1.png" alt="media" />
                        </picture>
                    </div>
                </div>
                <ul class="about_numbers d-flex flex-wrap">
                    <li class="about_numbers-group col-sm-6 col-lg-3" data-order="1">
                        <div class="wrapper d-flex flex-column align-items-center align-items-sm-start">
                            <span class="countNum number d-flex align-items-center secondary" data-suffix="%" data-value="85">0</span>
                            <p class="number-label">Kasus postpartum blues (baby blues) di negara-negara Asia</p>
                        </div>
                    </li>
                    <li class="about_numbers-group col-sm-6 col-lg-3" data-order="2">
                        <div class="wrapper d-flex flex-column align-items-center align-items-sm-start">
                            <span class="countNum number d-flex align-items-center secondary" data-suffix="%" data-value="70">0</span>
                            <p class="number-label">Kasus postpartum blues (baby blues) di Indonesia</p>
                        </div>
                    </li>
                    <li class="about_numbers-group col-sm-6 col-lg-3" data-order="3">
                        <div class="wrapper d-flex flex-column align-items-center align-items-sm-start">
                            <span class="countNum number d-flex align-items-center secondary" data-suffix="%" data-value="100">0</span>
                            <p class="number-label">Produk yang terbukti secara klinis membantu mengurangi kecemasan</p>
                        </div>
                    </li>
                    <li class="about_numbers-group col-sm-6 col-lg-3" data-order="4">
                        <div class="wrapper d-flex flex-column align-items-center align-items-sm-start">
                            <span class="countNum number d-flex align-items-center secondary" data-suffix="K" data-value="11">0</span>
                            <p class="number-label">Total produk terjual untuk membantu mengatasi kecemasan babyblues</p>
                        </div>
                    </li>
                </ul>
            </div>
        </section>
        <!-- About section end -->
        <!-- Product section start -->
        <div class="product section pb-0">
            <div class="container d-flex flex-column flex-lg-row">
                <div class="product_media">
                    <picture>
                        <source data-srcset="img/product1.png" srcset="img/product1.png" type="image/webp" />
                        <img
                            class="lazy"
                            data-src="img/product1.png"
                            src="img/product1.png"
                            alt="CBD Facial Serum: Anti-Aging + Daily Moisturizer" />
                    </picture>
                </div>
                <div class="product_main col-lg-6">
                    <a class="product_main-title" href="product.html" target="_blank" rel="noopener noreferrer">
                        JivaJoy: Aromatherapy 2in1
                        <span style="display: block;">(Inhaler & Roll On)</span>
                    </a>
                    <br>
                    <!-- <div class="product_main-rating d-flex align-items-center">
                            <ul class="product_main-rating_stars d-flex align-items-center accent">
                                <li class="star">
                                    <i class="icon-star_fill"></i>
                                </li>
                                <li class="star">
                                    <i class="icon-star_fill"></i>
                                </li>
                                <li class="star">
                                    <i class="icon-star_fill"></i>
                                </li>
                                <li class="star">
                                    <i class="icon-star_fill"></i>
                                </li>
                                <li class="star">
                                    <i class="icon-star_fill"></i>
                                </li>
                            </ul>
                            <a class="product_main-rating_amount" href="#">(12)</a>
                        </div> -->
                    <p class="product_main-text">
                        Aromatherapy 2in1 (Inhaler & Roll On) dari Kemangi dan Cendana sebagai Upaya Pencegahan Baby Blues dengan Integrated Website Packaging
                    </p>
                    <ul class="product_main-list">
                        <li class="list-item d-flex align-items-center">
                            <i class="icon-check icon d-flex align-items-center justify-content-center"></i>
                            Mentol: 24% b/v
                        </li>
                        <li class="list-item d-flex align-items-center">
                            <i class="icon-check icon d-flex align-items-center justify-content-center"></i>
                            Camphor: 24% b/v
                        </li>
                        <li class="list-item d-flex align-items-center">
                            <i class="icon-check icon d-flex align-items-center justify-content-center"></i>
                            Metil Salisilat: 24% v/v
                        </li>
                        <li class="list-item d-flex align-items-center">
                            <i class="icon-check icon d-flex align-items-center justify-content-center"></i>
                            Minyak cendana: 48% v/v
                        </li>
                        <li class="list-item d-flex align-items-center">
                            <i class="icon-check icon d-flex align-items-center justify-content-center"></i>
                            Minyak kemangi& 28% v/v
                        </li>
                    </ul>
                    <div class="product_main-action d-flex align-items-center">
                        <span class="price">Rp.30.000,-</span>
                        <a href="/product" style="background-color: #4682A9; color: white; padding: 10px 20px; text-align: center; text-decoration: none; display: inline-block; border-radius: 30px; font-size: 16px; cursor: pointer;">
                            <b>Lihat Produk</b>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Product section end -->

        <!-- Chatbot Section Start -->
        <div class="chatbot section" id="chatbot">
            <div class="container">
                <div class="row gap-5">
                    <div class="col-md-6">
                        <img src="/img/jivajoy logo nobg.png" alt="JivaJoy Logo" style="width: 200px;" class="mb-3">
                        <h2 class="mb-2" style="width: 70%;">Konsultasi Chatbot AI seputar Baby Blues</h2>
                        <p>JivaBot dapat menjadi solusi bagi para ibu yang mengalami baby blues. Dengan fitur konsultasi ini, para ibu bisa dengan mudah mendapatkan dukungan emosional dan informasi kapan saja mereka membutuhkannya. JivaBot dapat menyediakan informasi terkait gejala, cara mengatasi, serta saran untuk perawatan diri. Selain itu, chatbot ini juga bisa mengarahkan pengguna ke ahli atau layanan kesehatan jika diperlukan, sehingga memberikan rasa aman dan dukungan yang tepat.</p>
                    </div>
                    <div class="col-md-6 p-3">
                        <form id="ask">
                            <!-- Chat Window -->
                            <div class="chat-window" id="chat-window">
                            </div>
                            <!-- Chat Input -->
                            <div class="chat-input">
                                <input id="question" name="question" type="text" placeholder="Ketik pertanyaan disini.." required />
                                <button type="submit">
                                    <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M24.0431 13.886C24.5682 13.6234 24.8999 13.0867 24.8999 12.4996C24.8999 11.9125 24.5682 11.3758 24.0431 11.1133L2.34309 0.263263C1.7933 -0.0116297 1.13302 0.0643301 0.66002 0.456886C0.187018 0.849442 -0.00932183 1.48441 0.159543 2.07544L2.37382 9.82543C2.56394 10.4908 3.17214 10.9496 3.86418 10.9496L10.9499 10.9496C11.8059 10.9496 12.4999 11.6436 12.4999 12.4996C12.4999 13.3557 11.8059 14.0496 10.9499 14.0496L3.86419 14.0496C3.17215 14.0496 2.56395 14.5084 2.37383 15.1738L0.159542 22.9238C-0.0093228 23.5148 0.187017 24.1498 0.660019 24.5424C1.13302 24.9349 1.7933 25.0109 2.34308 24.736L24.0431 13.886Z" fill="white" />
                                    </svg>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Chatbot Section End -->

        <!-- Promo info section start -->
        <section class="info section" style="position: relative;">
            <div class="container">

                <div class="info_content d-flex flex-column align-items-center">
                    <h3 class="info_content-header" style="position: relative; z-index: 1;">
                        “Melalui air mata dan kelelahan akibat baby blues, ingatlah bahwa setiap matahari terbit membawa peluang baru untuk kegembiraan dan kekuatan untuk menerima kekacauan indah sebagai ibu.”
                    </h3>
                </div>
            </div>
            <div class="background-overlay" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-color: transparent; z-index: 0;"></div>
            <div class="background-image" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-image: url('/img/quote.png'); background-size: cover; background-position: center; z-index: -1;"></div>
        </section>
        <!-- Promo info section end  -->

        <!-- Effects section Start  -->
        <section class="effects section--nopb">
            <span class="effects_underlay">
                <span class="effects_underlay-circle effects_underlay-circle--accent"></span>
                <span class="effects_underlay-circle effects_underlay-circle--green"></span>
            </span>
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-4">
                        <div class="effect_header">
                            <div class="main">
                                <h2 class="effects_header-title">Kemangi</h2>
                                <p class="effects_header-text">
                                    Kemangi, kaya akan linalool, myrcene, dan eugenol, dapat meredakan kecemasan, meningkatkan relaksasi, dan meningkatkan ketenangan. Aroma dan manfaatnya dapat menjadi solusi alami mengatasi stres sehari-hari dan menciptakan suasana menenangkan. Dengan kemangi, kita bisa menemukan ketenangan dalam rutinitas kita.
                                </p>
                            </div>
                            <span class="effects_header-formula col-lg-6 col-xl-12">
                                <svg width="281" height="157" viewBox="0 0 281 157" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        fill-rule="evenodd"
                                        clip-rule="evenodd"
                                        d="M230.627 115.958C230.309 115.76 229.952 115.76 229.635 115.958L208.956 127.805L188.317 115.879C188 115.72 187.643 115.76 187.325 115.918C187.246 115.958 187.166 115.998 187.127 116.077L166.647 127.805L146.484 116.117L146.524 91.8672L125.369 79.6236V56.9591C125.369 56.4044 124.932 55.9685 124.377 55.9685C123.821 55.9685 123.384 56.4044 123.384 56.9591V79.6632L103.143 91.2728L82.98 79.584L83.0197 54.8987L61.9046 42.6551V19.9906C61.9046 19.4359 61.468 19 60.9124 19C60.3567 19 59.9201 19.4359 59.9201 19.9906V42.6551L38.7653 54.8194L38.7256 80.3368L59.9598 92.62L59.9201 115.76H37.6143C37.0587 115.76 36.6221 116.196 36.6221 116.751C36.6221 117.305 37.0587 117.741 37.6143 117.741H59.9598V140.009C59.9598 140.564 60.3964 141 60.9521 141C61.5077 141 61.9443 140.564 61.9443 140.009V116.751C61.9443 116.711 61.9344 116.671 61.9245 116.632C61.9145 116.592 61.9046 116.552 61.9046 116.513L61.9443 92.937L82.1069 81.367L102.23 93.0162L102.19 116.235L95.919 119.841L96.7128 121.664L103.262 117.9L124.337 130.104L124.853 129.787V129.826L145.611 117.939L166.17 129.826C166.488 129.985 166.845 129.985 167.163 129.826L187.921 117.939L208.48 129.826C208.639 129.905 208.797 129.945 208.996 129.945C209.155 129.945 209.353 129.905 209.472 129.826L230.151 117.979L245.59 127.251L246.622 125.547L230.627 115.958ZM40.6614 56.4608L60.6614 45L80.6221 56.5392L80.5827 79.5392L60.5827 91L40.6221 79.4608L40.6614 56.4608ZM123.661 82L103.661 93.4608L103.622 116.461L123.583 128L143.583 116.539L143.622 93.5392L123.661 82Z"
                                        fill="currentColor" />
                                    <path
                                        d="M46.3933 12.8228C45.3218 12.2291 44.4487 11.398 43.8534 10.369C43.2581 9.30048 42.9406 8.15276 42.9406 6.84674C42.9406 5.54071 43.2581 4.35342 43.8534 3.32443C44.4487 2.25586 45.3218 1.46433 46.3933 0.870683C47.4649 0.277036 48.6951 0 50.0445 0C51.0366 0 51.9891 0.158306 52.8225 0.514495C53.6956 0.831107 54.41 1.3456 55.0053 1.97883L54.0925 2.88909C53.0209 1.82052 51.7113 1.26645 50.0842 1.26645C49.0126 1.26645 48.0205 1.50391 47.1474 2.0184C46.2743 2.49332 45.5599 3.16612 45.0837 4.0368C44.5678 4.86791 44.3296 5.85732 44.3296 6.88631C44.3296 7.95488 44.5678 8.90471 45.0837 9.73582C45.5996 10.5669 46.2743 11.2397 47.1474 11.7542C48.0205 12.2291 49.0126 12.5062 50.0842 12.5062C51.7113 12.5062 53.0606 11.9521 54.0925 10.8835L55.0053 11.7938C54.41 12.427 53.6956 12.9415 52.8225 13.2581C51.9494 13.6143 51.0366 13.7726 50.0048 13.7726C48.6554 13.6935 47.4649 13.4164 46.3933 12.8228Z"
                                        fill="currentColor" />
                                    <path
                                        d="M69.4114 0.0395508V13.5747H67.9827V7.32163H59.4898V13.5747H58.0611V0.0395508H59.4898V6.05518H67.9827V0.0395508H69.4114Z"
                                        fill="currentColor" />
                                    <path
                                        d="M77.1502 14.6037C77.6661 15.1182 77.9439 15.7514 77.9439 16.543C77.9439 17.097 77.8249 17.6115 77.5471 18.0469C77.2693 18.4822 76.8724 18.8384 76.3565 19.0759C75.8406 19.3133 75.1659 19.4716 74.4118 19.4716C73.6975 19.4716 73.0228 19.3529 72.3878 19.1154C71.7529 18.878 71.2369 18.6009 70.8798 18.2052L71.356 17.4136C71.6735 17.7302 72.11 18.0073 72.6656 18.2447C73.2213 18.4426 73.7769 18.5614 74.4118 18.5614C75.2056 18.5614 75.8406 18.4031 76.2771 18.0469C76.7137 17.6907 76.9518 17.2158 76.9518 16.6221C76.9518 16.0285 76.7137 15.5535 76.2771 15.1974C75.8406 14.8412 75.1659 14.6829 74.2928 14.6829H73.5784V13.9309L76.2771 10.5273H71.2766V9.61707H77.5868V10.3294L74.8087 13.8122C75.8406 13.8518 76.6343 14.1288 77.1502 14.6037Z"
                                        fill="currentColor" />
                                    <path
                                        d="M249.032 141.526C247.96 140.932 247.087 140.101 246.492 139.072C245.896 138.003 245.579 136.856 245.579 135.549C245.579 134.243 245.896 133.056 246.492 132.027C247.087 130.959 247.96 130.167 249.032 129.573C250.103 128.98 251.333 128.703 252.683 128.703C253.675 128.703 254.627 128.861 255.461 129.217C256.334 129.534 257.048 130.048 257.644 130.682L256.731 131.592C255.659 130.523 254.35 129.969 252.723 129.969C251.651 129.969 250.659 130.207 249.786 130.721C248.913 131.196 248.198 131.869 247.722 132.74C247.206 133.571 246.968 134.56 246.968 135.589C246.968 136.658 247.206 137.607 247.722 138.439C248.238 139.27 248.913 139.942 249.786 140.457C250.659 140.932 251.651 141.209 252.723 141.209C254.35 141.209 255.699 140.655 256.731 139.586L257.644 140.497C257.048 141.13 256.334 141.644 255.461 141.961C254.588 142.317 253.675 142.475 252.643 142.475C251.333 142.396 250.143 142.119 249.032 141.526Z"
                                        fill="currentColor" />
                                    <path
                                        d="M272.089 128.742V142.277H270.661V136.024H262.168V142.277H260.739V128.742H262.168V134.758H270.661V128.742H272.089Z"
                                        fill="currentColor" />
                                    <path
                                        d="M279.828 143.306C280.344 143.821 280.622 144.454 280.622 145.246C280.622 145.8 280.503 146.314 280.225 146.75C279.947 147.185 279.55 147.541 279.035 147.779C278.519 148.016 277.844 148.174 277.09 148.174C276.376 148.174 275.701 148.056 275.066 147.818C274.431 147.581 273.915 147.304 273.558 146.908L274.034 146.116C274.352 146.433 274.788 146.71 275.344 146.948C275.899 147.145 276.455 147.264 277.09 147.264C277.884 147.264 278.519 147.106 278.955 146.75C279.392 146.393 279.63 145.919 279.63 145.325C279.63 144.731 279.392 144.256 278.955 143.9C278.519 143.544 277.844 143.386 276.971 143.386H276.257V142.634L278.955 139.23H273.955V138.32H280.265V139.032L277.487 142.515C278.519 142.555 279.273 142.832 279.828 143.306Z"
                                        fill="currentColor" />
                                    <path
                                        fill-rule="evenodd"
                                        clip-rule="evenodd"
                                        d="M107.521 47.6388C108.108 48.6905 108.968 49.54 110.024 50.1468C111.119 50.7535 112.332 51.0367 113.622 50.9963C114.952 50.9963 116.164 50.7131 117.22 50.1063C118.276 49.4995 119.136 48.6501 119.723 47.5983C120.309 46.5466 120.622 45.333 120.622 43.9982C120.622 42.6633 120.348 41.4902 119.723 40.398C119.136 39.3462 118.276 38.4968 117.22 37.89C116.125 37.2832 114.952 37 113.622 37C112.292 37 111.119 37.3237 110.024 37.9304C108.968 38.5372 108.108 39.3867 107.521 40.4384C106.935 41.4902 106.622 42.7037 106.622 44.0386C106.622 45.3735 106.935 46.587 107.521 47.6388ZM118.896 46.3275C118.438 47.1796 117.789 47.8381 116.948 48.3029C116.108 48.7677 115.192 49 114.16 49C113.129 49 112.174 48.7677 111.334 48.3029C110.494 47.8381 109.844 47.1796 109.348 46.3275C108.851 45.4754 108.622 44.5458 108.622 43.5C108.622 42.4543 108.851 41.5247 109.348 40.6726C109.844 39.8205 110.494 39.162 111.334 38.6972C112.174 38.2324 113.129 38 114.16 38C115.192 38 116.108 38.2324 116.948 38.6972C117.789 39.162 118.438 39.8205 118.896 40.6726C119.393 41.5247 119.622 42.4543 119.622 43.5C119.622 44.5458 119.355 45.4754 118.896 46.3275Z"
                                        fill="currentColor" />
                                    <path
                                        d="M135.529 37.004V50.5392H134.1V44.2861H125.607V50.5392H124.179V37.004H125.607V43.0197H134.1V37.004H135.529Z"
                                        fill="currentColor" />
                                    <path
                                        fill-rule="evenodd"
                                        clip-rule="evenodd"
                                        d="M65.5215 126.632C66.1081 127.683 66.9684 128.532 68.0243 129.139C69.1193 129.745 70.2925 130.069 71.6221 129.988C72.9517 129.988 74.164 129.705 75.2198 129.098C76.2757 128.492 77.0969 127.683 77.7226 126.592C78.3092 125.541 78.6221 124.328 78.6221 122.994C78.6221 121.66 78.3483 120.487 77.7226 119.396C77.136 118.345 76.2757 117.496 75.2198 116.889C74.1249 116.283 72.9517 116 71.6221 116C70.2925 116 69.1193 116.323 68.0243 116.93C66.9684 117.536 66.1081 118.385 65.5215 119.436C64.9349 120.487 64.6221 121.7 64.6221 123.034C64.6221 124.368 64.9349 125.581 65.5215 126.632ZM76.8964 125.327C76.438 126.18 75.7887 126.838 74.9485 127.303C74.1082 127.768 73.1533 128 72.1603 128C71.129 128 70.1742 127.768 69.3339 127.303C68.4936 126.838 67.8443 126.18 67.3478 125.327C66.8512 124.475 66.6221 123.546 66.6221 122.5C66.6221 121.454 66.8512 120.525 67.3478 119.673C67.8443 118.82 68.4936 118.162 69.3339 117.697C70.1742 117.232 71.129 117 72.1603 117C73.1915 117 74.1082 117.232 74.9485 117.697C75.7887 118.162 76.438 118.82 76.8964 119.673C77.3929 120.525 77.6221 121.454 77.6221 122.5C77.6221 123.546 77.3547 124.475 76.8964 125.327Z"
                                        fill="currentColor" />
                                    <path
                                        d="M93.5407 115.84V129.376H92.112V123.123H83.6191V129.376H82.1904V115.84H83.6191V121.856H92.112V115.84H93.5407Z"
                                        fill="currentColor" />
                                    <path
                                        d="M11.3503 109.864V123.4H9.92158V117.146H1.42871V123.4H0V109.864H1.42871V115.88H9.92158V109.864H11.3503Z"
                                        fill="currentColor" />
                                    <path
                                        d="M19.7241 123.597C20.24 124.072 20.4781 124.706 20.4781 125.458C20.4781 125.972 20.3591 126.447 20.0813 126.882C19.8035 127.318 19.4463 127.634 18.9304 127.872C18.4144 128.109 17.8192 128.228 17.0651 128.228C16.3904 128.228 15.7555 128.109 15.1602 127.911C14.5649 127.674 14.0886 127.397 13.6918 127.041L14.168 126.289C14.4855 126.605 14.8824 126.882 15.3983 127.08C15.9142 127.278 16.4698 127.397 17.0651 127.397C17.8192 127.397 18.4144 127.238 18.851 126.882C19.2875 126.566 19.486 126.091 19.486 125.497C19.486 124.903 19.2875 124.468 18.851 124.152C18.4144 123.835 17.8192 123.677 16.9461 123.677H16.2714V122.964L18.851 119.719H14.0489V118.848H20.0813V119.521L17.4223 122.845C18.4541 122.845 19.2082 123.123 19.7241 123.597Z"
                                        fill="currentColor" />
                                    <path
                                        d="M26.0343 122.608C24.9627 122.014 24.0896 121.183 23.4943 120.154C22.899 119.086 22.5815 117.938 22.5815 116.632C22.5815 115.326 22.899 114.139 23.4943 113.11C24.0896 112.041 24.9627 111.25 26.0343 110.656C27.1058 110.062 28.3361 109.785 29.6854 109.785C30.6776 109.785 31.63 109.944 32.4634 110.3C33.3365 110.616 34.0509 111.131 34.6462 111.764L33.7334 112.674C32.6619 111.606 31.3522 111.052 29.7251 111.052C28.6536 111.052 27.6614 111.289 26.7883 111.804C25.9152 112.279 25.2008 112.951 24.7246 113.822C24.2087 114.653 23.9706 115.643 23.9706 116.672C23.9706 117.74 24.2087 118.69 24.7246 119.521C25.2405 120.392 25.9152 121.025 26.7883 121.54C27.6614 122.014 28.6536 122.291 29.7251 122.291C31.3522 122.291 32.7016 121.737 33.7334 120.669L34.6462 121.579C34.0509 122.212 33.3365 122.727 32.4634 123.043C31.5903 123.4 30.6776 123.558 29.6457 123.558C28.3361 123.518 27.1058 123.202 26.0343 122.608Z"
                                        fill="currentColor" />
                                    <path
                                        d="M54.41 138.636V152.172H52.9813V145.919H44.4884V152.172H43.0597V138.636H44.4884V144.652H52.9813V138.636H54.41Z"
                                        fill="currentColor" />
                                    <path
                                        d="M62.7838 152.37C63.2997 152.844 63.5378 153.478 63.5378 154.23C63.5378 154.744 63.4188 155.219 63.141 155.654C62.8632 156.05 62.506 156.406 61.9901 156.644C61.4741 156.881 60.8788 157 60.1248 157C59.4501 157 58.8152 156.881 58.2199 156.683C57.6246 156.446 57.1483 156.169 56.7515 155.813L57.2277 155.061C57.5452 155.377 57.9421 155.654 58.458 155.852C58.9739 156.05 59.5295 156.169 60.1248 156.169C60.8788 156.169 61.4741 156.011 61.9107 155.654C62.3472 155.338 62.5457 154.863 62.5457 154.269C62.5457 153.676 62.3472 153.24 61.9107 152.924C61.4741 152.607 60.8788 152.449 60.0057 152.449H59.3311V151.736L61.9107 148.491H57.1086V147.62H63.141V148.293L60.482 151.618C61.5138 151.618 62.2679 151.895 62.7838 152.37Z"
                                        fill="currentColor" />
                                    <path
                                        d="M69.0939 151.38C68.0224 150.787 67.1493 149.955 66.554 148.926C65.9587 147.858 65.6412 146.71 65.6412 145.404C65.6412 144.098 65.9587 142.911 66.554 141.882C67.1493 140.813 68.0224 140.022 69.0939 139.428C70.1655 138.834 71.3958 138.557 72.7451 138.557C73.7372 138.557 74.6897 138.716 75.5231 139.072C76.3962 139.388 77.1106 139.903 77.7059 140.536L76.7931 141.446C75.7216 140.378 74.4119 139.824 72.7848 139.824C71.7132 139.824 70.7211 140.061 69.848 140.576C68.9749 141.051 68.2605 141.723 67.7843 142.594C67.2684 143.425 67.0303 144.415 67.0303 145.444C67.0303 146.512 67.2684 147.462 67.7843 148.293C68.3002 149.164 68.9749 149.797 69.848 150.312C70.7211 150.787 71.7132 151.064 72.7848 151.064C74.4119 151.064 75.7612 150.509 76.7931 149.441L77.7059 150.351C77.1106 150.984 76.3962 151.499 75.5231 151.816C74.65 152.172 73.7372 152.33 72.7054 152.33C71.3958 152.29 70.1655 151.974 69.0939 151.38Z"
                                        fill="currentColor" />
                                </svg>
                            </span>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="effects_media">
                            <img class="lazy" data-src="img/basil.png" src="img/basil.png" alt="media" />

                        </div>
                    </div>
                    <div class="col-md-4">
                        <ul class="effects_list">
                            <li class="effects_list-item d-flex" data-aos="fade-up">
                                <span class="icon d-flex align-items-center justify-content-center" style="background-color: #4682A9;">
                                    <i class="icon-flash" style="color: white; width:26px; text-align:center;"></i>
                                </span>
                                <div class="wrapper">
                                    <h4 class="effects_list-item_header">Meredakan Kecemasan</h4>
                                    <p class="effects_list-item_text">
                                        Kemangi dengan kandungan linaloolnya mampu meredakan kecemasan dan stres, menciptakan suasana tenang serta membantu melepaskan ketegangan mental.
                                    </p>
                                </div>
                            </li>
                            <li class="effects_list-item d-flex" data-aos="fade-up">
                                <span class="icon d-flex align-items-center justify-content-center" style="background-color: #4682A9;">
                                    <i class="icon-heartbeat" style="color: white;"></i>
                                </span>
                                <div class="wrapper">
                                    <h4 class="effects_list-item_header">Memberikan Ketenangan</h4>
                                    <p class="effects_list-item_text">
                                        Myrcene dalam kemangi memberikan efek sedatif, membantu menciptakan rasa rileks dan nyaman.
                                    </p>
                                </div>
                            </li>
                            <li class="effects_list-item d-flex" data-aos="fade-up">
                                <span class="icon d-flex align-items-center justify-content-center" style="background-color: #4682A9;">
                                    <i class="icon-head" style="color: white;"></i>
                                </span>
                                <div class="wrapper">
                                    <h4 class="effects_list-item_header">Relaksasi</h4>
                                    <p class="effects_list-item_text">
                                        Kandungan eugenol dalam kemangi memiliki sifat antioksidan dan anti-inflamasi, membantu meredakan ketegangan fisik dan meningkatkan ketenangan holistik.
                                    </p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- Effects section end  -->
        <!-- Latest news section start -->
        <section class="latest section">
            <div class="container">
                <h2 class="latest_header">Tips and trick!</h2>
                <div class="latest_wrapper d-flex flex-column-reverse flex-lg-row">
                    <div class="latest_promo" data-aos="fade-right">
                        <picture>
                            <source srcset="img/mom3.png" type="image/webp" />
                            <img class="lazy latest_promo-bg" data-src="img/mom3.png" src="img/mom3.png" alt="promo" />
                        </picture>
                    </div>
                    <ul class="latest_list col-lg-7 col-xl-6">
                        <li class="list-item d-flex flex-column flex-sm-row" data-aos="fade-up">
                            <span class="latest_list-preview">
                                <picture>
                                    <source data-srcset="img/mom4.png" srcset="img/mom4.png" type="image/webp" />
                                    <img
                                        class="lazy preview-img"
                                        data-src="img/mom4.png"
                                        src="img/mom4.png"
                                        alt="Top 15 Best Strain Of Weed For Anxiety" />
                                </picture>
                            </span>
                            <div class="latest_list-main d-sm-flex flex-column justify-content-between flex-grow-1">
                                <!-- <span class="metadata">
                                        <span class="metadata_item d-inline-flex align-items-center">
                                            <i class="icon-calendar_day icon secondary"></i>
                                            September 30, 2021
                                        </span>
                                        
                                    </span> -->
                                <a class="title" href="post.html">Gejala, Mencegah dan Mengobati Baby Blues </a>
                                <p class="text">
                                    Sebagian besar wanita bisa mengalami baby blues setelah melahirkan..
                                </p>
                            </div>
                        </li>
                        <li class="list-item d-flex flex-column flex-sm-row" data-aos="fade-up">
                            <span class="latest_list-preview">
                                <picture>
                                    <source data-srcset="img/mom5.png" srcset="img/mom5.png" type="image/webp" />
                                    <img
                                        class="lazy preview-img"
                                        data-src="img/mom5.png"
                                        src="img/mom5.png"
                                        alt="Raw Cannabis Seeds Promote Health" />
                                </picture>
                            </span>
                            <div class="latest_list-main d-sm-flex flex-column justify-content-between flex-grow-1">
                                <!-- <span class="metadata">
                                        <span class="metadata_item d-inline-flex align-items-center">
                                            <i class="icon-calendar_day icon secondary"></i>
                                            September 30, 2021
                                        </span>
                                        
                                    </span> -->
                                <a class="title" href="post1.html">Cara Efektif Atasi Babyblues</a>
                                <p class="text">
                                    Sebagian besar wanita bisa mengalami baby blues setelah melahirkan..
                                </p>
                            </div>
                        </li>
                        <li class="list-item d-flex flex-column flex-sm-row" data-aos="fade-up">
                            <span class="latest_list-preview">
                                <picture>
                                    <source data-srcset="img/mom6.png" srcset="img/mom6.png" type="image/webp" />
                                    <img
                                        class="lazy preview-img"
                                        data-src="img/mom6.png"
                                        src="img/mom6.png"
                                        alt="How Many Autoflowers In a Tent?" />
                                </picture>
                            </span>
                            <div class="latest_list-main d-sm-flex flex-column justify-content-between flex-grow-1">
                                <!-- <span class="metadata">
                                        <span class="metadata_item d-inline-flex align-items-center">
                                            <i class="icon-calendar_day icon secondary"></i>
                                            September 30, 2021
                                        </span>
                                        
                                    </span> -->
                                <a class="title" href="post2.html">Bagaimana cara mencegah baby blues?</a>
                                <p class="text">
                                    Sebagian besar wanita bisa mengalami baby blues setelah melahirkan..
                                </p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- Latest news section end -->

        <!-- Instagram section start -->
        <section class="instagram">
            <div class="container">
                <div class="instagram_header">
                    <h2 class="instagram_header-title">Ikuti Kami di Instagram</h2>
                    <p class="instagram_header-text">
                        Temukan informasi lebih lanjut di Instagram kami @jivajoy
                    </p>
                </div>
            </div>
            <div class="instagram_slider swiper">
                <div class="swiper-wrapper">
                    <div class="instagram_slider-slide swiper-slide" style="position: relative;">
                        <a class="link" href="https://www.instagram.com/jivajoy_official/" target="_blank" rel="noopener noreferrer">
                            <picture>
                                <source data-srcset="img/mom7.png" srcset="img/mom7.png" type="image/webp" />
                                <img class="lazy" data-src="img/mom7.png" src="img/mom7.png" alt="instagram post" />
                            </picture>
                            <span class="overlay d-flex justify-content-center align-items-center" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(70, 130, 169, 0.35);">
                                <i class="icon-instagram"></i>
                            </span>
                        </a>
                    </div>
                    <div class="instagram_slider-slide swiper-slide">
                        <a class="link" href="https://www.instagram.com/jivajoy_official/" target="_blank" rel="noopener norefferer">
                            <picture>
                                <source data-srcset="img/mom8.png" srcset="img/mom8.png" type="image/webp" />
                                <img class="lazy" data-src="img/mom8.png" src="img/mom8.png" alt="instagram post" />
                            </picture>
                            <span class="overlay d-flex justify-content-center align-items-center" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(70, 130, 169, 0.35);">
                                <i class="icon-instagram"></i>
                            </span>
                        </a>
                    </div>
                    <div class="instagram_slider-slide swiper-slide">
                        <a class="link" href="https://www.instagram.com/jivajoy_official/" target="_blank" rel="noopener norefferer">
                            <picture>
                                <source data-srcset="img/mom9.png" srcset="img/mom9.png" type="image/webp" />
                                <img class="lazy" data-src="img/mom9.png" src="img/mom9.png" alt="instagram post" />
                            </picture>
                            <span class="overlay d-flex justify-content-center align-items-center" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(70, 130, 169, 0.35);">
                                <i class="icon-instagram"></i>
                            </span>
                        </a>
                    </div>
                    <div class="instagram_slider-slide swiper-slide">
                        <a class="link" href="https://www.instagram.com/jivajoy_official/" target="_blank" rel="noopener norefferer">
                            <picture>
                                <source data-srcset="img/mom10.png" srcset="img/mom10.png" type="image/webp" />
                                <img class="lazy" data-src="img/mom10.png" src="img/mom10.png" alt="instagram post" />
                            </picture>
                            <span class="overlay d-flex justify-content-center align-items-center" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(70, 130, 169, 0.35);">
                                <i class="icon-instagram"></i>
                            </span>
                        </a>
                    </div>
                    <div class="instagram_slider-slide swiper-slide">
                        <a class="link" href="https://www.instagram.com/jivajoy_official/" target="_blank" rel="noopener norefferer">
                            <picture>
                                <source data-srcset="img/mom11.png" srcset="img/mom11.png" type="image/webp" />
                                <img class="lazy" data-src="img/mom11.png" src="img/mom11.png" alt="instagram post" />
                            </picture>
                            <span class="overlay d-flex justify-content-center align-items-center" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(70, 130, 169, 0.35);">
                                <i class="icon-instagram"></i>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <!-- Instagram section end -->
    </main>
    <!-- Homepage content end -->

    @include('partials.footer')
    @include('partials.popup')

    <script src="js/common.min.js"></script>
    <script src="js/index.min.js"></script>

    <script>
        // Pastikan script ini dijalankan setelah halaman dimuat
        window.addEventListener('load', function() {
            // Periksa jika URL mengandung hash untuk scroll
            if (window.location.hash === '#chatbot') {
                const targetElement = document.getElementById('chatbot');
                if (targetElement) {
                    targetElement.scrollIntoView({
                        behavior: 'smooth'
                    });
                }
            }
        });
    </script>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="js/gemini.js"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            $('#chat-window').html(`
            <div class="chat-bubble bot">
                <h5 style="font-weight: 800;">JivaBot</h5>
                Halo JivFriend! Ada yang bisa saya bantu hari ini? Jika Anda membutuhkan informasi atau dukungan, saya siap membantu!
            </div>
        `);
        });

        // Handle form submission
        $('#ask').submit(function(event) {
            event.preventDefault(); // Prevent default form submission

            // Get the question input
            let question = $('#question').val();
            if (question.trim() === '') return; // Avoid empty submission

            // Display user's message in chat window
            addMessageToChatWindow(question, 'user');

            // Clear input field
            $('#question').val('');

            // Show thinking message from bot
            addMessageToChatWindow('JivaBot sedang berpikir...', 'bot');

            // Send question to server using AJAX
            $.ajax({
                url: '/question', // Endpoint for your chatbot
                type: 'POST',
                data: {
                    question: question,
                    _token: $('meta[name="csrf-token"]').attr('content') // Include CSRF token
                },
                success: function(data) {
                    // Update the last bot message with the actual response
                    const lastBotMessage = $('#chat-window .bot').last();
                    lastBotMessage.remove(); // Remove "JivaBot sedang berpikir..." message

                    // Display bot's response in chat window
                    addMessageToChatWindow(data.answer, 'bot');
                },
                error: function(jqXHR) {
                    const lastBotMessage = $('#chat-window .bot').last();
                    lastBotMessage.remove(); // Remove "JivaBot sedang berpikir..." message

                    let errorMessage = "Terjadi kesalahan, silakan coba lagi.";
                    if (jqXHR.status === 422) {
                        // Handle validation errors
                        errorMessage = "Input tidak valid, silakan coba lagi.";
                    }
                    addMessageToChatWindow(errorMessage, 'bot');
                }
            });
        });

        function addMessageToChatWindow(message, sender) {
            const chatWindow = $('#chat-window');

            // Format message: replace **text** with <strong>text</strong> and \n with <br>
            const formattedMessage = message
                .replace(/\*\*(.*?)\*\*/g, '<strong>$1</strong>') // Format bold
                .replace(/\n/g, '<br>'); // Replace newlines with <br>

            const messageElement = `
            <div class="chat-bubble ${sender}">
                <h5 style="font-weight: 800;">${sender === 'user' ? 'Anda' : 'JivaBot'}</h5>
                ${formattedMessage}
            </div>`;

            chatWindow.append(messageElement);
            chatWindow.scrollTop(chatWindow[0].scrollHeight); // Auto-scroll to the bottom
        }
    </script>
</body>

</html>