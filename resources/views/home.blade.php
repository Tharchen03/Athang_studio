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

        @include('footer')
    </div>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    <script src="slick.min.js"></script>
    <script src="script.js"></script>
</body>

</html>
