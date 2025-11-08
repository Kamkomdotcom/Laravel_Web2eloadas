@extends('layouts.main')

@section('title', 'Admin felület')

@section('content')

<!-- ======= Breadcrumbs ======= -->
<div class="breadcrumbs d-flex align-items-center" style="background-image: url('{{ asset('nova/img/breadcrumbs-bg.jpg') }}');">
  <div class="container position-relative d-flex flex-column align-items-center">
    <h2>Admin felület</h2>
    <ol>
      <li><a href="{{ route('home') }}">Főoldal</a></li>
      <li>Admin</li>
    </ol>
  </div>
</div><!-- End Breadcrumbs -->

<!-- ======= Admin Section ======= -->
<section id="admin-page" class="section-bg">
  <div class="container" data-aos="fade-up">

    <div class="section-header">
      <h2>Üdvözlünk az Admin felületen!</h2>
      <p>Ezt az oldalt csak 'admin' szerepkörrel rendelkező felhasználók láthatják.</p>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="alert alert-success text-center">
                <h4 class="alert-heading">Sikeres jogosultság ellenőrzés!</h4>
                <p>Bejelentkezve mint: <strong>{{ Auth::user()->name }}</strong> ({{ Auth::user()->email }})</p>
            </div>
        </div>
    </div>

  </div>
</section><!-- End Admin Section -->

@endsection