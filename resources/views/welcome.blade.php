<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>GenBi</title>
  <meta name="description" content="">
  <meta name="author" content="">

<!-- Favicons
  ================================================== -->
  <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
  <link rel="apple-touch-icon" href="img/apple-touch-icon.png">
  <link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114.png">

  <!-- Bootstrap -->
  <link rel="stylesheet" type="text/css"  href="css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="fonts/font-awesome/css/font-awesome.css">

<!-- Stylesheet
  ================================================== -->
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="css/nivo-lightbox/nivo-lightbox.css">
  <link rel="stylesheet" type="text/css" href="css/nivo-lightbox/default.css">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <style type="text/css">
    a#lht {
      position: relative;
      left :43%;
      text-align: center;
    }

  </style>
  <body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
<!-- Navigation
  ==========================================-->
  <nav id="menu" class="navbar navbar-default navbar-fixed-top">
    <div class="container"> 
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
        <a class="navbar-brand page-scroll" href="#page-top">GenBi</a>
        <div class="phone"><span>Call Today</span>320-123-4321</div>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav navbar-right">
          <li><a href="#about" class="page-scroll">Tentang</a></li>
          <li><a href="#services" class="page-scroll">Artikel</a></li>
          <li><a href="#portfolio" class="page-scroll">Kegiatan</a></li>
          <li><a href="#testimonials" class="page-scroll">Testimoni</a></li>
          <li><a href="#contact" class="page-scroll">Kontak</a></li>
        </ul>
      </div>
      <!-- /.navbar-collapse --> 
    </div>
  </nav>
  <!-- Header -->
  <header id="header">
    <div class="intro">
      <div class="overlay">
        <div class="container">
          <div class="row">
            <div class="col-md-8 col-md-offset-2 intro-text">
              <h1>Komunitas GenBI<br>
              Jambi</h1>
              <p>GenBI (Generasi Baru Bank Indonesia) ialah sebuah komunitas yang terdiri dari beberapa kumpulan mahasiswa dari berbagai universitas pada sebuah wilayah yang terpilih dan menang sebagai penerima beasiswa Bank Indonesia.</p>
              <!--@if (Route::has('login')) -->

              @auth

              <a href="{{ route('home') }}" class="btn btn-custom btn-lg page-scroll">Home</a> </div>

              @else
              <a href="{{ route('login') }}" class="btn btn-custom btn-lg page-scroll">Login</a> </div>

              @endauth

            <!--  @endif -->

            </div>
          </div>
        </div>
      </div>
    </header>
    <!-- Get Touch Section -->
    <div id="get-touch">
      <div class="container">
        <div class="row">
          <div class="col-xs-12 col-md-6 col-md-offset-1">
            <h3>Pendafataran Beasiswa Bank Indonesia Sudah Dibuka</h3>
            <p>Mulai Tanggal 25 Januari 2019 - 26 Januari 2019</p>
          </div>
          <div class="col-xs-12 col-md-4 text-center"><a href="#contact" class="btn btn-custom btn-lg page-scroll">Lihat Selengkapnya</a></div>
        </div>
      </div>
    </div>
    <!-- About Section -->
    <div id="about">
      <div class="container">
        <div class="row">
          <div class="col-xs-12 col-md-6"> <img src="img/about.jpg" class="img-responsive" alt=""> </div>
          <div class="col-xs-12 col-md-6">
            <div class="about-text">
              <h2>Tentang GenBI</h2>
              <p>Komunitas GenBI (Generasi Baru Bank Indonesia) ialah sebuah komunitas yang terdiri dari beberapa kumpulan mahasiswa dari berbagai universitas pada sebuah wilayah yang terpilih dan menang sebagai penerima beasiswa Bank Indonesia. GenBI pertama didirikan pada Tanggal 11 November 2011.<br> Berikut ini beberapa kegiatan GenBi di Daerah Jambi diantaranya : </h3>
                <div class="list-style">
                  <div class="col-lg-6 col-sm-6 col-xs-12">
                    <ul>
                      <li>Years of Experience</li>
                      <li>Fully Insured</li>
                      <li>Cost Control Experts</li>
                      <li>100% Satisfaction Guarantee</li>
                    </ul>
                  </div>
                  <div class="col-lg-6 col-sm-6 col-xs-12">
                    <ul>
                      <li>Free Consultation</li>
                      <li>Satisfied Customers</li>
                      <li>Project Management</li>
                      <li>Affordable Pricing</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Services Section -->
      <div id="services">
        <div class="container">
          <div class="section-title">
            <h2>Artikel</h2>
          </div>
          <div class="row">

            @if($articles)
            @foreach($articles as $article)

            <div class="col-md-4">
              <div class="service-media"> <img src="{{ url('img/artikel/' . $article->gambar) }}" alt=" "> </div>
              <div class="service-desc">
                <a href="{{ route('artikel.show', $article->id) }}"><h3>{{ str_limit($article->judul, 50) }}</h3></a>
                <p>{{ str_limit($article->konten, 200) }}</p>
              </div>
            </div>

            @endforeach
            @endif

            {{-- <div style="clear: both"></div>

            {{ $articles->links() }} --}}



          </div>
        </div>
      </div>
      <a href="{{ route('artikel.all') }}" class="btn btn-custom btn-lg page-scroll" id="lht">Lihat Seluruh Artikel </a> </div>
      
      <!-- Gallery Section -->
      <!--<div id="portfolio">
        <div class="container">
          <div class="section-title">
            <h2>Kegiatan</h2>
          </div>
          <div class="row">
            <div class="portfolio-items">
              <div class="col-sm-6 col-md-4 col-lg-4">
                <div class="portfolio-item">
                  <div class="hover-bg"> <a href="img/portfolio/01-large.jpg" title="Project Title" data-lightbox-gallery="gallery1">
                    <div class="hover-text">
                      <h4>Lorem Ipsum</h4>
                    </div>
                    <img src="img/portfolio/01-small.jpg" class="img-responsive" alt="Project Title"> </a> </div>
                  </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-4">
                  <div class="portfolio-item">
                    <div class="hover-bg"> <a href="img/portfolio/02-large.jpg" title="Project Title" data-lightbox-gallery="gallery1">
                      <div class="hover-text">
                        <h4>Adipiscing Elit</h4>
                      </div>
                      <img src="img/portfolio/02-small.jpg" class="img-responsive" alt="Project Title"> </a> </div>
                    </div>
                  </div>
                  <div class="col-sm-6 col-md-4 col-lg-4">
                    <div class="portfolio-item">
                      <div class="hover-bg"> <a href="img/portfolio/03-large.jpg" title="Project Title" data-lightbox-gallery="gallery1">
                        <div class="hover-text">
                          <h4>Lorem Ipsum</h4>
                        </div>
                        <img src="img/portfolio/03-small.jpg" class="img-responsive" alt="Project Title"> </a> </div>
                      </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-4">
                      <div class="portfolio-item">
                        <div class="hover-bg"> <a href="img/portfolio/04-large.jpg" title="Project Title" data-lightbox-gallery="gallery1">
                          <div class="hover-text">
                            <h4>Lorem Ipsum</h4>
                          </div>
                          <img src="img/portfolio/04-small.jpg" class="img-responsive" alt="Project Title"> </a> </div>
                        </div>
                      </div>
                      <div class="col-sm-6 col-md-4 col-lg-4">
                        <div class="portfolio-item">
                          <div class="hover-bg"> <a href="img/portfolio/05-large.jpg" title="Project Title" data-lightbox-gallery="gallery1">
                            <div class="hover-text">
                              <h4>Adipiscing Elit</h4>
                            </div>
                            <img src="img/portfolio/05-small.jpg" class="img-responsive" alt="Project Title"> </a> </div>
                          </div>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-4">
                          <div class="portfolio-item">
                            <div class="hover-bg"> <a href="img/portfolio/06-large.jpg" title="Project Title" data-lightbox-gallery="gallery1">
                              <div class="hover-text">
                                <h4>Dolor Sit</h4>
                              </div>
                              <img src="img/portfolio/06-small.jpg" class="img-responsive" alt="Project Title"> </a> </div>
                            </div>
                          </div>
                          <div class="col-sm-6 col-md-4 col-lg-4">
                            <div class="portfolio-item">
                              <div class="hover-bg"> <a href="img/portfolio/07-large.jpg" title="Project Title" data-lightbox-gallery="gallery1">
                                <div class="hover-text">
                                  <h4>Dolor Sit</h4>
                                </div>
                                <img src="img/portfolio/07-small.jpg" class="img-responsive" alt="Project Title"> </a> </div>
                              </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                              <div class="portfolio-item">
                                <div class="hover-bg"> <a href="img/portfolio/08-large.jpg" title="Project Title" data-lightbox-gallery="gallery1">
                                  <div class="hover-text">
                                    <h4>Lorem Ipsum</h4>
                                  </div>
                                  <img src="img/portfolio/08-small.jpg" class="img-responsive" alt="Project Title"> </a> </div>
                                </div>
                              </div>
                              <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="portfolio-item">
                                  <div class="hover-bg"> <a href="img/portfolio/09-large.jpg" title="Project Title" data-lightbox-gallery="gallery1">
                                    <div class="hover-text">
                                      <h4>Adipiscing Elit</h4>
                                    </div>
                                    <img src="img/portfolio/09-small.jpg" class="img-responsive" alt="Project Title"> </a> </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div> -->
                        <!-- Testimonials Section -->
                        <div id="testimonials">
                          <div class="container">
                            <div class="section-title">
                              <h2>Testimoni</h2>
                            </div>
                            <div class="row">
                              <div class="col-md-4">
                                <div class="testimonial">
                                  <div class="testimonial-image"> <img src="img/testimonials/01.jpg" alt=""> </div>
                                  <div class="testimonial-content">
                                    <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diam sedasd commodo nibh ante facilisis bibendum dolor feugiat at."</p>
                                    <div class="testimonial-meta"> - John Doe </div>
                                  </div>
                                </div>
                              </div>
                              <div class="col-md-4">
                                <div class="testimonial">
                                  <div class="testimonial-image"> <img src="img/testimonials/02.jpg" alt=""> </div>
                                  <div class="testimonial-content">
                                    <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diam sedasd commodo nibh ante facilisis."</p>
                                    <div class="testimonial-meta"> - Johnathan Doe </div>
                                  </div>
                                </div>
                              </div>
                              <div class="col-md-4">
                                <div class="testimonial">
                                  <div class="testimonial-image"> <img src="img/testimonials/03.jpg" alt=""> </div>
                                  <div class="testimonial-content">
                                    <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diam sedasd commodo nibh ante facilisis bibendum dolor feugiat at."</p>
                                    <div class="testimonial-meta"> - John Doe </div>
                                  </div>
                                </div>
                              </div>
                              <div class="row"> </div>
                              <div class="col-md-4">
                                <div class="testimonial">
                                  <div class="testimonial-image"> <img src="img/testimonials/04.jpg" alt=""> </div>
                                  <div class="testimonial-content">
                                    <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diam sedasd commodo nibh ante facilisis bibendum dolor feugiat at."</p>
                                    <div class="testimonial-meta"> - Johnathan Doe </div>
                                  </div>
                                </div>
                              </div>
                              <div class="col-md-4">
                                <div class="testimonial">
                                  <div class="testimonial-image"> <img src="img/testimonials/05.jpg" alt=""> </div>
                                  <div class="testimonial-content">
                                    <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diam sedasd commodo nibh ante facilisis bibendum dolor feugiat at."</p>
                                    <div class="testimonial-meta"> - John Doe </div>
                                  </div>
                                </div>
                              </div>
                              <div class="col-md-4">
                                <div class="testimonial">
                                  <div class="testimonial-image"> <img src="img/testimonials/06.jpg" alt=""> </div>
                                  <div class="testimonial-content">
                                    <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diam sedasd commodo nibh ante facilisis."</p>
                                    <div class="testimonial-meta"> - Johnathan Doe </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- Contact Section -->
                        <div id="contact">
                          <div class="container">
                            <div class="col-md-8">
                              <div class="row">
                                <div class="section-title">
                                  <h2>Kontak</h2>
                                  <p>Please fill out the form below to send us an email and we will get back to you as soon as possible.</p>
                                </div>
                                <form name="sentMessage" id="contactForm" novalidate>
                                  <div class="row">
                                    <div class="col-md-6">
                                      <div class="form-group">
                                        <input type="text" id="name" class="form-control" placeholder="Name" required="required">
                                        <p class="help-block text-danger"></p>
                                      </div>
                                    </div>
                                    <div class="col-md-6">
                                      <div class="form-group">
                                        <input type="email" id="email" class="form-control" placeholder="Email" required="required">
                                        <p class="help-block text-danger"></p>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <textarea name="message" id="message" class="form-control" rows="4" placeholder="Message" required></textarea>
                                    <p class="help-block text-danger"></p>
                                  </div>
                                  <div id="success"></div>
                                  <button type="submit" class="btn btn-custom btn-lg">Send Message</button>
                                </form>
                              </div>
                            </div>
                            <div class="col-md-3 col-md-offset-1 contact-info">
                              <div class="contact-item">
                                <h4>Contact Info</h4>
                                <p><span>Address</span>4321 California St,<br>
                                San Francisco, CA 12345</p>
                              </div>
                              <div class="contact-item">
                                <p><span>Phone</span> +1 123 456 1234</p>
                              </div>
                              <div class="contact-item">
                                <p><span>Email</span> info@company.com</p>
                              </div>
                            </div>
                            <div class="col-md-12">
                              <div class="row">
                                <div class="social">
                                  <ul>
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                                  </ul>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- Footer Section -->
                        <div id="footer">
                          <div class="container text-center">
                            <p>&copy; 2018 GenBI (Generasi Baru Bank Indonesia)</p>
                          </div>
                        </div>
                        <script type="text/javascript" src="js/jquery.1.11.1.js"></script> 
                        <script type="text/javascript" src="js/bootstrap.js"></script> 
                        <script type="text/javascript" src="js/SmoothScroll.js"></script> 
                        <script type="text/javascript" src="js/nivo-lightbox.js"></script> 
                        <script type="text/javascript" src="js/jqBootstrapValidation.js"></script> 
                        <script type="text/javascript" src="js/contact_me.js"></script> 
                        <script type="text/javascript" src="js/main.js"></script>
                      </body>
                      </html>