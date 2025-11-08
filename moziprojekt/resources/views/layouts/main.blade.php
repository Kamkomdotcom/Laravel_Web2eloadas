<!DOCTYPE html>
<html class="no-js" lang="hu">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>@yield('title', 'MoziProjekt')</title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- ========================= CSS ========================= -->
     <link rel="stylesheet" href="{{ asset('nova/css/mozi-style.css') }}"/>
    <link rel="stylesheet" href="{{ asset('nova/css/bootstrap-5.0.0-beta1.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('nova/css/LineIcons.2.0.css') }}"/>
    <link rel="stylesheet" href="{{ asset('nova/css/tiny-slider.css') }}"/>
    <link rel="stylesheet" href="{{ asset('nova/css/animate.css') }}"/>
    <link rel="stylesheet" href="{{ asset('nova/css/lindy-uikit.css') }}"/>
  </head>
  <body>
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
    <!-- ========================= header-6 start ========================= -->
    <header class="header header-6">
      <div class="navbar-area">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-12">
              <nav class="navbar navbar-expand-lg">
                <a class="navbar-brand" href="{{ route('home') }}">
                  <i class="lni lni-video"></i> MoziProjekt
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent6" 
                        aria-controls="navbarSupportedContent6" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="toggler-icon"></span>
                  <span class="toggler-icon"></span>
                  <span class="toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent6">
                  <ul id="nav6" class="navbar-nav ms-auto">
                    <!-- Főoldal -->
                    <li class="nav-item">
                      <a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}">Főoldal</a>
                    </li>
                    <!-- Adatbázis Dropdown -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="databaseDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Adatbázis
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="databaseDropdown">
                            <li><a class="dropdown-item" href="{{ route('mozik') }}">Mozik</a></li>
                            <li><a class="dropdown-item" href="{{ route('filmek') }}">Filmek</a></li>
                            <li><a class="dropdown-item" href="{{ route('helyek') }}">Vetítések (Hely)</a></li>
                        </ul>
                    </li>
                    <!-- Kapcsolat -->
                    <li class="nav-item">
                      <a href="{{ route('kapcsolat') }}" class="{{ request()->routeIs('kapcsolat') ? 'active' : '' }}">Kapcsolat</a>
                    </li>
                    <!-- Diagram -->
                    <li class="nav-item">
                      <a href="{{ route('diagram') }}" class="{{ request()->routeIs('diagram') ? 'active' : '' }}">Diagram</a>
                    </li>
                    <!-- === Authentikáció menü === -->
                    @guest
                      <!-- Ha a felhasználó vendég -->
                      <li class="nav-item">
                        <a href="{{ route('login') }}" class="{{ request()->routeIs('login') ? 'active' : '' }}">Bejelentkezés</a>
                      </li>
                      <li class="nav-item">
                        <a href="{{ route('register') }}" class="{{ request()->routeIs('register') ? 'active' : '' }}">Regisztráció</a>
                      </li>
                    @endguest
                    @auth
                      <!-- Ha a felhasználó ba van jelentkezve -->
                      <!-- CRUD -->
                      <li class="nav-item">
                        <a href="{{ route('crud.filmek.index') }}" class="{{ request()->routeIs('crud.filmek.*') ? 'active' : '' }}">Film CRUD</a>
                      </li>
                      <!-- Üzenetek -->
                      <li class="nav-item">
                        <a href="{{ route('uzenetek') }}" class="{{ request()->routeIs('uzenetek') ? 'active' : '' }}">Üzenetek</a>
                      </li>
                      <!-- Felhasználó Menü -->
                      <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          {{ Auth::user()->name }}
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="userDropdown">
                          <!--Admin menü -->
                          @if(Auth::user()->role == 'admin')
                            <li><a class="dropdown-item" href="{{ route('admin') }}">Admin Felület</a></li>
                          @endif
                          <li><hr class="dropdown-divider"></li>
                          <li>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                Kijelentkezés
                            </a>
                          </li>
                        </ul>
                      </li>
                    @endauth
                  </ul>
                </div>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </header>
    <!-- ========================= header-6 end ========================= -->
    <!-- Az aloldalak tartalmai (pll.: welcome.blade.php) ide töltődik be -->
    <main>
      @yield('content')
    </main>
    <!-- ========================= footer style-4 start ========================= -->
    <footer class="footer footer-style-4">
      <div class="container">
        <div class="widget-wrapper">
          <div class="row">
            <div class="col-xl-3 col-lg-4 col-md-6">
              <div class="footer-widget wow fadeInUp" data-wow-delay=".2s">
                <div class="logo">
                  <a class="footer-logo-text" href="{{ route('home') }}">MoziProjekt</a>
                </div>
                <p class="desc">Böngéssz a legjobb moziműsorok között, egyszerűen és gyorsan.</p>
              </div>
            </div>
            <div class="col-xl-2 offset-xl-1 col-lg-2 col-md-6 col-sm-6">
              <div class="footer-widget wow fadeInUp" data-wow-delay=".3s">
                <h6>Linkek</h6>
                <ul class="links">
                  <li> <a href="{{ route('home') }}">Főoldal</a> </li>
                  <li> <a href="{{ route('mozik') }}">Adatbázis</a> </li>
                  <li> <a href="{{ route('kapcsolat') }}">Kapcsolat</a> </li>
                </ul>
              </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
              <div class="footer-widget wow fadeInUp" data-wow-delay=".4s">
                <h6>Oldalak</h6>
                <ul class="links">
                  <li> <a href="{{ route('login') }}">Bejelentkezés</a> </li>
                  <li> <a href="{{ route('register') }}">Regisztráció</a> </li>
                  <li> <a href="{{ route('dashboard') }}">Dashboard</a> </li>
                </ul>
              </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6">
              <div class="footer-widget wow fadeInUp" data-wow-delay=".5s">
                <h6>A projektről</h6>
                <p>Ez a weboldal a WEB-2 Előadás projekt keretében készült.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="copyright-wrapper wow fadeInUp" data-wow-delay=".2s">
          <p>Design and Developed by <a href="https://uideck.com" rel="nofollow" target="_blank">UIdeck</a> Built-with <a href="https://uideck.com" rel="nofollow" target="_blank">Lindy UI Kit</a>. Distributed by <a href="https://themewagon.com" target="_blank">ThemeWagon</a></p>
        </div>
      </div>
    </footer>
    <!-- ========================= footer style-4 end ========================= -->
    <!-- ========================= scroll-top start ========================= -->
    <a href="#" class="scroll-top"> <i class="lni lni-chevron-up"></i> </a>
    <!-- ========================= scroll-top end ========================= -->
    <!-- Kijelentkezés -->
    @auth
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
      @csrf
    </form>
    @endauth
    <!-- ========================= JS here ========================= -->
    <script src="{{ asset('nova/js/bootstrap-5.0.0-beta1.min.js') }}"></script>
    <script src="{{ asset('nova/js/tiny-slider.js') }}"></script>
    <script src="{{ asset('nova/js/wow.min.js') }}"></script>
    <script src="{{ asset('nova/js/main.js') }}"></script>
    <!-- Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    @stack('scripts')
  </body>
</html>