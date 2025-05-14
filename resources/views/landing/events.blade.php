@extends('layouts.app')

@section('content')
  <div class="container py-5">
    <h2 class="text-center mb-4">Upcoming Events</h2>

    @if(session('success'))
      <div class="alert alert-success">
        {{ session('success') }}
      </div>
    @endif

    <div class="row">
      @foreach($events as $event)
        <div class="col-md-4 mb-4">
          <div class="card">
            <a href="{{ route('events.show', $event->id) }}">
              <img src="{{ asset('storage/' . $event->image) }}" class="card-img-top" alt="{{ $event->title }}">
            </a>
            <div class="card-body text-center">
              <h5 class="card-title">{{ $event->title }}</h5>
              <p class="card-text">Date: {{ $event->date }}</p>
            </div>
          </div>
        </div>
      @endforeach
    </div>
  </div>
@endsection
