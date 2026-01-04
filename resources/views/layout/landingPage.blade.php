<!DOCTYPE html>
<html class="no-js" lang="">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Nova - Bootstrap 5 Template</title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- Place favicon.ico in the root directory -->

    <!-- ========================= CSS here ========================= -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('assets/css1/bootstrap-5.0.0-beta1.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css1/LineIcons.2.0.css') }}"/>
    <link rel="stylesheet" href="{{ asset('assets/css1/tiny-slider.css') }}"/>
    <link rel="stylesheet" href="{{ asset('assets/css1/animate.css') }}"/>
    <link rel="stylesheet" href="{{ asset('assets/css1/lindy-uikit.css') }}"/>
  </head>
  <body>
    <!--[if lte IE 9]>
      <p class="browserupgrade">
        You are using an <strong>outdated</strong> browser. Please
        <a href="https://browsehappy.com/">upgrade your browser</a> to improve
        your experience and security.
      </p>
    <![endif]-->

    <!-- ========================= preloader start ========================= -->
    <div class="preloader">
      <div class="loader">
        <div class="spinner">
          <div class="spinner-container">
            <div class="spinner-rotator">
              <div class="spinner-left">
                <div class="spinner-circle"></div>
              </div>
              <div class="spinner-right">
                <div class="spinner-circle"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- ========================= preloader end ========================= -->

    <!-- ========================= hero-section-wrapper-5 start ========================= -->
    <section id="home" class="hero-section-wrapper-5">

      <!-- ========================= header-6 start ========================= -->
      <header class="header header-6">
        <div class="navbar-area">
          <div class="container-fluid">
            <div class="row align-items-center">
              <div class="col-lg-12">
                <nav class="navbar navbar-expand-lg bg-light p-3 rounded-bottom">
                  <a class="navbar-brand" href="">
                    <i class="fas fa-hand-sparkles"></i>
                    <span>Asteria Star Talk</span>
                  </a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent6" aria-controls="navbarSupportedContent6" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="toggler-icon"></span>
                    <span class="toggler-icon"></span>
                    <span class="toggler-icon"></span>
                  </button>
  
                  <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent6">
                    <ul id="nav6" class="navbar-nav ms-auto">
                      <li class="nav-item">
                        <a class="page-scroll active" href="#home">Home</a>
                      </li>
                      <li class="nav-item">
                        <a class="page-scroll" href="#feature">Feature</a>
                      </li>
                      <li class="nav-item">
                        <a class="page-scroll" href="#about">About</a>
                      </li>

                      <li class="nav-item">
                        <a class="page-scroll" href="#pricing">Pricing</a>
                      </li>
                      <li class="nav-item">
                        <a class="page-scroll" href="{{ route('login') }}">Login</a>
                      </li>
                    </ul>
                  </div>
                  <!-- navbar collapse -->
                </nav>
                <!-- navbar -->
              </div>
            </div>
            <!-- row -->
          </div>
          <!-- container -->
        </div>
        <!-- navbar area -->
      </header>
      <!-- ========================= header-6 end ========================= -->

      <!-- ========================= hero-5 start ========================= -->
      <div class="hero-section hero-style-5 img-bg" style="background: linear-gradient(45deg, #553862, #313b64, #8f85d8); color: white;" id="accordionSidebar">
        <div class="container">
          <div class="row">
            <div class="col-lg-6">
              <div class="hero-content-wrapper">
                <h5 class="mb-10 wow fadeInUp" style="color: white" data-wow-delay=".2s">Welcome Stargazer!</h5>
                <h2 class="mb-2 wow fadeInUp" style="color: white" data-wow-delay=".2s">Ignite Your Stellar Potential.</h2>
                <p class="mb-15 wow fadeInUp" data-wow-delay=".4s">Ready to shine in every conversation? Join Asteria Star Talk and let your English skills outshine the brightest stars in the galaxy.</p>
                <a href="{{ route('students.studentsRegister') }}" class="button button-m radius-50 wow fadeInUp" data-wow-delay=".6s">Join the Orbit</a>
        
              </div>
            </div>
            <div class="col-lg-6 align-self-end">
              <div class="hero-image wow fadeInUp" data-wow-delay=".5s">
                <i class="fas fa-explosion"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- ========================= hero-5 end ========================= -->

    </section>
    <!-- ========================= hero-section-wrapper-6 end ========================= -->

    <!-- ========================= feature style-5 start ========================= -->
    <section id="feature" class="feature-section feature-style-5">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-xxl-5 col-xl-5 col-lg-7 col-md-8">
            <div class="section-title text-center mb-60">
              <h3 class="mb-15 wow fadeInUp" data-wow-delay=".2s">Our Cosmic Expertise</h3>
              <p class="wow fadeInUp" data-wow-delay=".4s">Step into our galaxy and discover the specialized orbits where your potential becomes infinite!</p>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6">
            <div class="single-feature wow fadeInUp" data-wow-delay=".2s">
              <div class="icon">
                <i class="fas fa-atom"></i>
                <svg width="110" height="72" viewBox="0 0 110 72" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M110 54.7589C110 85.0014 85.3757 66.2583 55 66.2583C24.6243 66.2583 0 85.0014 0 54.7589C0 24.5164 24.6243 0 55 0C85.3757 0 110 24.5164 110 54.7589Z" fill="#EBF4FF"/>
                  </svg>                  
              </div>
              <div class="content">
                <h5>Grammar Gravity</h5>
                <p>Just like gravity holds planets together, we help you build a solid foundation so your sentences never drift away.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="single-feature wow fadeInUp" data-wow-delay=".4s">
              <div class="icon">
                <i class="fas fa-book-open-reader"></i>
                <svg width="110" height="72" viewBox="0 0 110 72" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M110 54.7589C110 85.0014 85.3757 66.2583 55 66.2583C24.6243 66.2583 0 85.0014 0 54.7589C0 24.5164 24.6243 0 55 0C85.3757 0 110 24.5164 110 54.7589Z" fill="#EBF4FF"/>
                  </svg> 
              </div>
              <div class="content">
                <h5>Lexical Nebula</h5>
                <p>Expand your vocabulary like a growing nebula. From basic words to cosmic expressions, we enrich your word bank.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="single-feature wow fadeInUp" data-wow-delay=".6s">
              <div class="icon">
                <i class="fas fa-comment-dots"></i>
                <svg width="110" height="72" viewBox="0 0 110 72" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M110 54.7589C110 85.0014 85.3757 66.2583 55 66.2583C24.6243 66.2583 0 85.0014 0 54.7589C0 24.5164 24.6243 0 55 0C85.3757 0 110 24.5164 110 54.7589Z" fill="#EBF4FF"/>
                  </svg> 
              </div>
              <div class="content">
                <h5>Stellar Speaking</h5>
                <p>Radiate confidence! We focus on natural flow and pronunciation to make you shine in every conversation.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="single-feature wow fadeInUp" data-wow-delay=".2s">
              <div class="icon">
                <i class="fas fa-satellite-dish"></i>
                <svg width="110" height="72" viewBox="0 0 110 72" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M110 54.7589C110 85.0014 85.3757 66.2583 55 66.2583C24.6243 66.2583 0 85.0014 0 54.7589C0 24.5164 24.6243 0 55 0C85.3757 0 110 24.5164 110 54.7589Z" fill="#EBF4FF"/>
                  </svg> 
              </div>
              <div class="content">
                <h5>Signal Decoding</h5>
                <p>Learn to catch every frequency. Improve your listening skills to understand English signals from any part of the world.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="single-feature wow fadeInUp" data-wow-delay=".4s">
              <div class="icon">
                <i class="fas fa-rocket"></i>
                <svg width="110" height="72" viewBox="0 0 110 72" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M110 54.7589C110 85.0014 85.3757 66.2583 55 66.2583C24.6243 66.2583 0 85.0014 0 54.7589C0 24.5164 24.6243 0 55 0C85.3757 0 110 24.5164 110 54.7589Z" fill="#EBF4FF"/>
                  </svg> 
              </div>
              <div class="content">
                <h5>Cosmic Quests</h5>
                <p>Turn your learning into an adventure with interactive missions and educational games designed to challenge your skills and fuel your curiosity.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="single-feature wow fadeInUp" data-wow-delay=".6s">
              <div class="icon">
                <i class="fas fa-pen-nib"></i>
                <svg width="110" height="72" viewBox="0 0 110 72" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M110 54.7589C110 85.0014 85.3757 66.2583 55 66.2583C24.6243 66.2583 0 85.0014 0 54.7589C0 24.5164 24.6243 0 55 0C85.3757 0 110 24.5164 110 54.7589Z" fill="#EBF4FF"/>
                  </svg> 
              </div>
              <div class="content">
                <h5>Galactic Script</h5>
                <p>Refine your creative and formal writing skills to craft powerful messages that resonate across the vast reaches of the global community.</p>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section>
    <!-- ========================= feature style-5 end ========================= -->

    <!-- ========================= about style-4 start ========================= -->
    <section id="about" class="about-section about-style-4">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-xl-5 col-lg-6">
            <div class="about-content-wrapper">
              <div class="section-title mb-30">
                <h3 class="mb-25 wow fadeInUp" data-wow-delay=".2s">Ascend Through the Galactic Ranks</h3>
                <p class="wow fadeInUp" data-wow-delay=".3s">Your English journey isn’t just a class; it’s an evolution. Watch yourself grow from a quiet cloud of potential into a brilliant cosmic explosion of fluency.</p>
              </div>
              <ul>
                <li class="wow fadeInUp" data-wow-delay=".35s">
                  <i class="fas fa-bahai"></i>
                  Rank 1: Nebula – Gather your cosmic dust and start building your English foundation.
                </li>
                <li class="wow fadeInUp" data-wow-delay=".4s">
                  <i class="fas fa-star"></i>
                  Rank 2: Stellar – Begin to shine as you master stable conversations and solid structures.
                </li>
                <li class="wow fadeInUp" data-wow-delay=".45s">
                  <i class="fas fa-sun"></i>
                  Rank 3: Sirius – Outshine the rest with bright confidence and advanced communication skills.
                </li>
                <li class="wow fadeInUp" data-wow-delay=".45s">
                  <i class="fas fa-explosion"></i>
                  Rank 4: Supernova – Reach the ultimate peak of fluency and explode into the global galaxy.
                </li>
              </ul>
            </div>
          </div>
          <div class="col-xl-7 col-lg-6">
            <div class="about-image text-lg-right wow fadeInUp" data-wow-delay=".5s">
              <img src="{{ asset('assets/img1/hero-img.svg') }}" alt="" />
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- ========================= about style-4 end ========================= -->

    <!-- ========================= pricing style-4 start ========================= -->
    <section id="pricing" class="pricing-section pricing-style-4 bg-light" style="background: linear-gradient(45deg, #553862, #313b64, #8f85d8); color: white;">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-xl-5 col-lg-6">
            <div class="section-title mb-60">
              <h3 class="mb-15 wow fadeInUp" style="color:white;" data-wow-delay=".2s">Mission Investment</h3>
              <p class="wow fadeInUp" data-wow-delay=".4s">Every great explorer needs a plan. Secure your seat among the stars today!</p>
            </div>
          </div>
          <div class="col-xl-7 col-lg-6">
            <div class="pricing-active-wrapper wow fadeInUp" data-wow-delay=".4s">
              <div class="pricing-active">
                <div class="single-pricing-wrapper">
                  <div class="single-pricing">
                    <h6>Meteorite Pass</h6>
                    <h4>Group Class</h4>
                    <h3>Rp. 149.000 <span>/month</span></h3>
                    <ul style="color:#553862;">
                      <li>Join the Galactic Community</li>
                      <li>Weekly Group Speaking Sessions</li>
                      <li>Shared Learning Resources</li>
                      <li>Basic Rank Tracking</li>
                    </ul>
                    <a href="{{ route('students.studentsRegister') }}" class="button radius-30">Get Started</a>
                  </div>
                </div>
                <div class="single-pricing-wrapper">
                  <div class="single-pricing">
                    <h6>Planetary Pass</h6>
                    <h4>Semi-Private</h4>
                    <h3>Rp. 450.000 <span>/month</span></h3>
                    <ul style="color:#553862;">
                      <li>Small Group Intensive (3-5 Stargazers)</li>
                      <li>Grammar & Vocabulary Focus</li>
                      <li>Personalized Progress Report</li>
                      <li>Mid-Level Rank Priority</li>
                    </ul>
                    <a href="{{ route('students.studentsRegister') }}" class="button radius-30">Get Started</a>
                  </div>
                </div>
                <div class="single-pricing-wrapper">
                  <div class="single-pricing">
                    <h6>Supernova Private</h6>
                    <h4>1-on-1 Voyage</h4>
                    <h3>Rp. 890.000 <span>/month</span></h3>
                    <ul style="color:#553862;">
                      <li>Full Private Mentoring (1-on-1)</li>
                      <li>Customizable Learning Syllabus</li>
                      <li>Flexible "Anytime" Schedule</li>
                      <li>Direct Signal (24/7 Tutor Chat)</li>
                    </ul>
                    <a href="{{ route('students.studentsRegister') }}" class="button radius-30">Get Started</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- ========================= pricing style-4 end ========================= -->
    <!-- ========================= footer style-4 start ========================= -->
    <footer class="footer footer-style-4">
      <div class="container">
        <div class="widget-wrapper">
          <div class="row">
            <div class="col-xl-3 col-lg-4 col-md-6">
              <div class="footer-widget wow fadeInUp" data-wow-delay=".2s">
              
              </div>
            </div>
        <div class="copyright-wrapper wow fadeInUp" data-wow-delay=".2s">
          <p>Design and Developed by Leen</p>
        </div>
      </div>
    </footer>
    <!-- ========================= footer style-4 end ========================= -->

    <!-- ========================= scroll-top start ========================= -->
    <a href="#" class="scroll-top"> <i class="lni lni-chevron-up"></i> </a>
    <!-- ========================= scroll-top end ========================= -->
		

    <!-- ========================= JS here ========================= -->
    <script src="{{ asset('assets/js1/bootstrap-5.0.0-beta1.min.js') }}"></script>
    <script src="{{ asset('assets/js1/tiny-slider.js') }}"></script>
    <script src="{{ asset('assets/js1/wow.min.js') }}"></script>
    <script src="{{ asset('assets/js1/main.js') }}"></script>
  </body>
</html>

