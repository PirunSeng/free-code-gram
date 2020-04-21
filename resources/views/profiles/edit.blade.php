@extends('layouts.app')

@section('content')
<div class="container">
  <form action="/profiles/{{ $user->id }}" enctype="multipart/form-data" method="post">
    @csrf
    @method('PATCH')

    <div class="row">
      <h2>Edit Profile</h2>
    </div>
    <div class="form-group row">
      <label for="title" class="col-md-4 col-form-label">Title</label>

      <div class="col-md-6">
          <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') ?? $user->profile->title }}" required autocomplete="title">
          {{-- old('title') means if validation failed, rerender the form with previous filled value --}}
          @error('title')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
      </div>
    </div>
    <div class="form-group row">
      <label for="description" class="col-md-4 col-form-label">Description</label>

      <div class="col-md-6">
          <input id="description" type="text" class="form-control @error('description') is-invalid @enderror" name="description" value="{{ old('description') ?? $user->profile->description }}" required autocomplete="description">

          @error('description')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
      </div>
    </div>
    <div class="form-group row">
      <label for="url" class="col-md-4 col-form-label">URL</label>

      <div class="col-md-6">
          <input id="url" type="text" class="form-control @error('url') is-invalid @enderror" name="url" value="{{ old('url') ?? $user->profile->url }}" required autocomplete="url">

          @error('url')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
      </div>
    </div>
    {{-- <div class="form-group row">
      <label for="image" class="col-md-4 col-form-label">Profile image</label>
      <div class="col-md-6">
          <input id="image" type="file" class="form-control-file @error('image') is-invalid @enderror" name="image" value="{{ old('image') }}" required>

          @error('image')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
      </div>
    </div> --}}
    <div class="row pt-4">
      <button class="btn btn-primary">Update Profile</button>
    </div>
  </form>
</div>
@endsection
