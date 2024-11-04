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
    <title> JivaJoy | Berita</title>
    <link rel="stylesheet preload" as="style" href="css/preload.min.css" />
    <link rel="stylesheet preload" as="style" href="css/libs.min.css" />
    <link rel="stylesheet" href="css/index.css" />
    <link rel="shortcut icon" type="image/x-icon" href="img/logo.svg">
    <script src="js/script.js"></script>
    <link rel="stylesheet" href="css/news2.min.css" />
    <link rel="stylesheet" href="css/skeleton.css" />
</head>

<body>
    @include('partials.navbar')
    <!-- News content start -->
    <main class="news-section">
        <div class="container d-lg-flex justify-content-between">
            <div class="news_wrapper">
                <ul class="news_list d-flex flex-wrap" id="news-box">
                    <li class="news_list-item col-md-6" data-order="1">
                        <div class="news_list-item_wrapper d-flex flex-column">
                            <div class="media skeleton p-5">

                            </div>
                            <div class="main d-flex flex-column justify-content-between">
                                <div class="main_metadata">
                                    <span class="main_metadata-item">
                                        <i class="icon-calendar_day icon"></i>
                                        <span class="skeleton media px-5">
                                        </span>
                                    </span>

                                    <span class="main_metadata-item">
                                        <i class="icon-comments icon"></i>
                                        <span class="skeleton media px-5">
                                        </span>
                                    </span>


                                </div>
                                <a class="main_title main_title--bookmarked" href="post.html" target="_blank" rel="noopener norefferer"> <span class="skeleton media px-5">
                                    </span></a>
                                <p class="main_preview skeleton skeleton-text py-4 media"> </p>
                            </div>
                        </div>
                    </li>

                </ul>
                <ul class="pagination d-flex align-items-center" id="pagination">
                    <li class="pagination-page">
                        <a class="pagination-page_link d-flex align-items-center justify-content-center" href="#" data-current="true"><span class="skeleton media px-5">
                            </span></a>
                    </li>

                </ul>
            </div>
            <div class="widgets">
                <div class="widgets-item widgets-item--recent">
                    <h4 class="widgets-item_header d-flex align-items-center">
                        Recent Posts
                    </h4>
                    <ul class="list" id="news-recent-post">
                        <li class="list-item">
                            <a class="d-flex flex-column flex-sm-row align-items-sm-center" href="post.html">
                                <span class="skeleton media p-3">
                                </span>
                                <span class="wrapper">
                                    <span class="title"><span class="skeleton media px-5">
                                        </span></span>
                                    <br>
                                    <span class="metadata "><i class="icon-calendar_day icon"></i><span class="skeleton media px-4">
                                        </span></span>
                                </span>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="widgets-item widgets-item--tags">

                </div>
            </div>
    </main>
    <!-- News content end -->
    @include('partials.footer')
    @include('partials.popup')

    <script src="js/common.min.js"></script>
</body>
<script src="js/news/news.js"></script>
<script>
    init()
</script>

</html>