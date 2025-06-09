@extends('master')
@section('title')
Beranda
@endsection
@section('content')
<div class="hero-area-slider">
  <div class="hero1-section-area">
    <img src="{{ asset('assets/img/logo/galeri14.jpeg') }}" alt="housebox" class="hero-img1">
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
    <img src="{{ asset('assets/img/logo/galeri12.jpeg') }}" alt="housebox" class="hero-img1">
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
    <img src="{{ asset('assets/img/logo/galeri11.jpeg') }}" alt="housebox" class="hero-img1">
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
            <img src="{{ asset('assets/img/logo/galeri1.jpeg') }}" alt="banner4">
          </div>
          {{-- <div class="author-img aniamtion-key-1">
              <img src="{{ asset('assets/img/logo/logo.png') }}" style="width: 20%" alt="logo">
        </div> --}}
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
<div class="items-section-area sp1" style="background-image: url(assets/img/logo/banner5.jpg); background-position: center; background-repeat: no-repeat; background-size: cover; background-attachment: fixed;">
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
        <div class="box-slider" style="height: 500px;">
          <div class="item-featured-boxarea">
            <h5><span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                  <path d="M12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12C22 17.5228 17.5228 22 12 22ZM12 20C16.4183 20 20 16.4183 20 12C20 7.58172 16.4183 4 12 4C7.58172 4 4 7.58172 4 12C4 16.4183 7.58172 20 12 20ZM7 11.5L16 8L12.5 17.0021L11 13L7 11.5Z"></path>
                </svg></span> Lowongan Kerja Lapangan</h5>
            <div class="space20"></div>
            <h2>Staff - Admin</h2>
            <div class="space28"></div>
            <ul>
              <li>- Pengalaman 1 tahun di posisi yang sama</li>
              <li>- Pendidikan min SMA</li>
              <li>- Perempuan max umur 30 tahun</li>
              <li>- Menguasai Excel (vlookup, average, table, pivot)</li>
              <li>- Penempatan Bekasi, marunda dan Surabaya, Asem Rowo</li>
            </ul>
            <div class="space28"></div>
            <div class="btn-area1">
              <a href="/lowongan-kerja" class="theme-btn1">Schedule Visit <span class="arrow1"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="currentColor">
                    <path d="M12 13H4V11H12V4L20 12L12 20V13Z"></path>
                  </svg></span><span class="arrow2"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="currentColor">
                    <path d="M12 13H4V11H12V4L20 12L12 20V13Z"></path>
                  </svg></span></a>
            </div>
          </div>

          <div class="item-featured-boxarea">
            <h5><span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                  <path d="M12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12C22 17.5228 17.5228 22 12 22ZM12 20C16.4183 20 20 16.4183 20 12C20 7.58172 16.4183 4 12 4C7.58172 4 4 7.58172 4 12C4 16.4183 7.58172 20 12 20ZM7 11.5L16 8L12.5 17.0021L11 13L7 11.5Z"></path>
                </svg></span> Lowongan Kerja Lapangan</h5>
            <div class="space20"></div>
            <h2>Staff - Leader</h2>
            <div class="space28"></div>
            <ul>
              <li>- Pengalaman 1 tahun di posisi yang sama</li>
              <li>- Pendidikan min SMA</li>
              <li>- Perempuan max umur 30 tahun</li>
              <li>- Menguasai Excel (vlookup, average, table, pivot)</li>
              <li>- Penempatan Bekasi, marunda dan Surabaya, Asem Rowo</li>
            </ul>
            <div class="space28"></div>
            <div class="btn-area1">
              <a href="/lowongan-kerja" class="theme-btn1">Schedule Visit <span class="arrow1"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="currentColor">
                    <path d="M12 13H4V11H12V4L20 12L12 20V13Z"></path>
                  </svg></span><span class="arrow2"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="currentColor">
                    <path d="M12 13H4V11H12V4L20 12L12 20V13Z"></path>
                  </svg></span></a>
            </div>
          </div>

          <div class="item-featured-boxarea">
            <h5><span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                  <path d="M12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12C22 17.5228 17.5228 22 12 22ZM12 20C16.4183 20 20 16.4183 20 12C20 7.58172 16.4183 4 12 4C7.58172 4 4 7.58172 4 12C4 16.4183 7.58172 20 12 20ZM7 11.5L16 8L12.5 17.0021L11 13L7 11.5Z"></path>
                </svg></span> Lowongan Kerja Lapangan</h5>
            <div class="space20"></div>
            <h2>Operator - Reach Truck/Forklift</h2>
            <div class="space28"></div>
            <ul>
              <li>- Memiliki SIO aktif</li>
              <li>- Pendidikan min SMA</li>
              <li>- Domisili Surabaya</li>
            </ul>
            <div class="space28"></div>
            <div class="btn-area1">
              <a href="/lowongan-kerja" class="theme-btn1">Schedule Visit <span class="arrow1"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="currentColor">
                    <path d="M12 13H4V11H12V4L20 12L12 20V13Z"></path>
                  </svg></span><span class="arrow2"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="currentColor">
                    <path d="M12 13H4V11H12V4L20 12L12 20V13Z"></path>
                  </svg></span></a>
            </div>
          </div>

          <div class="item-featured-boxarea">
            <h5><span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                  <path d="M12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12C22 17.5228 17.5228 22 12 22ZM12 20C16.4183 20 20 16.4183 20 12C20 7.58172 16.4183 4 12 4C7.58172 4 4 7.58172 4 12C4 16.4183 7.58172 20 12 20ZM7 11.5L16 8L12.5 17.0021L11 13L7 11.5Z"></path>
                </svg></span> Lowongan Kerja Office</h5>
            <div class="space20"></div>
            <h2>Programmer</h2>
            <div class="space28"></div>
            <ul>
              <li>- Menguasai bahasa pemprograman C# dengan ASP.NET MVC Framework & .NetCore</li>
              <li>- Menguasai database SQL Server</li>
              <li>- Memahami IIS (Internet Information Services)</li>
              <li>- Kemampuan problem solving</li>
              <li>- Minimal Pengalaman 1-2 tahun Sebagai Programmer</li>
            </ul>
            <div class="space28"></div>
            <div class="btn-area1">
              <a href="/lowongan-kerja" class="theme-btn1">Schedule Visit <span class="arrow1"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="currentColor">
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
                  <img src="{{ asset('assets/img/logo/service2.jpg') }}" alt="housebox">
                </div>
                <div class="img1 image-anime">
                  <img src="{{ asset('assets/img/logo/service1.jpg') }}" alt="housebox">
                </div>
              </div>
            </div>
            <div class="col-lg-7">
              <div class="testimonial-slider-area slider1">
                <div class="testimonial-box">
                  <div class="space16"></div>
                  <p>"Pengalaman dalam mengelola alih daya sejak tahun 2010 yang mengedepankan profesionalisme, kinerja yang baik dan mengutamakan kepuasan customer. Sistem jasa service yang kami laksanakan adalah: Recruitment (Penempatan Tenaga Kerja), alih daya, pemagangan (LPK).”</p>
                  <div class="space32"></div>
                </div>
                <div class="testimonial-box">
                  <div class="space16"></div>
                  <p>"Kami memiliki sumber database dan jaringan yang luas. Mempunyai tim pengelola yang berpengalaman dan handal. Fokus dalam melayani karyawan dan mitra. Kami juga turut melakukan pengawasan dan pembinaan terhadap pelaksanaan kinerja sehingga menciptakan tenaga kerja yang handal."</p>
                  <div class="space32"></div>
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
          <div class="space20"></div>
          <h2 class="text-anime-style-3">Galeri Kami</h2>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-lg-12" data-aos="fade-up" data-aos-duration="1000">
        <div class="property-single-slider owl-carousel">
          <div class="propety-single-boxarea">
            <div class="img1 image-anime">
              <img src="{{ asset('assets/img/logo/galeri2.jpeg') }}" alt="housebox">
            </div>
          </div>

          <div class="propety-single-boxarea">
            <div class="img1 image-anime">
              <img src="{{ asset('assets/img/logo/galeri3.jpeg') }}" alt="housebox">
            </div>
          </div>

          <div class="propety-single-boxarea">
            <div class="img1 image-anime">
              <img src="{{ asset('assets/img/logo/galeri4.jpeg') }}" alt="housebox">
            </div>
          </div>

          <div class="propety-single-boxarea">
            <div class="img1 image-anime">
              <img src="{{ asset('assets/img/logo/galeri5.jpeg') }}" alt="housebox">
            </div>
          </div>

          <div class="propety-single-boxarea">
            <div class="img1 image-anime">
              <img src="{{ asset('assets/img/logo/galeri6.jpeg') }}" alt="housebox">
            </div>
          </div>

          <div class="propety-single-boxarea">
            <div class="img1 image-anime">
              <img src="{{ asset('assets/img/logo/galeri7.jpeg') }}" alt="housebox">
            </div>
          </div>

          <div class="propety-single-boxarea">
            <div class="img1 image-anime">
              <img src="{{ asset('assets/img/logo/galeri8.jpeg') }}" alt="housebox">
            </div>
          </div>

          <div class="propety-single-boxarea">
            <div class="img1 image-anime">
              <img src="{{ asset('assets/img/logo/galeri9.jpeg') }}" alt="housebox">
            </div>
          </div>

          <div class="propety-single-boxarea">
            <div class="img1 image-anime">
              <img src="{{ asset('assets/img/logo/galeri10.jpeg') }}" alt="housebox">
            </div>
          </div>

          <div class="propety-single-boxarea">
            <div class="img1 image-anime">
              <img src="{{ asset('assets/img/logo/galeri11.jpeg') }}" alt="housebox">
            </div>
          </div>

          <div class="propety-single-boxarea">
            <div class="img1 image-anime">
              <img src="{{ asset('assets/img/logo/galeri12.jpeg') }}" alt="housebox">
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
</div>
<!--===== TEAM AREA ENDS =======-->
@endsection