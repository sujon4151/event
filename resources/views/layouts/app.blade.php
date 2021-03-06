<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="Company Name">
    <meta name="keywords" content="Company Name">
    <meta name="author" content="Company Name">
    <meta name="expires" content="never">
    <meta name="rating" content="general">
    <meta name="copyright" content="Company Name">
    <title>@yield('title')</title>
    <link rel="apple-touch-icon" sizes="57x57" href="favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
    <link rel="manifest" href="favicon/manifest.json">
    <meta property="og:title" content="Company Name" />
    <meta property="og:type" content="website" />

    <!-- Bootstrap core CSS -->
    <link href="/frontend/css/fontawesome.min.css" rel="stylesheet">
    <link href="/frontend/css/bootstrap.min.css" rel="stylesheet">
    <link href="/frontend/css/global.css" rel="stylesheet">
    <link href="/frontend/css/navbar.css" rel="stylesheet">
    <link href="/frontend/css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="/frontend/css/slick.min.css">
    <link rel="stylesheet" href="/frontend/css/slick-theme.min.css">
    @yield('css')
    <style>
        .overlayLoader {
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            position: fixed;
            background: #22222247;
            z-index: 120000;
        }

        .overlay__inner {
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            position: absolute;
        }

        .overlay__content {
            left: 50%;
            position: absolute;
            top: 50%;
            transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
            align-items: center;
            display: flex;
            flex-direction: column;
        }

        .spinner {
            width: 75px;
            height: 75px;
            display: inline-block;
            border-width: 2px;
            border-color: rgba(255, 255, 255, 0.05);
            border-top-color: #fff;
            animation: spin 1s infinite linear;
            border-radius: 100%;
            border-style: solid;
        }

        @keyframes spin {
            100% {
                transform: rotate(360deg);
            }
        }

    </style>
</head>

