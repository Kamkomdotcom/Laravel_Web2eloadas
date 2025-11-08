@extends('layouts.main')
@section('title', 'Regisztráció')
@section('content')
<!-- ======= Breadcrumbs ======= -->
<div class="breadcrumbs d-flex align-items-center" style="background-image: url('{{ asset('nova/img/breadcrumbs-bg.jpg') }}');">
  <div class="container position-relative d-flex flex-column align-items-center">
    <h2>Regisztráció</h2>
    <ol>
      <li><a href="{{ route('home') }}">Főoldal</a></li>
      <li>Regisztráció</li>
    </ol>
  </div>
</div><!-- End Breadcrumbs -->
<section id="register-form" class="section-bg">
    <div class="container" data-aos="fade-up">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <form method="POST" action="{{ route('register') }}" class="nova-form">
                    @csrf
                    <!-- Name -->
                    <div class="mb-3">
                        <label for="name" class="form-label">Név</label>
                        <input id="name" class="form-control" type="text" name="name" value="{{ old('name') }}" required autofocus autocomplete="name" />
                        @error('name')
                            <div class="text-danger mt-2">{{ $message }}</div>
                        @enderror
                    </div>
                    <!-- Email Address -->
                    <div class="mb-3">
                        <label for="email" class="form-label">E-mail cím</label>
                        <input id="email" class="form-control" type="email" name="email" value="{{ old('email') }}" required autocomplete="username" />
                        @error('email')
                            <div class="text-danger mt-2">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3"> <!-- Password -->
                        <label for="password" class="form-label">Jelszó</label>
                        <input id="password" class="form-control" type="password" name="password" required autocomplete="new-password" />
                        @error('password')
                            <div class="text-danger mt-2">{{ $message }}</div>
                        @enderror
                    </div>
                    <!-- Confirm Password -->
                    <div class="mb-3">
                        <label for="password_confirmation" class="form-label">Jelszó megerősítése</label>
                        <input id="password_confirmation" class="form-control" type="password" name="password_confirmation" required autocomplete="new-password" />
                        @error('password_confirmation')
                            <div class="text-danger mt-2">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="d-flex justify-content-between align-items-center">
                        <a class="text-decoration-underline" href="{{ route('login') }}">Már regisztráltál?</a>
                        <button type="submit" class="button button-primary">Regisztráció</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection