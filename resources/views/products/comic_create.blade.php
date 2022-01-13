@extends('layouts.default')

{{-- Page Title --}}
@section('page_title', 'Add Comic')

{{-- Main Content --}}
@section('main_content')

  <div class="container">
    <h1 class="text-danger">Add New Comic</h1>

    <form action="" method="post">
      @csrf

      <div class="mb-3">
        <label for="field_title" class="form-label">Title</label>
        <input type="text" class="form-control {{ $errors->has("title") ? 'is-invalid' : '' }}" name="title" id="field_title">
      </div>

      <div class="mb-3">
        <label for="field_price" class="form-label">Price</label>
        <input type="text" class="form-control {{ $errors->has("price") ? 'is-invalid' : '' }}" name="price"
          id="field_price">
      </div>

      <div class="mb-3">
        <label for="field_series" class="form-label">Series</label>
        <input type="text" class="form-control {{ $errors->has("series") ? 'is-invalid' : '' }}" name="series"
          id="field_series">
      </div>

      <div class="text-center">
        <button class="btn btn-danger" type="reset ">Reset</button>
        <button class="btn btn-success" type="submit">Create</button>
      </div>

    </form>
  </div>

@endsection