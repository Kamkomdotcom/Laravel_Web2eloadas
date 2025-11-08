@extends('layouts.main')
@section('title', 'Vezérlőpult')
@section('content')
<!-- ======= Breadcrumbs ======= -->
<div class="breadcrumbs d-flex align-items-center" style="background-image: url('{{ asset('nova/img/breadcrumbs-bg.jpg') }}');">
  <div class="container position-relative d-flex flex-column align-items-center">
    <h2>Vezérlőpult</h2>
    <ol>
      <li><a href="{{ route('home') }}">Főoldal</a></li>
      <li>Vezérlőpult</li>
    </ol>
  </div>
</div><!-- End Breadcrumbs -->
<section id="dashboard" class="section-bg">
    <div class="container" data-aos="fade-up">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card p-4 p-md-5 border-0 shadow-sm rounded-3">
                    <div class="card-body">
                        <h2 class="text-center mb-4">Sikeresen bejelentkeztél!</h2>
                        <div class="alert alert-success">
                            Üdvözlünk, <strong>{{ Auth::user()->name }}</strong>!
                        </div>
                        <p class="lead text-center mt-4">Most már hozzáférsz a védett menüpontokhoz:</p>
                        <div class="list-group mt-3">
                            <a href="{{ route('uzenetek') }}" class="list-group-item list-group-item-action">
                                <i class="lni lni-envelope me-2"></i> Elküldött üzenetek megtekintése
                            </a>
                            <a href="{{ route('crud.filmek.index') }}" class="list-group-item list-group-item-action">
                                <i class="lni lni-pencil-alt me-2"></i> Filmek kezelése (CRUD)
                            </a>
                            @if(Auth::user()->role == 'admin')
                                <a href="{{ route('admin') }}" class="list-group-item list-group-item-action list-group-item-danger mt-3">
                                    <i class="lni lni-shield me-2"></i> <strong>Admin felület</strong> megtekintése
                                </a>
                            @endif
                        </div>
                        <div class="text-center mt-4">
                            <!-- Kijelentkezés gomb -->
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <a href="{{ route('logout') }}"
                                        class="button button-primary"
                                        onclick="event.preventDefault();
                                                    this.closest('form').submit();">
                                    Kijelentkezés
                                </a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection