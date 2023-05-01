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
    <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
    <link rel="icon" type="lo3.png"" sizes="32x32" href="lo3.png">
    <link rel="icon" type="lo3.png"" sizes="16x16" href="lo3.png">
    <!-- end -->
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
        <br>

        <p><iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3538.947786856308!2d89.62837367589461!3d27.501999234517804!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39e1943d9df45cc3%3A0x14944eaf62ce3e40!2sAthang%20Training%20Academy!5e0!3m2!1sen!2sbt!4v1682394505340!5m2!1sen!2sbt"
                width="1840" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe></p>
        <br>
        @include('footer')


</body>

</html>
