file name welcome.blade.php
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:regular,500,600,700&display=swap" rel="stylesheet">
 <!-- url img -->
 <link rel="icon" type="Athang_logo.jpg" sizes="32x32" href="Athang_logo.jpg">
    <link rel="icon" type="Athang_logo.jpg" sizes="16x16" href="Athang_logo.jpg">
    <!-- end -->
    <link rel="stylesheet" href="nullstyle.css">
    <link rel="stylesheet" href="style.css">

<!--Begin: Stylesheet-->
<link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap-icons.css">
    <link rel="stylesheet" href="all.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="styles.min.css">
    <!--End: Stylesheet-->

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
                            <h1 class="home__title">Athang <br> is waiting for you</h1>
                            <p class="home__subtitle text">is a pioneering software development and trainingacademy firm
                                greatly driven by the information technology.
                                The company was founded in 2005 with the aim to meet the ever changing demand of the
                                customers in the field of ICT. Athang strives for
                                the excellence in offering our services, be it a training programme or developing your
                                website or
                                producing an animation work that our audience would love to watch or restoring your
                                internet breakdown and many more…
                                As a company, Athang believes in the team work and democratic working culture to bring
                                the best of every employees at personal
                                as well as professional level.</p>
                            <a href="https://www.athang.com/public/w" class="home__link btn">Know more</a>
                        </div>
                        <div class="home__slider">
                            <div class="home__image">
                                <img src="https://www.athang.com/public/images/logo.jpg" alt="home img"
                                    class="home__img img">
                            </div>

                            <div class="home__image">
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
                            </div>
                        </div>
                    </div>
                </div>
            </section>




            <div class="wrapper">
        @include('navbar')
        <div class="container">
            @yield('content')
        </div>

        <!-- from video.php -->
        <div id="wrapper">

            <div id="anime-trending">
                <div class="container">
                    <section class="block_area block_area_trending">
                        <div class="block_area-header">
                            <div class="bah-heading">
                                <h2 class="cat-heading">Athang Shorts</h2>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="block_area-content">
                            <div class="trending-list" id="trending-home" style="display: none;">
                                <div class="swiper-container">
                                    <div class="swiper-wrapper">

                                        <div class="swiper-slide item-qtip" data-id="100">
                                            <div class="item">
                                                <div class="number">
                                                    <span>01</span>
                                                    <div class="film-title dynamic-name" data-jname="One Piece">One
                                                        Piece
                                                    </div>
                                                </div>
                                                <a href="/one-piece-100" class="film-poster">
                                                    <img data-src="https://img.zorores.com/_r/300x400/100/54/90/5490cb32786d4f7fef0f40d7266df532/5490cb32786d4f7fef0f40d7266df532.jpg"
                                                        class="film-poster-img lazyload" title="One Piece"
                                                        alt="One Piece">
                                                </a>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>

                                        <div class="swiper-slide item-qtip" data-id="18056">
                                            <div class="item">
                                                <div class="number">
                                                    <span>02</span>
                                                    <div class="film-title dynamic-name"
                                                        data-jname="Kimetsu no Yaiba: Katanakaji no Sato-hen">Demon
                                                        Slayer:
                                                        Kimetsu no Yaiba Swordsmith Village Arc</div>
                                                </div>
                                                <a href="/demon-slayer-kimetsu-no-yaiba-swordsmith-village-arc-18056"
                                                    class="film-poster">
                                                    <img data-src="https://img.zorores.com/_r/300x400/100/db/2f/db2f3ce7b9cab7fdc160b005bffb899a/db2f3ce7b9cab7fdc160b005bffb899a.png"
                                                        class="film-poster-img lazyload"
                                                        title="Demon Slayer: Kimetsu no Yaiba Swordsmith Village Arc"
                                                        alt="Demon Slayer: Kimetsu no Yaiba Swordsmith Village Arc">
                                                </a>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>

                                        <div class="swiper-slide item-qtip" data-id="18330">
                                            <div class="item">
                                                <div class="number">
                                                    <span>03</span>
                                                    <div class="film-title dynamic-name" data-jname Oshi no Ko"">My
                                                        Star
                                                    </div>
                                                </div>
                                                <a href="/my-star-18330" class="film-poster">
                                                    <img data-src="https://img.zorores.com/_r/300x400/100/99/59/995928d6858977d66f7da57e0e0af08a/995928d6858977d66f7da57e0e0af08a.jpg"
                                                        class="film-poster-img lazyload" title="My Star"
                                                        alt="My Star">
                                                </a>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>

                                        <div class="swiper-slide item-qtip" data-id="18343">
                                            <div class="item">
                                                <div class="number">
                                                    <span>04</span>
                                                    <div class="film-title dynamic-name"
                                                        data-jname="Isekai de Cheat Skill wo Te ni Shita Ore wa, Genjitsu Sekai wo mo Musou Suru: Level Up wa Jinsei wo Kaeta">
                                                        I Got a Cheat Skill in Another World and Became Unrivaled in The
                                                        Real World, Too</div>
                                                </div>
                                                <a href="/i-got-a-cheat-skill-in-another-world-and-became-unrivaled-in-the-real-world-too-18343"
                                                    class="film-poster">
                                                    <img data-src="https://img.zorores.com/_r/300x400/100/0a/d5/0ad5356f28ee75bccfde8b69ea6a5e54/0ad5356f28ee75bccfde8b69ea6a5e54.jpg"
                                                        class="film-poster-img lazyload"
                                                        title="I Got a Cheat Skill in Another World and Became Unrivaled in The Real World, Too"
                                                        alt="I Got a Cheat Skill in Another World and Became Unrivaled in The Real World, Too">
                                                </a>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>

                                        <div class="swiper-slide item-qtip" data-id="18339">
                                            <div class="item">
                                                <div class="number">
                                                    <span>05</span>
                                                    <div class="film-title dynamic-name" data-jname="Mashle">Mashle:
                                                        Magic
                                                        and Muscles</div>
                                                </div>
                                                <a href="/mashle-magic-and-muscles-18339" class="film-poster">
                                                    <img data-src="https://img.zorores.com/_r/300x400/100/9f/af/9faf29fb396c436d19ed83fa82a31e2f/9faf29fb396c436d19ed83fa82a31e2f.jpg"
                                                        class="film-poster-img lazyload"
                                                        title="Mashle: Magic and Muscles"
                                                        alt="Mashle: Magic and Muscles">
                                                </a>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>

                                        <div class="swiper-slide item-qtip" data-id="18332">
                                            <div class="item">
                                                <div class="number">
                                                    <span>06</span>
                                                    <div class="film-title dynamic-name" data-jname="Jigokuraku">
                                                        Hell's
                                                        Paradise</div>
                                                </div>
                                                <a href="/hells-paradise-18332" class="film-poster">
                                                    <img data-src="https://img.zorores.com/_r/300x400/100/5f/d0/5fd0a7d4f0e1a9088c85bc0dcb2f176a/5fd0a7d4f0e1a9088c85bc0dcb2f176a.png"
                                                        class="film-poster-img lazyload" title="Hell's Paradise"
                                                        alt="Hell's Paradise">
                                                </a>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>

                                        <div class="swiper-slide item-qtip" data-id="17725">
                                            <div class="item">
                                                <div class="number">
                                                    <span>07</span>
                                                    <div class="film-title dynamic-name"
                                                        data-jname="Dr. Stone 3rd Season">
                                                        Dr. Stone: New World</div>
                                                </div>
                                                <a href="/dr-stone-new-world-17725" class="film-poster">
                                                    <img data-src="https://img.zorores.com/_r/300x400/100/0c/ab/0cab1ee2bbe1a4def0790121df2c1fc7/0cab1ee2bbe1a4def0790121df2c1fc7.jpg"
                                                        class="film-poster-img lazyload" title="Dr. Stone: New World"
                                                        alt="Dr. Stone: New World">
                                                </a>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>

                                        <div class="swiper-slide item-qtip" data-id="17889">
                                            <div class="item">
                                                <div class="number">
                                                    <span>08</span>
                                                    <div class="film-title dynamic-name" data-jname="Blue Lock">Blue
                                                        Lock
                                                    </div>
                                                </div>
                                                <a href="/blue-lock-17889" class="film-poster">
                                                    <img data-src="https://img.zorores.com/_r/300x400/100/fc/ed/fced51e392ffd80041b3a1581ba7de2f/fced51e392ffd80041b3a1581ba7de2f.jpg"
                                                        class="film-poster-img lazyload" title="Blue Lock"
                                                        alt="Blue Lock">
                                                </a>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>

                                        <div class="swiper-slide item-qtip" data-id="18154">
                                            <div class="item">
                                                <div class="number">
                                                    <span>09</span>
                                                    <div class="film-title dynamic-name"
                                                        data-jname="Boku no Hero Academia 6th Season">My Hero Academia
                                                        Season 6</div>
                                                </div>
                                                <a href="/my-hero-academia-season-6-18154" class="film-poster">
                                                    <img data-src="https://img.zorores.com/_r/300x400/100/20/b7/20b7580c1abdf45a6eaf4826fc9fdf33/20b7580c1abdf45a6eaf4826fc9fdf33.jpg"
                                                        class="film-poster-img lazyload"
                                                        title="My Hero Academia Season 6"
                                                        alt="My Hero Academia Season 6">
                                                </a>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>

                                        <div class="swiper-slide item-qtip" data-id="18244">
                                            <div class="item">
                                                <div class="number">
                                                    <span>10</span>
                                                    <div class="film-title dynamic-name"
                                                        data-jname="Tokyo Revengers: Seiya Kessen-hen">Tokyo Revengers:
                                                        Christmas Showdown</div>
                                                </div>
                                                <a href="/tokyo-revengers-christmas-showdown-18244"
                                                    class="film-poster">
                                                    <img data-src="https://img.zorores.com/_r/300x400/100/fb/66/fb663be9a427cc4c9556a5a124b060e8/fb663be9a427cc4c9556a5a124b060e8.jpg"
                                                        class="film-poster-img lazyload"
                                                        title="Tokyo Revengers: Christmas Showdown"
                                                        alt="Tokyo Revengers: Christmas Showdown">
                                                </a>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="trending-navi">
                                    <div class="navi-next"><i class="fas fa-angle-right"></i></div>
                                    <div class="navi-prev"><i class="fas fa-angle-left"></i></div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>


            <!--/End: trending-->
            <div class="share-buttons share-buttons-home">
                <div class="container">
                    <div class="share-buttons-block">
                        <div class="share-icon"></div>
                        <div class="sbb-title">
                            <span>Share Athang Shorts</span>
                            <p class="mb-0">to your friends</p>
                        </div>
                        <div class="addthis_inline_share_toolbox"></div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <!--Begin: Events-->



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

                            <div class="flw-item">

                                <div class="film-poster">


                                    <div class="tick ltr">



                                        <div class="tick-item tick-sub"><i class="fas fa-closed-captioning mr-1"></i>9
                                        </div>



                                        <div class="tick-item tick-eps">12</div>

                                    </div>

                                    <img data-src="https://img.zorores.com/_r/300x400/100/aa/c8/aac8106ff0d4a84f7b44e8f78582aa38/aac8106ff0d4a84f7b44e8f78582aa38.png"
                                        class="film-poster-img lazyload" alt="Painting Rivers and Lakes 6">
                                    <a href="/painting-rivers-and-lakes-6-18266" class="film-poster-ahref item-qtip"
                                        title="Painting Rivers and Lakes 6" data-id="18266"><i
                                            class="fas fa-play"></i></a>
                                </div>
                                <div class="film-detail">
                                    <h3 class="film-name"><a href="/painting-rivers-and-lakes-6-18266"
                                            title="Painting Rivers and Lakes 6" class="dynamic-name"
                                            data-jname="Hua Jianghu: Bu Liang Ren VI">Painting Rivers and Lakes
                                            6</a></h3>
                                    <div class="fd-infor">

                                        <span class="fdi-item">ONA</span>
                                        <span class="dot"></span>
                                        <span class="fdi-item fdi-duration">26m</span>

                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>

                            <div class="flw-item">

                                <div class="film-poster">


                                    <div class="tick ltr">



                                        <div class="tick-item tick-sub"><i class="fas fa-closed-captioning mr-1"></i>4
                                        </div>



                                        <div class="tick-item tick-eps">12</div>

                                    </div>

                                    <img data-src="https://img.zorores.com/_r/300x400/100/ef/58/ef589599341efbee4e87edd81f6648ae/ef589599341efbee4e87edd81f6648ae.jpg"
                                        class="film-poster-img lazyload" alt="Kizuna no Allele">
                                    <a href="/kizuna-no-allele-18370" class="film-poster-ahref item-qtip"
                                        title="Kizuna no Allele" data-id="18370"><i class="fas fa-play"></i></a>
                                </div>
                                <div class="film-detail">
                                    <h3 class="film-name"><a href="/kizuna-no-allele-18370" title="Kizuna no Allele"
                                            class="dynamic-name" data-jname="Kizuna no Allele">Kizuna no Allele</a>
                                    </h3>
                                    <div class="fd-infor">

                                        <span class="fdi-item">TV</span>
                                        <span class="dot"></span>
                                        <span class="fdi-item fdi-duration">23m</span>

                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>

                            <div class="flw-item">

                                <div class="film-poster">


                                    <div class="tick ltr">



                                        <div class="tick-item tick-sub"><i class="fas fa-closed-captioning mr-1"></i>4
                                        </div>


                                        <div class="tick-item tick-dub"><i class="fas fa-microphone mr-1"></i>1
                                        </div>


                                        <div class="tick-item tick-eps">13</div>

                                    </div>

                                    <img data-src="https://img.zorores.com/_r/300x400/100/0a/d5/0ad5356f28ee75bccfde8b69ea6a5e54/0ad5356f28ee75bccfde8b69ea6a5e54.jpg"
                                        class="film-poster-img lazyload"
                                        alt="I Got a Cheat Skill in Another World and Became Unrivaled in The Real World, Too">
                                    <a href="/i-got-a-cheat-skill-in-another-world-and-became-unrivaled-in-the-real-world-too-18343"
                                        class="film-poster-ahref item-qtip"
                                        title="I Got a Cheat Skill in Another World and Became Unrivaled in The Real World, Too"
                                        data-id="18343"><i class="fas fa-play"></i></a>
                                </div>
                                <div class="film-detail">
                                    <h3 class="film-name"><a
                                            href="/i-got-a-cheat-skill-in-another-world-and-became-unrivaled-in-the-real-world-too-18343"
                                            title="I Got a Cheat Skill in Another World and Became Unrivaled in The Real World, Too"
                                            class="dynamic-name"
                                            data-jname="Isekai de Cheat Skill wo Te ni Shita Ore wa, Genjitsu Sekai wo mo Musou Suru: Level Up wa Jinsei wo Kaeta">I
                                            Got a Cheat Skill in Another World and Became Unrivaled in The Real
                                            World, Too</a></h3>
                                    <div class="fd-infor">

                                        <span class="fdi-item">TV</span>
                                        <span class="dot"></span>
                                        <span class="fdi-item fdi-duration">24m</span>

                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>

                            <div class="flw-item">

                                <div class="film-poster">

                                    <div class="tick tick-rate">18+</div>


                                    <div class="tick ltr">



                                        <div class="tick-item tick-sub"><i
                                                class="fas fa-closed-captioning mr-1"></i>16</div>


                                        <div class="tick-item tick-dub"><i class="fas fa-microphone mr-1"></i>14
                                        </div>


                                    </div>

                                    <img data-src="https://img.zorores.com/_r/300x400/100/17/3e/173e4c5db060f057506138057261b259/173e4c5db060f057506138057261b259.jpg"
                                        class="film-poster-img lazyload" alt="Vinland Saga: 2nd Season">
                                    <a href="/vinland-saga-2nd-season-18239" class="film-poster-ahref item-qtip"
                                        title="Vinland Saga: 2nd Season" data-id="18239"><i
                                            class="fas fa-play"></i></a>
                                </div>
                                <div class="film-detail">
                                    <h3 class="film-name"><a href="/vinland-saga-2nd-season-18239"
                                            title="Vinland Saga: 2nd Season" class="dynamic-name"
                                            data-jname="Vinland Saga Season 2">Vinland Saga: 2nd Season</a></h3>
                                    <div class="fd-infor">

                                        <span class="fdi-item">TV</span>
                                        <span class="dot"></span>
                                        <span class="fdi-item fdi-duration">23m</span>

                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>

                            <div class="flw-item">

                                <div class="film-poster">


                                    <div class="tick ltr">



                                        <div class="tick-item tick-sub"><i class="fas fa-closed-captioning mr-1"></i>3
                                        </div>



                                    </div>

                                    <img data-src="https://img.zorores.com/_r/300x400/100/20/2a/202a4c434af567174dc7683de096a96c/202a4c434af567174dc7683de096a96c.jpg"
                                        class="film-poster-img lazyload" alt="Insomniacs After School">
                                    <a href="/insomniacs-after-school-18344" class="film-poster-ahref item-qtip"
                                        title="Insomniacs After School" data-id="18344"><i
                                            class="fas fa-play"></i></a>
                                </div>
                                <div class="film-detail">
                                    <h3 class="film-name"><a href="/insomniacs-after-school-18344"
                                            title="Insomniacs After School" class="dynamic-name"
                                            data-jname="Kimi wa Houkago Insomnia">Insomniacs After School</a>
                                    </h3>
                                    <div class="fd-infor">

                                        <span class="fdi-item">TV</span>
                                        <span class="dot"></span>
                                        <span class="fdi-item fdi-duration">23m</span>

                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>

                            <div class="flw-item">

                                <div class="film-poster">


                                    <div class="tick ltr">



                                        <div class="tick-item tick-sub"><i class="fas fa-closed-captioning mr-1"></i>4
                                        </div>


                                        <div class="tick-item tick-dub"><i class="fas fa-microphone mr-1"></i>2
                                        </div>


                                    </div>

                                    <img data-src="https://img.zorores.com/_r/300x400/100/ba/cb/bacb7124d070a26097c77601250a205e/bacb7124d070a26097c77601250a205e.jpg"
                                        class="film-poster-img lazyload" alt="In Another World With My Smartphone 2">
                                    <a href="/in-another-world-with-my-smartphone-2-18342"
                                        class="film-poster-ahref item-qtip"
                                        title="In Another World With My Smartphone 2" data-id="18342"><i
                                            class="fas fa-play"></i></a>
                                </div>
                                <div class="film-detail">
                                    <h3 class="film-name"><a href="/in-another-world-with-my-smartphone-2-18342"
                                            title="In Another World With My Smartphone 2" class="dynamic-name"
                                            data-jname="Isekai wa Smartphone to Tomo ni. 2">In Another World
                                            With My Smartphone 2</a></h3>
                                    <div class="fd-infor">

                                        <span class="fdi-item">TV</span>
                                        <span class="dot"></span>
                                        <span class="fdi-item fdi-duration">23m</span>

                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>

                            <div class="flw-item">

                                <div class="film-poster">


                                    <div class="tick ltr">



                                        <div class="tick-item tick-sub"><i class="fas fa-closed-captioning mr-1"></i>3
                                        </div>


                                        <div class="tick-item tick-dub"><i class="fas fa-microphone mr-1"></i>1
                                        </div>


                                    </div>

                                    <img data-src="https://img.zorores.com/_r/300x400/100/3a/06/3a06250cf428b5e830f2fee15b96f1a4/3a06250cf428b5e830f2fee15b96f1a4.jpg"
                                        class="film-poster-img lazyload" alt="Dead Mount Death Play">
                                    <a href="/dead-mount-death-play-18352" class="film-poster-ahref item-qtip"
                                        title="Dead Mount Death Play" data-id="18352"><i class="fas fa-play"></i></a>
                                </div>
                                <div class="film-detail">
                                    <h3 class="film-name"><a href="/dead-mount-death-play-18352"
                                            title="Dead Mount Death Play" class="dynamic-name"
                                            data-jname="Dead Mount Death Play">Dead Mount Death Play</a></h3>
                                    <div class="fd-infor">

                                        <span class="fdi-item">TV</span>
                                        <span class="dot"></span>
                                        <span class="fdi-item fdi-duration">23m</span>

                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>

                            <div class="flw-item">

                                <div class="film-poster">


                                    <div class="tick ltr">



                                        <div class="tick-item tick-sub"><i class="fas fa-closed-captioning mr-1"></i>4
                                        </div>



                                    </div>

                                    <img data-src="https://img.zorores.com/_r/300x400/100/90/a1/90a1dbcb03b97c209fd2b3e8fdeee1af/90a1dbcb03b97c209fd2b3e8fdeee1af.jpg"
                                        class="film-poster-img lazyload" alt="Alice Gear Aegis Expansion">
                                    <a href="/alice-gear-aegis-expansion-18373" class="film-poster-ahref item-qtip"
                                        title="Alice Gear Aegis Expansion" data-id="18373"><i
                                            class="fas fa-play"></i></a>
                                </div>
                                <div class="film-detail">
                                    <h3 class="film-name"><a href="/alice-gear-aegis-expansion-18373"
                                            title="Alice Gear Aegis Expansion" class="dynamic-name"
                                            data-jname="Alice Gear Aegis Expansion">Alice Gear Aegis
                                            Expansion</a></h3>
                                    <div class="fd-infor">

                                        <span class="fdi-item">TV</span>
                                        <span class="dot"></span>
                                        <span class="fdi-item fdi-duration">20m</span>

                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>

                            <div class="flw-item">

                                <div class="film-poster">


                                    <div class="tick ltr">



                                        <div class="tick-item tick-sub"><i class="fas fa-closed-captioning mr-1"></i>4
                                        </div>


                                        <div class="tick-item tick-dub"><i class="fas fa-microphone mr-1"></i>1
                                        </div>


                                        <div class="tick-item tick-eps">12</div>

                                    </div>

                                    <img data-src="https://img.zorores.com/_r/300x400/100/0d/22/0d223280706d8f5d2f556c7951c5bf4b/0d223280706d8f5d2f556c7951c5bf4b.jpg"
                                        class="film-poster-img lazyload" alt="Kuma Kuma Kuma Bear Punch!">
                                    <a href="/kuma-kuma-kuma-bear-punch-17374" class="film-poster-ahref item-qtip"
                                        title="Kuma Kuma Kuma Bear Punch!" data-id="17374"><i
                                            class="fas fa-play"></i></a>
                                </div>
                                <div class="film-detail">
                                    <h3 class="film-name"><a href="/kuma-kuma-kuma-bear-punch-17374"
                                            title="Kuma Kuma Kuma Bear Punch!" class="dynamic-name"
                                            data-jname="Kuma Kuma Kuma Bear 2nd Season">Kuma Kuma Kuma Bear
                                            Punch!</a></h3>
                                    <div class="fd-infor">

                                        <span class="fdi-item">TV</span>
                                        <span class="dot"></span>
                                        <span class="fdi-item fdi-duration">23m</span>

                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>

                            <div class="flw-item">

                                <div class="film-poster">


                                    <div class="tick ltr">



                                        <div class="tick-item tick-sub"><i class="fas fa-closed-captioning mr-1"></i>3
                                        </div>


                                        <div class="tick-item tick-dub"><i class="fas fa-microphone mr-1"></i>2
                                        </div>


                                        <div class="tick-item tick-eps">12</div>

                                    </div>

                                    <img data-src="https://img.zorores.com/_r/300x400/100/bf/3c/bf3c1f30c2a3dd8ed26cd54c11992cd3/bf3c1f30c2a3dd8ed26cd54c11992cd3.jpg"
                                        class="film-poster-img lazyload"
                                        alt="The Reason Why Raeliana Ended up at the Duke's Mansion">
                                    <a href="/the-reason-why-raeliana-ended-up-at-the-dukes-mansion-18350"
                                        class="film-poster-ahref item-qtip"
                                        title="The Reason Why Raeliana Ended up at the Duke's Mansion"
                                        data-id="18350"><i class="fas fa-play"></i></a>
                                </div>
                                <div class="film-detail">
                                    <h3 class="film-name"><a
                                            href="/the-reason-why-raeliana-ended-up-at-the-dukes-mansion-18350"
                                            title="The Reason Why Raeliana Ended up at the Duke's Mansion"
                                            class="dynamic-name" data-jname="Kanojo ga Koushaku-tei ni Itta Riyuu">The
                                            Reason Why
                                            Raeliana Ended up at the Duke's Mansion</a></h3>
                                    <div class="fd-infor">

                                        <span class="fdi-item">TV</span>
                                        <span class="dot"></span>
                                        <span class="fdi-item fdi-duration">23m</span>

                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>

                            <div class="flw-item">

                                <div class="film-poster">


                                    <div class="tick ltr">



                                        <div class="tick-item tick-sub"><i
                                                class="fas fa-closed-captioning mr-1"></i>41</div>



                                    </div>

                                    <img data-src="https://img.zorores.com/_r/300x400/100/c1/b1/c1b111d71dc055a9bd1ccc5492dfedbc/c1b111d71dc055a9bd1ccc5492dfedbc.png"
                                        class="film-poster-img lazyload" alt="Battle Through The Heavens 5th Season">
                                    <a href="/battle-through-the-heavens-5th-season-18119"
                                        class="film-poster-ahref item-qtip"
                                        title="Battle Through The Heavens 5th Season" data-id="18119"><i
                                            class="fas fa-play"></i></a>
                                </div>
                                <div class="film-detail">
                                    <h3 class="film-name"><a href="/battle-through-the-heavens-5th-season-18119"
                                            title="Battle Through The Heavens 5th Season" class="dynamic-name"
                                            data-jname="Doupo Cangqiong: Nian Fan">Battle Through The Heavens
                                            5th Season</a></h3>
                                    <div class="fd-infor">

                                        <span class="fdi-item">ONA</span>
                                        <span class="dot"></span>
                                        <span class="fdi-item fdi-duration">24m</span>

                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>

                            <div class="flw-item">

                                <div class="film-poster">


                                    <div class="tick ltr">



                                        <div class="tick-item tick-sub"><i
                                                class="fas fa-closed-captioning mr-1"></i>33</div>



                                    </div>

                                    <img data-src="https://img.zorores.com/_r/300x400/100/25/e3/25e3a9b167fa92be9196d32728f6d391/25e3a9b167fa92be9196d32728f6d391.jpg"
                                        class="film-poster-img lazyload" alt="A Will Eternal">
                                    <a href="/a-will-eternal-18110" class="film-poster-ahref item-qtip"
                                        title="A Will Eternal" data-id="18110"><i class="fas fa-play"></i></a>
                                </div>
                                <div class="film-detail">
                                    <h3 class="film-name"><a href="/a-will-eternal-18110" title="A Will Eternal"
                                            class="dynamic-name" data-jname="Yi Nian Yong Heng: Chuan Cheng Pian">A
                                            Will Eternal</a>
                                    </h3>
                                    <div class="fd-infor">

                                        <span class="fdi-item">ONA</span>
                                        <span class="dot"></span>
                                        <span class="fdi-item fdi-duration">20m</span>

                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>


                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </section>

