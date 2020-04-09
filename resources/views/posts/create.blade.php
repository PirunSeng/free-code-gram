@extends('layouts.app')

@section('content')
<div class="container">
  <h2>POST</h2>
  <div class="row">
    <div class="col-8 offset-2">
      <form action="/p" enctype="multipart/form-data" method="post">
        @csrf
        <div class="row">
          <h2>Add New Post</h2>
        </div>
        <div class="form-group row">
          <label for="caption" class="col-md-4 col-form-label">Post Caption</label>

          <div class="col-md-6">
              <input id="caption" type="text" class="form-control @error('caption') is-invalid @enderror" name="caption" value="{{ old('caption') }}" required autocomplete="caption">

              @error('caption')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
          </div>
        </div>
        <div class="form-group row">
          <label for="image" class="col-md-4 col-form-label">Post image</label>
          <div class="col-md-6">
              <input id="image" type="file" class="form-control-file @error('image') is-invalid @enderror" name="image" value="{{ old('image') }}" required>

              @error('image')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
          </div>
        </div>
        <div class="row pt-4">
          <button class="btn btn-primary">Add new post</button>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection
