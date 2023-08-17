<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>{{ config('app.name', 'Laravel') }} | @yield('subtitle')</title>

  <meta charset="utf-8">
  <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="">

  <!-- Google Fonts -->
  <link href='https://fonts.googleapis.com/css?family=Poppins:400,600,700%7CRoboto:400,400i,700' rel='stylesheet'>

  <!-- Css -->
  <link rel="stylesheet" href="{{ asset('templates/satu/css/bootstrap.min.css')}}" />
  <link rel="stylesheet" href="{{ asset('templates/satu/css/font-icons.css')}}" />
  <link rel="stylesheet" href="{{ asset('templates/satu/css/style.css')}}" />

  <!-- Favicons -->
  <link rel="shortcut icon" href="{{ asset('templates/satu/img/favicon.ico')}}">
  <link rel="apple-touch-icon" href="{{ asset('templates/satu/img/apple-touch-icon.png')}}">
  <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('templates/satu/img/apple-touch-icon-72x72.png')}}">
  <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('templates/satu/img/apple-touch-icon-114x114.png')}}">

  <!-- Lazyload -->
  <script type="text/javascript" src="{{ asset('templates/satu/js/lazysizes.min.js')}}"></script>

</head>

<body>

  <!-- Preloader -->
  <div class="loader-mask">
    <div class="loader">
      <div></div>
    </div>
  </div>

  <!-- Bg Overlay -->
  <div class="content-overlay"></div>

  <!-- Subscribe Modal -->
  <div class="modal fade" id="subscribe-modal" tabindex="-1" role="dialog" aria-labelledby="subscribeModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="subscribeModalLabel">Subscribe for Newsletter</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form class="mc4wp-form" method="post">
            <div class="mc4wp-form-fields">
              <p>
                <i class="mc4wp-form-icon ui-email"></i>
                <input type="email" name="EMAIL" placeholder="Your email" required="">
              </p>
              <p>
                <input type="submit" class="btn btn-md btn-color" value="Subscribe">
              </p>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div> <!-- end subscribe modal -->
  

  <!-- Mobile Sidenav -->    
  <header class="sidenav" id="sidenav">
    <!-- Search -->
    <div class="sidenav__search-mobile">
      <form method="get" class="sidenav__search-mobile-form">
        <input type="search" class="sidenav__search-mobile-input" placeholder="Search..." aria-label="Search input">
        <button type="submit" class="sidenav__search-mobile-submit" aria-label="Submit search">
          <i class="ui-search"></i>
        </button>
      </form>
    </div>

    <nav>
      <ul class="sidenav__menu" role="menubar">
        <li>
          <a href="{{ url('/') }}" class="sidenav__menu-link">Home</a>
        </li>    
        @foreach($categories->take(5) as $item)               
        <li>
          <a href="{{route('main.categorypost',$item->slug)}}" class="sidenav__menu-link">{{$item->name}}</a>        
        </li>
         @endforeach 
         @foreach($pages as $item)
        <li>
          <a href="{{ route('main.pages', $item->slug) }}" class="sidenav__menu-link">{{ $item->title }}</a>
        </li>
         @endforeach
      </ul>
    </nav>

    <div class="socials sidenav__socials "> 
      <a class="social-facebook" href="#" target="_blank" aria-label="facebook">
        <i class="ui-facebook"></i>
      </a>
      <a class="social-twitter" href="#" target="_blank" aria-label="twitter">
        <i class="ui-twitter"></i>
      </a>
      <a class="social-youtube" href="#" target="_blank" aria-label="youtube">
        <i class="ui-youtube"></i>
      </a>
    </div>
  </header> <!-- end mobile sidenav -->


  <main class="main oh" id="main">

    <!-- Navigation -->
    <header class="nav">

      <div class="nav__holder nav--sticky">
        <div class="container relative">

          <div class="flex-parent">

            <!-- Mobile Menu Button -->
            <button class="nav-icon-toggle" id="nav-icon-toggle" aria-label="Open mobile menu">
              <span class="nav-icon-toggle__box">
                <span class="nav-icon-toggle__inner"></span>
              </span>
            </button> <!-- end mobile menu button -->

            <!-- Logo -->
            <a href="{{ url('/') }}" class="logo">
              <img class="logo__img" src="{{ asset('templates/satu/img/log.png')}}" srcset="{{ asset('templates/satu/img/log.png')}} 1x, {{ asset('templates/satu/img/log@2x.png')}} 2x" width="111px" height="30px" alt="logo">
            </a>

            <!-- Nav-wrap -->
            <nav class="flex-child nav__wrap d-none d-lg-block">              
              <ul class="nav__menu">

                <li class="nav__dropdown active">
                  <a href="{{ url('/') }}">Home</a>
                </li>
                @foreach($categories->take(5) as $item)
                <li class="nav__dropdown">
                  <a href="{{route('main.categorypost',$item->slug)}}">{{$item->name}}</a>
                </li>
                @endforeach 
                @foreach($pages as $item)
                <li>
                  <a href="{{ route('main.pages', $item->slug) }}">{{ $item->title }}</a>
                </li>
                @endforeach 

              </ul> <!-- end menu -->
            </nav> <!-- end nav-wrap -->

            <!-- Nav Right -->
            <div class="nav__right nav--align-right d-none d-lg-flex">

              <!-- Socials -->
              <div class="nav__right-item socials socials--nobase nav__socials "> 
                <a class="social-facebook" href="#" target="_blank">
                  <i class="ui-facebook"></i>
                </a>
                <a class="social-twitter" href="#" target="_blank">
                  <i class="ui-twitter"></i>
                </a>
                <a class="social-youtube" href="#" target="_blank">
                  <i class="ui-youtube"></i>
                </a>
              </div>

              <div class="nav__right-item">
                <a href="" class="nav__subscribe" data-toggle="modal" data-target="#subscribe-modal">Subscribe</a>
              </div>

              <!-- Search -->
              <div class="nav__right-item nav__search">
                <a href="#" class="nav__search-trigger" id="nav__search-trigger">
                  <i class="ui-search nav__search-trigger-icon"></i>
                </a>
                <div class="nav__search-box" id="nav__search-box">
                  <form class="nav__search-form">
                    <input type="text" placeholder="Search an article" class="nav__search-input">
                    <button type="submit" class="nav__search-button btn btn-md btn-color btn-button">
                      <i class="ui-search nav__search-icon"></i>
                    </button>
                  </form>
                </div>
                
              </div>

            </div> <!-- end nav right -->  
        
          </div> <!-- end flex-parent -->
        </div> <!-- end container -->

      </div>
    </header> <!-- end navigation -->
    
    <div class="main-container" id="main-container">

      @yield('content')

      <!-- Footer -->
      <footer class="footer">
        <div class="container">
          <div class="footer__widgets">
            <div class="row">

              <div class="col-lg-3 col-md-6">
                <div class="widget">
                  <img src="{{ asset('templates/satu/img/log.png')}}" srcset="{{ asset('templates/satu/img/log.png')}} 1x, {{ asset('templates/satu/img/log@2x.png')}} 2x" width="111px" height="30px" class="logo__img" alt="">
                  <p class="mt-20">We bring you the best Premium WordPress Themes.</p>

                  <div class="socials mt-20">
                    <a href="#" class="social-facebook" aria-label="facebook"><i class="ui-facebook"></i></a>
                    <a href="#" class="social-twitter" aria-label="twitter"><i class="ui-twitter"></i></a>
                    <a href="#" class="social-google-plus" aria-label="google+"><i class="ui-google"></i></a>
                    <a href="#" class="social-instagram" aria-label="instagram"><i class="ui-instagram"></i></a>
                  </div>
                </div>
              </div>

              <div class="col-lg-3 col-md-6">
                <h4 class="widget-title white">twitter feed</h4>
                <div class="tweets-container">
                  <div id="tweets"></div>                  
                </div>
              </div>
              

              <div class="col-lg-3 col-md-6">
                <div class="widget widget_nav_menu">
                  <h4 class="widget-title white">Useful Links</h4>
                  <ul>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Contact</a></li>
                    <li><a href="#">Projects</a></li>
                    <li><a href="#">Wordpress Themes</a></li>
                    <li><a href="#">Advertise</a></li>
                  </ul>
                </div>
              </div>

              <div class="col-lg-3 col-md-6">
                <div class="widget widget__newsletter">
                  <h4 class="widget-title white">subscribe to deothemes</h4>
                  <p>Join our Newsletter</p>

                  <form class="mc4wp-form" method="post">
                    <div class="mc4wp-form-fields">
                      <p>
                        <i class="mc4wp-form-icon ui-email"></i>
                        <input type="email" name="EMAIL" placeholder="Your email" required="">
                      </p>
                      <p>
                        <input type="submit" class="btn btn-md btn-color" value="Subscribe">
                      </p>
                    </div>
                  </form>
                  
                </div>
              </div>

            </div>
          </div>    
        </div> <!-- end container -->

        <div class="footer__bottom">
          <div class="container text-center">
            <span class="copyright">
              &copy; 2020 - {{ date('Y') }} {{ config('app.name', 'Laravel') }}
            </span>
          </div>
        </div> <!-- end bottom footer -->
      </footer> <!-- end footer -->

    </div> <!-- end main container -->

    <div id="back-to-top">
      <a href="#top" aria-label="Go to top"><i class="ui-arrow-up"></i></a>
    </div>

  </main> <!-- end main-wrapper -->


  
  <!-- jQuery Scripts -->
  <script type="text/javascript" src="{{ asset('templates/satu/js/jquery.min.js')}}"></script>
  <script type="text/javascript" src="{{ asset('templates/satu/js/bootstrap.min.js')}}"></script>
  <script type="text/javascript" src="{{ asset('templates/satu/js/easing.min.js')}}"></script>
  <script type="text/javascript" src="{{ asset('templates/satu/js/owl-carousel.min.js')}}"></script>
  <script type="text/javascript" src="{{ asset('templates/satu/js/modernizr.min.js')}}"></script>
  <script type="text/javascript" src="{{ asset('templates/satu/js/scripts.js')}}"></script>

</body>
</html>