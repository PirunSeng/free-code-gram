@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
      <div class="col-3 py-2 px-5">
        <img class="w-100 rounded-circle" src="{{ $user->profile->imagePath() }}" alt="">
      </div>
      <div class="col-9">
        <div class="d-flex justify-content-between align-items-baseline">
          <h1>{{ $user->username }}</h1>
          @can('update', $user->profile)
            <a href="/p/create">Add new post</a>
          @endcan
        </div>

        @can('update', $user->profile)
          <a href="/profiles/{{ $user->id }}/edit">Edit Profile</a>
        @endcan

        <div class="d-flex">
          <div class="pr-4"><strong>{{ $user->posts->count() }}</strong> posts</div>
          <div class="pr-4"><strong>15k</strong> followers</div>
          <div class="pr-4"><strong>210</strong> following</div>
        </div>
        <div><strong>{{ $user->profile->title }}</strong></div>
        <div>{{ $user->profile->description ?? 'N/A' }}</div>
        <div><a href="https://www.freecodecamp.org/">{{ $user->profile->url }}</a></div>
      </div>
    </div>
    <div class="row pt-5">
      @foreach($user->posts as $post)
        <div class="col-4 pb-4">
          <a href="/p/{{ $post->id }}">
            <img width="260px" src="/storage/{{ $post->image }}" alt="">
          </a>
        </div>
      @endforeach
    </div>
</div>
@endsection
