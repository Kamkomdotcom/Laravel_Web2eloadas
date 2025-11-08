@extends('layouts.main')
@section('title', 'Vetítések Listája')
@section('content')
<div class="breadcrumbs d-flex align-items-center" style="background-image: url('{{ asset('nova/img/breadcrumbs-bg.jpg') }}');">
  <div class="container position-relative d-flex flex-column align-items-center">
    <h2>Vetítések (Helyek)</h2>
    <ol>
      <li><a href="{{ route('home') }}">Főoldal</a></li>
      <li>Adatbázis</li>
      <li>Vetítések</li>
    </ol>
  </div>
</div>
<!-- ======= Vetítések Section ======= -->
<section id="helyek-lista" class="section-bg">
  <div class="container" data-aos="fade-up">

    <div class="section-header">
      <h2>Összes vetítés (A 3 tábla összekapcsolva)</h2>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <table class="table table-striped table-hover">
              <thead class="table-dark">
                <tr>
                  <th>Film címe (film tábla)</th>
                  <th>Mozi neve (mozi tábla)</th>
                  <th>Mozi címe (mozi tábla)</th>
                </tr>
              </thead>
              <tbody>
                  @forelse($helyek as $hely)
                      <tr>
                          <td>{{ $hely->film?->filmcim ?? 'Ismeretlen film' }}</td>
                          <td>{{ $hely->mozi?->mozinev ?? 'Ismeretlen mozi' }}</td>
                          <td>{{ $hely->mozi?->cim ?? 'Ismeretlen cím' }}</td>
                      </tr>
                  @empty
                      <tr>
                          <td colspan="3" class="text-center">Nincsenek vetítések az adatbázisban.</td>
                      </tr>
                  @endforelse
              </tbody>
            </table>
        </div>
    </div>
  </div>
</section>
@endsection