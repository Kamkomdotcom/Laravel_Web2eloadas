@extends('layouts.main')
@section('title', 'Filmek Kezelése (CRUD)')
@section('content')
<!-- ======= Breadcrumbs ======= -->
<div class="breadcrumbs d-flex align-items-center" style="background-image: url('{{ asset('nova/img/breadcrumbs-bg.jpg') }}');">
  <div class="container position-relative d-flex flex-column align-items-center">
    <h2>Filmek Kezelése (CRUD)</h2>
    <ol>
      <li><a href="{{ route('home') }}">Főoldal</a></li>
      <li><a href="{{ route('dashboard') }}">Dashboard</a></li>
      <li>Filmek CRUD</li>
    </ol>
  </div>
</div><!-- End Breadcrumbs -->
<section id="crud-lista" class="section-bg">
  <div class="container" data-aos="fade-up">
    <div class="section-header">
      <h2>Filmek listája</h2>
      <p>Itt kezelheted a filmeket: létrehozhatsz újat, szerkesztheted a meglévőket, vagy törölheted őket.</p>
    </div>
    <!-- Új Film Létrehozása Gomb -->
    <div class="mb-3"> <a href="{{ route('crud.filmek.create') }}" class="button button-lg radius-10">Új Film Létrehozása</a></div>
    <!-- Sikerüzenet (pl. törlés vagy szerkesztés után) -->
    @if (session('success'))
        <div class="alert alert-success"> {{ session('success') }} </div>
    @endif
    <div class="row">
        <div class="col-lg-12">
            <table class="table table-striped table-hover">
                <thead class="table-dark">
                    <tr>
                        <th>Cím</th>
                        <th>Színes?</th>
                        <th>Szinkron</th>
                        <th>Hossz</th>
                        <th style="width: 200px;">Műveletek</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($filmek as $film)
                        <tr>
                            <td>{{ $film->filmcim }}</td>
                            <td>{{ $film->szines ? 'Igen' : 'Nem' }}</td>
                            <td>{{ $film->szinkron }}</td>
                            <td>{{ $film->hossz }} perc</td>
                            <td>
                                <!-- Művelet gombok -->
                                <a href="{{ route('crud.filmek.edit', ['filmek' => $film->fkod]) }}" class="btn btn-primary btn-sm">Szerkesztés</a>
                                <form action="{{ route('crud.filmek.destroy', ['filmek' => $film->fkod]) }}" method="POST" class="d-inline" onsubmit="return confirm('Biztosan törölni szeretnéd ezt a filmet: {{ $film->filmcim }}?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">Törlés</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="text-center">Még nincsenek filmek az adatbázisban. <a href="{{ route('crud.filmek.create') }}">Kattints ide egy létrehozásához!</a></td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

  </div>
</section>

@endsection