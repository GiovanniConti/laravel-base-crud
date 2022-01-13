@extends('layouts.default')

{{-- Page Title --}}
@section('page_title', 'Home')

{{-- Main Content --}}
@section('main_content')
  
  <div class="container text-end">

    <a class="btn btn-danger my-5 fs-4" href="{{route('comics.create')}}">Add Comic</a>

    <div class="row row-cols-1 row-cols-md-4 g-4 text-start">
      @foreach ($comics as $comic)
        <div class="col">
          <div class="card">
            <div class="card-img-container">
              <img class="card-img-top" src="{{ $comic['thumb']}}" alt="">
            </div>
            <div class="card-body">
              <h5 class="card-title">{{ $comic['title']}}</h5>
              <div class="container-card-links d-flex justify-content-evenly">
                <a class="card-link" href="{{route('comics.show', $comic['id'])}}">Details</a>
                <a class="card-link" href="">Edit</a>
              </div>
            </div>
          </div>
        </div>
      @endforeach
    </div>
  </div>

@endsection