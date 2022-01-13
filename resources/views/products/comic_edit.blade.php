@extends('layouts.default')

{{-- Page Title --}}
@section('page_title', 'Edit Comic')

{{-- Main Content --}}
@section('main_content')

  <div class="container">
    <h1 class="text-danger">Edit Comic</h1>

    <form action="{{ route("comics.update", $comic->id) }}" method="post">
      @csrf
      @method('PUT')

      <div class="mb-3">
        <label for="field_thumb" class="form-label">Image</label>
        <input type="text" class="form-control {{ $errors->has("thumb") ? 'is-invalid' : '' }}" name="thumb" id="field_thumb">
      </div>

      <div class="mb-3">
        <label for="field_title" class="form-label">Title</label>
        <input type="text" class="form-control {{ $errors->has("title") ? 'is-invalid' : '' }}" name="title" id="field_title">
      </div>

      <div class="mb-3">
        <label for="field_series" class="form-label">Series</label>
        <input type="text" class="form-control {{ $errors->has("series") ? 'is-invalid' : '' }}" name="series"
          id="field_series">
      </div>

      <div class="mb-3">
        <label for="field_price" class="form-label">Price</label>
        <input type="text" class="form-control {{ $errors->has("price") ? 'is-invalid' : '' }}" name="price"
          id="field_price">
      </div>

      <div class="mb-3">
        <label for="field_description" class="form-label">Description</label>
        <input type="text" class="form-control {{ $errors->has("description") ? 'is-invalid' : '' }}" name="description"
          id="field_description">
      </div>

      <div class="mb-3">
        <label for="field_sale_date" class="form-label">Release date</label>
        <input type="text" class="form-control {{ $errors->has("sale_date") ? 'is-invalid' : '' }}" name="sale_date"
          id="field_sale_date">
      </div>

      <div class="mb-3">
        <label for="field_type" class="form-label">Type</label>
        <input type="text" class="form-control {{ $errors->has("type") ? 'is-invalid' : '' }}" name="type"
          id="field_type">
      </div>

      <div class="text-center">
        <button class="btn btn-success" type="submit">Save</button>
      </div>

    </form>
  </div>

@endsection