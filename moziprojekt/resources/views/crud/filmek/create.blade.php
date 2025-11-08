@extends('layouts.main')
@section('title', 'Új Film Létrehozása')
@section('content')
<!-- ======= Breadcrumbs ======= -->
<div class="breadcrumbs d-flex align-items-center" style="background-image: url('{{ asset('nova/img/breadcrumbs-bg.jpg') }}');">
  <div class="container position-relative d-flex flex-column align-items-center">
    <h2>Új Film Létrehozása</h2>
    <ol>
      <li><a href="{{ route('home') }}">Főoldal</a></li>
      <li><a href="{{ route('crud.filmek.index') }}">Filmek CRUD</a></li>
      <li>Létrehozás</li>
    </ol>
  </div>
</div><!-- End Breadcrumbs -->
<section id="crud-create" class="section-bg">
  <div class="container" data-aos="fade-up">
    <div class="section-header"> <h2>Új film adatai</h2> </div>
    <div class="row">
        <div class="col-lg-8 offset-lg-2">
            <!-- Hibaüzenetek listázása (ha vannak) -->
            @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Hoppá! Valami hiba történt.</strong>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="{{ route('crud.filmek.store') }}" method="POST">
                @csrf <!-- Kötelező CSRF token -->
                <div class="row">
                    <!-- Film címe -->
                    <div class="col-md-12 mb-3">
                        <label for="filmcim" class="form-label">Film címe*</label>
                        <input type="text" class="form-control" id="filmcim" name="filmcim" value="{{ old('filmcim') }}" required>
                    </div>
                    <!-- Színes -->
                    <div class="col-md-6 mb-3">
                        <label for="szines" class="form-label">Típus*</label>
                        <select class="form-select" id="szines" name="szines" required>
                            <option value="1" {{ old('szines', '1') == '1' ? 'selected' : '' }}>Színes</option>
                            <option value="0" {{ old('szines') == '0' ? 'selected' : '' }}>Fekete-fehér</option>
                        </select>
                    </div>
                    <!-- Hossz -->
                    <div class="col-md-6 mb-3">
                        <label for="hossz" class="form-label">Hossz (perc)*</label>
                        <input type="number" class="form-control" id="hossz" name="hossz" value="{{ old('hossz') }}" required>
                    </div>
                    <!-- Szinkron -->
                    <div class="col-md-4 mb-3">
                        <label for="szinkron" class="form-label">Szinkron*</label>
                        <input type="text" class="form-control" id="szinkron" name="szinkron" value="{{ old('szinkron') }}" required>
                    </div>
                    <!-- Származás -->
                    <div class="col-md-4 mb-3">
                        <label for="szarmazas" class="form-label">Származás</label>
                        <input type="text" class="form-control" id="szarmazas" name="szarmazas" value="{{ old('szarmazas') }}">
                    </div>
                    <!-- Műfaj -->
                    <div class="col-md-4 mb-3">
                        <label for="mufaj" class="form-label">Műfaj</label>
                        <input type="text" class="form-control" id="mufaj" name="mufaj" value="{{ old('mufaj') }}">
                    </div>
                </div>
                <div class="text-center mt-3">
                    <button type="submit" class="button button-lg radius-10">Film Mentése</button>
                    <a href="{{ route('crud.filmek.index') }}" class="btn btn-secondary ms-2">Mégsem</a>
                </div>
            </form>
        </div>
    </div>
  </div>
</section>
@endsection