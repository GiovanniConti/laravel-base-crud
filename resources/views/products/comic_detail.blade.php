@extends('layouts.default')

{{-- Page Title --}}
@section('page_title', '{{ $comic->title}}')

{{-- Main Content --}}
@section('main_content')

  <div class="container">
    <section class="hero py3">
      <div class="hero-container container text-center">
        <img class="" src="{{ $comic->thumb }}" alt="">
      </div>
    </section>

    <h1 class="">{{$comic->title}}</h1>
    <h4>{{ $comic->series }}</h4>
    <h4>Price: {{ $comic->price }}</h4>
    <p>Description: {{ $comic->description }}</p>
  </div>

@endsection