@extends('layouts.main')

@section('title', 'Főoldal - MoziProjekt')

@section('content')

  <!-- ========================= hero-section-wrapper-5 start ========================= -->
  <section id="home" class="hero-section-wrapper-5">

    <!-- ========================= hero-5 start ========================= -->
    <!-- JAVÍTVA: 'assets/' -> 'nova/' -->
    <div class="hero-section hero-style-5 img-bg" style="background-image: url('{{ asset('nova/img/hero/hero-5/hero-bg.svg') }}')">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <div class="hero-content-wrapper">
              <h2 class="mb-30 wow fadeInUp" data-wow-delay=".2s">Üdvözlünk a MoziProjekt oldalán!</h2>
              <p class="mb-30 wow fadeInUp" data-wow-delay=".4s">Böngéssz a legújabb filmek és moziműsorok között.</p>
              <a href="{{ route('filmek') }}" class="button button-lg radius-50 wow fadeInUp" data-wow-delay=".6s">Filmek megtekintése <i class="lni lni-chevron-right"></i> </a>
            </div>
          </div>
          <div class="col-lg-6 align-self-end">
            <div class="hero-image wow fadeInUp" data-wow-delay=".5s">
              <!-- JAVÍTVA: 'assets/' -> 'nova/' -->
              <img src="{{ asset('nova/img/hero/hero-5/hero-img.svg') }}" alt="">
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
          <div class="text-center section-title mb-60">
            <h3 class="mb-15 wow fadeInUp" data-wow-delay=".2s">Szolgáltatásaink</h3>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-4 col-md-6">
          <div class="single-feature wow fadeInUp" data-wow-delay=".2s">
            <div class="icon">
              <i class="lni lni-database"></i>
              <svg width="110" height="72" viewBox="0 0 110 72" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M110 54.7589C110 85.0014 85.3757 66.2583 55 66.2583C24.6243 66.2583 0 85.0014 0 54.7589C0 24.5164 24.6243 0 55 0C85.3757 0 110 24.5164 110 54.7589Z" fill="#EBF4FF"/>
                </svg>              
            </div>
            <div class="content">
              <h5>Adatbázis Kezelés</h5>
              <p>Filmek, mozik és vetítések listázása ORM segítségével.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="single-feature wow fadeInUp" data-wow-delay=".4s">
            <div class="icon">
              <i class="lni lni-bar-chart"></i>
              <svg width="110" height="72" viewBox="0 0 110 72" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M110 54.7589C110 85.0014 85.3757 66.2583 55 66.2583C24.6243 66.2583 0 85.0014 0 54.7589C0 24.5164 24.6243 0 55 0C85.3757 0 110 24.5164 110 54.7589Z" fill="#EBF4FF"/>
                </svg> 
            </div>
            <div class="content">
              <h5>Dinamikus Diagram</h5>
              <p>Adatbázis adatok vizualizálása Chart.js segítségével.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="single-feature wow fadeInUp" data-wow-delay=".6s">
            <div class="icon">
              <i class="lni lni-users"></i>
              <svg width="110" height="72" viewBox="0 0 110 72" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M110 54.7589C110 85.0014 85.3757 66.2583 55 66.2583C24.6243 66.2583 0 85.0014 0 54.7589C0 24.5164 24.6243 0 55 0C85.3757 0 110 24.5164 110 54.7589Z" fill="#EBF4FF"/>
                </svg> 
            </div>
            <div class="content">
              <h5>Autentikáció</h5>
              <p>Látogató, felhasználó és admin szerepkörök kezelése.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ========================= feature style-5 end ========================= -->

@endsection

