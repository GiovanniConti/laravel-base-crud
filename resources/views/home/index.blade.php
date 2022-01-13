@extends('layouts.default')

{{-- Page Title --}}
@section('page_title', 'Home')

{{-- Main Content --}}
@section('main_content')
  
  <div class="container">
    <div class="row row-cols-1 row-cols-md-4 g-4">
      @foreach ($comics as $comic)
        <div class="col">
          <div class="card">
            <div class="card-img-container">
              <img class="card-img-top" src="{{ $comic['thumb']}}" alt="">
            </div>
            <div class="card-body">
              <h5 class="card-title">{{ $comic['title']}}</h5>
              <a href="">Dettagli</a>
              <a href="">Modifica</a>
            </div>
          </div>
        </div>
      @endforeach
    </div>
  </div>

@endsection