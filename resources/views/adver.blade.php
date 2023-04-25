file name welcome.blade.php
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://fonts.googleapis.com/css?family=Montserrat:regular,500,600,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="nullstyle.css">
    <link rel="stylesheet" href="style.css">

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
                            <p class="home__subtitle text">is a pioneering software development and training academy
                                firm greatly driven by the information technology.

                                The company was founded in 2005 with the aim to meet the ever changing demand of the
                                customers in the field of ICT. Athang strives for the excellence in offering our
                                services, be it a training programme or developing your website or producing an
                                animation work that our audience would love to watch or restoring your internet
                                breakdown and many more…

                                As a company, Athang believes in the team work and democratic working culture to bring
                                the best of every employees at personal as well as professional level.</p>

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


            <section class="contact" id="contact">
                <div class="container">
                    <div class="contact__inner">
                        <h2 class="contact__title">Contact Us</h2>
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

            <div class="partners">
                <div class="container">
                    <div class="partners__inner">
                        <div class="partners__image">
                            <img src="11.png" alt="partners" class="partners__img">
                        </div>
                        <div class="partners__image">
                            <img src="2.png" alt="partners" class="partners__img">
                        </div>
                        <div class="partners__image">
                            <img src="3.png" alt="partners" class="partners__img">
                        </div>
                        <div class="partners__image">
                            <img src="4.png" alt="partners" class="partners__img">
                        </div>
                    </div>
                </div>
            </div>
        </main>

        @include('footer')
    </div>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    <script src="slick.min.js"></script>
    <script src="script.js"></script>
</body>

</html>
