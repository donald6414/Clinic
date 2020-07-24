<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Fide`s Clinic</title>
  {{-- style --}}
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="../../assets/js/rs-plugin/css/settings.css" media="screen">
  <link rel="stylesheet" type="text/css" href="../../assets/css/isotope.css" media="screen">
  <link rel="stylesheet" href="../../assets/css/flexslider.css" type="text/css">
  <link rel="stylesheet" href="../../assets/js/fancybox/jquery.fancybox.css" type="text/css" media="screen">
  <link rel="stylesheet" href="../../assets/css/bootstrap.css">
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Noto+Serif:400,400italic,700|Open+Sans:300,400,600,700">

  <link rel="stylesheet" href="../../assets/css/style.css">
  <!-- skin -->
  <link rel="stylesheet" href="../../assets/skin/default.css">
  {{-- Style --}}
</head>

<body>

  <section id="header" class="appear"></section>
  <div class="navbar navbar-fixed-top" role="navigation"
    data-0="line-height:100px; height:100px; background-color:rgba(0,0,0,0.3);"
    data-300="line-height:60px; height:60px; background-color:rgba(5, 42, 62, 1);">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="fa fa-bars color-white"></span>
        </button>
        <div class="navbar-logo">
          <a href="#"><img data-0="width:90px;" data-300=" width:70px;" src="assets/img/logodon3.png" alt=""></a>
        </div>
      </div>
      <div class="navbar-collapse collapse">
        <ul class="nav navbar-nav" data-0="margin-top:20px;" data-300="margin-top:5px;">
          <li class="active"><a href="{{ url('/') }}">Home</a></li>
          <li><a href="{{ url('/') }}#section-about">About</a></li>
          <li><a href="../../blog">Blog</a></li>
          <li><a href="{{ url('/') }}#section-contact">Contact</a></li>
          @if (!Auth::guest())
          <li><a href="../../request">Requests</a></li>
          @endif
          <li>
            <a href="{{ route('login') }}">{{ __('Login') }}</a></li>
          <li>
            @if (!Auth::guest())
            <a href="{{ route('logout') }}" onclick="event.preventDefault();
                               document.getElementById('logout-form').submit();">
              {{ __('Logout') }}
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              @csrf
            </form>
            @endif
          </li>
        </ul>
      </div>
      <!--/.navbar-collapse -->
    </div>
  </div>

  <section id="intro">
    <div class="intro-content">
      <h2>Welcome to Fide`s Clinic!</h2>
      <h3>Bringing health to life for the whole family.</h3>
      <div>
        <a href="#section-services" class="btn-get-started scrollto">Get Started</a>
      </div>
    </div>
  </section>


  @yield('content')

  <section id="footer" class="section footer">
    <div class="container">
      <div class="row animated opacity mar-bot20" data-andown="fadeIn" data-animation="animation">
        <div class="col-sm-12 align-center">
          <ul class="social-network social-circle">
            <li><a href="#" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a></li>
            <li><a href="#" class="icoInstagram" title="instagram"><i class="fa fa-instagram"></i></a></li>
            <li><a href="#" class="icoTwitter" title="Twitter"><i class="fa fa-twitter"></i></a></li>
            <li><a href="#" class="icoLinkedin" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
          </ul>
        </div>
      </div>
      <div class="row align-center mar-bot20">
        {{-- <ul class="footer-menu">
              <li><a href="#">Home</a></li>
              <li><a href="#">About us</a></li>
              <li><a href="#">Privacy policy</a></li>
              <li><a href="#">Get in touch</a></li>
            </ul> --}}
      </div>
      <div class="row align-center copyright">
        <div class="col-sm-12">
          <p>Copyright &copy; All rights reserved</p>
        </div>
      </div>
      <div class="credits">
        Designed by <a href="http://donaldtz.com/">donaldtz.com</a>
      </div>
    </div>

  </section>
  <a href="#header" class="scrollup"><i class="fa fa-chevron-up"></i></a>

  <!-- Javascript Library Files -->
  <script src="../../assets/js/modernizr-2.6.2-respond-1.1.0.min.js"></script>
  <script src="../../assets/js/jquery.js"></script>
  <script src="../../assets/js/jquery.easing.1.3.js"></script>
  <script src="../../assets/js/bootstrap.min.js"></script>
  <script src="../../assets/js/jquery.isotope.min.js"></script>
  <script src="../../assets/js/jquery.nicescroll.min.js"></script>
  <script src="../../assets/js/fancybox/jquery.fancybox.pack.js"></script>
  <script src="../../assets/js/skrollr.min.js"></script>
  <script src="../../assets/js/jquery.scrollTo.min.js"></script>
  <script src="../../assets/js/jquery.localScroll.min.js"></script>
  <script src="../../assets/js/stellar.js"></script>
  <script src="../../assets/js/jquery.appear.js"></script>
  <script src="../../assets/js/jquery.flexslider-min.js"></script>

  <!-- Contact Form JavaScript File -->
  <script src="../../assets/contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="../../assets/js/main.js"></script>
</body>

</html>