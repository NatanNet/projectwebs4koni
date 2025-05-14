@extends('layouts.app')

@section('content')
  <div class="container py-5">
    <h2>{{ $event->title }}</h2>
    <img src="{{ asset('storage/' . $event->image) }}" class="img-fluid" alt="{{ $event->title }}">
    
    <p class="mt-3"><strong>Date:</strong> {{ $event->date }}</p>
    
    <h5>Description</h5>
    <p>{{ $event->description }}</p>

    <a href="{{ route('events.index') }}" class="btn btn-secondary">Back to Events</a>
  </div>
@endsection
