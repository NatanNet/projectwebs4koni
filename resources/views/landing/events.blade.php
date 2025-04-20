@extends('layouts.app')

@section('content')
<div class="container py-5">
  <h2>All Events</h2>
  @foreach($events as $event)
    <div class="mb-3">
      <strong>{{ $event['title'] }}</strong>
      <div>Date: {{ $event['date'] }}</div>
    </div>
  @endforeach
</div>
@endsection
