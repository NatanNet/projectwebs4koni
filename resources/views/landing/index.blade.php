<!-- resources/views/landing/index.blade.php -->
@extends('layouts.app')

@section('content')

<!-- HERO / BAGIAN ATAS DENGAN BACKGROUND + SEARCH BAR -->
<section class="hero-section position-relative">
   <!-- Tambahkan file lain jika ada -->
   <link href="{{ asset('css/landing.css') }}" rel="stylesheet">
  <div class="hero-overlay"></div>
  <div class="hero-content text-center">
    <h1 class="fw-bold">Olahraga Sayaaa</h1>
    <p class="lead mb-4">Explore the vibrant events happening locally and globally</p>

    <!-- SEARCH FORM -->

    <!-- <div class="d-flex justify-content-center"> -->
      <form action="{{ route('search') }}" method="GET"> 
      <div class="input-group" style="max-width: 500px;">
        <input type="text" class="form-control" placeholder="Search Events, Categories, Location...">
        <button class="btn btn-primary">Search</button>
      </div>
    </div>
  </div>
</section>

<!-- SECTION: UPCOMING EVENTS (ada 3 Gambar) -->
<section id="upcoming-events" class="py-5">
  <div class="container">
    <h2 class="text-center mb-4">Upcoming Events</h2>
    <div class="row">
      @foreach($upcomingEvents as $index => $event)
      <div class="col-md-4 mb-4">
        <div class="card h-100">
          <a href="{{ route('events.show', ['event' => $event['id']]) }}">
            <!-- Gambar  -->
            <img src="{{ asset('images/' . ($index == 0 ? 'btangkis2.jpeg' : ($index == 1 ? 'soccer3.jpeg' : 'basket6.jpg'))) }}" class="card-img-top" alt="Event Image">
          </a>
          <div class="card-body text-center">
            <h5 class="card-title">{{ $event['title'] }}</h5>
            <p class="card-text">Date: {{ $event['date'] }}</p>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</section>


<!-- SECTION: SPORTS CATEGORIES (Secara Vertikal) -->
<section id="Sports" class="py-5">
  <div class="container">
    <h2 class="text-center mb-4">Popular Sports</h2>
    <div class="row">
      @foreach($sportsCategories as $index => $sports)
      <div class="col-md-4 mb-4">
        <div class="card h-100 text-center">
          <a href="{{ route('sports.show', ['id' => $sports['id']]) }}">
            <!-- Gambar berdasarkan urutan -->
            <img src="{{ asset('images/' . ($index == 0 ? 'soccer1.jpeg' : ($index == 1 ? 'basket10.jpg' : 'maraton.jpg'))) }}" class="card-img-top" alt="{{ $sports['name'] }}">
          </a>
          <div class="card-body">
            <h5 class="card-title">{{ $sports['name'] }}</h5>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</section>



@endsection
