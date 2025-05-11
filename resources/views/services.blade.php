@extends('master')
@section('title')
    Pelayanan Kami
@endsection
@section('content')
    <div class="hero-area-slider">
    <div class="hero1-section-area">
      <img src="{{ asset('assets/img/logo/banner1.png') }}" alt="housebox" class="hero-img1">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="hero-header-area text-center">
              <div class="space32"></div>
              <h1>Pelayanan Kami</h1>
              <div class="space40"></div>
            </div>
          </div>
        </div>
      </div>
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
              <img src="{{ asset('assets/img/logo/service1.jpg') }}" alt="service1">
            </div>
            <div class="img1 image-anime reveal">
              <img src="{{ asset('assets/img/logo/service2.jpg') }}" alt="service2">
            </div>
            <div class="author-img aniamtion-key-1">
              <img src="{{ asset('assets/img/logo/logo.png') }}" alt="logo">
            </div>
          </div>
        </div>
        <div class="col-lg-1"></div>
        <div class="col-lg-5">
          <div class="about-heading heading1">
            <h5 data-aos="fade-left" data-aos-duration="800">Pelayanan Kami</h5>
            <div class="space18"></div>
            <p data-aos="fade-left" data-aos-duration="900">Sejak berdiri pada tahun 2010, PT. MISULI SUBUR PERDANA telah menjadi pemimpin dalam layanan alih daya tenaga kerja. Kami berkomitmen untuk menghadirkan profesionalisme tingkat tinggi dan kinerja unggul dalam setiap aspek pelayanan kami. Mengutamakan kepuasan mitra adalah prioritas utama kami.</p>
            <div class="space32"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <!--===== PROJECT AREA ENDS =======-->


  <!--===== TEAM AREA STARTS =======-->
  <div class="team1-section-area sp2">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 m-auto">
          <div class="team-header heading1 space-margin60 text-center">
            <div class="space20"></div>
            <h2 class="text-anime-style-3">Pelayanan Kami</h2>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-4" data-aos="zoom-out" data-aos-duration="800">
          <div class="team-widget-boxarea">
            <div class="img1 image-anime">
              <img src="{{ asset('assets/img/logo/welding.jpg') }}" alt="housebox">
            </div>
            <div class="space24"></div>
            <div class="content-area">
              <a href="#">Welding</a>
              <div class="space14"></div>
              <p>Kami menyediakan jasa welding/las yang professional dan teliti.</p>
            </div>
          </div>
        </div>

        <div class="col-md-4" data-aos="zoom-out" data-aos-duration="900">
          <div class="team-widget-boxarea">
            <div class="img1 image-anime">
              <img src="{{ asset('assets/img/logo/security.jpg') }}" alt="housebox">
            </div>
            <div class="space24"></div>
            <div class="content-area">
              <a href="#">Security Guard</a>
              <div class="space14"></div>
              <p>Kami menyediakan tenaga keamanan yang memiliki sertifikat dan terjamin kualitasnya.</p>
            </div>
          </div>
        </div>

        <div class="col-md-4" data-aos="zoom-out" data-aos-duration="1000">
          <div class="team-widget-boxarea">
            <div class="img1 image-anime">
              <img src="{{ asset('assets/img/logo/receptionist.jpg') }}" alt="housebox">
            </div>
            <div class="space24"></div>
            <div class="content-area">
              <a href="#">Receptionist</a>
              <div class="space14"></div>
              <p>Jasa receptionist yang memiliki kemampuan komunikasi yang baik.</p>
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-4" data-aos="zoom-out" data-aos-duration="800">
          <div class="team-widget-boxarea">
            <div class="img1 image-anime">
              <img src="{{ asset('assets/img/logo/mechanic.jpg') }}" alt="housebox">
            </div>
            <div class="space24"></div>
            <div class="content-area">
              <a href="#">Mechanic</a>
              <div class="space14"></div>
              <p>Kami menyediakan jasa mekanik yang handal dan kompeten.</p>
            </div>
          </div>
        </div>

        <div class="col-md-4" data-aos="zoom-out" data-aos-duration="900">
          <div class="team-widget-boxarea">
            <div class="img1 image-anime">
              <img src="{{ asset('assets/img/logo/cleaning-service.jpg') }}" alt="housebox">
            </div>
            <div class="space24"></div>
            <div class="content-area">
              <a href="#">Cleaning Service</a>
              <div class="space14"></div>
              <p>Kami menyediakan tenaga kebersihan yang profesional dan cekatan.</p>
            </div>
          </div>
        </div>

        <div class="col-md-4" data-aos="zoom-out" data-aos-duration="1000">
          <div class="team-widget-boxarea">
            <div class="img1 image-anime">
              <img src="{{ asset('assets/img/logo/driver.jpg') }}" alt="housebox">
            </div>
            <div class="space24"></div>
            <div class="content-area">
              <a href="#">Driver</a>
              <div class="space14"></div>
              <p>Kami menyediakan jasa driver pribadi yang cekatan dan ulet.</p>
            </div>
          </div>
        </div>

         <div class="col-md-4 d-block mx-auto" data-aos="zoom-out" data-aos-duration="1000">
          <div class="team-widget-boxarea">
            <div class="img1 image-anime">
              <img src="{{ asset('assets/img/logo/operator.jpg') }}" alt="housebox">
            </div>
            <div class="space24"></div>
            <div class="content-area">
              <a href="#">Operator</a>
              <div class="space14"></div>
              <p>Kami menyediakan operator alat berat yang memiliki sertifikasi khusus.</p>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
  <!--===== TEAM AREA ENDS =======-->
@endsection