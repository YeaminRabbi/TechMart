<!DOCTYPE html>
<html lang="en">
    
<head>
        <!-- Title -->
        <title>Single Product </title>

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
                              <a href="#" class="text-gray-110 font-size-13 hover-on-dark">Welcome to Worldwide Mobile Store</a>
                          </div>
                          <div class="topbar-right ml-auto">
                              <ul class="list-inline mb-0">
                                  <li class="list-inline-item mr-0 u-header-topbar__nav-item u-header-topbar__nav-item-border">
                                      <a href="contact-v2.html" class="u-header-topbar__nav-link"><i class="ec ec-map-pointer mr-1"></i> Store Locator</a>
                                  </li>
                                 
                                  <li class="list-inline-item mr-0 u-header-topbar__nav-item u-header-topbar__nav-item-border">
                                      <a href="" class="u-header-topbar__nav-link"><i class="ec ec-transport mr-1"></i> Track Your Order</a>
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
                                  <a class="order-1 order-xl-0 navbar-brand u-header__navbar-brand u-header__navbar-brand-center" href="{{route('homepage')}}" aria-label="Techmart">
                                      <h3 style="color: black;font-weight:700;">TechMart</h3>
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
                                      <li class="col d-none d-xl-block"><a href="{{ route('ShowWishlist') }}" class="text-gray-90" data-toggle="tooltip" data-placement="top" title="Favorites"><i class="font-size-22 ec ec-favorites"></i></a></li>
                                      
                                   
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
                                              <a href="{{ route('cart') }}"><i class="font-size-22 ec ec-shopping-bag"></i></a>
                                              {{-- <span class="bg-lg-down-black width-22 height-22 bg-primary position-absolute d-flex align-items-center justify-content-center rounded-circle left-12 top-8 font-weight-bold font-size-12"></span>Cart --}}
                                              
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
                                          <a id="homeMegaMenu" class="nav-link u-header__nav-link u-header__nav-link-toggle" href="{{route('shop')}}" aria-haspopup="true" aria-expanded="false">Shop</a>
      
                                      </li>
                                      <!-- End Home -->
      
                                  
      
                                      <!-- Smart Phones -->
                                      <li class="nav-item hs-has-mega-menu u-header__nav-item"
                                          data-event="hover"
                                          data-animation-in="slideInUp"
                                          data-animation-out="fadeOut">
                                          <a id="smartphonesMegaMenu" class="nav-link u-header__nav-link u-header__nav-link-toggle" href="{{route('blog')}}" aria-haspopup="true" aria-expanded="false">Blog</a>
                                      </li>
                                      <!-- End Blog -->
      
                                      <!-- Laptops & Desktops -->
                                      <li class="nav-item hs-has-mega-menu u-header__nav-item"
                                          data-event="hover"
                                          data-animation-in="slideInUp"
                                          data-animation-out="fadeOut">
                                          <a id="laptopsdesktopsMegaMenu" class="nav-link u-header__nav-link u-header__nav-link-toggle" href="{{ route('ShowWishlist') }}" aria-haspopup="true" aria-expanded="false">Wishlist</a>               
                                      </li>
                                      <!-- End Laptops & Desktops -->
      
                                      <!-- Gadgets -->
                                      <li class="nav-item hs-has-mega-menu u-header__nav-item"
                                          data-event="hover"
                                          data-animation-in="slideInUp"
                                          data-animation-out="fadeOut">
                                          <a id="GadgetsMegaMenu" class="nav-link u-header__nav-link u-header__nav-link-toggle" href="{{route('about')}}" aria-haspopup="true" aria-expanded="false">About</a>
                                      </li>
                                      <!-- End Gadgets -->
      
                                     
      
                                      <!-- Cameras & Accessories -->
                                      <li class="nav-item hs-has-mega-menu u-header__nav-item"
                                          data-event="hover"
                                          data-animation-in="slideInUp"
                                          data-animation-out="fadeOut">
                                          <a id="CamerasAccessoriesMegaMenu" class="nav-link u-header__nav-link u-header__nav-link-toggle" href="{{route('faq')}}" aria-haspopup="true" aria-expanded="false">FAQ</a>
                                      </li>
                                      <!-- End Cameras & Accessories -->
      
                                      <!-- Movies & Games -->
                                      <li class="nav-item u-header__nav-item"
                                          data-event="hover"
                                          data-animation-in="slideInUp"
                                          data-animation-out="fadeOut">
                                          <a id="" class="nav-link u-header__nav-link u-header__nav-link-toggle" href="{{route('terms')}}" aria-haspopup="true" aria-expanded="false">Terms</a>
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
                                <li class="breadcrumb-item flex-shrink-0 flex-xl-shrink-1"><a href="{{ route('homepage') }}">Home</a></li>
                                <li class="breadcrumb-item flex-shrink-0 flex-xl-shrink-1"><a href="{{ route('shop') }}">Shop</a></li>
                                
                                <li class="breadcrumb-item flex-shrink-0 flex-xl-shrink-1 active" aria-current="page">{{ $product->product_title }}</li>
                            </ol>
                        </nav>
                    </div>
                    <!-- End breadcrumb -->
                </div>
            </div>
            <!-- End breadcrumb -->

            <div class="container">
                <!-- Single Product Body -->
                <div class="mb-14">
                    <div class="row">
                        <div class="col-md-6 col-lg-4 col-xl-5 mb-4 mb-md-0">
                            <div id="sliderSyncingNav" class="js-slick-carousel u-slick mb-2"
                                data-infinite="true"
                                data-arrows-classes="d-none d-lg-inline-block u-slick__arrow-classic u-slick__arrow-centered--y rounded-circle"
                                data-arrow-left-classes="fas fa-arrow-left u-slick__arrow-classic-inner u-slick__arrow-classic-inner--left ml-lg-2 ml-xl-4"
                                data-arrow-right-classes="fas fa-arrow-right u-slick__arrow-classic-inner u-slick__arrow-classic-inner--right mr-lg-2 mr-xl-4"
                                data-nav-for="#sliderSyncingThumb">
                                <div class="js-slide">
                                    <img class="img-fluid" src="{{ url($product->image) }}" alt="Image Description">
                                </div>
                                @foreach ($gallery  as $item)
                                    <div class="js-slide" style="cursor: pointer;">
                                        <img class="img-fluid" src="{{  url($item->images) }}" alt="Image Description">
                                    </div>
                                @endforeach
                               
                            </div>

                            <div id="sliderSyncingThumb" class="js-slick-carousel u-slick u-slick--slider-syncing u-slick--slider-syncing-size u-slick--gutters-1 u-slick--transform-off"
                                data-infinite="true"
                                data-slides-show="5"
                                data-is-thumbs="true"
                                data-nav-for="#sliderSyncingNav">
                                <div class="js-slide">
                                    <img class="img-fluid" src="{{ url($product->image) }}" alt="Image Description" style="cursor:pointer">
                                </div>
                                @foreach ($gallery  as $item)
                                    <div class="js-slide" style="cursor: pointer;">
                                        <img class="img-fluid" src="{{ url($item->images) }}" alt="Image Description">
                                    </div>
                                @endforeach
                                
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 col-xl-4 mb-md-6 mb-lg-0">
                            <div class="mb-2">
                                <a href="#" class="font-size-12 text-gray-5 mb-2 d-inline-block">Mobile</a>
                                <h2 class="font-size-25 text-lh-1dot2">{{ $product->product_title }}</h2>
                                <div class="mb-2">
                                    <a class="d-inline-flex align-items-center small font-size-15 text-lh-1" href="#">
                                        <div class="text-warning mr-2">
                                            <small class="fas fa-star"></small>
                                            <small class="fas fa-star"></small>
                                            <small class="fas fa-star"></small>
                                            <small class="fas fa-star"></small>
                                            <small class="far fa-star text-muted"></small>
                                        </div>
                                        <span class="text-secondary font-size-13">(3 customer reviews)</span>
                                    </a>
                                </div>
                                <div class="mb-2">
                                  
                                    {!! $product->summary !!}
                                </div>
                                <p><strong>SKU</strong>: {{ $product->slug }}</p>
                            </div>
                        </div>
                        <div class="mx-md-auto mx-lg-0 col-md-6 col-lg-4 col-xl-3">
                            <div class="mb-2">
                                <div class="card p-5 border-width-2 border-color-1 borders-radius-17">
                                <form action="{{ route('add-to-cart-onsale') }}" method="POST">
                                       @csrf
                                    <input type="hidden" name="onsale_rate" value="{{ $product->onsale_price }}">
                                    <div class="mb-3" >

                                        This Product has onsale discount of {{ $product->onsale_price }}% 
                                    </div>

                                    <div class="mb-3 addprice" >

                                        {{-- Adding price here using AJAX --}}
                                    </div>

                                    
                                    
                                    <div class="mb-3">
                                        <h6 class="font-size-14">Quantity</h6>
                                        <!-- Quantity -->
                                        <div class="border rounded-pill py-1 w-md-60 height-35 px-3 border-color-1">
                                            <div class="js-quantity row align-items-center">
                                                <div class="col">
                                                    <input class="js-result form-control h-auto border-0 rounded p-0 shadow-none" type="number" min="1" max="5" value="1" name="quantity">
                                                </div>
                                                <div class="col-auto pr-1">
                                                    <a class="js-minus btn btn-icon btn-xs btn-outline-secondary rounded-circle border-0" href="javascript:;">
                                                        <small class="fas fa-minus btn-icon__inner"></small>
                                                    </a>
                                                    <a class="js-plus btn btn-icon btn-xs btn-outline-secondary rounded-circle border-0" href="javascript:;">
                                                        <small class="fas fa-plus btn-icon__inner"></small>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Quantity -->
                                    </div>


                                    <div class="mb-3">
                                        <h6 class="font-size-14">Attributes </h6>
                                        <p>ROM | RAM | COLOR</p>
                                        @foreach ($attributes as $key=>$data)
                                            <?php

                                                if($data->quantity >= 5)
                                                {
                                            ?>
                                                <div>
                                                    <input class="att_id" id="att_id" data-product="{{ $product->id }}" type="radio" name="att_id" value="{{  $data->id }}">  {{ $data->size->sizename }} | {{ $data->ram }} | {{ $data->color->colorname }} 
                                                </div>
                                            <?php
                                                }

                                            ?>
                                        

                                         
                                       
                                        <br>
                                           
                                           
                                        @endforeach
                                        
                                    </div>

                           

                                    <div class="mb-2 pb-0dot5">
                                        <button class="btn btn-block btn-primary-dark" type="submit" style="cursor: pointer;"><i class="ec ec-add-to-cart mr-2 font-size-20"></i> Add to Cart</button>
                                    </div>
                                   

                                </form>
                                    <div class="flex-content-center flex-wrap">
                                        <a href="{{ route('Wishlist', $product->id) }}" class="text-gray-6 font-size-13 mr-2"><i class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</a>
                                        {{-- <a href="#" class="text-gray-6 font-size-13 ml-2"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Product Body -->
            </div>
            <div class="bg-gray-7 pt-6 pb-3 mb-6">
                <div class="container">
                    <div class="js-scroll-nav">
                        
                        <div class="bg-white pt-4 pb-6 px-xl-11 px-md-5 px-4 mb-6 overflow-hidden">
                            <div id="Description" class="mx-md-2">
                                <div class="position-relative mb-6">
                                    <ul class="nav nav-classic nav-tab nav-tab-lg justify-content-xl-center mb-6 flex-nowrap flex-xl-wrap overflow-auto overflow-xl-visble border-lg-down-bottom-0 pb-1 pb-xl-0 mb-n1 mb-xl-0">
                                       
                                        <li class="nav-item flex-shrink-0 flex-xl-shrink-1 z-index-2">
                                            <a class="nav-link active" href="#Description">
                                                <div class="d-md-flex justify-content-md-center align-items-md-center">
                                                    Description
                                                </div>
                                            </a>
                                        </li>
                                        <li class="nav-item flex-shrink-0 flex-xl-shrink-1 z-index-2">
                                            <a class="nav-link" href="#Specification">
                                                <div class="d-md-flex justify-content-md-center align-items-md-center">
                                                    Specification
                                                </div>
                                            </a>
                                        </li>
                                        <li class="nav-item flex-shrink-0 flex-xl-shrink-1 z-index-2">
                                            <a class="nav-link" href="#Reviews">
                                                <div class="d-md-flex justify-content-md-center align-items-md-center">
                                                    Reviews
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="mx-md-4 pt-1">
                                    {{--  <h3 class="font-size-24 mb-3">Perfectly Done</h3>
                                    <p>Praesent ornare, ex a interdum consectetur, lectus diam sodales elit, vitae egestas est enim ornare nisl. Nullam in lectus nec sem semper viverra. In lobortis egestas massa. Nam nec massa nisi. Suspendisse potenti. Quisque suscipit vulputate dui quis volutpat. Ut id elit facilisis, feugiat est in, tempus lacus. Ut ultrices dictum metus, a ultricies ex vulputate ac. Ut id cursus tellus, non tempor quam. Morbi porta diam nisi, id finibus nunc tincidunt eu.</p>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="pt-lg-8 pt-xl-10">
                                                <h3 class="font-size-24 mb-3">Wireless</h3>
                                                <p class="mb-6">Fusce vitae nibh mi. Integer posuere, libero et ullamcorper facilisis, enim eros tincidunt orci, eget vestibulum sapien nisi ut leo. Cras finibus vel est ut mollis. Donec luctus condimentum ante et euismod.</p>
                                                <h3 class="font-size-24 mb-3">Fresh Design</h3>
                                                <p class="mb-6">Integer bibendum aliquet ipsum, in ultrices enim sodales sed. Quisque ut urna vitae lacus laoreet malesuada eu at massa. Pellentesque nibh augue, pellentesque nec dictum vel, pretium a arcu. Duis eu urna suscipit, lobortis elit quis, ullamcorper massa.</p>
                                                <h3 class="font-size-24 mb-3">Fabolous Sound</h3>
                                                <p class="mb-6">Cras rutrum, nibh a sodales accumsan, elit sapien ultrices sapien, eget semper lectus ex congue elit. Nullam dui elit, fermentum a varius at, iaculis non dolor. In hac habitasse platea dictumst.</p>
                                            </div>
                                        </div>
                                        <div class="col-md-6 text-right">
                                            <img class="img-fluid mr-n4 mr-md-n10 mr-xl-n15" src="../assets/img/580X580/img1.jpg" alt="Image Description">
                                        </div>
                                        <div class="col-md-6 text-left">
                                            <img class="img-fluid ml-n4 ml-md-n10 ml-xl-n15" src="../assets/img/580X580/img2.jpg" alt="Image Description">
                                        </div>
                                        <div class="col-md-6 align-self-center">
                                            <div class="pt-lg-8 pt-xl-10 text-right">
                                                <h3 class="font-size-24 mb-3">Inteligent Bass</h3>
                                                <p class="mb-6">Fusce vitae nibh mi. Integer posuere, libero et ullamcorper facilisis, enim eros tincidunt orci, eget vestibulum sapien nisi ut leo. Cras finibus vel est ut mollis. Donec luctus condimentum ante et euismod.</p>
                                                <h3 class="font-size-24 mb-3">Battery Life</h3>
                                                <p class="mb-6">Integer bibendum aliquet ipsum, in ultrices enim sodales sed. Quisque ut urna vitae lacus laoreet malesuada eu at massa. Pellentesque nibh augue, pellentesque nec dictum vel, pretium a arcu. Duis eu urna suscipit, lobortis elit quis, ullamcorper massa.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <ul class="nav flex-nowrap flex-xl-wrap overflow-auto overflow-xl-visble">
                                        <li class="nav-item text-gray-111 flex-shrink-0 flex-xl-shrink-1"><strong>SKU:</strong> <span class="sku">FW511948218</span></li>
                                        <li class="nav-item text-gray-111 mx-3 flex-shrink-0 flex-xl-shrink-1">/</li>
                                        <li class="nav-item text-gray-111 flex-shrink-0 flex-xl-shrink-1"><strong>Category:</strong> <a href="#" class="text-blue">Headphones</a></li>
                                        <li class="nav-item text-gray-111 mx-3 flex-shrink-0 flex-xl-shrink-1">/</li>
                                        <li class="nav-item text-gray-111 flex-shrink-0 flex-xl-shrink-1"><strong>Tags:</strong> <a href="#" class="text-blue">Fast</a>, <a href="#" class="text-blue">Gaming</a>, <a href="#" class="text-blue">Strong</a></li>
                                    </ul>  --}}

                                    {!! $product->description !!}
                                </div>
                            </div>
                        </div>
                        <div class="bg-white py-4 px-xl-11 px-md-5 px-4 mb-6">
                            <div id="Specification" class="mx-md-2">
                                <div class="position-relative mb-6">
                                    <ul class="nav nav-classic nav-tab nav-tab-lg justify-content-xl-center mb-6 flex-nowrap flex-xl-wrap overflow-auto overflow-xl-visble border-lg-down-bottom-0 pb-1 pb-xl-0 mb-n1 mb-xl-0">
                                        {{--  <li class="nav-item flex-shrink-0 flex-xl-shrink-1 z-index-2">
                                            <a class="nav-link" href="#Accessories">
                                                <div class="d-md-flex justify-content-md-center align-items-md-center">
                                                    Accessories
                                                </div>
                                            </a>
                                        </li>  --}}
                                        <li class="nav-item flex-shrink-0 flex-xl-shrink-1 z-index-2">
                                            <a class="nav-link" href="#Description">
                                                <div class="d-md-flex justify-content-md-center align-items-md-center">
                                                    Description
                                                </div>
                                            </a>
                                        </li>
                                        <li class="nav-item flex-shrink-0 flex-xl-shrink-1 z-index-2">
                                            <a class="nav-link active" href="#Specification">
                                                <div class="d-md-flex justify-content-md-center align-items-md-center">
                                                    Specification
                                                </div>
                                            </a>
                                        </li>
                                        <li class="nav-item flex-shrink-0 flex-xl-shrink-1 z-index-2">
                                            <a class="nav-link" href="#Reviews">
                                                <div class="d-md-flex justify-content-md-center align-items-md-center">
                                                    Reviews
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="mx-md-5 pt-1">
                                    {{--  <div class="table-responsive mb-4">
                                        <table class="table table-hover">
                                            <tbody>
                                                <tr>
                                                    <th class="px-4 px-xl-5 border-top-0">Weight</th>
                                                    <td class="border-top-0">7.25kg</td>
                                                </tr>
                                                <tr>
                                                    <th class="px-4 px-xl-5">Dimensions</th>
                                                    <td>90 x 60 x 90 cm</td>
                                                </tr>
                                                <tr>
                                                    <th class="px-4 px-xl-5">Size</th>
                                                    <td>One Size Fits all</td>
                                                </tr>
                                                <tr>
                                                    <th class="px-4 px-xl-5">color</th>
                                                    <td>Black with Red, White with Gold</td>
                                                </tr>
                                                <tr>
                                                    <th class="px-4 px-xl-5">Guarantee</th>
                                                    <td>5 years</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <h3 class="font-size-18 mb-4">Technical Specifications</h3>
                                    <div class="table-responsive">
                                        <table class="table table-hover">
                                            <tbody>
                                                <tr>
                                                    <th class="px-4 px-xl-5 border-top-0">Brand</th>
                                                    <td class="border-top-0">Apple</td>
                                                </tr>
                                                <tr>
                                                    <th class="px-4 px-xl-5">Item Height</th>
                                                    <td>18 Millimeters</td>
                                                </tr>
                                                <tr>
                                                    <th class="px-4 px-xl-5">Item Width</th>
                                                    <td>31.4 Centimeters</td>
                                                </tr>
                                                <tr>
                                                    <th class="px-4 px-xl-5">Screen Size</th>
                                                    <td>13 Inches</td>
                                                </tr>
                                                <tr>
                                                    <th class="px-4 px-xl-5">Item Weight</th>
                                                    <td>1.6 Kg</td>
                                                </tr>
                                                <tr>
                                                    <th class="px-4 px-xl-5">Product Dimensions</th>
                                                    <td>21.9 x 31.4 x 1.8 cm</td>
                                                </tr>
                                                <tr>
                                                    <th class="px-4 px-xl-5">Item model number</th>
                                                    <td>MF841HN/A</td>
                                                </tr>
                                                <tr>
                                                    <th class="px-4 px-xl-5">Processor Brand</th>
                                                    <td>Intel</td>
                                                </tr>
                                                <tr>
                                                    <th class="px-4 px-xl-5">Processor Type</th>
                                                    <td>Core i5</td>
                                                </tr>
                                                <tr>
                                                    <th class="px-4 px-xl-5">Processor Speed</th>
                                                    <td>2.9 GHz</td>
                                                </tr>
                                                <tr>
                                                    <th class="px-4 px-xl-5">RAM Size</th>
                                                    <td>8 GB</td>
                                                </tr>
                                                <tr>
                                                    <th class="px-4 px-xl-5">Hard Drive Size</th>
                                                    <td>512 GB</td>
                                                </tr>
                                                <tr>
                                                    <th class="px-4 px-xl-5">Hard Disk Technology</th>
                                                    <td>Solid State Drive</td>
                                                </tr>
                                                <tr>
                                                    <th class="px-4 px-xl-5">Graphics Coprocessor</th>
                                                    <td>Intel Integrated Graphics</td>
                                                </tr>
                                                <tr>
                                                    <th class="px-4 px-xl-5">Graphics Card Description</th>
                                                    <td>Integrated Graphics Card</td>
                                                </tr>
                                                <tr>
                                                    <th class="px-4 px-xl-5">Hardware Platform</th>
                                                    <td>Mac</td>
                                                </tr>
                                                <tr>
                                                    <th class="px-4 px-xl-5">Operating System</th>
                                                    <td>Mac OS</td>
                                                </tr>
                                                <tr>
                                                    <th class="px-4 px-xl-5">Average Battery Life (in hours)</th>
                                                    <td>9</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>  --}}

                                    {!! $product->specification !!}
                                </div>
                            </div>
                        </div>
                        <div class="bg-white py-4 px-xl-11 px-md-5 px-4 mb-6">
                            <div id="Reviews" class="mx-md-2">
                                <div class="position-relative mb-6">
                                    <ul class="nav nav-classic nav-tab nav-tab-lg justify-content-xl-center mb-6 flex-nowrap flex-xl-wrap overflow-auto overflow-xl-visble border-lg-down-bottom-0 pb-1 pb-xl-0 mb-n1 mb-xl-0">
                                        {{--  <li class="nav-item flex-shrink-0 flex-xl-shrink-1 z-index-2">
                                            <a class="nav-link" href="#Accessories">
                                                <div class="d-md-flex justify-content-md-center align-items-md-center">
                                                    Accessories
                                                </div>
                                            </a>
                                        </li>  --}}
                                        <li class="nav-item flex-shrink-0 flex-xl-shrink-1 z-index-2">
                                            <a class="nav-link" href="#Description">
                                                <div class="d-md-flex justify-content-md-center align-items-md-center">
                                                    Description
                                                </div>
                                            </a>
                                        </li>
                                        <li class="nav-item flex-shrink-0 flex-xl-shrink-1 z-index-2">
                                            <a class="nav-link" href="#Specification">
                                                <div class="d-md-flex justify-content-md-center align-items-md-center">
                                                    Specification
                                                </div>
                                            </a>
                                        </li>
                                        <li class="nav-item flex-shrink-0 flex-xl-shrink-1 z-index-2">
                                            <a class="nav-link active" href="#Reviews">
                                                <div class="d-md-flex justify-content-md-center align-items-md-center">
                                                    Reviews
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="mb-4 px-lg-4">
                                    <div class="row mb-8">
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <h3 class="font-size-18 mb-6">Based on 3 reviews</h3>
                                                <h2 class="font-size-30 font-weight-bold text-lh-1 mb-0">4.3</h2>
                                                <div class="text-lh-1">overall</div>
                                            </div>

                                            <!-- Ratings -->
                                            <ul class="list-unstyled">
                                                <li class="py-1">
                                                    <a class="row align-items-center mx-gutters-2 font-size-1" href="javascript:;">
                                                        <div class="col-auto mb-2 mb-md-0">
                                                            <div class="text-warning text-ls-n2 font-size-16" style="width: 80px;">
                                                                <small class="fas fa-star"></small>
                                                                <small class="fas fa-star"></small>
                                                                <small class="fas fa-star"></small>
                                                                <small class="fas fa-star"></small>
                                                                <small class="far fa-star text-muted"></small>
                                                            </div>
                                                        </div>
                                                        <div class="col-auto mb-2 mb-md-0">
                                                            <div class="progress ml-xl-5" style="height: 10px; width: 200px;">
                                                                <div class="progress-bar" role="progressbar" style="width: 100%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                                            </div>
                                                        </div>
                                                        <div class="col-auto text-right">
                                                            <span class="text-gray-90">205</span>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="py-1">
                                                    <a class="row align-items-center mx-gutters-2 font-size-1" href="javascript:;">
                                                        <div class="col-auto mb-2 mb-md-0">
                                                            <div class="text-warning text-ls-n2 font-size-16" style="width: 80px;">
                                                                <small class="fas fa-star"></small>
                                                                <small class="fas fa-star"></small>
                                                                <small class="fas fa-star"></small>
                                                                <small class="far fa-star text-muted"></small>
                                                                <small class="far fa-star text-muted"></small>
                                                            </div>
                                                        </div>
                                                        <div class="col-auto mb-2 mb-md-0">
                                                            <div class="progress ml-xl-5" style="height: 10px; width: 200px;">
                                                                <div class="progress-bar" role="progressbar" style="width: 53%;" aria-valuenow="53" aria-valuemin="0" aria-valuemax="100"></div>
                                                            </div>
                                                        </div>
                                                        <div class="col-auto text-right">
                                                            <span class="text-gray-90">55</span>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="py-1">
                                                    <a class="row align-items-center mx-gutters-2 font-size-1" href="javascript:;">
                                                        <div class="col-auto mb-2 mb-md-0">
                                                            <div class="text-warning text-ls-n2 font-size-16" style="width: 80px;">
                                                                <small class="fas fa-star"></small>
                                                                <small class="fas fa-star"></small>
                                                                <small class="far fa-star text-muted"></small>
                                                                <small class="far fa-star text-muted"></small>
                                                                <small class="far fa-star text-muted"></small>
                                                            </div>
                                                        </div>
                                                        <div class="col-auto mb-2 mb-md-0">
                                                            <div class="progress ml-xl-5" style="height: 10px; width: 200px;">
                                                                <div class="progress-bar" role="progressbar" style="width: 20%;" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                                            </div>
                                                        </div>
                                                        <div class="col-auto text-right">
                                                            <span class="text-gray-90">23</span>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="py-1">
                                                    <a class="row align-items-center mx-gutters-2 font-size-1" href="javascript:;">
                                                        <div class="col-auto mb-2 mb-md-0">
                                                            <div class="text-warning text-ls-n2 font-size-16" style="width: 80px;">
                                                                <small class="fas fa-star"></small>
                                                                <small class="far fa-star text-muted"></small>
                                                                <small class="far fa-star text-muted"></small>
                                                                <small class="far fa-star text-muted"></small>
                                                                <small class="far fa-star text-muted"></small>
                                                            </div>
                                                        </div>
                                                        <div class="col-auto mb-2 mb-md-0">
                                                            <div class="progress ml-xl-5" style="height: 10px; width: 200px;">
                                                                <div class="progress-bar" role="progressbar" style="width: 0%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                                            </div>
                                                        </div>
                                                        <div class="col-auto text-right">
                                                            <span class="text-muted">0</span>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="py-1">
                                                    <a class="row align-items-center mx-gutters-2 font-size-1" href="javascript:;">
                                                        <div class="col-auto mb-2 mb-md-0">
                                                            <div class="text-warning text-ls-n2 font-size-16" style="width: 80px;">
                                                                <small class="fas fa-star"></small>
                                                                <small class="far fa-star text-muted"></small>
                                                                <small class="far fa-star text-muted"></small>
                                                                <small class="far fa-star text-muted"></small>
                                                                <small class="far fa-star text-muted"></small>
                                                            </div>
                                                        </div>
                                                        <div class="col-auto mb-2 mb-md-0">
                                                            <div class="progress ml-xl-5" style="height: 10px; width: 200px;">
                                                                <div class="progress-bar" role="progressbar" style="width: 1%;" aria-valuenow="1" aria-valuemin="0" aria-valuemax="100"></div>
                                                            </div>
                                                        </div>
                                                        <div class="col-auto text-right">
                                                            <span class="text-gray-90">4</span>
                                                        </div>
                                                    </a>
                                                </li>
                                            </ul>
                                            <!-- End Ratings -->
                                        </div>
                                        <div class="col-md-6">
                                            <h3 class="font-size-18 mb-5">Add a review</h3>
                                            <!-- Form -->
                                            <form class="js-validate" action="{{ route('Review') }}" method="POST">
                                                @csrf 
                                                <input type="hidden" name="product_id" value="{{ $product->id }}">
                                                
                                                <div class="row align-items-center mb-4">
                                                    <div class="col-md-4 col-lg-3">
                                                        <label for="rating" class="form-label mb-0">Your Review</label>
                                                    </div>
                                                    <div class="col-md-8 col-lg-9">
                                                        <ol style="display: flex;">
                                                            <li style="margin-right: 35px;">
                                                                <input type="radio" value="1" name="rating" />
                                                            </li>
                                                            <li style="margin-right: 35px;">
                                                                <input type="radio" value="2" name="rating" />
                                                            </li>
                                                            <li style="margin-right: 35px;">
                                                                <input type="radio" value="3" name="rating" />
                                                            </li>
                                                            <li style="margin-right: 35px;">
                                                                <input type="radio" value="4" name="rating" />
                                                            </li>
                                                            <li style="margin-right: 35px;">
                                                                <input type="radio" value="5" name="rating" />
                                                            </li>
                                                        </ol>

                                                    </div>
                                                </div>
                                                <div class="js-form-message form-group mb-3 row">
                                                    <div class="col-md-4 col-lg-3">
                                                        <label for="descriptionTextarea" class="form-label">Your Review</label>
                                                    </div>
                                                    <div class="col-md-8 col-lg-9">
                                                        <textarea class="form-control" rows="3" id="descriptionTextarea"
                                                        data-msg="Please enter your message."
                                                        data-error-class="u-has-error"
                                                        data-success-class="u-has-success" name="message"></textarea>
                                                    </div>
                                                </div>
                                                
                                                <div class="row">
                                                    <div class="offset-md-4 offset-lg-3 col-auto">
                                                        <button type="submit" class="btn btn-primary-dark btn-wide transition-3d-hover">Add Review</button>
                                                    </div>
                                                </div>
                                            </form>
                                            <!-- End Form -->
                                        </div>
                                    </div>
                                    <!-- Review -->
                                    @foreach ($reviews as $key=> $data)
                                    <div class="border-bottom border-color-1 pb-4 mb-4">
                                        <!-- Review Rating -->
                                        <div class="d-flex justify-content-between align-items-center text-secondary font-size-1 mb-2">
                                            <div class="text-warning text-ls-n2 font-size-16" style="width: 80px;">

                                                <?php

                                                    if($data->rating == 1)
                                                    {
                                                ?>
                                                <small class="fas fa-star"></small>
                                                <small class="fas fa-star text-muted"></small>
                                                <small class="fas fa-star text-muted"></small>
                                                <small class="far fa-star text-muted"></small>
                                                <small class="far fa-star text-muted"></small>
                                                <?php
                                                    }
                                                    elseif($data->rating == 2)
                                                    {
                                                ?>
                                                <small class="fas fa-star"></small>
                                                <small class="fas fa-star"></small>
                                                <small class="fas fa-star text-muted"></small>
                                                <small class="far fa-star text-muted"></small>
                                                <small class="far fa-star text-muted"></small>

                                                <?php
                                                    }

                                                    elseif($data->rating == 3){
                                                ?>

                                                <small class="fas fa-star"></small>
                                                <small class="fas fa-star"></small>
                                                <small class="fas fa-star"></small>
                                                <small class="far fa-star text-muted"></small>
                                                <small class="far fa-star text-muted"></small>
                                                <?php 
                                                    }
                                                    elseif($data->rating == 4)
                                                    {
                                                ?>
                                                <small class="fas fa-star"></small>
                                                <small class="fas fa-star"></small>
                                                <small class="fas fa-star"></small>
                                                <small class="far fa-star"></small>
                                                <small class="far fa-star text-muted"></small>
                                                <?php 
                                                    }
                                                    else{
                                                ?>
                                                <small class="fas fa-star"></small>
                                                <small class="fas fa-star"></small>
                                                <small class="fas fa-star"></small>
                                                <small class="far fa-star"></small>
                                                <small class="far fa-star"></small>
                                                <?php
                                                    }
                                                ?>
                                               
                                            </div>
                                        </div>
                                        <!-- End Review Rating -->

                                        <p class="text-gray-90">{{ $data->message }}</p>

                                        <!-- Reviewer -->
                                        <div class="mb-2">
                                            <strong>{{ $data->name }}</strong>
                                            <span class="font-size-13 text-gray-23">{{ $data->created_at->format('d M,y') }}</span>
                                        </div>
                                        <!-- End Reviewer -->
                                    </div>
                                @endforeach
                                    <!-- End Review -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <!-- Related products -->
                <div class="mb-6">
                    <div class="d-flex justify-content-between align-items-center border-bottom border-color-1 flex-lg-nowrap flex-wrap mb-4">
                        <h3 class="section-title mb-0 pb-2 font-size-22">Related products</h3>
                    </div>
                    <ul class="row list-unstyled products-group no-gutters">
                        <li class="col-6 col-md-3 col-xl-2gdot4-only col-wd-2 product-item">
                            <div class="product-item__outer h-100">
                                <div class="product-item__inner px-xl-4 p-3">
                                    <div class="product-item__body pb-xl-2">
                                        <div class="mb-2"><a href="product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Speakers</a></div>
                                        <h5 class="mb-1 product-item__title"><a href="single-product-fullwidth.html" class="text-blue font-weight-bold">Wireless Audio System Multiroom 360 degree Full base audio</a></h5>
                                        <div class="mb-2">
                                            <a href="single-product-fullwidth.html" class="d-block text-center"><img class="img-fluid" src="../assets/img/212X200/img1.jpg" alt="Image Description"></a>
                                        </div>
                                        <div class="flex-center-between mb-1">
                                            <div class="prodcut-price">
                                                <div class="text-gray-100">$685,00</div>
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
                        </li>
                        <li class="col-6 col-md-3 col-xl-2gdot4-only col-wd-2 product-item">
                            <div class="product-item__outer h-100">
                                <div class="product-item__inner px-xl-4 p-3">
                                    <div class="product-item__body pb-xl-2">
                                        <div class="mb-2"><a href="product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Speakers</a></div>
                                        <h5 class="mb-1 product-item__title"><a href="single-product-fullwidth.html" class="text-blue font-weight-bold">Tablet White EliteBook Revolve 810 G2</a></h5>
                                        <div class="mb-2">
                                            <a href="single-product-fullwidth.html" class="d-block text-center"><img class="img-fluid" src="../assets/img/212X200/img2.jpg" alt="Image Description"></a>
                                        </div>
                                        <div class="flex-center-between mb-1">
                                            <div class="prodcut-price d-flex align-items-center position-relative">
                                                <ins class="font-size-20 text-red text-decoration-none">$1999,00</ins>
                                                <del class="font-size-12 tex-gray-6 position-absolute bottom-100">$2 299,00</del>
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
                        </li>
                        <li class="col-6 col-md-3 col-xl-2gdot4-only col-wd-2 product-item">
                            <div class="product-item__outer h-100">
                                <div class="product-item__inner px-xl-4 p-3">
                                    <div class="product-item__body pb-xl-2">
                                        <div class="mb-2"><a href="product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Speakers</a></div>
                                        <h5 class="mb-1 product-item__title"><a href="single-product-fullwidth.html" class="text-blue font-weight-bold">Purple Solo 2 Wireless</a></h5>
                                        <div class="mb-2">
                                            <a href="single-product-fullwidth.html" class="d-block text-center"><img class="img-fluid" src="../assets/img/212X200/img3.jpg" alt="Image Description"></a>
                                        </div>
                                        <div class="flex-center-between mb-1">
                                            <div class="prodcut-price">
                                                <div class="text-gray-100">$685,00</div>
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
                        </li>
                        <li class="col-6 col-md-3 col-xl-2gdot4-only col-wd-2 product-item remove-divider-md-lg">
                            <div class="product-item__outer h-100">
                                <div class="product-item__inner px-xl-4 p-3">
                                    <div class="product-item__body pb-xl-2">
                                        <div class="mb-2"><a href="product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Speakers</a></div>
                                        <h5 class="mb-1 product-item__title"><a href="single-product-fullwidth.html" class="text-blue font-weight-bold">Smartphone 6S 32GB LTE</a></h5>
                                        <div class="mb-2">
                                            <a href="single-product-fullwidth.html" class="d-block text-center"><img class="img-fluid" src="../assets/img/212X200/img4.jpg" alt="Image Description"></a>
                                        </div>
                                        <div class="flex-center-between mb-1">
                                            <div class="prodcut-price">
                                                <div class="text-gray-100">$685,00</div>
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
                        </li>
                        <li class="col-6 col-md-3 col-xl-2gdot4-only col-wd-2 product-item remove-divider-xl">
                            <div class="product-item__outer h-100">
                                <div class="product-item__inner px-xl-4 p-3">
                                    <div class="product-item__body pb-xl-2">
                                        <div class="mb-2"><a href="product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Speakers</a></div>
                                        <h5 class="mb-1 product-item__title"><a href="single-product-fullwidth.html" class="text-blue font-weight-bold">Widescreen NX Mini F1 SMART NX</a></h5>
                                        <div class="mb-2">
                                            <a href="single-product-fullwidth.html" class="d-block text-center"><img class="img-fluid" src="../assets/img/212X200/img5.jpg" alt="Image Description"></a>
                                        </div>
                                        <div class="flex-center-between mb-1">
                                            <div class="prodcut-price">
                                                <div class="text-gray-100">$685,00</div>
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
                        </li>
                        <li class="col-6 col-md-3 col-xl-2gdot4-only col-wd-2 product-item remove-divider-wd d-xl-none d-wd-block">
                            <div class="product-item__outer h-100">
                                <div class="product-item__inner px-xl-4 p-3">
                                    <div class="product-item__body pb-xl-2">
                                        <div class="mb-2"><a href="product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Speakers</a></div>
                                        <h5 class="mb-1 product-item__title"><a href="single-product-fullwidth.html" class="text-blue font-weight-bold">Tablet White EliteBook Revolve 810 G2</a></h5>
                                        <div class="mb-2">
                                            <a href="single-product-fullwidth.html" class="d-block text-center"><img class="img-fluid" src="../assets/img/212X200/img2.jpg" alt="Image Description"></a>
                                        </div>
                                        <div class="flex-center-between mb-1">
                                            <div class="prodcut-price d-flex align-items-center position-relative">
                                                <ins class="font-size-20 text-red text-decoration-none">$1999,00</ins>
                                                <del class="font-size-12 tex-gray-6 position-absolute bottom-100">$2 299,00</del>
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
                        </li>
                    </ul>
                </div>
                <!-- End Related products -->
                <!-- Brand Carousel -->
                <div class="mb-8">
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
                                    <img class="img-fluid m-auto max-height-50" src="../assets/img/200X60/img1.png" alt="Image Description">
                                </a>
                            </div>
                            <div class="js-slide">
                                <a href="#" class="link-hover__brand">
                                    <img class="img-fluid m-auto max-height-50" src="../assets/img/200X60/img2.png" alt="Image Description">
                                </a>
                            </div>
                            <div class="js-slide">
                                <a href="#" class="link-hover__brand">
                                    <img class="img-fluid m-auto max-height-50" src="../assets/img/200X60/img3.png" alt="Image Description">
                                </a>
                            </div>
                            <div class="js-slide">
                                <a href="#" class="link-hover__brand">
                                    <img class="img-fluid m-auto max-height-50" src="../assets/img/200X60/img4.png" alt="Image Description">
                                </a>
                            </div>
                            <div class="js-slide">
                                <a href="#" class="link-hover__brand">
                                    <img class="img-fluid m-auto max-height-50" src="../assets/img/200X60/img5.png" alt="Image Description">
                                </a>
                            </div>
                            <div class="js-slide">
                                <a href="#" class="link-hover__brand">
                                    <img class="img-fluid m-auto max-height-50" src="../assets/img/200X60/img6.png" alt="Image Description">
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
                                        <a href="single-product-fullwidth.html" class="d-block width-75 text-center"><img class="img-fluid" src="../assets/img/75X75/img1.jpg" alt="Image Description"></a>
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
                                        <a href="single-product-fullwidth.html" class="d-block width-75 text-center"><img class="img-fluid" src="../assets/img/75X75/img2.jpg" alt="Image Description"></a>
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
                                        <a href="single-product-fullwidth.html" class="d-block width-75 text-center"><img class="img-fluid" src="../assets/img/75X75/img3.jpg" alt="Image Description"></a>
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

       /// javascript for dropdown dependancy using AJAX for product quantity
       <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
       <script>
           $('.att_id').change(function(){
               let att_id = $(this).val();
               let product_id = $(this).attr('data-product');
               $.ajax({
                   type:"GET",
                   url:"{{ url('product/get/price') }}/"+att_id+'/'+product_id,
                   success:function(res){
                       $('.addprice').html(res)
                   }
               });
           });
       </script> 
       
     
      
        
          

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
        <script src="../../assets/vendor/typed.js/lib/typed.min.js"></script>
        <script src="../../assets/vendor/slick-carousel/slick/slick.js"></script>
        <script src="../../assets/vendor/appear.js"></script>
        <script src="../../assets/vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>

        <!-- JS Electro -->
        <script src="../assets/js/hs.core.js"></script>
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
        <script src="../../assets/js/components/hs.show-animation.js"></script>
        <script src="../../assets/js/components/hs.svg-injector.js"></script>
        <script src="../../assets/js/components/hs.scroll-nav.js"></script>
        <script src="../../assets/js/components/hs.go-to.js"></script>
        <script src="../../assets/js/components/hs.selectpicker.js"></script>

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

<!-- Mirrored from transvelo.github.io/electro-html/2.0/html/shop/single-product-extended.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 06 Oct 2020 15:09:22 GMT -->
</html>
