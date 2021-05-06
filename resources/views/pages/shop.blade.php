<!DOCTYPE html>
<html lang="en">
<head>
        <!-- Title -->
        <title>Shop Page</title>

        <!-- Required Meta Tags Always Come First -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Favicon -->
        <link rel="shortcut icon" href="../../favicon.png">

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;display=swap" rel="stylesheet">

        <!-- CSS Implementing Plugins -->
        <link rel="stylesheet" href="../assets/vendor/font-awesome/css/fontawesome-all.min.css">
        <link rel="stylesheet" href="../assets/css/font-electro.css">
        
        <link rel="stylesheet" href="../assets/vendor/animate.css/animate.min.css">
        <link rel="stylesheet" href="../assets/vendor/hs-megamenu/src/hs.megamenu.css">
        <link rel="stylesheet" href="../assets/vendor/ion-rangeslider/css/ion.rangeSlider.css">
        <link rel="stylesheet" href="../assets/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css">
        <link rel="stylesheet" href="../assets/vendor/fancybox/jquery.fancybox.css">
        <link rel="stylesheet" href="../assets/vendor/slick-carousel/slick/slick.css">
        <link rel="stylesheet" href="../assets/vendor/bootstrap-select/dist/css/bootstrap-select.min.css">

        <!-- CSS Electro Template -->
        <link rel="stylesheet" href="../assets/css/theme.css">
    </head>

    <body>

           <!-- ========== HEADER ========== -->
           <header id="header" class="u-header u-header-left-aligned-nav">
            <div class="u-header__section">
                <!-- Topbar -->
                <div class="u-header-topbar py-2 d-none d-xl-block bg-primary">
                    <div class="container">
                        <div class="d-flex align-items-center">
                            <div class="topbar-left">
                                <a href="#" class="text-gray-110 font-size-13 hover-on-dark">Welcome to Worldwide Electronics Store</a>
                            </div>
                            <div class="topbar-right ml-auto">
                                <ul class="list-inline mb-0">
                                    <li class="list-inline-item mr-0 u-header-topbar__nav-item u-header-topbar__nav-item-border">
                                        <a href="contact-v2.html" class="u-header-topbar__nav-link"><i class="ec ec-map-pointer mr-1"></i> Store Locator</a>
                                    </li>
                                   
                                    <li class="list-inline-item mr-0 u-header-topbar__nav-item u-header-topbar__nav-item-border">
                                        <a href="https://transvelo.github.io/electro-html/2.0/html/shop/track-your-order.html" class="u-header-topbar__nav-link"><i class="ec ec-transport mr-1"></i> Track Your Order</a>
                                    </li>
                                    <li class="list-inline-item mr-0 u-header-topbar__nav-item u-header-topbar__nav-item-border u-header-topbar__nav-item-no-border u-header-topbar__nav-item-border-single">
                                        <div class="d-flex align-items-center">
                                            <!-- Language -->
                                            <div class="position-relative">
                                                @if (Route::has('login'))
                                               
                                                    @auth
                                                    <li class="list-inline-item mr-0 u-header-topbar__nav-item u-header-topbar__nav-item-border">
                                                        <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="u-header-topbar__nav-link"><i class="ec ec-map-pointer mr-1"></i>Logout</a>
                                                        <form id="logout-form" action="{{route('logout')}}" method="POST" style="display: none;">
                                                            @csrf
                                                           </form>
                                                    </li>
                                                     
                                                       
                                                    @else
                                                    <li class="list-inline-item mr-0 u-header-topbar__nav-item u-header-topbar__nav-item-border">
                                                        <a href="{{route('login')}}" class="u-header-topbar__nav-link"><i class="ec ec-map-pointer mr-1"></i>Login</a>
                                                    </li>
                                
                                                        @if (Route::has('register'))
                                                        <li class="list-inline-item mr-0 u-header-topbar__nav-item u-header-topbar__nav-item-border">
                                                            <a href="{{route('register')}}" class="u-header-topbar__nav-link"><i class="ec ec-map-pointer mr-1"></i>Register</a>
                                                        </li>
                                                        @endif
                                                    @endauth
                                                
                                            @endif












                                                
                                               
                                            </div>
                                            <!-- End Language -->
                                        </div>
                                    </li>
                                   
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Topbar -->

                <!-- Logo-Search-header-icons -->
                <div class="py-2 py-xl-5 bg-primary-down-lg">
                    <div class="container my-0dot5 my-xl-0">
                        <div class="row align-items-center">
                            <!-- Logo-offcanvas-menu -->
                            <div class="col-auto">
                                <!-- Nav -->
                                <nav class="navbar navbar-expand u-header__navbar py-0 justify-content-xl-between max-width-270 min-width-270">
                                    <!-- Logo -->
                                    <a class="order-1 order-xl-0 navbar-brand u-header__navbar-brand u-header__navbar-brand-center" href="{{route('homepage')}}" aria-label="Electro">
                                        <svg version="1.1" x="0px" y="0px" width="175.748px" height="42.52px" viewBox="0 0 175.748 42.52" enable-background="new 0 0 175.748 42.52" style="margin-bottom: 0;">
                                            <ellipse class="ellipse-bg" fill-rule="evenodd" clip-rule="evenodd" fill="#FDD700" cx="170.05" cy="36.341" rx="5.32" ry="5.367"></ellipse>
                                            <path fill-rule="evenodd" clip-rule="evenodd" fill="#333E48" d="M30.514,0.71c-0.034,0.003-0.066,0.008-0.056,0.056
                                                C30.263,0.995,29.876,1.181,29.79,1.5c-0.148,0.548,0,1.568,0,2.427v36.459c0.265,0.221,0.506,0.465,0.725,0.734h6.187
                                                c0.2-0.25,0.423-0.477,0.669-0.678V1.387C37.124,1.185,36.9,0.959,36.701,0.71H30.514z M117.517,12.731
                                                c-0.232-0.189-0.439-0.64-0.781-0.734c-0.754-0.209-2.039,0-3.121,0h-3.176V4.435c-0.232-0.189-0.439-0.639-0.781-0.733
                                                c-0.719-0.2-1.969,0-3.01,0h-3.01c-0.238,0.273-0.625,0.431-0.725,0.847c-0.203,0.852,0,2.399,0,3.725
                                                c0,1.393,0.045,2.748-0.055,3.725h-6.41c-0.184,0.237-0.629,0.434-0.725,0.791c-0.178,0.654,0,1.813,0,2.765v2.766
                                                c0.232,0.188,0.439,0.64,0.779,0.733c0.777,0.216,2.109,0,3.234,0c1.154,0,2.291-0.045,3.176,0.057v21.277
                                                c0.232,0.189,0.439,0.639,0.781,0.734c0.719,0.199,1.969,0,3.01,0h3.01c1.008-0.451,0.725-1.889,0.725-3.443
                                                c-0.002-6.164-0.047-12.867,0.055-18.625h6.299c0.182-0.236,0.627-0.434,0.725-0.79c0.176-0.653,0-1.813,0-2.765V12.731z
                                                M135.851,18.262c0.201-0.746,0-2.029,0-3.104v-3.104c-0.287-0.245-0.434-0.637-0.781-0.733c-0.824-0.229-1.992-0.044-2.898,0
                                                c-2.158,0.104-4.506,0.675-5.74,1.411c-0.146-0.362-0.451-0.853-0.893-0.96c-0.693-0.169-1.859,0-2.842,0h-2.842
                                                c-0.258,0.319-0.625,0.42-0.725,0.79c-0.223,0.82,0,2.338,0,3.443c0,8.109-0.002,16.635,0,24.381
                                                c0.232,0.189,0.439,0.639,0.779,0.734c0.707,0.195,1.93,0,2.955,0h3.01c0.918-0.463,0.725-1.352,0.725-2.822V36.21
                                                c-0.002-3.902-0.242-9.117,0-12.473c0.297-4.142,3.836-4.877,8.527-4.686C135.312,18.816,135.757,18.606,135.851,18.262z
                                                M14.796,11.376c-5.472,0.262-9.443,3.178-11.76,7.056c-2.435,4.075-2.789,10.62-0.501,15.126c2.043,4.023,5.91,7.115,10.701,7.9
                                                c6.051,0.992,10.992-1.219,14.324-3.838c-0.687-1.1-1.419-2.664-2.118-3.951c-0.398-0.734-0.652-1.486-1.616-1.467
                                                c-1.942,0.787-4.272,2.262-7.134,2.145c-3.791-0.154-6.659-1.842-7.524-4.91h19.452c0.146-2.793,0.22-5.338-0.279-7.563
                                                C26.961,15.728,22.503,11.008,14.796,11.376z M9,23.284c0.921-2.508,3.033-4.514,6.298-4.627c3.083-0.107,4.994,1.976,5.685,4.627
                                                C17.119,23.38,12.865,23.38,9,23.284z M52.418,11.376c-5.551,0.266-9.395,3.142-11.76,7.056
                                                c-2.476,4.097-2.829,10.493-0.557,15.069c1.997,4.021,5.895,7.156,10.646,7.957c6.068,1.023,11-1.227,14.379-3.781
                                                c-0.479-0.896-0.875-1.742-1.393-2.709c-0.312-0.582-1.024-2.234-1.561-2.539c-0.912-0.52-1.428,0.135-2.23,0.508
                                                c-0.564,0.262-1.223,0.523-1.672,0.676c-4.768,1.621-10.372,0.268-11.537-4.176h19.451c0.668-5.443-0.419-9.953-2.73-13.037
                                                C61.197,13.388,57.774,11.12,52.418,11.376z M46.622,23.343c0.708-2.553,3.161-4.578,6.242-4.686
                                                c3.08-0.107,5.08,1.953,5.686,4.686H46.622z M160.371,15.497c-2.455-2.453-6.143-4.291-10.869-4.064
                                                c-2.268,0.109-4.297,0.65-6.02,1.524c-1.719,0.873-3.092,1.957-4.234,3.217c-2.287,2.519-4.164,6.004-3.902,11.007
                                                c0.248,4.736,1.979,7.813,4.627,10.326c2.568,2.439,6.148,4.254,10.867,4.064c4.457-0.18,7.889-2.115,10.199-4.684
                                                c2.469-2.746,4.012-5.971,3.959-11.063C164.949,21.134,162.732,17.854,160.371,15.497z M149.558,33.952
                                                c-3.246-0.221-5.701-2.615-6.41-5.418c-0.174-0.689-0.26-1.25-0.4-2.166c-0.035-0.234,0.072-0.523-0.045-0.77
                                                c0.682-3.698,2.912-6.257,6.799-6.547c2.543-0.189,4.258,0.735,5.52,1.863c1.322,1.182,2.303,2.715,2.451,4.967
                                                C157.789,30.669,154.185,34.267,149.558,33.952z M88.812,29.55c-1.232,2.363-2.9,4.307-6.13,4.402
                                                c-4.729,0.141-8.038-3.16-8.025-7.563c0.004-1.412,0.324-2.65,0.947-3.726c1.197-2.061,3.507-3.688,6.633-3.612
                                                c3.222,0.079,4.966,1.708,6.632,3.668c1.328-1.059,2.529-1.948,3.9-2.99c0.416-0.315,1.076-0.688,1.227-1.072
                                                c0.404-1.031-0.365-1.502-0.891-2.088c-2.543-2.835-6.66-5.377-11.704-5.137c-6.02,0.288-10.218,3.697-12.484,7.846
                                                c-1.293,2.365-1.951,5.158-1.729,8.408c0.209,3.053,1.191,5.496,2.619,7.508c2.842,4.004,7.385,6.973,13.656,6.377
                                                c5.976-0.568,9.574-3.936,11.816-8.354c-0.141-0.271-0.221-0.604-0.336-0.902C92.929,31.364,90.843,30.485,88.812,29.55z">
                                            </path>
                                        </svg>
                                    </a>
                                    <!-- End Logo -->

                                    <!-- Fullscreen Toggle Button -->
                                    <button id="sidebarHeaderInvokerMenu" type="button" class="navbar-toggler d-block btn u-hamburger mr-3 mr-xl-0"
                                        aria-controls="sidebarHeader"
                                        aria-haspopup="true"
                                        aria-expanded="false"
                                        data-unfold-event="click"
                                        data-unfold-hide-on-scroll="false"
                                        data-unfold-target="#sidebarHeader1"
                                        data-unfold-type="css-animation"
                                        data-unfold-animation-in="fadeInLeft"
                                        data-unfold-animation-out="fadeOutLeft"
                                        data-unfold-duration="500">
                                        <span id="hamburgerTriggerMenu" class="u-hamburger__box">
                                            <span class="u-hamburger__inner"></span>
                                        </span>
                                    </button>
                                    <!-- End Fullscreen Toggle Button -->
                                </nav>
                                <!-- End Nav -->

                                <!-- ========== HEADER SIDEBAR ========== -->
                                <aside id="sidebarHeader1" class="u-sidebar u-sidebar--left" aria-labelledby="sidebarHeaderInvoker">
                                    <div class="u-sidebar__scroller">
                                        <div class="u-sidebar__container">
                                            <div class="u-header-sidebar__footer-offset">
                                                <!-- Toggle Button -->
                                                <div class="position-absolute top-0 right-0 z-index-2 pt-4 pr-4 bg-white">
                                                    <button type="button" class="close ml-auto"
                                                        aria-controls="sidebarHeader"
                                                        aria-haspopup="true"
                                                        aria-expanded="false"
                                                        data-unfold-event="click"
                                                        data-unfold-hide-on-scroll="false"
                                                        data-unfold-target="#sidebarHeader1"
                                                        data-unfold-type="css-animation"
                                                        data-unfold-animation-in="fadeInLeft"
                                                        data-unfold-animation-out="fadeOutLeft"
                                                        data-unfold-duration="500">
                                                        <span aria-hidden="true"><i class="ec ec-close-remove text-gray-90 font-size-20"></i></span>
                                                    </button>
                                                </div>
                                                <!-- End Toggle Button -->

                                                <!-- Content -->
                                                <div class="js-scrollbar u-sidebar__body">
                                                    <div id="headerSidebarContent" class="u-sidebar__content u-header-sidebar__content">
                                                        <!-- Logo -->
                                                        <a class="navbar-brand u-header__navbar-brand u-header__navbar-brand-center mb-3" href="index.html" aria-label="Electro">
                                                            <svg version="1.1" x="0px" y="0px" width="175.748px" height="42.52px" viewBox="0 0 175.748 42.52" enable-background="new 0 0 175.748 42.52" style="margin-bottom: 0;">
                                                                <ellipse class="ellipse-bg" fill-rule="evenodd" clip-rule="evenodd" fill="#FDD700" cx="170.05" cy="36.341" rx="5.32" ry="5.367"></ellipse>
                                                                <path fill-rule="evenodd" clip-rule="evenodd" fill="#333E48" d="M30.514,0.71c-0.034,0.003-0.066,0.008-0.056,0.056
                                                                    C30.263,0.995,29.876,1.181,29.79,1.5c-0.148,0.548,0,1.568,0,2.427v36.459c0.265,0.221,0.506,0.465,0.725,0.734h6.187
                                                                    c0.2-0.25,0.423-0.477,0.669-0.678V1.387C37.124,1.185,36.9,0.959,36.701,0.71H30.514z M117.517,12.731
                                                                    c-0.232-0.189-0.439-0.64-0.781-0.734c-0.754-0.209-2.039,0-3.121,0h-3.176V4.435c-0.232-0.189-0.439-0.639-0.781-0.733
                                                                    c-0.719-0.2-1.969,0-3.01,0h-3.01c-0.238,0.273-0.625,0.431-0.725,0.847c-0.203,0.852,0,2.399,0,3.725
                                                                    c0,1.393,0.045,2.748-0.055,3.725h-6.41c-0.184,0.237-0.629,0.434-0.725,0.791c-0.178,0.654,0,1.813,0,2.765v2.766
                                                                    c0.232,0.188,0.439,0.64,0.779,0.733c0.777,0.216,2.109,0,3.234,0c1.154,0,2.291-0.045,3.176,0.057v21.277
                                                                    c0.232,0.189,0.439,0.639,0.781,0.734c0.719,0.199,1.969,0,3.01,0h3.01c1.008-0.451,0.725-1.889,0.725-3.443
                                                                    c-0.002-6.164-0.047-12.867,0.055-18.625h6.299c0.182-0.236,0.627-0.434,0.725-0.79c0.176-0.653,0-1.813,0-2.765V12.731z
                                                                    M135.851,18.262c0.201-0.746,0-2.029,0-3.104v-3.104c-0.287-0.245-0.434-0.637-0.781-0.733c-0.824-0.229-1.992-0.044-2.898,0
                                                                    c-2.158,0.104-4.506,0.675-5.74,1.411c-0.146-0.362-0.451-0.853-0.893-0.96c-0.693-0.169-1.859,0-2.842,0h-2.842
                                                                    c-0.258,0.319-0.625,0.42-0.725,0.79c-0.223,0.82,0,2.338,0,3.443c0,8.109-0.002,16.635,0,24.381
                                                                    c0.232,0.189,0.439,0.639,0.779,0.734c0.707,0.195,1.93,0,2.955,0h3.01c0.918-0.463,0.725-1.352,0.725-2.822V36.21
                                                                    c-0.002-3.902-0.242-9.117,0-12.473c0.297-4.142,3.836-4.877,8.527-4.686C135.312,18.816,135.757,18.606,135.851,18.262z
                                                                    M14.796,11.376c-5.472,0.262-9.443,3.178-11.76,7.056c-2.435,4.075-2.789,10.62-0.501,15.126c2.043,4.023,5.91,7.115,10.701,7.9
                                                                    c6.051,0.992,10.992-1.219,14.324-3.838c-0.687-1.1-1.419-2.664-2.118-3.951c-0.398-0.734-0.652-1.486-1.616-1.467
                                                                    c-1.942,0.787-4.272,2.262-7.134,2.145c-3.791-0.154-6.659-1.842-7.524-4.91h19.452c0.146-2.793,0.22-5.338-0.279-7.563
                                                                    C26.961,15.728,22.503,11.008,14.796,11.376z M9,23.284c0.921-2.508,3.033-4.514,6.298-4.627c3.083-0.107,4.994,1.976,5.685,4.627
                                                                    C17.119,23.38,12.865,23.38,9,23.284z M52.418,11.376c-5.551,0.266-9.395,3.142-11.76,7.056
                                                                    c-2.476,4.097-2.829,10.493-0.557,15.069c1.997,4.021,5.895,7.156,10.646,7.957c6.068,1.023,11-1.227,14.379-3.781
                                                                    c-0.479-0.896-0.875-1.742-1.393-2.709c-0.312-0.582-1.024-2.234-1.561-2.539c-0.912-0.52-1.428,0.135-2.23,0.508
                                                                    c-0.564,0.262-1.223,0.523-1.672,0.676c-4.768,1.621-10.372,0.268-11.537-4.176h19.451c0.668-5.443-0.419-9.953-2.73-13.037
                                                                    C61.197,13.388,57.774,11.12,52.418,11.376z M46.622,23.343c0.708-2.553,3.161-4.578,6.242-4.686
                                                                    c3.08-0.107,5.08,1.953,5.686,4.686H46.622z M160.371,15.497c-2.455-2.453-6.143-4.291-10.869-4.064
                                                                    c-2.268,0.109-4.297,0.65-6.02,1.524c-1.719,0.873-3.092,1.957-4.234,3.217c-2.287,2.519-4.164,6.004-3.902,11.007
                                                                    c0.248,4.736,1.979,7.813,4.627,10.326c2.568,2.439,6.148,4.254,10.867,4.064c4.457-0.18,7.889-2.115,10.199-4.684
                                                                    c2.469-2.746,4.012-5.971,3.959-11.063C164.949,21.134,162.732,17.854,160.371,15.497z M149.558,33.952
                                                                    c-3.246-0.221-5.701-2.615-6.41-5.418c-0.174-0.689-0.26-1.25-0.4-2.166c-0.035-0.234,0.072-0.523-0.045-0.77
                                                                    c0.682-3.698,2.912-6.257,6.799-6.547c2.543-0.189,4.258,0.735,5.52,1.863c1.322,1.182,2.303,2.715,2.451,4.967
                                                                    C157.789,30.669,154.185,34.267,149.558,33.952z M88.812,29.55c-1.232,2.363-2.9,4.307-6.13,4.402
                                                                    c-4.729,0.141-8.038-3.16-8.025-7.563c0.004-1.412,0.324-2.65,0.947-3.726c1.197-2.061,3.507-3.688,6.633-3.612
                                                                    c3.222,0.079,4.966,1.708,6.632,3.668c1.328-1.059,2.529-1.948,3.9-2.99c0.416-0.315,1.076-0.688,1.227-1.072
                                                                    c0.404-1.031-0.365-1.502-0.891-2.088c-2.543-2.835-6.66-5.377-11.704-5.137c-6.02,0.288-10.218,3.697-12.484,7.846
                                                                    c-1.293,2.365-1.951,5.158-1.729,8.408c0.209,3.053,1.191,5.496,2.619,7.508c2.842,4.004,7.385,6.973,13.656,6.377
                                                                    c5.976-0.568,9.574-3.936,11.816-8.354c-0.141-0.271-0.221-0.604-0.336-0.902C92.929,31.364,90.843,30.485,88.812,29.55z">
                                                                </path>
                                                            </svg>
                                                        </a>
                                                        <!-- End Logo -->

                                                        <!-- List -->
                                                        <ul id="headerSidebarList" class="u-header-collapse__nav">
                                                            <!-- Value of the Day -->
                                                            <li class="">
                                                                <a class="u-header-collapse__nav-link font-weight-bold" href="#">Value of the Day</a>
                                                            </li>
                                                            <!-- End Value of the Day -->

                                                            <!-- Top 100 Offers -->
                                                            <li class="">
                                                                <a class="u-header-collapse__nav-link font-weight-bold" href="#">Top 100 Offers</a>
                                                            </li>
                                                            <!-- End Top 100 Offers -->

                                                            <!-- New Arrivals -->
                                                            <li class="">
                                                                <a class="u-header-collapse__nav-link font-weight-bold" href="#">New Arrivals</a>
                                                            </li>
                                                            <!-- End New Arrivals -->

                                                            <!-- Computers & Accessories -->
                                                            <li class="u-has-submenu u-header-collapse__submenu">
                                                                <a class="u-header-collapse__nav-link u-header-collapse__nav-pointer" href="javascript:;" data-target="#headerSidebarComputersCollapse" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="headerSidebarComputersCollapse">
                                                                    Computers & Accessories
                                                                </a>

                                                                <div id="headerSidebarComputersCollapse" class="collapse" data-parent="#headerSidebarContent">
                                                                    <ul class="u-header-collapse__nav-list">
                                                                        <li><span class="u-header-sidebar__sub-menu-title">Computers &amp; Accessories</span></li>
                                                                        <li class=""><a class="u-header-collapse__submenu-nav-link" href="#">All Computers & Accessories</a></li>
                                                                        <li class=""><a class="u-header-collapse__submenu-nav-link" href="#">Laptops, Desktops & Monitors</a></li>
                                                                        <li class=""><a class="u-header-collapse__submenu-nav-link" href="#">Printers & Ink</a></li>
                                                                        <li class=""><a class="u-header-collapse__submenu-nav-link" href="#">Networking & Internet Devices</a></li>
                                                                        <li class=""><a class="u-header-collapse__submenu-nav-link" href="#">Computer Accessories</a></li>
                                                                        <li class=""><a class="u-header-collapse__submenu-nav-link" href="#">Software</a></li>
                                                                        <li><span class="u-header-sidebar__sub-menu-title">Office & Stationery</span></li>
                                                                        <li><a class="u-header-collapse__submenu-nav-link" href="#">All Office & Stationery</a></li>
                                                                        <li><a class="u-header-collapse__submenu-nav-link" href="#">All Electronics</a></li>
                                                                    </ul>
                                                                </div>
                                                            </li>
                                                            <!-- End Computers & Accessories -->

                                                            <!-- Cameras, Audio & Video -->
                                                            <li class="u-has-submenu u-header-collapse__submenu">
                                                                <a class="u-header-collapse__nav-link u-header-collapse__nav-pointer" href="javascript:;" data-target="#headerSidebarCamerasCollapse" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="headerSidebarCamerasCollapse">
                                                                    Cameras, Audio & Video
                                                                </a>

                                                                <div id="headerSidebarCamerasCollapse" class="collapse" data-parent="#headerSidebarContent">
                                                                    <ul class="u-header-collapse__nav-list">
                                                                        <li><span class="u-header-sidebar__sub-menu-title">Cameras & Photography</span></li>
                                                                        <li class=""><a class="u-header-collapse__submenu-nav-link" href="#">Lenses</a></li>
                                                                        <li class=""><a class="u-header-collapse__submenu-nav-link" href="#">Camera Accessories</a></li>
                                                                        <li class=""><a class="u-header-collapse__submenu-nav-link" href="#">Security & Surveillance</a></li>
                                                                        <li class=""><a class="u-header-collapse__submenu-nav-link" href="#">Binoculars & Telescopes</a></li>
                                                                        <li class=""><a class="u-header-collapse__submenu-nav-link" href="#">Camcorders</a></li>
                                                                        <li class=""><a class="u-header-collapse__submenu-nav-link" href="#">Software</a></li>
                                                                        <li><span class="u-header-sidebar__sub-menu-title">Audio & Video</span></li>
                                                                        <li><a class="u-header-collapse__submenu-nav-link" href="#">All Audio & Video</a></li>
                                                                        <li><a class="u-header-collapse__submenu-nav-link" href="#">Headphones & Speakers</a></li>
                                                                        <li><a class="u-header-collapse__submenu-nav-link" href="#">All Electronics</a></li>
                                                                    </ul>
                                                                </div>
                                                            </li>
                                                            <!-- End Cameras, Audio & Video -->

                                                            <!-- Mobiles & Tablets -->
                                                            <li class="u-has-submenu u-header-collapse__submenu">
                                                                <a class="u-header-collapse__nav-link u-header-collapse__nav-pointer" href="javascript:;" data-target="#headerSidebarMobilesCollapse" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="headerSidebarMobilesCollapse">
                                                                    Mobiles & Tablets
                                                                </a>

                                                                <div id="headerSidebarMobilesCollapse" class="collapse" data-parent="#headerSidebarContent">
                                                                    <ul class="u-header-collapse__nav-list">
                                                                        <li><span class="u-header-sidebar__sub-menu-title">Mobiles & Tablets</span></li>
                                                                        <li><a class="u-header-collapse__submenu-nav-link" href="#">All Mobile Phones</a></li>
                                                                        <li><a class="u-header-collapse__submenu-nav-link" href="#">Smartphones</a></li>
                                                                        <li><a class="u-header-collapse__submenu-nav-link" href="#">Refurbished Mobiles</a></li>
                                                                        <li><a class="u-header-collapse__submenu-nav-link" href="#">Cases & Covers</a></li>
                                                                        <li><a class="u-header-collapse__submenu-nav-link" href="#">All Mobile Accessories</a></li>
                                                                        <li><a class="u-header-collapse__submenu-nav-link" href="#">Cases & Covers</a></li>
                                                                        <li><a class="u-header-collapse__submenu-nav-link" href="#">All Tablets</a></li>
                                                                        <li><a class="u-header-collapse__submenu-nav-link" href="#">Tablet Accessories</a></li>
                                                                        <li><a class="u-header-collapse__submenu-nav-link" href="#">All Electronics</a></li>
                                                                    </ul>
                                                                </div>
                                                            </li>
                                                            <!-- End Mobiles & Tablets -->

                                                            <!-- Movies, Music & Video -->
                                                            <li class="u-has-submenu u-header-collapse__submenu">
                                                                <a class="u-header-collapse__nav-link u-header-collapse__nav-pointer" href="javascript:;" data-target="#headerSidebarMoviesCollapse" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="headerSidebarMoviesCollapse">
                                                                    Movies, Music & Video
                                                                </a>

                                                                <div id="headerSidebarMoviesCollapse" class="collapse" data-parent="#headerSidebarContent">
                                                                    <ul class="u-header-collapse__nav-list">
                                                                        <li><span class="u-header-sidebar__sub-menu-title">Movies & TV Shows</span></li>
                                                                        <li><a class="u-header-collapse__submenu-nav-link" href="#">All Movies & TV Shows</a></li>
                                                                        <li><a class="u-header-collapse__submenu-nav-link" href="#">All English</a></li>
                                                                        <li><a class="u-header-collapse__submenu-nav-link" href="#">All Hindi</a></li>
                                                                        <li><span class="u-header-sidebar__sub-menu-title">Video Games</span></li>
                                                                        <li><a class="u-header-collapse__submenu-nav-link" href="#">PC Games</a></li>
                                                                        <li><a class="u-header-collapse__submenu-nav-link" href="#">Consoles</a></li>
                                                                        <li><a class="u-header-collapse__submenu-nav-link" href="#">Accessories</a></li>
                                                                        <li><span class="u-header-sidebar__sub-menu-title">Music</span></li>
                                                                        <li><a class="u-header-collapse__submenu-nav-link" href="#">All Music</a></li>
                                                                        <li><a class="u-header-collapse__submenu-nav-link" href="#">Indian Classical</a></li>
                                                                        <li><a class="u-header-collapse__submenu-nav-link" href="#">Musical Instruments</a></li>
                                                                    </ul>
                                                                </div>
                                                            </li>
                                                            <!-- End Movies, Music & Video -->

                                                            <!-- TV & Audio -->
                                                            <li class="u-has-submenu u-header-collapse__submenu">
                                                                <a class="u-header-collapse__nav-link u-header-collapse__nav-pointer" href="javascript:;" data-target="#headerSidebarTvCollapse" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="headerSidebarTvCollapse">
                                                                    TV & Audio
                                                                </a>

                                                                <div id="headerSidebarTvCollapse" class="collapse" data-parent="#headerSidebarContent">
                                                                    <ul class="u-header-collapse__nav-list">
                                                                        <li><span class="u-header-sidebar__sub-menu-title">Audio & Video</span></li>
                                                                        <li><a class="u-header-collapse__submenu-nav-link" href="#">All Audio & Video</a></li>
                                                                        <li><a class="u-header-collapse__submenu-nav-link" href="#">Televisions</a></li>
                                                                        <li><a class="u-header-collapse__submenu-nav-link" href="#">Headphones</a></li>
                                                                        <li><a class="u-header-collapse__submenu-nav-link" href="#">Speakers</a></li>
                                                                        <li><a class="u-header-collapse__submenu-nav-link" href="#">Audio & Video Accessories</a></li>
                                                                        <li><span class="u-header-sidebar__sub-menu-title">Music</span></li>
                                                                        <li><a class="u-header-collapse__submenu-nav-link" href="#">Televisions</a></li>
                                                                        <li><a class="u-header-collapse__submenu-nav-link" href="#">Headphones</a></li>
                                                                        <li><a class="u-header-collapse__submenu-nav-link" href="#">Electro Home Appliances</a></li>
                                                                    </ul>
                                                                </div>
                                                            </li>
                                                            <!-- End TV & Audio -->

                                                            <!-- Watches & Eyewear -->
                                                            <li class="u-has-submenu u-header-collapse__submenu">
                                                                <a class="u-header-collapse__nav-link u-header-collapse__nav-pointer" href="javascript:;" data-target="#headerSidebarWatchesCollapse" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="headerSidebarWatchesCollapse">
                                                                    Watches & Eyewear
                                                                </a>

                                                                <div id="headerSidebarWatchesCollapse" class="collapse" data-parent="#headerSidebarContent">
                                                                    <ul class="u-header-collapse__nav-list">
                                                                        <li><span class="u-header-sidebar__sub-menu-title">Watches</span></li>
                                                                        <li><a class="u-header-collapse__submenu-nav-link" href="#">All Watches</a></li>
                                                                        <li><a class="u-header-collapse__submenu-nav-link" href="#">Mens Watches</a></li>
                                                                        <li><a class="u-header-collapse__submenu-nav-link" href="#">Womens Watches</a></li>
                                                                        <li><a class="u-header-collapse__submenu-nav-link" href="#">Premium Watches</a></li>
                                                                        <li><a class="u-header-collapse__submenu-nav-link" href="#">Deals on Watches</a></li>
                                                                        <li><span class="u-header-sidebar__sub-menu-title">Eyewear</span></li>
                                                                        <li><a class="u-header-collapse__submenu-nav-link" href="#">Mens Sunglasses</a></li>
                                                                    </ul>
                                                                </div>
                                                            </li>
                                                            <!-- End Watches & Eyewear -->

                                                            <!-- Car, Motorbike & Industrial -->
                                                            <li class="u-has-submenu u-header-collapse__submenu">
                                                                <a class="u-header-collapse__nav-link u-header-collapse__nav-pointer" href="javascript:;" data-target="#headerSidebarCarCollapse" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="headerSidebarCarCollapse">
                                                                    Car, Motorbike & Industrial
                                                                </a>

                                                                <div id="headerSidebarCarCollapse" class="collapse" data-parent="#headerSidebarContent">
                                                                    <ul class="u-header-collapse__nav-list">
                                                                        <li><span class="u-header-sidebar__sub-menu-title">Car & Motorbike</span></li>
                                                                        <li><a class="u-header-collapse__submenu-nav-link" href="#">All Cars & Bikes</a></li>
                                                                        <li><a class="u-header-collapse__submenu-nav-link" href="#">Car & Bike Care</a></li>
                                                                        <li><a class="u-header-collapse__submenu-nav-link" href="#">Lubricants</a></li>
                                                                        <li><span class="u-header-sidebar__sub-menu-title">Shop for Bike</span></li>
                                                                        <li><a class="u-header-collapse__submenu-nav-link" href="#">Helmets & Gloves</a></li>
                                                                        <li><a class="u-header-collapse__submenu-nav-link" href="#">Bike Parts</a></li>
                                                                        <li><span class="u-header-sidebar__sub-menu-title">Industrial Supplies</span></li>
                                                                        <li><a class="u-header-collapse__submenu-nav-link" href="#">All Industrial Supplies</a></li>
                                                                        <li><a class="u-header-collapse__submenu-nav-link" href="#">Lab & Scientific</a></li>
                                                                    </ul>
                                                                </div>
                                                            </li>
                                                            <!-- End Car, Motorbike & Industrial -->

                                                            <!-- Accessories -->
                                                            <li class="u-has-submenu u-header-collapse__submenu">
                                                                <a class="u-header-collapse__nav-link u-header-collapse__nav-pointer" href="javascript:;" data-target="#headerSidebarAccessoriesCollapse" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="headerSidebarAccessoriesCollapse">
                                                                    Accessories
                                                                </a>

                                                                <div id="headerSidebarAccessoriesCollapse" class="collapse" data-parent="#headerSidebarContent">
                                                                    <ul class="u-header-collapse__nav-list">
                                                                        <li><a class="u-header-collapse__submenu-nav-link" href="#">Cases</a></li>
                                                                        <li><a class="u-header-collapse__submenu-nav-link" href="#">Chargers</a></li>
                                                                        <li><a class="u-header-collapse__submenu-nav-link" href="#">Headphone Accessories</a></li>
                                                                        <li><a class="u-header-collapse__submenu-nav-link" href="#">Headphone Cases</a></li>
                                                                        <li><a class="u-header-collapse__submenu-nav-link" href="#">Headphones</a></li>
                                                                        <li><a class="u-header-collapse__submenu-nav-link" href="#">All Industrial Supplies</a></li>
                                                                        <li><a class="u-header-collapse__submenu-nav-link" href="#">Lab & Scientific</a></li>
                                                                    </ul>
                                                                </div>
                                                            </li>
                                                            <!-- End Accessories -->
                                                        </ul>
                                                        <!-- End List -->
                                                    </div>
                                                </div>
                                                <!-- End Content -->
                                            </div>
                                            <!-- Footer -->
                                            <footer id="SVGwaveWithDots" class="svg-preloader u-header-sidebar__footer">
                                                <ul class="list-inline mb-0">
                                                    <li class="list-inline-item pr-3">
                                                        <a class="u-header-sidebar__footer-link text-gray-90" href="#">Privacy</a>
                                                    </li>
                                                    <li class="list-inline-item pr-3">
                                                        <a class="u-header-sidebar__footer-link text-gray-90" href="#">Terms</a>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <a class="u-header-sidebar__footer-link text-gray-90" href="#">
                                                            <i class="fas fa-info-circle"></i>
                                                        </a>
                                                    </li>
                                                </ul>

                                                <!-- SVG Background Shape -->
                                                <div class="position-absolute right-0 bottom-0 left-0 z-index-n1">
                                                    <img class="js-svg-injector" src="https://transvelo.github.io/electro-html/2.0/assets/svg/components/wave-bottom-with-dots.svg" alt="Image Description"
                                                    data-parent="#SVGwaveWithDots">
                                                </div>
                                                <!-- End SVG Background Shape -->
                                            </footer>
                                            <!-- End Footer -->
                                        </div>
                                    </div>
                                </aside>
                                <!-- ========== END HEADER SIDEBAR ========== -->
                            </div>
                            <!-- End Logo-offcanvas-menu -->

                            <!-- Search Bar -->
                            <div class="col d-none d-xl-block">
                                <form action="{{route('search')}}" method="GET">
                                    @csrf
                                    <label class="sr-only" for="searchproduct">Search</label>
                                   
                                    <div class="input-group">
                                        <input id="search_text" type="text" name="query" class="form-control py-2 pl-5 font-size-15 border-right-0 height-40 border-width-2 rounded-left-pill border-primary typeahead"  placeholder="Search for Products" aria-label="Search for Products" autocomplete="off" required>
                                      
                                        <div class="input-group-append">

                                            <button  class="btn btn-primary height-40 py-2 px-3 rounded-right-pill" type="submit" id="searchProduct1">
                                                <span class="ec ec-search font-size-24" ></span>
                                            </button>
                                        </div>
                                    </div>
                                 
                                    
                                </form>
                                
                            </div>
                            <!-- End Search Bar -->
                            <!-- Header Icons -->
                            <div class="col col-xl-auto text-right text-xl-left pl-0 pl-xl-3 position-static">
                                <div class="d-inline-flex">
                                    <ul class="d-flex list-unstyled mb-0 align-items-center">
                                        <!-- Search -->
                                        <li class="col d-xl-none px-2 px-sm-3 position-static">
                                            <a id="searchClassicInvoker" class="font-size-22 text-gray-90 text-lh-1 btn-text-secondary" href="javascript:;" role="button"
                                                data-toggle="tooltip"
                                                data-placement="top"
                                                title="Search"
                                                aria-controls="searchClassic"
                                                aria-haspopup="true"
                                                aria-expanded="false"
                                                data-unfold-target="#searchClassic"
                                                data-unfold-type="css-animation"
                                                data-unfold-duration="300"
                                                data-unfold-delay="300"
                                                data-unfold-hide-on-scroll="true"
                                                data-unfold-animation-in="slideInUp"
                                                data-unfold-animation-out="fadeOut">
                                                <span class="ec ec-search"></span>
                                            </a>

                                            <!-- Input -->
                                            <div id="searchClassic" class="dropdown-menu dropdown-unfold dropdown-menu-right left-0 mx-2" aria-labelledby="searchClassicInvoker">
                                                <form class="js-focus-state input-group px-3">
                                                    <input class="form-control" type="text" name="search" placeholder="Search Product">
                                                    <div class="input-group-append">
                                                        <button class="btn btn-primary px-3" type="button"><i class="font-size-18 ec ec-search"></i></button>
                                                    </div>
                                                </form>
                                            </div>
                                            <!-- End Input -->
                                        </li>
                                        <!-- End Search -->
                                        <li class="col d-none d-xl-block"><a href="https://transvelo.github.io/electro-html/2.0/html/shop/compare.html" class="text-gray-90" data-toggle="tooltip" data-placement="top" title="Compare"><i class="font-size-22 ec ec-compare"></i></a></li>
                                        <li class="col d-none d-xl-block"><a href="https://transvelo.github.io/electro-html/2.0/html/shop/wishlist.html" class="text-gray-90" data-toggle="tooltip" data-placement="top" title="Favorites"><i class="font-size-22 ec ec-favorites"></i></a></li>
                                        <li class="col d-xl-none px-2 px-sm-3"><a href="https://transvelo.github.io/electro-html/2.0/html/shop/my-account.html" class="text-gray-90" data-toggle="tooltip" data-placement="top" title="My Account"><i class="font-size-22 ec ec-user"></i></a></li>
                                        <li class="col pr-xl-0 px-2 px-sm-3 d-xl-none">
                                            <a href="https://transvelo.github.io/electro-html/2.0/html/shop/cart.html" class="text-gray-90 position-relative d-flex " data-toggle="tooltip" data-placement="top" title="Cart">
                                                <i class="font-size-22 ec ec-shopping-bag"></i>
                                                <span class="bg-lg-down-black width-22 height-22 bg-primary position-absolute d-flex align-items-center justify-content-center rounded-circle left-12 top-8 font-weight-bold font-size-12">2</span>
                                                <span class="d-none d-xl-block font-weight-bold font-size-16 text-gray-90 ml-3">$1785.00</span>
                                            </a>
                                        </li>
                                        <li class="col pr-xl-0 px-2 px-sm-3 d-none d-xl-block">
                                            <div id="basicDropdownHoverInvoker" class="text-gray-90 position-relative d-flex " data-toggle="tooltip" data-placement="top" title="Cart"
                                                aria-controls="basicDropdownHover"
                                                aria-haspopup="true"
                                                aria-expanded="false"
                                                data-unfold-event="click"
                                                data-unfold-target="#basicDropdownHover"
                                                data-unfold-type="css-animation"
                                                data-unfold-duration="300"
                                                data-unfold-delay="300"
                                                data-unfold-hide-on-scroll="true"
                                                data-unfold-animation-in="slideInUp"
                                                data-unfold-animation-out="fadeOut">
                                                <i class="font-size-22 ec ec-shopping-bag"></i>
                                                <span class="bg-lg-down-black width-22 height-22 bg-primary position-absolute d-flex align-items-center justify-content-center rounded-circle left-12 top-8 font-weight-bold font-size-12">2</span>
                                                <span class="d-none d-xl-block font-weight-bold font-size-16 text-gray-90 ml-3">$1785.00</span>
                                            </div>
                                            <div id="basicDropdownHover" class="cart-dropdown dropdown-menu dropdown-unfold border-top border-top-primary mt-3 border-width-2 border-left-0 border-right-0 border-bottom-0 left-auto right-0" aria-labelledby="basicDropdownHoverInvoker">
                                                <ul class="list-unstyled px-3 pt-3">
                                                    <li class="border-bottom pb-3 mb-3">
                                                        <div class="">
                                                            <ul class="list-unstyled row mx-n2">
                                                                <li class="px-2 col-auto">
                                                                    <img class="img-fluid" src="../../assets/img/75X75/img1.jpg" alt="Image Description">
                                                                </li>
                                                                <li class="px-2 col">
                                                                    <h5 class="text-blue font-size-14 font-weight-bold">Ultra Wireless S50 Headphones S50 with Bluetooth</h5>
                                                                    <span class="font-size-14">1 × $1,100.00</span>
                                                                </li>
                                                                <li class="px-2 col-auto">
                                                                    <a href="#" class="text-gray-90"><i class="ec ec-close-remove"></i></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                    <li class="border-bottom pb-3 mb-3">
                                                        <div class="">
                                                            <ul class="list-unstyled row mx-n2">
                                                                <li class="px-2 col-auto">
                                                                    <img class="img-fluid" src="../../assets/img/75X75/img2.jpg" alt="Image Description">
                                                                </li>
                                                                <li class="px-2 col">
                                                                    <h5 class="text-blue font-size-14 font-weight-bold">Widescreen NX Mini F1 SMART NX</h5>
                                                                    <span class="font-size-14">1 × $685.00</span>
                                                                </li>
                                                                <li class="px-2 col-auto">
                                                                    <a href="#" class="text-gray-90"><i class="ec ec-close-remove"></i></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <div class="flex-center-between px-4 pt-2">
                                                    <a href="https://transvelo.github.io/electro-html/2.0/html/shop/cart.html" class="btn btn-soft-secondary mb-3 mb-md-0 font-weight-normal px-5 px-md-4 px-lg-5">View cart</a>
                                                    <a href="https://transvelo.github.io/electro-html/2.0/html/shop/checkout.html" class="btn btn-primary-dark-w ml-md-2 px-5 px-md-4 px-lg-5">Checkout</a>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- End Header Icons -->
                        </div>
                    </div>
                </div>
                <!-- End Logo-Search-header-icons -->
                  
                   <!-- Primary-menu-wide -->
                   <div class="d-none d-xl-block bg-primary">
                    <div class="container">
                        <div class="min-height-45">
                            <!-- Nav -->
                            <nav class="js-mega-menu navbar navbar-expand-md u-header__navbar u-header__navbar--wide u-header__navbar--no-space">
                                <!-- Navigation -->
                                <div id="navBar" class="collapse navbar-collapse u-header__navbar-collapse">
                                    <ul class="navbar-nav u-header__navbar-nav">
                                        <!-- Home -->
                                        <li class="nav-item hs-has-mega-menu u-header__nav-item"
                                            data-event="hover"
                                            data-animation-in="slideInUp"
                                            data-animation-out="fadeOut"
                                            data-position="left">
                                            <a id="homeMegaMenu" class="nav-link u-header__nav-link u-header__nav-link-toggle" href="javascript:;" aria-haspopup="true" aria-expanded="false">Home</a>

                                            <!-- Home - Mega Menu -->
                                            <div class="hs-mega-menu w-100 u-header__sub-menu" aria-labelledby="homeMegaMenu">
                                                <div class="row u-header__mega-menu-wrapper">
                                                    <div class="col-md-3">
                                                        <span class="u-header__sub-menu-title">Home & Static Pages</span>
                                                        <ul class="u-header__sub-menu-nav-group">
                                                            <li><a href="index.html" class="nav-link u-header__sub-menu-nav-link">Home v1</a></li>
                                                            <li><a href="home-v2.html" class="nav-link u-header__sub-menu-nav-link">Home v2</a></li>
                                                            <li><a href="home-v3.html" class="nav-link u-header__sub-menu-nav-link">Home v3</a></li>
                                                            <li><a href="home-v3-full-color-bg.html" class="nav-link u-header__sub-menu-nav-link">Home v3.1</a></li>
                                                            <li><a href="home-v4.html" class="nav-link u-header__sub-menu-nav-link">Home v4</a></li>
                                                            <li><a href="home-v5.html" class="nav-link u-header__sub-menu-nav-link">Home v5</a></li>
                                                            <li><a href="home-v6.html" class="nav-link u-header__sub-menu-nav-link">Home v6</a></li>
                                                            <li><a href="home-v7.html" class="nav-link u-header__sub-menu-nav-link">Home v7</a></li>
                                                            <li><a href="about.html" class="nav-link u-header__sub-menu-nav-link">About</a></li>
                                                            <li><a href="contact-v1.html" class="nav-link u-header__sub-menu-nav-link">Contact v1</a></li>
                                                            <li><a href="contact-v2.html" class="nav-link u-header__sub-menu-nav-link">Contact v2</a></li>
                                                            <li><a href="faq.html" class="nav-link u-header__sub-menu-nav-link">FAQ</a></li>
                                                            <li><a href="store-directory.html" class="nav-link u-header__sub-menu-nav-link">Store Directory</a></li>
                                                            <li><a href="terms-and-conditions.html" class="nav-link u-header__sub-menu-nav-link">Terms and Conditions</a></li>
                                                            <li><a href="404.html" class="nav-link u-header__sub-menu-nav-link">404</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <span class="u-header__sub-menu-title">Shop Pages</span>
                                                        <ul class="u-header__sub-menu-nav-group mb-3">
                                                            <li><a href="https://transvelo.github.io/electro-html/2.0/html/shop/shop-grid.html" class="nav-link u-header__sub-menu-nav-link">Shop Grid</a></li>
                                                            <li><a href="https://transvelo.github.io/electro-html/2.0/html/shop/shop-grid-extended.html" class="nav-link u-header__sub-menu-nav-link">Shop Grid Extended</a></li>
                                                            <li><a href="https://transvelo.github.io/electro-html/2.0/html/shop/shop-list-view.html" class="nav-link u-header__sub-menu-nav-link">Shop List View</a></li>
                                                            <li><a href="https://transvelo.github.io/electro-html/2.0/html/shop/shop-list-view-small.html" class="nav-link u-header__sub-menu-nav-link">Shop List View Small</a></li>
                                                            <li><a href="https://transvelo.github.io/electro-html/2.0/html/shop/shop-left-sidebar.html" class="nav-link u-header__sub-menu-nav-link">Shop Left Sidebar</a></li>
                                                            <li><a href="https://transvelo.github.io/electro-html/2.0/html/shop/shop-full-width.html" class="nav-link u-header__sub-menu-nav-link">Shop Full width</a></li>
                                                            <li><a href="https://transvelo.github.io/electro-html/2.0/html/shop/shop-right-sidebar.html" class="nav-link u-header__sub-menu-nav-link">Shop Right Sidebar</a></li>
                                                        </ul>
                                                        <span class="u-header__sub-menu-title">Product Categories</span>
                                                        <ul class="u-header__sub-menu-nav-group">
                                                            <li><a href="https://transvelo.github.io/electro-html/2.0/html/shop/product-categories-4-column-sidebar.html" class="nav-link u-header__sub-menu-nav-link">4 Column Sidebar</a></li>
                                                            <li><a href="https://transvelo.github.io/electro-html/2.0/html/shop/product-categories-5-column-sidebar.html" class="nav-link u-header__sub-menu-nav-link">5 Column Sidebar</a></li>
                                                            <li><a href="https://transvelo.github.io/electro-html/2.0/html/shop/product-categories-6-column-full-width.html" class="nav-link u-header__sub-menu-nav-link">6 Column Full width</a></li>
                                                            <li><a href="https://transvelo.github.io/electro-html/2.0/html/shop/product-categories-7-column-full-width.html" class="nav-link u-header__sub-menu-nav-link">7 Column Full width</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <span class="u-header__sub-menu-title">Single Product Pages</span>
                                                        <ul class="u-header__sub-menu-nav-group mb-3">
                                                            <li><a href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-extended.html" class="nav-link u-header__sub-menu-nav-link">Single Product Extended</a></li>
                                                            <li><a href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="nav-link u-header__sub-menu-nav-link">Single Product Fullwidth</a></li>
                                                            <li><a href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-sidebar.html" class="nav-link u-header__sub-menu-nav-link">Single Product Sidebar</a></li>
                                                        </ul>
                                                        <span class="u-header__sub-menu-title">Ecommerce Pages</span>
                                                        <ul class="u-header__sub-menu-nav-group">
                                                            <li><a href="https://transvelo.github.io/electro-html/2.0/html/shop/shop.html" class="nav-link u-header__sub-menu-nav-link">Shop</a></li>
                                                            <li><a href="https://transvelo.github.io/electro-html/2.0/html/shop/cart.html" class="nav-link u-header__sub-menu-nav-link">Cart</a></li>
                                                            <li><a href="https://transvelo.github.io/electro-html/2.0/html/shop/checkout.html" class="nav-link u-header__sub-menu-nav-link">Checkout</a></li>
                                                            <li><a href="https://transvelo.github.io/electro-html/2.0/html/shop/my-account.html" class="nav-link u-header__sub-menu-nav-link">My Account</a></li>
                                                            <li><a href="https://transvelo.github.io/electro-html/2.0/html/shop/track-your-order.html" class="nav-link u-header__sub-menu-nav-link">Track your Order</a></li>
                                                            <li><a href="https://transvelo.github.io/electro-html/2.0/html/shop/compare.html" class="nav-link u-header__sub-menu-nav-link">Compare</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <span class="u-header__sub-menu-title">Blog Pages</span>
                                                        <ul class="u-header__sub-menu-nav-group mb-3">
                                                            <li><a href="https://transvelo.github.io/electro-html/2.0/html/blog/blog-v1.html" class="nav-link u-header__sub-menu-nav-link">Blog v1</a></li>
                                                            <li><a href="https://transvelo.github.io/electro-html/2.0/html/blog/blog-v2.html" class="nav-link u-header__sub-menu-nav-link">Blog v2</a></li>
                                                            <li><a href="https://transvelo.github.io/electro-html/2.0/html/blog/blog-v3.html" class="nav-link u-header__sub-menu-nav-link">Blog v3</a></li>
                                                            <li><a href="https://transvelo.github.io/electro-html/2.0/html/blog/blog-full-width.html" class="nav-link u-header__sub-menu-nav-link">Blog Full Width</a></li>
                                                            <li><a href="https://transvelo.github.io/electro-html/2.0/html/blog/single-blog-post.html" class="nav-link u-header__sub-menu-nav-link">Single Blog Post</a></li>
                                                        </ul>
                                                        <span class="u-header__sub-menu-title">Shop Columns</span>
                                                        <ul class="u-header__sub-menu-nav-group">
                                                            <li><a href="https://transvelo.github.io/electro-html/2.0/html/shop/shop-7-columns-full-width.html" class="nav-link u-header__sub-menu-nav-link">7 Column Full width</a></li>
                                                            <li><a href="https://transvelo.github.io/electro-html/2.0/html/shop/shop-6-columns-full-width.html" class="nav-link u-header__sub-menu-nav-link">6 Column Full width</a></li>
                                                            <li><a href="https://transvelo.github.io/electro-html/2.0/html/shop/shop-5-columns-sidebar.html" class="nav-link u-header__sub-menu-nav-link">5 Column Sidebar</a></li>
                                                            <li><a href="https://transvelo.github.io/electro-html/2.0/html/shop/shop-4-columns-sidebar.html" class="nav-link u-header__sub-menu-nav-link">4 Column Sidebar</a></li>
                                                            <li><a href="https://transvelo.github.io/electro-html/2.0/html/shop/shop-3-columns-sidebar.html" class="nav-link u-header__sub-menu-nav-link">3 Column Sidebar</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Home - Mega Menu -->
                                        </li>
                                        <!-- End Home -->

                                    

                                        <!-- Smart Phones -->
                                        <li class="nav-item hs-has-mega-menu u-header__nav-item"
                                            data-event="hover"
                                            data-animation-in="slideInUp"
                                            data-animation-out="fadeOut">
                                            <a id="smartphonesMegaMenu" class="nav-link u-header__nav-link u-header__nav-link-toggle" href="javascript:;" aria-haspopup="true" aria-expanded="false">Smart Phones</a>

                                            <!-- Smart Phones - Mega Menu -->
                                            <div class="hs-mega-menu w-100 u-header__sub-menu" aria-labelledby="smartphonesMegaMenu">
                                                <div class="row u-header__mega-menu-wrapper">
                                                    <div class="col-md-8">
                                                        <div class="row">
                                                            <div class="col-md-3">
                                                                <span class="u-header__sub-menu-title">Accessories</span>
                                                                <ul class="u-header__sub-menu-nav-group mb-3">
                                                                    <li><a href="#" class="nav-link u-header__sub-menu-nav-link">Headsets</a></li>
                                                                    <li><a href="#" class="nav-link u-header__sub-menu-nav-link">Cables &amp; Chargers</a></li>
                                                                    <li><a href="#" class="nav-link u-header__sub-menu-nav-link">Electronic Accessories</a></li>
                                                                    <li><a href="#" class="nav-link u-header__sub-menu-nav-link">Selfie Sticks</a></li>
                                                                    <li><a href="#" class="nav-link u-header__sub-menu-nav-link">Internal Batteries</a></li>
                                                                </ul>
                                                                <span class="u-header__sub-menu-title">Cases &amp; Covers</span>
                                                                <ul class="u-header__sub-menu-nav-group">
                                                                    <li><a href="#" class="nav-link u-header__sub-menu-nav-link">For iPhone X<br> </a></li>
                                                                    <li><a href="#" class="nav-link u-header__sub-menu-nav-link">For Samsung S9</a></li>
                                                                    <li><a href="#" class="nav-link u-header__sub-menu-nav-link">Below AED 59</a></li>
                                                                    <li><a href="#" class="nav-link u-header__sub-menu-nav-link">For Xiaomi</a></li>
                                                                    <li><a href="#" class="nav-link u-header__sub-menu-nav-link">For iPhone 7</a></li>
                                                                </ul>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <span class="u-header__sub-menu-title">Tablets</span>
                                                                <ul class="u-header__sub-menu-nav-group mb-3">
                                                                    <li><a href="#" class="nav-link u-header__sub-menu-nav-link">iPads</a></li>
                                                                    <li><a href="#" class="nav-link u-header__sub-menu-nav-link">Samsung</a></li>
                                                                    <li><a href="#" class="nav-link u-header__sub-menu-nav-link">Microsoft Surface</a></li>
                                                                    <li><a href="#" class="nav-link u-header__sub-menu-nav-link">Lenovo</a></li>
                                                                    <li><a href="#" class="nav-link u-header__sub-menu-nav-link">Innjoo</a></li>
                                                                </ul>
                                                                <ul class="u-header__sub-menu-nav-group">
                                                                    <span class="u-header__sub-menu-title">Shop By Price</span>
                                                                    <li><a href="#" class="nav-link u-header__sub-menu-nav-link">For iPhone X<br> </a></li>
                                                                    <li><a href="#" class="nav-link u-header__sub-menu-nav-link">For Samsung S9</a></li>
                                                                    <li><a href="#" class="nav-link u-header__sub-menu-nav-link">Below AED 59</a></li>
                                                                    <li><a href="#" class="nav-link u-header__sub-menu-nav-link">For Xiaomi</a></li>
                                                                    <li><a href="#" class="nav-link u-header__sub-menu-nav-link">For iPhone 7</a></li>
                                                                </ul>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <span class="u-header__sub-menu-title">Mobiles</span>
                                                                <ul class="u-header__sub-menu-nav-group">
                                                                    <li><a href="#" class="nav-link u-header__sub-menu-nav-link">Samsung</a></li>
                                                                    <li><a href="#" class="nav-link u-header__sub-menu-nav-link">Lenovo</a></li>
                                                                    <li><a href="#" class="nav-link u-header__sub-menu-nav-link">Mi</a></li>
                                                                    <li><a href="#" class="nav-link u-header__sub-menu-nav-link">Motorola</a></li>
                                                                    <li><a href="#" class="nav-link u-header__sub-menu-nav-link">Oppo</a></li>
                                                                    <li><a href="#" class="nav-link u-header__sub-menu-nav-link">Panasonic<br> </a></li>
                                                                    <li><a href="#" class="nav-link u-header__sub-menu-nav-link">HTC</a></li>
                                                                    <li><a href="#" class="nav-link u-header__sub-menu-nav-link">Blackberry</a></li>
                                                                    <li><a href="#" class="nav-link u-header__sub-menu-nav-link">LG</a></li>
                                                                    <li><a href="#" class="nav-link u-header__sub-menu-nav-link">Micromax</a></li>
                                                                    <li><a href="#" class="nav-link u-header__sub-menu-nav-link">Nokia</a></li>
                                                                    <li><a href="#" class="nav-link u-header__sub-menu-nav-link">Huawei</a></li>
                                                                </ul>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <span class="u-header__sub-menu-title">#Trending</span>
                                                                <ul class="u-header__sub-menu-nav-group">
                                                                    <li><a href="#" class="nav-link u-header__sub-menu-nav-link">Oppo</a></li>
                                                                    <li><a href="#" class="nav-link u-header__sub-menu-nav-link">Panasonic</a></li>
                                                                    <li><a href="#" class="nav-link u-header__sub-menu-nav-link">Samsung</a></li>
                                                                    <li><a href="#" class="nav-link u-header__sub-menu-nav-link">Lenovo</a></li>
                                                                    <li><a href="#" class="nav-link u-header__sub-menu-nav-link">Mi</a></li>
                                                                    <li><a href="#" class="nav-link u-header__sub-menu-nav-link">Motorola</a></li>
                                                                    <li><a href="#" class="nav-link u-header__sub-menu-nav-link">Nokia</a></li>
                                                                    <li><a href="#" class="nav-link u-header__sub-menu-nav-link">Huawei</a></li>
                                                                    <li><a href="#" class="nav-link u-header__sub-menu-nav-link">HTC</a></li>
                                                                    <li><a href="#" class="nav-link u-header__sub-menu-nav-link">Blackberry</a></li>
                                                                    <li><a href="#" class="nav-link u-header__sub-menu-nav-link">LG</a></li>
                                                                    <li><a href="#" class="nav-link u-header__sub-menu-nav-link">Micromax</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <a href="#" class="d-block">
                                                            <img class="img-fluid" src="../../assets/img/1024X1024/img1.jpg" alt="Image Description">
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Smart Phones - Mega Menu -->
                                        </li>
                                        <!-- End Blog -->

                                        <!-- Laptops & Desktops -->
                                        <li class="nav-item hs-has-mega-menu u-header__nav-item"
                                            data-event="hover"
                                            data-animation-in="slideInUp"
                                            data-animation-out="fadeOut">
                                            <a id="laptopsdesktopsMegaMenu" class="nav-link u-header__nav-link u-header__nav-link-toggle" href="javascript:;" aria-haspopup="true" aria-expanded="false">Laptops & Desktops</a>

                                            <!-- Laptops & Desktops - Mega Menu -->
                                            <div class="hs-mega-menu w-100 u-header__sub-menu" aria-labelledby="laptopsdesktopsMegaMenu">
                                                <div class="row u-header__mega-menu-wrapper">
                                                    <div class="col-md-8">
                                                        <div class="row">
                                                            <div class="col-md-3">
                                                                <span class="u-header__sub-menu-title">Laptops</span>
                                                                <ul class="u-header__sub-menu-nav-group mb-3">
                                                                    <li><a href="#" class="nav-link u-header__sub-menu-nav-link">Thin and Light Laptops</a></li>
                                                                    <li><a href="#" class="nav-link u-header__sub-menu-nav-link">2-in-1 Laptops</a></li>
                                                                    <li><a href="#" class="nav-link u-header__sub-menu-nav-link">Gaming Laptops</a></li>
                                                                    <li><a href="#" class="nav-link u-header__sub-menu-nav-link">Budget Laptops</a></li>
                                                                    <li><a href="#" class="nav-link u-header__sub-menu-nav-link">Business Laptops</a></li>
                                                                </ul>
                                                                <span class="u-header__sub-menu-title">Shop By Brand</span>
                                                                <ul class="u-header__sub-menu-nav-group">
                                                                    <li><a href="#" class="nav-link u-header__sub-menu-nav-link">Apple<br> </a></li>
                                                                    <li><a href="#" class="nav-link u-header__sub-menu-nav-link">HP</a></li>
                                                                    <li><a href="#" class="nav-link u-header__sub-menu-nav-link">Dell</a></li>
                                                                    <li><a href="#" class="nav-link u-header__sub-menu-nav-link">Lenovo</a></li>
                                                                    <li><a href="#" class="nav-link u-header__sub-menu-nav-link">Acer</a></li>
                                                                </ul>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <span class="u-header__sub-menu-title">Tablets</span>
                                                                <ul class="u-header__sub-menu-nav-group mb-3">
                                                                    <li><a href="#" class="nav-link u-header__sub-menu-nav-link">Lenovo</a></li>
                                                                    <li><a href="#" class="nav-link u-header__sub-menu-nav-link">Apple</a></li>
                                                                    <li><a href="#" class="nav-link u-header__sub-menu-nav-link">Samsung</a></li>
                                                                    <li><a href="#" class="nav-link u-header__sub-menu-nav-link">Micromax</a></li>
                                                                    <li><a href="#" class="nav-link u-header__sub-menu-nav-link">iBall</a></li>
                                                                </ul>
                                                                <span class="u-header__sub-menu-title">PC Accessories</span>
                                                                <ul class="u-header__sub-menu-nav-group">
                                                                    <li class="nav-title">PC Accessories</li>
                                                                    <li><a href="#" class="nav-link u-header__sub-menu-nav-link">Keyboards<br> </a></li>
                                                                    <li><a href="#" class="nav-link u-header__sub-menu-nav-link">Mice</a></li>
                                                                    <li><a href="#" class="nav-link u-header__sub-menu-nav-link">Laptop Bags</a></li>
                                                                    <li><a href="#" class="nav-link u-header__sub-menu-nav-link">PC Speakers</a></li>
                                                                    <li><a href="#" class="nav-link u-header__sub-menu-nav-link">Batteries</a></li>
                                                                </ul>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <span class="u-header__sub-menu-title">Processors</span>
                                                                <ul class="u-header__sub-menu-nav-group mb-3">
                                                                    <li><a href="#" class="nav-link u-header__sub-menu-nav-link">Intel</a></li>
                                                                    <li><a href="#" class="nav-link u-header__sub-menu-nav-link">AMD</a></li>
                                                                    <li><a href="#" class="nav-link u-header__sub-menu-nav-link">Qualcomm</a></li>
                                                                    <li><a href="#" class="nav-link u-header__sub-menu-nav-link">IBM</a></li>
                                                                    <li><a href="#" class="nav-link u-header__sub-menu-nav-link">Motorola</a></li>
                                                                </ul>
                                                                <span class="u-header__sub-menu-title">Shop By Price</span>
                                                                <ul class="u-header__sub-menu-nav-group">
                                                                    <li><a href="#" class="nav-link u-header__sub-menu-nav-link">Below Rs. 500$</a></li>
                                                                    <li><a href="#" class="nav-link u-header__sub-menu-nav-link">500$ - 699$</a></li>
                                                                    <li><a href="#" class="nav-link u-header__sub-menu-nav-link">700$ - 799$</a></li>
                                                                    <li><a href="#" class="nav-link u-header__sub-menu-nav-link">800$ - 899$</a></li>
                                                                    <li><a href="#" class="nav-link u-header__sub-menu-nav-link">900$ and Above</a></li>
                                                                </ul>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <span class="u-header__sub-menu-title">Best Processors</span>
                                                                <ul class="u-header__sub-menu-nav-group">
                                                                    <li><a href="#" class="nav-link u-header__sub-menu-nav-link">Intel Core i9-7980XE<br> </a></li>
                                                                    <li><a href="#" class="nav-link u-header__sub-menu-nav-link">AMD Ryzen Threadripper 1950X</a></li>
                                                                    <li><a href="#" class="nav-link u-header__sub-menu-nav-link">AMD Ryzen 5 1600X</a></li>
                                                                    <li><a href="#" class="nav-link u-header__sub-menu-nav-link">Intel Core i7-8700K</a></li>
                                                                    <li><a href="#" class="nav-link u-header__sub-menu-nav-link">AMD Ryzen 7 1800X</a></li>
                                                                    <li><a href="#" class="nav-link u-header__sub-menu-nav-link">Intel Core i5-7600K</a></li>
                                                                    <li><a href="#" class="nav-link u-header__sub-menu-nav-link">AMD Ryzen 3 1300X</a></li>
                                                                    <li><a href="#" class="nav-link u-header__sub-menu-nav-link">Intel Core i7-7820X</a></li>
                                                                    <li><a href="#" class="nav-link u-header__sub-menu-nav-link">Intel Core i5-7600K</a></li>
                                                                    <li><a href="#" class="nav-link u-header__sub-menu-nav-link">AMD Ryzen 4 1100X</a></li>
                                                                    <li><a href="#" class="nav-link u-header__sub-menu-nav-link">Intel Core i3-7280K</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <a href="#" class="d-block">
                                                            <img class="img-fluid" src="../../assets/img/1024X1024/img2.jpg" alt="Image Description">
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Laptops & Desktops - Mega Menu -->
                                        </li>
                                        <!-- End Laptops & Desktops -->

                                        <!-- Gadgets -->
                                        <li class="nav-item hs-has-mega-menu u-header__nav-item"
                                            data-event="hover"
                                            data-animation-in="slideInUp"
                                            data-animation-out="fadeOut">
                                            <a id="GadgetsMegaMenu" class="nav-link u-header__nav-link u-header__nav-link-toggle" href="javascript:;" aria-haspopup="true" aria-expanded="false">Gadgets</a>

                                            <!-- Gadgets - Mega Menu -->
                                            <div class="hs-mega-menu w-100 u-header__sub-menu" aria-labelledby="GadgetsMegaMenu">
                                                <div class="row u-header__mega-menu-wrapper">
                                                    <div class="col-md-4">
                                                        <div class="row">
                                                            <div class="col-md-6 mb-3">
                                                                <a href="#" class="d-block">
                                                                    <img class="img-fluid" src="../../assets/img/300X275/img3.jpg" alt="Image Description">
                                                                </a>
                                                            </div>
                                                            <div class="col-md-6 mb-3">
                                                                <span class="u-header__sub-menu-title">Computers &amp; Accessories</span>
                                                                <ul class="u-header__sub-menu-nav-group">
                                                                    <li><a href="#" class="nav-link u-header__sub-menu-nav-link">Laptops, Desktops &amp; Monitors</a></li>
                                                                    <li><a href="#" class="nav-link u-header__sub-menu-nav-link">Networking &amp; Internet Devices</a></li>
                                                                    <li><a href="#" class="nav-link u-header__sub-menu-nav-link">Computer Accessories</a></li>
                                                                </ul>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <a href="#" class="d-block">
                                                                    <img class="img-fluid" src="../../assets/img/300X275/img4.jpg" alt="Image Description">
                                                                </a>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <span class="u-header__sub-menu-title">Peripherals</span>
                                                                <ul class="u-header__sub-menu-nav-group">
                                                                    <li><a href="#" class="nav-link u-header__sub-menu-nav-link">Hard Drives</a></li>
                                                                    <li><a href="#" class="nav-link u-header__sub-menu-nav-link">Pen Drives & Memory Cards</a></li>
                                                                    <li><a href="#" class="nav-link u-header__sub-menu-nav-link">Printers & Ink</a></li>
                                                                    <li><a href="#" class="nav-link u-header__sub-menu-nav-link">Mouse</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="row">
                                                            <div class="col-md-6 mb-3">
                                                                <a href="#" class="d-block">
                                                                    <img class="img-fluid" src="../../assets/img/300X275/img5.jpg" alt="Image Description">
                                                                </a>
                                                            </div>
                                                            <div class="col-md-6 mb-3">
                                                                <span class="u-header__sub-menu-title">Cameras</span>
                                                                <ul class="u-header__sub-menu-nav-group">
                                                                    <li><a href="#" class="nav-link u-header__sub-menu-nav-link">DSLR</a></li>
                                                                    <li><a href="#" class="nav-link u-header__sub-menu-nav-link">Lenses</a></li>
                                                                    <li><a href="#" class="nav-link u-header__sub-menu-nav-link">Security &amp; Surveillance</a></li>
                                                                    <li><a href="#" class="nav-link u-header__sub-menu-nav-link">Binoculars &amp; Telescopes</a></li>
                                                                    <li><a href="#" class="nav-link u-header__sub-menu-nav-link">Camcorders</a></li>
                                                                </ul>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <a href="#" class="d-block">
                                                                    <img class="img-fluid" src="../../assets/img/300X275/img6.jpg" alt="Image Description">
                                                                </a>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <span class="u-header__sub-menu-title">Watches</span>
                                                                <ul class="u-header__sub-menu-nav-group">
                                                                    <li><a href="#" class="nav-link u-header__sub-menu-nav-link">Men's Watches</a></li>
                                                                    <li><a href="#" class="nav-link u-header__sub-menu-nav-link">Women's Watches</a></li>
                                                                    <li><a href="#" class="nav-link u-header__sub-menu-nav-link">Premium Watches</a></li>
                                                                    <li><a href="#" class="nav-link u-header__sub-menu-nav-link">Kids Watches</a></li>
                                                                    <li><a href="#" class="nav-link u-header__sub-menu-nav-link">Deals on Watches</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="row">
                                                            <div class="col-md-6 mb-3">
                                                                <a href="#" class="d-block">
                                                                    <img class="img-fluid" src="../../assets/img/300X275/img7.jpg" alt="Image Description">
                                                                </a>
                                                            </div>
                                                            <div class="col-md-6 mb-3">
                                                                <span class="u-header__sub-menu-title">Accessories</span>
                                                                <ul class="u-header__sub-menu-nav-group">
                                                                    <li><a href="#" class="nav-link u-header__sub-menu-nav-link">Mouses</a></li>
                                                                    <li><a href="#" class="nav-link u-header__sub-menu-nav-link">Keyboards</a></li>
                                                                    <li><a href="#" class="nav-link u-header__sub-menu-nav-link">Hardrives</a></li>
                                                                    <li><a href="#" class="nav-link u-header__sub-menu-nav-link">Headphones</a></li>
                                                                    <li><a href="#" class="nav-link u-header__sub-menu-nav-link">Speakers</a></li>
                                                                </ul>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <a href="#" class="d-block">
                                                                    <img class="img-fluid" src="../../assets/img/300X275/img8.jpg" alt="Image Description">
                                                                </a>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <span class="u-header__sub-menu-title">Gadgets</span>
                                                                <ul class="u-header__sub-menu-nav-group">
                                                                    <li><a href="#" class="nav-link u-header__sub-menu-nav-link">Fire TV Stick</a></li>
                                                                    <li><a href="#" class="nav-link u-header__sub-menu-nav-link">Google Chromecast</a></li>
                                                                    <li><a href="#" class="nav-link u-header__sub-menu-nav-link">Set Top</a></li>
                                                                    <li><a href="#" class="nav-link u-header__sub-menu-nav-link">Accessories</a></li>
                                                                    <li><a href="#" class="nav-link u-header__sub-menu-nav-link">Deals of the Day</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Gadgets - Mega Menu -->
                                        </li>
                                        <!-- End Gadgets -->

                                     
                                        <!-- Cameras & Accessories -->
                                        <li class="nav-item hs-has-mega-menu u-header__nav-item"
                                            data-event="hover"
                                            data-animation-in="slideInUp"
                                            data-animation-out="fadeOut">
                                            <a id="CamerasAccessoriesMegaMenu" class="nav-link u-header__nav-link u-header__nav-link-toggle" href="javascript:;" aria-haspopup="true" aria-expanded="false">Cameras & Accessories</a>

                                            <!-- Cameras & Accessories - Mega Menu -->
                                            <div class="hs-mega-menu w-100 u-header__sub-menu" aria-labelledby="CamerasAccessoriesMegaMenu">
                                                <div class="row u-header__mega-menu-wrapper">
                                                    <div class="col-md-8">
                                                        <div class="row">
                                                            <div class="col-md-3">
                                                                <span class="u-header__sub-menu-title">Cameras</span>
                                                                <ul class="u-header__sub-menu-nav-group mb-3">
                                                                    <li><a href="#" class="nav-link u-header__sub-menu-nav-link">DSLR Cameras</a></li>
                                                                    <li><a href="#" class="nav-link u-header__sub-menu-nav-link">Digital Cameras</a></li>
                                                                    <li><a href="#" class="nav-link u-header__sub-menu-nav-link">Security &amp; Surveillance</a></li>
                                                                    <li><a href="#" class="nav-link u-header__sub-menu-nav-link">Camcorders</a></li>
                                                                    <li><a href="#" class="nav-link u-header__sub-menu-nav-link">Consoles</a></li>
                                                                </ul>
                                                                <span class="u-header__sub-menu-title">Shop By Price</span>
                                                                <ul class="u-header__sub-menu-nav-group">
                                                                    <li><a href="#" class="nav-link u-header__sub-menu-nav-link">Below Rs. 100$</a></li>
                                                                    <li><a href="#" class="nav-link u-header__sub-menu-nav-link">101$ - 199$</a></li>
                                                                    <li><a href="#" class="nav-link u-header__sub-menu-nav-link">200$ - 299$</a></li>
                                                                    <li><a href="#" class="nav-link u-header__sub-menu-nav-link">300$ - 399$</a></li>
                                                                    <li><a href="#" class="nav-link u-header__sub-menu-nav-link">400$ and Above</a></li>
                                                                </ul>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <span class="u-header__sub-menu-title">Shop By Focal Length</span>
                                                                <ul class="u-header__sub-menu-nav-group mb-3">
                                                                    <li><a href="#" class="nav-link u-header__sub-menu-nav-link">8mm - 24mm</a></li>
                                                                    <li><a href="#" class="nav-link u-header__sub-menu-nav-link">24mm - 35mm</a></li>
                                                                    <li><a href="#" class="nav-link u-header__sub-menu-nav-link">35mm - 85mm</a></li>
                                                                    <li><a href="#" class="nav-link u-header__sub-menu-nav-link">85mm - 135mm</a></li>
                                                                    <li><a href="#" class="nav-link u-header__sub-menu-nav-link">135mm+</a></li>
                                                                </ul>
                                                                <span class="u-header__sub-menu-title">#Trending</span>
                                                                <ul class="u-header__sub-menu-nav-group">
                                                                    <li><a href="#" class="nav-link u-header__sub-menu-nav-link">Sony</a></li>
                                                                    <li><a href="#" class="nav-link u-header__sub-menu-nav-link">Nikon</a></li>
                                                                    <li><a href="#" class="nav-link u-header__sub-menu-nav-link">Canon</a></li>
                                                                    <li><a href="#" class="nav-link u-header__sub-menu-nav-link">Sanyo</a></li>
                                                                    <li><a href="#" class="nav-link u-header__sub-menu-nav-link">Samsung</a></li>
                                                                </ul>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <span class="u-header__sub-menu-title">Accessories</span>
                                                                <ul class="u-header__sub-menu-nav-group mb-3">
                                                                    <li><a href="#" class="nav-link u-header__sub-menu-nav-link">Headphones</a></li>
                                                                    <li><a href="#" class="nav-link u-header__sub-menu-nav-link">Mouses</a></li>
                                                                    <li><a href="#" class="nav-link u-header__sub-menu-nav-link">Hardrives</a></li>
                                                                    <li><a href="#" class="nav-link u-header__sub-menu-nav-link">Headphones</a></li>
                                                                    <li><a href="#" class="nav-link u-header__sub-menu-nav-link">Speakers</a></li>
                                                                </ul>
                                                                <span class="u-header__sub-menu-title">Add-ons</span>
                                                                <ul class="u-header__sub-menu-nav-group">
                                                                    <li><a href="#" class="nav-link u-header__sub-menu-nav-link">Data Cables</a></li>
                                                                    <li><a href="#" class="nav-link u-header__sub-menu-nav-link">Keypads</a></li>
                                                                    <li><a href="#" class="nav-link u-header__sub-menu-nav-link">Earphones</a></li>
                                                                    <li><a href="#" class="nav-link u-header__sub-menu-nav-link">Lenses</a></li>
                                                                    <li><a href="#" class="nav-link u-header__sub-menu-nav-link">Camera Accessories</a></li>
                                                                </ul>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <span class="u-header__sub-menu-title">Shop By Brands</span>
                                                                <ul class="u-header__sub-menu-nav-group">
                                                                    <li><a href="#" class="nav-link u-header__sub-menu-nav-link">Canon</a></li>
                                                                    <li><a href="#" class="nav-link u-header__sub-menu-nav-link">Nikon</a></li>
                                                                    <li><a href="#" class="nav-link u-header__sub-menu-nav-link">Pentax</a></li>
                                                                    <li><a href="#" class="nav-link u-header__sub-menu-nav-link">Sony</a></li>
                                                                    <li><a href="#" class="nav-link u-header__sub-menu-nav-link">Apple</a></li>
                                                                    <li><a href="#" class="nav-link u-header__sub-menu-nav-link">Leica</a></li>
                                                                    <li><a href="#" class="nav-link u-header__sub-menu-nav-link">Samsung</a></li>
                                                                    <li><a href="#" class="nav-link u-header__sub-menu-nav-link">Panasonic</a></li>
                                                                    <li><a href="#" class="nav-link u-header__sub-menu-nav-link">LG</a></li>
                                                                    <li><a href="#" class="nav-link u-header__sub-menu-nav-link">Oppo</a></li>
                                                                    <li><a href="#" class="nav-link u-header__sub-menu-nav-link">Olympus</a></li>
                                                                    <li><a href="#" class="nav-link u-header__sub-menu-nav-link">Sanyo</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <a href="#" class="d-block">
                                                            <img class="img-fluid" src="../../assets/img/1024X1024/img4.png" alt="Image Description">
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Cameras & Accessories - Mega Menu -->
                                        </li>
                                        <!-- End Cameras & Accessories -->

                                        <!-- Movies & Games -->
                                        <li class="nav-item hs-has-mega-menu u-header__nav-item"
                                            data-event="hover"
                                            data-animation-in="slideInUp"
                                            data-animation-out="fadeOut">
                                            <a id="MoviesGamesMegaMenu" class="nav-link u-header__nav-link u-header__nav-link-toggle" href="javascript:;" aria-haspopup="true" aria-expanded="false">Movies & Games</a>

                                            <!-- Movies & Games - Mega Menu -->
                                            <div class="hs-mega-menu w-100 u-header__sub-menu" aria-labelledby="MoviesGamesMegaMenu">
                                                <div class="row u-header__mega-menu-wrapper">
                                                    <div class="col-md-4">
                                                        <div class="row">
                                                            <div class="col">
                                                                <a href="#" class="d-block">
                                                                    <img class="img-fluid" src="../../assets/img/300X275/img9.jpg" alt="Image Description">
                                                                </a>
                                                            </div>
                                                            <div class="col">
                                                                <span class="u-header__sub-menu-title">Movies &amp; TV Shows</span>
                                                                <ul class="u-header__sub-menu-nav-group">
                                                                    <li><a href="#" class="nav-link u-header__sub-menu-nav-link">All Movies &amp; TV Shows</a></li>
                                                                    <li><a href="#" class="nav-link u-header__sub-menu-nav-link">Blu-ray</a></li>
                                                                    <li><a href="#" class="nav-link u-header__sub-menu-nav-link">Latest Movies</a></li>
                                                                    <li><a href="#" class="nav-link u-header__sub-menu-nav-link">All English</a></li>
                                                                    <li><a href="#" class="nav-link u-header__sub-menu-nav-link">All Hindi</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="row">
                                                            <div class="col">
                                                                <a href="#" class="d-block">
                                                                    <img class="img-fluid" src="../../assets/img/300X275/img10.jpg" alt="Image Description">
                                                                </a>
                                                            </div>
                                                            <div class="col">
                                                                <span class="u-header__sub-menu-title">Video Games</span>
                                                                <ul class="u-header__sub-menu-nav-group">
                                                                    <li><a href="#" class="nav-link u-header__sub-menu-nav-link">Games &amp; Accessories</a></li>
                                                                    <li><a href="#" class="nav-link u-header__sub-menu-nav-link">PC Games</a></li>
                                                                    <li><a href="#" class="nav-link u-header__sub-menu-nav-link">New Releases</a></li>
                                                                    <li><a href="#" class="nav-link u-header__sub-menu-nav-link">Consoles</a></li>
                                                                    <li><a href="#" class="nav-link u-header__sub-menu-nav-link">Accessories</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="row">
                                                            <div class="col">
                                                                <a href="#" class="d-block">
                                                                    <img class="img-fluid" src="../../assets/img/300X275/img11.jpg" alt="Image Description">
                                                                </a>
                                                            </div>
                                                            <div class="col">
                                                                <span class="u-header__sub-menu-title">Music</span>
                                                                <ul class="u-header__sub-menu-nav-group">
                                                                    <li><a href="#" class="nav-link u-header__sub-menu-nav-link">5.1 Speaker</a></li>
                                                                    <li><a href="#" class="nav-link u-header__sub-menu-nav-link">Home Theatres</a></li>
                                                                    <li><a href="#" class="nav-link u-header__sub-menu-nav-link">Soundbars</a></li>
                                                                    <li><a href="#" class="nav-link u-header__sub-menu-nav-link">Accessories</a></li>
                                                                    <li><a href="#" class="nav-link u-header__sub-menu-nav-link">Consoles</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Movies & Games - Mega Menu -->
                                        </li>
                                        <!-- End Movies & Games -->

                                        
                                        <!-- Movies & Games -->
                                        <li class="nav-item hs-has-mega-menu u-header__nav-item"
                                            data-event="hover"
                                            data-animation-in="slideInUp"
                                            data-animation-out="fadeOut">
                                            <a id="MoviesGamesMegaMenu" class="nav-link u-header__nav-link u-header__nav-link-toggle" href="javascript:;" aria-haspopup="true" aria-expanded="false">Movies & Games</a>

                                            <!-- Movies & Games - Mega Menu -->
                                            <div class="hs-mega-menu w-100 u-header__sub-menu" aria-labelledby="MoviesGamesMegaMenu">
                                                <div class="row u-header__mega-menu-wrapper">
                                                    <div class="col-md-4">
                                                        <div class="row">
                                                            <div class="col">
                                                                <a href="#" class="d-block">
                                                                    <img class="img-fluid" src="../../assets/img/300X275/img9.jpg" alt="Image Description">
                                                                </a>
                                                            </div>
                                                            <div class="col">
                                                                <span class="u-header__sub-menu-title">Movies &amp; TV Shows</span>
                                                                <ul class="u-header__sub-menu-nav-group">
                                                                    <li><a href="#" class="nav-link u-header__sub-menu-nav-link">All Movies &amp; TV Shows</a></li>
                                                                    <li><a href="#" class="nav-link u-header__sub-menu-nav-link">Blu-ray</a></li>
                                                                    <li><a href="#" class="nav-link u-header__sub-menu-nav-link">Latest Movies</a></li>
                                                                    <li><a href="#" class="nav-link u-header__sub-menu-nav-link">All English</a></li>
                                                                    <li><a href="#" class="nav-link u-header__sub-menu-nav-link">All Hindi</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="row">
                                                            <div class="col">
                                                                <a href="#" class="d-block">
                                                                    <img class="img-fluid" src="../../assets/img/300X275/img10.jpg" alt="Image Description">
                                                                </a>
                                                            </div>
                                                            <div class="col">
                                                                <span class="u-header__sub-menu-title">Video Games</span>
                                                                <ul class="u-header__sub-menu-nav-group">
                                                                    <li><a href="#" class="nav-link u-header__sub-menu-nav-link">Games &amp; Accessories</a></li>
                                                                    <li><a href="#" class="nav-link u-header__sub-menu-nav-link">PC Games</a></li>
                                                                    <li><a href="#" class="nav-link u-header__sub-menu-nav-link">New Releases</a></li>
                                                                    <li><a href="#" class="nav-link u-header__sub-menu-nav-link">Consoles</a></li>
                                                                    <li><a href="#" class="nav-link u-header__sub-menu-nav-link">Accessories</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="row">
                                                            <div class="col">
                                                                <a href="#" class="d-block">
                                                                    <img class="img-fluid" src="../../assets/img/300X275/img11.jpg" alt="Image Description">
                                                                </a>
                                                            </div>
                                                            <div class="col">
                                                                <span class="u-header__sub-menu-title">Music</span>
                                                                <ul class="u-header__sub-menu-nav-group">
                                                                    <li><a href="#" class="nav-link u-header__sub-menu-nav-link">5.1 Speaker</a></li>
                                                                    <li><a href="#" class="nav-link u-header__sub-menu-nav-link">Home Theatres</a></li>
                                                                    <li><a href="#" class="nav-link u-header__sub-menu-nav-link">Soundbars</a></li>
                                                                    <li><a href="#" class="nav-link u-header__sub-menu-nav-link">Accessories</a></li>
                                                                    <li><a href="#" class="nav-link u-header__sub-menu-nav-link">Consoles</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Movies & Games - Mega Menu -->
                                        </li>
                                        <!-- End Movies & Games -->
                                    </ul>
                                </div>
                                <!-- End Navigation -->
                            </nav>
                            <!-- End Nav -->
                        </div>
                    </div>
                </div>
                <!-- End Primary-menu-wide -->
            </div>
            
        </header>
        <!-- ========== END HEADER ========== -->

        <!-- ========== MAIN CONTENT ========== -->
        <main id="content" role="main">
            <!-- breadcrumb -->
            <div class="bg-gray-13 bg-md-transparent">
                <div class="container">
                    <!-- breadcrumb -->
                    <div class="my-md-3">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb mb-3 flex-nowrap flex-xl-wrap overflow-auto overflow-xl-visble">
                                <li class="breadcrumb-item flex-shrink-0 flex-xl-shrink-1"><a href="https://transvelo.github.io/electro-html/2.0/html/home/index.html">Home</a></li>
                                <li class="breadcrumb-item flex-shrink-0 flex-xl-shrink-1 active" aria-current="page">Shop</li>
                            </ol>
                        </nav>
                    </div>
                    <!-- End breadcrumb -->
                </div>
            </div>
            <!-- End breadcrumb -->

            <div class="container">
                <div class="row mb-8">
                    <div class="d-none d-xl-block col-xl-3 col-wd-2gdot5">
                        <div class="mb-6 border border-width-2 border-color-3 borders-radius-6">
                            <!-- List -->
                            <ul id="sidebarNav" class="list-unstyled mb-0 sidebar-navbar view-all">
                                <li><div class="dropdown-title">Browse Categories</div></li>
                                <li>
                                    <a class="dropdown-toggle dropdown-toggle-collapse" href="javascript:;" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="sidebarNav1Collapse" data-target="#sidebarNav1Collapse">
                                        Accessories<span class="text-gray-25 font-size-12 font-weight-normal"> (56)</span>
                                    </a>

                                    <div id="sidebarNav1Collapse" class="collapse" data-parent="#sidebarNav">
                                        <ul id="sidebarNav1" class="list-unstyled dropdown-list">
                                            <!-- Menu List -->
                                            <li><a class="dropdown-item" href="#">Accessories<span class="text-gray-25 font-size-12 font-weight-normal"> (56)</span></a></li>
                                            <li><a class="dropdown-item" href="#">Cameras & Photography<span class="text-gray-25 font-size-12 font-weight-normal"> (11)</span></a></li>
                                            <li><a class="dropdown-item" href="#">Computer Components<span class="text-gray-25 font-size-12 font-weight-normal"> (22)</span></a></li>
                                            <li><a class="dropdown-item" href="#">Gadgets<span class="text-gray-25 font-size-12 font-weight-normal"> (5)</span></a></li>
                                            <li><a class="dropdown-item" href="#">Home Entertainment<span class="text-gray-25 font-size-12 font-weight-normal"> (7)</span></a></li>
                                            <li><a class="dropdown-item" href="#">Laptops & Computers<span class="text-gray-25 font-size-12 font-weight-normal"> (42)</span></a></li>
                                            <li><a class="dropdown-item" href="#">Printers & Ink<span class="text-gray-25 font-size-12 font-weight-normal"> (63)</span></a></li>
                                            <li><a class="dropdown-item" href="#">Smart Phones & Tablets<span class="text-gray-25 font-size-12 font-weight-normal"> (11)</span></a></li>
                                            <li><a class="dropdown-item" href="#">TV & Audio<span class="text-gray-25 font-size-12 font-weight-normal"> (66)</span></a></li>
                                            <li><a class="dropdown-item" href="#">Video Games & Consoles<span class="text-gray-25 font-size-12 font-weight-normal"> (31)</span></a></li>
                                            <!-- End Menu List -->
                                        </ul>
                                    </div>
                                </li>
                                <li>
                                    <a class="dropdown-toggle dropdown-toggle-collapse" href="javascript:;" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="sidebarNav2Collapse" data-target="#sidebarNav2Collapse">
                                        Cameras & Photography<span class="text-gray-25 font-size-12 font-weight-normal"> (56)</span>
                                    </a>

                                    <div id="sidebarNav2Collapse" class="collapse" data-parent="#sidebarNav">
                                        <ul id="sidebarNav2" class="list-unstyled dropdown-list">
                                            <!-- Menu List -->
                                            <li><a class="dropdown-item" href="#">Cameras<span class="text-gray-25 font-size-12 font-weight-normal"> (56)</span></a></li>
                                            <!-- End Menu List -->
                                        </ul>
                                    </div>
                                </li>
                                <li>
                                    <a class="dropdown-toggle dropdown-toggle-collapse" href="javascript:;" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="sidebarNav3Collapse" data-target="#sidebarNav3Collapse">
                                        Computer Components<span class="text-gray-25 font-size-12 font-weight-normal"> (56)</span>
                                    </a>

                                    <div id="sidebarNav3Collapse" class="collapse" data-parent="#sidebarNav">
                                        <ul id="sidebarNav3" class="list-unstyled dropdown-list">
                                            <!-- Menu List -->
                                            <li><a class="dropdown-item" href="#">Computer Cases<span class="text-gray-25 font-size-12 font-weight-normal"> (56)</span></a></li>
                                            <!-- End Menu List -->
                                        </ul>
                                    </div>
                                    
                                    <div id="sidebarNav3Collapse" class="collapse" data-parent="#sidebarNav">
                                        <ul id="sidebarNav3" class="list-unstyled dropdown-list">
                                            <!-- Menu List -->
                                            <li><a class="dropdown-item" href="#">Casing Cooler<span class="text-gray-25 font-size-12 font-weight-normal"> (56)</span></a></li>
                                            <!-- End Menu List -->
                                        </ul>
                                    </div>
                                    
                                    <div id="sidebarNav3Collapse" class="collapse" data-parent="#sidebarNav">
                                        <ul id="sidebarNav3" class="list-unstyled dropdown-list">
                                            <!-- Menu List -->
                                            <li><a class="dropdown-item" href="#">Power Supply<span class="text-gray-25 font-size-12 font-weight-normal"> (56)</span></a></li>
                                            <!-- End Menu List -->
                                        </ul>
                                    </div>
                                    
                                    <div id="sidebarNav3Collapse" class="collapse" data-parent="#sidebarNav">
                                        <ul id="sidebarNav3" class="list-unstyled dropdown-list">
                                            <!-- Menu List -->
                                            <li><a class="dropdown-item" href="#">Water liquid cooling<span class="text-gray-25 font-size-12 font-weight-normal"> (56)</span></a></li>
                                            <!-- End Menu List -->
                                        </ul>
                                    </div>
                                    
                                    <div id="sidebarNav3Collapse" class="collapse" data-parent="#sidebarNav">
                                        <ul id="sidebarNav3" class="list-unstyled dropdown-list">
                                            <!-- Menu List -->
                                            <li><a class="dropdown-item" href="#">Processor<span class="text-gray-25 font-size-12 font-weight-normal"> (56)</span></a></li>
                                            <!-- End Menu List -->
                                        </ul>
                                    </div>
                                    
                                    <div id="sidebarNav3Collapse" class="collapse" data-parent="#sidebarNav">
                                        <ul id="sidebarNav3" class="list-unstyled dropdown-list">
                                            <!-- Menu List -->
                                            <li><a class="dropdown-item" href="#">CPU cooler<span class="text-gray-25 font-size-12 font-weight-normal"> (56)</span></a></li>
                                            <!-- End Menu List -->
                                        </ul>
                                    </div>
                                    
                                    <div id="sidebarNav3Collapse" class="collapse" data-parent="#sidebarNav">
                                        <ul id="sidebarNav3" class="list-unstyled dropdown-list">
                                            <!-- Menu List -->
                                            <li><a class="dropdown-item" href="#">Motherboard<span class="text-gray-25 font-size-12 font-weight-normal"> (56)</span></a></li>
                                            <!-- End Menu List -->
                                        </ul>
                                    </div>
                                    
                                    <div id="sidebarNav3Collapse" class="collapse" data-parent="#sidebarNav">
                                        <ul id="sidebarNav3" class="list-unstyled dropdown-list">
                                            <!-- Menu List -->
                                            <li><a class="dropdown-item" href="#">graphics Card<span class="text-gray-25 font-size-12 font-weight-normal"> (56)</span></a></li>
                                            <!-- End Menu List -->
                                        </ul>
                                    </div>
                                    
                                    <div id="sidebarNav3Collapse" class="collapse" data-parent="#sidebarNav">
                                        <ul id="sidebarNav3" class="list-unstyled dropdown-list">
                                            <!-- Menu List -->
                                            <li><a class="dropdown-item" href="#">portable Hard Disk Drive<span class="text-gray-25 font-size-12 font-weight-normal"> (56)</span></a></li>
                                            <!-- End Menu List -->
                                        </ul>
                                    </div>
                                    
                                    <div id="sidebarNav3Collapse" class="collapse" data-parent="#sidebarNav">
                                        <ul id="sidebarNav3" class="list-unstyled dropdown-list">
                                            <!-- Menu List -->
                                            <li><a class="dropdown-item" href="#">Hard Disk Drive<span class="text-gray-25 font-size-12 font-weight-normal"> (56)</span></a></li>
                                            <!-- End Menu List -->
                                        </ul>
                                    </div>
                                    
                                    <div id="sidebarNav3Collapse" class="collapse" data-parent="#sidebarNav">
                                        <ul id="sidebarNav3" class="list-unstyled dropdown-list">
                                            <!-- Menu List -->
                                            <li><a class="dropdown-item" href="#">SSD<span class="text-gray-25 font-size-12 font-weight-normal"> (56)</span></a></li>
                                            <!-- End Menu List -->
                                        </ul>
                                    </div>
                                    
                                    <div id="sidebarNav3Collapse" class="collapse" data-parent="#sidebarNav">
                                        <ul id="sidebarNav3" class="list-unstyled dropdown-list">
                                            <!-- Menu List -->
                                            <li><a class="dropdown-item" href="#">RAM<span class="text-gray-25 font-size-12 font-weight-normal"> (56)</span></a></li>
                                            <!-- End Menu List -->
                                        </ul>
                                    </div>
                                    
                                    <div id="sidebarNav3Collapse" class="collapse" data-parent="#sidebarNav">
                                        <ul id="sidebarNav3" class="list-unstyled dropdown-list">
                                            <!-- Menu List -->
                                            <li><a class="dropdown-item" href="#">Sound Card<span class="text-gray-25 font-size-12 font-weight-normal"> (56)</span></a></li>
                                            <!-- End Menu List -->
                                        </ul>
                                    </div>
                                    
                                    <div id="sidebarNav3Collapse" class="collapse" data-parent="#sidebarNav">
                                        <ul id="sidebarNav3" class="list-unstyled dropdown-list">
                                            <!-- Menu List -->
                                            <li><a class="dropdown-item" href="#">Stablizer<span class="text-gray-25 font-size-12 font-weight-normal"> (56)</span></a></li>
                                            <!-- End Menu List -->
                                        </ul>
                                    </div>
                                    
                                    <div id="sidebarNav3Collapse" class="collapse" data-parent="#sidebarNav">
                                        <ul id="sidebarNav3" class="list-unstyled dropdown-list">
                                            <!-- Menu List -->
                                            <li><a class="dropdown-item" href="#">Computer Cases<span class="text-gray-25 font-size-12 font-weight-normal"> (56)</span></a></li>
                                            <!-- End Menu List -->
                                        </ul>
                                    </div>
                                    
                                   

                                </li>
                                <li>
                                    <a class="dropdown-toggle dropdown-toggle-collapse" href="javascript:;" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="sidebarNav4Collapse" data-target="#sidebarNav4Collapse">
                                        Gadgets<span class="text-gray-25 font-size-12 font-weight-normal"> (56)</span>
                                    </a>

                                    <div id="sidebarNav4Collapse" class="collapse" data-parent="#sidebarNav">
                                        <ul id="sidebarNav4" class="list-unstyled dropdown-list">
                                            <!-- Menu List -->
                                            <li><a class="dropdown-item" href="#">Smartwatches<span class="text-gray-25 font-size-12 font-weight-normal"> (56)</span></a></li>
                                            <li><a class="dropdown-item" href="#">Wearables<span class="text-gray-25 font-size-12 font-weight-normal"> (56)</span></a></li>
                                            <!-- End Menu List -->
                                        </ul>
                                    </div>
                                </li>
                                <li>
                                    <a class="dropdown-toggle dropdown-toggle-collapse" href="javascript:;" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="sidebarNav5Collapse" data-target="#sidebarNav5Collapse">
                                        Home Entertainment<span class="text-gray-25 font-size-12 font-weight-normal"> (56)</span>
                                    </a>

                                    <div id="sidebarNav5Collapse" class="collapse" data-parent="#sidebarNav">
                                        <ul id="sidebarNav5" class="list-unstyled dropdown-list">
                                            <!-- Menu List -->
                                            <li><a class="dropdown-item" href="#">Tvs<span class="text-gray-25 font-size-12 font-weight-normal"> (56)</span></a></li>
                                            <!-- End Menu List -->
                                        </ul>
                                    </div>
                                </li>
                                <li>
                                    <a class="dropdown-toggle dropdown-toggle-collapse" href="javascript:;" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="sidebarNav6Collapse" data-target="#sidebarNav6Collapse">
                                        Laptops & Computers<span class="text-gray-25 font-size-12 font-weight-normal"> (56)</span>
                                    </a>

                                    <div id="sidebarNav6Collapse" class="collapse" data-parent="#sidebarNav">
                                        <ul id="sidebarNav6" class="list-unstyled dropdown-list">
                                            <!-- Menu List -->
                                            <li><a class="dropdown-item" href="#">Accessories<span class="text-gray-25 font-size-12 font-weight-normal"> (56)</span></a></li>
                                            <li><a class="dropdown-item" href="#">Cameras & Photography<span class="text-gray-25 font-size-12 font-weight-normal"> (11)</span></a></li>
                                            <li><a class="dropdown-item" href="#">Computer Components<span class="text-gray-25 font-size-12 font-weight-normal"> (22)</span></a></li>
                                            <li><a class="dropdown-item" href="#">Gadgets<span class="text-gray-25 font-size-12 font-weight-normal"> (5)</span></a></li>
                                            <li><a class="dropdown-item" href="#">Home Entertainment<span class="text-gray-25 font-size-12 font-weight-normal"> (7)</span></a></li>
                                            <li><a class="dropdown-item" href="#">Laptops & Computers<span class="text-gray-25 font-size-12 font-weight-normal"> (42)</span></a></li>
                                            <li><a class="dropdown-item" href="#">Printers & Ink<span class="text-gray-25 font-size-12 font-weight-normal"> (63)</span></a></li>
                                            <li><a class="dropdown-item" href="#">Smart Phones & Tablets<span class="text-gray-25 font-size-12 font-weight-normal"> (11)</span></a></li>
                                            <li><a class="dropdown-item" href="#">TV & Audio<span class="text-gray-25 font-size-12 font-weight-normal"> (66)</span></a></li>
                                            <li><a class="dropdown-item" href="#">Video Games & Consoles<span class="text-gray-25 font-size-12 font-weight-normal"> (31)</span></a></li>
                                            <!-- End Menu List -->
                                        </ul>
                                    </div>
                                </li>
                                <li>
                                    <a class="dropdown-toggle dropdown-toggle-collapse" href="javascript:;" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="sidebarNav7Collapse" data-target="#sidebarNav7Collapse">
                                        Printers & Ink<span class="text-gray-25 font-size-12 font-weight-normal"> (56)</span>
                                    </a>

                                    <div id="sidebarNav7Collapse" class="collapse" data-parent="#sidebarNav">
                                        <ul id="sidebarNav7" class="list-unstyled dropdown-list">
                                            <!-- Menu List -->
                                            <li><a class="dropdown-item" href="#">Printers<span class="text-gray-25 font-size-12 font-weight-normal"> (56)</span></a></li>
                                            <!-- End Menu List -->
                                        </ul>
                                    </div>
                                </li>
                                <li>
                                    <a class="dropdown-toggle dropdown-toggle-collapse" href="javascript:;" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="sidebarNav8Collapse" data-target="#sidebarNav8Collapse">
                                        Smart Phones & Tablets<span class="text-gray-25 font-size-12 font-weight-normal"> (56)</span>
                                    </a>

                                    <div id="sidebarNav8Collapse" class="collapse" data-parent="#sidebarNav">
                                        <ul id="sidebarNav8" class="list-unstyled dropdown-list">
                                            <!-- Menu List -->
                                            <li><a class="dropdown-item" href="#">Smartphones<span class="text-gray-25 font-size-12 font-weight-normal"> (56)</span></a></li>
                                            <li><a class="dropdown-item" href="#">Tablets<span class="text-gray-25 font-size-12 font-weight-normal"> (56)</span></a></li>
                                            <!-- End Menu List -->
                                        </ul>
                                    </div>
                                </li>
                                <li>
                                    <a class="dropdown-toggle dropdown-toggle-collapse" href="javascript:;" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="sidebarNav9Collapse" data-target="#sidebarNav9Collapse">
                                        TV & Audio<span class="text-gray-25 font-size-12 font-weight-normal"> (56)</span>
                                    </a>

                                    <div id="sidebarNav9Collapse" class="collapse" data-parent="#sidebarNav">
                                        <ul id="sidebarNav9" class="list-unstyled dropdown-list">
                                            <!-- Menu List -->
                                            <li><a class="dropdown-item" href="#">Audio Speakers<span class="text-gray-25 font-size-12 font-weight-normal"> (56)</span></a></li>
                                            <!-- End Menu List -->
                                        </ul>
                                    </div>
                                </li>
                                <li>
                                    <a class="dropdown-toggle dropdown-toggle-collapse" href="javascript:;" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="sidebarNav10Collapse" data-target="#sidebarNav10Collapse">
                                        Video Games & Consoles<span class="text-gray-25 font-size-12 font-weight-normal"> (56)</span>
                                    </a>

                                    <div id="sidebarNav10Collapse" class="collapse" data-parent="#sidebarNav">
                                        <ul id="sidebarNav10" class="list-unstyled dropdown-list">
                                            <!-- Menu List -->
                                            <li><a class="dropdown-item" href="#">Game Consoles<span class="text-gray-25 font-size-12 font-weight-normal"> (56)</span></a></li>
                                            <!-- End Menu List -->
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                            <!-- End List -->
                        </div>


                        
                            <div class="mb-6">
                                <div class="border-bottom border-color-1 mb-5">
                                    <h3 class="section-title section-title__sm mb-0 pb-2 font-size-18">Filters</h3>
                                </div>
                            <form action="{{route('shop_filter')}}" method="post">
                                    @csrf
                                <div class="border-bottom pb-4 mb-4">
                                    <h4 class="font-size-14 mb-3 font-weight-bold">Brands</h4>
                                       <!-- Checkboxes -->
                                    @if(count($brands)>0)
                                       @if(!empty($_GET['brand']))
                                         @php
                                           $filter_brand = explode(',',$_GET['brand'])
                                        @endphp
                                       @endif

                                            @foreach($brands as $brand)
                                            <div class="form-group d-flex align-items-center justify-content-between mb-2 pb-1">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" @if(!empty($filter_brand) && in_array($brand->brandname,$filter_brand)) checked @endif  id="{{$brand->brandname}}" name="brand[]" value="{{$brand->brandname}}" onchange="this.form.submit();">
                                                    <label class="custom-control-label" for="{{$brand->brandname}}">{{$brand->brandname}}
                                                        <span class="text-gray-25 font-size-12 font-weight-normal"> {{count($brand->products)}}</span>
                                                    </label>
                                                </div>
                                            </div>
                                            @endforeach
                                        @endif
                                    <!-- End Checkboxes -->
                                </div>
                            </form>
    
    
    
                                <form action="{{route('shop_filter')}}" method="post">
                                    @csrf
                                <div class="range-slider">
                                    <h4 class="font-size-14 mb-3 font-weight-bold">Price</h4>
                                    <!-- Range Slider -->
                                    <input class="js-range-slider" type="text" id="price_range" name="price_range" value="@if(!empty($_GET['price'])) {{$_GET['price']}} @endif"
                                    data-extra-classes="u-range-slider u-range-slider-indicator u-range-slider-grid"
                                    data-type="double"
                                    data-grid="false"
                                    data-hide-from-to="true"
                                    data-prefix="$"
                                    data-min="{{Helper::minPrice()}}"
                                    data-max="{{Helper::maxPrice()}}"
                                    data-value-min="{{Helper::minPrice()}}"
                                    data-value-max="{{Helper::maxPrice()}}"
                                    data-result-min="#{{Helper::minPrice()}}"
                                    data-result-max="#{{Helper::maxPrice()}}">
                                    <!-- End Range Slider -->
                                    <div class="mt-1 text-gray-111 d-flex mb-4">
                                        <span class="mr-0dot5">Price: </span>
                                        <span>$: </span>
                                        <span id="{{Helper::minPrice()}}" class=""></span>
                                        <span class="mx-0dot5"> — </span>
                                        <span>$</span>
                                        <span id="{{Helper::maxPrice()}}" class=""></span>
                                    </div>
                                    <button type="submit" class="btn px-4 btn-primary-dark-w py-2 rounded-lg">Filter</button>
                                </div>

                                </form>



                               
                              
                            </div>
                       

                        <div class="mb-8">
                            <div class="border-bottom border-color-1 mb-5">
                                <h3 class="section-title section-title__sm mb-0 pb-2 font-size-18">Latest Products</h3>
                            </div>
                            <ul class="list-unstyled">
                                <li class="mb-4">
                                    <div class="row">
                                        <div class="col-auto">
                                            <a href="single-product-fullwidth.html" class="d-block width-75">
                                                <img class="img-fluid" src="../../assets/img/300X300/img1.jpg" alt="Image Description">
                                            </a>
                                        </div>
                                        <div class="col">
                                            <h3 class="text-lh-1dot2 font-size-14 mb-0"><a href="single-product-fullwidth.html">Notebook Black Spire V Nitro VN7-591G</a></h3>
                                            <div class="text-warning text-ls-n2 font-size-16 mb-1" style="width: 80px;">
                                                <small class="fas fa-star"></small>
                                                <small class="fas fa-star"></small>
                                                <small class="fas fa-star"></small>
                                                <small class="fas fa-star"></small>
                                                <small class="far fa-star text-muted"></small>
                                            </div>
                                            <div class="font-weight-bold">
                                                <del class="font-size-11 text-gray-9 d-block">$2299.00</del>
                                                <ins class="font-size-15 text-red text-decoration-none d-block">$1999.00</ins>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="mb-4">
                                    <div class="row">
                                        <div class="col-auto">
                                            <a href="single-product-fullwidth.html" class="d-block width-75">
                                                <img class="img-fluid" src="../../assets/img/300X300/img3.jpg" alt="Image Description">
                                            </a>
                                        </div>
                                        <div class="col">
                                            <h3 class="text-lh-1dot2 font-size-14 mb-0"><a href="single-product-fullwidth.html">Notebook Black Spire V Nitro VN7-591G</a></h3>
                                            <div class="text-warning text-ls-n2 font-size-16 mb-1" style="width: 80px;">
                                                <small class="fas fa-star"></small>
                                                <small class="fas fa-star"></small>
                                                <small class="fas fa-star"></small>
                                                <small class="fas fa-star"></small>
                                                <small class="far fa-star text-muted"></small>
                                            </div>
                                            <div class="font-weight-bold font-size-15">
                                                $499.00
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="mb-4">
                                    <div class="row">
                                        <div class="col-auto">
                                            <a href="single-product-fullwidth.html" class="d-block width-75">
                                                <img class="img-fluid" src="../../assets/img/300X300/img5.jpg" alt="Image Description">
                                            </a>
                                        </div>
                                        <div class="col">
                                            <h3 class="text-lh-1dot2 font-size-14 mb-0"><a href="single-product-fullwidth.html">Tablet Thin EliteBook Revolve 810 G6</a></h3>
                                            <div class="text-warning text-ls-n2 font-size-16 mb-1" style="width: 80px;">
                                                <small class="fas fa-star"></small>
                                                <small class="fas fa-star"></small>
                                                <small class="fas fa-star"></small>
                                                <small class="fas fa-star"></small>
                                                <small class="far fa-star text-muted"></small>
                                            </div>
                                            <div class="font-weight-bold font-size-15">
                                                $100.00
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="mb-4">
                                    <div class="row">
                                        <div class="col-auto">
                                            <a href="single-product-fullwidth.html" class="d-block width-75">
                                                <img class="img-fluid" src="../../assets/img/300X300/img6.jpg" alt="Image Description">
                                            </a>
                                        </div>
                                        <div class="col">
                                            <h3 class="text-lh-1dot2 font-size-14 mb-0"><a href="single-product-fullwidth.html">Notebook Purple G952VX-T7008T</a></h3>
                                            <div class="text-warning text-ls-n2 font-size-16 mb-1" style="width: 80px;">
                                                <small class="fas fa-star"></small>
                                                <small class="fas fa-star"></small>
                                                <small class="fas fa-star"></small>
                                                <small class="fas fa-star"></small>
                                                <small class="far fa-star text-muted"></small>
                                            </div>
                                            <div class="font-weight-bold">
                                                <del class="font-size-11 text-gray-9 d-block">$2299.00</del>
                                                <ins class="font-size-15 text-red text-decoration-none d-block">$1999.00</ins>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="mb-4">
                                    <div class="row">
                                        <div class="col-auto">
                                            <a href="single-product-fullwidth.html" class="d-block width-75">
                                                <img class="img-fluid" src="../../assets/img/300X300/img10.png" alt="Image Description">
                                            </a>
                                        </div>
                                        <div class="col">
                                            <h3 class="text-lh-1dot2 font-size-14 mb-0"><a href="single-product-fullwidth.html">Laptop Yoga 21 80JH0035GE W8.1</a></h3>
                                            <div class="text-warning text-ls-n2 font-size-16 mb-1" style="width: 80px;">
                                                <small class="fas fa-star"></small>
                                                <small class="fas fa-star"></small>
                                                <small class="fas fa-star"></small>
                                                <small class="fas fa-star"></small>
                                                <small class="far fa-star text-muted"></small>
                                            </div>
                                            <div class="font-weight-bold font-size-15">
                                                $1200.00
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-9 col-wd-9gdot5">
                        <!-- Recommended Products -->
                       
                        <!-- End Recommended Products -->
                        <!-- Shop-control-bar Title -->
                        <div class="flex-center-between mb-3">
                            <h3 class="font-size-25 mb-0">Shop</h3>
                            <p class="font-size-14 text-gray-90 mb-0">Showing 1–25 of 56 results</p>
                        </div>
                        <!-- End shop-control-bar Title -->
                        <!-- Shop-control-bar -->
                        <div class="bg-gray-1 flex-center-between borders-radius-9 py-1">
                            <div class="d-xl-none">
                                <!-- Account Sidebar Toggle Button -->
                                <a id="sidebarNavToggler1" class="btn btn-sm py-1 font-weight-normal" href="javascript:;" role="button"
                                    aria-controls="sidebarContent1"
                                    aria-haspopup="true"
                                    aria-expanded="false"
                                    data-unfold-event="click"
                                    data-unfold-hide-on-scroll="false"
                                    data-unfold-target="#sidebarContent1"
                                    data-unfold-type="css-animation"
                                    data-unfold-animation-in="fadeInLeft"
                                    data-unfold-animation-out="fadeOutLeft"
                                    data-unfold-duration="500">
                                    <i class="fas fa-sliders-h"></i> <span class="ml-1">Filters</span>
                                </a>
                                <!-- End Account Sidebar Toggle Button -->
                            </div>
                            <div class="px-3 d-none d-xl-block">
                                <ul class="nav nav-tab-shop" id="pills-tab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="pills-one-example1-tab" data-toggle="pill" href="#pills-one-example1" role="tab" aria-controls="pills-one-example1" aria-selected="false">
                                            <div class="d-md-flex justify-content-md-center align-items-md-center">
                                                <i class="fa fa-th"></i>
                                            </div>
                                        </a>
                                    </li>
                                  
                                    <li class="nav-item">
                                        <a class="nav-link" id="pills-three-example1-tab" data-toggle="pill" href="#pills-three-example1" role="tab" aria-controls="pills-three-example1" aria-selected="true">
                                            <div class="d-md-flex justify-content-md-center align-items-md-center">
                                                <i class="fa fa-list"></i>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="pills-four-example1-tab" data-toggle="pill" href="#pills-four-example1" role="tab" aria-controls="pills-four-example1" aria-selected="true">
                                            <div class="d-md-flex justify-content-md-center align-items-md-center">
                                                <i class="fa fa-th-list"></i>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            
                            <div class="d-flex">
                                <form method="post" action="{{route('shop_filter')}}" >
                                    @csrf
                                    <!-- Select -->
                                    <select class="js-select selectpicker dropdown-select max-width-120"
                                    data-style="btn-sm bg-white font-weight-normal py-2 border text-gray-20 bg-lg-down-transparent border-lg-down-0" name="sortBy" onchange="this.form.submit(); " >
                                        <option selected value="titleAsc" >Default sorting</option>
                                        <option value="priceAsc"  @if(!empty($_GET['sortBy']) && $_GET['sortBy']=='priceAsc') selected @endif >Price - Lower to Higher</option>
                                        <option value="priceDesc" @if(!empty($_GET['sortBy']) && $_GET['sortBy']=='priceDesc') selected @endif>Price - Higher to Lower</option>
                                        <option value="titleAsc"  @if(!empty($_GET['sortBy']) && $_GET['sortBy']=='titleAsc') selected @endif>Alphabetical Ascending</option>
                                        <option value="titleDesc" @if(!empty($_GET['sortBy']) && $_GET['sortBy']=='titleDesc') selected @endif>Alphabetical Descending</option>

                                    </select>
                                    <!-- End Select -->
                              
                             
                                </form>
                               
                            </div>
                       
                           

                      
                        </div>
                        <!-- End Shop-control-bar -->
                        <!-- Shop Body -->
                        <!-- Tab Content -->
                        <div class="tab-content" id="pills-tabContent">
                            <style>
                                .max-width-120 {
                                     max-width: 13.5rem;
                                }
                            </style>
                            <div class="tab-pane fade pt-2 show active" id="pills-one-example1" role="tabpanel" aria-labelledby="pills-one-example1-tab" data-target-group="groups">
                                <ul class="row list-unstyled products-group no-gutters">
                                   
                                    @foreach($allproducts as $allproduct)
                                    <li class="col-6 col-md-3 col-wd-2gdot4 product-item">
                                        <div class="product-item__outer h-100">
                                            <div class="product-item__inner px-xl-4 p-3">
                                                <div class="product-item__body pb-xl-2">
                                                    <div class="mb-2"><a href="{{ route('SingleProduct', $allproduct->id) }}" class="font-size-12 text-gray-5">Mobile</a></div>
                                                    <h5 class="mb-1 product-item__title"><a href="{{ route('SingleProduct', $allproduct->id) }}">{{$allproduct->product_title}}</a></h5>
                                                    <div class="mb-2">
                                                        <a href="{{ route('SingleProduct', $allproduct->id) }}" class="d-block text-center"><img class="img-fluid" src="../../assets/img/212X200/img1.jpg" alt="Image Description"></a>
                                                    </div>
                                                    <div class="flex-center-between mb-1">
                                                        <div class="prodcut-price">
                                                            <div class="text-gray-100">{{$allproduct->unit_price}}</div>
                                                        </div>
                                                     
                                                        <div class="d-none d-xl-block prodcut-add-cart">
                                                            <a href="CART.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-item__footer">
                                                    <div class="border-top pt-2 flex-center-between flex-wrap">
                                                        <a href="compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                        <a href="wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    @endforeach
                                 

                                </ul>
                            </div>
                            
                            <div class="tab-pane fade pt-2" id="pills-three-example1" role="tabpanel" aria-labelledby="pills-three-example1-tab" data-target-group="groups">
                                <ul class="d-block list-unstyled products-group prodcut-list-view">
                                    @foreach($allproducts as $allproduct)
                                    <li class="product-item remove-divider">
                                        <div class="product-item__outer w-100">
                                            <div class="product-item__inner remove-prodcut-hover py-4 row">
                                                <div class="product-item__header col-6 col-md-4">
                                                    <div class="mb-2">
                                                        <a href="single-product-fullwidth.html" class="d-block text-center"><img class="img-fluid" src="../../assets/img/212X200/img1.jpg" alt="Image Description"></a>
                                                    </div>
                                                </div>
                                                <div class="product-item__body col-6 col-md-5">
                                                    <div class="pr-lg-10">
                                                        <div class="mb-2"><a href="product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Speakers</a></div>
                                                        <h5 class="mb-2 product-item__title"><a href="single-product-fullwidth.html" class="text-blue font-weight-bold">{{$allproduct->product_title}}</a></h5>
                                                        
                                                        <ul class="font-size-12 p-0 text-gray-110 mb-4 d-none d-md-block">
                                                            <li class="line-clamp-1 mb-1 list-bullet">Brand new and high quality</li>
                                                            <li class="line-clamp-1 mb-1 list-bullet">Made of supreme quality, durable EVA crush resistant, anti-shock material.</li>
                                                            <li class="line-clamp-1 mb-1 list-bullet">20 MP Electro and 28 megapixel CMOS rear camera</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product-item__footer col-md-3 d-md-block">
                                                    <div class="mb-3">
                                                        <div class="prodcut-price mb-2">
                                                            <div class="text-gray-100">{{$allproduct->unit_price}}</div>
                                                        </div>
                                                        <div class="prodcut-add-cart">
                                                            <a href="single-product-fullwidth.html" class="btn btn-sm btn-block btn-primary-dark btn-wide transition-3d-hover">Add to cart</a>
                                                        </div>
                                                    </div>
                                                    <div class="flex-horizontal-center justify-content-between justify-content-wd-center flex-wrap">
                                                        <a href="compare.html" class="text-gray-6 font-size-13 mx-wd-3"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                        <a href="wishlist.html" class="text-gray-6 font-size-13 mx-wd-3"><i class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    @endforeach
                                    
                                </ul>
                            </div>
                            <div class="tab-pane fade pt-2" id="pills-four-example1" role="tabpanel" aria-labelledby="pills-four-example1-tab" data-target-group="groups">
                                <ul class="d-block list-unstyled products-group prodcut-list-view-small">
                                    @foreach($allproducts as $allproduct)
                                    <li class="product-item remove-divider">
                                        <div class="product-item__outer w-100">
                                            <div class="product-item__inner remove-prodcut-hover py-4 row">
                                                <div class="product-item__header col-6 col-md-2">
                                                    <div class="mb-2">
                                                        <a href="single-product-fullwidth.html" class="d-block text-center"><img class="img-fluid" src="../../assets/img/212X200/img1.jpg" alt="Image Description"></a>
                                                    </div>
                                                </div>
                                                <div class="product-item__body col-6 col-md-7">
                                                    <div class="pr-lg-10">
                                                        <div class="mb-2"><a href="product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Speakers</a></div>
                                                        <h5 class="mb-2 product-item__title"><a href="single-product-fullwidth.html" class="text-blue font-weight-bold">{{$allproduct->product_title}}</a></h5>
                                                       
                                                        <ul class="font-size-12 p-0 text-gray-110 mb-4 d-none d-md-block">
                                                            <li class="line-clamp-1 mb-1 list-bullet">Brand new and high quality</li>
                                                            <li class="line-clamp-1 mb-1 list-bullet">Made of supreme quality, durable EVA crush resistant, anti-shock material.</li>
                                                            <li class="line-clamp-1 mb-1 list-bullet">20 MP Electro and 28 megapixel CMOS rear camera</li>
                                                        </ul>
                                                        <div class="mb-3 d-none d-md-block">
                                                            <a class="d-inline-flex align-items-center small font-size-14" href="#">
                                                                <div class="text-warning mr-2">
                                                                    <small class="fas fa-star"></small>
                                                                    <small class="fas fa-star"></small>
                                                                    <small class="fas fa-star"></small>
                                                                    <small class="fas fa-star"></small>
                                                                    <small class="far fa-star text-muted"></small>
                                                                </div>
                                                                <span class="text-secondary">(40)</span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-item__footer col-md-3 d-md-block">
                                                    <div class="mb-2 flex-center-between">
                                                        <div class="prodcut-price">
                                                            <div class="text-gray-100">{{$allproduct->unit_price}}</div>
                                                        </div>
                                                        <div class="prodcut-add-cart">
                                                            <a href="single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="flex-horizontal-center justify-content-between justify-content-wd-center flex-wrap border-top pt-3">
                                                        <a href="compare.html" class="text-gray-6 font-size-13 mx-wd-3"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                        <a href="wishlist.html" class="text-gray-6 font-size-13 mx-wd-3"><i class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        <!-- End Tab Content -->


                         <div class="mb-6 d-none d-xl-block">
                            <div class="position-relative">
                                <div class="border-bottom border-color-1 mb-2">
                                    <h3 class="d-inline-block section-title section-title__full mb-0 pb-2 font-size-22">Onsale</h3>
                                </div>
                                <div class="js-slick-carousel u-slick position-static overflow-hidden u-slick-overflow-visble pb-7 pt-2 px-1"
                                    data-pagi-classes="text-center right-0 bottom-1 left-0 u-slick__pagination u-slick__pagination--long mb-0 z-index-n1 mt-3 mt-md-0"
                                    data-slides-show="5"
                                    data-slides-scroll="1"
                                    data-arrows-classes="position-absolute top-0 font-size-17 u-slick__arrow-normal top-10"
                                    data-arrow-left-classes="fa fa-angle-left right-1"
                                    data-arrow-right-classes="fa fa-angle-right right-0"
                                    data-responsive='[{
                                      "breakpoint": 1400,
                                      "settings": {
                                        "slidesToShow": 4
                                      }
                                    }, {
                                        "breakpoint": 1200,
                                        "settings": {
                                          "slidesToShow": 4
                                        }
                                    }, {
                                      "breakpoint": 992,
                                      "settings": {
                                        "slidesToShow": 3
                                      }
                                    }, {
                                      "breakpoint": 768,
                                      "settings": {
                                        "slidesToShow": 2
                                      }
                                    }, {
                                      "breakpoint": 554,
                                      "settings": {
                                        "slidesToShow": 2
                                      }
                                    }]'>
                                    @if(count($allproducts)>0)
                                            @foreach($allproducts as $allproduct)
                                    <div class="js-slide products-group">
                                        <div class="product-item">
                                            <div class="product-item__outer h-100">
                                                <div class="product-item__inner px-wd-4 p-2 p-md-3">
                                                    <div class="product-item__body pb-xl-2">
                                                        <div class="mb-2"><a href="product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">BrandName</a></div>
                                                        <h5 class="mb-1 product-item__title"><a href="single-product-fullwidth.html" class="text-blue font-weight-bold">{{$allproduct->product_title}}</a></h5>
                                                        <div class="mb-2">
                                                            <a href="single-product-fullwidth.html" class="d-block text-center"><img class="img-fluid" src="../../assets/img/212X200/img1.jpg" alt="Image Description"></a>
                                                        </div>
                                                        <div class="flex-center-between mb-1">
                                                            <div class="prodcut-price">
                                                                <div class="text-gray-100">{{$allproduct->unit_price}}</div>
                                                            </div>
                                                            <div class="d-none d-xl-block prodcut-add-cart">
                                                                <a href="single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="product-item__footer">
                                                        <div class="border-top pt-2 flex-center-between flex-wrap">
                                                            <a href="compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                            <a href="wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                    @endif
                                    
                                </div>
                            </div>
                        </div>
                        
                        
                    </div>
                </div>
                <!-- Brand Carousel -->
                <div class="mb-6">
                    <div class="py-2 border-top border-bottom">
                        <div class="js-slick-carousel u-slick my-1"
                            data-slides-show="5"
                            data-slides-scroll="1"
                            data-arrows-classes="d-none d-lg-inline-block u-slick__arrow-normal u-slick__arrow-centered--y"
                            data-arrow-left-classes="fa fa-angle-left u-slick__arrow-classic-inner--left z-index-9"
                            data-arrow-right-classes="fa fa-angle-right u-slick__arrow-classic-inner--right"
                            data-responsive='[{
                                "breakpoint": 992,
                                "settings": {
                                    "slidesToShow": 2
                                }
                            }, {
                                "breakpoint": 768,
                                "settings": {
                                    "slidesToShow": 1
                                }
                            }, {
                                "breakpoint": 554,
                                "settings": {
                                    "slidesToShow": 1
                                }
                            }]'>
                            <div class="js-slide">
                                <a href="#" class="link-hover__brand">
                                    <img class="img-fluid m-auto max-height-50" src="../../assets/img/200X60/img1.png" alt="Image Description">
                                </a>
                            </div>
                            <div class="js-slide">
                                <a href="#" class="link-hover__brand">
                                    <img class="img-fluid m-auto max-height-50" src="../../assets/img/200X60/img2.png" alt="Image Description">
                                </a>
                            </div>
                            <div class="js-slide">
                                <a href="#" class="link-hover__brand">
                                    <img class="img-fluid m-auto max-height-50" src="../../assets/img/200X60/img3.png" alt="Image Description">
                                </a>
                            </div>
                            <div class="js-slide">
                                <a href="#" class="link-hover__brand">
                                    <img class="img-fluid m-auto max-height-50" src="../../assets/img/200X60/img4.png" alt="Image Description">
                                </a>
                            </div>
                            <div class="js-slide">
                                <a href="#" class="link-hover__brand">
                                    <img class="img-fluid m-auto max-height-50" src="../../assets/img/200X60/img5.png" alt="Image Description">
                                </a>
                            </div>
                            <div class="js-slide">
                                <a href="#" class="link-hover__brand">
                                    <img class="img-fluid m-auto max-height-50" src="../../assets/img/200X60/img6.png" alt="Image Description">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Brand Carousel -->
            </div>
        </main>
        <!-- ========== END MAIN CONTENT ========== -->

        <!-- ========== FOOTER ========== -->
        <footer>
            <!-- Footer-top-widget -->
            <div class="container d-none d-lg-block mb-3">
                <div class="row">
                    <div class="col-wd-3 col-lg-4">
                        <div class="widget-column">
                            <div class="border-bottom border-color-1 mb-5">
                                <h3 class="section-title section-title__sm mb-0 pb-2 font-size-18">Featured Products</h3>
                            </div>
                            <ul class="list-unstyled products-group">
                                <li class="product-item product-item__list row no-gutters mb-6 remove-divider">
                                    <div class="col-auto">
                                        <a href="single-product-fullwidth.html" class="d-block width-75 text-center"><img class="img-fluid" src="../../assets/img/75X75/img1.jpg" alt="Image Description"></a>
                                    </div>
                                    <div class="col pl-4 d-flex flex-column">
                                        <h5 class="product-item__title mb-0"><a href="single-product-fullwidth.html" class="text-blue font-weight-bold">Purple Wireless Headphones Solo 2 HD</a></h5>
                                        <div class="prodcut-price mt-auto">
                                            <div class="font-size-15">$1149.00</div>
                                        </div>
                                    </div>
                                </li>
                                <li class="product-item product-item__list row no-gutters mb-6 remove-divider">
                                    <div class="col-auto">
                                        <a href="single-product-fullwidth.html" class="d-block width-75 text-center"><img class="img-fluid" src="../../assets/img/75X75/img2.jpg" alt="Image Description"></a>
                                    </div>
                                    <div class="col pl-4 d-flex flex-column">
                                        <h5 class="product-item__title mb-0"><a href="single-product-fullwidth.html" class="text-blue font-weight-bold">Powerbank 1130 mAh Blue</a></h5>
                                        <div class="prodcut-price mt-auto">
                                            <div class="font-size-15">$210.00</div>
                                        </div>
                                    </div>
                                </li>
                                <li class="product-item product-item__list row no-gutters mb-6 remove-divider">
                                    <div class="col-auto">
                                        <a href="single-product-fullwidth.html" class="d-block width-75 text-center"><img class="img-fluid" src="../../assets/img/75X75/img3.jpg" alt="Image Description"></a>
                                    </div>
                                    <div class="col pl-4 d-flex flex-column">
                                        <h5 class="product-item__title mb-0"><a href="single-product-fullwidth.html" class="text-blue font-weight-bold">Nerocool EN52377 Dead Silence Gaming Cube Case</a></h5>
                                        <div class="prodcut-price mt-auto">
                                            <div class="font-size-15">$180.00</div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-wd-3 col-lg-4">
                        <div class="border-bottom border-color-1 mb-5">
                            <h3 class="section-title section-title__sm mb-0 pb-2 font-size-18">Onsale Products</h3>
                        </div>
                        <ul class="list-unstyled products-group">
                            <li class="product-item product-item__list row no-gutters mb-6 remove-divider">
                                <div class="col-auto">
                                    <a href="single-product-fullwidth.html" class="d-block width-75 text-center"><img class="img-fluid" src="../../assets/img/75X75/img4.jpg" alt="Image Description"></a>
                                </div>
                                <div class="col pl-4 d-flex flex-column">
                                    <h5 class="product-item__title mb-0"><a href="single-product-fullwidth.html" class="text-blue font-weight-bold">Yellow Earphones Waterproof with Bluetooth</a></h5>
                                    <div class="prodcut-price mt-auto flex-horizontal-center">
                                        <ins class="font-size-15 text-decoration-none">$110.00</ins>
                                        <del class="font-size-12 text-gray-9 ml-2">$250.00</del>
                                    </div>
                                </div>
                            </li>
                            <li class="product-item product-item__list row no-gutters mb-6 remove-divider">
                                <div class="col-auto">
                                    <a href="single-product-fullwidth.html" class="d-block width-75 text-center"><img class="img-fluid" src="../../assets/img/75X75/img5.jpg" alt="Image Description"></a>
                                </div>
                                <div class="col pl-4 d-flex flex-column">
                                    <h5 class="product-item__title mb-0"><a href="single-product-fullwidth.html" class="text-blue font-weight-bold">Camera C430W 4k Waterproof</a></h5>
                                    <div class="prodcut-price mt-auto flex-horizontal-center">
                                        <ins class="font-size-15 text-decoration-none">$899.00</ins>
                                        <del class="font-size-12 text-gray-9 ml-2">$1200.00</del>
                                    </div>
                                </div>
                            </li>
                            <li class="product-item product-item__list row no-gutters mb-6 remove-divider">
                                <div class="col-auto">
                                    <a href="single-product-fullwidth.html" class="d-block width-75 text-center"><img class="img-fluid" src="../../assets/img/75X75/img6.jpg" alt="Image Description"></a>
                                </div>
                                <div class="col pl-4 d-flex flex-column">
                                    <h5 class="product-item__title mb-0"><a href="single-product-fullwidth.html" class="text-blue font-weight-bold">Smartphone 6S 32GB LTE</a></h5>
                                    <div class="prodcut-price mt-auto flex-horizontal-center">
                                        <ins class="font-size-15 text-decoration-none">$2100.00</ins>
                                        <del class="font-size-12 text-gray-9 ml-2">$3299.00</del>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="col-wd-3 col-lg-4">
                        <div class="border-bottom border-color-1 mb-5">
                            <h3 class="section-title section-title__sm mb-0 pb-2 font-size-18">Top Rated Products</h3>
                        </div>
                        <ul class="list-unstyled products-group">
                            <li class="product-item product-item__list row no-gutters mb-6 remove-divider">
                                <div class="col-auto">
                                    <a href="single-product-fullwidth.html" class="d-block width-75 text-center"><img class="img-fluid" src="../../assets/img/75X75/img7.jpg" alt="Image Description"></a>
                                </div>
                                <div class="col pl-4 d-flex flex-column">
                                    <h5 class="product-item__title mb-0"><a href="single-product-fullwidth.html" class="text-blue font-weight-bold">Smartwatch 2.0 LTE Wifi Waterproof</a></h5>
                                    <div class="text-warning mb-2">
                                        <small class="fas fa-star"></small>
                                        <small class="fas fa-star"></small>
                                        <small class="fas fa-star"></small>
                                        <small class="fas fa-star"></small>
                                        <small class="fas fa-star"></small>
                                    </div>
                                    <div class="prodcut-price mt-auto">
                                        <div class="font-size-15">$725.00</div>
                                    </div>
                                </div>
                            </li>
                            <li class="product-item product-item__list row no-gutters mb-6 remove-divider">
                                <div class="col-auto">
                                    <a href="single-product-fullwidth.html" class="d-block width-75 text-center"><img class="img-fluid" src="../../assets/img/75X75/img8.jpg" alt="Image Description"></a>
                                </div>
                                <div class="col pl-4 d-flex flex-column">
                                    <h5 class="product-item__title mb-0"><a href="single-product-fullwidth.html" class="text-blue font-weight-bold">22Mps Camera 6200U with 500GB SDcard</a></h5>
                                    <div class="text-warning mb-2">
                                        <small class="fas fa-star"></small>
                                        <small class="fas fa-star"></small>
                                        <small class="fas fa-star"></small>
                                        <small class="fas fa-star"></small>
                                        <small class="far fa-star text-muted"></small>
                                    </div>
                                    <div class="prodcut-price mt-auto">
                                        <div class="font-size-15">$2999.00</div>
                                    </div>
                                </div>
                            </li>
                            <li class="product-item product-item__list row no-gutters mb-6 remove-divider">
                                <div class="col-auto">
                                    <a href="single-product-fullwidth.html" class="d-block width-75 text-center"><img class="img-fluid" src="../../assets/img/75X75/img9.jpg" alt="Image Description"></a>
                                </div>
                                <div class="col pl-4 d-flex flex-column">
                                    <h5 class="product-item__title mb-0"><a href="single-product-fullwidth.html" class="text-blue font-weight-bold">Full Color LaserJet Pro M452dn</a></h5>
                                    <div class="text-warning mb-2">
                                        <small class="fas fa-star"></small>
                                        <small class="fas fa-star"></small>
                                        <small class="fas fa-star"></small>
                                        <small class="fas fa-star"></small>
                                        <small class="far fa-star text-muted"></small>
                                    </div>
                                    <div class="prodcut-price mt-auto">
                                        <div class="font-size-15">$439.00</div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="col-wd-3 d-none d-wd-block">
                        <a href="shop.html" class="d-block"><img class="img-fluid" src="../../assets/img/330X360/img1.jpg" alt="Image Description"></a>
                    </div>
                </div>
            </div>
            <!-- End Footer-top-widget -->
            <!-- Footer-newsletter -->
            <div class="bg-primary py-3">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-7 mb-md-3 mb-lg-0">
                            <div class="row align-items-center">
                                <div class="col-auto flex-horizontal-center">
                                    <i class="ec ec-newsletter font-size-40"></i>
                                    <h2 class="font-size-20 mb-0 ml-3">Sign up to Newsletter</h2>
                                </div>
                                <div class="col my-4 my-md-0">
                                    <h5 class="font-size-15 ml-4 mb-0">...and receive <strong>$20 coupon for first shopping.</strong></h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <!-- Subscribe Form -->
                            <form class="js-validate js-form-message">
                                <label class="sr-only" for="subscribeSrEmail">Email address</label>
                                <div class="input-group input-group-pill">
                                    <input type="email" class="form-control border-0 height-40" name="email" id="subscribeSrEmail" placeholder="Email address" aria-label="Email address" aria-describedby="subscribeButton" required
                                    data-msg="Please enter a valid email address.">
                                    <div class="input-group-append">
                                        <button type="submit" class="btn btn-dark btn-sm-wide height-40 py-2" id="subscribeButton">Sign Up</button>
                                    </div>
                                </div>
                            </form>
                            <!-- End Subscribe Form -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Footer-newsletter -->
            <!-- Footer-bottom-widgets -->
            <div class="pt-8 pb-4 bg-gray-13">
                <div class="container mt-1">
                    <div class="row">
                        <div class="col-lg-5">
                            <div class="mb-6">
                                <a href="#" class="d-inline-block">
                                    <svg version="1.1" x="0px" y="0px" width="156px" height="37px" viewBox="0 0 175.748 42.52" enable-background="new 0 0 175.748 42.52">
                                        <ellipse fill-rule="evenodd" clip-rule="evenodd" fill="#FDD700" cx="170.05" cy="36.341" rx="5.32" ry="5.367"></ellipse>
                                        <path fill-rule="evenodd" clip-rule="evenodd" fill="#333E48" d="M30.514,0.71c-0.034,0.003-0.066,0.008-0.056,0.056
                                            C30.263,0.995,29.876,1.181,29.79,1.5c-0.148,0.548,0,1.568,0,2.427v36.459c0.265,0.221,0.506,0.465,0.725,0.734h6.187
                                            c0.2-0.25,0.423-0.477,0.669-0.678V1.387C37.124,1.185,36.9,0.959,36.701,0.71H30.514z M117.517,12.731
                                            c-0.232-0.189-0.439-0.64-0.781-0.734c-0.754-0.209-2.039,0-3.121,0h-3.176V4.435c-0.232-0.189-0.439-0.639-0.781-0.733
                                            c-0.719-0.2-1.969,0-3.01,0h-3.01c-0.238,0.273-0.625,0.431-0.725,0.847c-0.203,0.852,0,2.399,0,3.725
                                            c0,1.393,0.045,2.748-0.055,3.725h-6.41c-0.184,0.237-0.629,0.434-0.725,0.791c-0.178,0.654,0,1.813,0,2.765v2.766
                                            c0.232,0.188,0.439,0.64,0.779,0.733c0.777,0.216,2.109,0,3.234,0c1.154,0,2.291-0.045,3.176,0.057v21.277
                                            c0.232,0.189,0.439,0.639,0.781,0.734c0.719,0.199,1.969,0,3.01,0h3.01c1.008-0.451,0.725-1.889,0.725-3.443
                                            c-0.002-6.164-0.047-12.867,0.055-18.625h6.299c0.182-0.236,0.627-0.434,0.725-0.79c0.176-0.653,0-1.813,0-2.765V12.731z
                                            M135.851,18.262c0.201-0.746,0-2.029,0-3.104v-3.104c-0.287-0.245-0.434-0.637-0.781-0.733c-0.824-0.229-1.992-0.044-2.898,0
                                            c-2.158,0.104-4.506,0.675-5.74,1.411c-0.146-0.362-0.451-0.853-0.893-0.96c-0.693-0.169-1.859,0-2.842,0h-2.842
                                            c-0.258,0.319-0.625,0.42-0.725,0.79c-0.223,0.82,0,2.338,0,3.443c0,8.109-0.002,16.635,0,24.381
                                            c0.232,0.189,0.439,0.639,0.779,0.734c0.707,0.195,1.93,0,2.955,0h3.01c0.918-0.463,0.725-1.352,0.725-2.822V36.21
                                            c-0.002-3.902-0.242-9.117,0-12.473c0.297-4.142,3.836-4.877,8.527-4.686C135.312,18.816,135.757,18.606,135.851,18.262z
                                            M14.796,11.376c-5.472,0.262-9.443,3.178-11.76,7.056c-2.435,4.075-2.789,10.62-0.501,15.126c2.043,4.023,5.91,7.115,10.701,7.9
                                            c6.051,0.992,10.992-1.219,14.324-3.838c-0.687-1.1-1.419-2.664-2.118-3.951c-0.398-0.734-0.652-1.486-1.616-1.467
                                            c-1.942,0.787-4.272,2.262-7.134,2.145c-3.791-0.154-6.659-1.842-7.524-4.91h19.452c0.146-2.793,0.22-5.338-0.279-7.563
                                            C26.961,15.728,22.503,11.008,14.796,11.376z M9,23.284c0.921-2.508,3.033-4.514,6.298-4.627c3.083-0.107,4.994,1.976,5.685,4.627
                                            C17.119,23.38,12.865,23.38,9,23.284z M52.418,11.376c-5.551,0.266-9.395,3.142-11.76,7.056
                                            c-2.476,4.097-2.829,10.493-0.557,15.069c1.997,4.021,5.895,7.156,10.646,7.957c6.068,1.023,11-1.227,14.379-3.781
                                            c-0.479-0.896-0.875-1.742-1.393-2.709c-0.312-0.582-1.024-2.234-1.561-2.539c-0.912-0.52-1.428,0.135-2.23,0.508
                                            c-0.564,0.262-1.223,0.523-1.672,0.676c-4.768,1.621-10.372,0.268-11.537-4.176h19.451c0.668-5.443-0.419-9.953-2.73-13.037
                                            C61.197,13.388,57.774,11.12,52.418,11.376z M46.622,23.343c0.708-2.553,3.161-4.578,6.242-4.686
                                            c3.08-0.107,5.08,1.953,5.686,4.686H46.622z M160.371,15.497c-2.455-2.453-6.143-4.291-10.869-4.064
                                            c-2.268,0.109-4.297,0.65-6.02,1.524c-1.719,0.873-3.092,1.957-4.234,3.217c-2.287,2.519-4.164,6.004-3.902,11.007
                                            c0.248,4.736,1.979,7.813,4.627,10.326c2.568,2.439,6.148,4.254,10.867,4.064c4.457-0.18,7.889-2.115,10.199-4.684
                                            c2.469-2.746,4.012-5.971,3.959-11.063C164.949,21.134,162.732,17.854,160.371,15.497z M149.558,33.952
                                            c-3.246-0.221-5.701-2.615-6.41-5.418c-0.174-0.689-0.26-1.25-0.4-2.166c-0.035-0.234,0.072-0.523-0.045-0.77
                                            c0.682-3.698,2.912-6.257,6.799-6.547c2.543-0.189,4.258,0.735,5.52,1.863c1.322,1.182,2.303,2.715,2.451,4.967
                                            C157.789,30.669,154.185,34.267,149.558,33.952z M88.812,29.55c-1.232,2.363-2.9,4.307-6.13,4.402
                                            c-4.729,0.141-8.038-3.16-8.025-7.563c0.004-1.412,0.324-2.65,0.947-3.726c1.197-2.061,3.507-3.688,6.633-3.612
                                            c3.222,0.079,4.966,1.708,6.632,3.668c1.328-1.059,2.529-1.948,3.9-2.99c0.416-0.315,1.076-0.688,1.227-1.072
                                            c0.404-1.031-0.365-1.502-0.891-2.088c-2.543-2.835-6.66-5.377-11.704-5.137c-6.02,0.288-10.218,3.697-12.484,7.846
                                            c-1.293,2.365-1.951,5.158-1.729,8.408c0.209,3.053,1.191,5.496,2.619,7.508c2.842,4.004,7.385,6.973,13.656,6.377
                                            c5.976-0.568,9.574-3.936,11.816-8.354c-0.141-0.271-0.221-0.604-0.336-0.902C92.929,31.364,90.843,30.485,88.812,29.55z">
                                        </path>
                                    </svg>
                                </a>
                            </div>
                            <div class="mb-4">
                                <div class="row no-gutters">
                                    <div class="col-auto">
                                        <i class="ec ec-support text-primary font-size-56"></i>
                                    </div>
                                    <div class="col pl-3">
                                        <div class="font-size-13 font-weight-light">Got questions? Call us 24/7!</div>
                                        <a href="tel:+80080018588" class="font-size-20 text-gray-90">(800) 8001-8588, </a><a href="tel:+0600874548" class="font-size-20 text-gray-90">(0600) 874 548</a>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-4">
                                <h6 class="mb-1 font-weight-bold">Contact info</h6>
                                <address class="">
                                    17 Princess Road, London, Greater London NW1 8JR, UK
                                </address>
                            </div>
                            <div class="my-4 my-md-4">
                                <ul class="list-inline mb-0 opacity-7">
                                    <li class="list-inline-item mr-0">
                                        <a class="btn font-size-20 btn-icon btn-soft-dark btn-bg-transparent rounded-circle" href="#">
                                            <span class="fab fa-facebook-f btn-icon__inner"></span>
                                        </a>
                                    </li>
                                    <li class="list-inline-item mr-0">
                                        <a class="btn font-size-20 btn-icon btn-soft-dark btn-bg-transparent rounded-circle" href="#">
                                            <span class="fab fa-google btn-icon__inner"></span>
                                        </a>
                                    </li>
                                    <li class="list-inline-item mr-0">
                                        <a class="btn font-size-20 btn-icon btn-soft-dark btn-bg-transparent rounded-circle" href="#">
                                            <span class="fab fa-twitter btn-icon__inner"></span>
                                        </a>
                                    </li>
                                    <li class="list-inline-item mr-0">
                                        <a class="btn font-size-20 btn-icon btn-soft-dark btn-bg-transparent rounded-circle" href="#">
                                            <span class="fab fa-github btn-icon__inner"></span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="row">
                                <div class="col-12 col-md mb-4 mb-md-0">
                                    <h6 class="mb-3 font-weight-bold">Find it Fast</h6>
                                    <!-- List Group -->
                                    <ul class="list-group list-group-flush list-group-borderless mb-0 list-group-transparent">
                                        <li><a class="list-group-item list-group-item-action" href="product-categories-5-column-sidebar.html">Laptops & Computers</a></li>
                                        <li><a class="list-group-item list-group-item-action" href="product-categories-5-column-sidebar.html">Cameras & Photography</a></li>
                                        <li><a class="list-group-item list-group-item-action" href="product-categories-5-column-sidebar.html">Smart Phones & Tablets</a></li>
                                        <li><a class="list-group-item list-group-item-action" href="product-categories-5-column-sidebar.html">Video Games & Consoles</a></li>
                                        <li><a class="list-group-item list-group-item-action" href="product-categories-5-column-sidebar.html">TV & Audio</a></li>
                                        <li><a class="list-group-item list-group-item-action" href="product-categories-5-column-sidebar.html">Gadgets</a></li>
                                        <li><a class="list-group-item list-group-item-action" href="product-categories-5-column-sidebar.html">Car Electronic & GPS</a></li>
                                    </ul>
                                    <!-- End List Group -->
                                </div>

                                <div class="col-12 col-md mb-4 mb-md-0">
                                    <!-- List Group -->
                                    <ul class="list-group list-group-flush list-group-borderless mb-0 list-group-transparent mt-md-6">
                                        <li><a class="list-group-item list-group-item-action" href="product-categories-5-column-sidebar.html">Printers & Ink</a></li>
                                        <li><a class="list-group-item list-group-item-action" href="product-categories-5-column-sidebar.html">Software</a></li>
                                        <li><a class="list-group-item list-group-item-action" href="product-categories-5-column-sidebar.html">Office Supplies</a></li>
                                        <li><a class="list-group-item list-group-item-action" href="product-categories-5-column-sidebar.html">Computer Components</a></li>
                                        <li><a class="list-group-item list-group-item-action" href="product-categories-5-column-sidebar.html">Accesories</a></li>
                                    </ul>
                                    <!-- End List Group -->
                                </div>

                                <div class="col-12 col-md mb-4 mb-md-0">
                                    <h6 class="mb-3 font-weight-bold">Customer Care</h6>
                                    <!-- List Group -->
                                    <ul class="list-group list-group-flush list-group-borderless mb-0 list-group-transparent">
                                        <li><a class="list-group-item list-group-item-action" href="my-account.html">My Account</a></li>
                                        <li><a class="list-group-item list-group-item-action" href="track-your-order.html">Order Tracking</a></li>
                                        <li><a class="list-group-item list-group-item-action" href="wishlist.html">Wish List</a></li>
                                        <li><a class="list-group-item list-group-item-action" href="https://transvelo.github.io/electro-html/2.0/html/home/terms-and-conditions.html">Customer Service</a></li>
                                        <li><a class="list-group-item list-group-item-action" href="https://transvelo.github.io/electro-html/2.0/html/home/terms-and-conditions.html">Returns / Exchange</a></li>
                                        <li><a class="list-group-item list-group-item-action" href="https://transvelo.github.io/electro-html/2.0/html/home/faq.html">FAQs</a></li>
                                        <li><a class="list-group-item list-group-item-action" href="https://transvelo.github.io/electro-html/2.0/html/home/terms-and-conditions.html">Product Support</a></li>
                                    </ul>
                                    <!-- End List Group -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Footer-bottom-widgets -->
            <!-- Footer-copy-right -->
            <div class="bg-gray-14 py-2">
                <div class="container">
                    <div class="flex-center-between d-block d-md-flex">
                        <div class="mb-3 mb-md-0">© <a href="#" class="font-weight-bold text-gray-90">Electro</a> - All rights Reserved</div>
                        <div class="text-md-right">
                            <span class="d-inline-block bg-white border rounded p-1">
                                <img class="max-width-5" src="../../assets/img/100X60/img1.jpg" alt="Image Description">
                            </span>
                            <span class="d-inline-block bg-white border rounded p-1">
                                <img class="max-width-5" src="../../assets/img/100X60/img2.jpg" alt="Image Description">
                            </span>
                            <span class="d-inline-block bg-white border rounded p-1">
                                <img class="max-width-5" src="../../assets/img/100X60/img3.jpg" alt="Image Description">
                            </span>
                            <span class="d-inline-block bg-white border rounded p-1">
                                <img class="max-width-5" src="../../assets/img/100X60/img4.jpg" alt="Image Description">
                            </span>
                            <span class="d-inline-block bg-white border rounded p-1">
                                <img class="max-width-5" src="../../assets/img/100X60/img5.jpg" alt="Image Description">
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Footer-copy-right -->
        </footer>
        <!-- ========== END FOOTER ========== -->

        <!-- ========== SECONDARY CONTENTS ========== -->
        <!-- Account Sidebar Navigation -->
        <aside id="sidebarContent" class="u-sidebar u-sidebar__lg" aria-labelledby="sidebarNavToggler">
            <div class="u-sidebar__scroller">
                <div class="u-sidebar__container">
                    <div class="js-scrollbar u-header-sidebar__footer-offset pb-3">
                        <!-- Toggle Button -->
                        <div class="d-flex align-items-center pt-4 px-7">
                            <button type="button" class="close ml-auto"
                                aria-controls="sidebarContent"
                                aria-haspopup="true"
                                aria-expanded="false"
                                data-unfold-event="click"
                                data-unfold-hide-on-scroll="false"
                                data-unfold-target="#sidebarContent"
                                data-unfold-type="css-animation"
                                data-unfold-animation-in="fadeInRight"
                                data-unfold-animation-out="fadeOutRight"
                                data-unfold-duration="500">
                                <i class="ec ec-close-remove"></i>
                            </button>
                        </div>
                        <!-- End Toggle Button -->

                        <!-- Content -->
                        <div class="js-scrollbar u-sidebar__body">
                            <div class="u-sidebar__content u-header-sidebar__content">
                                <form class="js-validate">
                                    <!-- Login -->
                                    <div id="login" data-target-group="idForm">
                                        <!-- Title -->
                                        <header class="text-center mb-7">
                                        <h2 class="h4 mb-0">Welcome Back!</h2>
                                        <p>Login to manage your account.</p>
                                        </header>
                                        <!-- End Title -->

                                        <!-- Form Group -->
                                        <div class="form-group">
                                            <div class="js-form-message js-focus-state">
                                                <label class="sr-only" for="signinEmail">Email</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text" id="signinEmailLabel">
                                                            <span class="fas fa-user"></span>
                                                        </span>
                                                    </div>
                                                    <input type="email" class="form-control" name="email" id="signinEmail" placeholder="Email" aria-label="Email" aria-describedby="signinEmailLabel" required
                                                    data-msg="Please enter a valid email address."
                                                    data-error-class="u-has-error"
                                                    data-success-class="u-has-success">
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Form Group -->

                                        <!-- Form Group -->
                                        <div class="form-group">
                                            <div class="js-form-message js-focus-state">
                                              <label class="sr-only" for="signinPassword">Password</label>
                                              <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="signinPasswordLabel">
                                                        <span class="fas fa-lock"></span>
                                                    </span>
                                                </div>
                                                <input type="password" class="form-control" name="password" id="signinPassword" placeholder="Password" aria-label="Password" aria-describedby="signinPasswordLabel" required
                                                   data-msg="Your password is invalid. Please try again."
                                                   data-error-class="u-has-error"
                                                   data-success-class="u-has-success">
                                              </div>
                                            </div>
                                        </div>
                                        <!-- End Form Group -->

                                        <div class="d-flex justify-content-end mb-4">
                                            <a class="js-animation-link small link-muted" href="javascript:;"
                                               data-target="#forgotPassword"
                                               data-link-group="idForm"
                                               data-animation-in="slideInUp">Forgot Password?</a>
                                        </div>

                                        <div class="mb-2">
                                            <button type="submit" class="btn btn-block btn-sm btn-primary transition-3d-hover">Login</button>
                                        </div>

                                        <div class="text-center mb-4">
                                            <span class="small text-muted">Do not have an account?</span>
                                            <a class="js-animation-link small text-dark" href="javascript:;"
                                               data-target="#signup"
                                               data-link-group="idForm"
                                               data-animation-in="slideInUp">Signup
                                            </a>
                                        </div>

                                        <div class="text-center">
                                            <span class="u-divider u-divider--xs u-divider--text mb-4">OR</span>
                                        </div>

                                        <!-- Login Buttons -->
                                        <div class="d-flex">
                                            <a class="btn btn-block btn-sm btn-soft-facebook transition-3d-hover mr-1" href="#">
                                              <span class="fab fa-facebook-square mr-1"></span>
                                              Facebook
                                            </a>
                                            <a class="btn btn-block btn-sm btn-soft-google transition-3d-hover ml-1 mt-0" href="#">
                                              <span class="fab fa-google mr-1"></span>
                                              Google
                                            </a>
                                        </div>
                                        <!-- End Login Buttons -->
                                    </div>

                                    <!-- Signup -->
                                    <div id="signup" style="display: none; opacity: 0;" data-target-group="idForm">
                                        <!-- Title -->
                                        <header class="text-center mb-7">
                                        <h2 class="h4 mb-0">Welcome to Electro.</h2>
                                        <p>Fill out the form to get started.</p>
                                        </header>
                                        <!-- End Title -->

                                        <!-- Form Group -->
                                        <div class="form-group">
                                            <div class="js-form-message js-focus-state">
                                                <label class="sr-only" for="signupEmail">Email</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text" id="signupEmailLabel">
                                                            <span class="fas fa-user"></span>
                                                        </span>
                                                    </div>
                                                    <input type="email" class="form-control" name="email" id="signupEmail" placeholder="Email" aria-label="Email" aria-describedby="signupEmailLabel" required
                                                    data-msg="Please enter a valid email address."
                                                    data-error-class="u-has-error"
                                                    data-success-class="u-has-success">
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Input -->

                                        <!-- Form Group -->
                                        <div class="form-group">
                                            <div class="js-form-message js-focus-state">
                                                <label class="sr-only" for="signupPassword">Password</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text" id="signupPasswordLabel">
                                                            <span class="fas fa-lock"></span>
                                                        </span>
                                                    </div>
                                                    <input type="password" class="form-control" name="password" id="signupPassword" placeholder="Password" aria-label="Password" aria-describedby="signupPasswordLabel" required
                                                    data-msg="Your password is invalid. Please try again."
                                                    data-error-class="u-has-error"
                                                    data-success-class="u-has-success">
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Input -->

                                        <!-- Form Group -->
                                        <div class="form-group">
                                            <div class="js-form-message js-focus-state">
                                            <label class="sr-only" for="signupConfirmPassword">Confirm Password</label>
                                                <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="signupConfirmPasswordLabel">
                                                        <span class="fas fa-key"></span>
                                                    </span>
                                                </div>
                                                <input type="password" class="form-control" name="confirmPassword" id="signupConfirmPassword" placeholder="Confirm Password" aria-label="Confirm Password" aria-describedby="signupConfirmPasswordLabel" required
                                                data-msg="Password does not match the confirm password."
                                                data-error-class="u-has-error"
                                                data-success-class="u-has-success">
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Input -->

                                        <div class="mb-2">
                                            <button type="submit" class="btn btn-block btn-sm btn-primary transition-3d-hover">Get Started</button>
                                        </div>

                                        <div class="text-center mb-4">
                                            <span class="small text-muted">Already have an account?</span>
                                            <a class="js-animation-link small text-dark" href="javascript:;"
                                                data-target="#login"
                                                data-link-group="idForm"
                                                data-animation-in="slideInUp">Login
                                            </a>
                                        </div>

                                        <div class="text-center">
                                            <span class="u-divider u-divider--xs u-divider--text mb-4">OR</span>
                                        </div>

                                        <!-- Login Buttons -->
                                        <div class="d-flex">
                                            <a class="btn btn-block btn-sm btn-soft-facebook transition-3d-hover mr-1" href="#">
                                                <span class="fab fa-facebook-square mr-1"></span>
                                                Facebook
                                            </a>
                                            <a class="btn btn-block btn-sm btn-soft-google transition-3d-hover ml-1 mt-0" href="#">
                                                <span class="fab fa-google mr-1"></span>
                                                Google
                                            </a>
                                        </div>
                                        <!-- End Login Buttons -->
                                    </div>
                                    <!-- End Signup -->

                                    <!-- Forgot Password -->
                                    <div id="forgotPassword" style="display: none; opacity: 0;" data-target-group="idForm">
                                        <!-- Title -->
                                        <header class="text-center mb-7">
                                            <h2 class="h4 mb-0">Recover Password.</h2>
                                            <p>Enter your email address and an email with instructions will be sent to you.</p>
                                        </header>
                                        <!-- End Title -->

                                        <!-- Form Group -->
                                        <div class="form-group">
                                            <div class="js-form-message js-focus-state">
                                                <label class="sr-only" for="recoverEmail">Your email</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text" id="recoverEmailLabel">
                                                            <span class="fas fa-user"></span>
                                                        </span>
                                                    </div>
                                                    <input type="email" class="form-control" name="email" id="recoverEmail" placeholder="Your email" aria-label="Your email" aria-describedby="recoverEmailLabel" required
                                                    data-msg="Please enter a valid email address."
                                                    data-error-class="u-has-error"
                                                    data-success-class="u-has-success">
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Form Group -->

                                        <div class="mb-2">
                                            <button type="submit" class="btn btn-block btn-sm btn-primary transition-3d-hover">Recover Password</button>
                                        </div>

                                        <div class="text-center mb-4">
                                            <span class="small text-muted">Remember your password?</span>
                                            <a class="js-animation-link small" href="javascript:;"
                                               data-target="#login"
                                               data-link-group="idForm"
                                               data-animation-in="slideInUp">Login
                                            </a>
                                        </div>
                                    </div>
                                    <!-- End Forgot Password -->
                                </form>
                            </div>
                        </div>
                        <!-- End Content -->
                    </div>
                </div>
            </div>
        </aside>
        <!-- End Account Sidebar Navigation -->
        <!-- ========== END SECONDARY CONTENTS ========== -->
        <!-- Sidebar Navigation -->
        <aside id="sidebarContent1" class="u-sidebar u-sidebar--left" aria-labelledby="sidebarNavToggler1">
            <div class="u-sidebar__scroller">
                <div class="u-sidebar__container">
                    <div class="">
                        <!-- Toggle Button -->
                        <div class="d-flex align-items-center pt-3 px-4 bg-white">
                            <button type="button" class="close ml-auto"
                                aria-controls="sidebarContent1"
                                aria-haspopup="true"
                                aria-expanded="false"
                                data-unfold-event="click"
                                data-unfold-hide-on-scroll="false"
                                data-unfold-target="#sidebarContent1"
                                data-unfold-type="css-animation"
                                data-unfold-animation-in="fadeInLeft"
                                data-unfold-animation-out="fadeOutLeft"
                                data-unfold-duration="500">
                                <span aria-hidden="true"><i class="ec ec-close-remove"></i></span>
                            </button>
                        </div>
                        <!-- End Toggle Button -->

                        <!-- Content -->
                        <div class="js-scrollbar u-sidebar__body">
                            <div class="u-sidebar__content u-header-sidebar__content px-4">
                                <div class="mb-6 border border-width-2 border-color-3 borders-radius-6">
                                    <!-- List -->
                                    <ul id="sidebarNav" class="list-unstyled mb-0 sidebar-navbar view-all">
                                        <li><div class="dropdown-title">Browse Categories</div></li>
                                        <li>
                                            <a class="dropdown-toggle dropdown-toggle-collapse" href="javascript:;" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="sidebarNav1Collapse" data-target="#sidebarNav1Collapse">
                                                Accessories<span class="text-gray-25 font-size-12 font-weight-normal"> (56)</span>
                                            </a>

                                            <div id="sidebarNav1Collapse" class="collapse" data-parent="#sidebarNav">
                                                <ul id="sidebarNav1" class="list-unstyled dropdown-list">
                                                    <!-- Menu List -->
                                                    <li><a class="dropdown-item" href="#">Accessories<span class="text-gray-25 font-size-12 font-weight-normal"> (56)</span></a></li>
                                                    <li><a class="dropdown-item" href="#">Cameras & Photography<span class="text-gray-25 font-size-12 font-weight-normal"> (11)</span></a></li>
                                                    <li><a class="dropdown-item" href="#">Computer Components<span class="text-gray-25 font-size-12 font-weight-normal"> (22)</span></a></li>
                                                    <li><a class="dropdown-item" href="#">Gadgets<span class="text-gray-25 font-size-12 font-weight-normal"> (5)</span></a></li>
                                                    <li><a class="dropdown-item" href="#">Home Entertainment<span class="text-gray-25 font-size-12 font-weight-normal"> (7)</span></a></li>
                                                    <li><a class="dropdown-item" href="#">Laptops & Computers<span class="text-gray-25 font-size-12 font-weight-normal"> (42)</span></a></li>
                                                    <li><a class="dropdown-item" href="#">Printers & Ink<span class="text-gray-25 font-size-12 font-weight-normal"> (63)</span></a></li>
                                                    <li><a class="dropdown-item" href="#">Smart Phones & Tablets<span class="text-gray-25 font-size-12 font-weight-normal"> (11)</span></a></li>
                                                    <li><a class="dropdown-item" href="#">TV & Audio<span class="text-gray-25 font-size-12 font-weight-normal"> (66)</span></a></li>
                                                    <li><a class="dropdown-item" href="#">Video Games & Consoles<span class="text-gray-25 font-size-12 font-weight-normal"> (31)</span></a></li>
                                                    <!-- End Menu List -->
                                                </ul>
                                            </div>
                                        </li>
                                        <li>
                                            <a class="dropdown-toggle dropdown-toggle-collapse" href="javascript:;" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="sidebarNav2Collapse" data-target="#sidebarNav2Collapse">
                                                Cameras & Photography<span class="text-gray-25 font-size-12 font-weight-normal"> (56)</span>
                                            </a>

                                            <div id="sidebarNav2Collapse" class="collapse" data-parent="#sidebarNav">
                                                <ul id="sidebarNav2" class="list-unstyled dropdown-list">
                                                    <!-- Menu List -->
                                                    <li><a class="dropdown-item" href="#">Cameras<span class="text-gray-25 font-size-12 font-weight-normal"> (56)</span></a></li>
                                                    <!-- End Menu List -->
                                                </ul>
                                            </div>
                                        </li>
                                        <li>
                                            <a class="dropdown-toggle dropdown-toggle-collapse" href="javascript:;" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="sidebarNav3Collapse" data-target="#sidebarNav3Collapse">
                                                Computer Components<span class="text-gray-25 font-size-12 font-weight-normal"> (56)</span>
                                            </a>

                                            <div id="sidebarNav3Collapse" class="collapse" data-parent="#sidebarNav">
                                                <ul id="sidebarNav3" class="list-unstyled dropdown-list">
                                                    <!-- Menu List -->
                                                    <li><a class="dropdown-item" href="#">Computer Cases<span class="text-gray-25 font-size-12 font-weight-normal"> (56)</span></a></li>
                                                    <!-- End Menu List -->
                                                </ul>
                                            </div>
                                        </li>
                                        <li>
                                            <a class="dropdown-toggle dropdown-toggle-collapse" href="javascript:;" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="sidebarNav4Collapse" data-target="#sidebarNav4Collapse">
                                                Gadgets<span class="text-gray-25 font-size-12 font-weight-normal"> (56)</span>
                                            </a>

                                            <div id="sidebarNav4Collapse" class="collapse" data-parent="#sidebarNav">
                                                <ul id="sidebarNav4" class="list-unstyled dropdown-list">
                                                    <!-- Menu List -->
                                                    <li><a class="dropdown-item" href="#">Smartwatches<span class="text-gray-25 font-size-12 font-weight-normal"> (56)</span></a></li>
                                                    <li><a class="dropdown-item" href="#">Wearables<span class="text-gray-25 font-size-12 font-weight-normal"> (56)</span></a></li>
                                                    <!-- End Menu List -->
                                                </ul>
                                            </div>
                                        </li>
                                        <li>
                                            <a class="dropdown-toggle dropdown-toggle-collapse" href="javascript:;" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="sidebarNav5Collapse" data-target="#sidebarNav5Collapse">
                                                Home Entertainment<span class="text-gray-25 font-size-12 font-weight-normal"> (56)</span>
                                            </a>

                                            <div id="sidebarNav5Collapse" class="collapse" data-parent="#sidebarNav">
                                                <ul id="sidebarNav5" class="list-unstyled dropdown-list">
                                                    <!-- Menu List -->
                                                    <li><a class="dropdown-item" href="#">Tvs<span class="text-gray-25 font-size-12 font-weight-normal"> (56)</span></a></li>
                                                    <!-- End Menu List -->
                                                </ul>
                                            </div>
                                        </li>
                                        <li>
                                            <a class="dropdown-toggle dropdown-toggle-collapse" href="javascript:;" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="sidebarNav6Collapse" data-target="#sidebarNav6Collapse">
                                                Laptops & Computers<span class="text-gray-25 font-size-12 font-weight-normal"> (56)</span>
                                            </a>

                                            <div id="sidebarNav6Collapse" class="collapse" data-parent="#sidebarNav">
                                                <ul id="sidebarNav6" class="list-unstyled dropdown-list">
                                                    <!-- Menu List -->
                                                    <li><a class="dropdown-item" href="#">Accessories<span class="text-gray-25 font-size-12 font-weight-normal"> (56)</span></a></li>
                                                    <li><a class="dropdown-item" href="#">Cameras & Photography<span class="text-gray-25 font-size-12 font-weight-normal"> (11)</span></a></li>
                                                    <li><a class="dropdown-item" href="#">Computer Components<span class="text-gray-25 font-size-12 font-weight-normal"> (22)</span></a></li>
                                                    <li><a class="dropdown-item" href="#">Gadgets<span class="text-gray-25 font-size-12 font-weight-normal"> (5)</span></a></li>
                                                    <li><a class="dropdown-item" href="#">Home Entertainment<span class="text-gray-25 font-size-12 font-weight-normal"> (7)</span></a></li>
                                                    <li><a class="dropdown-item" href="#">Laptops & Computers<span class="text-gray-25 font-size-12 font-weight-normal"> (42)</span></a></li>
                                                    <li><a class="dropdown-item" href="#">Printers & Ink<span class="text-gray-25 font-size-12 font-weight-normal"> (63)</span></a></li>
                                                    <li><a class="dropdown-item" href="#">Smart Phones & Tablets<span class="text-gray-25 font-size-12 font-weight-normal"> (11)</span></a></li>
                                                    <li><a class="dropdown-item" href="#">TV & Audio<span class="text-gray-25 font-size-12 font-weight-normal"> (66)</span></a></li>
                                                    <li><a class="dropdown-item" href="#">Video Games & Consoles<span class="text-gray-25 font-size-12 font-weight-normal"> (31)</span></a></li>
                                                    <!-- End Menu List -->
                                                </ul>
                                            </div>
                                        </li>
                                        <li>
                                            <a class="dropdown-toggle dropdown-toggle-collapse" href="javascript:;" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="sidebarNav7Collapse" data-target="#sidebarNav7Collapse">
                                                Printers & Ink<span class="text-gray-25 font-size-12 font-weight-normal"> (56)</span>
                                            </a>

                                            <div id="sidebarNav7Collapse" class="collapse" data-parent="#sidebarNav">
                                                <ul id="sidebarNav7" class="list-unstyled dropdown-list">
                                                    <!-- Menu List -->
                                                    <li><a class="dropdown-item" href="#">Printers<span class="text-gray-25 font-size-12 font-weight-normal"> (56)</span></a></li>
                                                    <!-- End Menu List -->
                                                </ul>
                                            </div>
                                        </li>
                                        <li>
                                            <a class="dropdown-toggle dropdown-toggle-collapse" href="javascript:;" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="sidebarNav8Collapse" data-target="#sidebarNav8Collapse">
                                                Smart Phones & Tablets<span class="text-gray-25 font-size-12 font-weight-normal"> (56)</span>
                                            </a>

                                            <div id="sidebarNav8Collapse" class="collapse" data-parent="#sidebarNav">
                                                <ul id="sidebarNav8" class="list-unstyled dropdown-list">
                                                    <!-- Menu List -->
                                                    <li><a class="dropdown-item" href="#">Smartphones<span class="text-gray-25 font-size-12 font-weight-normal"> (56)</span></a></li>
                                                    <li><a class="dropdown-item" href="#">Tablets<span class="text-gray-25 font-size-12 font-weight-normal"> (56)</span></a></li>
                                                    <!-- End Menu List -->
                                                </ul>
                                            </div>
                                        </li>
                                        <li>
                                            <a class="dropdown-toggle dropdown-toggle-collapse" href="javascript:;" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="sidebarNav9Collapse" data-target="#sidebarNav9Collapse">
                                                TV & Audio<span class="text-gray-25 font-size-12 font-weight-normal"> (56)</span>
                                            </a>

                                            <div id="sidebarNav9Collapse" class="collapse" data-parent="#sidebarNav">
                                                <ul id="sidebarNav9" class="list-unstyled dropdown-list">
                                                    <!-- Menu List -->
                                                    <li><a class="dropdown-item" href="#">Audio Speakers<span class="text-gray-25 font-size-12 font-weight-normal"> (56)</span></a></li>
                                                    <!-- End Menu List -->
                                                </ul>
                                            </div>
                                        </li>
                                        <li>
                                            <a class="dropdown-toggle dropdown-toggle-collapse" href="javascript:;" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="sidebarNav10Collapse" data-target="#sidebarNav10Collapse">
                                                Video Games & Consoles<span class="text-gray-25 font-size-12 font-weight-normal"> (56)</span>
                                            </a>

                                            <div id="sidebarNav10Collapse" class="collapse" data-parent="#sidebarNav">
                                                <ul id="sidebarNav10" class="list-unstyled dropdown-list">
                                                    <!-- Menu List -->
                                                    <li><a class="dropdown-item" href="#">Game Consoles<span class="text-gray-25 font-size-12 font-weight-normal"> (56)</span></a></li>
                                                    <!-- End Menu List -->
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                                    <!-- End List -->
                                </div>


                                <form action="{{route('shop_filter')}}" method="post">
                                    @csrf
                                    <div class="mb-6">
                                        <div class="border-bottom border-color-1 mb-5">
                                            <h3 class="section-title section-title__sm mb-0 pb-2 font-size-18">Filters</h3>
                                        </div>
                                        <div class="border-bottom pb-4 mb-4">
                                            <h4 class="font-size-14 mb-3 font-weight-bold">Brands</h4>
                                               <!-- Checkboxes -->
                                           
                                        @if(count($brands)>0)
                                            @if(!empty($_GET['brand']))
                                               @php
                                               $filter_brand= explode(',',$_GET['brand'])
                                               @endphp
                                            @endif
                                           

                                                    @foreach($brands as $brand)
                                                    <div class="form-group d-flex align-items-center justify-content-between mb-2 pb-1">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="{{$brand->brandname}}" @if(!empty($filter_brand) && in_array($brand->brandname,$filter_brand)) checked @endif  name="brand[]" value="{{$brand->brandname}}" onchange="this.form.submit();">
                                                            <label class="custom-control-label" for="{{$brand->brandname}}">{{$brand->brandname}}
                                                                <span class="text-gray-25 font-size-12 font-weight-normal"> {{count($brand->products)}}</span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    @endforeach
                                        @endif
                                            <!-- End Checkboxes -->
                                         
                                          
                                          
                                        
            
                                            <!-- View More - Collapse -->
                                            <div class="collapse" id="collapseBrand">
                                                <div class="form-group d-flex align-items-center justify-content-between mb-2 pb-1">
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="brandGucci">
                                                        <label class="custom-control-label" for="brandGucci">Gucci
                                                            <span class="text-gray-25 font-size-12 font-weight-normal"> (56)</span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="form-group d-flex align-items-center justify-content-between mb-2 pb-1">
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="brandMango">
                                                        <label class="custom-control-label" for="brandMango">Mango
                                                            <span class="text-gray-25 font-size-12 font-weight-normal"> (56)</span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End View More - Collapse -->
            
                                            <!-- Link -->
                                            <a class="link link-collapse small font-size-13 text-gray-27 d-inline-flex mt-2" data-toggle="collapse" href="#collapseBrand" role="button" aria-expanded="false" aria-controls="collapseBrand">
                                                <span class="link__icon text-gray-27 bg-white">
                                                    <span class="link__icon-inner">+</span>
                                                </span>
                                                <span class="link-collapse__default">Show more</span>
                                                <span class="link-collapse__active">Show less</span>
                                            </a>
                                            <!-- End Link -->
                                        </div>
            
            
            
            
            
            
                                        <div class="border-bottom pb-4 mb-4">
                                            <h4 class="font-size-14 mb-3 font-weight-bold">Related Categories</h4>
                                        @if(count($categories)>0)
                                            @if(!empty($_GET['category']))
                                              @php
                                               $filter_category = explode(',',$_GET['category'])
                                              @endphp
                                            @endif
                                            
                                            @foreach($categories as $category)
                                            <!-- Checkboxes -->
                                            <div class="form-group d-flex align-items-center justify-content-between mb-2 pb-1">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" @if(!empty($filter_category) && in_array($category->categoryname,$filter_category)) checked @endif class="custom-control-input" id="{{$category->categoryname}}" name="category[]" onchange="this.form.submit();" value="{{$category->categoryname}}">
                                                    <label class="custom-control-label" for="{{$category->categoryname}}">{{$category->categoryname}} <span class="text-gray-25 font-size-12 font-weight-normal"> {{count($category->products)}}</span></label>
                                                </div>
                                            </div>
                                            @endforeach
                                            @endif
                                           
                                            <!-- End Checkboxes -->
            
 
                                            <div class="range-slider">
                                                <h4 class="font-size-14 mb-3 font-weight-bold">Price</h4>
                                                <!-- Range Slider -->
                                                <input class="js-range-slider" type="text" id="price_range" name="price_range" value="@if(!empty($_GET['price'])) {{$_GET['price']}} @endif"
                                                data-extra-classes="u-range-slider u-range-slider-indicator u-range-slider-grid"
                                                data-type="double"
                                                data-grid="false"
                                                data-hide-from-to="true"
                                                data-prefix="$"
                                                data-min="{{Helper::minPrice()}}"
                                                data-max="{{Helper::maxPrice()}}"
                                                data-value-min="{{Helper::minPrice()}}"
                                                data-value-max="{{Helper::maxPrice()}}"
                                                data-result-min="#{{Helper::minPrice()}}"
                                                data-result-max="#{{Helper::maxPrice()}}">
                                                <!-- End Range Slider -->
                                                <div class="mt-1 text-gray-111 d-flex mb-4">
                                                    <span class="mr-0dot5">Price: </span>
                                                    <span>{{Helper::minPrice()}} </span>
                                                    <span id="{{Helper::minPrice()}}" class=""></span>
                                                    <span class="mx-0dot5"> — </span>
                                                    <span>{{Helper::maxPrice()}}</span>
                                                    <span id="{{Helper::maxPrice()}}" class=""></span>
                                                </div>
                                                <button type="submit" class="btn px-4 btn-primary-dark-w py-2 rounded-lg">Filter</button>
                                            </div>
        
        
        
                                      
                                    </div>
                                </form>
        
                                <div class="mb-6">
                                    <div class="border-bottom border-color-1 mb-5">
                                        <h3 class="section-title section-title__sm mb-0 pb-2 font-size-18">Latest Products</h3>
                                    </div>
                                    <ul class="list-unstyled">
                                        <li class="mb-4">
                                            <div class="row">
                                                <div class="col-auto">
                                                    <a href="single-product-fullwidth.html" class="d-block width-75">
                                                        <img class="img-fluid" src="../../assets/img/300X300/img1.jpg" alt="Image Description">
                                                    </a>
                                                </div>
                                                <div class="col">
                                                    <h3 class="text-lh-1dot2 font-size-14 mb-0"><a href="single-product-fullwidth.html">Notebook Black Spire V Nitro VN7-591G</a></h3>
                                                    <div class="text-warning text-ls-n2 font-size-16 mb-1" style="width: 80px;">
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                        <small class="far fa-star text-muted"></small>
                                                    </div>
                                                    <div class="font-weight-bold">
                                                        <del class="font-size-11 text-gray-9 d-block">$2299.00</del>
                                                        <ins class="font-size-15 text-red text-decoration-none d-block">$1999.00</ins>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="mb-4">
                                            <div class="row">
                                                <div class="col-auto">
                                                    <a href="single-product-fullwidth.html" class="d-block width-75">
                                                        <img class="img-fluid" src="../../assets/img/300X300/img3.jpg" alt="Image Description">
                                                    </a>
                                                </div>
                                                <div class="col">
                                                    <h3 class="text-lh-1dot2 font-size-14 mb-0"><a href="single-product-fullwidth.html">Notebook Black Spire V Nitro VN7-591G</a></h3>
                                                    <div class="text-warning text-ls-n2 font-size-16 mb-1" style="width: 80px;">
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                        <small class="far fa-star text-muted"></small>
                                                    </div>
                                                    <div class="font-weight-bold font-size-15">
                                                        $499.00
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="mb-4">
                                            <div class="row">
                                                <div class="col-auto">
                                                    <a href="single-product-fullwidth.html" class="d-block width-75">
                                                        <img class="img-fluid" src="../../assets/img/300X300/img5.jpg" alt="Image Description">
                                                    </a>
                                                </div>
                                                <div class="col">
                                                    <h3 class="text-lh-1dot2 font-size-14 mb-0"><a href="single-product-fullwidth.html">Tablet Thin EliteBook Revolve 810 G6</a></h3>
                                                    <div class="text-warning text-ls-n2 font-size-16 mb-1" style="width: 80px;">
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                        <small class="far fa-star text-muted"></small>
                                                    </div>
                                                    <div class="font-weight-bold font-size-15">
                                                        $100.00
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="mb-4">
                                            <div class="row">
                                                <div class="col-auto">
                                                    <a href="single-product-fullwidth.html" class="d-block width-75">
                                                        <img class="img-fluid" src="../../assets/img/300X300/img6.jpg" alt="Image Description">
                                                    </a>
                                                </div>
                                                <div class="col">
                                                    <h3 class="text-lh-1dot2 font-size-14 mb-0"><a href="single-product-fullwidth.html">Notebook Purple G952VX-T7008T</a></h3>
                                                    <div class="text-warning text-ls-n2 font-size-16 mb-1" style="width: 80px;">
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                        <small class="far fa-star text-muted"></small>
                                                    </div>
                                                    <div class="font-weight-bold">
                                                        <del class="font-size-11 text-gray-9 d-block">$2299.00</del>
                                                        <ins class="font-size-15 text-red text-decoration-none d-block">$1999.00</ins>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="mb-4">
                                            <div class="row">
                                                <div class="col-auto">
                                                    <a href="single-product-fullwidth.html" class="d-block width-75">
                                                        <img class="img-fluid" src="../../assets/img/300X300/img10.png" alt="Image Description">
                                                    </a>
                                                </div>
                                                <div class="col">
                                                    <h3 class="text-lh-1dot2 font-size-14 mb-0"><a href="single-product-fullwidth.html">Laptop Yoga 21 80JH0035GE W8.1</a></h3>
                                                    <div class="text-warning text-ls-n2 font-size-16 mb-1" style="width: 80px;">
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                        <small class="far fa-star text-muted"></small>
                                                    </div>
                                                    <div class="font-weight-bold font-size-15">
                                                        $1200.00
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- End Content -->
                    </div>
                </div>
            </div>
        </aside>
        <!-- End Sidebar Navigation -->

        <!-- Go to Top -->
        <a class="js-go-to u-go-to" href="#"
            data-position='{"bottom": 15, "right": 15 }'
            data-type="fixed"
            data-offset-top="400"
            data-compensation="#header"
            data-show-effect="slideInUp"
            data-hide-effect="slideOutDown">
            <span class="fas fa-arrow-up u-go-to__inner"></span>
        </a>
        <!-- End Go to Top -->

        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.2/bootstrap3-typeahead.min.js" integrity="sha512-HWlJyU4ut5HkEj0QsK/IxBCY55n5ZpskyjVlAoV9Z7XQwwkqXoYdCIC93/htL3Gu5H3R4an/S0h2NXfbZk3g7w==" crossorigin="anonymous"></script>
        

        <script type="text/javascript">
            var path="{{ route('autocomplete') }}";

            $('input.typeahead').typeahead({
                source:function(terms,process){
                    return $.get(path,{terms:terms},function(data){
                        return process(data);
                    });
                }
            });
        </script>
        <!-- JS Global Compulsory -->
        <script src="../../assets/vendor/jquery/dist/jquery.min.js"></script>
        <script src="../../assets/vendor/jquery-migrate/dist/jquery-migrate.min.js"></script>
        <script src="../../assets/vendor/popper.js/dist/umd/popper.min.js"></script>
        <script src="../../assets/vendor/bootstrap/bootstrap.min.js"></script>

        <!-- JS Implementing Plugins -->
        <script src="../../assets/vendor/appear.js"></script>
        <script src="../../assets/vendor/jquery.countdown.min.js"></script>
        <script src="../../assets/vendor/hs-megamenu/src/hs.megamenu.js"></script>
        <script src="../../assets/vendor/svg-injector/dist/svg-injector.min.js"></script>
        <script src="../../assets/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js"></script>
        <script src="../../assets/vendor/jquery-validation/dist/jquery.validate.min.js"></script>
        <script src="../../assets/vendor/fancybox/jquery.fancybox.min.js"></script>
        <script src="../../assets/vendor/ion-rangeslider/js/ion.rangeSlider.min.js"></script>
        <script src="../../assets/vendor/typed.js/lib/typed.min.js"></script>
        <script src="../../assets/vendor/slick-carousel/slick/slick.js"></script>
        <script src="../../assets/vendor/appear.js"></script>
        <script src="../../assets/vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>

        <!-- JS Electro -->
        <script src="../../assets/js/hs.core.js"></script>
        <script src="../../assets/js/components/hs.countdown.js"></script>
        <script src="../../assets/js/components/hs.header.js"></script>
        <script src="../../assets/js/components/hs.hamburgers.js"></script>
        <script src="../../assets/js/components/hs.unfold.js"></script>
        <script src="../../assets/js/components/hs.focus-state.js"></script>
        <script src="../../assets/js/components/hs.malihu-scrollbar.js"></script>
        <script src="../../assets/js/components/hs.validation.js"></script>
        <script src="../../assets/js/components/hs.fancybox.js"></script>
        <script src="../../assets/js/components/hs.onscroll-animation.js"></script>
        <script src="../../assets/js/components/hs.slick-carousel.js"></script>
        <script src="../../assets/js/components/hs.quantity-counter.js"></script>
        <script src="../../assets/js/components/hs.range-slider.js"></script>
        <script src="../../assets/js/components/hs.show-animation.js"></script>
        <script src="../../assets/js/components/hs.svg-injector.js"></script>
        <script src="../../assets/js/components/hs.scroll-nav.js"></script>
        <script src="../../assets/js/components/hs.go-to.js"></script>
        <script src="../../assets/js/components/hs.selectpicker.js"></script>

        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

        <script>
            $(document).ready(function(){
                var path = "{{route('autosearch')}}"
                $('#search_text').autocomplete({
 
                    source:function(request,response)
                    {
                        $.ajax({
 
                            url:path,
                            dataType:"JSON",
                            data:{
                                term:request.term
                            },
                            success:function(data)
                            {
                                response(data);
                            }
 
                        });
                 
                    },
                    minLength:1,
 
                });
            });
        </script>
 
        <!-- JS Plugins Init. -->
        <script>
            $(window).on('load', function () {
                // initialization of HSMegaMenu component
                $('.js-mega-menu').HSMegaMenu({
                    event: 'hover',
                    direction: 'horizontal',
                    pageContainer: $('.container'),
                    breakpoint: 767.98,
                    hideTimeOut: 0
                });
            });

            $(document).on('ready', function () {
                // initialization of header
                $.HSCore.components.HSHeader.init($('#header'));

                // initialization of animation
                $.HSCore.components.HSOnScrollAnimation.init('[data-animation]');

                // initialization of unfold component
                $.HSCore.components.HSUnfold.init($('[data-unfold-target]'), {
                    afterOpen: function () {
                        $(this).find('input[type="search"]').focus();
                    }
                });

                // initialization of HSScrollNav component
                $.HSCore.components.HSScrollNav.init($('.js-scroll-nav'), {
                  duration: 700
                });

                // initialization of quantity counter
                $.HSCore.components.HSQantityCounter.init('.js-quantity');

                // initialization of popups
                $.HSCore.components.HSFancyBox.init('.js-fancybox');

                // initialization of countdowns
                var countdowns = $.HSCore.components.HSCountdown.init('.js-countdown', {
                    yearsElSelector: '.js-cd-years',
                    monthsElSelector: '.js-cd-months',
                    daysElSelector: '.js-cd-days',
                    hoursElSelector: '.js-cd-hours',
                    minutesElSelector: '.js-cd-minutes',
                    secondsElSelector: '.js-cd-seconds'
                });

                // initialization of malihu scrollbar
                $.HSCore.components.HSMalihuScrollBar.init($('.js-scrollbar'));

                // initialization of forms
                $.HSCore.components.HSFocusState.init();

                // initialization of form validation
                $.HSCore.components.HSValidation.init('.js-validate', {
                    rules: {
                        confirmPassword: {
                            equalTo: '#signupPassword'
                        }
                    }
                });

                // initialization of forms
                $.HSCore.components.HSRangeSlider.init('.js-range-slider');

                // initialization of show animations
                $.HSCore.components.HSShowAnimation.init('.js-animation-link');

                // initialization of fancybox
                $.HSCore.components.HSFancyBox.init('.js-fancybox');

                // initialization of slick carousel
                $.HSCore.components.HSSlickCarousel.init('.js-slick-carousel');

                // initialization of go to
                $.HSCore.components.HSGoTo.init('.js-go-to');

                // initialization of hamburgers
                $.HSCore.components.HSHamburgers.init('#hamburgerTrigger');

                // initialization of unfold component
                $.HSCore.components.HSUnfold.init($('[data-unfold-target]'), {
                    beforeClose: function () {
                        $('#hamburgerTrigger').removeClass('is-active');
                    },
                    afterClose: function() {
                        $('#headerSidebarList .collapse.show').collapse('hide');
                    }
                });

                $('#headerSidebarList [data-toggle="collapse"]').on('click', function (e) {
                    e.preventDefault();

                    var target = $(this).data('target');

                    if($(this).attr('aria-expanded') === "true") {
                        $(target).collapse('hide');
                    } else {
                        $(target).collapse('show');
                    }
                });

                // initialization of unfold component
                $.HSCore.components.HSUnfold.init($('[data-unfold-target]'));

                // initialization of select picker
                $.HSCore.components.HSSelectPicker.init('.js-select');
            });
        </script>
    </body>

<!-- Mirrored from transvelo.github.io/electro-html/2.0/html/shop/shop.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 06 Oct 2020 15:09:22 GMT -->
</html>
