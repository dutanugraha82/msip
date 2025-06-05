<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Misuli | @yield('title')</title>

  <!--=====FAB ICON=======-->
  <link rel="shortcut icon" href="{{ asset('assets/img/logo/logo1.png') }}" type="image/x-icon">

  <!--===== CSS LINK =======-->
  <link rel="stylesheet" href="{{ asset('assets/css/plugins/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/plugins/aos.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/plugins/fontawesome.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/plugins/magnific-popup.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/plugins/mobile.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/plugins/owlcarousel.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/plugins/sidebar.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/plugins/slick-slider.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/plugins/nice-select.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/plugins/swiper-slider.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
  <style>
   /* Hilangkan background hijau pada navbar */
    #header,
    #header::before,
    #header::after,
    .header-area,
    .header-area::before,
    .header-area::after {
      background: none !important;
      background-color: white !important;
      background-image: none !important;
      box-shadow: none !important;
    }

  </style>
  <!--=====  JS SCRIPT LINK =======-->
  <script src="{{ asset('assets/js/plugins/jquery-3-7-1.min.js') }}"></script>
</head>

<body class="homepage1-body">

  <!--===== PRELOADER STARTS =======-->
  <div class="preloader">
    <div class="loading-container">
      <div class="loading"></div>
      <div id="loading-icon"><img src="{{ asset('assets/img/logo/logo.png') }}" alt="housebox"></div>
    </div>
  </div>
  <!--===== PRELOADER ENDS =======-->

  <!--===== PROGRESS STARTS=======-->
  <div class="paginacontainer">
    <div class="progress-wrap">
      <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
      </svg>
    </div>
  </div>
  <!--===== PROGRESS ENDS=======-->

  <!--===== SEARCHBAR STARTS=======-->
  <div class="header-search-form-wrapper">
    <div class="tx-search-close tx-close"><i class="fa-solid fa-xmark"></i></div>
    <div class="header-search-container">
      <form role="search" class="search-form">
        <input type="search" class="search-field" placeholder="Search …" value="" name="s">
        <button type="submit" class="search-submit"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
            <path d="M13.7955 13.8111L19 19M16 8.5C16 12.6421 12.6421 16 8.5 16C4.35786 16 1 12.6421 1 8.5C1 4.35786 4.35786 1 8.5 1C12.6421 1 16 4.35786 16 8.5Z" stroke="#030E0F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
          </svg></button>
      </form>
    </div>
  </div>
  <div class="body-overlay"></div>
  <!--===== SEARCHBAR STARTS=======-->

  <!--=====HEADER START=======-->
  <header>
    <div class="header-area homepage1 header header-sticky d-none d-lg-block " id="header">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="header-elements">
              <div class="site-logo">
                <a href="/"><img src="{{ asset('assets/img/logo/logo.png') }}" alt="housebox"></a>
              </div>
              <div class="main-menu">
                <ul>
                  <li><a href="/" class="plus {{ Request::is('/') ? 'active' : '' }}">Beranda</a>
                    
                  </li>
                  <li><a href="/pelayanan-kami" class="plus {{ Request::is('pelayanan-kami') ? 'active' : '' }}">Pelayanan Kami</a>
                  </li>
                  <li><a href="#" class="plus">Lowongan Kerja</a>
                  </li>
                  <li><a href="/tentang-kami" class="plus {{ Request::is('tentang-kami') ? 'active' : '' }}">Tentang Kami</a></li>
                  <li><a href="/kontak-kami" class="plus {{ Request::is('kontak-kami') ? 'active' : '' }}">Kontak Kami</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</header>
  <!--=====HEADER END =======-->

  <!--===== MOBILE HEADER STARTS =======-->
  <div class="mobile-header mobile-header1 d-block d-lg-none">
    <div class="container-fluid">
      <div class="col-12">
        <div class="mobile-header-elements">
          <div class="mobile-logo">
            <a href="/"><img src="{{ asset('assets/img/logo/logo.png') }}" alt="housebox"></a>
          </div>
          <div class="mobile-right d-flex gap-1 align-items-center">
            <div class="mobile-nav-icon dots-menu">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                <path d="M3 4H21V6H3V4ZM7 19H21V21H7V19ZM3 14H21V16H3V14ZM7 9H21V11H7V9Z"></path>
              </svg>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="mobile-sidebar mobile-sidebar1">
    <div class="logosicon-area">
      <div class="logos">
        <img src="{{ asset('assets/img/logo/logo.png') }}" alt="housebox">
      </div>
      <div class="menu-close">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
          <path d="M10.5859 12L2.79297 4.20706L4.20718 2.79285L12.0001 10.5857L19.793 2.79285L21.2072 4.20706L13.4143 12L21.2072 19.7928L19.793 21.2071L12.0001 13.4142L4.20718 21.2071L2.79297 19.7928L10.5859 12Z"></path>
        </svg>
      </div>
    </div>
    <div class="mobile-nav mobile-nav1">
      <ul class="mobile-nav-list nav-list1">
        <li><a class="plus active" href="/">Beranda</a></li>
        <li><a href="/pelayanan-kami">Pelayanan Kami</a></li>
        <li><a href="#">Lowongan Kerja</a></li>
        <li><a href="/tentang-kami">Tentang Kami</a></li>
        <li><a href="/kontak-kami">Kontak Kami</a></li>
      </ul>

      <div class="allmobilesection">
        <a href="contact" class="theme-btn1">Kontak Kami <span class="arrow1"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="currentColor">
              <path d="M12 13H4V11H12V4L20 12L12 20V13Z"></path>
            </svg></span><span class="arrow2"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="currentColor">
              <path d="M12 13H4V11H12V4L20 12L12 20V13Z"></path>
            </svg></span></a>
        <div class="single-footer">
          <h3>Informasi Kontak</h3>
          <div class="footer1-contact-info">
            <div class="contact-info-single">
              <div class="contact-info-icon">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                  <path d="M21 16.42V19.9561C21 20.4811 20.5941 20.9167 20.0705 20.9537C19.6331 20.9846 19.2763 21 19 21C10.1634 21 3 13.8366 3 5C3 4.72371 3.01545 4.36687 3.04635 3.9295C3.08337 3.40588 3.51894 3 4.04386 3H7.5801C7.83678 3 8.05176 3.19442 8.07753 3.4498C8.10067 3.67907 8.12218 3.86314 8.14207 4.00202C8.34435 5.41472 8.75753 6.75936 9.3487 8.00303C9.44359 8.20265 9.38171 8.44159 9.20185 8.57006L7.04355 10.1118C8.35752 13.1811 10.8189 15.6425 13.8882 16.9565L15.4271 14.8019C15.5572 14.6199 15.799 14.5573 16.001 14.6532C17.2446 15.2439 18.5891 15.6566 20.0016 15.8584C20.1396 15.8782 20.3225 15.8995 20.5502 15.9225C20.8056 15.9483 21 16.1633 21 16.42Z"></path>
                </svg>
              </div>
              <div class="contact-info-text">
                <a href="tel:02188332376">021 - 8833 2376</a>
              </div>
            </div>

            <div class="contact-info-single">
              <div class="contact-info-icon">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                  <path d="M3 3H21C21.5523 3 22 3.44772 22 4V20C22 20.5523 21.5523 21 21 21H3C2.44772 21 2 20.5523 2 20V4C2 3.44772 2.44772 3 3 3ZM12.0606 11.6829L5.64722 6.2377L4.35278 7.7623L12.0731 14.3171L19.6544 7.75616L18.3456 6.24384L12.0606 11.6829Z"></path>
                </svg>
              </div>
              <div class="contact-info-text">
                <a href="mailto:hrd@misulisuburperdana.com">hrd@misulisuburperdana.com</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--===== MOBILE HEADER STARTS =======-->

  @yield('content')

  <!--===== FOOTER AREA STARTS =======-->
  <div class="footer1-section-area">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-md-6">
              <div class="footer-logoarea">
                <img src="{{ asset('assets/img/logo/logo.png') }}" alt="housebox">
                <div class="space24"></div>
                <div class="space24"></div>
                
              </div>
            </div>

     <div class="col-lg-3 col-md-6">
          <div class="footer-content">
            <h3>Navigasi Cepat</h3>
            <div class="space4"></div>
            <ul>
              <li><a href="/">Beranda</a></li>
              <li><a href="/pelayanan-kami">Pelayanan Kami</a></li>
              <li><a href="/lowongan-kerja">Lowongan Kerja</a></li>
              <li><a href="/tentang-kami">Tentang Kami</a></li>
              <li><a href="/kontak-kami">Kontak Kami</a></li>
            </ul>
          </div>
        </div>

        <div class="col-lg-4 col-md-6">
          <div class="footer-content2">
            <h3>Alamat Kami</h3>
            <div class="space4"></div>
            <ul>

              <li><a href="#"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                    <path d="M18.364 17.364L12 23.7279L5.63604 17.364C2.12132 13.8492 2.12132 8.15076 5.63604 4.63604C9.15076 1.12132 14.8492 1.12132 18.364 4.63604C21.8787 8.15076 21.8787 13.8492 18.364 17.364ZM12 15C14.2091 15 16 13.2091 16 11C16 8.79086 14.2091 7 12 7C9.79086 7 8 8.79086 8 11C8 13.2091 9.79086 15 12 15ZM12 13C10.8954 13 10 12.1046 10 11C10 9.89543 10.8954 9 12 9C13.1046 9 14 9.89543 14 11C14 12.1046 13.1046 13 12 13Z"></path>
                  </svg><span>Plaza Metropolitan Blok B AL NO. 7-8 Jl Sultan Hasanudin Tambun - Bekasi</span></a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="space60"></div>
      <div class="row">
        <div class="col-lg-12">
          <div class="copyright text-center">
            <p>©Copyright <span id="year"></span> - Sangkuriang Tech</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--===== FOOTER AREA ENDS =======-->

  <!--===== JS SCRIPT LINK =======-->
  <script src="{{ asset('assets/js/plugins/bootstrap.min.js') }}"></script>
  <script src="{{ asset('assets/js/plugins/fontawesome.js') }}"></script>
  <script src="{{ asset('assets/js/plugins/aos.js') }}"></script>
  <script src="{{ asset('assets/js/plugins/counter.js') }}"></script>
  <script src="{{ asset('assets/js/plugins/gsap.min.js') }}"></script>
  <script src="{{ asset('assets/js/plugins/ScrollTrigger.min.js') }}"></script>
  <script src="{{ asset('assets/js/plugins/Splitetext.js') }}"></script>
  <script src="{{ asset('assets/js/plugins/sidebar.js') }}"></script>
  <script src="{{ asset('assets/js/plugins/swiper-slider.js') }}"></script>
  <script src="{{ asset('assets/js/plugins/magnific-popup.js') }}"></script>
  <script src="{{ asset('assets/js/plugins/mobilemenu.js') }}"></script>
  <script src="{{ asset('assets/js/plugins/owlcarousel.min.js') }}"></script>
  <script src="{{ asset('assets/js/plugins/nice-select.js') }}"></script>
  <script src="{{ asset('assets/js/plugins/waypoints.js') }}"></script>
  <script src="{{ asset('assets/js/plugins/slick-slider.js') }}"></script>
  <script src="{{ asset('assets/js/plugins/circle-progress.js') }}"></script>
  <script src="{{ asset('assets/js/main.js') }}"></script>
  <script>
    document.getElementById("year").textContent = new Date().getFullYear();
  </script>

</body>
</html>