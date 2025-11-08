@extends('layouts.main')
@section('title', 'Beérkezett üzenetek')
@section('content')
<!-- ======= Breadcrumbs ======= -->
<div class="breadcrumbs d-flex align-items-center" style="background-image: url('{{ asset('nova/img/breadcrumbs-bg.jpg') }}');">
  <div class="container position-relative d-flex flex-column align-items-center">
    <h2>Beérkezett üzenetek</h2>
    <ol>
      <li><a href="{{ route('home') }}">Főoldal</a></li>
      <li>Üzenetek</li>
    </ol>
  </div>
</div><!-- End Breadcrumbs -->
<!-- ======= Üzenetek Section ======= -->
<section id="messages" class="section-bg">
  <div class="container" data-aos="fade-up">
    <div class="section-header">
      <h2>Beérkezett üzenetek</h2>
      <p>Itt láthatod a "Kapcsolat" űrlapon keresztül küldött összes üzenetet, a legfrissebbel kezdve.</p>
    </div>
    <div class="row">
        <div class="col-lg-12">
            @if($messages->isEmpty())
                <div class="alert alert-info text-center">
                    Még nincsenek beérkezett üzenetek.
                </div>
            @else
                <table class="table table-striped table-hover">
                    <thead class="table-dark">
                        <tr>
                            <th>Küldés ideje</th>
                            <th>Név</th>
                            <th>E-mail</th>
                            <th>Tárgy</th>
                            <th>Üzenet</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($messages as $message)
                            <tr>
                                <!-- A created_at formázása, hogy olvashatóbb legyen -->
                                <td>{{ $message->created_at->format('Y-m-d H:i') }}</td>
                                <td>{{ $message->name }}</td>
                                <td>{{ $message->email }}</td>
                                <td>{{ $message->subject }}</td>
                                <!-- Az nl2br() megtartja az üzenetben lévő sortöréseket -->
                                <td>{!! nl2br(e($message->message)) !!}</td> 
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @endif
        </div>
    </div>
  </div>
</section><!-- End Üzenetek Section -->
@endsection