<!-- end of video.php -->



<!-- about us  -->

            <div class="partners">
                <div class="container">
                    <div class="contact__inner">
                        <h2 class="home__title">About Us</h2>
                    </div>
                    <h2 class="contact__title">Introduction</h2>
                    <div class="container">
                        <p>
                            Athang is a pioneering software development and training academy firm greatly driven by the
                            information technology.
                            The company was founded in 2005 with the aim to meet the ever changing demand of the
                            customers in the field of ICT.
                            Athang strives for the excellence in offering our services,
                            be it a training programme or developing your website or producing an animation work that
                            our audience would love to watch or restoring your internet
                            breakdown and many more.As a company,
                            Athang believes in the team work and democratic working culture to bring the best of every
                            employees at personal as well as professional level.
                            As credentials, Athang has been with some international organizations in IT/software
                            Services, professional training, and 3D animations.
                            In our complex Company, we work together as a team, harnessing the power of our combined
                            skills,
                            outlooks and efforts to address business opportunities and solve problems by working with
                            one another and interact with our communities. As individuals,
                            as teams and as a company, our goal is always to create value. We are dedicated to the needs
                            of our customers, striving towards excellence in our work and
                            placing a high value on mutual respect.</p>
                    </div>
                    <br>
                    <h2 class="contact__title">Background</h2>
                    <div class="container">
                        <p>Brief History on Athang Private LimitedAthang was founded by the young IT engineer Mr Karma
                            Dhendup in 2005 as an IT firm. With a small team,
                            Athang spearheaded and executed the whole networking system for the government offices of
                            various districts in Bhutan. With the consistent effort
                            over the years, the company finally took off as a dynamic software development firm with the
                            team of young IT engineers joining in the team.
                            Since then the software team has executed exciting projects like developing online licensing
                            system, land transaction system, mobile apps and many more.
                            Athang has also taken up huge and complex projects like developing and implementing
                            Enterprise Resource Planning (ERP) system since 2014.
                            The training academy was established with the aim to bridge the gap in the capacity
                            development of human resources in Bhutan.
                            Though Bhutan took up the planed socio-economic activities late in the early 1960s, both the
                            public and private companies did
                            not have a training institute to suite our own Bhutanese need. To provide the alternative
                            training programmes in the field of
                            engineering, management, ICT and multimedia to our Bhutanese professionals, Athang ventured
                            into providing professional and tailored
                            made courses according to the need of the clients.In 2010, Athang trained 50 fresh class 12
                            graduates for 6 months in the field of
                            3D animation. Since then, a group of 25 talented 3D animators joined Athang family to start
                            up and venture out into the animation
                            works. Over a duration of more than a year in 2012, Athang animation team completed the 20
                            minute “Meme Haley Haley” 3D animation
                            production based on Bhutanese folktale. Athang has taken up its own animation production of
                            60 minute duration movie called “ApBokto”
                            which is also based on interesting Bhutanese folktale.</p>
                    </div>

                    <br>

                    <h2 class="contact__title"> Vision & Mission</h2>
                    <div class="container">
                        <p>About Us

                            VISION:<br>
                            To contribute in lifting the services level for the professional trainings, animations and
                            the growth of private sector of Bhutan by providing high quality and innovative enabled
                            solutions and services.
                            <br>
                            <br>
                            MISSION:<br>
                            To assist and provide quality services to our clients consistent with their interests and
                            aptitudes.
                        </p>
                    </div>
                    <br>
                    <br>

                    <h2 class="contact__title">Who is who</h2>
                    <br>
                    <img src="a.png" alt="service" class="service__img img">
                    <img src="b.png" alt="service" class="service__img img">
                </div>
        </main>
<!-- end of about us -->


<!-- contack us -->
        <section class="contact" id="contact">
            <div class="container">
                <div class="contact__inner">
                    <h2 class="home__title">Contact Us</h2>
                    <form action="#">
                        <div class="contact__form">
                            <div class="contact__input">
                                <input type="text" class="contact__name" placeholder="Your Name">
                            </div>
                            <div class="contact__input">
                                <input type="email" class="contact__name" placeholder="Your Mail">
                            </div>
                            <div class="contact__input">
                                <input type="tel" class="contact__name" placeholder="Phone Number">
                            </div>
                            <div class="contact__input">
                                <textarea name="text" placeholder="Message"></textarea>
                            </div>
                            <div class="contact__input">
                                <button class="contact__btn btn" type="submit">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>

    <!-- end of contack us -->

        @include('footer')
    </div>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    <script src="slick.min.js"></script>
    <script src="script.js"></script>
</body>

</html>
