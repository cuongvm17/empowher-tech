<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Index - Active Bootstrap Template</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Active
  * Template URL: https://bootstrapmade.com/active-bootstrap-website-template/
  * Updated: Aug 07 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="index-page">

  <header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1 class="sitename">Active.</h1>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="#" class="active">Home</a></li>
          <li><a href="#">About</a></li>
          <li><a href="#">Services</a></li>
          <li><a href="#">Portfolio</a></li>
          <li><a href="#">Team</a></li>
          <li><a href="#">Blog</a></li>
          <li class="dropdown"><a href="#"><span>Dropdown</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
              <li><a href="#">Dropdown 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Dropdown</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                <ul>
                  <li><a href="#">Deep Dropdown 1</a></li>
                  <li><a href="#">Deep Dropdown 2</a></li>
                  <li><a href="#">Deep Dropdown 3</a></li>
                  <li><a href="#">Deep Dropdown 4</a></li>
                  <li><a href="#">Deep Dropdown 5</a></li>
                </ul>
              </li>
              <li><a href="#">Dropdown 2</a></li>
              <li><a href="#">Dropdown 3</a></li>
              <li><a href="#">Dropdown 4</a></li>
            </ul>
          </li>
          <li><a href="#">Contact</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

    </div>
  </header>

  <main class="main">

    <!-- About Section -->
    <section id="about" class="about section">

      <div class="container">
        <div class="row align-items-center justify-content-between">
          <div class="col-lg-7 mb-5 mb-lg-0 order-lg-2" data-aos="fade-up" data-aos-delay="400">
            <div class="swiper init-swiper">
              <script type="application/json" class="swiper-config">
                {
                  "loop": true,
                  "speed": 600,
                  "autoplay": {
                    "delay": 5000
                  },
                  "slidesPerView": "auto",
                  "pagination": {
                    "el": ".swiper-pagination",
                    "type": "bullets",
                    "clickable": true
                  },
                  "breakpoints": {
                    "320": {
                      "slidesPerView": 1,
                      "spaceBetween": 40
                    },
                    "1200": {
                      "slidesPerView": 1,
                      "spaceBetween": 1
                    }
                  }
                }
              </script>
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <img src="assets/img/img_h_6.jpg" alt="Image" class="img-fluid">
                </div>
                <div class="swiper-slide">
                  <img src="assets/img/img_h_7.jpg" alt="Image" class="img-fluid">
                </div>
                <div class="swiper-slide">
                  <img src="assets/img/img_h_8.jpg" alt="Image" class="img-fluid">
                </div>
              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>
          <div class="col-lg-4 order-lg-1">
            <span class="section-subtitle" data-aos="fade-up">Welcome</span>
            <h1 class="mb-4" data-aos="fade-up">
              Excepteur sint occaecat cupidatat non proident
            </h1>
            <p data-aos="fade-up">
              Far far away, behind the word mountains, far from the countries
              Vokalia and Consonantia, there live the blind texts. Separated they
              live in Bookmarksgrove right at the coast of the Semantics, a large
              language ocean.
            </p>
            <p class="mt-5" data-aos="fade-up">
              <a href="#" class="btn btn-get-started">Get Started</a>
            </p>
          </div>
        </div>
      </div>
    </section><!-- /About Section -->

    <!-- About 2 Section -->
    <section id="about-2" class="about-2 section light-background">

      <div class="container">
        <div class="content">
          <div class="row justify-content-center">
            <div class="col-sm-12 col-md-5 col-lg-4 col-xl-4 order-lg-2 offset-xl-1 mb-4">
              <div class="img-wrap text-center text-md-left" data-aos="fade-up" data-aos-delay="100">
                <div class="img">
                  <img src="assets/img/img_v_3.jpg" alt="circle image" class="img-fluid">
                </div>
              </div>
            </div>

            <div class="offset-md-0 offset-lg-1 col-sm-12 col-md-5 col-lg-5 col-xl-4" data-aos="fade-up">
              <div class="px-3">
                <span class="content-subtitle">Our Mission</span>
                <h2 class="content-title text-start">
                  The Big Oxmox advised her not to do so, because there were
                  thousands.
                </h2>
                <p class="lead">
                  A small river named Duden flows by their place and supplies it
                  with the necessary regelialia. It is a paradisematic country.
                </p>
                <p class="mb-5">
                  The Big Oxmox advised her not to do so, because there were
                  thousands of bad Commas, wild Question Marks and devious Semikoli.
                </p>
                <p>
                  <a href="#" class="btn-get-started">Get Started</a>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- /About 2 Section -->

    <!-- Services Section -->
    <section id="services" class="services section light-background">

      <div class="container">
        <div class="row gy-4 justify-content-center">

          <div class="col-lg-3">
            <div class="services-item" data-aos="fade-up">
              <div class="services-icon">
                <i class="bi bi-bullseye"></i>
              </div>
              <div>
                <h3>Technology</h3>
                <p>Separated they live in Bookmarksgrove right at the coast</p>
              </div>
            </div>
          </div>

          <div class="col-lg-3">
            <div class="services-item" data-aos="fade-up" data-aos-delay="100">
              <div class="services-icon">
                <i class="bi bi-command"></i>
              </div>
              <div>
                <h3>Web Design</h3>
                <p>Separated they live in Bookmarksgrove right at the coast</p>
              </div>
            </div>
          </div>

          <div class="col-lg-3">
            <div class="services-item" data-aos="fade-up" data-aos-delay="200">
              <div class="services-icon">
                <i class="bi bi-bar-chart"></i>
              </div>
              <div>
                <h3>Branding</h3>
                <p>Separated they live in Bookmarksgrove right at the coast</p>
              </div>
            </div>
          </div>

        </div>
      </div>
    </section><!-- /Services Section -->

    <!-- Stats Section -->
    <section id="stats" class="stats section light-background">

      <div class="container">

        <div class="row gy-4 justify-content-center">

          <div class="col-lg-5">
            <div class="images-overlap">
              <img src="assets/img/img_v_1.jpg" alt="student" class="img-fluid img-1" data-aos="fade-up">
            </div>
          </div>

          <div class="col-lg-4 ps-lg-5">
            <span class="content-subtitle">Why Us</span>
            <h2 class="content-title">Far far away Behind the Word Mountains</h2>
            <p class="lead">
              Far far away, behind the word mountains, far from the countries
              Vokalia and Consonantia.
            </p>
            <p class="mb-5">
              There live the blind texts. Separated they live in Bookmarksgrove
              right at the coast of the Semantics, a large language ocean.
            </p>
            <div class="row mb-5 count-numbers">

              <!-- Start Stats Item -->
              <div class="col-4 counter" data-aos="fade-up" data-aos-delay="100">
                <span data-purecounter-separator="true" data-purecounter-start="0" data-purecounter-end="3919" data-purecounter-duration="1" class="purecounter number"></span>
                <span class="d-block">Coffee</span>
              </div>
              <!-- End Stats Item -->

              <!-- Start Stats Item -->
              <div class="col-4 counter" data-aos="fade-up" data-aos-delay="200">
                <span data-purecounter-separator="true" data-purecounter-start="0" data-purecounter-end="2831" data-purecounter-duration="1" class="purecounter number"></span>
                <span class="d-block">Codes</span>
              </div>
              <!-- End Stats Item -->

              <!-- Start Stats Item -->
              <div class="col-4 counter" data-aos="fade-up" data-aos-delay="300">
                <span data-purecounter-separator="true" data-purecounter-start="0" data-purecounter-end="1914" data-purecounter-duration="1" class="purecounter number"></span>
                <span class="d-block">Projects</span>
              </div>
              <!-- End Stats Item -->

            </div>
          </div>

        </div>

      </div>
    </section><!-- /Stats Section -->

    <!-- Blog Posts Section -->
    <section id="blog-posts" class="blog-posts section">
      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <p>Recent Posts</p>
        <h2>Blog Posts</h2>
      </div><!-- End Section Title -->
      <div class="container">

        <div class="row gy-4">
          <div class="col-md-6 col-lg-4">
            <div class="post-entry" data-aos="fade-up" data-aos-delay="100">
              <a href="#" class="thumb d-block"><img src="assets/img/img_h_4.jpg" alt="Image" class="img-fluid rounded"></a>

              <div class="post-content">
                <div class="meta">
                  <a href="#" class="cat">Development</a> •
                  <span class="date">July 20, 2020</span>
                </div>
                <h3><a href="#">There live the blind texts they live</a></h3>
                <p>
                  Far far away, behind the word mountains, far from the countries
                  Vokalia and Consonantia, there live the blind texts.
                </p>

                <div class="d-flex author align-items-center">
                  <div class="pic">
                    <img src="assets/img/team/team-3.jpg" alt="Image" class="img-fluid rounded-circle">
                  </div>
                  <div class="author-name">
                    <strong class="d-block">Winston Gold</strong>
                    <span class="">Lead Product Designer</span>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-4">
            <div class="post-entry" data-aos="fade-up" data-aos-delay="200">
              <a href="#" class="thumb d-block"><img src="assets/img/img_h_2.jpg" alt="Image" class="img-fluid rounded"></a>

              <div class="post-content">
                <div class="meta">
                  <a href="#" class="cat">Development</a> •
                  <span class="date">July 20, 2020</span>
                </div>
                <h3><a href="#">There live the blind texts they live</a></h3>
                <p>
                  Far far away, behind the word mountains, far from the countries
                  Vokalia and Consonantia, there live the blind texts.
                </p>

                <div class="d-flex author align-items-center">
                  <div class="pic">
                    <img src="assets/img/team/team-2.jpg" alt="Image" class="img-fluid rounded-circle">
                  </div>
                  <div class="author-name">
                    <strong class="d-block">Winston Gold</strong>
                    <span class="">Lead Product Designer</span>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-4">
            <div class="post-entry" data-aos="fade-up" data-aos-delay="300">
              <a href="#" class="thumb d-block"><img src="assets/img/img_h_3.jpg" alt="Image" class="img-fluid rounded"></a>

              <div class="post-content">
                <div class="meta">
                  <a href="#" class="cat">Development</a> •
                  <span class="date">July 20, 2020</span>
                </div>
                <h3><a href="#">There live the blind texts they live</a></h3>
                <p>
                  Far far away, behind the word mountains, far from the countries
                  Vokalia and Consonantia, there live the blind texts.
                </p>

                <div class="d-flex author align-items-center">
                  <div class="pic">
                    <img src="assets/img/team/team-1.jpg" alt="Image" class="img-fluid rounded-circle">
                  </div>
                  <div class="author-name">
                    <strong class="d-block">Winston Gold</strong>
                    <span class="">Lead Product Designer</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- /Blog Posts Section -->

    <!-- Tabs Section -->
    <section id="tabs" class="tabs section light-background">

      <div class="container">
        <div class="row gap-x-lg-4 justify-content-between">
          <div class="col-lg-4 js-custom-dots">
            <a href="#" class="service-item link horizontal d-flex active" data-aos="fade-left" data-aos-delay="0">
              <div class="service-icon color-1 mb-4">
                <i class="bi bi-alarm"></i>
              </div>
              <!-- /.icon -->
              <div class="service-contents">
                <h3>Modern and clean design</h3>
                <p>
                  Far far away, behind the word mountains, far from the countries .
                </p>
              </div>
              <!-- /.service-contents-->
            </a>
            <!-- /.service -->

            <a href="#" class="service-item link horizontal d-flex" data-aos="fade-left" data-aos-delay="100">
              <div class="service-icon color-2 mb-4">
                <i class="bi bi-bag-check"></i>
              </div>
              <!-- /.icon -->
              <div class="service-contents">
                <h3>Sell Products</h3>
                <p>
                  Far far away, behind the word mountains, far from the countries .
                </p>
              </div>
              <!-- /.service-contents-->
            </a>
            <!-- /.service -->

            <a href="#" class="service-item link horizontal d-flex" data-aos="fade-left" data-aos-delay="200">
              <div class="service-icon color-3 mb-4">
                <i class="bi bi-briefcase"></i>
              </div>
              <!-- /.icon -->
              <div class="service-contents">
                <h3>Success Every Day</h3>
                <p>
                  Far far away, behind the word mountains, far from the countries .
                </p>
              </div>
              <!-- /.service-contents-->
            </a>
            <!-- /.service -->

            <a href="#" class="service-item link horizontal d-flex" data-aos="fade-left" data-aos-delay="300">
              <div class="service-icon color-4 mb-4">
                <i class="bi bi-easel"></i>
              </div>
              <!-- /.icon -->
              <div class="service-contents">
                <h3>Bring Ideas to Life</h3>
                <p>
                  Far far away, behind the word mountains, far from the countries .
                </p>
              </div>
              <!-- /.service-contents-->
            </a>
            <!-- /.service -->
          </div>

          <div class="col-lg-8">
            <div class="swiper init-swiper-tabs">
              <script type="application/json" class="swiper-config">
                {
                  "loop": true,
                  "speed": 600,
                  "autoHeight": true,
                  "autoplay": {
                    "delay": 5000
                  },
                  "slidesPerView": "auto",
                  "pagination": {
                    "el": ".swiper-pagination",
                    "type": "bullets",
                    "clickable": true
                  },
                  "breakpoints": {
                    "320": {
                      "slidesPerView": 1,
                      "spaceBetween": 40
                    },
                    "1200": {
                      "slidesPerView": 1,
                      "spaceBetween": 1
                    }
                  }
                }
              </script>
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <img src="assets/img/img_h_1.jpg" alt="Image" class="img-fluid">
                  <div class="p-4">
                    <h3 class="text-black h5 mb-3">Modern and clean design</h3>
                    <div class="row">
                      <div class="col-lg-8">
                        <p>
                          Far far away, behind the word mountains, far from the
                          countries Vokalia and Consonantia, there live the blind
                          texts. Separated they live in Bookmarksgrove right at the
                          coast of the Semantics, a large language ocean.
                        </p>
                        <p>
                          A small river named Duden flows by their place and
                          supplies it with the necessary regelialia. It is a
                          paradisematic country, in which roasted parts of sentences
                          fly into your mouth.
                        </p>
                      </div>
                      <div class="col-lg-4">
                        <ul class="list-unstyled list-check">
                          <li>Far far away, behind the word</li>
                          <li>Far from the countries Vokalia</li>
                          <li>Separated they live in Bookmarksgrove</li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <img src="assets/img/img_h_2.jpg" alt="Image" class="img-fluid">
                </div>
                <div class="swiper-slide">
                  <img src="assets/img/img_h_3.jpg" alt="Image" class="img-fluid">
                </div>
                <div class="swiper-slide">
                  <img src="assets/img/img_h_4.jpg" alt="Image" class="img-fluid">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- /Tabs Section -->

    <!-- Services 2 Section -->
    <section id="services-2" class="services-2 section">

      <div class="container">
        <div class="row justify-content-center" data-aos="fade-up">
          <div class="col-md-6 col-lg-4">
            <span class="content-subtitle">Our Services</span>
            <h2 class="content-title">
              Far far away, behind the word mountains, far from the countries
              Vokalia
            </h2>
            <p class="lead">
              Far far away, behind the word mountains, far from the countries
              Vokalia and Consonantia, there live the blind texts.
            </p>
            <p class="mb-5">
              Separated they live in Bookmarksgrove right at the coast of the
              Semantics, a large language ocean.
            </p>
            <p>
              <a href="#" class="btn btn-get-started">Get Started</a>
            </p>
          </div>
          <div class="col-md-6 col-lg-6 ps-lg-5">
            <div class="row">
              <div class="col-6 col-sm-6 col-md-6 col-lg-6">
                <div class="services-item" data-aos="fade-up" data-aos-delay="">
                  <div class="services-icon">
                    <i class="bi bi-search"></i>
                  </div>
                  <div>
                    <h3>Square</h3>
                    <p>Separated they live in Bookmarksgrove right at the coast</p>
                  </div>
                </div>
              </div>
              <div class="col-6 col-sm-6 col-md-6 col-lg-6">
                <div class="services-item" data-aos="fade-up" data-aos-delay="100">
                  <div class="services-icon">
                    <i class="bi bi-command"></i>
                  </div>
                  <div>
                    <h3>Technology</h3>
                    <p>Separated they live in Bookmarksgrove right at the coast</p>
                  </div>
                </div>
              </div>
              <div class="col-6 col-sm-6 col-md-6 col-lg-6">
                <div class="services-item" data-aos="fade-up" data-aos-delay="200">
                  <div class="services-icon">
                    <i class="bi bi-grid"></i>
                  </div>
                  <div>
                    <h3>Brilliant Ideas</h3>
                    <p>Separated they live in Bookmarksgrove right at the coast</p>
                  </div>
                </div>
              </div>

              <div class="col-6 col-sm-6 col-md-6 col-lg-6">
                <div class="services-item" data-aos="fade-up" data-aos-delay="300">
                  <div class="services-icon">
                    <i class="bi bi-globe"></i>
                  </div>
                  <div>
                    <h3>Blueprint</h3>
                    <p>Separated they live in Bookmarksgrove right at the coast</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- /Services 2 Section -->

    <!-- Pricing Section -->
    <section id="pricing" class="pricing section light-background">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <p>Plans</p>
        <h2>Pricing Table</h2>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="pricing-item">
              <h3>Free</h3>
              <h4><sup>$</sup>0<span> / month</span></h4>
              <ul>
                <li>Aida dere</li>
                <li>Nec feugiat nisl</li>
                <li>Nulla at volutpat dola</li>
                <li class="na">Pharetra massa</li>
                <li class="na">Massa ultricies mi</li>
              </ul>
              <div class="btn-wrap">
                <a href="#" class="btn-buy">Buy Now</a>
              </div>
            </div>
          </div><!-- End Pricing Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="pricing-item recommended">
              <span class="recommended-badge">Recommended</span>
              <h3>Business</h3>
              <h4><sup>$</sup>19<span> / month</span></h4>
              <ul>
                <li>Aida dere</li>
                <li>Nec feugiat nisl</li>
                <li>Nulla at volutpat dola</li>
                <li>Pharetra massa</li>
                <li class="na">Massa ultricies mi</li>
              </ul>
              <div class="btn-wrap">
                <a href="#" class="btn-buy">Buy Now</a>
              </div>
            </div>
          </div><!-- End Pricing Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="pricing-item">
              <h3>Developer</h3>
              <h4><sup>$</sup>29<span> / month</span></h4>
              <ul>
                <li>Aida dere</li>
                <li>Nec feugiat nisl</li>
                <li>Nulla at volutpat dola</li>
                <li>Pharetra massa</li>
                <li>Massa ultricies mi</li>
              </ul>
              <div class="btn-wrap">
                <a href="#" class="btn-buy">Buy Now</a>
              </div>
            </div>
          </div><!-- End Pricing Item -->

        </div>

      </div>

    </section><!-- /Pricing Section -->

    <!-- Faq Section -->
    <section id="faq" class="faq section">
      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <p>Plans</p>
        <h2>Frequently Asked Questions</h2>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up">
        <div class="row">
          <div class="col-12">
            <div class="custom-accordion" id="accordion-faq">
              <div class="accordion-item">
                <h2 class="mb-0">
                  <button class="btn btn-link" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-faq-1">
                    How to download and register?
                  </button>
                </h2>

                <div id="collapse-faq-1" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion-faq">
                  <div class="accordion-body">
                    Far far away, behind the word mountains, far from the countries
                    Vokalia and Consonantia, there live the blind texts. Separated
                    they live in Bookmarksgrove right at the coast of the Semantics,
                    a large language ocean.
                  </div>
                </div>
              </div>
              <!-- .accordion-item -->

              <div class="accordion-item">
                <h2 class="mb-0">
                  <button class="btn btn-link collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-faq-2" "="">
                How to create your paypal account?
              </button>
            </h2>
            <div id=" collapse-faq-2" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion-faq">
                    <div class="accordion-body">
                      A small river named Duden flows by their place and supplies it
                      with the necessary regelialia. It is a paradisematic country, in
                      which roasted parts of sentences fly into your mouth.
                    </div>
              </div>
            </div>
            <!-- .accordion-item -->

            <div class="accordion-item">
              <h2 class="mb-0">
                <button class="btn btn-link collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-faq-3">
                  How to link your paypal and bank account?
                </button>
              </h2>

              <div id="collapse-faq-3" class="collapse" aria-labelledby="headingThree" data-parent="#accordion-faq">
                <div class="accordion-body">
                  When she reached the first hills of the Italic Mountains, she
                  had a last view back on the skyline of her hometown
                  Bookmarksgrove, the headline of Alphabet Village and the subline
                  of her own road, the Line Lane. Pityful a rethoric question ran
                  over her cheek, then she continued her way.
                </div>
              </div>
            </div>
            <!-- .accordion-item -->

          </div>
        </div>
      </div>
      </div>
    </section><!-- /Faq Section -->

    <!-- Testimonials Section -->
    <section id="testimonials" class="testimonials section">
      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <p>Happy Customers</p>
        <h2>Testimonials</h2>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up">
        <div class="row justify-content-center">
          <div class="col-lg-7">
            <div class="swiper init-swiper">
              <script type="application/json" class="swiper-config">
                {
                  "loop": true,
                  "speed": 600,
                  "autoplay": {
                    "delay": 5000
                  },
                  "slidesPerView": "auto",
                  "pagination": {
                    "el": ".swiper-pagination",
                    "type": "bullets",
                    "clickable": true
                  },
                  "breakpoints": {
                    "320": {
                      "slidesPerView": 1,
                      "spaceBetween": 40
                    },
                    "1200": {
                      "slidesPerView": 1,
                      "spaceBetween": 1
                    }
                  }
                }
              </script>
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <div class="testimonial mx-auto">
                    <figure class="img-wrap">
                      <img src="assets/img/testimonials/testimonials-1.jpg" alt="Image" class="img-fluid">
                    </figure>
                    <h3 class="name">Adam Aderson</h3>
                    <blockquote>
                      <p>
                        “There live the blind texts. Separated they live in
                        Bookmarksgrove right at the coast of the Semantics, a large
                        language ocean.”
                      </p>
                    </blockquote>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="testimonial mx-auto">
                    <figure class="img-wrap">
                      <img src="assets/img/testimonials/testimonials-2.jpg" alt="Image" class="img-fluid">
                    </figure>
                    <h3 class="name">Lukas Devlin</h3>
                    <blockquote>
                      <p>
                        “There live the blind texts. Separated they live in
                        Bookmarksgrove right at the coast of the Semantics, a large
                        language ocean.”
                      </p>
                    </blockquote>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="testimonial mx-auto">
                    <figure class="img-wrap">
                      <img src="assets/img/testimonials/testimonials-3.jpg" alt="Image" class="img-fluid">
                    </figure>
                    <h3 class="name">Kayla Bryant</h3>
                    <blockquote>
                      <p>
                        “There live the blind texts. Separated they live in
                        Bookmarksgrove right at the coast of the Semantics, a large
                        language ocean.”
                      </p>
                    </blockquote>
                  </div>
                </div>
              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- /Testimonials Section -->

  </main>

  <footer id="footer" class="footer light-background">
    <div class="container">
      <div class="row g-4">
        <div class="col-md-6 col-lg-3 mb-3 mb-md-0">
          <div class="widget">
            <h3 class="widget-heading">About Us</h3>
            <p class="mb-4">
              There live the blind texts. Separated they live in Bookmarksgrove
              right at the coast of the Semantics, a large language ocean.
            </p>
            <p class="mb-0">
              <a href="#" class="btn-learn-more">Learn more</a>
            </p>
          </div>
        </div>
        <div class="col-md-6 col-lg-3 ps-lg-5 mb-3 mb-md-0">
          <div class="widget">
            <h3 class="widget-heading">Navigation</h3>
            <ul class="list-unstyled float-start me-5">
              <li><a href="#">Overview</a></li>
              <li><a href="#">About Us</a></li>
              <li><a href="#">Find Buyers</a></li>
            </ul>
            <ul class="list-unstyled float-start">
              <li><a href="#">Overview</a></li>
              <li><a href="#">About Us</a></li>
              <li><a href="#">Services</a></li>
            </ul>
          </div>
        </div>
        <div class="col-md-6 col-lg-3 pl-lg-5">
          <div class="widget">
            <h3 class="widget-heading">Recent Posts</h3>
            <ul class="list-unstyled footer-blog-entry">
              <li>
                <span class="d-block date">May 3, 2020</span>
                <a href="#">There live the Blind Texts</a>
              </li>
              <li>
                <span class="d-block date">May 3, 2020</span>
                <a href="#">Separated they live in Bookmarksgrove right</a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-md-6 col-lg-3 pl-lg-5">
          <div class="widget">
            <h3 class="widget-heading">Connect</h3>
            <ul class="list-unstyled social-icons light mb-3">
              <li>
                <a href="#"><span class="bi bi-facebook"></span></a>
              </li>
              <li>
                <a href="#"><span class="bi bi-twitter-x"></span></a>
              </li>
              <li>
                <a href="#"><span class="bi bi-linkedin"></span></a>
              </li>
              <li>
                <a href="#"><span class="bi bi-google"></span></a>
              </li>
              <li>
                <a href="#"><span class="bi bi-google-play"></span></a>
              </li>
            </ul>
          </div>

          <div class="widget">
            <div class="footer-subscribe">
              <h3 class="widget-heading">Subscribe</h3>
              <form action="forms/newsletter.php" method="post" class="php-email-form">
                <div class="mb-2">
                  <input type="text" class="form-control" name="email" placeholder="Enter your email">

                  <button type="submit" class="btn btn-link">
                    <span class="bi bi-arrow-right"></span>
                  </button>
                </div>
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">
                  Your subscription request has been sent. Thank you!
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>

      <div class="copyright d-flex flex-column flex-md-row align-items-center justify-content-md-between">
        <p>© <span>Copyright</span> <strong class="px-1 sitename">Active.</strong> <span>All Rights Reserved</span></p>
        <div class="credits">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you've purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
          Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
      </div>
    </div>
  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>