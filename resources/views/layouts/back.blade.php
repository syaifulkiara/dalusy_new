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
  @stack('styles')
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
          <h5 class="modal-title" id="subscribeModalLabel">Ready to Leave?</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <p>
            Select "Logout" below if you are ready to end your current session.
          </p>
          <p>
            <button class="btn btn-sm btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="btn btn-sm btn-color"><span>Logout</span></a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
          </p>
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
          <a href="{{ route('home') }}" class="sidenav__menu-link">Home</a>
        </li>    
                   
        <li>
          <a href="{{ route('articles.index')}}" class="sidenav__menu-link">Articles</a>        
        </li>
      
        <li>
          <a href="{{ route('categories.index')}}" class="sidenav__menu-link">Category</a>
        </li>

        <li>
          <a href="{{ route('pages.index')}}" class="sidenav__menu-link">Pages</a>        
        </li>
      
        <li>
          <a href="{{ route('comments.index')}}" class="sidenav__menu-link">Comments</a>
        </li>

        <li>
          <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="sidenav__menu-link">Logout</a>
          <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
          </form>
        </li>
        
      </ul>
    </nav>
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
            <a href="{{ route('home') }}" class="logo">
              <img class="logo__img" src="{{ asset('templates/satu/img/log.png')}}" srcset="{{ asset('templates/satu/img/log.png')}} 1x, {{ asset('templates/satu/img/log@2x.png')}} 2x" width="111px" height="30px" alt="logo">
            </a>

            <!-- Nav-wrap -->
            <nav class="flex-child nav__wrap d-none d-lg-block">              
              <ul class="nav__menu">

                <li class="active">
                  <a href="{{ route('home') }}">Home</a>
                </li>
                
                <li>
                  <a href="{{ route('articles.index')}}">Articles</a>
                </li>
              
                <li>
                  <a href="{{ route('categories.index')}}">Category</a>
                </li>

                 <li>
                  <a href="{{ route('pages.index')}}">Pages</a>
                </li>

                 <li>
                  <a href="{{ route('comments.index')}}">Comments</a>
                </li>
              
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
                <a href="" class="nav__subscribe" data-toggle="modal" data-target="#subscribe-modal">Logout</a>
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
  <script type="text/javascript" src="{{ asset('templates/satu/js/twitterFetcher_min.js')}}"></script>
  <script type="text/javascript" src="{{ asset('templates/satu/js/modernizr.min.js')}}"></script>
  <script type="text/javascript" src="{{ asset('templates/satu/js/scripts.js')}}"></script>
  @stack('scripts')
</body>
</html>