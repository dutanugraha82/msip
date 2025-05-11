@extends('master')
@section('title')
    Beranda
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
@endsection