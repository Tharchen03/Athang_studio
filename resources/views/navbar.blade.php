<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://fonts.googleapis.com/css?family=Montserrat:regular,500,600,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/nullstyle.css">
    <link rel="stylesheet" href="css/style.css">

    <title>Athang Studio</title>

    <meta property="og:title" content="Athang studio">
    <!-- <meta property="og:image" content="capture.png"> -->
    <meta property="og:image:width" content="650">
    <meta property="og:image:height" content="350">
    <meta property="og:description"
        content="Athang Studio">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <meta name="apple-mobile-web-app-status-bar" content="#202125">
    <meta name="theme-color" content="#202125">
    <!-- <link rel="shortcut icon" href="favicon.png" type="image/x-icon"> -->
    <link rel="apple-touch-icon" sizes="180x180" href="images/apple-touch-icon.png">
    <link rel="icon" type="lo3.png" sizes="32x32" href="images/lo3.png">
    <link rel="icon" type="lo3.png" sizes="16x16" href="images/lo3.png">
</head>

<body>
    <header class="header">
        <div class="container">
            <div class="header__inner">
                <a href="https://www.athang.com/public/w" class="header__logo logo">
                    <img src="images/Athang_logo.jpg" alt="logo" class="logo__img img">
                    <span>Athang Studio</span>
                </a>
                <div class="header__body">
                    <nav class="menu">
                        <ul class="menu__list">
                            <li class="menu__item">
                                <a href="/home" class="menu__link">Home</a>
                            </li>
                            <li class="menu__item">
                                <a href="/adver" class="menu__link">Ap Bokto</a>
                            </li>
                            <li class="menu__item">
                                <a href="/video" class="menu__link"> Shorts</a>
                            </li>
                            <li class="menu__item">
                                <a href="/services" class="menu__link">Studio</a>
                            </li>
                            <li class="menu__item">
                                <a href="/contact" class="menu__link">Contact Us</a>
                            </li>
{{-- 
                            <li class="menu__item">
                                <a href="/admin" class="menu__link">Admin pannel </a>
                            </li> --}}
                            <!-- Authentication Links -->
                            @guest
                                @if (Route::has('login'))
                                    <li class="menu__item">
                                        <a class="menu__link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                    </li>
                                @endif
                            @else
                            
                                <li class="menu__item">
                                    <a class="menu__link" href="/admin" role="button" data-bs-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->name }}
                                    </a>

                                 
                                </li>
                                <li>
                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                        <a class="menu__link" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                            
                            @endguest
                        </ul>
                    </nav>


                    <div class="header__burger">
                        <span></span>
                    </div>
                </div>
            </div>
    </header>



</body>

</html>
