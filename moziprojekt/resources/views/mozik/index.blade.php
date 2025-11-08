@extends('layouts.main')
@section('title', 'Mozik Listája')
@section('content')
<!-- ======= Breadcrumbs ======= -->
<div class="breadcrumbs d-flex align-items-center" style="background-image: url('{{ asset('nova/img/breadcrumbs-bg.jpg') }}');">
  <div class="container position-relative d-flex flex-column align-items-center">
    <h2>Mozik</h2>
    <ol>
      <li><a href="{{ route('home') }}">Főoldal</a></li>
      <li>Adatbázis</li>
      <li>Mozik</li>
    </ol>
  </div>
</div><!-- End Breadcrumbs -->
<!-- ======= Mozik Section ======= -->
<section id="mozik-lista" class="section-bg">
  <div class="container" data-aos="fade-up">

    <div class="section-header">
      <h2>Összes mozi</h2>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <table class="table table-striped table-hover">
                <thead class="table-dark">
                    <tr>
                        <th>Név</th>
                        <th>Irányítószám</th>
                        <th>Cím</th>
                        <th>Telefon</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($mozik as $mozi)
                        <tr>
                            <td>{{ $mozi->mozinev }}</td>
                            <td>{{ $mozi->irszam }}</td>
                            <td>{{ $mozi->cim }}</td>
                            <td>{{ $mozi->telefon }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" class="text-center">Nincsenek mozik az adatbázisban.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
  </div>
</section><!-- End Mozik Section -->
@endsection

