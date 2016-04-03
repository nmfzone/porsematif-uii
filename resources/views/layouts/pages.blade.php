<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ $pageTitle ? $pageTitle . " | " : $pageTitle }} {{ Site::get('site_name') }}</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700" rel='stylesheet' type='text/css'>
        <link href="{{ asset('assets/css/fonts.min.css') }}" rel="stylesheet" type="text/css">

        <link href="{{ asset('assets/css/style.min.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('assets/css/landing.min.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('assets/css/custom.min.css') }}" rel="stylesheet" type="text/css">

        @yield('stylesheet')

        <link rel="icon" type="image/x-icon" href="{{ asset(Site::get('favicon')) }}">

    </head>
    <body id="pages" class="landing-page landing-page1">
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
                            <a href="{{ url('/competitions/internal') }}">Internal</a>
                        </li>
                        <li>
                            <a href="{{ url('/#events') }}">Events</a>
                        </li>
                        <li>
                            <a href="{{ url('/#competitions') }}">Competitions</a>
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

            </div>
        </div>
        @yield('content')
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
                             <p>+6281871675188</p>
                            <p>hello@porsematif.com</p>
                            <p>Line : porse</p>
                        </div>
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
                                <a href="{{ url('/#home') }}">
                                Home
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('/#events') }}">
                                Events
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('/#competitions') }}">
                                Competitions
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('/#contacts') }}">
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

        @yield('javascript')

    </body>
</html>
