@extends('master')
@section('title')
    Tentang Kami
@endsection
@section('content')
     <!--===== HERO AREA STARTS =======-->
  <div class="hero-inner-section-area-sidebar">
    <img src="{{ asset('assets/img/logo/about-banner.jpg') }}" alt="housebox" class="hero-img1">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="hero-header-area text-center">
            <div class="space24"></div>
            <h1>Tentang Kami</h1>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!--===== OTHERS AREA STARTS =======-->
  <div class="mission-section-area sp1" style="background-image: url(assets/img/all-images/bg/bg1.png); background-position: center; background-repeat: no-repeat; background-size: cover;">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 m-auto">
          <div class="heading1 text-center space-margin60">
            <div class="space20"></div>
            <h2>Visi dan Misi Kami</h2>
          </div>
          <div class="space100 d-lg-block d-none"></div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-7">
          <div class="vission-mission-box">
            <h3>Tentang Kami</h3>
            <div class="space24"></div>
            <p>Kami adalah perusahaan yang bergerak di bidang pelayanan Jasa Alih Daya Pemborongan pekerjaan, penyedia, penempatan tenaga kerja, jasa kebersihan, jasa Perawatan dan Pemeliharaan Taman (Cleaning) dan jasa pengamanan (SATPAM).</p>
            <div class="space24"></div>
            <h4>Visi Kami</h4>
            <div class="space16"></div>
            <p>Menjadi Perusahaan Terkemuka Dalam Bidang Ketenagakerjaan</p>
            <div class="space32"></div>
            <h4>Misi Kami</h4>
            <div class="space16"></div>
            <p>Menjadi Perusahaan Penyedia Dan Pengelola Tenaga Kerja Yang Dihargai Dan Dipercaya Oleh Semua Stakeholders.</p>
            <div class="space24"></div>
            <h4>Goal Kami</h4>
            <div class="space16"></div>
            <p>Berusaha memberikan pelayanan dengan mutu terbaik mulai dari proses seleksi, perekrutan dan pelatihan untuk mempersiapkan tenaga kerja yang berkualitas.</p>
          </div>
        </div>
        <div class="col-lg-5">
          <div class="img1">
            <img src="{{ asset('assets/img/logo/visimisi.jpg') }}" alt="housebox">
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--===== OTHERS AREA ENDS =======-->

  <!--===== OTHERS AREA STARTS =======-->
  <div class="offer1-section-area sp1" style="background-image: url(assets/img/all-images/bg/bg1.png); background-position: center; background-repeat: no-repeat; background-size: cover;">
    <div class="container">
      <div class="row">
        <div class="col-lg-4">
          <div class="img1">
            <img src="{{ asset('assets/img/logo/about-sub.jpg') }}" alt="housebox">
          </div>
        </div>
        <div class="col-lg-8">
          <div class="row">
            <div class="col-lg-6 col-md-6">
              <div class="offer-boxarea">
                <div class="space24"></div>
                <div class="content">
                  <a href="property-details-v1">Recruitment</a>
                  <div class="space16"></div>
                  <p>Dalam operasionalnya melayani Perusahaan - Perusahaan untuk penempatan tenaga kerja (Recruitment). Proses pelayanan ini mulai dari Penyediaan Tenaga Kerja, test administrasi, test kemampuan, test psikologi hingga medical check-up.</p>
                  <div class="space24"></div>
                </div>
              </div>
            </div>

            <div class="col-lg-6 col-md-6">
              <div class="offer-boxarea">
                <div class="space24"></div>
                <div class="content">
                  <a href="property-details-v1">Jasa Alih Daya</a>
                  <div class="space16"></div>
                  <p>Meliputi di dalamnya mulai dari Proses Recruitment dan sekaligus Pengelolaan Tenaga Kerja (Alih Daya/Outsourcing).</p>
                  <div class="space24"></div>
                </div>
              </div>
            </div>

            <div class="col-lg-6 col-md-6">
              <div class="offer-boxarea">
                <div class="space24"></div>
                <div class="content">
                  <a href="property-details-v1">Pemaganan LPK</a>
                  <div class="space16"></div>
                  <p>Berdasarkan Permenaker No. 6 Tahun 2020, yang mengatur tentang Penyelenggaraan Pemagangan Dalam Negeri.

