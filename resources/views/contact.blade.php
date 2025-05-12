@extends('master')
@section('title')
    Kontak Kami
@endsection
@section('content')
     <!--===== HERO AREA STARTS =======-->
  <div class="hero-inner-section-area-sidebar">
    <img src="{{ asset('assets/img/logo/contactus-banner.jpg') }}" alt="housebox" class="hero-img1">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="hero-header-area text-center">
            <div class="space24"></div>
            <h1>Kontak Kami</h1>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--===== HERO AREA ENDS =======-->

  <!--===== CONTACT AREA STARTS =======-->
  <div class="contact-inner-section sp1">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6">
          <div class="heading1">
            <h5>Kontak Kami</h5>
            <div class="space32"></div>
            <h2>Let’s Start the Conversation</h2>
            <div class="space24"></div>
            <p>Misuli menawarkan layanan yang andal, profesional, dan efisien untuk memenuhi kebutuhan bisnis Anda. Dengan tim yang berpengalaman dan solusi yang disesuaikan, Misuli memastikan bahwa operasional Anda berjalan lancar dan produktif, sehingga Anda dapat fokus pada pengembangan bisnis inti Anda.</p>
            <div class="space40"></div>
            <div class="number-address-area">
              <div class="phone-number">
                <div class="img1">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                    <path d="M21 16.42V19.9561C21 20.4811 20.5941 20.9167 20.0705 20.9537C19.6331 20.9846 19.2763 21 19 21C10.1634 21 3 13.8366 3 5C3 4.72371 3.01545 4.36687 3.04635 3.9295C3.08337 3.40588 3.51894 3 4.04386 3H7.5801C7.83678 3 8.05176 3.19442 8.07753 3.4498C8.10067 3.67907 8.12218 3.86314 8.14207 4.00202C8.34435 5.41472 8.75753 6.75936 9.3487 8.00303C9.44359 8.20265 9.38171 8.44159 9.20185 8.57006L7.04355 10.1118C8.35752 13.1811 10.8189 15.6425 13.8882 16.9565L15.4271 14.8019C15.5572 14.6199 15.799 14.5573 16.001 14.6532C17.2446 15.2439 18.5891 15.6566 20.0016 15.8584C20.1396 15.8782 20.3225 15.8995 20.5502 15.9225C20.8056 15.9483 21 16.1633 21 16.42Z"></path>
                  </svg>
                </div>
                <div class="content">
                  <p>Phone Number</p>
                  <a href="tel:021-8833-2376">021 - 8833 2376</a>
                </div>
              </div>

              <div class="phone-number m-0">
                <div class="img1">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                    <path d="M3 3H21C21.5523 3 22 3.44772 22 4V20C22 20.5523 21.5523 21 21 21H3C2.44772 21 2 20.5523 2 20V4C2 3.44772 2.44772 3 3 3ZM12.0606 11.6829L5.64722 6.2377L4.35278 7.7623L12.0731 14.3171L19.6544 7.75616L18.3456 6.24384L12.0606 11.6829Z"></path>
                  </svg>
                </div>
                <div class="content">
                  <p>Email Address</p>
                  <a href="mailto:Infoseoc@gmail.com">misuli_msp@yahoo.co.id</a>
                </div>
              </div>
            </div>
            <div class="space32"></div>
          </div>
        </div>
        <div class="col-lg-1"></div>
        <div class="col-lg-5">
          <div class="contact-form-area">
            <h4>Kirim Pesan</h4>
            <div class="row">
              <div class="col-lg-12">
                <div class="input-area">
                  <input type="text" placeholder="First Name">
                </div>
              </div>

              <div class="col-lg-12">
                <div class="input-area">
                  <input type="text" placeholder="Last Name">
                </div>
              </div>

              <div class="col-lg-12">
                <div class="input-area">
                  <input type="email" placeholder="Email Address">
                </div>
              </div>
              <div class="col-lg-12">
                <div class="input-area">
                  <input type="number" placeholder="Phone Number">
                </div>
              </div>
              <div class="col-lg-12">
                <div class="input-area">
                  <textarea placeholder="Your Message"></textarea>
                </div>
              </div>
              <div class="col-lg-12">
                <div class="input-area">
                  <button type="submit" class="theme-btn1">Kirim Sekarang <span class="arrow1"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="currentColor">
                        <path d="M12 13H4V11H12V4L20 12L12 20V13Z"></path>
                      </svg></span><span class="arrow2"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="currentColor">
                        <path d="M12 13H4V11H12V4L20 12L12 20V13Z"></path>
                      </svg></span></button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="location-section-area sp2" style="background-image: url(assets/img/all-images/bg/bg1.png); background-position: center; background-repeat: no-repeat; background-size: cover;">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 m-auto">
          <div class="heading1 text-center space-margin60">
            <h5>Lokasi</h5>
            <div class="space20"></div>
            <h2>Lokasi Kami</h2>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="mapouter">
    <div class="gmap_canvas">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.9805068545666!2d107.07280759999999!3d-6.266293699999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e698f9de29eabb3%3A0x47ab4e0e33f55a2f!2sPT.%20Misuli%20Subur%20Perdana!5e0!3m2!1sen!2sid!4v1747030996635!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</div>
@endsection