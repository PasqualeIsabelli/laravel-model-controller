@extends('layouts.public')

@section('title', 'Laravel Model Controller')

@section('content')
  <div class="container">
    <div class="row row-cols-3">
      @foreach($movies as $movie)
      <div class="card mt-5 border-0">
        <img src="/img/clapperboard-film-logo-icon-design-template-vector-isolated-png_236642.jpg" alt="">
        <div class="card-body">
          <h5 class="card-title text-white">Titolo: <span class="fw-bold">{{ $movie['title'] }}</span></h5>
          <p class="card-text text-white mt-4">Titolo Originale: <span class="fw-bold">{{ $movie['original_title'] }}</span></p>
          <p class="card-text text-white">Nazionalità: <span class="fw-bold">{{ $movie['nationality'] }}</span></p>
          <p class="card-text text-white">Voto: <span class="fw-bold">{{ $movie['vote'] }}</span></p>
        </div>
      </div>
      @endforeach     
    </div>
  </div>
@endsection