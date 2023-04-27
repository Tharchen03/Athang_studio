<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://fonts.googleapis.com/css?family=Montserrat:regular,500,600,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="nullstyle.css">
    <link rel="stylesheet" href="style.css">
 <!-- url img -->
 <link rel="icon" type="Athang_logo.jpg" sizes="32x32" href="Athang_logo.jpg">
    <link rel="icon" type="Athang_logo.jpg" sizes="16x16" href="Athang_logo.jpg">
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
