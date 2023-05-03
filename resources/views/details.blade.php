<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://fonts.googleapis.com/css?family=Montserrat:regular,500,600,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/nullstyle.css">
    <link rel="stylesheet" href="css/style.css">
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
    <!-- end -->
    <title>Athang Studio</title>
</head>

<body>

    <div class="wrapper">
        @include('navbar')
        <div class="container">
            @yield('content')
        </div>

        <section class="delivering" id="delivering">
            <div class="container">
                <div class="delivering__inner">
                    <div class="delivering__items">
                        <h2 class="delivering__title">Delivering top<br>Athang Studio</h2>
                        <p class="delivering__subtitle text">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Quasi provident molestiae dolorem nobis.Lorem ipsum dolor sit amet consectetur adipisicing
                            elit. Quasi provident molestiae dolorem nobis.</p>
                        <a href="#" class="delivering__link btn">Read More</a>
                    </div>
                    <div class="delivering__image">
                        <img src="https://vimeo.com/user19468877?embedded=true&source=owner_name&owner=19468877 alt="delivering
                            img" class="delivering__img img">
                    </div>
                </div>
            </div>
        </section>

        @include('footer')
</body>

</html>
