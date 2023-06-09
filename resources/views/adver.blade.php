<!DOCTYPE html>
<html lang="en">

<head>
    <title>Athang studio</title>

    <meta name="robots" content="index,follow">
    <meta http-equiv="content-language" content="en">
    <meta name="description"
        content="Watch your favorite anime online in Dub or Sub format without registration on Zoro.to fastest Streaming server NOW.">
    <meta name="keywords"
        content="watch anime online, anime site, free anime, anime to watch, online anime, anime streaming, stream anime online, english anime, english dubbed anime">
    <meta property="og:type" content="website">
    <!-- <meta property="og:url" content="https://zoro.to/home/"> -->
    <meta property="og:title" content="Athang studio">
    <!-- <meta property="og:image" content="capture.png"> -->
    <meta property="og:image:width" content="650">
    <meta property="og:image:height" content="350">
    <meta property="og:description"
        content="Watch your favorite anime online in Dub or Sub format without registration on Zoro.to fastest Streaming server NOW.">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <meta name="apple-mobile-web-app-status-bar" content="#202125">
    <meta name="theme-color" content="#202125">
    <!-- <link rel="shortcut icon" href="favicon.png" type="image/x-icon"> -->
    <link rel="apple-touch-icon" sizes="180x180" href="images/apple-touch-icon.png">
    <link rel="icon" type="lo3.png"" sizes="32x32" href="images/lo3.png">
    <link rel="icon" type="lo3.png"" sizes="16x16" href="images/lo3.png">





    <!-- <link rel="mask-icon" href="safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <link rel="icon" sizes="192x192" href="touch-icon-192x192.png">
    <link rel="manifest" href="/manifest.json?v=0.2"> -->
    <!-- Google tag (gtag.js)
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-EQP67TWZDC"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-EQP67TWZDC');
    </script>
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "WebSite",
        "url": "https://zoro.to/",
        "potentialAction": {
            "@type": "SearchAction",
            "target": "https://zoro.to/search?keyword={keyword}",
            "query-input": "required name=keyword"
        }
    }
</script>
    <!--Begin: Stylesheet-->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-icons.css">
    <link rel="stylesheet" href="css/all.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="css/styles.min.css">
    <!--End: Stylesheet-->
</head>


<body>

    <div class="wrapper">
        @include('navbar')
        <div class="container">
            @yield('content')
        </div>
        <div id="wrapper">
            <section class="block_area block_area_home">
                <div class="block_area-header">
                    <div class="float-left bah-heading mr-4">
                        <h2 class="cat-heading">Ap Bokto Seriess</h2>
                    </div>
                    <div class="float-right viewmore"><a class="btn" href="/recently-updated">View more<i
                                class="fas fa-angle-right ml-2"></i></a></div>
                    <div class="clearfix"></div>
                </div>
                <div class="tab-content">
                    <div class="block_area-content block_area-list film_list film_list-grid">
                       
                        <div class="film_list-wrap">
                            @foreach ($series as $series)

                            <div class="flw-item">

                                <div class="film-poster">


                                    <div class="tick ltr">



                                        <div class="tick-item tick-sub"><i class="fas fa-closed-captioning mr-1"></i>9
                                        </div>



                                        <div class="tick-item tick-eps">12</div>

                                    </div>

                                    <img data-src="{{ $series->image }}"
                                        class="film-poster-img lazyload" alt="Painting Rivers and Lakes 6">
                                    <a href="{{ $series->vediolink }}" class="film-poster-ahref item-qtip"
                                        title="Painting Rivers and Lakes 6" data-id="18266"><i
                                            class="fas fa-play"></i></a>
                                </div>
                                <div class="film-detail">
                                    <h3 class="film-name"><a href="/painting-rivers-and-lakes-6-18266"
                                            title="{{ $series->description }}" class="dynamic-name"
                                            data-jname="Hua Jianghu: Bu Liang Ren VI">   {{ $series->name }}
                                            </a></h3>
                                    <div class="fd-infor">

                                        <span class="fdi-item">ONA</span>
                                        <span class="dot"></span>
                                        <span class="fdi-item fdi-duration">26m</span>

                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            @endforeach




                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </section>




            @include('footer')
        </div>
        <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
        <script src="script/slick.min.js"></script>
        <script src="script/script.js"></script>
</body>

</html>
