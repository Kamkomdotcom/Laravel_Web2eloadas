@extends('layouts.main')
@section('title', 'Film Szerkesztése')
@section('content')
<!-- ======= Breadcrumbs ======= -->
<div class="breadcrumbs d-flex align-items-center" style="background-image: url('{{ asset('nova/img/breadcrumbs-bg.jpg') }}');">
  <div class="container position-relative d-flex flex-column align-items-center">
    <h2>Film Szerkesztése: {{ $film->filmcim }}</h2>
    <ol>
      <li><a href="{{ route('home') }}">Főoldal</a></li>
      <li><a href="{{ route('crud.filmek.index') }}">Filmek CRUD</a></li>
      <li>Szerkesztés</li>
    </ol>
  </div>
</div><!-- End Breadcrumbs -->
<section id="crud-edit" class="section-bg">
  <div class="container" data-aos="fade-up">
    <div class="row">
      <div class="col-lg-8 offset-lg-2">
        <!-- Hibaüzenetek megjelenítése -->
        @if ($errors->any())
          <div class="alert alert-danger">
            <strong>Hoppá!</strong> Hiba történt a bevitt adatokkal.<br><br>
            <ul>
              @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
              @endforeach
            </ul>
          </div>
        @endif
        <form action="{{ route('crud.filmek.update', ['filmek' => $film->fkod]) }}" method="POST">
          @csrf <!-- Kötelező CSRF token -->
          @method('PATCH')
          <div class="row">
            <!-- Film címe -->
            <div class="col-md-12 mb-3">
              <label for="filmcim" class="form-label">Film címe</label>
              <input type="text" class="form-control" id="filmcim" name="filmcim" value="{{ old('filmcim', $film->filmcim) }}" required>
            </div>
            <!-- Színes -->
            <div class="col-md-6 mb-3">
                <div class="form-check">
                    <input type="hidden" name="szines" value="0">
                    <input class="form-check-input" type="checkbox" id="szines" name="szines" value="1" @if(old('szines', $film->szines)) checked @endif>
                    <label class="form-check-label" for="szines">
                        Színes film?
                    </label>
                </div>
            </div>
            <!-- Szinkron -->
            <div class="col-md-6 mb-3">
              <label for="szinkron" class="form-label">Szinkron</label>
              <input type="text" class="form-control" id="szinkron" name="szinkron" value="{{ old('szinkron', $film->szinkron) }}">
            </div>
            <!-- Származás -->
            <div class="col-md-6 mb-3">
              <label for="szarmazas" class="form-label">Származás</label>
              <input type="text" class="form-control" id="szarmazas" name="szarmazas" value="{{ old('szarmazas', $film->szarmazas) }}">
            </div>
            <!-- Műfaj -->
            <div class="col-md-6 mb-3">
              <label for="mufaj" class="form-label">Műfaj</label>
              <input type="text" class="form-control" id="mufaj" name="mufaj" value="{{ old('mufaj', $film->mufaj) }}">
            </div>
            <!-- Hossz -->
            <div class="col-md-6 mb-3">
              <label for="hossz" class="form-label">Hossz (perc)</label>
              <input type="number" class="form-control" id="hossz" name="hossz" value="{{ old('hossz', $film->hossz) }}">
            </div>
          </div>
          <div class="text-center mt-3">
            <button type="submit" class="button button-lg radius-10">Módosítások Mentése</button>
            <a href="{{ route('crud.filmek.index') }}" class="btn btn-secondary ms-2">Mégsem</a>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>
@endsection