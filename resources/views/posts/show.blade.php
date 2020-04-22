@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
      <div class="col-6 py-2 px-5">
        <img src="/storage/{{ $post->image }}" class="w-100">
      </div>
      <div class="col-6">
        <div class="d-flex align-items-center">
          <div class="pr-3">
            <img style="max-width: 40px" class="w-100 rounded-circle" src="/storage/{{ $post->user->profile->image }}" alt="">
          </div>
          <div>
            <div class="font-weight-bold">
              <a href="/profiles/{{ $post->user->id }}">
                <span class="text-dark">{{ $post->user->username }}</span>
              </a>
            </div>
          </div>
        </div>
        <hr>
        <p>
          <span class="font-weight-bold">
            <a href="/profiles/{{ $post->user->id }}">
              <span class="text-dark">{{ $post->user->username }}</span>
            </a>
          </span> {{ $post->caption }}
        </p>
      </div>
    </div>
</div>
@endsection