<body>
    <a href="#" id="scroll" style="display: none;"><span></span></a>

    <!------------ Header ------------>
    <header id="Header" class="fixed-top bg-white shadow-sm" data-spy="affix">
        <div class="header-top bg-primary">
            <div class="container">
                <div class="row justify-content-end">
                    <div class="col-lg-8">
                        <ul
                            class="header-top-menu mb-0 w-100 d-flex justify-content-xl-between justify-content-end text-uppercase">
                            <li><a href="{{ route('home.subscribe') }}">Subscribe</a></li>
                            <li><a href="{{ route('home.recommendPlayer') }}">Recommend a Player</a></li>
                            <li><a href="{{ route('home.blogs') }}">News</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="logo">
                            <a href="/" class="d-inline-block"><img src="/frontend/images/logo.png" alt="Logo"
                                    class="img-fluid"></a>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="header-right d-flex flex-column">

                            <nav class="navbar navbar-expand-lg navbar-dark p-0">
                                <button class="navbar-toggler " type="button" data-toggle="collapse"
                                    data-target="#Navigation" aria-controls="Navigation" aria-expanded="false"
                                    aria-label="Toggle navigation"> <span class="fas fa-bars"></span> </button>
                                <div class="collapse navbar-collapse pt-3 pt-md-0 flex-column" id="Navigation">
                                    <ul class="navbar-nav col-12 p-0 justify-content-end text-uppercase">
                                        <li class="nav-item"><a href="{{ route('home.index') }}"
                                                class="nav-link {{ Route::currentRouteName() == 'home.index' ? 'active' : '' }}">Home</a>
                                        </li>
                                        {{-- <li
                                            class="nav-item  {{ Route::currentRouteName() == 'home.event' ? 'active' : '' }}">
                                            <a href="{{ route('home.event') }}" class="nav-link">Events</a>
                                        </li> --}}
                                        <li
                                            class="nav-item dropdown  {{ Route::currentRouteName() == 'home.event' ? 'active' : '' }}">
                                            <a class=" nav-link dropdown-toggle" href="#" id="navbarDropdown"
                                                role="button" data-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false">
                                                Events
                                            </a>

                                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                <a class="dropdown-item"
                                                    href="{{ route('home.event', 'indivudual') }}">INDIVUDUAL
                                                    EVENT</a>
                                                <a class="dropdown-item"
                                                    href="{{ route('home.event', 'showcase') }}">SHOWCASE
                                                    EVENT
                                                </a>

                                            </div>
                                        </li>
                                        <li
                                            class="nav-item  {{ Route::currentRouteName() == 'home.players' ? 'active' : '' }}">
                                            <a href="{{ route('home.players') }}" class="nav-link">Players</a>
                                        </li>
                                        <li
                                            class="nav-item dropdown  {{ Route::currentRouteName() == 'home.leaderboard' ? 'active' : '' }}">
                                            <a class=" nav-link dropdown-toggle" href="#" id="navbarDropdown"
                                                role="button" data-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false">
                                                Leader board
                                            </a>

                                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                <a class="dropdown-item"
                                                    href="{{ route('home.leaderboard', 1) }}">High School</a>
                                                <a class="dropdown-item" href="{{ route('home.leaderboard', 2) }}">4
                                                    Year College</a>
                                                <a class="dropdown-item" href="{{ route('home.leaderboard', 3) }}">2
                                                    Year/JUCO</a>
                                                <a class="dropdown-item"
                                                    href="{{ route('home.leaderboard', 4) }}">Free Agent/Post
                                                    School</a>
                                            </div>
                                        </li>

                                        <li class="nav-item"><a href="{{ route('home.aboutUs') }}"
                                                class="nav-link">About</a></li>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </header>
    <!------------- End Header -------------------->

    <!------------ Home Slider Section ------------>
    <main role="main">
        @yield('content')

    </main>

    <!------------ Footer Section ------------>
    <footer class="Footer bg-white text-center text-md-left">
        <div class="footer-top py-4 py-md-5">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-md-4 mb-4 mb-md-0">
                        <div class="footer-logo text-center">
                            <a href="{{ st()->footer_logo_link }}">
                                <img src="/{{ st()->footer_logo }}" alt="footer logo">
                            </a>
                        </div>
                        <ul
                            class="footer-social-media-links d-flex justify-content-center align-items-center mt-4 mb-0">

                            @foreach (json_decode(st()->social_link) as $key => $item)
                                <li class="p-2">
                                    <a href="{{ $item }}" class="text-secondary">
                                        <span class="fab fa-{{ $key }}"></span>
                                    </a>
                                </li>
                            @endforeach
                            {{-- <li class="p-2"><a href="#" class="text-secondary"><span
                                        class="fab fa-twitter"></span></a></li>
                            <li class="p-2"><a href="#" class="text-secondary"><span
                                        class="fab fa-instagram"></span></a></li>
                            <li class="p-2"><a href="#" class="text-secondary"><span
                                        class="fab fa-youtube"></span></a></li>
                            <li class="p-2"><a href="#" class="text-secondary"><span
                                        class="fab fa-github"></span></a></li> --}}
                        </ul>
                    </div>
                    <div class="col-md-4 col-lg-3 mb-4 mb-md-0">
                        <h3 class="text-primary mb-4">Pages</h3>
                        <ul class="footer-links">
                            <li class="mb-3"><a href="{{ route('home.aboutUs') }}">About us</a></li>
                            <li class="mb-3"><a href="{{ route('home.tos') }}">Terms & Conditions</a></li>
                            <li class="mb-3"><a href="{{ route('home.privacyPolicy') }}">Privacy Policy</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-4 col-lg-3">
                        <h3 class="text-primary mb-4">Contact</h3>
                        <ul class="footer-links">
                            <li class="d-flex align-items-center justify-content-center justify-content-md-start">
                                <img src="/frontend/images/phone-icon.png" alt="phone-icon" class="mr-2">
                                <span>
                                    {{ json_decode(st()->contact)->phone }} <br>
                                    Call Us
                                </span>
                            </li>
                            <li class="d-flex align-items-center justify-content-center justify-content-md-start">
                                <img src="/frontend/images/mail-icon.png" alt="mail-icon" class="mr-2">
                                <span>
                                    {{ json_decode(st()->contact)->email }} <br>
                                    Email us
                                </span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
        <div class="copyright bg-primary text-white text-center py-2">
            <div class="container">
                <p class="mb-0"><em>{{ st()->powerdby }}</em></p>
            </div>
        </div>

    </footer>
    <!------------ End Footer Section ------------>

    <script src="/frontend/js/jquery-3.3.1.min.js"></script>
    <script src="/frontend/js/bootstrap.bundle.min.js"></script>
    <script src="/frontend/js/fontawesome.min.js"></script>

    <script src="/frontend/js/script.js"></script>
    @yield('js')
</body>

</html>
