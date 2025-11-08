@extends('layouts.main')
@section('title', 'Kapcsolat')
@section('content')
<!-- ======= Breadcrumbs ======= -->
<div class="breadcrumbs d-flex align-items-center" style="background-image: url('{{ asset('nova/img/breadcrumbs-bg.jpg') }}');">
  <div class="container position-relative d-flex flex-column align-items-center">
    <h2>Kapcsolat</h2>
    <ol>
      <li><a href="{{ route('home') }}">Főoldal</a></li>
      <li>Kapcsolat</li>
    </ol>
  </div>
</div><!-- End Breadcrumbs -->
<!-- ========================= contact-style-3 start ========================= -->
<section id="contact" class="contact-section contact-style-3 section-bg">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xxl-5 col-xl-5 col-lg-7 col-md-10">
                <div class="section-title text-center mb-50">
                    <h3 class="mb-15">Lépjen kapcsolatba velünk!</h3> <p>Kérdése van? Küldjön nekünk üzenetet az űrlap segítségével.</p>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <!-- Sikerüzenet -->
                @if (session('success'))
                    <div class="alert alert-success" role="alert">
                        {{ session('success') }}
                    </div>
                @endif
                <!-- Hibaüzenet -->
                @if ($errors->any())
                    <div class="alert alert-danger" role="alert">
                        <strong>Hoppá!</strong> Kérjük, ellenőrizze a pirossal jelölt mezőket.
                    </div>
                @endif
                <div class="contact-form-wrapper">
                    <form action="{{ route('kapcsolat.store') }}" method="POST">
                        @csrf  <!-- Laravel biztonsági token -->
                        <div class="row">
                            <div class="col-md-6">
                                <div class="single-input">
                                    <input type="text" id="name" name="name" 
                                           class="form-input @error('name') is-invalid @enderror" 
                                           placeholder="Teljes név" value="{{ old('name') }}">
                                    <i class="lni lni-user"></i>
                                    @error('name')
                                        <div class="invalid-feedback d-block">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="single-input">
                                    <input type="email" id="email" name="email" 
                                           class="form-input @error('email') is-invalid @enderror" 
                                           placeholder="E-mail cím" value="{{ old('email') }}">
                                    <i class="lni lni-envelope"></i>
                                    @error('email')
                                        <div class="invalid-feedback d-block">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="single-input">
                                    <input type="text" id="subject" name="subject" 
                                           class="form-input @error('subject') is-invalid @enderror" 
                                           placeholder="Tárgy" value="{{ old('subject') }}">
                                    <i class="lni lni-text-format"></i>
                                    @error('subject')
                                        <div class="invalid-feedback d-block">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="single-input">
                                    <textarea name="message" id="message" 
                                              class="form-input @error('message') is-invalid @enderror" 
                                              placeholder="Üzenet" rows="6">{{ old('message') }}</textarea>
                                    <i class="lni lni-comments-alt"></i>
                                    @error('message')
                                        <div class="invalid-feedback d-block">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-button">
                                    <button type="submit" class="button"> <i class="lni lni-telegram-original"></i> Küldés</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
</section>
<!-- ========================= contact-style-3 end ========================= -->
@endsection

