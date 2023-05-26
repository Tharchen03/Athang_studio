<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:regular,500,600,700&display=swap" rel="stylesheet">
    <!-- url img -->
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
    <!-- <link rel="stylesheet" href="nullstyle.css"> -->
    <!-- <link rel="stylesheet" href="style.css"> -->
    <link rel="stylesheet" href="css/yeshi.css">

   
    <title>Athang Studio</title>


</head>

<body>

    <div class="wrapper">
        @include('navbar')
        <div class="container">
            @yield('content')
        </div>

        <main class="main">
            <section class="home" id="home">
                <div class="container">
                    <div class="home__inner">
                        <div class="home__items">
                            <?php include 'home.html'; ?>
                            <a href="https://www.athang.com/public/w" class="home__link btn">Know more</a>
                        </div>
                        <div class="home__slider">
                            <div class="home__image">
                                <img src="https://www.athang.com/public/images/logo.jpg" alt="home img"
                                    class="home__img img">
                            </div>

                            <!-- <div class="home__image">
                                <video controls>
                                    <source
                                        src="https://vimeo.com/user19468877?embedded=true&source=owner_name&owner=19468877"
                                        type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>
                            </div>
                            <div class="home__image">
                                <img src="https://www.athang.com/public/images/logo.jpg" alt="home img"
                                    class="home__img img">
                            </div>
                            <div class="home__image">
                                <img src="https://www.athang.com/public/images/logo.jpg" alt="home img"
                                    class="home__img img">
                            </div> -->
                        </div>
                    </div>
                </div>
            </section>




            <div class="wrapper">
                @include('navbar')
                <div class="container">
                    @yield('content')
                </div>



                <!-- start of video.php -->
                <main>
                    <section class="tv-series">
                        <div class="container">
                            <p class="section-subtitle">Best Series</p>
                            <h2 class="h2 section-title">Athang Series</h2>
                            <ul class="movies-list">

                                <li>
                                    <div class="movie-card">

                                        <a href="https://www.youtube.com/watch?v=5NSr6MgDsRA&t=4s">
                                            <figure class="card-banner">
                                                <img src="https://upload.wikimedia.org/wikipedia/en/b/b7/Ap_Bokto.jpg"
                                                    alt="Sonic the Hedgehog 2 movie poster">
                                            </figure>
                                        </a>

                                        <div class="title-wrapper">
                                            <a href="./movie-details.html">
                                                <h3 class="card-title">Ap Bokto</h3>
                                            </a>

                                            <time datetime="2022">2022</time>
                                        </div>

                                        <div class="card-meta">
                                            <div class="badge badge-outline">2K</div>

                                            <div class="duration">
                                                <ion-icon name="time-outline"></ion-icon>

                                                <time datetime="PT122M">122 min</time>
                                            </div>

                                            <div class="rating">
                                                <ion-icon name="star"></ion-icon>

                                                <data>7.8</data>
                                            </div>
                                        </div>

                                    </div>
                                </li>

                                <li>
                                    <div class="movie-card">

                                        <a href="https://www.youtube.com/watch?v=F80B1GCxzgI">
                                            <figure class="card-banner">
                                                <img src="https://pbs.twimg.com/profile_images/652434380279840768/hfOScPdq_400x400.jpg"
                                                    alt="Morbius movie poster">
                                            </figure>
                                        </a>

                                        <div class="title-wrapper">
                                            <a href="./movie-details.html">
                                                <h3 class="card-title">Ap bokto lite</h3>
                                            </a>

                                            <time datetime="2022">2022</time>
                                        </div>

                                        <div class="card-meta">
                                            <div class="badge badge-outline">HD</div>

                                            <div class="duration">
                                                <ion-icon name="time-outline"></ion-icon>

                                                <time datetime="PT104M">104 min</time>
                                            </div>

                                            <div class="rating">
                                                <ion-icon name="star"></ion-icon>

                                                <data>5.9</data>
                                            </div>
                                        </div>

                                    </div>
                                </li>

                                <li>
                                    <div class="movie-card">

                                        <a href="./movie-details.html">
                                            <figure class="card-banner">
                                                <img src="https://upload.wikimedia.org/wikipedia/en/b/b7/Ap_Bokto.jpg"
                                                    alt="Sonic the Hedgehog 2 movie poster">
                                            </figure>
                                        </a>

                                        <div class="title-wrapper">
                                            <a href="./movie-details.html">
                                                <h3 class="card-title">The Adam Project</h3>
                                            </a>

                                            <time datetime="2022">2022</time>
                                        </div>

                                        <div class="card-meta">
                                            <div class="badge badge-outline">4K</div>

                                            <div class="duration">
                                                <ion-icon name="time-outline"></ion-icon>

                                                <time datetime="PT106M">106 min</time>
                                            </div>

                                            <div class="rating">
                                                <ion-icon name="star"></ion-icon>

                                                <data>7.0</data>
                                            </div>
                                        </div>

                                    </div>
                                </li>

                                <li>
                                    <div class="movie-card">

                                        <a href="./movie-details.html">
                                            <figure class="card-banner">
                                                <img src="https://upload.wikimedia.org/wikipedia/en/b/b7/Ap_Bokto.jpg"
                                                    alt="Sonic the Hedgehog 2 movie poster">
                                            </figure>
                                        </a>

                                        <div class="title-wrapper">
                                            <a href="./movie-details.html">
                                                <h3 class="card-title">Free Guy</h3>
                                            </a>

                                            <time datetime="2021">2021</time>
                                        </div>

                                        <div class="card-meta">
                                            <div class="badge badge-outline">4K</div>

                                            <div class="duration">
                                                <ion-icon name="time-outline"></ion-icon>

                                                <time datetime="PT115M">115 min</time>
                                            </div>

                                            <div class="rating">
                                                <ion-icon name="star"></ion-icon>

                                                <data>7.7</data>
                                            </div>
                                        </div>

                                    </div>
                                </li>

                                <li>
                                    <div class="movie-card">

                                        <a href="./movie-details.html">
                                            <figure class="card-banner">
                                                <img src="https://upload.wikimedia.org/wikipedia/en/b/b7/Ap_Bokto.jpg"
                                                    alt="Sonic the Hedgehog 2 movie poster">
                                            </figure>
                                        </a>

                                        <div class="title-wrapper">
                                            <a href="./movie-details.html">
                                                <h3 class="card-title">The Batman</h3>
                                            </a>

                                            <time datetime="2022">2022</time>
                                        </div>

                                        <div class="card-meta">
                                            <div class="badge badge-outline">4K</div>

                                            <div class="duration">
                                                <ion-icon name="time-outline"></ion-icon>

                                                <time datetime="PT176M">176 min</time>
                                            </div>

                                            <div class="rating">
                                                <ion-icon name="star"></ion-icon>

                                                <data>7.9</data>
                                            </div>
                                        </div>

                                    </div>
                                </li>

                                <li>
                                    <div class="movie-card">

                                        <a href="./movie-details.html">
                                            <figure class="card-banner">
                                                <img src="https://upload.wikimedia.org/wikipedia/en/b/b7/Ap_Bokto.jpg"
                                                    alt="Sonic the Hedgehog 2 movie poster">
                                            </figure>
                                        </a>

                                        <div class="title-wrapper">
                                            <a href="./movie-details.html">
                                                <h3 class="card-title">Uncharted</h3>
                                            </a>

                                            <time datetime="2022">2022</time>
                                        </div>

                                        <div class="card-meta">
                                            <div class="badge badge-outline">HD</div>

                                            <div class="duration">
                                                <ion-icon name="time-outline"></ion-icon>

                                                <time datetime="PT116M">116 min</time>
                                            </div>

                                            <div class="rating">
                                                <ion-icon name="star"></ion-icon>

                                                <data>7.0</data>
                                            </div>
                                        </div>

                                    </div>
                                </li>

                                <li>
                                    <div class="movie-card">

                                        <a href="./movie-details.html">
                                            <figure class="card-banner">
                                                <img src="https://upload.wikimedia.org/wikipedia/en/b/b7/Ap_Bokto.jpg"
                                                    alt="Sonic the Hedgehog 2 movie poster">
                                            </figure>
                                        </a>

                                        <div class="title-wrapper">
                                            <a href="./movie-details.html">
                                                <h3 class="card-title">Death on the Nile</h3>
                                            </a>

                                            <time datetime="2022">2022</time>
                                        </div>

                                        <div class="card-meta">
                                            <div class="badge badge-outline">2K</div>

                                            <div class="duration">
                                                <ion-icon name="time-outline"></ion-icon>

                                                <time datetime="PT127M">127 min</time>
                                            </div>

                                            <div class="rating">
                                                <ion-icon name="star"></ion-icon>

                                                <data>6.5</data>
                                            </div>
                                        </div>

                                    </div>
                                </li>

                                <li>
                                    <div class="movie-card">

                                        <a href="./movie-details.html">
                                            <figure class="card-banner">
                                                <img src="https://upload.wikimedia.org/wikipedia/en/b/b7/Ap_Bokto.jpg"
                                                    alt="Sonic the Hedgehog 2 movie poster">
                                            </figure>
                                        </a>

                                        <div class="title-wrapper">
                                            <a href="./movie-details.html">
                                                <h3 class="card-title">The King's Man</h3>
                                            </a>

                                            <time datetime="2021">2021</time>
                                        </div>

                                        <div class="card-meta">
                                            <div class="badge badge-outline">HD</div>

                                            <div class="duration">
                                                <ion-icon name="time-outline"></ion-icon>

                                                <time datetime="PT131M">131 min</time>
                                            </div>

                                            <div class="rating">
                                                <ion-icon name="star"></ion-icon>

                                                <data>7.0</data>
                                            </div>
                                        </div>

                                    </div>
                                </li>

                            </ul>

                        </div>
                    </section>



                    <section class="tv-series">
                        <div class="container">

                            <p class="section-subtitle">Best shorts</p>

                            <h2 class="h2 section-title">Athang Series</h2>

                            <ul class="movies-list">
                                @foreach ($students as $shorts)
                                    <li>

                                        <div class="movie-card">

                                            <a href="{{ $shorts->vediolink }}">
                                                <figure class="card-banner">
                                                    <img src="{{ $shorts->image }}" alt="Moon Knight movie poster">
                                                </figure>
                                            </a>

                                            <div class="title-wrapper">
                                                <a href="./movie-details.html">
                                                    <h3 class="card-title">{{ $shorts->name }}</h3>
                                                </a>

                                                <time datetime="2022">2023</time>
                                            </div>

                                            <div class="card-meta">
                                                <div class="badge badge-outline">#{{ $loop->iteration }}Trending</div>

                                                <div class="duration">
                                                    <ion-icon name="time-outline"></ion-icon>

                                                    <time datetime="PT47M">47 min</time>
                                                </div>

                                                <div class="rating">
                                                    <ion-icon name="star"></ion-icon>

                                                    <data>8.6</data>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>

                        </div>
                    </section>
                </main>


                <!--- ionicon link-->
                <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
                <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
                <!-- end of video.php -->



                <?php include 'about.html'; ?>


                <a href="#top" class="go-top" data-go-top>
                    <ion-icon name="chevron-up"></ion-icon>
                </a>
                <!-- custom js link-->
                <script src="script/script.js"></script>
                @include('footer')
            </div>
            <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
            <script src="script/slick.min.js"></script>
            <script src="script/script.js"></script>
</body>
</html>
