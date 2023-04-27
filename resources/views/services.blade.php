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

    <title>Athang Studio</title>
</head>

<body>

    @include('navbar')
    <div class="container">
        @yield('content')
    </div>
    <div class="container">
        <div class="service__inner">
            <h2 class="service__title title">Our services</h2>
            <div class="service__row">
                <div class="service__column">
                    <div class="service__item">
                        <div class="service__image">
                            <img src="i.webp" alt="service" class="service__img img">
                        </div>
                        <h3 class="service__name">Video Editing</h3>
                        <p class="service__text text">"Editing is like killing your story and then very slowly bringing
                            it back to life."</p>
                    </div>
                </div>
                <div class="service__column">
                    <div class="service__item">
                        <div class="service__image">
                            <img src="e.webp" alt="service" class="service__img img">
                        </div>
                        <h3 class="service__name">video Services</h3>
                        <p class="service__text text">"We're operating in a world where one good video can lead to a
                            massive social following."</p>
                    </div>
                </div>
                <div class="service__column">
                    <div class="service__item">
                        <div class="service__image">
                            <img src="a.jpg" alt="service" class="service__img img">
                        </div>
                        <h3 class="service__name">Streaming</h3>
                        <p class="service__text text">“The secret to getting ahead is getting started.” </p>
                    </div>
                </div>
                <div class="service__column">
                    <div class="service__item">
                        <div class="service__image">
                            <img src="u.jpg"alt="service" class="service__img img">
                        </div>
                        <h3 class="service__name">Video</h3>
                        <p class="service__text text">Video allows us to tell the great stories of our customers, rather
                            than our own.</p>
                    </div>

                </div>
            </div>
            <div class="service__button">
                <a href="#" class="service__link btn">All Services</a>
            </div>
        </div>
    </div>
    </section>


    @include('footer')


</body>

</html>
