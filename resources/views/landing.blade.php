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
                            <a href="{{ url('competitions/internal') }}">Internal</a>
                        </li>
                        <li>
                            <a href="{{ url('#events') }}">Events</a>
                        </li>
                        <li>
                            <a href="{{ url('#competitions') }}">Competitions</a>
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
                        <li id="sign-up">
                            <a href="{{ url('auth/register') }}">Register</a>
                        </li>
                        @else
                        @if (auth()->user()->hasRole('admin'))
                        <li id="go-dashboard">
                            <a href="{{ url('dashboard/protected') }}">Dashboard</a>
                        </li>
                        @elseif (auth()->user()->hasRole('user'))
                         <li id="go-dashboard">
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
                                <h2>WELCOME TO</h2>
                                <h1>PORSEMATIF 2016</h1>
                                <h5>Pekan Olahraga, Seni dan Edukasi Mahasiswa Teknik Informatika 2016</h5>
                                <br>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="news">
                <div class="container">
                    <div class="row row-centered">
                        <div class="col-md-12 col-centered">
                            <div class="alert alert-success text-center">
                                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                <b style="font-size: 17px;">Pengumuman</b><br><br>
                                Pendaftaran di semua kompetisi di perpanjang sampai tanggal <b>25 April 2016</b>. Silahkan mendaftar bagi yang belum mendaftar. Dan bagi yang sudah mendaftar, silahkan bersiap-siap sampai kompetisi dimulai. Ganbatte!
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
            <div class="section section-features" id="events">
                <div class="container">
                    <h4 class="header-text text-center">Events</h4>
                    <div class="row row-centered">
                        <div class="col-md-5 col-centered seminar">
                            <div class="card card-blue">
                                <div class="icon">
                                     <a href="{{ url('events/seminar') }}"><img src="{{ asset('assets/images/seminar.png') }}" width="210px" /></a>
                                </div>
                                <div class="text">
                                    <a href="{{ url('events/seminar') }}"><h4>Seminar</h4></a>
                                    <h5>Regional Yogyakarta</h5>
                                    <!-- <p>Test</p> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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
                                    <h5>Regional Yogyakarta</h5>
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
                                    <h5>Regional Yogyakarta</h5>
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
                                <p>+6282134300518</p>
                                <p>tachmidz96@gmail.com</p>
                                <p>Line : tahmid1412</p>
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
                                 <p>+6281328733696</p>
                                <p>nabilftd@gmail.com</p>
                                <p>Line : nabilftd</p>
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
                                 <p>+6285878770006</p>
                                <p>-</p>
                                <p>Line : -</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section section-testimonial">
                <div class="container">
                    <h4 class="header-text text-center">What people think</h4>
<div class="testimonialWrap">
  <div class="testimonials">
    <div id="tab1" class="testimonialContent">
        <div class="face">
            <img src="{{ asset('assets/images/hendrik.png') }}">
        </div>
        <div class="name">
            <h1>Hendrik S.T, M.Eng</h1>
            <h3>Kepala Jurusan Teknik Informatika FTI UII</h3>
        </div>
        <div class="testimoni">
            <p>"Porsematif adalah salah satu kegiatan positif karena dapat menyalurkan minat & bakat mahasiswa. Kita boleh berprestasi dibidang akademik namun diluar itu kita juga harus bisa menyeimbangkan diri dengan kegiatan-kegiatan non-akademik selain itu kegiatan ini juga menjadi wadah interaksi bersama untuk saling bersilaturahmi. Ditahun ini Porsematif memiliki kemajuan dengan agenda perlombaan yang diperluas hingga bisa membantu memperkenalkan Teknik Informatika UII dan HMTF ke luar kampus"</p>
        </div>
    </div>
    <div id="tab2" class="testimonialContent">
        <div class="face">
            <img src="{{ asset('assets/images/fathul.png') }}">
        </div>
        <div class="name">
            <h1>Fathul Khair</h1>
            <h3>Ketua HMTF FTI UII</h3>
        </div>
        <div class="testimoni">
            <p>"Semoga di PORSEMATIF 2016 ini seluruh elemen  Jurusan Teknik Informatika UII baik Mahasiswa, Alumni dan Civitas Akademika dapat menyalurkan minat dan bakatnya dengan tanpa menghilangkan aspek kekeluargaan, serta mampu menjadi sebuah wadah silaturahmi bagi teman teman mahasiswa Jurusan Teknik Informatika dan Ilmu Komputer se DIY"</p>
        </div>
    </div>
    <div id="tab3" class="testimonialContent">
        <div class="face">
            <img src="{{ asset('assets/images/tomy.png') }}">
        </div>
        <div class="name">
            <h1>Tomy Afif</h1>
            <h3>Kabid Batas HMTF FTI UII</h3>
        </div>
        <div class="testimoni">
            <p>"Saya berharap semoga kedepannya porsematif semakin eksis guna membawa nama himpunan mahasiswa Teknik Informatika, Universitas Islam Indonesia yang lebih baik"</p>
        </div>
    </div>
  </div>

  <div class="testimonialTabs">
    <ol>
        <a href="#tab1"><li></li></a>
        <a href="#tab2"><li></li></a>
        <a href="#tab3"><li></li></a>
    </ol>
  </div>
</div>
                </div>
            </div>
            <div class="section section-gray section-clients" id="sponsors">
                <div class="container text-center">
                    <h4 class="header-text">Our Sponsors</h4>
                    <div class="logos">
                        <ul class="list-unstyled">
                            <li ><img src="{{ asset('assets/images/starcomp.png') }}" width="200px" /></li>
                            <li ><img src="{{ asset('assets/images/mangrove.png') }}" width="150px" /></li>
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
                        &copy; 2016 <a href="https://nmfzone.com">INVOSE</a>, made with <i class="fa fa-heart"></i>
                    </div>
                </div>
            </footer>
        </div>

        <script src="{{ asset('assets/js/script.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('assets/js/custom.js') }}" type="text/javascript"></script>
    </body>
</html>
