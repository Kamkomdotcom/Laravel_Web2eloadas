@extends('layouts.main')
@section('title', 'Filmek Listája')
@section('content')
<!-- ======= Breadcrumbs ======= -->
<div class="breadcrumbs d-flex align-items-center" style="background-image: url('{{ asset('nova/img/breadcrumbs-bg.jpg') }}');">
  <div class="container position-relative d-flex flex-column align-items-center">
    <h2>Filmek</h2>
    <ol>
      <li><a href="{{ route('home') }}">Főoldal</a></li>
      <li>Adatbázis</li>
      <li>Filmek</li>
    </ol>
  </div>
</div><!-- End Breadcrumbs -->
<!-- ======= Filmek Section ======= -->
<section id="filmek-lista" class="section-bg">
  <div class="container" data-aos="fade-up">
    <div class="section-header">
      <h2>Összes film</h2>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <table class="table table-striped table-hover">
                <thead class="table-dark">
                    <tr>
                        <th>Cím</th>
                        <th>Színes?</th>
                        <th>Szinkron</th>
                        <th>Származás</th>
                        <th>Műfaj</th>
                        <th>Hossz (perc)</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($filmek as $film)
                        <tr>
                            <td>{{ $film->filmcim }}</td>
                            <td>{{ $film->szines ? 'Igen' : 'Nem' }}</td>
                            <td>{{ $film->szinkron }}</td>
                            <td>{{ $film->szarmazas }}</td>
                            <td>{{ $film->mufaj }}</td>
                            <td>{{ $film->hossz }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="text-center">Nincsenek filmek az adatbázisban.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
  </div>
</section><!-- End Filmek Section -->
@endsection