Maka dengan ini LPK MISULI adalah Lembaga Pelatihan Kerja yang menyelenggarakan Pelatihan dengan Surat Izin Pendirian Lembaga Pelatihan Kerja (IPLPK) No. 503/3783/7/IPLPK/IV/DP-MPTSP/2018.</p>
                  <div class="space24"></div>
                  {{-- <a href="{{ asset('assets/img/logo/pemagangan1.png') }}" target="_blank" class="readmore">Alur Sistem Pemagangan <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                      <path d="M13.0508 12.361L7.39395 18.0179L5.97974 16.6037L11.6366 10.9468L6.68684 5.99707H18.0006V17.3108L13.0508 12.361Z"></path>
                    </svg></a> --}}
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--===== OTHERS AREA ENDS =======-->
  <div class="space100 d-lg-block d-none"></div>
  <div class="space50 d-lg-none d-block"></div>
  <!--===== CTA AREA STARTS =======-->
  <div class="cta1-section-area">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="cta-bg-area" style="background-image: url(assets/img/all-images/bg/cta-bg1.png); background-position: center; background-repeat: no-repeat; background-size: cover;">
            <div class="row align-items-center">
              <div class="col-lg-5">
                <div class="cta-header">
                  <h2 class="text-anime-style-3" style="font-size: 1.4em !important;">Pelaksanaan Recruitment</h2>
                  <div class="space16"></div>
                  <p class="mb-3" data-aos="fade-left" data-aos-duration="1000" style="text-align: justify">a. Prosedur rekrutmen PT. Misuli Subur Perdana seperti pada alur dibawah ini dan PT. Misuli Subur Perdana bersedia mengikuti psycotest dan medical check up di Perusahaan userjika diperlukan.</p>
                  <p data-aos="fade-left" data-aos-duration="1000" style="text-align: justify">b. PT. Misuli Subur Perdana akan menempatkan 1 (satu) orang PIC di perusahaan user yang disesuaikan dengan jumlah karyawan yang ditempatkan.</p>
                </div>
              </div>
              <div class="col-lg-2"></div>
              <div class="col-lg-5" data-aos="zoom-in" data-aos-duration="1000">
                {{-- <div class="btn-area1 text-center">
                  <a href="{{ asset('assets/img/logo/proses-recruitment2.png') }}" class="theme-btn1">Lihat Flowchart <span class="arrow1"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="currentColor">
                        <path d="M12 13H4V11H12V4L20 12L12 20V13Z"></path>
                      </svg></span><span class="arrow2"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="currentColor">
                        <path d="M12 13H4V11H12V4L20 12L12 20V13Z"></path>
                      </svg></span></a>
                </div> --}}
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container mt-4">
      <div class="row">
        <div class="col-lg-12">
          <div class="cta-bg-area" style="background-image: url(assets/img/all-images/bg/cta-bg1.png); background-position: center; background-repeat: no-repeat; background-size: cover;">
            <div class="row align-items-center">
              <div class="col-lg-5">
                <div class="cta-header">
                  <h2 class="text-anime-style-3" style="font-size: 1.4em !important;">Pembayaran Gaji dari klien ke Karyawan</h2>
                  <div class="space16"></div>
                  <p class="mb-3" data-aos="fade-left" data-aos-duration="1000" style="text-align: justify">PT. Misuli Subur Perdana melaksanakan pembayaran gaji kepada karyawan setiap akhir bulan dan atau mengikuti prosedur system pembayaran di perusahaan user.</p>
                </div>
              </div>
              <div class="col-lg-2"></div>
              <div class="col-lg-5" data-aos="zoom-in" data-aos-duration="1000">
                {{-- <div class="btn-area1 text-center">
                  <a href="{{ asset('assets/img/logo/proses-recruitment.png') }}" class="theme-btn1">Lihat Flowchart <span class="arrow1"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="currentColor">
                        <path d="M12 13H4V11H12V4L20 12L12 20V13Z"></path>
                      </svg></span><span class="arrow2"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="currentColor">
                        <path d="M12 13H4V11H12V4L20 12L12 20V13Z"></path>
                      </svg></span></a>
                </div> --}}
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--===== CTA AREA ENDS =======-->

@endsection