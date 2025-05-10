<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>MSIP</title>

  <!--=====FAB ICON=======-->
  <link rel="shortcut icon" href="{{ asset('assets/img/logo/logo.png') }}" type="image/x-icon">

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

  <!--=====  JS SCRIPT LINK =======-->
  <script src="{{ asset('assets/js/plugins/jquery-3-7-1.min.js') }}"></script>
</head>

<body class="homepage1-body">

  <!--===== PRELOADER STARTS =======-->
  <div class="preloader">
    <div class="loading-container">
      <div class="loading"></div>
      <div id="loading-icon"><img src="{{ asset('assets/img/logo/preloader.png') }}" alt="housebox"></div>
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
            <div class="header-top-area">
              <ul class="header-content">
                <li><a href="#"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                      <path d="M3 3H21C21.5523 3 22 3.44772 22 4V20C22 20.5523 21.5523 21 21 21H3C2.44772 21 2 20.5523 2 20V4C2 3.44772 2.44772 3 3 3ZM12.0606 11.6829L5.64722 6.2377L4.35278 7.7623L12.0731 14.3171L19.6544 7.75616L18.3456 6.24384L12.0606 11.6829Z"></path>
                    </svg> hrd@misulisuburperdana.com</a> <span> | </span></li>
                <li><a href="#"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                      <path d="M3 3H21C21.5523 3 22 3.44772 22 4V20C22 20.5523 21.5523 21 21 21H3C2.44772 21 2 20.5523 2 20V4C2 3.44772 2.44772 3 3 3ZM12.0606 11.6829L5.64722 6.2377L4.35278 7.7623L12.0731 14.3171L19.6544 7.75616L18.3456 6.24384L12.0606 11.6829Z"></path>
                    </svg> misuli_msp@yahoo.co.id</a> <span> | </span></li>
                <li><a href="tel:(234)345-4574"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                      <path d="M21 16.42V19.9561C21 20.4811 20.5941 20.9167 20.0705 20.9537C19.6331 20.9846 19.2763 21 19 21C10.1634 21 3 13.8366 3 5C3 4.72371 3.01545 4.36687 3.04635 3.9295C3.08337 3.40588 3.51894 3 4.04386 3H7.5801C7.83678 3 8.05176 3.19442 8.07753 3.4498C8.10067 3.67907 8.12218 3.86314 8.14207 4.00202C8.34435 5.41472 8.75753 6.75936 9.3487 8.00303C9.44359 8.20265 9.38171 8.44159 9.20185 8.57006L7.04355 10.1118C8.35752 13.1811 10.8189 15.6425 13.8882 16.9565L15.4271 14.8019C15.5572 14.6199 15.799 14.5573 16.001 14.6532C17.2446 15.2439 18.5891 15.6566 20.0016 15.8584C20.1396 15.8782 20.3225 15.8995 20.5502 15.9225C20.8056 15.9483 21 16.1633 21 16.42Z"></path>
                    </svg> 021 - 8833 2376</a><span> | </span></li>
                <li><a href="tel:(234)345-4574"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                      <path d="M21 16.42V19.9561C21 20.4811 20.5941 20.9167 20.0705 20.9537C19.6331 20.9846 19.2763 21 19 21C10.1634 21 3 13.8366 3 5C3 4.72371 3.01545 4.36687 3.04635 3.9295C3.08337 3.40588 3.51894 3 4.04386 3H7.5801C7.83678 3 8.05176 3.19442 8.07753 3.4498C8.10067 3.67907 8.12218 3.86314 8.14207 4.00202C8.34435 5.41472 8.75753 6.75936 9.3487 8.00303C9.44359 8.20265 9.38171 8.44159 9.20185 8.57006L7.04355 10.1118C8.35752 13.1811 10.8189 15.6425 13.8882 16.9565L15.4271 14.8019C15.5572 14.6199 15.799 14.5573 16.001 14.6532C17.2446 15.2439 18.5891 15.6566 20.0016 15.8584C20.1396 15.8782 20.3225 15.8995 20.5502 15.9225C20.8056 15.9483 21 16.1633 21 16.42Z"></path>
                    </svg> 021 - 8833 2010</a><span> | </span></li>
                
              </ul>
            </div>
            <div class="header-elements">
              <div class="site-logo">
                <a href="/"><img src="{{ asset('assets/img/logo/logo.png') }}" alt="housebox"></a>
              </div>
              <div class="main-menu">
                <ul>
                  <li><a href="/" class="plus">Beranda</a>
                    
                  </li>
                  <li><a href="#" class="plus">Pelayanan Kami</a>
                  </li>
                  <li><a href="#" class="plus">Lowongan Kerja</a>
                  </li>
                  <li><a href="#" class="plus">Tentang Kami</a></li>
                  <li><a href="#" class="plus">Kontak Kami</a></li>
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
        <li><a class="active" href="/">Beranda</a></li>
        <li><a href="#">Pelayanan Kami</a></li>
        <li><a href="#">Lowongan Kerja</a></li>
        <li><a href="#">Tentang Kami</a></li>
        <li><a href="#">Kontak Kami</a></li>
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

  <!--===== HERO AREA STARTS =======-->
  <div class="hero-area-slider">
    <div class="hero1-section-area">
      <img src="{{ asset('assets/img/logo/banner1.png') }}" alt="housebox" class="hero-img1">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="hero-header-area text-center">
              <div class="space32"></div>
              <h1>PT MISULI SUBUR PERDANA</h1>
              <div class="space40"></div>
              <div class="btn-area1">
                <a href="/tentang-kami" class="theme-btn1">Tentang Kami <span class="arrow1"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="currentColor">
                      <path d="M12 13H4V11H12V4L20 12L12 20V13Z"></path>
                    </svg></span><span class="arrow2"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="currentColor">
                      <path d="M12 13H4V11H12V4L20 12L12 20V13Z"></path>
                    </svg></span></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="hero1-section-area">
       <img src="{{ asset('assets/img/logo/banner.jpg') }}" alt="housebox" class="hero-img1">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="hero-header-area text-center">
              <div class="space32"></div>
              <h1>PT MISULI SUBUR PERDANA</h1>
              <div class="space40"></div>
              <div class="btn-area1">
                <a href="/tentang-kami" class="theme-btn1">Tentang Kami <span class="arrow1"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="currentColor">
                      <path d="M12 13H4V11H12V4L20 12L12 20V13Z"></path>
                    </svg></span><span class="arrow2"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="currentColor">
                      <path d="M12 13H4V11H12V4L20 12L12 20V13Z"></path>
                    </svg></span></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="testimonial-arrows">
    <div class="testimonial-prev-arrow">
      <button><i class="fa-solid fa-angle-left"></i></button>
    </div>
    <div class="testimonial-next-arrow">
      <button><i class="fa-solid fa-angle-right"></i></button>
    </div>
  </div>
  <!--===== HERO AREA ENDS =======-->

  <!--===== ABOUT AREA STARTS =======-->
  <div class="about1-section-area sp1">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6">
          <div class="about-images-area">
            <div class="img2 image-anime reveal">
              <img src="{{ asset('assets/img/logo/banner3.png') }}" alt="bannere3">
            </div>
            <div class="img1 image-anime reveal">
              <img src="{{ asset('assets/img/logo/banner4.png') }}" alt="banner4">
            </div>
            <div class="author-img aniamtion-key-1">
              <img src="{{ asset('assets/img/logo/logo.png') }}" alt="logo">
            </div>
          </div>
        </div>
        <div class="col-lg-1"></div>
        <div class="col-lg-5">
          <div class="about-heading heading1">
            <h5 data-aos="fade-left" data-aos-duration="800">Tentang Kami</h5>
            <div class="space18"></div>
            <p data-aos="fade-left" data-aos-duration="900">Kami adalah perusahaan yang bergerak di bidang pelayanan Jasa Alih Daya Pemborongan pekerjaan, penyedia, penempatan tenaga kerja, jasa kebersihan, jasa Perawatan dan Pemeliharaan Taman (Cleaning) dan jasa pengamanan (SATPAM).</p>
            <div class="space32"></div>
            <div class="btn-area1" data-aos="fade-left" data-aos-duration="1100">
              <a href="/tentang-kami" class="theme-btn1">Tentang Kami <span class="arrow1"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="currentColor">
                    <path d="M12 13H4V11H12V4L20 12L12 20V13Z"></path>
                  </svg></span><span class="arrow2"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="currentColor">
                    <path d="M12 13H4V11H12V4L20 12L12 20V13Z"></path>
                  </svg></span></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <!--===== PROJECT AREA ENDS =======-->

  <!--===== ITEMS AREA STARTS =======-->
  <div class="items-section-area sp1" style="background-image: url(assets/img/all-images/bg/bg2.png); background-position: center; background-repeat: no-repeat; background-size: cover; background-attachment: fixed;">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-4">
          <div class="item-header heading1">
            <h5 data-aos="fade-left" data-aos-duration="800">Lowongan Kerja</h5>
            <div class="space16"></div>
            <p data-aos="fade-left" data-aos-duration="900">Temukan lowongan kerja dengan perusahaan yang sudah bermitra dengan kami.</p>
            <div class="space28"></div>
            <div class="btn-area1" data-aos="fade-left" data-aos-duration="1000">
              <a href="/lowongan-kerja" class="theme-btn1">Selengkapnya <span class="arrow1"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="currentColor">
                    <path d="M12 13H4V11H12V4L20 12L12 20V13Z"></path>
                  </svg></span><span class="arrow2"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="currentColor">
                    <path d="M12 13H4V11H12V4L20 12L12 20V13Z"></path>
                  </svg></span></a>
            </div>
          </div>
        </div>
        <div class="col-lg-3"></div>
        <div class="col-lg-4">
          <div class="box-slider">
            <div class="item-featured-boxarea">
              <h5><span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                    <path d="M12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12C22 17.5228 17.5228 22 12 22ZM12 20C16.4183 20 20 16.4183 20 12C20 7.58172 16.4183 4 12 4C7.58172 4 4 7.58172 4 12C4 16.4183 7.58172 20 12 20ZM7 11.5L16 8L12.5 17.0021L11 13L7 11.5Z"></path>
                  </svg></span> 60002 Just Mead East Alfonso</h5>
              <div class="space20"></div>
              <h2>Moon Light Villa</h2>
              <div class="space28"></div>
              <h3><s>$1.900,000</s>$1.800,000</h3>
              <div class="space28"></div>
              <div class="btn-area1">
                <a href="sidebar-grid" class="theme-btn1">Schedule Visit <span class="arrow1"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="currentColor">
                      <path d="M12 13H4V11H12V4L20 12L12 20V13Z"></path>
                    </svg></span><span class="arrow2"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="currentColor">
                      <path d="M12 13H4V11H12V4L20 12L12 20V13Z"></path>
                    </svg></span></a>
              </div>
            </div>

            <div class="item-featured-boxarea">
              <h5><span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                    <path d="M12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12C22 17.5228 17.5228 22 12 22ZM12 20C16.4183 20 20 16.4183 20 12C20 7.58172 16.4183 4 12 4C7.58172 4 4 7.58172 4 12C4 16.4183 7.58172 20 12 20ZM7 11.5L16 8L12.5 17.0021L11 13L7 11.5Z"></path>
                  </svg></span> 60002 Just Mead East Alfonso</h5>
              <div class="space20"></div>
              <h2>Moon Light Villa</h2>
              <div class="space28"></div>
              <h3><s>$1.900,000</s>$1.800,000</h3>
              <div class="space28"></div>
              <div class="btn-area1">
                <a href="sidebar-grid" class="theme-btn1">Schedule Visit <span class="arrow1"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="currentColor">
                      <path d="M12 13H4V11H12V4L20 12L12 20V13Z"></path>
                    </svg></span><span class="arrow2"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="currentColor">
                      <path d="M12 13H4V11H12V4L20 12L12 20V13Z"></path>
                    </svg></span></a>
              </div>
            </div>

            <div class="item-featured-boxarea">
              <h5><span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                    <path d="M12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12C22 17.5228 17.5228 22 12 22ZM12 20C16.4183 20 20 16.4183 20 12C20 7.58172 16.4183 4 12 4C7.58172 4 4 7.58172 4 12C4 16.4183 7.58172 20 12 20ZM7 11.5L16 8L12.5 17.0021L11 13L7 11.5Z"></path>
                  </svg></span> 60002 Just Mead East Alfonso</h5>
              <div class="space20"></div>
              <h2>Moon Light Villa</h2>
              <div class="space28"></div>
              <h3><s>$1.900,000</s>$1.800,000</h3>
              <div class="space28"></div>
              <div class="btn-area1">
                <a href="sidebar-grid" class="theme-btn1">Schedule Visit <span class="arrow1"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="currentColor">
                      <path d="M12 13H4V11H12V4L20 12L12 20V13Z"></path>
                    </svg></span><span class="arrow2"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="currentColor">
                      <path d="M12 13H4V11H12V4L20 12L12 20V13Z"></path>
                    </svg></span></a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-1">
          <div class="testimonial-arrows">
            <div class="prev-arrow">
              <button><i class="fa-solid fa-angle-up"></i></button>
            </div>
            <div class="next-arrow">
              <button><i class="fa-solid fa-angle-down"></i></button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--===== ITEMS AREA ENDS =======-->

  <!--===== PROPERTY-LOCATION AREA STARTS =======-->
  <div class="property-location-section-area sp1">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 m-auto">
          <div class="property-headeing heading1 space-margin60 text-center">
            <h2 class="text-anime-style-3">Sertifikat ISO</h2>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-12" data-aos="fade-up" data-aos-duration="1000">
          <div class="property-single-slider owl-carousel">
            <div class="propety-single-boxarea">
              <div class="img1 image-anime">
                <img src="{{ asset('assets/img/logo/sertifikat-ISO14001.png') }}" alt="housebox">
              </div>
              <a href="property-details-v1">ISO 14001</a>
            </div>

            <div class="propety-single-boxarea">
              <div class="img1 image-anime">
                <img src="{{ asset('assets/img/logo/sertifikat-ISO45001.png') }}" alt="housebox">
              </div>
              <a href="property-details-v1">ISO 45001</a>
            </div>

            <div class="propety-single-boxarea">
              <div class="img1 image-anime">
                <img src="{{ asset('assets/img/logo/sertifikat-ISO9001.png') }}" alt="housebox">
              </div>
              <a href="property-details-v1">ISO 9001</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--===== PROPERTY-LOCATION AREA ENDS =======-->

  <!--===== TESTIMONIAL AREA STARTS =======-->
  <div class="testimonial1-section-area sp1" style="background-image: url(assets/img/all-images/bg/bg1.png); background-position: center; background-repeat: no-repeat; background-size: cover;">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div class="testimonial-header space-margin60 heading1">
            <div class="space20"></div>
            <h2 class="text-anime-style-3">Kenapa Memilih Kami?</h2>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-12">
          <div class="testimonialmain-slider">
            <div class="row align-items-center">
              <div class="col-lg-5">
                <div class="images-area2 slider2">
                  <div class="img1 image-anime">
                    <img src="{{ asset('assets/img/all-images/testimonial/testimonial-img1.png') }}" alt="housebox">
                  </div>
                  <div class="img1 image-anime">
                    <img src="{{ asset('assets/img/all-images/testimonial/testimonial-img1-1.png') }}" alt="housebox">
                  </div>
                  <div class="img1 image-anime">
                    <img src="{{ asset('assets/img/all-images/testimonial/testimonial-img1-2.png') }}" alt="housebox">
                  </div>
                  <div class="img1 image-anime">
                    <img src="{{ asset('assets/img/all-images/testimonial/testimonial-img1-3.png') }}" alt="housebox">
                  </div>
                </div>
              </div>
              <div class="col-lg-7">
                <div class="testimonial-slider-area slider1">
                  <div class="testimonial-box">
                    <img src="{{ asset('assets/img/icons/quoto-icon1.svg') }}" alt="housebox">
                    <div class="space16"></div>
                    <p>"When I decided to sell my home, I was overwhelmed with where to start. HouseBox stepped in with a clear plan, professional marketing, constant communicate. Within two weeks, my house was sold above asking.”</p>
                    <div class="space32"></div>
                    <div class="test-images">
                      <div class="auhtor-area">
                        <div class="img1">
                          <img src="{{ asset('assets/img/all-images/testimonial/testimonial-img2.png') }}" alt="housebox">
                        </div>
                        <div class="text">
                          <a href="#">Shakib Mahmud</a>
                          <div class="space10"></div>
                          <p>Happy Client</p>
                        </div>
                      </div>
                      <img src="{{ asset('assets/img/elements/brand1.png') }}" alt="housebox" class="brand1">
                    </div>
                  </div>
                  <div class="testimonial-box">
                    <img src="{{ asset('assets/img/icons/quoto-icon1.svg') }}" alt="housebox">
                    <div class="space16"></div>
                    <p>"Selling our home felt like a huge challenge until we found. Their team guided us every step of the way, from staging the property to negotiating offers. Within days, our home was sold for more than we expected."</p>
                    <div class="space32"></div>
                    <div class="test-images">
                      <div class="auhtor-area">
                        <div class="img1">
                          <img src="{{ asset('assets/img/all-images/testimonial/testimonial-img3.png') }}" alt="housebox">
                        </div>
                        <div class="text">
                          <a href="#">Xavi Alonso</a>
                          <div class="space10"></div>
                          <p>Happy Client</p>
                        </div>
                      </div>
                      <img src="{{ asset('assets/img/elements/brand1.png') }}" alt="housebox" class="brand1">
                    </div>
                  </div>

                  <div class="testimonial-box">
                    <img src="{{ asset('assets/img/icons/quoto-icon1.svg') }}" alt="housebox">
                    <div class="space16"></div>
                    <p>"We were first-time buyers, and the process seemed daunting. made everything so simple and stress-free. They listened to our needs, showed us perfect options"</p>
                    <div class="space32"></div>
                    <div class="test-images">
                      <div class="auhtor-area">
                        <div class="img1">
                          <img src="{{ asset('assets/img/all-images/testimonial/testimonial-img4.png') }}" alt="housebox">
                        </div>
                        <div class="text">
                          <a href="#">Granit Xhaka</a>
                          <div class="space10"></div>
                          <p>Happy Client</p>
                        </div>
                      </div>
                      <img src="{{ asset('assets/img/elements/brand1.png') }}" alt="housebox" class="brand1">
                    </div>
                  </div>

                  <div class="testimonial-box">
                    <img src="{{ asset('assets/img/icons/quoto-icon1.svg') }}" alt="housebox">
                    <div class="space16"></div>
                    <p>"I relocated for work and needed to sell my house quickly. [Your Real Estate Agency] delivered! They handled everything smoothly, and I could focus on my move without worry. I highly recommend their services."</p>
                    <div class="space32"></div>
                    <div class="test-images">
                      <div class="auhtor-area">
                        <div class="img1">
                          <img src="assets/img/all-images/testimonial/testimonial-img5.png" alt="housebox">
                        </div>
                        <div class="text">
                          <a href="#">Alex Garcia</a>
                          <div class="space10"></div>
                          <p>Happy Client</p>
                        </div>
                      </div>
                      <img src="{{ asset('assets/img/elements/brand1.png') }}" alt="housebox" class="brand1">
                    </div>
                  </div>
                </div>
                <div class="testimonial-arrows">
                  <div class="prev-arrow">
                    <button><i class="fa-solid fa-angle-left"></i></button>
                  </div>
                  <div class="next-arrow">
                    <button><i class="fa-solid fa-angle-right"></i></button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--===== TESTIMONIAL AREA ENDS =======-->

  <!--===== TEAM AREA STARTS =======-->
  <div class="team1-section-area sp2">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 m-auto">
          <div class="team-header heading1 space-margin60 text-center">
            <h5 data-aos="fade-left" data-aos-duration="800">Experts Behind HouseBox</h5>
            <div class="space20"></div>
            <h2 class="text-anime-style-3">The HouseBox Dream Team</h2>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-3 col-md-6" data-aos="zoom-out" data-aos-duration="800">
          <div class="team-widget-boxarea">
            <div class="img1 image-anime">
              <img src="{{ asset('assets/img/all-images/team/team-img1.png') }}" alt="housebox">
              <div class="share">
                <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="17" height="18" viewBox="0 0 17 18" fill="none">
                    <path
                      d="M14.1333 12.7229C13.4578 12.7229 12.8533 12.994 12.3911 13.4187L6.05332 9.66867C6.09777 9.46084 6.13332 9.25301 6.13332 9.03614C6.13332 8.81928 6.09777 8.61145 6.05332 8.40361L12.32 4.68976C12.8 5.14157 13.4311 5.42169 14.1333 5.42169C15.6089 5.42169 16.8 4.21084 16.8 2.71084C16.8 1.21084 15.6089 0 14.1333 0C12.6578 0 11.4667 1.21084 11.4667 2.71084C11.4667 2.92771 11.5022 3.13554 11.5467 3.34337L5.27999 7.05723C4.79999 6.60542 4.16888 6.3253 3.46665 6.3253C1.9911 6.3253 0.799988 7.53614 0.799988 9.03614C0.799988 10.5361 1.9911 11.747 3.46665 11.747C4.16888 11.747 4.79999 11.4669 5.27999 11.0151L11.6089 14.7741C11.5644 14.9639 11.5378 15.1627 11.5378 15.3614C11.5378 16.8163 12.7022 18 14.1333 18C15.5644 18 16.7289 16.8163 16.7289 15.3614C16.7289 13.9066 15.5644 12.7229 14.1333 12.7229Z"
                      fill="white" />
                  </svg></a>
              </div>

              <ul>
                <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                <li><a href="#" class="m-0"><i class="fa-brands fa-instagram"></i></a></li>
              </ul>
            </div>
            <div class="space24"></div>
            <div class="content-area">
              <a href="#">Henry Nicolas</a>
              <div class="space14"></div>
              <p>Founder & CEO</p>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6" data-aos="zoom-out" data-aos-duration="900">
          <div class="team-widget-boxarea">
            <div class="img1 image-anime">
              <img src="{{ asset('assets/img/all-images/team/team-img2.png') }}" alt="housebox">
              <div class="share">
                <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="17" height="18" viewBox="0 0 17 18" fill="none">
                    <path
                      d="M14.1333 12.7229C13.4578 12.7229 12.8533 12.994 12.3911 13.4187L6.05332 9.66867C6.09777 9.46084 6.13332 9.25301 6.13332 9.03614C6.13332 8.81928 6.09777 8.61145 6.05332 8.40361L12.32 4.68976C12.8 5.14157 13.4311 5.42169 14.1333 5.42169C15.6089 5.42169 16.8 4.21084 16.8 2.71084C16.8 1.21084 15.6089 0 14.1333 0C12.6578 0 11.4667 1.21084 11.4667 2.71084C11.4667 2.92771 11.5022 3.13554 11.5467 3.34337L5.27999 7.05723C4.79999 6.60542 4.16888 6.3253 3.46665 6.3253C1.9911 6.3253 0.799988 7.53614 0.799988 9.03614C0.799988 10.5361 1.9911 11.747 3.46665 11.747C4.16888 11.747 4.79999 11.4669 5.27999 11.0151L11.6089 14.7741C11.5644 14.9639 11.5378 15.1627 11.5378 15.3614C11.5378 16.8163 12.7022 18 14.1333 18C15.5644 18 16.7289 16.8163 16.7289 15.3614C16.7289 13.9066 15.5644 12.7229 14.1333 12.7229Z"
                      fill="white" />
                  </svg></a>
              </div>

              <ul>
                <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                <li><a href="#" class="m-0"><i class="fa-brands fa-instagram"></i></a></li>
              </ul>
            </div>
            <div class="space24"></div>
            <div class="content-area">
              <a href="#">Sarah Johnson</a>
              <div class="space14"></div>
              <p>Real Estate Agent</p>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6" data-aos="zoom-out" data-aos-duration="1000">
          <div class="team-widget-boxarea">
            <div class="img1 image-anime">
              <img src="{{ asset('assets/img/all-images/team/team-img3.png') }}" alt="housebox">
              <div class="share">
                <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="17" height="18" viewBox="0 0 17 18" fill="none">
                    <path
                      d="M14.1333 12.7229C13.4578 12.7229 12.8533 12.994 12.3911 13.4187L6.05332 9.66867C6.09777 9.46084 6.13332 9.25301 6.13332 9.03614C6.13332 8.81928 6.09777 8.61145 6.05332 8.40361L12.32 4.68976C12.8 5.14157 13.4311 5.42169 14.1333 5.42169C15.6089 5.42169 16.8 4.21084 16.8 2.71084C16.8 1.21084 15.6089 0 14.1333 0C12.6578 0 11.4667 1.21084 11.4667 2.71084C11.4667 2.92771 11.5022 3.13554 11.5467 3.34337L5.27999 7.05723C4.79999 6.60542 4.16888 6.3253 3.46665 6.3253C1.9911 6.3253 0.799988 7.53614 0.799988 9.03614C0.799988 10.5361 1.9911 11.747 3.46665 11.747C4.16888 11.747 4.79999 11.4669 5.27999 11.0151L11.6089 14.7741C11.5644 14.9639 11.5378 15.1627 11.5378 15.3614C11.5378 16.8163 12.7022 18 14.1333 18C15.5644 18 16.7289 16.8163 16.7289 15.3614C16.7289 13.9066 15.5644 12.7229 14.1333 12.7229Z"
                      fill="white" />
                  </svg></a>
              </div>

              <ul>
                <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                <li><a href="#" class="m-0"><i class="fa-brands fa-instagram"></i></a></li>
              </ul>
            </div>
            <div class="space24"></div>
            <div class="content-area">
              <a href="#">Sohia Rodriguez</a>
              <div class="space14"></div>
              <p>Marketing Director</p>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6" data-aos="zoom-out" data-aos-duration="1200">
          <div class="team-widget-boxarea">
            <div class="img1 image-anime">
              <img src="{{ asset('assets/img/all-images/team/team-img4.png') }}" alt="housebox">
              <div class="share">
                <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="17" height="18" viewBox="0 0 17 18" fill="none">
                    <path
                      d="M14.1333 12.7229C13.4578 12.7229 12.8533 12.994 12.3911 13.4187L6.05332 9.66867C6.09777 9.46084 6.13332 9.25301 6.13332 9.03614C6.13332 8.81928 6.09777 8.61145 6.05332 8.40361L12.32 4.68976C12.8 5.14157 13.4311 5.42169 14.1333 5.42169C15.6089 5.42169 16.8 4.21084 16.8 2.71084C16.8 1.21084 15.6089 0 14.1333 0C12.6578 0 11.4667 1.21084 11.4667 2.71084C11.4667 2.92771 11.5022 3.13554 11.5467 3.34337L5.27999 7.05723C4.79999 6.60542 4.16888 6.3253 3.46665 6.3253C1.9911 6.3253 0.799988 7.53614 0.799988 9.03614C0.799988 10.5361 1.9911 11.747 3.46665 11.747C4.16888 11.747 4.79999 11.4669 5.27999 11.0151L11.6089 14.7741C11.5644 14.9639 11.5378 15.1627 11.5378 15.3614C11.5378 16.8163 12.7022 18 14.1333 18C15.5644 18 16.7289 16.8163 16.7289 15.3614C16.7289 13.9066 15.5644 12.7229 14.1333 12.7229Z"
                      fill="white" />
                  </svg></a>
              </div>

              <ul>
                <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                <li><a href="#" class="m-0"><i class="fa-brands fa-instagram"></i></a></li>
              </ul>
            </div>
            <div class="space24"></div>
            <div class="content-area">
              <a href="#">Daniel Williams</a>
              <div class="space14"></div>
              <p>Services Manager</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--===== TEAM AREA ENDS =======-->

  <!--===== CTA AREA STARTS =======-->
  <div class="cta1-section-area">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="cta-bg-area" style="background-image: url(assets/img/all-images/bg/cta-bg1.png); background-position: center; background-repeat: no-repeat; background-size: cover;">
            <div class="row align-items-center">
              <div class="col-lg-5">
                <div class="cta-header">
                  <h2 class="text-anime-style-3">Step Into Your Dream Home with HouseBox</h2>
                  <div class="space16"></div>
                  <p data-aos="fade-left" data-aos-duration="1000">At HouseBox, we believe your next home is more than just a place – it’s where your future begins you’re buy.</p>
                </div>
              </div>
              <div class="col-lg-2"></div>
              <div class="col-lg-5" data-aos="zoom-in" data-aos-duration="1000">
                <div class="btn-area1 text-center">
                  <a href="sidebar-grid" class="theme-btn1">Find Your Dream Home <span class="arrow1"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="currentColor">
                        <path d="M12 13H4V11H12V4L20 12L12 20V13Z"></path>
                      </svg></span><span class="arrow2"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="currentColor">
                        <path d="M12 13H4V11H12V4L20 12L12 20V13Z"></path>
                      </svg></span></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--===== CTA AREA ENDS =======-->

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
            <h3>Quick Links</h3>
            <div class="space4"></div>
            <ul>
              <li><a href="index.html">Home</a></li>
              <li><a href="sidebar-grid">Listing</a></li>
              <li><a href="property-halfmap-grid">Properties</a></li>
              <li><a href="blog">Our Blog</a></li>
              <li><a href="dashboard">Dashboard</a></li>
            </ul>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <div class="footer-content2">
            <h3>Kontak</h3>
            <div class="space4"></div>
            <ul>
              <li><a href="tel:#+11234567890"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                    <path d="M21 16.42V19.9561C21 20.4811 20.5941 20.9167 20.0705 20.9537C19.6331 20.9846 19.2763 21 19 21C10.1634 21 3 13.8366 3 5C3 4.72371 3.01545 4.36687 3.04635 3.9295C3.08337 3.40588 3.51894 3 4.04386 3H7.5801C7.83678 3 8.05176 3.19442 8.07753 3.4498C8.10067 3.67907 8.12218 3.86314 8.14207 4.00202C8.34435 5.41472 8.75753 6.75936 9.3487 8.00303C9.44359 8.20265 9.38171 8.44159 9.20185 8.57006L7.04355 10.1118C8.35752 13.1811 10.8189 15.6425 13.8882 16.9565L15.4271 14.8019C15.5572 14.6199 15.799 14.5573 16.001 14.6532C17.2446 15.2439 18.5891 15.6566 20.0016 15.8584C20.1396 15.8782 20.3225 15.8995 20.5502 15.9225C20.8056 15.9483 21 16.1633 21 16.42Z"></path>
                  </svg>+1 123 456 7890</a></li>

              <li><a href="#"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                    <path d="M18.364 17.364L12 23.7279L5.63604 17.364C2.12132 13.8492 2.12132 8.15076 5.63604 4.63604C9.15076 1.12132 14.8492 1.12132 18.364 4.63604C21.8787 8.15076 21.8787 13.8492 18.364 17.364ZM12 15C14.2091 15 16 13.2091 16 11C16 8.79086 14.2091 7 12 7C9.79086 7 8 8.79086 8 11C8 13.2091 9.79086 15 12 15ZM12 13C10.8954 13 10 12.1046 10 11C10 9.89543 10.8954 9 12 9C13.1046 9 14 9.89543 14 11C14 12.1046 13.1046 13 12 13Z"></path>
                  </svg> 421 Allen, Mexico 4233</a></li>

              <li><a href="mailto:houseboxesate.com"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                    <path d="M3 3H21C21.5523 3 22 3.44772 22 4V20C22 20.5523 21.5523 21 21 21H3C2.44772 21 2 20.5523 2 20V4C2 3.44772 2.44772 3 3 3ZM12.0606 11.6829L5.64722 6.2377L4.35278 7.7623L12.0731 14.3171L19.6544 7.75616L18.3456 6.24384L12.0606 11.6829Z"></path>
                  </svg> houseboxesate@com</a></li>

              <li><a href="#"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                    <path
                      d="M12 2C17.5228 2 22 6.47715 22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2ZM16.0043 12.8777C15.6589 12.3533 15.4097 11.9746 14.4622 12.1248C12.6717 12.409 12.4732 12.7224 12.3877 13.2375L12.3636 13.3943L12.3393 13.5597C12.2416 14.2428 12.2453 14.5012 12.5589 14.8308C13.8241 16.1582 14.582 17.115 14.8116 17.6746C14.9237 17.9484 15.2119 18.7751 15.0136 19.5927C16.2372 19.1066 17.3156 18.3332 18.1653 17.3559C18.2755 16.9821 18.3551 16.5166 18.3551 15.9518V15.8472C18.3551 14.9247 18.3551 14.504 17.7031 14.1314C17.428 13.9751 17.2227 13.881 17.0582 13.8064C16.691 13.6394 16.4479 13.5297 16.1198 13.0499C16.0807 12.9928 16.0425 12.9358 16.0043 12.8777ZM12 3.83333C9.68259 3.83333 7.59062 4.79858 6.1042 6.34896C6.28116 6.47186 6.43537 6.64453 6.54129 6.88256C6.74529 7.34029 6.74529 7.8112 6.74529 8.22764C6.74488 8.55621 6.74442 8.8672 6.84992 9.09302C6.99443 9.40134 7.6164 9.53227 8.16548 9.64736C8.36166 9.68867 8.56395 9.73083 8.74797 9.78176C9.25405 9.92233 9.64554 10.3765 9.95938 10.7412C10.0896 10.8931 10.2819 11.1163 10.3783 11.1717C10.4286 11.1356 10.59 10.9608 10.6699 10.6735C10.7307 10.4547 10.7134 10.2597 10.6239 10.1543C10.0648 9.49445 10.0952 8.2232 10.268 7.75495C10.5402 7.01606 11.3905 7.07058 12.012 7.11097C12.2438 7.12589 12.4626 7.14023 12.6257 7.11976C13.2482 7.04166 13.4396 6.09538 13.575 5.91C13.8671 5.50981 14.7607 4.9071 15.3158 4.53454C14.3025 4.08382 13.1805 3.83333 12 3.83333Z">
                    </path>
                  </svg> houseboxesate.com</a></li>
            </ul>
          </div>
        </div>

        {{-- <div class="col-lg-3 col-md-6">
          <div class="instagram-posts">
            <h3>Instagram Posts</h3>
            <div class="space8"></div>
            <div class="row">
              <div class="col-lg-4 col-4">
                <div class="img1">
                  <img src="{{ asset('assets/img/all-images/footer/footer-img1.png') }}" alt="housebox">
                  <div class="icons">
                    <a href="#"><i class="fa-brands fa-instagram"></i></a>
                  </div>
                </div>
              </div>

              <div class="col-lg-4 col-4">
                <div class="img1">
                  <img src="{{ asset('assets/img/all-images/footer/footer-img2.png') }}" alt="housebox">
                  <div class="icons">
                    <a href="#"><i class="fa-brands fa-instagram"></i></a>
                  </div>
                </div>
              </div>

              <div class="col-lg-4 col-4">
                <div class="img1">
                  <img src="{{ asset('assets/img/all-images/footer/footer-img3.png') }}" alt="housebox">
                  <div class="icons">
                    <a href="#"><i class="fa-brands fa-instagram"></i></a>
                  </div>
                </div>
              </div>

              <div class="col-lg-4 col-4">
                <div class="img1">
                  <img src="{{ asset('assets/img/all-images/footer/footer-img4.png') }}" alt="housebox">
                  <div class="icons">
                    <a href="#"><i class="fa-brands fa-instagram"></i></a>
                  </div>
                </div>
              </div>

              <div class="col-lg-4 col-4">
                <div class="img1">
                  <img src="{{ asset('assets/img/all-images/footer/footer-img5.png') }}" alt="housebox">
                  <div class="icons">
                    <a href="#"><i class="fa-brands fa-instagram"></i></a>
                  </div>
                </div>
              </div>

              <div class="col-lg-4 col-4">
                <div class="img1">
                  <img src="{{ asset('assets/img/all-images/footer/footer-img6.png') }}" alt="housebox">
                  <div class="icons">
                    <a href="#"><i class="fa-brands fa-instagram"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div> --}}
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