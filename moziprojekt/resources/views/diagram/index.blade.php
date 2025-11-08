@extends('layouts.main')
@section('title', 'Diagram')
@section('content')
<!-- ======= Breadcrumbs ======= -->
<div class="breadcrumbs d-flex align-items-center" style="background-image: url('{{ asset('nova/img/breadcrumbs-bg.jpg') }}');">
  <div class="container position-relative d-flex flex-column align-items-center">
    <h2>Diagram</h2>
    <ol>
      <li><a href="{{ route('home') }}">Főoldal</a></li>
      <li>Diagram</li>
    </ol>
  </div>
</div><!-- End Breadcrumbs -->
<section id="diagram-page" class="section-bg">
  <div class="container" data-aos="fade-up">
    <div class="section-header">
      <h2>Vetítések száma filmenként</h2>
      <p>Az adatbázis adatai alapján generált diagram.</p>
    </div>
    <div class="row">
        <div class="col-lg-10 offset-lg-1">
            <canvas id="myChart"></canvas>
        </div>
    </div>
  </div>
</section>
@endsection
@push('scripts')
<!-- Betöltjük a Chart.js könyvtárat a CDN-ről -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<!-- Létrehozzuk a diagramot -->
<script>
    document.addEventListener("DOMContentLoaded", function() { // Várjuk meg, amíg a dokumentum betöltődik
        // Megkeressük a <canvas> html elemet
        const ctx = document.getElementById('myChart');
        const labels = @json($labels);
        const data = @json($data);
        // Létrehozzuk az új diagramot
        new Chart(ctx, {
            type: 'bar',
            data: {
                labels: labels, //filmcímek
                datasets: [{
                    label: '# vetítések száma',
                    data: data, //vetítésszámok
                    backgroundColor: 'rgba(54, 162, 235, 0.6)',
                    borderColor: 'rgba(54, 162, 235, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                },
                responsive: true
            }
        });
    });
</script>
@endpush