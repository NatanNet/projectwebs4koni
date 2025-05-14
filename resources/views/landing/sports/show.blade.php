@extends('layouts.app')

@section('content')
<section class="py-5">
  <div class="container">
    <h1>{{ $sports['title'] }}</h1>
    <img src="{{ asset('images/' . $sports['image']) }}" class="img-fluid mb-4" alt="{{ $sports['title'] }}">
    <p><strong>Date:</strong> {{ $sports['date'] }}</p>
    <p>{{ $sports['description'] }}</p>
    <a href="{{ url()->previous() }}" class="btn btn-secondary mt-3">Back</a>
  </div>
</section>
@endsection
