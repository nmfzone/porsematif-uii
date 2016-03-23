<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ Site::get('site_name') }}</title>

        <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Montserrat&#038;ver=4.4.2' type='text/css' media='all' />
        <link href="{{ asset('assets/css/fonts.min.css') }}" rel="stylesheet" type="text/css">

        <link href="{{ asset('assets/css/style.min.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('assets/css/landing.min.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('assets/css/custom.min.css') }}" rel="stylesheet" type="text/css">

        <link rel="icon" type="image/x-icon" href="{{ asset(Site::get('favicon')) }}">

    </head>
    <body class="landing-page landing-page1">
        <nav class="navbar navbar-transparent navbar-top" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button id="menu-toggle" type="button" class="navbar-toggle" data-toggle="collapse" data-target="#example">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar bar1"></span>
                    <span class="icon-bar bar2"></span>
                    <span class="icon-bar bar3"></span>
                    </button>
                    <a href="{{ Site::get('site_url') }}">
                        <div class="logo-container">
                            <div class="logo">
                                {!! Site::displayCompanyLogo(200, 0, 0) !!}
                            </div>
                        </div>
                    </a>
                </div>

                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="{{ url('#events') }}">Events</a>
                        </li>
                        <li>
                            <a href="{{ url('#sponsors') }}">Sponsors</a>
                        </li>
                         <li>
                            <a href="{{ url('#contacts') }}">Contacts</a>
                        </li>
                        @if (auth()->guest())
                        <li>
                            <a href="{{ url('auth/login') }}">Login</a>
                        </li>
                        <li class="sign-up">
                            <a href="{{ url('auth/register') }}">Register</a>
                        </li>
                        @else
                        @if (auth()->user()->hasRole('admin'))
                        <li class="go-dashboard">
                            <a href="{{ url('dashboard/protected') }}">Dashboard</a>
                        </li>
                        @elseif (auth()->user()->hasRole('user'))
                         <li class="go-dashboard">
                            <a href="{{ url('dashboard') }}">Dashboard</a>
                        </li>
                        @endif
                        @endif
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
        </nav>
        <div class="wrapper">
            <div class="parallax filter-gradient blue" data-color="blue" id="home">
                <div class="parallax-background">
                    <img class="parallax-background-image" src="{{ asset('assets/images/bg-header1.jpg') }}">
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-10 col-md-offset-1">
                            <div id="text-opening" class="description">
                                <h4>HMTF FTI UNIVERSITAS ISLAM INDONESIA</h4>
                                <h5>proudly present</h5>
                                <h1>PORSEMATIF 2016</h1>
                                <br>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section section-presentation" id="about">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="description">
                                <h4 class="header-text">Apa itu Porsematif?</h4>
                                <p>PORSEMATIF (Pekan Olahraga Seni dan Edukasi Mahasiswa Teknik Informatika) merupakan kegiatan tahunan yang diselenggarakan oleh Himpunan Mahasiswa Teknik Informatika (HMTF) Universitas Islam Indonesia. Kegiatan ini ibarat 17an-nya Teknik Informatika Universitas Islam Indonesia.</p>
                                <p>Di dalam kegiatan ini terdapat 4 bidang perlombaan yaitu bidang akademik, olahraga, seni, dan game. Kegiatan ini bertujuan untuk mewadahi potensi dan bakat mahasiswa teknik informatika dalam 4 bidang tersebut. Porsematif tahun 2016 berbeda dengan tahun sebelumya dimana jumlah pendaftar lebih meningkat karena terdapat perlombaan dalam bidang akademik yang ruang lingkupnya dibuka untuk se-regional DIY.</p>
                            </div>
                        </div>
                        <div class="col-md-5 col-md-offset-1 text-center">
                            <img src="{{ asset('assets/images/hmtf.png') }}" width="450px" />
                            <img src="{{ asset('assets/images/porsematif-big.png') }}" width="500px" />
                        </div>
                    </div>
                </div>
            </div>
            <!--
              <div class="section section-demo">
                  <div class="container">
                      <div class="row">
                          <div class="col-md-6">
                              <div id="description-carousel" class="carousel fade" data-ride="carousel">
                                  <div class="carousel-inner">
                                      <div class="item">
                                          <img src="assets/img/template/examples/home_33.jpg" alt="">
                                      </div>
                                      <div class="item active">
                                          <img src="assets/img/template/examples/home_22.jpg" alt="">
                                      </div>
                                      <div class="item">
                                          <img src="assets/img/template/examples/home_11.jpg" alt="">
                                      </div>
                                  </div>
                                  <ol class="carousel-indicators carousel-indicators-blue">
                                      <li data-target="#description-carousel" data-slide-to="0" class=""></li>
                                      <li data-target="#description-carousel" data-slide-to="1" class="active"></li>
                                      <li data-target="#description-carousel" data-slide-to="2" class=""></li>
                                  </ol>
                              </div>
                          </div>
                          <div class="col-md-5 col-md-offset-1">
                              <h4 class="header-text">Easy to integrate</h4>
                              <p>
                                  With all the apps that users love! Make it easy for users to share, like, post and tweet their favourite things from the app. Be sure to let users know they continue to remain connected while using your app!
                              </p>
                              <a href="http://www.creative-tim.com/product/awesome-landing-page" id="Demo3" class="btn btn-fill btn-info" data-button="info">Get Free Demo</a>
                          </div>
                      </div>
                  </div>
              </div>
            -->
            <div class="section section-features" id="competitions">
                <div class="container">
                    <h4 class="header-text text-center">Competitions</h4>
                    <div class="row">
                        <div class="col-md-5 col-md-offset-1 web-dev">
                            <div class="card card-blue">
                                <div class="icon">
                                     <a href="{{ url('competitions/web-development') }}"><img src="{{ asset('assets/images/webdev.png') }}" width="210px" /></a>
                                </div>
                                <div class="text">
                                    <a href="{{ url('competitions/web-development') }}"><h4>Web Development</h4></a>
                                    <!-- <p>Test</p> -->
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5 programming">
                            <div class="card card-blue">
                                <div class="icon">
                                     <a href="{{ url('competitions/programming') }}"><img src="{{ asset('assets/images/programming.png') }}" width="210px" /></a>
                                    </div>
                                <div class="text">
                                    <a href="{{ url('competitions/programming') }}"><h4>Programming</h4></a>
                                    <!-- <p>Test</p> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section section-dark section-contacts" id="contacts">
                <div class="container text-center">
                    <h4 class="header-text">Contacts</h4>
                    <div class="row">
                        <div class="col-md-4 t-box text-center">
                            <div class="title">
                                <h4>Seminar</h4>
                            </div>
                            <div class="logo">
                                <i class="fa fa-mobile"></i>
                            </div>
                            <div class="content">
                                <p>+6281871675188</p>
                                <p>hello@porsematif.com</p>
                                <p>Line : porse</p>
                            </div>
                        </div>
                        <div class="col-md-4 t-box">
                            <div class="title">
                                <h4>Web Development</h4>
                            </div>
                            <div class="logo">
                                <i class="fa fa-mobile"></i>
                            </div>
                            <div class="content">
                                 <p>+6281871675188</p>
                                <p>hello@porsematif.com</p>
                                <p>Line : porse</p>
                            </div>
                        </div>
                         <div class="col-md-4 t-box">
                            <div class="title">
                                <h4>Programming</h4>
                            </div>
                            <div class="logo">
                                <i class="fa fa-mobile"></i>
                            </div>
                            <div class="content">
                                 <p>+6281871675188</p>
                                <p>hello@porsematif.com</p>
                                <p>Line : porse</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section section-testimonial">
                <div class="container">
                    <h4 class="header-text text-center">What people think</h4>
                    <div id="carousel-example-generic" class="carousel fade" data-ride="carousel">
                        <!-- Wrapper for slides -->
                        <div class="carousel-inner" role="listbox">
                            <div class="item">
                                <div class="mask">
                                    <img src="assets/img/faces/face-4.jpg">
                                </div>
                                <div class="carousel-testimonial-caption">
                                    <p>Jay Z, Producer</p>
                                    <h3>"I absolutely love your app! It's truly amazing and looks awesome!"</h3>
                                </div>
                            </div>
                            <div class="item active">
                                <div class="mask">
                                    <img src="assets/img/faces/face-3.jpg">
                                </div>
                                <div class="carousel-testimonial-caption">
                                    <p>Drake, Artist</p>
                                    <h3>"This is one of the most awesome apps I've ever seen! Wish you luck Creative Tim!"</h3>
                                </div>
                            </div>
                            <div class="item">
                                <div class="mask">
                                    <img src="assets/img/faces/face-2.jpg">
                                </div>
                                <div class="carousel-testimonial-caption">
                                    <p>Rick Ross, Musician</p>
                                    <h3>"Loving this! Just picked it up the other day. Thank you for the work you put into this."</h3>
                                </div>
                            </div>
                        </div>
                        <ol class="carousel-indicators carousel-indicators-blue">
                            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                        </ol>
                    </div>
                </div>
            </div>
            <div class="section section-gray section-clients" id="sponsors">
                <div class="container text-center">
                    <h4 class="header-text">Our Sponsors</h4>
                    <div class="logos">
                        <ul class="list-unstyled">
                            <li ><img src="assets/img/logos/adobe.png"/></li>
                            <li ><img src="assets/img/logos/zendesk.png"/></li>
                            <li ><img src="assets/img/logos/ebay.png"/></i>
                            <li ><img src="assets/img/logos/evernote.png"/></li>
                            <li ><img src="assets/img/logos/airbnb.png"/></li>
                            <li ><img src="assets/img/logos/zappos.png"/></li>
                        </ul>
                    </div>
                </div>
            </div>
            <footer class="footer">
                <div class="container">
                    <nav class="pull-left">
                        <ul>
                            <li>
                                <a href="#">
                                Home
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                Events
                                </a>
                            </li>
                            <li>
                                <a href="#competitions">
                                Competitions
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                Contacts
                                </a>
                            </li>
                        </ul>
                    </nav>
                    <div class="social-area pull-right">
                        <a class="btn btn-social btn-facebook btn-simple">
                        <i class="fa fa-facebook-square"></i>
                        </a>
                        <a class="btn btn-social btn-twitter btn-simple">
                        <i class="fa fa-twitter"></i>
                        </a>
                        <a class="btn btn-social btn-pinterest btn-simple">
                        <i class="fa fa-pinterest"></i>
                        </a>
                    </div>
                    <div class="copyright">
                        &copy; 2016 <a href="http://www.invoseuii.com">INVOSE</a>, made with <i class="fa fa-heart"></i>
                    </div>
                </div>
            </footer>
        </div>

        <script src="{{ asset('assets/js/script.min.js') }}" type="text/javascript"></script>
        <script src="http://localhost:9090/livereload.js" type="text/javascript"></script>

    </body>
</html>
