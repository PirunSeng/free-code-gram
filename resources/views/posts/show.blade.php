@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
      <div class="col-6 py-2 px-5">
        <img src="/storage/{{ $post->image }}" class="w-100">
      </div>
      <div class="col-6">
        <div>
          <h3>{{ $post->user->username }}</h3>
          <p>{{ $post->caption }}</p>
        </div>
      </div>
    </div>
</div>
@endsection
