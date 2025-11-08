@extends('layouts.main')
@section('title', 'Bejelentkezés')
@section('content')
<!-- ======= Breadcrumbs ======= -->
<div class="breadcrumbs d-flex align-items-center" style="background-image: url('{{ asset('nova/img/breadcrumbs-bg.jpg') }}');">
  <div class="container position-relative d-flex flex-column align-items-center">
    <h2>Bejelentkezés</h2>
    <ol>
      <li><a href="{{ route('home') }}">Főoldal</a></li>
      <li>Bejelentkezés</li>
    </ol>
  </div>
</div>
<!-- End Breadcrumbs -->
<section id="login-form" class="section-bg">
    <div class="container" data-aos="fade-up">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <!-- Session Status -->
                @if (session('status'))
                    <div class="alert alert-success mb-4">
                        {{ session('status') }}
                    </div>
                @endif
                <form method="POST" action="{{ route('login') }}" class="nova-form">
                    @csrf
                    <!-- Email Address -->
                    <div class="mb-3">
                        <label for="email" class="form-label">E-mail cím</label>
                        <input id="email" class="form-control" type="email" name="email" value="{{ old('email') }}" required autofocus autocomplete="username" />
                        @error('email')
                            <div class="text-danger mt-2">{{ $message }}</div>
                        @enderror
                    </div>
                    <!-- Password -->
                    <div class="mb-3">
                        <label for="password" class="form-label">Jelszó</label>
                        <input id="password" class="form-control" type="password" name="password" required autocomplete="current-password" />
                        @error('password')
                            <div class="text-danger mt-2">{{ $message }}</div>
                        @enderror
                    </div>
                    <!-- Remember Me -->
                    <div class="mb-3 form-check">
                        <input id="remember_me" type="checkbox" class="form-check-input" name="remember">
                        <label for="remember_me" class="form-check-label">Emlékezz rám</label>
                    </div>
                    <div class="d-flex justify-content-between align-items-center">
                        @if (Route::has('password.request'))
                            <a class="text-decoration-underline" href="{{ route('password.request') }}">Elfelejtetted a jelszavad?</a>
                        @endif
                        <button type-="submit" class="button button-primary">Bejelentkezés</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection